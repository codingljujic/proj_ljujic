<?php
    class Base {
        public $conn;

        public function __construct()
        {
            $this->conn = new mysqli('localhost','root','','ljujici_podaci');
        }
        public function select_from($input)
        {
            $y = $this->conn->query($input);
            if($y === false){
                return ['correct'=>false, 'message'=>$this->conn->error ];
            }else{
                $arr = $y->fetch_all(MYSQLI_ASSOC);
                return ['correct'=> true, 'arr'=>$arr];
            }
        }

        public function send_base($name,$lastname,$mail,$message) 
        {
            $result = $this->conn->query("INSERT INTO `all_messages`(`id`, `name`, `last_name`, `mail`, `message`) VALUES ('','$name','$lastname','$mail','$message')");
        }

        public function check_in_mails($mail,$password,$name)
        {
            $result = $this->select_from("SELECT * FROM `login_unos` WHERE mail = '$mail'");
            if(!empty($result['arr'])){
                header('Location: /PHP_boot/proj_ljujic/view/register.php');
            }
            else{
                $insert = $this->conn->query("INSERT INTO `login_unos`(`id`,`mail`,`sifra`,`login_ime`,`vreme`) VALUES ('','$mail','$password','$name',current_timestamp())");
                header('Location: /PHP_boot/proj_ljujic/view/login.php');
            }
        }

        public function correct_log_entry($mail,$sifra)
        {
            $result = $this->select_from("SELECT * FROM `login_unos` WHERE mail = '$mail' AND sifra = '$sifra'");
            if(empty($result['arr'])){
                header('Location: /PHP_boot/proj_ljujic/view/register.php');
            }
            else{
                $_SESSION['user'];
                header("Location: /PHP_boot/proj_ljujic/controller/logged.php");
            }
        }
        public function check_in_person($ime,$devojacko,$datum,$mesto,$zanimanje,$o_osobi)
        {
            $result = $this->select_from("SELECT * FROM `osobe` WHERE `ime` = '$ime' AND `datum_rodjenja` = '$datum'");
            if(!empty($result['arr']))
                header('Location: /PHP_boot/proj_ljujic/controller/exists.php');
            
            else{
                $insert = $this->select_from("INSERT INTO `osobe`(`id_osobe`, `ime`, `devojacko_prezime`, `datum_rodjenja`, `mesto_rodjenja`, `zanimanje`, `o_osobi`) VALUES ('','$ime','$devojacko','$datum','$mesto','$zanimanje','$o_osobi')");
                header('Location: /PHP_boot/proj_ljujic/view/add_new.php');
            }
        }
    
    }     


    

?>