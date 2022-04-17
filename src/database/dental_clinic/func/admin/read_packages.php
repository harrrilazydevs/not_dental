<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                id,
                name,
                price,
                status
        FROM
                tbl_packages
        ORDER BY 
                id
        DESC
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
