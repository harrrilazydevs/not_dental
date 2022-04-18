<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '

        INSERT INTO
            tbl_packages(name,status,description,price)
        VALUES
            (
                "'.$_POST["name"].'",
                "'.$_POST["status"].'",
                "'.$_POST["description"].'",
                '.$_POST["price"].')
        ';

$db = new Database();
$result = $db->update($q);

echo json_encode($result);


?>