<?php

    include '../connexion/base.php';
    extract($_POST);
    if($idd== "0"){
        $insert = "INSERT INTO services  values (null,?)";
        $stmt = $connexion->prepare($insert);
        $stmt->execute([$libelle]);     
        echo $connexion->lastInsertId();
    }else{
        $insert = "UPDATE  services set Libelle = ? WHERE IdService = ? ";
        $stmt = $connexion->prepare($insert);
        $stmt->execute([$libelle,$idd]);

    }
?>