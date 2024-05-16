<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Multi dimenzionalni nizovi</h1>
    <hr>
    <?php
    $tim = [
        'Aleksandra Novakovic'=>
        [
            'UB',
            'front and wp dev',
            'php'
        ],
        'Ostoja Stijak'=>
        [
            'Kikinda',
            'backend',
            'python & sql'
        ],
        'Ivanko Franjkovic'=>
        [
            'Split',
            'Wp dev',
            'wp'
        ]
        ];
    echo "<pre>";
    print_r ($tim);
    echo "</pre>"
    
    
    ?>
</body>
</html>