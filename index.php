<?php

$numbers = [1,2,3,4,5,6,7,8,9];

$blockNumbers = [4,5];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <link rel="stylesheet" type="text/css" href="assets\css\style.css">

    <title>Multiplication Table</title>

</head>
<body>
    
<!-- Columnas -->
<?php foreach($numbers as $number): ?>

<div class="columnas"> <?php echo "<span> {$number} </span>" ?> </div>

<?php endforeach ?>

<!-- Fin Columnas -->
<div></div>

<?php foreach($numbers as $number): ?>

<div class="columnas"> <?php echo "<span> {$number} </span>" ?> </div>

<?php foreach($numbers as $numberMultiplier): ?>

<?php if($numberMultiplier == 1){
     continue; }

     $multiplication = $number * $numberMultiplier;
     ?>

<?php if(in_array($numberMultiplier, $blockNumbers)): ?>
  <div class="columnas-block"> <?php echo "<span> &nbsp; </span>" ?> </div>
<?php else: ?>
   <div class="columnas"> <?php echo "<span> {$multiplication} </span>" ?> </div>
<?php endif ?>

<?php endforeach ?>
<div></div>
<?php endforeach ?>

</body>
</html>