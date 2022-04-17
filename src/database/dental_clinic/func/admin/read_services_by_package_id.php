<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                b.id as service_id,
                a.id,
                package_id,
                service
        FROM
                tbl_package_services a
        LEFT JOIN
                tbl_services b
        ON
                a.service_id = b.id
        WHERE 
                a.package_id = '.$_GET['id'].'
        ORDER BY a.id DESC        
        ';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
