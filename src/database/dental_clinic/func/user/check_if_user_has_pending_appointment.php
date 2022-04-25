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

if (count($result) > 0) {
        echo 1;
} else {
        echo 0;
}
