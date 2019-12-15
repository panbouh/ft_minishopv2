<?php
    session_start();
    function calc_cart()
    {
        if (!$_SESSION['cart'])
            return (0);
        foreach($_SESSION['cart'] as $item)
        {
            $result += $item['price'];
        }
        return ($result);
    }

    function add_to_cart($id)
    {
        $file = get_file('db/items_list');
        $_SESSION['cart'][] = $file[$id];
    }

    function del_item_cart($id)
    {
        $_SESSION['cart_total'] -= $_SESSION['cart'][$id]['price'];
        unset($_SESSION['cart'][$id]);
    }

    function order_item()
    {
        include('src/utils.php');
        $_SESSION['cart'];

        $order['user_name'] = $_SESSION['loggued_on_user'];
        $order['nb_item'] = 0;
        if ($_SESSION['cart'])
            foreach($_SESSION['cart'] as $item)
                $order['nb_item']++;
        $order['total'] = $_SESSION['cart_total'];
        insert_file('db/order', $order);
        unset($_SESSION['cart']);
        $_SESSION['cart_total'] = 0;
    }

    function print_item_cart()
    {
        if (empty($_SESSION['cart']))
            {echo "<p>Your cart is empty :'(</p>";return (FALSE);}
        foreach($_SESSION['cart'] as $key => $list)
        {
            echo "
                <div class='product'>
                    <p class='articlename'>".$list['name']."</p>
                    <img width='50' height='50' src='".$list['img']."' alt='image item'>
                    <p class='price'>".$list[$price]." $</p>
                    <form action='cart.php' method='POST'>
                        <input type='submit' name='submit' value='remove' />
                        <input type='number' name='id' value='".$key."' hidden></input> <br>
                        </form>
                </div>
                ";
        }
    }
?>