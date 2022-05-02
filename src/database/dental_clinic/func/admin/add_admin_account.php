<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

$user_id = 0;

$q = '

        INSERT INTO
            tbl_users(uid,pass,user_access)
        VALUES
            (
                "' . $_POST["username"] . '",
                "' . $_POST["password"] . '",
                "admin"
            );


        ';

$db->update($q);

$q = '
            SELECT 
                id 
            FROM
                tbl_users
            ORDER BY
                id
            DESC
            LIMIT 1
';

$result = $db->read($q);

$user_id = $result[0]['id'];

$q = '
        INSERT INTO
        tbl_profile(f_name,m_name,l_name, user_id)
        VALUES
        (
            "' . $_POST["f_name"] . '",
            "' . $_POST["m_name"] . '",
            "' . $_POST["l_name"] . '",
            ' . $user_id . '
        );
';


$db->update($q);

echo json_encode($result);
