<?php
session_start();
$_SESSION['theme'] = 'dental_clinic';
// $_SESSION['access_level'] = 'user';

if (!isset($_SESSION['access_level'])) {
    $_SESSION['access_level'] = 'user';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Cheronzelle
    </title>
    <link rel="stylesheet" href="src/resources/lib/bootstrap/bs.css">
    <link rel="stylesheet" href="src/resources/lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="src/resources/lib/carousel/carousel.css">
    <link rel="stylesheet" href="src/resources/styles/main.css">





    <!-- THEMES -->

    <?php

    if ($_SESSION['theme'] == 'dental_clinic') {
        echo '<link rel="stylesheet" href="src/resources/styles/dental_clinic.css">';
        echo '<link rel="stylesheet" href="src/resources/styles/dental_clinic_kd.css">';
        echo '<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">';
    }

    ?>

    <script src="src/resources/lib/bootstrap/bs.js"></script>
    <script src="src/resources/lib/jquery/jquery.js"></script>
    <script src="src/resources/lib/carousel/carousel.js"></script>
    <script src="src/resources/lib/jsPdf/html2pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script src="src/resources/lib/chartJs/chart.js"></script>


</head>



<body>

    <input type="hidden" value="<?php
                                if (isset($_SESSION['access_level'])) {
                                    echo $_SESSION['access_level'];
                                }
                                ?>" id="txt_user_access">
    <input type="hidden" id="txt_user_mobile" value="<?php
                                                        if (isset($_SESSION['contact_no'])) {
                                                            echo $_SESSION['contact_no'];
                                                        }
                                                        ?>">

    <input type="hidden" id="txt_user_id" value="<?php
                                                    if (isset($_SESSION['user_id'])) {
                                                        echo $_SESSION['user_id'];
                                                    }
                                                    ?>">

    <input type="hidden" id="txt_gender" value="<?php
                                                if (isset($_SESSION['gender'])) {
                                                    echo $_SESSION['gender'];
                                                }
                                                ?>">

    <input type="hidden" id="txt_house_no" value="<?php
                                                    if (isset($_SESSION['house_no'])) {
                                                        echo $_SESSION['house_no'];
                                                    }
                                                    ?>">

    <input type="hidden" id="txt_street" value="<?php
                                                if (isset($_SESSION['street'])) {
                                                    echo $_SESSION['street'];
                                                }
                                                ?>">

    <input type="hidden" id="txt_brgy" value="<?php
                                                if (isset($_SESSION['brgy'])) {
                                                    echo $_SESSION['brgy'];
                                                }
                                                ?>">

    <input type="hidden" id="txt_city" value="<?php
                                                if (isset($_SESSION['city'])) {
                                                    echo $_SESSION['city'];
                                                }
                                                ?>">

    <input type="hidden" id="txt_province" value="<?php
                                                    if (isset($_SESSION['province'])) {
                                                        echo $_SESSION['province'];
                                                    }
                                                    ?>">

    <input type="hidden" id="txt_age" value="<?php
                                                if (isset($_SESSION['age'])) {
                                                    echo $_SESSION['age'];
                                                }
                                                ?>">

    <input type="hidden" id="txt_bdate" value="<?php
                                                if (isset($_SESSION['bdate'])) {
                                                    echo $_SESSION['bdate'];
                                                }
                                                ?>">

    <input type="hidden" id="txt_contact_no" value="<?php
                                                    if (isset($_SESSION['contact_no'])) {
                                                        echo $_SESSION['contact_no'];
                                                    }
                                                    ?>">

    <input type="hidden" id="txt_email" value="<?php
                                                if (isset($_SESSION['email'])) {
                                                    echo $_SESSION['email'];
                                                }
                                                ?>">
    <!-- CONTENTS -->
    <?php


    if ($_SESSION['theme'] == 'dental_clinic' && $_SESSION['access_level'] == 'admin') {

        // NAVS AND SIDEBARS
        include_once 'src/pages/dental_clinic/admin/admin_sidebar.php';

        // PAGES PHP
        include_once 'src/pages/dental_clinic/admin/overview.php';
        include_once 'src/pages/dental_clinic/admin/registeredPatient.php';
        include_once 'src/pages/dental_clinic/admin/history.php';
        include_once 'src/pages/dental_clinic/admin/admin_appointment.php';
        include_once 'src/pages/dental_clinic/admin/admin_modal.php';
        include_once 'src/pages/dental_clinic/admin/prices.php';
        include_once 'src/pages/dental_clinic/admin/prices_sms.php';
        include_once 'src/pages/dental_clinic/admin/packages.php';
        include_once 'src/pages/dental_clinic/admin/packages_sms.php';
        include_once 'src/pages/dental_clinic/admin/sms.php';
        include_once 'src/pages/dental_clinic/admin/admin_accounts.php';


        echo '<script src="src/func/dental_clinic/admin/admin.js"></script>';
    }

    if ($_SESSION['theme'] == 'dental_clinic') {

        // NAVS AND SIDEBARS

        // include_once 'src/pages/dental_clinic/user/sidebarUser.php';
        include_once 'src/pages/dental_clinic/user/modals.php';
        include_once 'src/pages/dental_clinic/user/userMobileSidebar.php';

        // PAGES PHP
        include_once 'src/pages/dental_clinic/user/navbar.php';
        include_once 'src/pages/dental_clinic/user/createAcc.php';
        include_once 'src/pages/dental_clinic/user/page11.php';
        include_once 'src/pages/dental_clinic/user/0page.php';
        include_once 'src/pages/dental_clinic/user/labResult.php';
        include_once 'src/pages/dental_clinic/user/incomingApp.php';
        include_once 'src/pages/dental_clinic/user/appointments.php';
        include_once 'src/pages/dental_clinic/user/login.php';

        // NAVS AND SIDEBARS
        // include_once 'src/pages/dental_clinic/user/sidebarUser.php';
        // include_once 'src/pages/dental_clinic/user/modals.php';
        // include_once 'src/pages/dental_clinic/user/userMobileSidebar.php';
        include_once 'src/pages/dental_clinic/user/bottomNav.php';

        echo '<script src="src/func/dental_clinic/main.js"></script>';
        echo '<script src="src/func/dental_clinic/user/user.js"></script>';
    }

    ?>

</body>

</html>