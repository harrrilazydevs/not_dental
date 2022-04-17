<?php
//DATABASE FUNCTIONS
include '../../db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$access_level	= 'admin';

$q = '

        INSERT INTO
                    tbl_users(username,email,password,access_level,name,phone,address)
        VALUES  ("'.$username.'","'.$email.'","'.$password.'","'.$access_level.'","'.$name.'","'.$phone.'","'.$address.'")    
          ';


$db = new Database();
$result = $db->update($q);



?>