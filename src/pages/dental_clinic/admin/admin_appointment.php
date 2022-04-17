<div class="d-none page" id="page_admin_appointment" style="background-color: white;">

    <?php
    include 'admin_sidebar.php';
    ?>

    <section class=" min-vh-100" style="background-image:  url('src/resources/img/inject.png');  background-repeat: no-repeat; background-size: 10% 20%; background-position: 10% 20% ">
        <div class="container" style="color: #7B7A7A; ">
            <div class="row">
                <div class="col mt-sm-3">
                    <img class="p-0 mt-lg-5 mt-xl-4 mt-sm-3" src="<?php echo$_SESSION['picture'];?>" style="width: 100px; height: 100px; border-radius: 100%; float: right;">
                </div>
            </div>
        </div>

        <div class="container mt-3 pt-5">
            <div class="text-center mb-3">
                <span class="h3" style="letter-spacing: 2px; font-weight: bold; color: #000;">PENDING</span>
            </div>

            <div class="row d-flex justify-content-around mt-5 mb-3">
                <div class="select text-muted">
                    <select class="selection">
                        <option value="1">SORT BY</option>
                        <option value="2">TEST 1</option>
                        <option value="3">TEST 2</option>
                    </select>
                </div>

                <div class="search mb-3 " style="box-shadow: 2px 3px #888888; float: right !important;">
                    <span style="font-size: 1rem; padding-left: 1rem; color: #888888;"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="search" placeholder="Search..." style="border: none; outline: none; ">
                </div>
            </div>

            <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                <table class="table" id="tbl_for_uploading">
                    <thead class="text-center">
                        <tr class="table_title">
                            <th>APPOINTMENT ID</th>
                            <th>PATIENT ID</th>
                            <th>NAME</th>
                            <th>LAB RESULTS</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="data-title" data-title="APPOINTMENT ID"><small class="h6 text-black">01192022</small></td>
                            <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">9532539</small></td>
                            <td class="data-title" data-title="NAME"><small class="h6 text-black">Alasum Samalaykum D.</small></td>
                            <td class="data-title" data-title="LAB RESULTS">
                                <button class="text-white" data-bs-toggle="modal" data-bs-target="#admin_appointment_upload" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 1.5rem;">UPLOAD</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    
</div>