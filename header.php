<?php
session_start();
echo '<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <div class="logintitle">
        <h1 class="logo"><a href="index.php">🛍 ft_minishop 🛍</a></h1>';
		if($_SESSION['loggued_on_user'] == 'ERROR')
		{
			echo "<form class='authtop' action='auth.php' method='POST'>
            <p>
				<a href='create2.php'>create a account</a><br />
                Ursename : <input type='text' name='login'/><br />
                Password : <input type='password' name='passwd'/><br />
                <input type='submit' name = 'submit' value='OK' />
				   error login
            </p>
            </form>";
		}
		else if ($_SESSION['loggued_on_user'] && $_SESSION['loggued_on_user'] != "")
		{
			if ($_SESSION['modif'] == "DEL")
			{
				echo "<p>Acount remove please reload page</p>";
				session_destroy();
				exit;
			}
			echo "<p>your are log as: ".$_SESSION['loggued_on_user']."</p>";
			echo "<br /><a href='logout.php'>logout</a>";
			if($_SESSION['admin'] == TRUE)
				echo "<br /><a href='backoffice.php'>menu_adm</a>";
			else
				echo "<br /><a href='admin.php'>be_adm</a>";
			echo "<a href='modif2.php'>Change password</a>";
			echo "<a href='del.php'>Delte acount</a>";
			if ($_SESSION['modif'] == "NEW")
			{
				echo "<p>password well change</p>";
				$_SESSION['modif'] = "";
			}
			
		}
		else
		{
			echo "<form class='authtop' action='auth.php' method='POST'>
            <p>
				<a href='create2.php'>create a account</a><br />
                Ursename : <input type='text' name='login'/><br />
                Password : <input type='password' name='passwd'/><br />
                <input type='submit' name = 'submit' value='OK' />
            </p>
            </form>";
		}
echo   '</div>
    </body>
</html>';
?>