<?php
//DATABASE FUNCTIONS
include '../../db.php';

$id = $_GET['id'];


$q = '
        SELECT 
                *
        FROM
                tbl_user a
        LEFT JOIN
                tbl_profile b
        ON
                a.profile_id = a.id
        WHERE 
                a.id =' . $id . '
';

$db = new Database();
$result = $db->read($q);

if (count($result) > 0) {
        echo 1;
} else {
        echo 0;
}
