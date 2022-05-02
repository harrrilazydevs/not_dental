<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();

$availability_id = '';

$q = '
        UPDATE  
                tbl_appointments
        SET
                status ="cancelled"
        WHERE   
                id = "'.$_POST['id'].'"
';

$db->update($q);


$q = '
        SELECT  
                availability_id
        FROM
                tbl_appointments
        WHERE   
                id = "'.$_POST['id'].'"
';

$result = $db->read($q);

$availability_id = $result[0]['availability_id'];

$q = '
        SELECT  
                slot
        FROM
                tbl_available_appointments
        WHERE   
                id = "'.$availability_id.'"
';

$slots = $db->read($q);
$slotx = $slots[0]['slot']++;
$slotx  = $slotx +1;

$q = '
        UPDATE  
                tbl_available_appointments
        SET
                slot ='.$slotx.'
        WHERE   
                id = "'.$availability_id.'"
';

$db->update($q);
