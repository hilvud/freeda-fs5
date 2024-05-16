<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{font-size:25px}
</style>
<body>
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
echo $x + $y;
?>



</body>
</html>