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

    <script src="add.js" defer></script>
    
    <script>
      angular.module('gfg', ['ngAnimate', 'ngSanitize', 'ui.bootstrap']);
      angular.module('gfg').controller('pagination', function ($scope) {
        $scope.totalItems = $item.length;
        $scope.currentPage = 4;
        
        });
    </script>
</head>
<body>
    <div class='container'>
        <h1>Flux RSS infos de "le monde"</h1>
        <article ng-app="myApp" ng-controller="usecontroller">
            <?php
                $rss_link = 'https://www.lemonde.fr/rss/en_continu.xml';
                $rss_load = simplexml_load_file($rss_link);
                /* var_dump($rss_load);
                die(); */
                foreach($rss_load->channel->item as $item) {
            ?>  
                <div class='title_container'>
                    <div>
                        <a href='<?= $item->link ?>'><span class='title'><h4><?= $item->title ?></h4></span></a> 
                        <span class='pubDate' name='date'><p><?= $item->pubDate?></p></span>
                        <span>
                            <p><image>
                                <url><?= $item->link?></url>
                                <link>http://www.lemonde.fr/rss/en_continu.xml</link>
                            </image></p>
                        </span>
                    </div>
                    <div>
                        <a href="update.php?title=<?= $item->title ?>
                                 &pubdate=<?= $item->pubDate ?>
                                 &link=<?= $item->link ?>
                                 &text=<?= $item->description ?>
                                 &id=<?= $item->id ?>">
                        <button type="button" class="btn btn-sm btn-info">afficher</button>        
                        </a>
                    </div>
                </div>   
                <div id="contenu"> 
                    <span class='description'><p><?= $item->description ?></p></span>
                </div>
                <hr/>
            <?php          
                }
            ?>
        </article>

        <hr>
        
        <!-------------pagination----------------->
        <div>

        </div>

    </div> 
</body>
</html>

<?php require('conn.php'); ?>