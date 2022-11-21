<?php
      include '../connexion/base.php';
          $delete = "DELETE FROM  services  WHERE IdService = ? ";
          $stmt = $connexion->prepare($delete);
          $stmt->execute([$_GET['IdService']]);  
?>   
        