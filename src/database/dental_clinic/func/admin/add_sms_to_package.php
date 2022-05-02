<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();


$q = '
        SELECT 
                *
        FROM
                tbl_package_sms
        WHERE
                package_id = ' . $_POST["package_id"] . '
        AND
                sms_id = ' . $_POST["sms_id"] . '

';

$result = $db->read($q);

if (empty($result)) {
    $q = '

        INSERT INTO
            tbl_package_sms(package_id,sms_id)
        VALUES
            (
                "' . $_POST["package_id"] . '",
                "' . $_POST["sms_id"] . '")
        ';


    $result = $db->update($q);

    echo json_encode($result);
}
else{
    echo 401;
}