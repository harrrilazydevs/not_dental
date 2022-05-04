<?php
//DATABASE FUNCTIONS
include '../../db.php';
$db = new Database();


if ($_GET['filter_by'] == 'day') {

    $q = '
        SELECT 
            (
                SELECT
                    SUM(price)
                FROM
                    tbl_appointment_details aa
                LEFT JOIN
                    tbl_services bb
             	ON	
              		aa.service_id = bb.id
                LEFT JOIN
              		  tbl_appointments cc
             	ON	
              		cc.id = aa.appointment_id
                LEFT JOIN
                    tbl_available_appointments dd
                ON	
                    dd.id = cc.availability_id      
                WHERE
                    cc.status ="completed"
                AND
                    date = "' . $_GET['date'] . '"
            ) as total_profit
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="completed"
        AND
                date = "' . $_GET['date'] . '"
    ';

    $total_profit = $db->read($q);

    $q = '
        SELECT 
               count(a.id) as count_accomplished
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="completed"
        AND
                date = "' . $_GET['date'] . '"
    ';

    $accomplished = $db->read($q);

    $q = '
        SELECT 
            count(a.id) as count_cancelled
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
               (status ="cancelled" 
        OR
                status ="no-show")
        AND
                b.date = "' . $_GET['date'] . '"
    ';

    $cancelled = $db->read($q);


    $q = '
        SELECT 
            count(a.id) as count_pending
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="for-uploading"
        AND
                date = "' . $_GET['date'] . '"
    ';

    $pending = $db->read($q);

    $q = '
        SELECT 
            count(a.id) as count_incoming
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="pending"
        AND
                date = "' . $_GET['date'] . '"
    ';

    $incoming = $db->read($q);

    $q = '
        SELECT 
            count(id) as count_created
        FROM
                tbl_users 
        WHERE
                date_created = "' . $_GET['date'] . '"
    ';

    $account_created = $db->read($q);
}

if ($_GET['filter_by'] == 'month') {

    $q = '
        SELECT 
            (
                SELECT
                    SUM(price)
                FROM
                    tbl_appointment_details aa
                LEFT JOIN
                    tbl_services bb
             	ON	
              		aa.service_id = bb.id
                LEFT JOIN
              		  tbl_appointments cc
             	ON	
              		cc.id = aa.appointment_id
                WHERE
                    cc.status ="completed"
                AND
                    month(date) = "' . $_GET['date'] . '"
            ) as total_profit
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="completed"
        AND
                month(date) = "' . $_GET['date'] . '"
        LIMIT 1
        	    
    ';

    $total_profit = $db->read($q);

    $q = '
        SELECT 
               count(a.id) as count_accomplished
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="completed"
        AND
                month(b.date) = "' . $_GET['date'] . '"
    ';

    $accomplished = $db->read($q);

    $q = '
        SELECT 
            count(a.id) as count_cancelled
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
               ( status ="cancelled" 
        OR
                status ="no-show")
        AND
            month(b.date) ="' . $_GET['date'] . '"
    ';

    $cancelled = $db->read($q);


    $q = '
        SELECT 
            count(a.id) as count_pending
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="for-uploading"
        AND
                month(b.date) = "' . $_GET['date'] . '"
    ';

    $pending = $db->read($q);

    $q = '
        SELECT 
            count(a.id) as count_incoming
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="pending"
        AND
                month(b.date) = "' . $_GET['date'] . '"
    ';

    $incoming = $db->read($q);

    $q = '
        SELECT 
            count(id) as count_created
        FROM
                tbl_users 
        WHERE
                month(date_created) = "' . $_GET['date'] . '"
    ';

    $account_created = $db->read($q);
}

if ($_GET['filter_by'] == 'year') {

    
    $q = '
        SELECT 
            (
                SELECT
                    SUM(price)
                FROM
                    tbl_appointment_details aa
                LEFT JOIN
                    tbl_services bb
             	ON	
              		aa.service_id = bb.id
                LEFT JOIN
              		  tbl_appointments cc
             	ON	
              		cc.id = aa.appointment_id
                WHERE
                    cc.status ="completed"
                AND
                    year(date) = "' . $_GET['date'] . '"
            ) as total_profit
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="completed"
        AND
                year(date) = "' . $_GET['date'] . '"
        LIMIT 1
        	    
    ';

    $total_profit = $db->read($q);

    $q = '
        SELECT 
               count(a.id) as count_accomplished
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="completed"
        AND
                year(b.date) = "' . $_GET['date'] . '"
    ';

    $accomplished = $db->read($q);

    $q = '
        SELECT 
            count(a.id) as count_cancelled
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
               ( status ="cancelled" 
        OR
                status ="no-show")
        AND
            year(b.date) ="' . $_GET['date'] . '"
    ';

    $cancelled = $db->read($q);



    $q = '
        SELECT 
            count(a.id) as count_pending
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="for-uploading"
        AND
                year(b.date) = "' . $_GET['date'] . '"
    ';

    $pending = $db->read($q);

    $q = '
        SELECT 
            count(a.id) as count_incoming
        FROM
                tbl_appointments a
        LEFT JOIN
                tbl_available_appointments b
        ON 
                a.availability_id = b.id
        WHERE
                status ="pending"
        AND
                year(b.date) = "' . $_GET['date'] . '"
    ';

    $incoming = $db->read($q);

    $q = '
        SELECT 
            count(id) as count_created
        FROM
                tbl_users 
        WHERE
                year(date_created) = "' . $_GET['date'] . '"
    ';

    $account_created = $db->read($q);
}



$data = [
    "total_profit" => $total_profit,
    "accomplished" => $accomplished,
    "cancelled" => $cancelled,
    "pending" => $pending,
    "account_created" => $account_created,
    "incoming" => $incoming,
];
echo json_encode($data);
