<?php
require 'conn.php';
$track = $_GET['track'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>
    <?php
    if ($track == "Software") {
    ?>
        <h1>SOFTWARE STUDENTS</h1>
    <?php
    } else if ($track == "Network") {
    ?>
        <h1>NETWORK STUDENTS</h1>
    <?php
    }
    ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Bil</th>
            <th>Student Name</th>
            <th>Student No</th>
        </tr>
        <?php

        $sql = "SELECT * FROM student WHERE track = '$track'";
        if ($result = $conn->query($sql)) {
            $bil = 1;
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil ?></td>
                    <td><?php echo $row->stdname; ?></td>
                    <td><?php echo $row->stdno; ?></td>
                </tr>
        <?php
                $bil++;
            }
        }
        ?>
    </table>
    <br><a href="index.php">Back</a>
</body>

</html>