<!-- 

//pour securiser formulaire de modification
/*function securisation($donnees){
    $donnees = trim($donnees);
    $donnees = strip_tags($donnees);
    $donnees = stripcslashes($donnees);
    return $donnees;
}

//extract data
extract($_POST);
    $title= securisation($_POST['fluxTitle']);
    $text = securisation($_POST['fluxText']);
  
    
    
    require('conn.php');


$sql = "INSERT INTO `rss` (`_title`, `_description`)
        VALUES ('$title', '$text')";

if (!empty($_POST))
{
    die('impossible d’ajouter cet enregistrement');
}
    echo "L’enregistrement est ajouté ";

mysql_close($conn)

/* if (!empty($_POST)) {
    if(isset($_POST['fluxTitle'], $_POST['fluxText']) && !empty($_POST['fluxTitle']) && !empty($_POST['fluxText'])) {
        $title = strip_tags($_POST['fluxTitle']);
        $text = htmlspecialchars($_POST['fluxText']);

        require('conn.php');

        $sql = "INSERT INTO `rss`(`_title`, `_description`) VALUES ('$title', '$text')";

        //$query = $conn->prepare($sql);
        //$query->bindValue(':_title', $title, PDO::PARAM_STR);
        //$query->bindValue(':_descrition', $text, PDO::PARAM_STR);
        //if(!$query->execute()) {
            //die ("Une erreur est survenue.");
    //}
    }
    else {
        die ('Le formulaire est complet');
    }
    
} */
    
 -->


<?php
require('conn.php');

if (isset($_POST['enreg'])) {
    $title = $_POST['fluxTitle'];
    $text = $_POST['fluxText'];

    $sql = "INSERT INTO `rss`( `_title`, `_description`) VALUES ('$title', '$text')";

    /* $sql = "INSERT INTO `rss`( `_title`, `_description`) VALUES (:_title, :_description)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":_title", $title);
    $stmt->bindParam(":_description", $text);
   
    $stmt->execute(); */
}


?>