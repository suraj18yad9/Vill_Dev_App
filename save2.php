<?php
    include_once('db_config.php');
    $user = $_POST['user'];
    $password = $_POST['password'];
    $statement = $conn->prepare("INSERT INTO `users` (`user`, `password`) VALUES ( :user, :password)");
    $statement->execute(array(':user'=>$user, ':password'=>$password));
    echo "Thank you for successfully submitted the Empoyees Details ";
    ?>
    