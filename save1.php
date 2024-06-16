<?php
    include_once('db_config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $statement = $conn->prepare("INSERT INTO `volunteers` (`username`, `password`) VALUES ( :username, :password)");
    $statement->execute(array(':username'=>$username, ':password'=>$password));
    echo "Thank you for successfully submitted the Empoyees Details ";
    ?>
    