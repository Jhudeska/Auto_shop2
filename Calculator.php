<?php
/**
 * Created by PhpStorm.
 * User: Jhudeska
 * Date: 2019-05-17
 * Time: 13:54
 */

class Calculator
{

    //Monthly payment calculator function
    function PMT($rate = 0,  $months = 0, $creditAmount = 0, $residual = 0)
    {
        if(!is_null($rate) && $rate != 0) {
            return (-$residual - $creditAmount * pow(1 + $rate, $months)) / (1 + $rate * 0) / ((pow(1 + $rate, $months) - 1) / $rate);
        } else {
            return (-$creditAmount - $residual) / $months;
        }
    }




//                    <?php
//                            $val1 = htmlentities($_POST['AB']);
//                            $val2 = htmlentities($_POST['LT']);
//                            $val3 = htmlentities($_POST['AS']);
//                            $val4 = htmlentities($_POST['ST']);
//
//                            $creditAmount = $val3 - $val1;
//                            $monthlyPayment = ceil(PMT(6.99/1200,$val2, -$creditAmount, $val4));
//
//                            echo $monthlyPayment;
//
//
}