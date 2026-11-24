<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>

<body>

<?php
$name = "NURUL FARHANA BINTI MOHAMAD HANAFI";
$matric = "AI250209";
$course = "BIC21203 WEB DEVELOPMENT";
$year = "YEAR 2";
$address = "MALAYSIA";
?>

<table border="1">
    <tr>
        <th>Name</th>
        <td><?php echo $name; ?></td>
    </tr>

    <tr>
        <th>Matric Number</th>
        <td><?php echo $matric; ?></td>
    </tr>

    <tr>
        <th>Course</th>
        <td><?php echo $course; ?></td>
    </tr>

    <tr>
        <th>Year of Study</th>
        <td><?php echo $year; ?></td>
    </tr>

    <tr>
        <th>Address</th>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
