<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
            id,
            sms
        FROM
            tbl_sms_templates 
        WHERE 
            id ='.$_GET['id'];

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
