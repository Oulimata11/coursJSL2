<?php
    
    include './conf/db.php';
    $r = "DELETE FROM personne WHERE id = ?";
    $stmt = $connexion->prepare($r);
    $stmt->execute([$_GET['id']]);

?>

  
         