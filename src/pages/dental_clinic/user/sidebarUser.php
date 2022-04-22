<div class=" d-none" id="sidebar_user" style="background-color: #4DBDAC;height: 90vh; ">

    <div class="container-fluid text-start ">

        <div class="row mt-3">
            <div class="col text-end">
                <i class="fa-solid fa-user-gear fa-lg icon_btn btn_view_update_account"></i>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-6 ">
                <h6 class="text-white" style="font-weight: bold; font-size: 20px;">Hello,</h6>
                <h5 class="text-white" style="font-weight: bold;" id="sidebar_name">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                    ?>
                </h5>
            </div>
            <div class="col-6">

                <img id="sidebar_img" 
                src="
                    <?php
                    if (isset($_SESSION['picture'])) {
                        echo $_SESSION['picture'];
                    }
                    ?>
                " 
                style="width: 120px; height: 120px; border-radius: 100%;">
            </div>
        </div>
        <div class="row mt-5" style="display:none" id="selected_services_div">
            <div class="col">
                <h6 style="font-weight: bold;">Selected Services :</h6>
                <ul class="list-group" id="selected_services_list">
                 
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h6 style="font-weight: bold;">Reminders</h6>

                <ul class="list-group" id="list_reminders">
                    <li class="list-group-item sidebar_dental  border-0 m-0 p-2">
                        <i class="fa-solid pe-1 fa-envelope"></i> <span>Reminders</span>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</div>