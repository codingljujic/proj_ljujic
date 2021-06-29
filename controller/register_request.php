<?php
    include '/xampp/htdocs/PHP_boot/proj_ljujic/model/db_class.php';
    if(isset($_POST['ime']))
        $ime = $_POST['ime'];
    if(isset($_POST['prezime']))
        $prezime = $_POST['prezime'];
    if(isset($_POST['mail']))
        $mail = $_POST['mail'];
    if(isset($_POST['sifra']))
        $sifra = $_POST['sifra'];
    
    $conn= new Base();
    $check = $conn->check_in_mails($mail,$sifra,$ime);
    


?>      