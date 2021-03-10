@extends('layout.main_layout')

@section('content')
    <div class="container mt-5 logo-wrapper">
        <div class="row">
            <div class="col-2 col-md-1 sl-log">
                <img src="https://trace.southernleyte.org.ph/assets/img/SouthernLeyteLogo.png" width="70" height="70" class="" alt="" srcset="">
            </div>

            <div class="col p-lg-0 sl-txt">
                <h4 class="text-heading pl-2 pr-2 ml-3"> <strong> COVID-19 VACCINATION PROGRAM </strong></h4>
            </div>
        </div>
    </div>

    <div id="alert-box" style="display:none; margin-bottom: 2rem !important" class="mt-2 container alert alert-danger" role="alert">
    </div>

    <div class="container info-heading-text-screening mb-5 mt-4">
        <div class="row">
            <div class="col-md-12 px-md-0 px-sm-4">
                <form action="" name="registerForm" id="registerForm" method="post">
                    <div class="form pt-4 pr-4 pb-4 pl-4">
                        <input type="hidden" name="qr_code" id="qr_code" value="">
                        <div class="row mt-1">
                            <!-- age -->
                            <div class="col-md-12">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="age">
                                    <p class="ml-3 mt-2 pt-1">Age more than 16 yrs. old?</p>
                                </div>
                            </div>

                            <!-- allergic reaction -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="alergic_reaction">
                                    <p class="ml-3 mt-2 pt-1">Has no severe allergic reaction after 1st dose of the vaccine?</p>
                                </div>
                            </div>

                            <!-- no allergy to food -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="food_allergy">
                                    <p class="ml-3 mt-2 pt-1">Has no allergy to food, egg, medicines, and no asthma?</p>
                                </div>
                                <div class="d-flex justify-content-start ml-5">
                                    <input type="checkbox" class="checkbox" name="vaccinator_monitor_patient">
                                    <p class="ml-3 mt-2 pt-1">If with allergy or asthma, will the vaccinator able to monitor the patient for 30 minutes?</p>
                                </div>
                            </div>

                            <!-- history of bleeding -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="bleeding_history">
                                    <p class="ml-3 mt-2 pt-1">Has no history of bleeding disorders or currently taking anti-coagulants?</p>
                                </div>
                                <div class="d-flex justify-content-start ml-5">
                                    <input type="checkbox" class="checkbox" name="is_syringe_available">
                                    <p class="ml-3 mt-2 pt-1">If with bleeding history, is gauge 23-25 syringe available for injection?</p>
                                </div>
                            </div>

                            <!-- does not manifest any symptoms -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="manifest_symptoms">
                                    <p class="ml-3 mt-2 pt-1">Does not manifest any of the following symptoms: Fever/chills, Headache, Cough, Colds, 
                                    Sore Throat, Myalga, Fatigue, Weakness, Loss of smell/taste, Diarrhea,
                                    Shortness of breath/difficulty in breathing?</p>
                                </div>
                                <div class="d-flex justify-content-start ml-4 pl-2">
                                    
                                    <div>
                                        <p class="ml-3 mt-2 pt-1">* If manifesting any of the mentioned symptom/s, specify all that apply</p>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="fever_chills" value="Fever/chills">
                                            <p class="ml-3 mt-2 pt-1">Fever/Chills</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="headache" value="Headache">
                                            <p class="ml-3 mt-2 pt-1">Headache</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="cough" value="Cough">
                                            <p class="ml-3 mt-2 pt-1">Cough</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="colds" value="Colds">
                                            <p class="ml-3 mt-2 pt-1">Colds</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="sore_throat" value="Soar Throat">
                                            <p class="ml-3 mt-2 pt-1">Soar Throat/p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="myalga" value="Myalga">
                                            <p class="ml-3 mt-2 pt-1">Myalga</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="fatigue" value="Fatigue">
                                            <p class="ml-3 mt-2 pt-1">Fatigue</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="weakness" value="Weakness">
                                            <p class="ml-3 mt-2 pt-1">Weakness</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="smell_taste" value="Loss of smell/taste">
                                            <p class="ml-3 mt-2 pt-1">Loss of smell/taste</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="diarrhea" value="Diarrhea">
                                            <p class="ml-3 mt-2 pt-1">Diarrhea</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="breathing_problem" value="Shortness of breath/difficulty in breathing">
                                            <p class="ml-3 mt-2 pt-1">Shortness of breath/difficulty in breathing</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- history of exposure -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="no_exposure_covid">
                                    <p class="ml-3 mt-2 pt-1">Has no history of exposure to a confirmed or suspected COVID-19 case in the past 2 weeks?</p>
                                </div>
                            </div>

                            <!-- not previously treated with covid -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="not_previously_treated">
                                    <p class="ml-3 mt-2 pt-1">Has not been previously treated for COVID-19 in the past 90 days?</p>
                                </div>
                            </div>

                            <!-- has ot receive any vaccine -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="not_receive_vaccine">
                                    <p class="ml-3 mt-2 pt-1">Has no received any vaccine in the past two weeks?</p>
                                </div>
                            </div>

                            <!-- history of bleeding -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="not_receive_convalescent_plasma">
                                    <p class="ml-3 mt-2 pt-1">Has not received convalescent plasma or monoclonal antibodies for COVID-19 in the past 90 days?</p>
                                </div>
                            </div>

                            <!-- not pregnant -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="not_pregnant">
                                    <p class="ml-3 mt-2 pt-1">Not pregnant?</p>
                                </div>
                                <div class="d-flex justify-content-start ml-4 pl-2">
                                    
                                    <div class="col-md-4">
                                        <p class="ml-4 mt-2 pt-1">* If pregnant, select a trimester?</p>
                                        <select type="text" class="form-control ml-4" name="trimester_pregnant">
                                            <option value="">-- Please select --</option>
                                            <option value="">2nd Trimester</option>
                                            <option value="">3rd Trimester</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- does not have HIV, Cancer etc -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox" name="not_have_following_ill">
                                    <p class="ml-3 mt-2 pt-1">Does not have any of the follwing: HIV, Cancer/Malignancy, Underwent Transplant, Under Steriod Medication/Treatment, Bed Ridden,
                                        terminal illness, less than 6 months prognosis</p>
                                </div>
                                <div class="d-flex justify-content-start ml-5">
                                    
                                    <div>
                                        <p class="ml-3 mt-2 pt-1">* If with mentioned condition/s, specify</p>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="hiv" value="HIV">
                                            <p class="ml-3 mt-2 pt-1">HIV</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="cancer_malignancy" value="Cancer/Malignancy">
                                            <p class="ml-3 mt-2 pt-1">Cancer/Malignancy</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="underwent_transplant" value="Underwent Transplant">
                                            <p class="ml-3 mt-2 pt-1">Underwent Transplant</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="steroid_medication" value="Under Steriod Medication/Treatment">
                                            <p class="ml-3 mt-2 pt-1">Under Steriod Medication/Treatment</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="bed_ridden" value="Bed Ridden">
                                            <p class="ml-3 mt-2 pt-1">Bed Ridden</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="terminal_illness" value="Terminal Illness">
                                            <p class="ml-3 mt-2 pt-1">Terminal illness</p>
                                        </div>
                                        <div class="d-flex justify-content-start ml-3">
                                            <input type="checkbox" class="checkbox" name="prognosis" value="Less 6 months prognosis">
                                            <p class="ml-3 mt-2 pt-1">Less 6 months prognosis</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- does not manifest any symptoms -->
                            <div class="col-md-12 mt-2">
                                <div class="d-flex justify-content-start">
                                    <input type="checkbox" class="checkbox">
                                    <p class="ml-3 mt-2 pt-1">Deferral?</p>
                                </div>
                                <div class="d-flex justify-content-start ml-4 pl-2">
                                    
                                    <div>
                                        <p class="ml-3 mt-2 pt-1">* If deferral, specify</p>
                                        <input type="text" class="form-control ml-3">
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- submit button-->
                            <div class="row mt-5 mb-3">
                                <div class="col-md-12">
                                    <button type="submit" id="confirmButton" class="btn btn-confirm mb-3 ml-3 mr-3">Submit</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection