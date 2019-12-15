<?php
    session_start();
    include('src/showcase.php');
    include('src/cart_utils.php');
    require('header.php');
    if ($_POST['submit'] === 'addtocart')
    {
        add_to_cart($_POST['id']);
    }
    $_SESSION['cart_total'] = calc_cart();
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
                <h2><a href="cart.php">Cart</a></h2>
                <h2>Catégories</h2>
                <li><a href="index_car.php">🚙 Voitures</a></li>
                <li><a href="index_moto.php">🏍 Moto</a></li>
                <li><a href="index_organe.php">🧠 Organes</a></li>
            </ul>

            <div class="all_products">
            <?php
                print_item_index('organe');
            ?>
            </div>

            <div class="total-order">
                <h1>Item : <?php echo count($_SESSION['cart'])?></h1>
                <h1>💸 Total : <?php echo $_SESSION['cart_total']?></h1>
            </div>

        </div>
    </body>
</html>