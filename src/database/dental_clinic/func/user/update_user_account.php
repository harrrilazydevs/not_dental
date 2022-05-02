<?php
//DATABASE FUNCTIONS
session_start();

include '../../db.php';

$db = new Database();



$q = '
        UPDATE  
                tbl_profile
        SET
                f_name = "'.$_POST['f_name'].'",
                m_name = "'.$_POST['m_name'].'",
                l_name = "'.$_POST['l_name'].'",
                gender = "'.$_POST['gender'].'",
                house_no = "'.$_POST['house_no'].'",
                street = "'.$_POST['street'].'",
                brgy = "'.$_POST['brgy'].'",
                city = "'.$_POST['city'].'",
                province = "'.$_POST['province'].'",
                age = "'.$_POST['age'].'",
                bdate = "'.$_POST['bdate'].'",
                contact_no = "'.$_POST['contact_no'].'",
                email = "'.$_POST['email'].'"
        WHERE   
                user_id = "'.$_POST['user_id'].'"
';

$db->update($q);


$q = '
        UPDATE  
                tbl_users
        SET
                uid = "'.$_POST['uid'].'",
                pass = "'.$_POST['pass'].'"
           
        WHERE   
                id = "'.$_POST['user_id'].'"
';

$db->update($q);


$_SESSION['username'] = $_POST['f_name'];
$_SESSION['contact_no'] = $_POST['contact_no'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['house_no'] = $_POST['house_no'];
$_SESSION['street'] = $_POST['street'];
$_SESSION['brgy'] = $_POST['brgy'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['province'] = $_POST['province'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['bdate'] = $_POST['bdate'];
$_SESSION['contact_no'] = $_POST['contact_no'];
$_SESSION['email'] = $_POST['email'];


var_dump($_SESSION);