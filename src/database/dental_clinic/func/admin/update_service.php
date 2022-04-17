<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();


$q = '
        UPDATE  
                tbl_services
        SET
                price = "'.$_POST['price'].'",
                category = "'.$_POST['category'].'",
                service = "'.$_POST['service'].'",
                status = "'.$_POST['status'].'"
        WHERE   
                id = "'.$_POST['id'].'"
';

$db->update($q);
