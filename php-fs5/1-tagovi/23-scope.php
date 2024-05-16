<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<>
    <h1>Scope - oblast vazenja varijable</h1>
    <hr>
    <?php
      $polaznik= "Aleksandra";
      function kurs(){
        $polaznik= "Aleksandra";//ovo mora da stoji ovde
        echo $polaznik;
      }
kurs();




    ?>
    <hr>
    <?php
     $x = 120;//ovo su globalne varijable
     $y= 130;
    function result(){
        $x = 20;//ovo su lokalne varijable
        $y= 30;
        $saberi = $x + $y;
        return $saberi;
    }
    echo result();
    echo "<hr>";
    echo $x + $y;
    ?>
    <h3>Return</h3>
    <?php
    $podcast_epizoda = "Gost epizoda 12 - Vladimir Mladenov";
    function podcast() {
        $podcast_epizoda = "Gost epizoda 12 - Vladimir Mladenov";
        echo $podcast_epizoda;
        return;
    }
    podcast();
    ?>
</body>
</html>