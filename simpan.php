<?php
require 'conn.php';

$stdname = $_POST['stdname'];
$stdno = $_POST['stdno'];
$track = $_POST['track'];

$sql = "SELECT * FROM student WHERE track='" . $track . "'";
$result = $conn->query($sql);

if ($result->num_rows < 5) {
    $sql = "INSERT INTO student (stdname, stdno, track) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $stdname, $stdno, $track);
    $stmt->execute();
    ?>
    <script>
        alert("Successfully registered");
        window.location = "index.php";
    </script>

<?php
} else {
?>
    <script>
        alert("Track is full");
        window.location = "index.php";
    </script>

<?php
}
