<?php 
   try{
      $connection = new PDO("mysql:host=localhost;dbname=testdumbways","root","");
   }catch(PDOException $e){
      echo 'Connection failed'.$e->getMessage();
   }
?>