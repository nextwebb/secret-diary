<?php
	$_POST['password']="peterson";
	$row['id']="1";
	echo $hashedPassword = md5(md5($row['id']).$_POST['password']);
?>