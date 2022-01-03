<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Track</title>
</head>

<body>
    <h1>Choose Track</h1>
    <table>
        <form action="simpan.php" method="POST">
            <tr>
                <td>
                    <label>Name:</label>
                </td>
                <td>
                    <input type="text" name="stdname" id="stdname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Matric No.:</label>
                </td>
                <td>
                    <input type="text" name="stdno" id="stdno" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Select Track:</label>
                </td>
                <td>
                    <input type="radio" name="track" id="Software" value="Software" checked>
                    <label for="Software">Software</label>
                    <input type="radio" name="track" id="Network" value="Network">
                    <label for="Network">Network</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </form>

    </table>

    <h2>Track List</h2>
    <a href="senarai.php?track=Software">Software</a>

    <?php
    require 'conn.php';
    $sql = "SELECT * FROM student WHERE track = 'Software'";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        echo "(" . $rowcount . ")";
    }
    ?>

    <br><a href="senarai.php?track=Network">Network</a>
    <?php
    $sql = "SELECT * FROM student WHERE track = 'Network'";
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        echo "(" . $rowcount . ")";
    }
    ?>

</body>

</html>