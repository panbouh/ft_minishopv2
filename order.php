<?php
	session_start();
	if($_SESSION['admin'] != TRUE)
	{
		header("location: index.php");
		exit;
	}
    require("header.php");
    require("menu_adm.php");
    include('src/utils.php');

    function print_order()
    {
        $order_tab = get_file('db/order');
        if (!$order_tab)
            {echo "<p>No order here, your website sucks</p>"; return(false);}
        foreach ($order_tab as $order)
        {
            echo
            "
                <div class='order_card'>
                    <hr>
                    <h1>Commande de : ".$order['user_name']."</h1>
                    <p>[".$order['nb_item']."] Items pour un total de [".$order['total']."$].</p>
                    <hr>
                </div>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Order</title>
    </head>
    <body>
        <?PHP 
            print_order();
        ?>
    </body>
</html>