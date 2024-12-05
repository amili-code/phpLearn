<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>hode code</title>
</head>

<body>
    <h1>

        <?php
        function factory($number)
        {
            static $arr = [];

            $out = 1;
            for ($number; $number > 0; $number--) {
                $out *= $number;
                if (empty($arr[$number - 1])) {
                } else {
                    $arr[$number] *= $arr[$number - 1];
                }
            }
            return $out;
        }


        $one = 1;
        $time = microtime(true);

        for ($one; $one < 1000; $one++) {
            echo ($one . '=>' . factory($one) . '<hr />');
        }
        echo ((microtime(true) - $time));

        ?>
    </h1>

</body>

</html>