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
                l_name = "'.$_POST['l_name'].'"
        WHERE   
                user_id = "'.$_POST['id'].'"
';

$db->update($q);

$q = '
        UPDATE  
                tbl_users
        SET
                uid = "'.$_POST['uid'].'",
                pass = "'.$_POST['pass'].'"
        WHERE   
                id = "'.$_POST['id'].'"
';

$db->update($q);