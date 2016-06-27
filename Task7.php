<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $whatsit;

        function whatsit($whatsit) {
            echo "Value is $whatsit.<br>";
        }
        whatsit("string");
        whatsit("double");
        whatsit("boolean");
        whatsit("integer");
        whatsit("NULL");


    ?>
</body>
</html>
