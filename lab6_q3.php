<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $w = 10;
        $h = 12;
        $area = calculateArea($w, $h);

        echo "<b>The area of a rectangle with a width of $w and $h is $area</b>";
    ?>
</body>
</html>