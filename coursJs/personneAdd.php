<?php

    include './conf/db.php';
    extract($_POST);
    if($id == "0"){
        $r = "INSERT INTO personne   values (null,?,?,?,?)";
        $stmt = $connexion->prepare($r);
        $stmt->execute([$nom,$prenom,$mail,$age]);     
        echo $connexion->lastInsertId();
    }else{
        $r = "UPDATE  personne set nom = ?,prenom = ?,email = ?,age = ? WHERE id = ? " ;
        $stmt = $connexion->prepare($r);
        $stmt->execute([$nom,$prenom,$mail,$age,$id]);

    }
?>

