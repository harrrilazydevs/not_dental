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
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
