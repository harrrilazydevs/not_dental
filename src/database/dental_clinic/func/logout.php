<?php
session_start();

$_SESSION['access_level'] = 'user';
unset($_SESSION['user_id']);
unset($_SESSION['username']);


header('location: ../../../../index.php');
