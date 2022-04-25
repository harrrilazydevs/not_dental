<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

$code = random_int(100000, 999999);
$result = [];

$q =  '

        DELETE FROM
        FROM
                tbl_registration_otp
        WHERE
                email = "' . $_POST['email'] . '"
';
$result = $db->update($q);

$q = '
INSERT INTO 
        tbl_registration_otp(email, code)
VALUES
        ("' . $_POST['email'] . '", ' . $code . ')
';

$db->update($q);

echo $code;


