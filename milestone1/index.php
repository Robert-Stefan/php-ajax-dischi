<?php // collegamento con database.php
    require_once __DIR__ . './database.php';
?>

<!--HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Spotify</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

    <!--HEADER-->
    <header>
        <section class="container">
            <img class="logo" src="./img/logo.png" alt="logo">           
        </section>
    </header>

    <!--MAIN CONTENT-->
    <main>
        <section class="content">
            <?php foreach ($database as $music) { ?>
                <div class="dischi">
                    <img src=" <?php echo $music['poster']; ?> " alt="disco">
                    <h3> <?php echo $music['title']; ?> </h3>
                    <p class="titles"> <?php echo $music['author']; ?> </p>
                    <p> <?php echo $music['year']; ?> </p>
                    <p class="titles"> <?php echo $music['genre']; ?> </p>
                </div>
           <?php } ?>
        </section>
    </main>
</body>
</html>