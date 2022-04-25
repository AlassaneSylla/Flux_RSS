<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'edacy';
 //header('Content-type: text/html; charset=utf-8');
                
 //On établit la connexion
 $conn = new mysqli($servername, $username, $password, $dbname);
              
 //On vérifie la connexion
 if($conn->connect_error){
 die('Erreur : ' .$conn->connect_error);
 }
 else{
     /*echo 'connected';*/
}
?>