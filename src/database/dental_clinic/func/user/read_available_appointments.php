<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();

$q = '
        SELECT 
                *
        FROM
            tbl_available_appointments
        WHERE
            date = "' . date('y-m-d') . '"

';
$result = $db->read($q);

if (empty($result)) {
    $q = '
            UPDATE 
                    tbl_available_appointments
            SET
                    slot = 10,
                    date = "' . date('y-m-d') . '"
    ';
    $db->update($q);

    $q = '
            SELECT 
                    *
            FROM
                tbl_available_appointments
            WHERE
                date = "' . date('y-m-d') . '"

    ';
    $result = $db->read($q);
    echo json_encode($result);
} else {
    echo json_encode($result);
}


// $db = new Database();
// $result = $db->read($q);
