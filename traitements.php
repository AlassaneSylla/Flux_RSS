<?php
require('conn.php');

if (isset($_POST['enreg'])) {
    $title = $_POST['fluxTitle'];
    $text = $_POST['fluxText'];

    $sql = "INSERT INTO `rss`( `_title`, `_description`) VALUES ('$title', '$text')";

}


?>