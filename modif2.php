<?php
/*
    session_start();
    echo '<html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
    <form action="modif.php" method="POST">
        <p>
            Identifiant : <input type="text" name="login"/><br />
            Ancien Mot de Passe : <input type="password" name="oldpw"/><br />
            Nouveau Mot de Passe : <input type="password" name="newpw"/><br />
            <input type="submit" name = "submit" value="OK" />';
            if($_SESSION['modif'] == 'ERROR')
                echo '<p>you have make an error</p>';
    echo    '</p>
    </form>
    </body>
    </html>'
*/
?>
<?php
/*
    session_start();
    echo '
    <html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
    <form action="modif.php" method="POST">
        <p>
            Identifiant : <input type="text" name="login"/><br />
            Ancien Mot de Passe : <input type="password" name="oldpw"/><br />
            Nouveau Mot de Passe : <input type="password" name="newpw"/><br />
            <input type="submit" name = "submit" value="OK" />';
            if($_SESSION['modif'] == 'ERROR')
                echo '<p>you have make an error</p>';
    echo    '</p>
    </form>
    </body>
    </html>
    
    
    '
    */
?>
<?php
    session_start();
    include('src/showcase.php');
    require('header.php');
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
        
            <ul class="">
                <h2 class="selectedleft">Modification</h2>
            </ul>
            <div class=all_products>
            <form action="edit_account.php" method="POST">
                <p>
                    Identifiant : <input type="text" name="login"/><br />
                    Ancien Mot de Passe* : <input type="password" name="oldpw"/><br />
                    Nouveau Mot de Passe : <input type="password" name="passwd"/><br /><br /><br />
                    <input type="submit" name = "submit" value="OK" />
                </p>
                
                <?php if($_SESSION['modif'] == 'ERROR')
                echo '<p>you have make an error</p>'; ?>
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <p>*Obligatoire pour changer de mot de passe</p>
            </form>
            </div>
        </div>
    </body>
</html>