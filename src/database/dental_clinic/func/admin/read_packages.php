<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                a.id,
                name,
                price,
                status,
                description,
                b.sms,
                picture
        FROM
                tbl_packages a 
        LEFT JOIN
                tbl_sms_templates b
        ON
                a.sms = b.id
        ORDER BY 
                id
        DESC
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
