<?php
//DATABASE FUNCTIONS
include '../../db.php';

$str = str_replace("[","(",$_GET['id']);
$str = str_replace("]",")",$str);

$q = '
        SELECT 
                service,
                price,
                status
        FROM
            tbl_services
        WHERE
                id in '.$str.'
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
