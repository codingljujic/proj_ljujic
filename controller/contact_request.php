<?php
    include '/xampp/htdocs/PHP_boot/proj_ljujic/model/db_class.php';
    
    if(isset($_GET['ime']))
    {
        $data = array (
            ':ime' => $_GET['ime'],
            ':prezime' => $_GET['prezime'],
            ':mail' => $_GET['mail'],
            ':poruka' => $_GET['poruka']
        );

        $base = new Base;
        $send = $base->send_base($_GET['ime'],$_GET['prezime'],$_GET['mail'],$_GET['poruka']);
        echo "<div class='alert alert-success' role='alert'>
        Uspešno ste poslali poruku!
        </div>";


    }
?>