<div class="d-none page" id="page_appointment" style="background-color: white;">
    <?php
    include 'side_bar_1.php';
    ?>
    <div class="myAcc_grid">
        <!-------- MAIN GRID --------->
        <div class="container min-vh-100" style="color: #7B7A7A;">
            <div class="row title_dashboard">
                <div class="col-lg-12 col-sm-12 mt-lg-3 mt-sm-5 mb-sm-3 mt-xl-5 mt-lg-5">
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">APPOINTMENTS</span>
                    <i class="fa-solid fa-gear h3 setting_icon d-lg-none" style="float: right;" data-bs-toggle="offcanvas" data-bs-target="#user_Mobile_Sidebar" aria-controls="offcanvasRight"></i>
                </div>
            </div>


            <section class="p-5 pt-3">
                <div class="container">
                        <div class="search mb-3 "  style="box-shadow: 2px 3px #888888;">
                            <span style="font-size: 1rem; padding-left: 1rem;"><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="search" id="txt_search_appointments" placeholder="Search..." style="border: none; outline: none; ">
                        </div>
                    <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                        <table class="table" id="tbl_appointments">
                            <thead class="text-center">
                                <tr class="table_title" style="font-weight: bold; color: #80CEB8; font-size: 14px;">
                                    <th>APPOINTMENT ID</th>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td class="data-title" data-title="APPOINTMENT ID"> <small class="h6 text-black">01102022</small></td>
                                    <td class="data-title" data-title="DATE"><small class="h6 text-black">01-19-2022</small></td>
                                    <td class="data-title" data-title="TIME"><small class="h6 text-black"> 7:00 - 9:00 AM</small></td>
                                    <td class="data-title" data-title="SERVICE"><small class="h6 text-black">Package 1</small></td>
                                    <td class="data-title" data-title="">
                                        <button class="text-white" style="background:#80CEB8; border-radius:5px; cursor: pointer; border: none;">View</button>
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