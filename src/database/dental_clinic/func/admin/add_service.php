<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '

        INSERT INTO
            tbl_services(service,status,category,price)
        VALUES
            (
                "'.$_POST["service"].'",
                "'.$_POST["status"].'",
                "'.$_POST["category"].'",
                '.$_POST["price"].')
        ';


$db = new Database();
$result = $db->update($q);

echo json_encode($result);


?>