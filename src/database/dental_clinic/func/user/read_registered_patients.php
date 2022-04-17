<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT  
                b.id as patient_id,
                f_name,
                m_name,
                l_name,
                age,
                house_no,
                street,
                brgy,
                city,
                province,
                contact_no,
                gender,
                age,
                bdate
        FROM
                tbl_profile a
        LEFT JOIN
                tbl_users b
        ON
                a.user_id = b.id
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
