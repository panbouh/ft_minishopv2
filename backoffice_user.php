<?php
	session_start();
	if($_SESSION['admin'] != TRUE)
	{
		header("location: index.php");
		exit;
    }
    include("src/showcase.php");
    require('header.php');
    require('menu_adm.php');

    function del_user($login)
    {
        $file = get_file('private/passwd');
        unset($file[$login]);
        file_put_contents('private/passwd', serialize($file));
    }

    function print_user_list()
    {
        $users = get_file('private/passwd');

        foreach ($users as $key => $user)
        {
            echo
            "
                <div class='user_card'>
                    <p>name : ".$key."</p><br>
                    <p>adresse : ".$user['Adr']."</p><br>
                    <p>telephone : ".$user['Tel']."</p><br>
                    <form action='backoffice_user.php' method='POST'>
                        <input type='submit' name ='submit' value='remove' />
                        <input type='text' name ='login' value='".$key."' hidden/>
                    </form>
                </div>
            ";
        }
    }
    if ($_POST['submit'] === 'remove')
    {
        del_user($_POST['login']);
        $return_message = $_POST['login']. " has been removed. Rip.";
    }
?>

<html>
    <head>
        <title>
            user
        </title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
            <div class="all_products">
                <?php echo "<p> $return_message </p>"; ?><br>
                <?php print_user_list(); ?>
            </div>
    </body>
</html>