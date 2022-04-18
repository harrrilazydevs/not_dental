<div class="d-none page" id="page_sms" style="background-color: white;">
    <?php
    include 'admin_sidebar.php';
    ?>


    <section class=" min-vh-100" style="background-image: url('src/resources/img/tablet.png') ;  background-repeat: no-repeat; background-size: 10% 20%; background-position: 100% 100%,  10% 20% ">
        <div class="container" style="color: #7B7A7A; ">
            <div class="row">
                <div class="col mt-lg-5 mt-xl-5 mt-sm-3">
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">HISTORY</span>
                </div>

                <img class="p-0 mt-lg-5 mt-xl-4 mt-sm-3" src="<?php echo $_SESSION['picture']; ?>" style="width: 100px; height: 100px; border-radius: 100%; float: right;">

            </div>
        </div>

        <div class="container mt-3 pt-5">
            <div class="text-center mb-3">
                <span class="h3" style="letter-spacing: 2px; font-weight: bold; color: #000;">SMS Template</span>
            </div>

            <div class="row d-flex justify-content-around mt-5 mb-3">
                <div class="select text-muted">
                    <select class="selection" id="sel_completed_appointments_sort">
                        <option value="">SORT BY</option>
                        <option value="appointment_id">Appointment Id</option>
                        <option value="user_id">Patient Id</option>
                        <option value="name">Name</option>
                    </select>
                </div>

                <div class="search mb-3 " style="box-shadow: 2px 3px #888888; float: right !important;">
                    <span style="font-size: 1rem; padding-left: 1rem; color: #888888;"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input id="txt_search_appointment_history" type="search" placeholder="Search..." style="border: none; outline: none; ">
                </div>
            </div>

            <div class="table-responsive" id="no-more-tables" style="max-height:45vh;border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                <table class="table" id="tbl_sms">
                    <thead class="text-center">
                        <tr class="table_title">
                            <th width="5%">No</th>
                            <th width="90%">SMS Template</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center"></tbody>
                </table>
            </div>

            <div class="container mt-xl-4 mt-lg-4  mb-4">
                <div class="row">
                    <div class="col-12">
                        <button class="text-white" id="btn_admin_add_sms" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem; float: right;">ADD</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>