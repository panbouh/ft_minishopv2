<?php
	session_start();
	$unstr = file_get_contents("private/passwd");
	$arrayed_data = unserialize($unstr);
	//print_r ($arrayed_data[$_SESSION['loggued_on_user']]);
	if($arrayed_data[$_SESSION['loggued_on_user']]['admin'] == TRUE)
	{
		$_SESSION['admin'] = TRUE;
		header("location: index.php");
		exit;
	}
	if ($_POST['pass'] == NULL)
	{
		echo "<form action='admin.php' method='post'>
		Passe: <input type='password' name='pass' />
		<input type='submit' name='submit' value='OK'/>
		</form>";
	}
	else
	{
		if (hash('whirlpool', $_POST['pass']) == file_get_contents("private/passwd_admin.txt"))
		{
			$arrayed_data[$_SESSION['loggued_on_user']]['admin'] = TRUE;
			$serialized_data = serialize($arrayed_data);
			file_put_contents("private/passwd", $serialized_data);
		}
		header("location: admin.php");
	}
?>