<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{font-size:25px}
    </style>
</head>
<body>
    <h1>Foreach loop</h1>
    <hr>
<?php 
 $fs5 = ['sneza', 'snjezana', 'ostoja', 'aleksandra','dunja'];

 foreach($fs5 as $polaznik){
    echo $polaznik . "<hr>";
 }
echo "<hr>";
$program =[
    '1 dan'=>'lepa brena',
    '2 dan'=>'dubioza kolektiv',
    '3 dan'=>'bajaga',
    '4 dan' =>'dragana mirkovic',
    '5 dan'=>'haris dzinovic'
];
/*foreach($program as $key => $value){
    echo $key . " : " . $value" . "<br>""
}*/



 ?>
 <?php foreach($program as $dan => $izvodjac) : ?>
    <h3><?php echo $dan; ?> nastupa <?php echo $izvodjac ?></h3>
<?php endforeach; ?>
</body>
</html>