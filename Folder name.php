<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 5a Q1</title>
</head>

<body>

    <?php
        $name = "AIDA AFIQAH BINTI ZAINUDIN";
        $matric_number = "DI220080";
        $course = "BACHELOR OF COMPUTER SCIENCE (MULTIMEDIA COMPUTING) WITH HONOURS";
        $year_of_study = "2";
        $address = "KOTA TINGGI, JOHOR";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>


