<div class="d-none page" id="page_history" style="background-color: white;">
    <?php
    include 'admin_sidebar.php';
    ?>


    <section class=" min-vh-100" style="background-image: url('src/resources/img/tablet.png'),  url('src/resources/img/steto.png');  background-repeat: no-repeat; background-size: 10% 20%; background-position: 100% 100%,  10% 20% ">
        <div class="container" style="color: #7B7A7A; ">
            <div class="row">
                <div class="col mt-lg-5 mt-xl-5 mt-sm-3">
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">HISTORY</span>
                </div>

                <img class="p-0 mt-lg-5 mt-xl-4 mt-sm-3" src="<?php echo$_SESSION['picture'];?>" style="width: 100px; height: 100px; border-radius: 100%; float: right;">

            </div>
        </div>

        <div class="container mt-3 pt-5">
            <div class="text-center mb-3">
                <span class="h3" style="letter-spacing: 2px; font-weight: bold; color: #000;">ACCOMPLISHED APPOINTMENTS</span>
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

            <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                <table class="table" id="tbl_appointment_history">
                    <thead class="text-center" >
                        <tr class="table_title">
                            <th>APPOINTMENT ID</th>
                            <th>PATIENT ID</th>
                            <th>NAME</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="data-title" data-title="APPOINTMENT ID"><small class="h6 text-black">0001</small></td>
                            <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">233545</small></td>
                            <td class="data-title" data-title="NAME"><small class="h6 text-black">Lloyd Berdugo D. Burbok</small></td>
                        </tr>


                        <tr>
                            <td class="data-title" data-title="APPOINTMENT ID"><small class="h6 text-black">0002</small></td>
                            <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">233545</small></td>
                            <td class="data-title" data-title="NAME"><small class="h6 text-black">Lloydick D. Burbok</small></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class=" min-vh-100" style="background-image: url('src/resources/img/medkit.png');  background-repeat: no-repeat; background-size: 10% 20%; background-position: 100% 100%,  10% 20% ">
        <div class="container  pt-5">
            <div class="text-center mb-3">
                <span class="h3" style="letter-spacing: 2px; font-weight: bold; color: #000;">UNATTENDED</span>
            </div>

            <div class="row d-flex justify-content-around mt-5 mb-3">
                <div class="select text-muted">
                    <select class="selection" id="sel_cancelled_appointments_sort">
                        <option value="">SORT BY</option>
                        <option value="appointment_id">Appointment Id</option>
                        <option value="user_id">Patient Id</option>
                        <option value="name">Name</option>
                    </select>
                </div>

                <div class="search mb-3 " style="box-shadow: 2px 3px #888888; float: right !important;">
                    <span style="font-size: 1rem; padding-left: 1rem; color: #888888;"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="search" placeholder="Search..." style="border: none; outline: none; ">
                </div>
            </div>

            <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                <table class="table" id="tbl_appointment_history_cancelled">
                    <thead class="text-center">
                        <tr class="table_title">
                            <th>APPOINTMENT ID</th>
                            <th>PATIENT ID</th>
                            <th>NAME</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="data-title" data-title="APPOINTMENT ID"><small class="h6 text-black">01192022</small></td>
                            <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">23215455</small></td>
                            <td class="data-title" data-title="NAME"><small class="h6 text-black">Lloyd Berdugo</small></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>