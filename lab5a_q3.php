<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q3</title>
</head>

<body>

    <?php
        function calculateArea($width, $height) {
            $area = $width * $height;
            return $area;
        }

        // Example usage with values 4 and 2
        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);

        echo "<b>The area of a rectangle with a width of $width and a height of $height is $area</b>";
    ?>

</body>
</html>

