<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();

$q = '
        DELETE FROM  
                tbl_package_services
        WHERE   
                id = '.$_POST['id'].'
     
';


$db->update($q);


