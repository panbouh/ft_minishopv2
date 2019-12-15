<?php
    session_start();
    $unstr = file_get_contents("private/passwd");
    $arrayed_data = unserialize($unstr);
    unset($arrayed_data[$_SESSION['loggued_on_user']]);
    $serialized_data = serialize($arrayed_data);
    file_put_contents("private/passwd", $serialized_data);
    $_SESSION['modif'] = "DEL";
    header("location: index.php");
    echo "OK\n";
    exit;
?>