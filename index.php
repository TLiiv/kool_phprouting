<?php
    $name = 'Tarmo';
    $fruits = ["apple","banana","cherry","pear"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?=$name ?></h1>
    <ul>
        <!-- segasem versioon loopimiseks -->
        <?php
        foreach($fruits as $fruit){ ?>
             <li><?=$fruit ?></li>
       <?php } ?>
    </ul>
            <!-- puhtam versioon loopimiseks -->
    <ul>
        <?php 
        foreach($fruits as $fruit): ?>
        <?php if($fruit != "apple") : ?>
            <li><?=$fruit ?></li>
            <?php else: ?>
                <li>
                    <i>
                        <?=$fruit?>
                    </i>
                </li>
                <?php endif;?>
        <?php endforeach ?>
    </ul>
<?php 
echo "Hello world!"; ?>
</body>
</html>