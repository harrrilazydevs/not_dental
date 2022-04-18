<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
               b.sms,
               package,
               a.id
        FROM
                tbl_package_sms a 
        LEFT JOIN
                tbl_sms_templates b
        ON
                a.sms_id = b.id
        LEFT JOIN
                tbl_packages c
        ON
                a.package_id = c.id
        ORDER BY 
                a.id
        DESC
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
