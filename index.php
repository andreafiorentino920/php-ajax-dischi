<?php 
require __DIR__ . "/database.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="./img/logo.png" alt="">
    </header>
    <main>
        <div class="container">
            <?php foreach($database as $data) {?>
                <div class="card">
                    <div class="card-container">
                        <img src="<?php echo"{$data["poster"]}";?>" alt="">
                        <h3><?php echo"{$data["title"]}";?></h3>
                        <p><?php echo"{$data["author"]}";?></p>
                        <p><?php echo"{$data["year"]}";?></p>
                    </div>
                </div>
            <?php }?>
        </div>
    </main>
</body>
</html>