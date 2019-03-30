<?php
try {
        $user = "root";
        $password = "";
        $pdo = new PDO("mysql:host=localhost;dbname=testing", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         }
        catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
         }
         ?>