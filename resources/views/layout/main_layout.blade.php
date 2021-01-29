<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>Vaccination Passport</title>

    <!-- font -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <!-- css styling -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom_style.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.css') }}">

    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

    <!-- script functions and animations -->
    <script src="{{ asset('assets/js/custom_script.js') }}"></script>

    

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Records</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-sign-out-alt"></i>Sign-out</a>
                </li>
            </ul>
        </div>
    </nav>

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
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                        <small class="text-sm-footer pl-1">Municipality</small>
                                    </div>
                                    <div class="col-md-6">
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

                                <!-- name of comordity it yes -->
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>