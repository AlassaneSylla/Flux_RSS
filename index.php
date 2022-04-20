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
    <h1>Flux RSS infos de "le monde"</h1>
    <article>
        <?php
            $rss_link = 'https://www.lemonde.fr/rss/en_continu.xml';
            $rss_load = simplexml_load_file($rss_link);
            foreach($rss_load->channel->item as $item) {
        ?>  
            <div class='title_container'>
                <div>
                    <a href='<?= $item->link ?>'><span class='title'><h3><?= $item->title ?></h3></span></a> 
                    <span class='pubDate'><p><?= $item->pubDate?></p></span>
                </div>
                <div>
                    <a href="update.php?title=<?= $item->title ?>&pubdate=<?= $item->pubDate?>&link=<?= $item->link ?>">
                     <button mat-raised-button>Modifier</button>
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
</body>
</html>