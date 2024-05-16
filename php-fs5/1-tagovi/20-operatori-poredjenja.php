<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{font-size:25px}
    th{background:lightgrey ;
     padding:10px;
     border:1px solid black}
     td {
        border:1px solid black;
        padding:10px;
     }
</style>
</head>
<body>
<table>
    <thead>
       <th>Operator</th>
       <th>Primer</th>
       <th>Jednako je</th>
    </thead>
    <tr>
        <td>==</td>
        <td>Jednako sa</td>
        <td>$i == 5</td>
    </tr>
    <tr>
        <td>===</td>
        <td>Identicno Jednako sa</td>
        <td>$i === 5</td>
    </tr>
    <tr>
        <td>!=</td>
        <td>Nije Jednako sa</td>
        <td>$i != 5</td>
    </tr>
    <tr>
        <td>!==</td>
        <td>Nije Identicno Jednako sa</td>
        <td>$i !== 5</td>
    </tr>
    <tr>
        <td>></td>
        <td>Vece od</td>
        <td>$i > 5</td>
    </tr>
    <tr>
        <td>>=</td>
        <td>Vece i jednako od</td>
        <td>$i >= 5</td>
    </tr>

    <tr>
        <td><</td>
        <td>manje od</td>
        <td>$i < 5</td>
    </tr>
    <tr>
        <td><=</td>
        <td>Manje i jednako od</td>
        <td>$i <= 5</td>
    </tr>


    </table>
    <hr>
    <h1>Logicki operatori</h1>
    <table>
    <thead>
       <th>Operator</th>
       <th>Primer</th>
       <th>Jednako je</th>
    </thead>
    <tr>
        <td>&&</td>
        <td>I</td>
        <td>$x == 5 && $y == 10</td><!--ovo znaci i jedno i drugo mora da bude jednakko-->
    </tr>
    <tr>
        <td>and</td>
        <td>I niskog prioriteta</td>
        <td>$x == 5 and $y == 10</td>
    </tr>


    <tr>
        <td>||</td>
        <td>Ili</td>
        <td>$x == 5 || $y == 10</td><!--ovde mora da bude zadovoljen samo jedan uslov-->
    </tr>
    <tr>
        <td>or</td>
        <td>Ili niskog prioriteta</td>
        <td>$x == 5 or $y == 10</td>
    </tr>
    <tr>
        <td>!</td>
        <td>NE</td>
        <td>$x != 30</td>
    </tr>
    <tr>
        <td>xor</td>
        <td>Iskljucivo ili</td>
        <td>$x == 5 xor $y == 10</td>
    </tr>
    
    </table>
    <?php
    $a = 50;
    $b = 50.0;
    var_dump($a==$b);
    echo "<hr>";
    $x= 30;
    $y=17;
    $z="33";
    $q=33;
    $w=15;
var_dump($q==$z);//ispisace true
var_dump($z===$q); //ispisace false   ;
   // $site= file_get_contents('blog_page') or die("Nema blog stranice");
   $username='Ivan';
   $lk='123456';
   $mb='0207983710208';
   if ($username=='Bojan' && $lk=='123456') {
    echo "Ulogovan si na sistem"; }

   
    else{
    echo "Nisu ispravni podaci";
   }
    
    ?> 
</body>
</html>