<?php include('partials/header.php'); ?>
    
<?php
    $name = 'Tarmo';
    $fruits = ["apple","banana","cherry","pear"]
?>
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
<?php include('partials/footer.php'); ?>
