<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();

$q = '  
        INSERT INTO
            tbl_users(uid,pass,user_access)
        VALUES  
            (
                "'.$_POST['uid'].'",
                "'.$_POST['pass'].'",
                "user"
            )    
          ';

$result = $db->update($q);

$q = '  
        SELECT
            id
        FROM
            tbl_users
        ORDER BY 
            id DESC
          ';

$result = $db->read($q);

$uid = $result[0]["id"];

$q = '  
        INSERT INTO
                tbl_profile(email,user_id)
        VALUES
                (
                    "'.$_POST['email'].'",
                    '.$uid.'
                )
            ';
var_dump($q);

$result = $db->update($q);
