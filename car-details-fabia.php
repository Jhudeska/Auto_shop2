<?php

    require_once 'header.php';
    require_once 'Calculator.php';

;?>

    <div class="container px-0 mx-0">
        <div class="row py-4 my-4">
            <div class="col-12 col-sm-6 col-md-4 mb-5 py-0 my-0">
                <div class="model-preview-block model-preview-block-details">
                    <div class="model-preview-car-details-page model-preview-car-details-page-first">
                        <div class="car-details-title">FABIA HATCHBACK</div>
                        <div class="car-details-type">Active</div>
                    </div>
                    <div class="modal-car-details-image"><img src="img/Skoda_Fabia.jpg" alt="Fabia foto"></div>
                    <div class="modal-text-box">
                        <div class="description-bold-special">Standaard op de Active:</div>
                        <div class="description-special"> Laadruimte tot 1.150 liter</div>
                        <div class="description-special"> LED-daverlichting</div>
                        <div class="description-special"> 6 Airbags</div>
                        <div class="description-bold"> Stoere basis</div>
                        <div class="description-margin">Vanaf €15.830</div>
                        <button class="btn btn-green">Bestel deze variant</button>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-md-4">
                <div class="model-preview-block model-preview-block-details">
                    <div class="model-preview-car-details-page model-preview-car-details-page-middle">
                        <div class="car-details-title">FABIA HATCHBACK</div>
                        <div class="car-details-type">Business Edition</div>
                    </div>
                    <div class="modal-car-details-image"><img src="img/Skoda_Fabia.jpg" alt="Fabia foto"></div>
                    <div class="modal-text-box">
                        <div class="description-bold-special">Extra's bovenop de Active:</div>
                        <div class="description-special"> Climate Control</div>
                        <div class="description-special"> DAB (Digitale radio)</div>
                        <div class="description-special"> Parkeersensoren achter</div>
                        <div class="description-bold"> Actiemodel</div>
                        <div class="description-margin">Vanaf €18.330</div>
                        <button class="btn btn-green">Vraag aan!</button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="model-preview-block model-preview-block-details">
                    <div class="model-preview-car-details-page model-preview-car-details-page-last">
                        <div class="car-details-title">FABIA HATCHBACK</div>
                        <div class="car-details-type">Monte Carlo</div>
                    </div>
                    <div class="modal-car-details-image"><img src="img/Skoda_Fabia.jpg" alt="Fabia foto"></div>
                    <div class="modal-text-box">
                        <div class="description-bold-special">Extra's bovenop de Active:</div>
                        <div class="description-special"> Bluethooth telefoonverbinding</div>
                        <div class="description-special"> Amundsen</div>
                        <div class="description-special"> Parkeersensoren achter</div>
                        <div class="description-bold"> Business deal</div>
                        <div class="description-margin">Vanaf €20.290</div>
                        <button class="btn btn-green">Versturen</button>
                    </div>
                </div>
            </div>

        </div>



        <section class="calculator-section">
                    <div class="calculator-block">

                        <form action="#" method="get" class="row calculator-form">
                            <div class=" form-row col-12">
                                <div class="heading-primary">
                                    <h1 class="heading-calc">Ik ontvang graag een offerte Skoda Fabia Hatchback </h1>
                                    <h1 class="heading-calc">Business Edition </h1>
                                </div>
                            </div>



                            <div class=" form-row justify-content-center col-sm-12 col-md-6">

                            <label for="credit-amount" class=" col-form-label text-center col-6" disabled>Aanschaf (ex. BTW)</label>
                            <input type="text" class="bg-light-gray justify-content-center col-4" name="val3" id="credit-amount">

                                <label for="credit-amount" class=" col-form-label text-center  col-6" >Aanbetaling</label>
                                <input type="text" class=" my-1 col-4" name="val1" id="credit-amount">

                                <label for="credit-amount" class=" col-form-label text-center   col-6" >Slottermijn</label>
                                <input type="text" class=" my-1  col-4" name="val3" id="credit-amount">


                            <label for="months" class="col-form-label text-center  col-6">Looptijd (mnd):</label>
                            <select  class="bg-light-gray col-4 my-1" name="val4" id="months">
                                <option value="jan">1</option>
                                <option value="feb">2</option>
                                <option value="mrt">3</option>
                                <option value="apr">4</option>
                                <option value="mei">5</option>
                                <option value="jun">6</option>
                                <option value="jul">7</option>
                                <option value="aug">8</option>
                                <option value="sept">9</option>
                                <option value="okt">10</option>
                                <option value="nov">11</option>
                                <option value="dec">12</option>
                            </select>

                                <label for="showMonthlyPayment_text" class=" col-form-label text-center col-6 description-bold showMonthlyPayment_text" >Your monthly payment amount:</label>
                                <p class="justify-content-center col-4" id="showMonthlyPayment_text"></p>
                            </div>

                            <div class=" form-row justify-content-center align-items-center col-12 col-sm-12 col-md-6 ">
                                <div class="container-leaseamount ">
                                    <p class="font-weight-bold display-4 txt-leaseamount"> €1445,- </p>
                                    <p class="txt-leaseamount description-bold"> Is dit uw lease bedrag per maand? </p>
                                    <p class="txt-leaseamount">Wij willen u graag een verblijvende </p>
                                    <p class="txt-leaseamount">offerte aanbieden. </p>
                                </div>
                            </div>









                            <div class="form-row justify-content-center pl-4 col-12 col-md-10">
                                     <h1 class="txt-form-personal">  VUL JE GEGEVENS IN </h1>
                            </div>

                                <div class="form-row justify-content-center col-12">
                                    <div class="form-row text-center col-4">
                                        <label class="mr-4" for="aanhef" class="radio form-label">Aanhef<sup>*</sup></label>
                                    </div>
                                        <div class="form-row text-center col-6">
                                            <input class="mr-2" type="radio" checked="checked" name="radio" id="aanhef"> Dhr.
                                            <input class="mr-2 ml-4" type="radio" name="radio" id="aanhef"> Mevr.
                                            <span class="checkmark"></span>
                                        </div>


                                        <div class="form-row text-center col-4">
                                            <label for="fname" class="form-label "">Voorletters</label><sup>*</sup>
                                        </div>
                                        <div class="form-row text-center col-6">
                                            <input class="form-control form-control-sm " type="text" id="fname" name="firstname" placeholder="Voorletters">

                                        </div>


                                    <div class="form-row text-center col-4">
                                        <label for="fname">Achternaam</label><sup>*</sup>
                                    </div>
                                    <div class="form-row text-center col-6">
                                        <input class="form-control form-control-sm" type="text" id="fname" name="firstname" placeholder="Achternaam">

                                    </div>

                                    <div class="form-row text-center col-4">
                                        <label for="fname">Telefoonnummer</label><sup>*</sup>
                                    </div>
                                    <div class="form-row text-center col-6">
                                        <input class="form-control form-control-sm" type="text" id="fname" name="firstname" placeholder="0612345678">

                                    </div>
                                    <div class="form-row text-center col-4">
                                        <label for="fname">Emailadres</label><sup>*</sup>
                                    </div>
                                    <div class="form-row text-center col-6">
                                        <input class="form-control form-control-sm" type="text" id="fname" name="firstname" placeholder="Emailadres">

                                    </div>

                                    <div class="form-row justify-content-center col-12">
                                        <div class="form-row text-center col-4">
                                            <label class="mr-4" for="ruilen" class="radio form-label">Autoruilen</label>
                                        </div>
                                        <div class="form-row text-center col-6">
                                            <input class="mr-2" type="radio" checked="checked" name="radio" id="ruilen"> Ja
                                            <input class="mr-2 ml-4" type="radio" name="radio" id="ruilen"> Nee
                                            <span class="checkmark"></span>
                                        </div>

                                        <input class="btn btn-green btn-left" type="submit" name="submit" value="Versturen"  onclick="" onClick="javascript:showMonthlyPayment();">
                            </form>

            </div>
    </div>
    </div>
    </section>
    </div>





<?php require_once 'footer.php';?>