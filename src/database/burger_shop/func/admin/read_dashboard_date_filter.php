<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

$date_arr = []; 

$q = '

        SELECT 
                distinct(order_date)
        FROM
                tbl_orders;
';
$orders = $db->read($q);
foreach ($orders as $key => $val) {
        array_push($date_arr, $val['order_date']);
}


$q = '
        SELECT 
                distinct(register_date)
        FROM
                tbl_users;
';
$orders = $db->read($q);
foreach ($orders as $key => $val) {
        array_push($date_arr, $val['register_date']);
}

rsort($date_arr);

echo json_encode($date_arr);


?>