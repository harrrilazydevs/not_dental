<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

$q = '
        SELECT 
                sms
        FROM
                tbl_package_sms a
        LEFT JOIN
                tbl_sms_templates b
        ON
                a.sms_id = b.id

        WHERE
                package_id = ' . $_GET['id'] . '
';
$result = $db->read($q);



echo json_encode($result);
