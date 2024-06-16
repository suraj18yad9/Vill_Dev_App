
<?php 
include_once "db_config.php";
$user = $_POST['user'];
$password = $_POST['password'];
$statement = $conn->prepare("select user,password from users where user = :user AND password = :password limit 1");
$statement->execute(array(':user' => "$user",':password' => "$password"));

$row = $statement->fetch();
if (!$row) {
    echo "User or password is incorrect.";
    echo '<script>window.location.href = "index3.php";</script>';
    exit;
}
else {
    echo "Login successfuly";
    session_start();
    $token = rand(10002,99999);
    $statement = $conn->prepare("UPDATE `users` SET `token` = :token WHERE `users`.`id` = :id");
    $statement->execute(array(':token' => "$token",':id' => "$row[id]"));
    $_SESSION["user"] = $user;
    $_SESSION["password"] = $token;
    echo '<script>window.location.href = "mainuser.php";</script>';
    exit;
}
?>