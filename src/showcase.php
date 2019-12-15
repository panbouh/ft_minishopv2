<?php
    session_start();
    include("utils.php");

    function new_item($tab)
    {
        $tab;
        unset($tab['submit']);
        return (insert_file('db/items_list', $tab));
    }

    function edit_item($tab)
    {
        $file = get_file('db/items_list');
        unset($item_tab['submit']);
        $file[$tab['id']] = $tab;
        file_put_contents('db/items_list', serialize($file));
    }

    function del_item($id)
    {
        $file = get_file('db/items_list');
        unset($file[$id]);
        file_put_contents('db/items_list', serialize($file));
    }

    function print_item_index($cat = FALSE)
    {
        $item_list = get_file('db/items_list');
        if (empty($item_list))
            {echo "<p>The shop is empty, sorryyyy :)</p>";return (FALSE);}
        if (!$cat)
            $cat = 'all';
        foreach($item_list as $key => $item)
        {
            if ($item[$cat] || $cat === 'all')
            {
                echo "
                        <div class='product'>
                            <img width='300' height='300' src='".$item['img']."' alt='Item image'>
                            <p class='articlename'>".$item['name']."</p>
                            <p class='price'>".$item['price']." $</p>
                            <form action='index.php' method='POST'>
                                <input type='submit' name ='submit' value='addtocart' />
                                <input type='number' name ='id' value='".$key."' hidden/>
                            </form>
                        </div>
                    ";
            }
        }
    }

    function print_item_adm($cat = FALSE)
    {
        $item_list = get_file('db/items_list');

        if (empty($item_list))
            {echo "<p>The shop is empty, sorryyyy :)</p>";return (FALSE);}
        if (!$cat)
            $cat = 'all';
        foreach($item_list as $key => $item)
        {
            if ($item[$cat] || $cat === 'all')
            {
                echo "
                    <div class='product'>
                        <form action='backoffice.php' method='POST'>
                            <img width='50' height='50' src='".$item['img']."' alt=''> <br>
                            <input type='url' name='img' value='".$item['img']."' class='articlename'></input> <br>
                            <input type='text' name='name' value='".$item['name']."' class='articlename'></input> <br>
                            <input type='number' name='price' value='".$item['price']."' class='price'></input> <br>
                            <label for='cat'>Catégorie :</label> <br>
                            <input type='checkbox' name='car' value='voitures'>Voitures</input> <br>
                            <input type='checkbox' name='moto' value='moto'>Moto</input> <br>
                            <input type='checkbox' name='organe' value='organes'>Organes</input> <br>
                            <input type='number' name='id' value='".$key."' hidden></input> <br>
                            <input type='submit' name ='submit' value='remove' />
                            <input type='submit' name ='submit' value='edit' /><br><br>
                        </form>
                    </div>
                    ";
            }
        }
    }
?>