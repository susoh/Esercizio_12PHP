<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function funzione ($colore) {
            switch ($colore) {
                case 'r':
                    return 'red';
                    break;
                case 'v':
                    return 'green';
                    break;
                case 'b':
                    return 'blue';
                    break;
                default:
                    return 'black';
                    break;
            }
        }

        $c = "r";
        echo "<p style='color:".funzione($c).";'>QUESTO PARAGRAFO è DI COLORE ". funzione($c) . "</p>";
    ?>
</body>
</html>