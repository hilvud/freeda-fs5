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
        <td>=</td>
        <td>$i = 5</td>
        <td>$i = 5</td>
    </tr>
    <tr>
        <td>+=</td>
        <td>$i += 5</td>
        <td>$i=$+= 5</td>
    </tr>
    <tr>
        <td>-</td>
        <td>$i-= 5</td>
        <td>$i=$i-=5</td>
    </tr>
    </table>
<?php
$a=7;
echo $a;
//sabiranje i dodela
$b=33;
$b+=20;
echo "<hr>";
echo $b;
//spajanje i dodela
$g='banana';
$g.='s';
echo $g;
?>
</table>  


</body>
</html>