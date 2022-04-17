<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
               *
        FROM
                tbl_package_services 
        WHERE 
                package_id = '.$_GET['package_id'].'
        AND
                service_id = '.$_GET['service_id'];

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
