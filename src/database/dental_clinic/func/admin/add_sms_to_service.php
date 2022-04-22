<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();


$q = '
        SELECT 
                *
        FROM
                tbl_service_sms
        WHERE
                service_id = ' . $_POST["service_id"] . '
        AND
                sms_id = ' . $_POST["sms_id"] . '

';

$result = $db->read($q);

if (empty($result)) {
    $q = '

        INSERT INTO
            tbl_service_sms(service_id,sms_id)
        VALUES
            (
                "' . $_POST["service_id"] . '",
                "' . $_POST["sms_id"] . '")
        ';


    $result = $db->update($q);

    echo json_encode($result);
}
else{
    echo 401;
}