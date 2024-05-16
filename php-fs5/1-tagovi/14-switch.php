<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body{font-size:25px}></style>
</head>
<body>
   <?php
   $ispitni_rezultat=40;
   switch($ispitni_rezultat){
         case $ispitni_rezultat <=50;
           echo "Brale moras jos da strebas"."<br>";
           break;
        case $ispitni_rezultat <=60;
            echo "Provukao si se" . "<br>";
            break;
         case $ispitni_rezultat <=70;
            echo "fino je stanje". "<br>";
            break;
        case $ispitni_rezultat <=90;
            echo "Super si savladao jos ima malo par sitnica"."<br>";
            break;
        default :
    $ispitni_rezultat ="";
    echo"Pripremi se da padnes godinu";
   }



   
   
   ?>
</body>
</html>