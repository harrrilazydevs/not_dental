<?php
//DATABASE FUNCTIONS
include '../../db.php';

$data = $_POST["ids"];
$package_id = $_POST["package_id"];

$q = '

        INSERT INTO
                    tbl_package_services(service_id,package_id)
        VALUES
            
        ';

for ($i=0; $i < count($data); $i++) { 
    $q .= '
    (
        "'.$data[$i].'",
        "'.$package_id.'"
    ),';
}
$q = rtrim($q, ", ");

$db = new Database();
$result = $db->update($q);

echo json_encode($result);


?>