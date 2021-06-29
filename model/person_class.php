<?php

    class Person{
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

        public function get_all()
        {
            $y = $this->select_from('SELECT `id_osobe`, `ime`, `datum_rodjenja`, `mesto_rodjenja` FROM `osobe` ');
            return $y['arr'];
        }

        public function show_person($id)
        {
            $y = $this->select_from(" SELECT * FROM `osobe` where id_osobe = $id");
            return $y['arr'];    
        }

        public function show_relatives($id)
        {
            $y = $this->select_from("SELECT `osoba_1` FROM `rodbinske_veze` WHERE osoba_2 = $id AND tip_veze = 'potomak'"); 
            if(!empty($y['arr'][0]))
                $a= $y['arr'][0];
            else
                return;
            if(!empty ($a))
                $id_osoba = $a['osoba_1'];
            if(!empty($id_osoba)){
                $x = $this->select_from("SELECT `id`,`ime` FROM `rodbinske_veze` 
                JOIN `osobe`
                ON osoba_2 = osobe.id_osobe
                WHERE osoba_1 = $id_osoba AND tip_veze = 'potomak' AND osoba_2 != $id");
            }
            return $x['arr'];  
                
        } 


        public function show_parents($id)
        {
            $return_arr = [];
            $y = $this->select_from("SELECT `osoba_1` FROM `rodbinske_veze` WHERE osoba_2 = $id AND tip_veze = 'potomak'"); 
            if(!empty($y['arr'][0]))
                $a= $y['arr'][0];
            else
                return;
            if(!empty ($a))
                $id_osoba = $a['osoba_1'];
            if(!empty($id_osoba)){
                $x = $this->select_from("SELECT `id_osobe`,`ime` FROM `rodbinske_veze` 
                JOIN `osobe`
                ON osoba_1 = osobe.id_osobe
                WHERE osoba_1 = $id_osoba AND tip_veze = 'brak' ");
                array_push($return_arr,$x['arr']);
                $z = $this->select_from("SELECT `ime` FROM `rodbinske_veze` 
                JOIN `osobe`
                ON osoba_2 = osobe.id_osobe
                WHERE osoba_1 = $id_osoba AND tip_veze = 'brak'");
                array_push($return_arr,$z['arr']);
            }
            return $return_arr;
        }

    }
    $persons = new Person();
    $table_person= $persons->get_all();



?>