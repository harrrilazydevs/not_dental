<?php

//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                a.id,
                a.uid,
                a.pass,
                f_name,
                m_name,
                l_name,
                picture
        FROM
                tbl_users a
        LEFT JOIN    
                tbl_profile b
        ON 
                b.user_id = a.id
        WHERE
                user_access = "admin"
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
