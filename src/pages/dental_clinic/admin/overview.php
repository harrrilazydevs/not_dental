<div class="d-none page" id="page_overview" style="background-color: white;">
    <?php
    include 'admin_sidebar.php';
    ?>








    <section class=" min-vh-100">

        <div class="container" style="color: #7B7A7A;">
            <div class="row overview_admin">
                <div class="col mt-lg-5 mt-xl-5 mt-sm-3">
                    <small class="h2 ms-lg-1 fw-bold" style="font-size: 15px; letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">ADMIN</small>
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;"><br>OVERVIEW</span>
                </div>

                <img class="p-0 mt-lg-5 mt-xl-5 mt-sm-3 overview_admin_img" src="<?php echo $_SESSION['picture']; ?>" style="width: 100px; height: 100px; border-radius: 100%; float: right;">

            </div>
        </div>


        <div class="container mt-5 mb-0 pt-3 text-dark ">
            <div class="row">
                <div class="col-7"></div>
                <div class="col-2">

                </div>
                <div class="col-3">
                    <label for="">Filter by</label>
                    <select name="" id="dash_filter" class="form-select">
                        <option value="day">Day</option>
                        <option value="month">Month</option>
                        <option value="year">Year</option>
                    </select>

                    <select style="display:none" id="dash_filter_month" class="form-select mt-2">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>

                    <input type="date" class="form-control mt-2" id="dash_filter_day">

                    <select style="display:none" id="dash_filter_year" class="form-select mt-2">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="row  row-cols-3 d-flex justify-content-center mt-sm-5">
                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 20px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Total Profit</span>
                        <span class="ms-3 mt-2 mb-4" id="dash_total_profit" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">₱ 0</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 20px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Accomplished Appointments</span>
                        <span class="ms-3 mt-2 mb-4" id="dash_accomplished_appointments" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">0</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 20px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Cancelled Appointments</span>
                        <span class="ms-3 mt-2 mb-4" id="dash_cancelled_appointments" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">0</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 20px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Number of Accounts</span>
                        <span class="ms-3 mt-2 mb-4" id="dash_number_of_accounts" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">0</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 20px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Pending Appointments</span>
                        <span class="ms-3 mt-2 mb-4" id="dash_pending_appointments" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">0</span>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 20px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Incoming Appointments</span>
                        <span class="ms-3 mt-2 mb-4" id="dash_incoming_appointments" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">0</span>
                    </div>
                </div>
            </div>
        </div>








        <div class="container pt-3 text-dark ">
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2">
                    <button class="btn" id="btn_generate_report" style="width:100%; height:35px;font-size:10pt;">Generate Report</button>
                </div>
            </div>
        </div>

        <div class="container mt-3 mb-5 pt-5">
            <div class="text-center mb-3">
                <span class="h6" style="letter-spacing: 2px; font-weight: bold; color: #000;">INCOMING APPOINTMENTS</span>
            </div>
            <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                <table class="table" id="tbl_overview">
                    <thead class="text-center">
                        <tr class="table_title">
                            <th>ID</th>
                            <th>PATIENT ID</th>
                            <th>NAME</th>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<div class="div_print_report pt-3" style="display:none">

    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="text-dark ps-2 border-bottom">System Report</h5>
                <table class="table table-striped" id="tbl_system_report">
                    <thead>
                        <th>Total Profit</th>
                        <th>Number of Accounts</th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h5 class="text-dark ps-2 border-bottom">Appointment Report</h5>
                <table class="table table-striped" id="tbl_appointment_report">
                    <thead>
                        <th>Incoming</th>
                        <th>Pending</th>
                        <th>Accomplished</th>
                        <th>Cancelled</th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

</div>



<div id="print_report_div" class="print_report_div" style="width:80%; ">
    <!-- <div class="container">
            <div class="row">
                <div class="col">
                    <h5 class="text-dark ps-2 border-bottom">System Report</h5>
                    <table class="table table-striped" id="tbl_system_report">
                        <thead>
                            <th class="text-center">Total Profit</th>
                            <th class="text-center">Number of Accounts</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <h5 class="text-dark ps-2 border-bottom">Appointment Report</h5>
                    <table class="table table-striped" id="tbl_appointment_report">
                        <thead>
                            <th class="text-center">Incoming</th>
                            <th class="text-center">Pending</th>
                            <th class="text-center">Accomplished</th>
                            <th class="text-center">Cancelled</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div> -->
</div>