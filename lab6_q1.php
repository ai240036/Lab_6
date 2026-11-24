<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "AMMAR FARIS BIN ZUBIR";
        $matric = "AI240036";
        $course = "BACHELOR OF COMPUTER SCIENCE (INFORMATION SECURITY) WITH HONOURS";
        $year = "YEAR 3";
        $address = "NO.31, JALAN SRI INDAH, TAMAN SRI INDAH,86400 PARIT RAJA, BATU PAHAT, JOHOR";
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>