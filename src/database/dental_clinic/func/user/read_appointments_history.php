<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT  
               a.id,
               a.user_id,
               concat(f_name," ", l_name) as name
        FROM 
                tbl_appointments a
        LEFT JOIN
                tbl_profile b
        ON
                a.user_id = b.user_id
        WHERE
                status != "pending"

';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
