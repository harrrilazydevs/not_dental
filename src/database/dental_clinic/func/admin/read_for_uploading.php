<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                a.id as appointment_id,
                a.user_id as patient_id,
                date,
                time,
                concat(f_name," ",l_name) as patient
        FROM
                tbl_appointments a
        LEFT JOIN    
                tbl_profile b
        ON 
                b.user_id = a.user_id
        LEFT JOIN    
                tbl_available_appointments c
        ON 
                c.id = a.availability_id
        WHERE
                a.status = "for-uploading"
';

$db = new Database();
$result = $db->read($q);

// var_dump($result);
echo json_encode($result);
