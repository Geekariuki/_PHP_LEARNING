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
            Tasks
        </h1>
    </header>

    <ul>
       
        <?php foreach ($tasks as $task) : ?>

            <li>
               <?php if ($task->completed) : ?>
                    <strike> <?= $task->description; ?></strike>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>   
       
    </ul>
</body>
</html>