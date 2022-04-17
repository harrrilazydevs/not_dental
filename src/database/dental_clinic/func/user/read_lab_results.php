<?php
//DATABASE FUNCTIONS
include '../../db.php';

$id = $_GET['id'];

$q = '
        SELECT 
                dir
        FROM
                tbl_lab_results a
        LEFT JOIN
                tbl_appointments b
        ON      
                a.appointment_id = b.id
        WHERE
                user_id = '.$id.'
                
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
