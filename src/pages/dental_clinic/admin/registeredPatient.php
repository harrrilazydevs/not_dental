<div class="page" id="page_registered_patient" style="background-color: white;">

    <?php
    include 'admin_sidebar.php';
    ?>


    <section class=" min-vh-100" style="background-image: url('src/resources/img/medkit.png'),  url('src/resources/img/inject.png');  background-repeat: no-repeat; background-size: 10% 20%; background-position: 100% 100%,  10% 20% ">
        <div class="container" style="color: #7B7A7A; ">
            <div class="row">
                <div class="col mt-lg-5 mt-xl-5 mt-sm-3">
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">PATIENTS</span>
                </div>

                <img class="p-0 mt-lg-5 mt-xl-4 mt-sm-3" src="<?php echo$_SESSION['picture'];?>" style="width: 100px; height: 100px; border-radius: 100%; float: right;">

            </div>
        </div>

        <div class="container mt-3 pt-5">
            <div class="text-center mb-3">
                <span class="h3" style="letter-spacing: 2px; font-weight: bold; color: #000;">REGISTERED PATIENTS</span>
            </div>

            <div class="row d-flex justify-content-around mt-5 mb-3">
                <div class="select text-muted">
                    <select class="selection" id="sort_registered_patients">
                        <option value="1">SORT BY</option>
                        <option value="2">Patient Id</option>
                        <option value="3">Last Name</option>
                        <option value="4">First Name</option>
                    </select>
                </div>

                <div class="search mb-3 " style="box-shadow: 2px 3px #888888; float: right !important;">
                    <span style="font-size: 1rem; padding-left: 1rem; color: #888888;"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="search" id="txt_registered_patient" placeholder="Search..." style="border: none; outline: none; ">
                </div>
            </div>

            <div class="table-responsive" id="tbl_registered_patient" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                <table class="table">
                    <thead class="text-center">
                        <tr class="table_title">
                            <th>PATIENT ID</th>
                            <th>LAST NAME</th>
                            <th>FIRST NAME</th>
                            <th>MIDDLE NAME</th>
                            <th>DETAILS</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">01192022</small></td>
                            <td class="data-title" data-title="LAST NAME"><small class="h6 text-black">Lloyd Berdugo</small></td>
                            <td class="data-title" data-title="FIRST NAME"><small class="h6 text-black">01-19-2022</small></td>
                            <td class="data-title" data-title="MIDDLE NAME"><small class="h6 text-black">7:00 - 9:00 AM</small></td>
                            <td class="data-title" data-title="DETAILS">
                                <button class="text-white" data-bs-toggle="modal" data-bs-target="#view_patient" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 1.5rem;">VIEW</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>