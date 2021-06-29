<?php

include '/xampp/htdocs/PHP_boot/proj_ljujic/model/db_class.php';
    if(isset($_POST['ime']))
        $ime = $_POST['ime'];
    if(isset($_POST['devojacko']))
        $devojacko = $_POST['devojacko'];
    if(isset($_POST['datum']))
        $datum = $_POST['datum'];
    if(isset($_POST['mesto']))
        $mesto = $_POST['mesto'];
    if(isset($_POST['zanimanje']))
        $zanimanje = $_POST['zanimanje'];
    if(isset($_POST['o_osobi']))
        $o_osobi = $_POST['o_osobi'];
    
    $connect= new Base();
    $check = $connect->check_in_person($ime,$devojacko,$datum,$mesto,$zanimanje,$o_osobi);
?>