<?php
   require './connection.php';
     $name = trim($_POST['name']);
      $query = $connection->prepare('INSERT INTO `categories` SET `name` = :name ');
      $query->bindParam(':name',$name);
      if($query->execute()){
         echo json_encode(['status' => 200,'message' => 'Category created']);
      }
?>