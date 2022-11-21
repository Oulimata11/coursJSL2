<?php
      include '../connexion/base.php';
          $delete = "DELETE FROM  salaire  WHERE IdSalaire= ? ";
          $stmt = $connexion->prepare($delete);
          $stmt->execute([$_GET['Id']]);  
?> 