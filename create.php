<?php
	function find_or_create()
	{
		if(file_exists("private") === FALSE)
			mkdir("private");
		return(file_exists("private/passwd"));
	}

	session_start();
	if ($_POST['login'] && $_POST['passwd'] && $_POST['login'] != "" && $_POST['passwd'] != "" && $_POST['Adr'] != "" && $_POST['Tel'] != "")
	{
		if ($_POST['submit'] == "OK")
		{
			if (find_or_create() == 1)
			{
				$unstr = file_get_contents("private/passwd");
				$arrayed_data = unserialize($unstr);
				if($arrayed_data[$_POST['login']] || $_POST['login'] == "ERROR")
				{
					$_SESSION['create'] = "exist";
					header("location: create2.php");
					exit;
				}
			}
			$hashed_pwd = hash('whirlpool', $_POST['passwd']);
			$arrayed_data[$_POST['login']]= array('passwd' => $hashed_pwd, 'Adr' => $_POST['Adr'], 'Tel' => $POST['Tel']);
			$serialized_data = serialize($arrayed_data);
			file_put_contents("private/passwd", $serialized_data);
			$_SESSION['loggued_on_user'] = $_POST['login'];
			header("location: index.php");
			exit;
		}
	}
	$_SESSION['create'] = "empty";
	header("location: create2.php");
	exit;
?>
