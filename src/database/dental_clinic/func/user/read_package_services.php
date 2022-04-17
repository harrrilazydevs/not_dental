<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();

$q = '
        SELECT 
                service_id
        FROM
                tbl_package_services
        WHERE
                package_id = '.$_GET['id'];

$service_ids = $db->read($q);

$where_in = '(';

foreach ($service_ids as $key => $value) {
        $where_in .= $value['service_id'].',';
}
$where_in = rtrim($where_in, ", ");
$where_in .= ')';

$q = '
        SELECT 
                service,
                id,
                price
        FROM
                tbl_services
        WHERE 
                id
        IN
                '.$where_in;

$services = $db->read($q);

echo json_encode($service_ids);
