

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
        SELECT 
                email
        FROM 
                tbl_profile a
        LEFT JOIN
                tbl_users b
        ON      
                b.id = a.user_id 
        LEFT JOIN
                tbl_appointments c
        ON
                c.user_id = b.id
        WHERE   
                c.id = "'.$_POST['id'].'"
';

$email = $db->read($q);

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

echo json_encode($email);