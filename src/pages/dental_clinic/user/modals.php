<!----------------CREATE ACC MODAL ------------------->
<div class="modal fade" id="createAcc" aria-hidden="true">
    <div class=" modal-dialog">
        <div class="modal-content" style="background-color: #80CEB8; border-radius: 5%;">

            <div class="modal-body text-black">

                <div class="container" style="border-radius: 5%; border: solid white;">

                    <div class="row  text-center">
                        <div class="col-12">
                            <i class="fa-solid fa-square-check h1 m-5 text-white" style="font-size: 100px;"></i>
                        </div>
                    </div>

                    <div class="row text-center align-items-center mb-5">
                        <div class="col-12">
                            <span class="h3 text-white">
                                ACCOUNT SUCCESSFULLY CREATED!
                            </span>
                        </div>
                    </div>

                </div>

            </div>


        </div>

    </div>
</div>
<!----------------CREATE ACC MODAL ------------------->

<!----------------PACKAGE MODAL------------------->
<div class="modal ms-5" id="package" aria-hidden="true" style="backdrop-filter: blur(11px);">
    <div class=" modal-dialog">
        <div class="modal-content" style="width: 80%; border-radius: 5%; backdrop-filter: blur(11px) saturate(69%); -webkit-backdrop-filter: blur(11px) saturate(69%); background-color: rgba(17, 25, 40, 0.26); border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.125);">

            <div class="modal-body">

                <div class="container" style="border-radius: 5%;">

                    <h2 class="card-title h4 mb-2 text-center" style="letter-spacing: 3px;">Package 1</h2>

                    <div class="row mt-5 text-center align-items-center">
                        <div class="col-6">
                            <img src="src/resources/img/bottle.png" class="card-img-top" style="border-radius: 2%;  width: 100px; height: 200px;">

                        </div>

                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum porro tempora ue!</p>
                            <p>₱ 1,050</p>
                        </div>
                    </div>

                    <div class="row  text-center align-items-center">
                        <div class="col-12 mb-3">
                            <button class="mt-2 text-white" style="font-weight:bold; background:#47B0A0; border-radius: 50px; width:120px; border: none; height: 35px;">Avail</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!----------------PACKAGE MODAL------------------->

<!----------------SERVICES MODAL PAGE11------------------->
<div class="modal fade" id="md_services" tabindex="-1" aria-hidden="true">
    <div class=" modal-dialog ">
        <div class="modal-content" style="border-radius: 1rem;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 1rem; border: solid #8D8D8D;">
                    <div class="row">

                        <h6 class="h6 mt-lg-3 mb-lg-3 text-center mb-5" style="letter-spacing: 2px; font-weight: bold;">Services</h6>

                        <span class="h6 " style="letter-spacing: 2px; font-weight: bold;" id="txt_md_service_title">LABORATORY</span>

                        <p><small class="text-muted ">Kindly select the test corresponds to your physician's request.</small></p>

                        <div id="div_md_services" class="pb-4 pt-0 p-4 row">

                            <div class="col-xl-6 col-12  text-muted ">

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="cbc">
                                    <label class="custom-control-label" style="font-size:9pt;"> CBC</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="platelet">
                                    <label class="custom-control-label" style="font-size:9pt;">PLATELET</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="urinalist">
                                    <label class="custom-control-label" style="font-size:9pt;">URINALIST</label>
                                </div>

                                <div class="custom-control custom-checkbox pb-lg-3">
                                    <input type="checkbox" class="custom-control-input" id="fecalysis">
                                    <label class="custom-control-label" style="font-size:9pt;">FECALYSIS</label>
                                </div>
                            </div>

                            <div class=" col-xl-6 col-12 text-muted ">
                                <div class=" custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="hepa">
                                    <label class="custom-control-label" style="font-size:9pt;">HEPA-B <small class="text-muted">(sreening)</small></label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="btwr">
                                    <label class="custom-control-label" style="font-size:9pt;">BLOOD TYPING W/ RH</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="vdrl">
                                    <label class="custom-control-label" style="font-size:9pt;">VDRL</label>
                                </div>
                            </div>
                        </div>






                    </div>

                    <!----------------BUTTONS------------------->
                    <div class="mt-lg-2 mb-lg-2 text-center">
                        <button class="text-white" style="font-weight:bold; background:#80CEB8; border-radius: 5px; width:120px; margin: 3px; border: none; height: 35px;" data-bs-dismiss="modal">DONE</button>
                        <button class="text-white" style="font-weight:bold; background:#80CEB8; border-radius: 5px; width:120px; margin: 3px; border: none; height: 35px;" data-bs-dismiss="modal">BACK</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!----------------SERVICES MODAL PAGE11------------------->

<!----------------LAB RESULT------------------->
<div class="modal" id="labResult" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <img src="src/resources/img/labResult.png" style="width: 400px; height: 500px;">

    </div>
</div>
<!----------------LAB RESULT------------------->

