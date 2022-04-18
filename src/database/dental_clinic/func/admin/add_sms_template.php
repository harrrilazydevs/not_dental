<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '

        INSERT INTO
            tbl_sms_templates(sms)
        VALUES
            (
                "'.$_POST["sms"].'")
        ';

$db = new Database();
$result = $db->update($q);

echo json_encode($result);


?>