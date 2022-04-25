<!DOCTYPE html>
<html lang="en">
<head ng-app="ui.bootstrap.demo">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flux RSS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-animate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.5.0.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <article>
            <?php 
                if( isset($_GET['link']) && isset($_GET['title']) && isset($_GET['pubdate']) && isset($_GET['text'])){
            ?>
                <div ng-controller="DateParserDemoCtrl">
                    <form method="post" action="traitements.php">
                        <h4>Veuillez saisir vos modifications puis valider</h4>
                        <p class="form-group">
                            <label>Titre :</label>
                            <input type="text" ng-model="format" class="form-control" name='fluxTitle' value="<?php echo $_GET['title'] ?>">
                        </p>
                        <p class="form-group">
                            <label>Description :</label>
                            <textarea type="text" class="form-control" ng-model="format" cols="100" rows="8" name='fluxText'><?php echo $_GET['text']; ?></textarea>
                        </p>
                        <!-- <div><?php echo $_GET['link'] ?></div>
                        <div><?php echo $_GET['pubdate'] ?></div> -->
                        <button type="submit" class="btn btn-sm btn-danger" name='enreg' value="AJOUTER">valider</button>
                        <button type="button" class="btn btn-sm btn-default"><a href="index.php">annuler</a></button>
                    </form>
                </div>     
            <?php  
        } ?>
        </article>
    </div>      
</body>
</html>



