<?php
   # la bdd
   $host = "localhost";
   $db_name = "langages";
   $username = "root";
   $password = "root";
   
       try {
           $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $conn->exec("set names utf8");
       } 
       catch (PDOException $e) {
           die("Connection impossible : " . $e->getMessage());
   }
   ?>