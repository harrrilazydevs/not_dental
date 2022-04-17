<div class="dashboard_nested d-none" id="test_sidebar_user" style="background-color: #4DBDAC;height: 200vh; position: fixed; right:0">

    <div>
        <div class="container mt-lg-5 ms-lg-2">

            <h6 class="text-white" style="font-weight: bold; font-size: 20px;">Hello,</h6>
            <h5 class="text-white" style="font-weight: bold;"><?php if (isset($_SESSION['username'])) {
                                                                    echo $_SESSION['username'];
                                                                } ?>!</h5>

        </div>
    </div>

    <div>
        <div class="container mt-lg-4 ms-lg-2 ">
            <div class="text-end">
                <i class="fa-solid fa-user-gear icon_btn btn_view_update_account"></i>
            </div>
            <img src="<?php if (isset($_SESSION['picture'])) {
                            echo $_SESSION['picture'];
                        } ?>" style="width: 100px; height: 100px; border-radius: 100%;">
        </div>

    </div>

    <div class="container ms-lg-2">
        <span class="h6" style="font-weight: bold;">Reminders!</span>
        <ul class="list-group">
            <li class="list-group-item sidebar_dental  border-0 m-0 p-2"><i class="fa-solid pe-1 fa-envelope"></i> <span>Reminders</span></a></li>
            <li class="list-group-item sidebar_dental  border-0 m-0 p-2"><i class="fa-solid pe-1 fa-envelope"></i> <span>Reminders</span></a></li>
            <li class="list-group-item sidebar_dental  border-0 m-0 p-2"><i class="fa-solid pe-1 fa-envelope"></i> <span>Reminders</span></a></li>

        </ul>
    </div>

    <div>
        <small class="ms-5" style="font-weight: bold; font-size: 12px;">
            <a href="#" class="text-white">View All <i class="fa-solid fa-chevron-right"></i></a>
        </small>
    </div>
</div>