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
            <?= $title; ?>
        </h1>
    </header>

    <ul>
        <?php  foreach ($task as $key => $value) :?>
            <li> 
                <strong><?= ucwords($key) ?> : </strong> 
                <?= strtoupper($value)?>
            </li>
        <?php endforeach; ?>
        <br>

        <li> <strong>Task Name : </strong> <?= $task['title'] ?>  </li>
        <li> <strong>Due Date : </strong> <?= $task['due'] ?>  </li>
        <li> <strong>Person Responsible : </strong> <?= $task['assigned_to'] ?>  </li>
        <li> 
            <strong>Status: </strong>

            <?php if($task['done']) : ?>
                <span class="icon">&#9989</span>
            <?php else : ?>
                <span class="icon">X</span>
            <?php endif; ?>
          
        </li>
    </ul>
</body>
</html>