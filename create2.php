<?php
/*
	session_start();
	if ($_SESSION['loggued_on_user']) 
	{
		header("location: index.php");
		exit;
	}
	echo '
	<html><body>
	<form action="create.php" method="post">
	Identifiant: <input type="text" name="login" />
	<br />
	Mot de passe: <input type="password" name="passwd" />
	<br />
	Adresse: <input type="text" name="Adr" />
	<br />
	Telephone: <input type="text" name="Tel" />
	<input type="submit" name="submit" value="OK"/>
	</form>';
	if ($_SESSION['create'] == 'exist')
		echo '<p>this login is allredy use</p>';
	if ($_SESSION['create'] == 'empty')
		echo '<p>please file all the form</p>';
	echo '</body></html>';
/*
?>
<?php
session_start();
/*
	session_start();
	if ($_SESSION['loggued_on_user']) 
	{
		header("location: index.php");
		exit;
	}
	echo '
	<html><body>
	<form action="create.php" method="post">
	Identifiant: <input type="text" name="login" />
	<br />
	Mot de passe: <input type="password" name="passwd" />
	<br />
	Adresse: <input type="text" name="Adr" />
	<br />
	Telephone: <input type="text" name="Tel" />
	<input type="submit" name="submit" value="OK"/>
	</form>';
	if ($_SESSION['create'] == 'exist')
		echo '<p>this login is allredy use</p>';
	if ($_SESSION['create'] == 'empty')
		echo '<p>please file all the form</p>';
	echo '</body></html>';
*/
?>
<html>
<head>
    <title>
        ft_minishop
    </title>
    <link rel="stylesheet" href="css/style.css">

</head>
    <body>
        <div class="logintitle">
            <h1 class="logo"><a href="index.php">🛍 ft_minishop 🛍</a></h1>

        </div>

        <div class="bigdiv">
            <ul class="categories">
                <h2 class="selectedleft">Inscription :</h2>
            </ul>

            <div class="all_products">

                <div class="product">
					<?php
					
						
						// if ($_SESSION['loggued_on_user']) 
						// {
						// 	header("location: index.php");
						// 	exit;
						// }
						echo '
						<html><body>
						<form action="create.php" method="post">
						Identifiant: <input type="text" name="login" />
						<br />
						Mot de passe: <input type="password" name="passwd" />
						<br />
						Adresse: <input type="text" name="Adr" />
						<br />
						Telephone: <input type="text" name="Tel" />
						<input type="submit" name="submit" value="OK"/>
						</form>';
						if ($_SESSION['create'] == 'exist')
							echo '<p>this login is allredy use</p>';
						if ($_SESSION['create'] == 'empty')
							echo '<p>please file all the form</p>';
						echo '</body></html>';
					
					?>
                </div>
                

                

                
            </div>

          

        </div>

    </body>
</html>