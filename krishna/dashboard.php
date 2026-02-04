<?php
session_start();
include "../db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
}

$user_id = $_SESSION['user_id'];
?>

<h2>Welcome</h2>
<a href="logout.php">Logout</a>

<hr>

<h3>submitted data</h3>

<?php
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Email: " , $row['email'] , "<br>";
    echo "password: " , $row['password'] , "<br>";
}
?>