<!----------------INCOMING APPOINTMENTS------------------->
<div class="modal fade" id="md_make_appointment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <span class="h5 mt-3 text-black text-center" style="letter-spacing: 4px; font-weight: bold;">Make Appointment</span>

            <div class="modal-body">
                <div class="container" style="background-color: #F9F9F9; border-radius: 5px;">
                    <h6 class="h6 pt-3 text-black" style="letter-spacing: 2px; font-weight: bold; font-size: 15px;">Appointment Details</h6>
                    <div class="row border-top mt-2">
                        <div class="col-6 mt-3">
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Physician's Name : </p>
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Appointment Date : </p>
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Appointment Day : </p>
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Appointment Time : </p>
                        </div>

                        <div class="col-6 mt-3">
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_make_appointment_txt_physician"></p>
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_make_appointment_txt_date"></p>
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_make_appointment_txt_day"></p>
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_make_appointment_txt_time"></p>
                        </div>
                    </div>

                </div>

                <div class="container mt-3" style="background-color: #F9F9F9; border-radius: 5px;">
                    <h6 class="h6 pt-3 text-black" style="letter-spacing: 2px; font-weight: bold; font-size: 15px;">Services Details</h6>

                    <div id="div_selected_services">

                    </div>

                    <div id="div_selected_services_total">

                    </div>

                </div>

                <div class="mt-4 mb-2 text-center">
                    <button class="text-white" id="md_make_appointment_book" data-bs-dismiss="modal" style="font-weight:bold; background:#80CEB8; border-radius: 5px; width:120px; margin: 6px; border: none; height: 35px; font-size: 12px;">BOOK</button>
                    <button class="text-white" id="md_make_appointment_cancel" data-bs-dismiss="modal" style="font-weight:bold; background:#F35252; border-radius: 5px; width:130px; margin: 6px; border: none; height: 35px; font-size: 12px;">CLOSE</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!----------------INCOMING APPOINTMENTS------------------->

<!----------------INCOMING APPOINTMENTS------------------->
<div class="modal fade" id="md_view_appointment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <span class="ms-3 mt-3 badge bg-danger d-none" style="width:80px" id="badge_view_appointment_cancelled">Cancelled</span>
            <span class="ms-3 mt-3 badge bg-success d-none" style="width:80px" id="badge_view_appointment_completed">Completed</span>

            <span class="h5 mt-lg-3 text-black text-center" style="letter-spacing: 4px; font-weight: bold;">Make Appointment</span>

            <div class="modal-body">
                <div class="container" style="background-color: #F9F9F9; border-radius: 5px;">
                    <h6 class="h6 pt-3 text-black" style="letter-spacing: 2px; font-weight: bold; font-size: 15px;">Appointment Details</h6>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Physician's Name : </p>
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Appointment Date : </p>
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Appointment Day : </p>
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Appointment Time : </p>
                        </div>

                        <div class="col-6 mt-3">
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_view_appointment_txt_physician"></p>
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_view_appointment_txt_date"></p>
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_view_appointment_txt_day"></p>
                            <p class="text-black text-muted" style="font-size: 12px;" id="md_view_appointment_txt_time"></p>
                        </div>
                    </div>

                </div>

                <div class="container mt-3" style="background-color: #F9F9F9; border-radius: 5px;">
                    <h6 class="h6 pt-3 text-black" style="letter-spacing: 2px; font-weight: bold; font-size: 15px;">Services Details</h6>


                    <div id="div_view_appointment_services"></div>
                    <div id="div_view_appointment_services_total"></div>


                    <!-- <div class="row">
                        <div class="col-6">
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Service : </p>
                            <p class="text-black" style="font-weight: bold; font-size: 12px;">Amount : </p>
                        </div>

                        <div class="col-6">
                            <p class="text-black text-muted" style="font-size: 12px;">Drug Test</p>
                            <p class="text-black text-muted" style="font-size: 12px;">PHP 360.00</p>
                        </div>
                    </div> -->

                </div>

                <div class="mt-lg-2 mb-lg-2 text-center" id="div_view_appointment_buttons">
                    <button class="text-white" id="btn_cancel_appointment" data-bs-dismiss="modal" style="font-weight:bold; background: red; border-radius: 5px; width:130px; margin: 6px; border: none; height: 35px; font-size: 12px;">CANCEL</button>
                    <button class="text-white" data-bs-dismiss="modal" style="font-weight:bold; background:#80CEB8; border-radius: 5px; width:120px; margin: 6px; border: none; height: 35px; font-size: 12px;">BACK</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!----------------INCOMING APPOINTMENTS------------------->

<!---------------- ACC INFORMATION MODAL ------------------->
<div class="modal fade" id="md_account_information" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content acc_info">
            <div class="modal-body ">
                <div class="container account_information">
                    <h5 class="h5 fw-bold text-black text-center" style="letter-spacing: 1px; font-family: 'Work Sans', sans-serif;">Account Information</h5>

                    <div class="upload_modal mt-3">
                        <img src="<?php echo $_SESSION['picture']; ?>" width="100" height="100" alt="">
                        <div class="round">
                            <form action="" id="user_picture">
                                <input type="file" name="file" id="update_acc_picture">
                                <input type="text" name="id" value="<?php echo $_SESSION['user_id']; ?>" hidden>
                                <i class="fa-solid fa-circle-plus fa-fw" style="color: white;"></i>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-6 col-sm-12">
                            <div class="">
                                <label for="lastname">Patient ID</label>
                                <input class="form-control" type="text" id="update_acc_patient_id" required>

                                <label for="lastname">Last Name</label>
                                <input class="form-control" type="text" id="update_acc_lname" required>

                                <label for="firstname">First Name</label>
                                <input class="form-control" type="text" id="update_acc_fname" required>

                                <label for="firstname">Middle Name</label>
                                <input class="form-control" type="text" id="update_acc_mname" required>

                                <label for="firstname">Age</label>
                                <input class="form-control" type="text" id="update_acc_age" readonly>

                                <label for="firstname">Birth Date</label>
                                <input class="form-control" type="date" id="update_acc_bdate" required>

                                <label>Gender</label>
                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="update_acc_gender_male">
                                    <label class="form-check-label" for="update_acc_gender_male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="update_acc_gender_female" checked>
                                    <label class="form-check-label" for="update_acc_gender_female">
                                        Female
                                    </label>
                                </div>


                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">

                            <div class="acc_info">
                                <label for="Addres">Address</label>
                                <input class="form-control" type="text" id="update_acc_house" required>

                                <label for="Street">Street</label>
                                <input class="form-control" type="text" id="update_acc_street" required>

                                <label for="Brgy">Brgy</label>
                                <input class="form-control" type="text" id="update_acc_brgy" required>

                                <label for="City">City</label>
                                <input class="form-control" type="text" id="update_acc_city" required>

                                <label for="Province">Province</label>
                                <input class="form-control" type="text" id="update_acc_province" required>

                                <label for="Contact">Contact No</label>
                                <input class="form-control" type="text" id="update_acc_contact" required>

                            </div>
                        </div>
                    </div>

                    <div class="row mt-xl-4">
                        <div class=" col-12">
                            <div class="acc_info">
                                <label for="Username">Username</label>
                                <input class="form-control" type="text" id="update_acc_username" required>

                                <label for="Password">Password</label>
                                <input class="form-control" type="text" id="update_acc_password" required>

                                <label for="Password">Email</label>
                                <input class="form-control" type="text" id="update_acc_email" required>
                            </div>

                            <div class="text-end">
                                <button class="text-white px-2 ms-lg-2" id="btn_update_account" style="background: #80CEB8; border-radius:5px; text-decoration: none; cursor: pointer; font-size: 12px;  border: none; height: 30px;">DONE</button>
                                <button class="text-white px-2 ms-lg-2" data-bs-dismiss="modal" style="background: red; border-radius:5px; text-decoration: none; cursor: pointer; font-size: 12px;  border: none; height: 30px;">CANCEL</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------CREATE ACC MODAL ------------------->
<div class="modal fade" id="md_msg_box" aria-hidden="true">
    <div class=" modal-dialog">
        <div class="modal-content" style="background-color: #80CEB8; border-radius: 5%;">

            <div class="modal-body text-black">

                <div class="container" style="border-radius: 5%; border: solid white;">

                    <div class="row  text-center">
                        <div class="col-12">
                            <i class="fa-solid fa-square-check h1 m-5 text-white" style="font-size: 100px;" id="icon_1"></i>
                            <i class="fa-solid fa-ban h1 m-5 text-white" style="font-size: 100px;" id="icon_2"></i>
                        </div>
                    </div>

                    <div class="row text-center align-items-center mb-5">
                        <div class="col-12">
                            <span class="h3 text-white" id="msg_body">
                                ACCOUNT SUCCESSFULLY CREATED!
                            </span>
                        </div>
                    </div>

                </div>

            </div>


        </div>

    </div>
</div>



<div class="modal fade" id="privacy_policy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">



                <div class="container">
                    <div class="row">
                        <div>
                            <div style="float: left">
                                <img src="src/resources/img/bg_caduceus.png " style="width: 80px;">
                            </div>
                            <div class="mt-4">
                                <h5 style="-webkit-text-stroke-width: 1.4px !important; -webkit-text-stroke-color: #4bb9a9 !important; color: white !important; font-size: 14pt !important; letter-spacing: 2px;">CHERONZELLE</h5>
                            </div>
                        </div>


                        <div class="container" style="width: 90%;">
                            <div class="row">
                                <div class="col-12 ms-lg-3 mt-3">
                                <h5 class="text-center" style="-webkit-text-stroke-width: 1.4px !important; -webkit-text-stroke-color: black !important; font-size: 12pt !important; letter-spacing: 4px;">Privacy Policy</h5>

                                    <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ipsa. Id quasi sint velit excepturi optio. Veritatis quo ullam facilis atque labore quasi nisi cum hic repellendus, recusandae, odit esse!
                                    </p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>