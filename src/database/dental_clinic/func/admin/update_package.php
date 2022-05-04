<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();

$dir = "src/uploaded/dental_clinic/package_pictures/";

if (isset($_FILES['picture'])) {
        $errors = array();
        $file_name = $_FILES['picture']['name'];
        $file_size = $_FILES['picture']['size'];
        $file_tmp = $_FILES['picture']['tmp_name'];
        $file_type = $_FILES['picture']['type'];
        $tmp = explode('.', $file_name);
        $file_ext = end($tmp);
        $extensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        if ($file_size > 25097152) {
                $errors[] = 'File size must be exactly 2 MB';
        }
        if (empty($errors) == true) {
                move_uploaded_file($file_tmp, '../../../../../' . $dir . $file_name);
        }
}

$q = '
        UPDATE  
                tbl_packages
        SET
                price = "' . $_POST['price'] . '",
                name = "' . $_POST['name'] . '",
                status = "' . $_POST['status'] . '",
                description = "' . $_POST['description'] . '",
                picture = "' . $dir . $file_name . '"
        WHERE   
                id = "' . $_POST['id'] . '"
';

var_dump($q);
$db->update($q);
