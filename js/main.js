

    jQuery(document).ready(function() {
        jQuery("input").on("change", function() {
            showMonthlyPayment();
        });
    });

function showMonthlyPayment(str) {

    var url = '../getamount.php';
    var AB = document.getElementById('val1').value; //Aanbetaling = AB
    var LT = document.getElementById('val2').value; //Looptijd = LT
    var AS = document.getElementById('val3').value; //Aanschaf = A;
    var ST = document.getElementById('val4').value; //Slottermijn

    if(AB,LT,AS,ST) {


        var urlLink = "AB=" + AB + "&LT=" + LT + "&AS=" + AS + "&ST=" + ST;

        if (str == "") {
            document.getElementById("showMonthlyPayment_text").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();


            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var return_data = xmlhttp.responseText;
                    document.getElementById("showMonthlyPayment_text").innerHTML = return_data;
                }
            };
            xmlhttp.open("POST", url, true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(urlLink);
            document.getElementById("showMonthlyPayment_text").innerHTML = "processing...";
        }
    }
}
