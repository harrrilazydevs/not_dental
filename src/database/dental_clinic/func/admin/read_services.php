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
                b.sms
        FROM
                tbl_services a
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
