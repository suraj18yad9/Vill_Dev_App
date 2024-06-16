
<?php 
include_once "db_config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$statement = $conn->prepare("select username,password from adminlogin where username = :username AND password = :password limit 1");
$statement->execute(array(':username' => "$username",':password' => "$password"));

$row = $statement->fetch();
if (!$row) {
    echo "Username or password is incorrect.";
    echo '<script>window.location.href = "index1.php";</script>';
    exit;
}
else {
    echo "Login successfuly";
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $token;
    echo '<script>window.location.href = "voladd1.php";</script>';
    exit;
}
?>