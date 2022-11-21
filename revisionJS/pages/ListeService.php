<?php
    
    include '../connexion/base.php';
    $select = "SELECT * FROM services";
    $execut = $connexion->query($select);
    $donne = $execut->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($donne);
?>