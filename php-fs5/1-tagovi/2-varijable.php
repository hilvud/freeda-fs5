<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>varijable</title>
</head>
<body>
    <style>
        body{font-size:40px}
        </style>
   ,<?php
   $naslov='Bojan SAvic';
   echo $naslov ?> 
   <?php 
    $najbolja_grupa ='green day';
    echo $najbolja_grupa?>
    <ul>
        <li>stringovi</li>
        <li>brojevi</li>
        <li>boolean</li>
        <li>null</li>
</ul>
<?php 
echo (10*10)/2;
$brojx= 20;
$brojy= 30;
$rezultat=$brojx + $brojy;
echo '<hr>';
echo  'Rezultat sabiranja dva broja je' . $rezultat;
echo '<hr>';
$ispravna_tvrdnja ='true';
$neispravna_tvrdnja ='false';
var_dump($ispravna_tvrdnja);
?>
<?php echo '<br></hr>';
 echo'bojan voli da jede cokoladu...';
 echo'<hr>';
 $x=30;
 $y=25;
 $rezultat1=$x+$y;
 echo $rezultat;

?>
</body>
</html>