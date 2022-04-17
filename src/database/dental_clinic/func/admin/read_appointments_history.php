<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

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
                status = "completed"

';

$completed = $db->read($q);


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
                status = "cancelled"

';

$cancelled = $db->read($q);

echo json_encode([
        'cancelled'=>$cancelled,
        'completed'=>$completed
]);
