@extends('layout.main_layout')

@section('registration_content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-heading pl-2 pr-2">COVID-19 VACCINATION PROGRAM</h4>
                <p class="text-small-heading ml-2 mr-2">PROVINCE OF SOUTHERN LEYTE</p>
            </div>
        </div>
    </div>

    <div id="alert-box" class="container alert alert-danger" role="alert">
    </div>

    <div class="container info-heading-text mb-5 mt-4">
        <div class="row">
            <div class="col-md-12 px-md-0 px-sm-4">
                <form action="" id="registerForm" method="post">
                    <div class="form pt-4 pr-4 pb-4 pl-4">
                        <!-- <div class="row mt-4">
                            <div class="col-md-12">
                                <p class="text-danger">Note: Please verify if this information is correct. If not edit the information.</p>
                            </div>
                        </div> -->


                        <!-- fullname -->
                        <div id="owl-demo" class="owl-carousel mt-4">
                            <div class="item p-2">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <p class="input-heading">Full Name <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-0 pr-md-1">
                                        <input type="text" name="first_name" id="first_name" value="{{ $first_name ? $first_name : old('first_name') }}" class="form-control">
                                        <small class="text-sm-footer pl-1">First Name</small>
                                    </div>
                                    <div class="col-md-3 px-md-1">
                                        <input type="text" name="middle_name" id="middle_name" value="{{ $middle_name ? $middle_name : old('middle_name') }}" class="form-control">
                                        <small class="text-sm-footer pl-1">Middle Name</small>
                                    </div>
                                    <div class="col-md-3 px-md-1">
                                        <input type="text" name="last_name" id="last_name" value="{{ $last_name ? $last_name : old('last_name') }}" class="form-control">
                                        <small class="text-sm-footer pl-1">Last Name</small>
                                    </div>
                                    <div class="col-md-2 pl-md-1">
                                    <input type="text" name="suffix_name" class="form-control">
                                        <small class="text-sm-footer pl-1">Suffix</small>
                                    </div>
                                </div>

                                <!-- address -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Address <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <select type="text" id="Province" name="province" class="form-control">
                                        </select>
                                        <small class="text-sm-footer pl-1">Province</small>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 pr-md-1">
                                        <select type="text" id="Municipality" name="municipality" class="form-control"></select>
                                        <small class="text-sm-footer pl-1">Municipal/City</small>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <select type="text" id="Barangay" name="barangay" class="form-control"></select>
                                        <small class="text-sm-footer pl-1">Barangay</small>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <input type="text" id="purok" name="purok" class="form-control">
                                        <small class="text-sm-footer pl-1">Sitio/Purok/Street</small>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Contact Number <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row mb-3 mb-5">
                                    <div class="col-md-6 mt-0">
                                        <input type="text" value="{{$contact ? $contact : old('contact')}}" name="contact" id="contact" class="form-control" placeholder="09xxxxxxxxx">
                                    </div>
                                </div>

                                <!-- <div class="row mb-2 mt-5">
                                    <div class="col-md-12 mt-0" align="right">
                                        <button type="button" class="btn btn-confirm"><i class="fas fa-check"></i> Confirm & Continue</button>
                                    </div>
                                </div> -->
                            </div>

                            <div class="item p-2">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <p class="input-heading">Birth Date <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="date" name="birth_date" id="birth_date" class="form-control">
                                        <small class="text-sm-footer pl-1">Date</small>
                                    </div>
                                </div>

                                <!-- sex -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Sex <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mt-0">
                                        <input type="radio" name="gender" class="ml-3">
                                        <small class="text-gender pl-1">Male</small>
                                    </div>
                                    <div class="col-md-3 mt-0">
                                        <input type="radio" name="gender" class="ml-3">
                                        <small class="text-gender pl-1">Female</small>
                                    </div>
                                </div>

                                <!-- civil status -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Civil Status <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-5">
                                    <div class="col-md-6">
                                        <select name="civil_status" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widow/Widower">Widow/Widower</option>
                                            <option value="Separated/Anulled">Separated/Annulled</option>
                                            <option value="Living with Partner">Living with Partner</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="item p-2">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <p class="input-heading">Category <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="category" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="Health Care Worker">Health Care Worker</option>
                                            <option value="Senior Citizen">Senior Citizen</option>
                                            <option value="Indigent">Indigent</option>
                                            <option value="Uniformed Personnel">Uniformed Personnel</option>
                                            <option value="Essential Worker">Essential Worker</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Cat ID -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Category ID <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="category_id" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="PRC Number">PRC Number</option>
                                            <option value="OSCA Number">OSCA Number</option>
                                            <option value="Facility ID Number">Facility ID Number</option>
                                            <option value="Other ID">Other ID</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- cat ID num -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Civil ID Number <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="civil_id_number" class="form-control">
                                    </div>
                                </div>

                                <!-- employement status -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Employment Status <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <select name="employment_status" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="Goverment Employed">Government Employed</option>
                                            <option value="Private Employed">Private Employed</option>
                                            <option value="Self Employed">Self Employed</option>
                                            <option value="Private Practitioner">Private Practitioner</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- philhealth ID num -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">PhilHealth ID Number <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="philhealth_id_number" class="form-control">
                                    </div>
                                </div>

                                <!-- PWD ID num -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">PWD ID Number (if available)</p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <input type="text" name="pwd_id_number" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <div class="item p-2">
                                <!-- sex -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Direct interaction with COVID-19 patient? <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="direct_contact" value="Yes" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="direct_contact" value="No" class="ml-3">
                                        <small class="text-gender pl-1">No</small>
                                    </div>
                                </div>
                            </div>

                            <div class="item p-2">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <p class="input-heading">Profession <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="profession" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="Dental Hygieniest">Dental Hygieniest</option>
                                            <option value="Dental Technologist">Dental Technologist</option>
                                            <option value="Dentist">Dentist</option>
                                            <option value="Medical Technologist">Medical Technologist</option>
                                            <option value="Midwife">Midwife</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Nutritionist Dietician">Nutritionist Dietician</option>
                                            <option value="Occupational Therapist">Occupational Therapist</option>
                                            <option value="Optometrist">Optometrist</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Physical Therapist">Physical Therapist</option>
                                            <option value="Physician">Physician</option>
                                            <option value="Radiologic Technologist">Radiologic Technologist</option>
                                            <option value="Respiratory Therapist">Respiratory Therapist</option>
                                            <option value="X-ray Technologist">X-ray Technologist</option>
                                            <option value="Barangay Health Worker">Barangay Health Worker</option>
                                            <option value="Maintenance Staff">Maintenance Staff</option>
                                            <option value="Administrative Staff">Administrative Staff</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Name of Employer -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Name of Employer  <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name_employer" class="form-control">
                                    </div>
                                </div>

                                <!-- Province/HUC/ICC of Employeer -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Province/HUC/ICC of Employeer <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="province_employer" class="form-control">
                                    </div>
                                </div>

                                <!-- Address or employer -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Address of Employer <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <input type="text" name="municipality_employer" class="form-control">
                                        <small class="text-sm-footer pl-1">Municipality</small>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <input type="text" name="barangay_employer" class="form-control">
                                        <small class="text-sm-footer pl-1">Barangay</small>
                                    </div>
                                </div>

                                <!-- employer contact num -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Contact Number of Employer<small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="contact_number_employer" class="form-control" placeholder="09xxxxxxxxx">
                                    </div>
                                </div>

                            </div>

                            <div class="item p-2">
                                <!-- pregnancy -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Pregnancy Status (Note: will only appear of Female) <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="pregnant_status" value="Pregnant" class="ml-3">
                                        <small class="text-gender pl-1">Pregnant</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="pregnant_status" value="Not Pregnant" class="ml-3">
                                        <small class="text-gender pl-1">Not Pregnant</small>
                                    </div>
                                </div>
                            </div>

                            <div class="item p-2">
                                <!-- comordity -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">With Comorbidity? <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="comorbidity" value="Yes" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="comorbidity" value="None" class="ml-3">
                                        <small class="text-gender pl-1">None</small>
                                    </div>
                                </div>

                                <!-- name of comordity it yes -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Name of Comorbidity (if Yes)  <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="comorbidity_yes" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="Hypertension">Hypertension</option>
                                            <option value="Heart Disease">Heart Disease</option>
                                            <option value="Kidney Disease">Kidney Disease</option>
                                            <option value="Diabetes Mellitus">Diabetes Mellitus</option>
                                            <option value="Bronchial Asthma">Bronchial Asthma</option>
                                            <option value="Immunodeficiency State">Immunodeficiency State</option>
                                            <option value="Cancer">Cancer</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="item p-2">
                                <!-- drug allergy -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Drug Allergy? <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="drug_allergy" value="Yes" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="drug_allergy" value="No" class="ml-3">
                                        <small class="text-gender pl-1">No</small>
                                    </div>
                                </div>

                                <!-- allergy if yes -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Name of Allergy (if Yes) <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="drug_allergy_yes" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="Drug">Drug</option>
                                            <option value="Food">Food</option>
                                            <option value="Insect">Insect</option>
                                            <option value="Latex">Latex</option>
                                            <option value="Mold">Mold</option>
                                            <option value="Pet">Pet</option>
                                            <option value="Pollen">Pollen</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="item p-2">
                                <!-- ask if diagnose -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Diagnose with COVID-19? <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="diagnose_covid" value="Yes" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="diagnose_covid" value="No" class="ml-3">
                                        <small class="text-gender pl-1">No</small>
                                    </div>
                                </div>

                                <!-- date if yes -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Date of first positive result/Specimen collection (if Yes) <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-0">
                                        <input type="date" name="date_diagnose_covid_yes" class="form-control" class="ml-3">
                                        <!-- <small class="text-sm-footer pl-1">Date</small> -->
                                    </div>
                                </div>

                                <!-- classification -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">COVID-19 Classification <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="covid_classification" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="Asymptomatic">Asymptomatic</option>
                                            <option value="Mild">Mild</option>
                                            <option value="Moderate">Moderate</option>
                                            <option value="Severe">Severe</option>
                                            <option value="Critical">Critical</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- provided electroninc -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Provided Electronic Informed Consent? <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="electronic_informed_consent" value="Yes" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="electronic_informed_consent" value="No" class="ml-3">
                                        <small class="text-gender pl-1">No</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" name="electronic_informed_consent" value="Unknown" class="ml-3">
                                        <small class="text-gender pl-1">Unknown</small>
                                    </div>
                                </div>

                                <!-- button registration -->
                                <div class="row mt-5 mb-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-confirm mb-3">Confirm and Register</button>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script>






var province = "{{ $province }}"
var municipality = "{{ $municipality }}"
var barangay = "{{ $barangay }}"

// function SetSelect(ElementId, Value){
//     let element = document.getElementById(ElementId);
//     element.value = Value;
// }



</script>
