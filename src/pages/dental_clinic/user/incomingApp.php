<div class="d-none page" id="page_incoming_appointment" style="background-color: white;">
    <?php
    include 'side_bar_1.php';
    ?>
    <div class="incoming_Appointment">
        <!-------- MAIN GRID --------->
        <div class="container min-vh-100" style="color: #7B7A7A; ">
        
            <div class="row title_dashboard">
                <div class="col-lg-12 col-sm-12 mt-lg-3 mt-sm-5 mb-sm-3 mt-xl-5 mt-lg-5">
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">INCOMING APPOINTMENTS</span>
                    <i class="fa-solid fa-gear h3 setting_icon d-lg-none" style="float: right;" data-bs-toggle="offcanvas" data-bs-target="#user_Mobile_Sidebar" aria-controls="offcanvasRight"></i>
                </div>
            </div>


            <section class="p-5 pt-2">
                <div class="container">
                    <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                        <table class="table" id="tbl_incoming_appointments">
                            <thead class="text-center">
                                <tr class="table_title" style="font-weight: bold; color: #80CEB8; font-size: 14px;">
                                    <th>APPOINTMENT ID</th>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th>DETAILS</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" >
                                <tr style="font-size:12pt;">
                                    <td class="data-title" data-title="APPOINTMENT ID"> <small class="text-black">01102022</small></td>
                                    <td class="data-title" data-title="DATE"><small class="text-black">01-19-2022</small></td>
                                    <td class="data-title" data-title="TIME"><small class="text-black"> 7:00 - 9:00 AM</small></td>
                                    <td class="data-title" data-title="DETAILS">
                                        <button class="text-white px-3" data-bs-toggle="modal" data-bs-target="#incomingAppointment" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">View</button>
                                        <button class="text-white px-2 ms-lg-2" style="background: red; border-radius:5px; text-decoration: none; cursor: pointer; font-size: 12px;  border: none;">Cancel</button>
                                    </td>
                                </tr>
                               

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <!-------- MAIN GRID --------->

        <!-------- NESTED GRID --------->
        <div>
            <?php include 'src/pages/dental_clinic/user/sidebarUser.php'; ?>
        </div>
        <!-------- NESTED GRID --------->
    </div>
</div>