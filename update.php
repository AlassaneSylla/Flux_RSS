<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flux RSS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.2.5/angular-material.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.2.5/angular-material.min.js"></script>
</head>
<body>
    <h1>Update RSS</h1>
    <article>
        <?php
             if( isset($_GET['link']) && isset($_GET['title']) && isset($_GET['pubdate'])){
        ?>
             <form action="" method="">
                Link: <input type="text" name="link" value=" <?php echo $_GET['link']  ?>" size="150"> <br><br>
                Title: <input type="text" name="link" value=" <?php echo $_GET['title']  ?>" size="150"> <br><br>
                PubDate: <input type="text" name="link" value=" <?php echo $_GET['pubdate']  ?>" size="50"> <br><br>
                <button type="submit"><a href="index.php">Modifier</a></button>
             </form>   
                
                
        <?php  } ?>
    </article>   
</body>
</html>