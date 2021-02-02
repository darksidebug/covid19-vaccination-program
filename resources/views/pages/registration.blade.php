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
    <div class="container info-heading-text mb-5 mt-4">
        <div class="row">
            <div class="col-md-12 px-md-0 px-sm-4">
                <form action="">
                    <div class="form pt-4 pr-4 pb-4 pl-4">
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <p class="text-danger">Note: Please verify if this information is correct. If not edit the information.</p>
                            </div>
                        </div>

                        
                        <!-- fullname -->
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item p-2">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <p class="input-heading">Full Name <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mt-0 pr-md-1">
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">First Name</small>
                                    </div>
                                    <div class="col-md-3 px-md-1">
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">Middle Name</small>
                                    </div>
                                    <div class="col-md-3 px-md-1">
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">Last Name</small>
                                    </div>
                                    <div class="col-md-2 pl-md-1">
                                    <input type="text" class="form-control">
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
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">Province</small>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 pr-md-1">
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">Municipal/City</small>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">Barangay</small>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control">
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
                                        <input type="text" class="form-control" placeholder="09xxxxxxxxx">
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
                                        <input type="date" class="form-control">
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
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Male</small>
                                    </div>
                                    <div class="col-md-3 mt-0">
                                        <input type="radio" class="ml-3">
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
                                            <option value="">Single</option>
                                            <option value="">Married</option>
                                            <option value="">Widow/Widower</option>
                                            <option value="">Separated/Annulled</option>
                                            <option value="">Living with Partner</option>
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
                                        <select name="civil_status" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Health Care Worker</option>
                                            <option value="">Senior Citizen</option>
                                            <option value="">Indigent</option>
                                            <option value="">Uniformed Personnel</option>
                                            <option value="">Essential Worker</option>
                                            <option value="">Other</option>
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
                                        <select name="civil_status" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">PRC Number</option>
                                            <option value="">OSCA Number</option>
                                            <option value="">Facility ID Number</option>
                                            <option value="">Other ID</option>
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
                                        <input type="text" class="form-control">
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
                                        <select name="civil_status" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Government Employed</option>
                                            <option value="">Private Employed</option>
                                            <option value="">Self Employed</option>
                                            <option value="">Private Practitioner</option>
                                            <option value="">Others</option>
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
                                        <input type="text" class="form-control">
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
                                        <input type="text" class="form-control">
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
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
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
                                        <select name="civil_status" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Dental Hygieniest</option>
                                            <option value="">Dental Technologist</option>
                                            <option value="">Dentist</option>
                                            <option value="">Medical Technologist</option>
                                            <option value="">Midwife</option>
                                            <option value="">Nurse</option>
                                            <option value="">Nutritionist Dietician</option>
                                            <option value="">Occupational Therapist</option>
                                            <option value="">Optometrist</option>
                                            <option value="">Pharmacist</option>
                                            <option value="">Physical Therapist</option>
                                            <option value="">Physician</option>
                                            <option value="">Radiologic Technologist</option>
                                            <option value="">Respiratoty Therapist</option>
                                            <option value="">X-ray Technologist</option>
                                            <option value="">Barangay Health Worker</option>
                                            <option value="">Maintenance Staff</option>
                                            <option value="">Administrative Staff</option>
                                            <option value="">Others</option>
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
                                        <input type="text" class="form-control">
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
                                        <input type="text" class="form-control">
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
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">Municipality</small>
                                    </div>
                                    <div class="col-md-6 pl-md-1">
                                        <input type="text" class="form-control">
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
                                        <input type="text" class="form-control" placeholder="09xxxxxxxxx">
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
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Pregnant</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Not Pregnant</small>
                                    </div>
                                </div>
                            </div>

                            <div class="item p-2">
                                <!-- comordity -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">With Comordity? <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">None</small>
                                    </div>
                                </div>

                                <!-- name of comordity it yes -->
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <p class="input-heading">Name of Comordity (if Yes)  <small class="text-danger text-bold text-sm pl-1">*</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Hypertension</option>
                                            <option value="">Heart Disease</option>
                                            <option value="">Kidney Disease</option>
                                            <option value="">Diabetes Mellitus</option>
                                            <option value="">Bronchial Asthma</option>
                                            <option value="">Immunodeficiency State</option>
                                            <option value="">Cancer</option>
                                            <option value="">Other</option>
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
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
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
                                        <select class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Drug</option>
                                            <option value="">Food</option>
                                            <option value="">Insect</option>
                                            <option value="">Latex</option>
                                            <option value="">Mold</option>
                                            <option value="">Pet</option>
                                            <option value="">Pollen</option>
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
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
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
                                    <div class="col-md-12 mt-0">
                                        <input type="date" class="form-control" class="ml-3">
                                        <small class="text-gender pl-1">Date</small>
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
                                        <select class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="">Asymptomatic</option>
                                            <option value="">Mild</option>
                                            <option value="">Moderate</option>
                                            <option value="">Severe</option>
                                            <option value="">Critical</option>
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
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Yes</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">No</small>
                                    </div>
                                    <div class="col-md-12 mt-0">
                                        <input type="radio" class="ml-3">
                                        <small class="text-gender pl-1">Unknown</small>
                                    </div>
                                </div>
                            </div>

                            <!-- button registration -->
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <button class="btn btn-confirm">Confirm and Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection