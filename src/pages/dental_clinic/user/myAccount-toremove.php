<div class="page d-none" id="myAcc.php" style="background-color: white;">
    <div class="myAcc_grid" style="background-image: url('src/resources/img/bg_caduceus.png'); background-repeat: no-repeat; background-size: 80% 100%;">
        <!-------- MAIN GRID --------->
        <div class="container min-vh-100" style="color: #7B7A7A;">
            <div class="row title_dashboard">
                <div class="col-lg-12 col-sm-12 mt-lg-3 mt-sm-5 mb-sm-3">
                    <span class="h4 ms-lg-5" style="letter-spacing: 2px; font-weight: bold;">MY ACCOUNT</span>
                    <i class="fa-solid fa-gear h3 setting_icon d-lg-none" style="float: right;" data-bs-toggle="offcanvas" data-bs-target="#user_Mobile_Sidebar" aria-controls="offcanvasRight"></i>
                </div>
            </div>

            <div class="container mb-lg-2">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <p class="ms-4 ps-4" style="font-weight: bold;">Personal settings</p>
                        <div class="container shadow p-3 mb-5 " style=" border: 2px solid black; padding: 10px; border-radius: 12px; box-shadow: 5px 10px #888888 !important;">
                            <form class="mb-1">
                                <label class="h5 createAcc_label" for="name">Name:</label>
                                <input class="createAcc_Input" type="text" id="name">

                                <label class="h5 createAcc_label" for="age">Age:</label>
                                <input class="createAcc_Input" type="text" id="age">

                                <label class="h5 createAcc_label" for="address">Address:</label>
                                <input class="createAcc_Input" type="text" id="address">

                                <label class="h5 createAcc_label" for="contact">Contact No:</label>
                                <input class="createAcc_Input" type="text" id="contact">

                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row ms-lg-2">
                <div class="col-lg-7 col-sm-12">
                    <p style="font-weight: bold;">Account settings</p>
                    <div class="container shadow p-3 mb-5 rounded" style=" border: 2px solid black; padding: 10px; border-radius: 12px;  box-shadow: 5px 10px #888888 !important;">
                        <form class="mb-1">
                            <label class="h5 createAcc_label">Username :</label>
                            <input class="createAcc_Input" type="text" id="username">

                            <label class="h5 createAcc_label">Email :</label>
                            <input class="createAcc_Input" type="text" id="email">

                            <label class="h5 createAcc_label">Passwrod:</label>
                            <input class="createAcc_Input" type="password" id="password">

                        </form>
                    </div>
        
                    <div class="mb-3">
                        <h6 class="mt-lg-3 mb-lg-4" style="font-weight: bold;"><a href="#" class="text-danger mb-lg-5"> I want to delete my account</a></h6>
                        <button class="ms-lg-5 text-center" style="font-weight:bold; background:#80CEB8; border-radius: 5px; width:120px; margin: 6px; border: none; height: 35px;">Update</button>
                        <button class="ms-lg-5 text-center" id="#" style="font-weight:bold; background:#F15050; border-radius: 5px; width:120px; margin: 6px; border: none; height: 35px;">Cancel</button>
                    </div>

                </div>
            </div>
        </div>
        <!-------- MAIN GRID --------->

        <!-------- NESTED GRID --------->
        <div>
            <?php include 'src/pages/dental_clinic/user/sidebarUser.php'; ?>
        </div>
        <!-------- NESTED GRID --------->
    </div>
</div>