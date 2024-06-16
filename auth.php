<?php
    include_once("../setting/db_config.php");
    session_start();
    if(session_status()){
        if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || !$_SESSION['username'] || !$_SESSION['password']){
            echo '<script>window.location.href = "../login/index.php";</script>';
        }
        else{
            $statement = $conn->prepare("select * from users where username = :username AND token = :pass limit 1");
            $statement->execute(array(':username' => "$_SESSION[username]",':pass' => "$_SESSION[password]"));
            $row = $statement->fetch();
            if (!$row) {
                echo "Username or password is incorrect.";
                echo '<script>window.location.href = "../login/index.php";</script>';
                exit;
            }
        }
    }
    else{
        echo '<script>window.location.href = "../login/index.php";</script>';
    }
?>