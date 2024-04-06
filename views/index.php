<?php include('partials/header.php'); ?>
    
<?php
    
    $fruits = ["apple","banana","cherry","pear"]
?>
<h1>Hello <?=$name ?></h1>
   <form>
    <input type="text" name="name" placeholder="Kasutajanimi" id="name" />
    <input type="password" name="password" placeholder="Parool" id="password" />
    <input type="number" name="age" placeholder="Vanus" id="age" />
    <input type="submit"/>
    
   </form>
<?php 
echo "Hello world!"; ?>
<?php include('partials/footer.php'); ?>
