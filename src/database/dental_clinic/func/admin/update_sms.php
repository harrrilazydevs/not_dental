<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();


$q = '
        UPDATE  
                tbl_sms_templates
        SET
                sms = "'.$_POST['sms'].'"
        WHERE   
                id = "'.$_POST['id'].'"
';

$db->update($q);
