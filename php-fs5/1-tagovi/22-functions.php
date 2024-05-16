<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  function event(){
    echo"Sutra je termin druzenja u prirodi"
  }
  event();
  event(); 
  event();
  event();

  echo "<hr>";
  $brojac = 0;
  while($brojac <= 4){
    event();
    $brojac++;
  }
  echo "<h3>Ugradjene funkcije <h3>";
  echo date("F j, Y, g:i a");
  echo "<hr>";
  function kursevi($webdizajn, $programiranje){
    echo"Trenutno idu kursevi $webdizajn i to su WP i IT prekvalifikacija, 
    dok imamo kurseve programiranja i to su $programiranje";
  }
  kursevi("It prekvalifikacija", "fullstack kurs" );
  kursevi("wordpress","python");




  ?> 
</body>
</html>