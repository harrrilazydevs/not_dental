<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

$q = '

        INSERT INTO 
                tbl_appointment_cancellation_reason (appointment_id, reason)
        VALUES
                (
                        "'.$_POST['appointment_id'].'",
                        "'.$_POST['reason'].'"
                )
';

$result = $db->update($q);
