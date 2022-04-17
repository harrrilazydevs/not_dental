<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();


$q = '
        UPDATE  
                tbl_packages
        SET
                price = "'.$_POST['price'].'",
                name = "'.$_POST['name'].'",
                status = "'.$_POST['status'].'"
        WHERE   
                id = "'.$_POST['id'].'"
';

$db->update($q);
