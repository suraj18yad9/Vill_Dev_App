<?php
    include_once('db_config.php');
    $d = $_POST['district'];
    $m = $_POST['mandal'];
    $pn = $_POST['problemname'];
    $postd = $_POST['postd'];
    $statement = $conn->prepare("INSERT INTO `problempost` ( `District`, `Mandal`, `Problem Name`,  `Program Desciption`) VALUES (:district, :mandal, :problemname, :postd)");
    $statement->execute(array(':district'=> $d , ':mandal'=>$m, ':problemname'=>$pn, ':postd'=>$postd));
    echo "  Thank you for successfully submitted your problem  ";
?>