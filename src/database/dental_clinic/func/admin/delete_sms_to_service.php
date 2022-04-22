<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();

$q = '

    DELETE FROM
        tbl_service_sms
    WHERE
        id = '.$_POST['id'].'
        
    ';


$result = $db->update($q);

echo json_encode($result);
