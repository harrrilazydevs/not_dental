<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                id,
                name,
                price
        FROM
                tbl_packages
        WHERE 
                status ="OK"
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
