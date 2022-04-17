<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT
                a.id,
                date_booked,
                time,
                physician,
                status
        FROM
                tbl_appointments a
        INNER JOIN
                tbl_available_appointments b
        ON
                a.availability_id = b.id
        WHERE
                user_id = "'.$_GET['user_id'].'"
        AND
                a.status != "pending"
        ORDER BY
        a.id
        DESC


';
$db = new Database();
$result = $db->read($q);

echo json_encode($result);
