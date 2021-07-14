<?php
    require_once ('/xampp/htdocs/PHP_boot/proj_ljujic/model/db_class.php');

    if(isset($_POST['mail']))
        $mail = $_POST['mail'];

    if(isset($_POST['sifra']))
        $sifra = $_POST['sifra'];

    $conn= new Base();
    $check = $conn->correct_log_entry($mail,$sifra);
    if($check== false)
        header('Location: /PHP_boot/proj_ljujic/view/login.php?msg=failed');
    else{
        $_SESSION['user'] = 1;
        header('Location: /PHP_boot/proj_ljujic/view/logged.php');
    }
?>