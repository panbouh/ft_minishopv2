<?php
    session_start();
    if($_SESSION['admin'] != TRUE)
    {
        header("location: index.php");
        exit;
    }
    require('header.php');
    require('menu_adm.php');
    include ('src/showcase.php');


    if ($_POST['submit'] === 'OK')
    {
        if (!new_item($_POST))
            $return_message = "Incorrect Item";
        else
            $return_message =  "Item ". $_POST['name'] . " Created.";
    }
    else
        $return_message = "Enter item information";
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
                <form action="backoffice_add.php" method="post">
                    <?php echo "<p>$return_message</p>"; ?>
                    <br>

                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" required>*
                    <br>
                    
                    <label for="price">Price :</label>
                    <input type="number" name="price" id="price" required>*
                    <br>

                    <label for="cat">Catégorie :</label>
                    <input type="checkbox" name="car" value="voitures">Voitures</input>
                    <input type="checkbox" name="moto" value="moto">Moto</input>
                    <input type="checkbox" name="organe" value="organes">Organes</input>
                    <br>

                    <label for="img">Image url :</label>
                    <input type="url" name="img" id="img" >
                    <br>
                    
                    <button type="submit" name="submit" value ="OK">ok</button>
                    <button type="reset">reset</button>
                    <p>* marked field are required</p>
                </form>
            </div>
    </body>
</html>
