<?php
session_start();
if( md5($_POST['param1']) == $_SESSION['captcha'] ) 
	echo 1;
else 
	echo 0;
// echo md5($_POST['param1']);