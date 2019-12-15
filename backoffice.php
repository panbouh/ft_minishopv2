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

    if ($_POST['submit'] === 'edit')
    {
        edit_item($_POST);
        $return_message = $_POST['name']. " has been edited.";
    }
    else if ($_POST['submit'] === 'remove')
    {
        del_item($_POST['id']);
        $return_message = $_POST['name']. " has been removed. Rip.";
    }
?>

<html>
    <head>
        <title>
            Backoffice
        </title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
            <div class="all_products">
                <?php echo "<p> $return_message </p>"; ?><br>
                <?php print_item_adm(FALSE); ?>
            </div>
    </body>
</html>