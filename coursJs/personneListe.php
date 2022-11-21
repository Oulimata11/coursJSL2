<?php
    
    include './conf/db.php';
    $selection = "SELECT * FROM personne";
    $execut = $connexion->query($selection);
    $donne = $execut->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($donne);
?>

  
         