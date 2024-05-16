<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Ponovi neku akciju"."<hr>";


     echo "<h2>While loop</h2>";
     echo "<hr>";
    $counter = 0;
     while($counter < 5) {
        echo "$counter :Ponovi neku akciju" . "<hr>";
        $counter++;
     }
     echo "<h2>For loop</h2>";
     echo "<hr>"; 
     for($counter = 0;$counter <5;$counter++){

        echo "$counter :Ponovi neku akciju" . "<hr>";
     }
     echo "<h2>For loop sa nizom</h2>";
     echo "<hr>";
     $jelovnik = ['pizza', 'kineska piletina', 'lazanja', 'sarma', 'pasulj', 'rizoto', 'kaneloni','gibanica'];

     for ($i = 0; $i < count($jelovnik); $i++) {
         echo $jelovnik[$i] . "<hr />";
     }
    
    ?>
</body>
</html>