<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                service,
                price,
                status
        FROM
                tbl_services a 
        LEFT JOIN
                tbl_appointment_details b
        ON
                a.id = b.service_id
        WHERE
                appointment_id = ' . $_GET['id'] . '
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
