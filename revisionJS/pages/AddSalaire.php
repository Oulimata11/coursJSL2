<?php

    include '../connexion/base.php';
    extract($_POST);
    if($idd == "0"){
        $insert = "INSERT INTO salaire  values (null,?,?,?,?,?,?)";
        $stmt = $connexion->prepare($insert);
        $stmt->execute([$matricule,$prenom,$nom,$naissance,$salaire,$IdService]);     
        echo $connexion->lastInsertId();
    }else{
        $insert = "UPDATE  salaire set Matricule = ?, Prenom = ?,Nom = ?,
        Naissance = ?,Salaire = ?,IdService = ?, WHERE IdSalaire = ? " ;
        $stmt = $connexion->prepare($insert);
        $stmt->execute([$matricule,$prenom,$nom,$naissance,$salaire,$IdService,$idd ]);

    }
?>