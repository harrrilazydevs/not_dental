<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                a.id,
                service,
                price,
                status,
                category,
                c.sms
        FROM
                tbl_services a
        LEFT JOIN
                tbl_service_sms b
        ON
                a.id = b.service_id
        LEFT JOIN
                tbl_sms_templates c
        ON
                c.id = b.sms_id
        ORDER BY 
                id 
        DESC
        
      
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
