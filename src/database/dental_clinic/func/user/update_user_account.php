<?php
//DATABASE FUNCTIONS
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
