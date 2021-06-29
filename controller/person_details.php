<?php
include (dirname(__DIR__).'\controller\page_temp.php');
include(dirname(__DIR__).'\model\person_class.php');

   if(isset($_GET['id'])){
    $person_det = $persons->show_person($_GET['id']);
    $id_osobe = $person_det[0]['id_osobe'];
    echo "<div class = 'container mt-5'>";
    echo "<div class = 'row justify-content-start'>";
        echo "<div class = 'col-4 border border-secondary rounded'>";
            echo "<span>Ime: </span><span>".$person_det[0]['ime']."</span><br>";
            if(empty($person_det[0]['devojacko_prezime']))
                echo "<span>Devojacko prezime: </span><span>/</span><br>";
            else
                echo "<span>Devojacko prezime: </span><span>".$person_det[0]['devojacko_prezime']."</span><br>";
            echo "<span>Datum rodjenja: </span><span>".$person_det[0]['datum_rodjenja']."</span><br>";
            echo "<span>Mesto rodjenja: </span><span>".$person_det[0]['mesto_rodjenja']."</span><br>";
            echo "<span>Zanimanje: </span><span>".$person_det[0]['zanimanje']."</span><br>";
            echo "<span>O osobi: </span><span>".$person_det[0]['o_osobi']."</span><br>";
        echo "</div>";
    echo "</div>";    
   }

   $relatives = $persons->show_relatives($id_osobe);
   if(isset($relatives)){
   echo "<div class = 'row justify-content-start'>";
   echo "<div class = 'col-4 border border-secondary rounded'>";
   echo "<span> Braća-sestre:</span><br>";
   foreach($relatives as $red=>$el)
            echo "<span>Ime: </span><a href=''>".$el['ime']."</a><br>";
    echo "</div>";
    echo "</div>"; 
   }
   $parents = $persons->show_parents($id_osobe);
   if(isset($parents)){
   echo "<div class = 'row justify-content-start'>";
   echo "<div class = 'col-4 border border-secondary rounded'>";
   echo "<span> Roditelji:</span><br>";
   foreach($parents as $red=>$el)
       foreach($el as $ret=>$els)
            echo "<span>Ime: </span><a href=''>".$els['ime']."</a><br>";
    echo "</div>";
    echo "</div>"; 
   }
    
    echo "</div>";
    
?>