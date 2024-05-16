<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
    $predavaci=['html i css'=>'boban',
                 'php'=>'slobodan',
                  'react'=>'jovana'
                ];
    echo "<pre>"; // Otvara <pre> tag
    print_r($predavaci); // Ispisuje niz u preformatted formatu
    echo "</pre>"; // Zatvara <pre> tag
?>
</body>
</html>