<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                id,
                service,
                price,
                status
        FROM
            tbl_services
        WHERE
                category = "'.$_GET['category'].'" 
                AND 
                status ="OK"
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
