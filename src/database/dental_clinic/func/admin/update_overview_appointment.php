<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();

$q = '
        UPDATE  
                tbl_appointments
        SET
                status="'.$_POST['status'].'"
        WHERE   
                id = "'.$_POST['id'].'"
';

$db->update($q);
