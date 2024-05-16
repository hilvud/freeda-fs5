<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <style>
        body{font-size:30px}
    </style>
    <?php
 class Automobili {
    public $ime ="Renault";
 }
 $auto1 = new Automobili();
 $auto1->ime ='skoda';
 $auto2 = new Automobili();
 $auto2->ime='Renault';
 echo "Ja ne volim marku ". $auto1->ime . "vec volim marku" .$auto2->ime; 

    ?>


</body>
</html>