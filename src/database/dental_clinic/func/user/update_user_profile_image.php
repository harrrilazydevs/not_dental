<?php
//DATABASE FUNCTIONS
include '../../db.php';
session_start();


$db = new Database();
$id = $_POST['id'];
$image=$_FILES['file']['name'];	
$filetype=$_FILES['file']['type'];

$dir = 'src/uploaded/dental_clinic/profile_pictures/'.$image;
$imagepath="../../../../uploaded/dental_clinic/profile_pictures/".$image;
move_uploaded_file($_FILES["file"]["tmp_name"],$imagepath);


$q = '
        UPDATE  
                tbl_profile
        SET
                picture ="'.$dir.'"
        WHERE   
                user_id = "'.$_POST['id'].'"
';

$db->update($q);

$_SESSION['picture'] = $dir;

