<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    header{
        background:#e3e3e3;
        text-align:center;
        padding:2em;
    }
</style>
<body>
    
    <header>
        <h1>
            <?= $greetings; ?>
        </h1>
    </header>

    <ul>
        <?php  foreach ($animals as $key => $animal_pic) :?>
            <!-- you ccan do html here meanwhile as look to terminate the loop down in line 29 -->
            <img src="<?= $animal_pic ?>" alt="" srcset="">
        <?php endforeach; ?>
        <br>
    </ul>
</body>
</html>