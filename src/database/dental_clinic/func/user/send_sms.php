<?php


	$ch = curl_init();
	$itexmo = array('1' => $_POST['1'], '2' =>$_POST['2'], '3' => $_POST['3'], 'passwd' => $_POST['4']);
	curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	return curl_exec ($ch);
	curl_close ($ch); 




?>