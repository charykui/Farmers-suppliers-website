
<?php

$username = 'root';
$password = '';
$db = "greenland";
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$db.'', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
if(isset($_GET['id'])) {
try {

$id = $_GET['user_id'];
$stmt = $conn->prepare("DELETE FROM users WHERE user_id='$id'");
$stmt->execute();
header ('Location: index.php');
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}