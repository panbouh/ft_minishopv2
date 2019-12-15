<?php
	session_start();
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['login'] != "" && $_POST['oldpw'] != "" && $_POST['newpw'] != "" )
	{
		if ($_POST['submit'] == "OK")
		{	
			$unstr = file_get_contents("private/passwd");
			if ($unstr != FALSE)
			{
				$arrayed_data = unserialize($unstr);
				if ($arrayed_data[$_POST['login']]['passwd'] == hash('whirlpool', $_POST['oldpw']))
				{
					$arrayed_data[$_POST['login']]['passwd'] = hash('whirlpool', $_POST['newpw']);
					$serialized_data = serialize($arrayed_data);
					file_put_contents("private/passwd", $serialized_data);
					$_SESSION['modif'] = "NEW";
					header("location: index.php");
					echo "OK\n";
					exit;
				}
			}
		}
	}
	$_SESSION['modif'] = "ERROR";
	header("location: modif2.php");
	exit;
?>
