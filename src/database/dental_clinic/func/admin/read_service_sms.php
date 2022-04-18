<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
               b.sms,
               service,
               a.id
        FROM
                tbl_service_sms a 
        LEFT JOIN
                tbl_sms_templates b
        ON
                a.sms_id = b.id
        LEFT JOIN
                tbl_services c
        ON
                a.service_id = c.id
        ORDER BY 
                a.id
        DESC
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
