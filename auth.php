<?php
	session_start();
	if($_POST['login'] == "")
	{
		$_SESSION['loggued_on_user'] = NULL;
		header('Location: index.php');
		exit;
	}
	if (file_exists("private/passwd"))
	{
		$unstr = file_get_contents("private/passwd");
		$arrayed_data = unserialize($unstr);
	}
	else
		$arrayed_data = NULL;
	if ($arrayed_data[$_POST['login']] && $arrayed_data[$_POST['login']]['passwd'] == hash('whirlpool', $_POST['passwd']))
	{
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header('Location: index.php');
		exit;
	}
	else
	{
		$_SESSION['loggued_on_user'] = 'ERROR';
		header('Location: index.php');
	}	
?>