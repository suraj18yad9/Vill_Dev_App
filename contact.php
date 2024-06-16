<?php
    include_once('db_config.php');
    $f = $_POST['fname'];
    $l = $_POST['lname'];
    $e = $_POST['email'];
    $p = $_POST['phone'];
    $statement = $conn->prepare("INSERT INTO `contact` ( `firstName`, `lastName`, `email`,  `phone`) VALUES (:fname, :lname, :email, :phone)");
    $statement->execute(array(':fname'=> $f , ':lname'=>$l, ':email'=>$e, ':phone'=>$p));
?>