<?php
session_start();

//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();
// var_dump($_FILES);

$dir = "src/uploaded/dental_clinic/profile_pictures/";


if (isset($_FILES['picture'])) {
    $errors = array();
    $file_name = $_FILES['picture']['name'];
    $file_size = $_FILES['picture']['size'];
    $file_tmp = $_FILES['picture']['tmp_name'];
    $file_type = $_FILES['picture']['type'];
    // $file_ext = strtolower(end(explode('.', $file_name)));

    $tmp = explode('.', $file_name);
    $file_ext = end($tmp);

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 25097152) {
        $errors[] = 'File size must be excately 2 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, '../../../../../' . $dir . $file_name);

        echo json_encode(
            [
                "status" => 1,
                "data" => $dir . $file_name
            ]
        );
    }
}

if($_SESSION['user_id'] == $_POST['id']){
    $_SESSION['picture'] = $dir . $file_name;

}


$q = '
        UPDATE  
                tbl_profile
        SET
                picture="' . $dir . $file_name . '"
        WHERE   
                user_id = "' . $_POST['id'] . '"
';

$db->update($q);
