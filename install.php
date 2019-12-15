<?php
    include('src/showcase.php');
    if (!file_exists("db"))
        mkdir("db");
    if (!file_exists("private"))
        mkdir("private");
    
    $moto =  array("name" => "Ducati Supersport S", "price" => 13500, "img" => 'https://images.ctfassets.net/x7j9qwvpvr5s/64ioJpn0LSIu0yM2WUgIm8/3b86b6e3f5978d163c0cf3951a01d342/Supersport-MY18-Grey-04-Slider-Gallery-906x510.jpg', "moto" => 'moto');
    $car =  array("name" => "Multipla AMG", "price" => 0, "img" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Fiat_MultiplAMG_Stage_4.5_sur_piste_%C3%A0_Monthl%C3%A9ry.jpg/220px-Fiat_MultiplAMG_Stage_4.5_sur_piste_%C3%A0_Monthl%C3%A9ry.jpg', "car" => 'car');
    $organe =  array("name" => "Tendon D'achille", "price" => 15, "img" => 'http://vps354854.ovh.net/wp-content/uploads/2014/01/Infiltration-du-tendon-dAchille.png', "organe" => 'organes');
    $motocar =  array("name" => "Cam-AM Spyder", "price" => 18999, "img" => 'https://fr.brp.com/content/dam/canam-spyder/Global/MY2020/Images/Lineup/EMEA/F3/2020_Spyder_F3_Steel_Black_Metallic_3-4-front.png/jcr:content/renditions/cq5dam.web.480.480.png', "car" => 'cat', 'moto' => 'moto');
    $heartmeca =  array("name" => "Mecanic Heart", "price" => 20000, "img" => 'https://previews.123rf.com/images/intueri/intueri1801/intueri180100003/92827659-tatouage-cardiaque-m%C3%A9canique-symbole-d-%C3%A9motions-d-amour-de-sentiments-conception-de-t-shirt-de-pun.jpg', "organe" => 'organes', 'car' => 'car');
    $all =  array("name" => "Bouh", "price" => 9999999999, "img" => 'https://i.skyrock.net/3842/11893842/pics/280895979_small.jpg', "moto" => 'moto', "car" => 'cat', 'organe' => 'organes');
    new_item($moto);
    new_item($car);
    new_item($organe);
    new_item($heartmeca);
    new_item($motocar);
    new_item($all);

    $pwd = hash('whirlpool', 'admin'); //on_casse_des_culs
    file_put_contents('private/passwd_admin.txt', $pwd);
    $user_admin['admin'] = array('passwd' => $pwd, 'Adr' => '42 place des dieux, 77777 planette paradi', 'Tel' => 118218);
    file_put_contents('private/passwd', serialize($user_admin));

?>