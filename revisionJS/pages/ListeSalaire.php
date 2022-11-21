<?php
    
    include '../connexion/base.php';
    $selection = "SELECT * FROM salaire sal,services ser where sal.IdSalaire=ser.IdService";
    $execut = $connexion->query($selection);
    $donne = $execut->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($donne);
?>