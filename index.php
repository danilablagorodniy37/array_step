<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slonik</title>
</head>
<body>
<?php 

    $values = [

        ["Teacher", "philanthropist", "playboy", "genius"],
        ["Kirill", "KatasONoff", "Pantera", "23"],
        ["Europe", "Ukraine", "Dnipro", "ukrainets"],
        ["Elon Musk", "Tesla Roadster", "The Divine Comedy", "python"],
    ];

    $keys = [

        ["post", "lifestyle_1", "lifestyle_2", "lifestyle_3",],
        ["name", "surname", "nickname", "age",],
        ["pt_world", "country", "sity", "national",],
        ["best_friend", "auto", "favorite_book", "pet",],
    ];

    $array_done = [];
    foreach ($keys as $idx => $curKey) {
      $array_done[] = array_combine($curKey, $values[$idx]);
    }
    echo "<pre>";
    print_r($array_done);  
    echo "</pre>";
?>
</body>
</html>