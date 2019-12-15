<?php
    require('header.php');
    include('src/cart_utils.php');

    if ($_POST['submit'] === 'remove')
    {
        del_item_cart($_POST['id']);
    }
    if ($_POST['submit'] === 'order')
    {
        if ($_SESSION['cart'])
        {
            if ($_SESSION['loggued_on_user'])
                {order_item();echo $ret_mess = "<p>Order Complete, So Long, and Thanks for All the Fish ~";}
            else
                echo $ret_mess = "<p>You need to be connected to complete the order</p>";
        }
        else
            echo $ret_mess = "<p>Add item before complete the order, can't sell voir stuff.</p>";
    }
?>

<html>
    <head>
    <title>
        ft_minishop
    </title>
    <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <div class="bigdiv">
            <ul class="categories">
                <h2 class="basket">🧺 Panier</h2>
            </ul>


            <div class="all_products">

                <?php
                    echo "<h1> Total : ".$_SESSION['cart_total']."$.</h1><br><br><p>".count($_SESSION['cart'])." Item here. (You still can add more)</p>";
                    print_item_cart();
                ?>

            <form action="cart.php" method='POST'>
                <button type="submit" name="submit" value="order">💸 ORDER 💸</button>
            </form>
                
            </div>
            
            

        </div>

    </body>
</html>