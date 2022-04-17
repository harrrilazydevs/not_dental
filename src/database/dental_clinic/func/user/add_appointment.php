<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

$availability_id = $_POST['availability_id'];
$user_id = $_POST['user_id'];
$selected_services = $_POST['selected_services'];

$q = '  
        INSERT INTO
            tbl_appointments(availability_id,user_id)
        VALUES  
            (
                "'.$availability_id.'",
                "'.$user_id.'"
            )    
          ';

$result = $db->update($q);

$q = '  
        SELECT
                id
        FROM
                tbl_appointments
        ORDER BY 
                id
        DESC
          ';

$result = $db->read($q);

$appointment_id = $result[0]['id'];

$q = '  
        INSERT INTO
            tbl_appointment_details(service_id,appointment_id)
        VALUES ';
        
foreach ($selected_services as $key => $value) {
    $q .= '("'.$value.'","'.$appointment_id.'"),';
}

$q = substr($q, 0, -1);

$result = $db->update($q);

$q = '  
        SELECT
                slot
        FROM
                tbl_available_appointments
        WHERE 
                id = "'.$availability_id.'"
          ';

$result = $db->read($q);

$remaining_slots = $result[0]['slot'];

$remaining_slots = $remaining_slots - 1;

$q = '
        UPDATE
                tbl_available_appointments
        SET
                slot = "'.$remaining_slots.'"
        WHERE
                id = "'.$availability_id.'"

';

$result = $db->update($q);

?>