<?php
//DATABASE FUNCTIONS
include '../../db.php';

$id = $_POST['id'];

$q = '
        SELECT 
                *
        FROM
                tbl_appointments
        WHERE 
                user_id =' . $id . '
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
