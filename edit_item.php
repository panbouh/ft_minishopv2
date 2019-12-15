<?php
    session_start();
    include ('src/utils.php');

    if ($_POST['submit'] === 'OK')
    {
        if (!edit_article($_POST))
            echo "Incorrect Item";
        else
            echo "Article ". $_POST['name'] . " Created.";
    }
    else
        echo "Enter item informations.";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Article Gestion</title>
    </head>
    <body>
        <form action="article.php" method="POST">
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" value="<?php $_POST['name']?>" required>*
            <br>
            
            <label for="price">Price :</label>
            <input type="number" name="price" id="price" value="<?php $_POST['name']?>" required>*
            <br>
            
            <label for="description">Description :</label>
            <input type="text" name="description" id="description" value="<?php $_POST['name']?>" required>*
            <br>

            <label for="img">Image url :</label>
            <input type="url" name="img" id="img" value="<?php $_POST['name']?>">
            <br>
            
            <button type="submit" name="submit" value ="OK">ok</button>
            <button type="reset">reset</button>
            <p>* marked field are required</p>
        </form>
        <a href="index.php">Home Page</a>
    </body>
</html>