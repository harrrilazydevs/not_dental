<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                f_name,
                m_name,
                l_name,
                gender,
                house_no,
                street,
                brgy,
                city,
                province,
                uid,
                pass,
                age,
                bdate,
                contact_no,
                email
        FROM
                tbl_users b
        LEFT JOIN
               
        tbl_profile a
        ON
                a.user_id = b.id
        WHERE
                user_id = "'.$_GET['id'].'"
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
