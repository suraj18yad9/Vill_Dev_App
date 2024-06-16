
<?php 
include_once "db_config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$statement = $conn->prepare("select username,password from volunteers where username = :username AND password = :password limit 1");
$statement->execute(array(':username' => "$username",':password' => "$password"));

$row = $statement->fetch();
if (!$row) {
    echo "Username or password is incorrect.";
    echo '<script>window.location.href = "index2.php";</script>';
    exit;
}
else {
    echo "Login successfuly";
    session_start();
    $token = rand(10002,99999);
    $statement = $conn->prepare("UPDATE `volunteers` SET `token` = :token WHERE `volunteers`.`id` = :id");
    $statement->execute(array(':token' => "$token",':id' => "$row[id]"));
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $token;
    echo '<script>window.location.href = "useradd.php";</script>';
    exit;
}
?>