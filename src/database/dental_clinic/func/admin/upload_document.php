

<?php
//DATABASE FUNCTIONS
include '../../db.php';

$db = new Database();


$q = '
        UPDATE  
                tbl_appointments
        SET
                status = "completed"
        WHERE   
                id = "'.$_POST['id'].'"
';

$db->update($q);

$q = '
        INSERT INTO  
                tbl_lab_results
                (
                    dir,
                    appointment_id
                )
        VALUES
                (
                    "APRES-'.$_POST['id'].'",
                    "'.$_POST['id'].'"
                )
';

$db->update($q);


if(isset($_FILES['file']['name']))
{
    $cpath="../../../../uploaded/dental_clinic/lab_results/APRES-".$_POST['id'].".pdf";
    move_uploaded_file($_FILES["file"]["tmp_name"], $cpath);
}
