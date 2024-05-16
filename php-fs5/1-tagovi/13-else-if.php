<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    body{font-size:30px;}
</style>
<body>
    
 <h1>Uslovna logika - Kontrola toka</h1>
 <hr></hr>

 <?php 
 $broj=67;

     if($broj< 50){
        echo 'Ako imas manje od pedeset leta nije lose jos uvek si mlad';

        
     } else{
        echo 'ako imas vise od 50,briga te,imas manje od 60';

     }

echo "<hr>";
$vikend = date("D");

echo $vikend;
echo "<hr>";
if($vikend== "Fri"){
    echo 'super danas je kraj nedelje';
}else{echo 'jos tri dana rada u nedelji.';}

echo "<hr>";

$racun = 300;
$ime='Sloba';
if($racun<250){
    echo'Crveni alarm ';
}
else{
    $dopuna = 250;
    $dopuna += $dopuna;
    echo"Ok resio si krizu mozes da vozis opusteno,i  ttvoja dodatna zarada $dopuna je dovoljna";
}
 ?>

    
</body>
</html>