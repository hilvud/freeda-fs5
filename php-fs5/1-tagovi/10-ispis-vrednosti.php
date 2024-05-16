<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Ispis vrednosti</h1>
    <ol>
          <li>echo</li>
          <li>print</li>
          <li>print_r</li><!--ovo koristimo kad resavamo neke probleme-->
          <li>var_dump</li>

    </ol>
     
    <?php
    $ispis = "Ovo je klasican tekst koji zelim ispisati." ;
     echo $ispis;
     print($ispis);
     $gradovi =['Bec', 'Budimpesta', 'Atina','Milvoki', 'Stokholm'];
     print_r($gradovi);
     $debagovanje = 'Kada zelite da znate ssta funkcija vraca onda var_dump';
     var_dump($debagovanje);
    ?>

</body>
</html>