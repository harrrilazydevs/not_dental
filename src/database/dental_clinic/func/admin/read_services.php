<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                id,
                service,
                price,
                status,
                category
        FROM
                tbl_services
        ORDER BY 
                id 
        DESC
      
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
