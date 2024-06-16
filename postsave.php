<?php
    include_once('db_config.php');
    $d = $_POST['district'];
    $m = $_POST['mandal'];
    $pn = $_POST['programname'];
    $pd = $_POST['pd'];
    $statement = $conn->prepare("INSERT INTO `postprogram` ( `District`, `Mandal`, `Program Name`,  `Program Description`) VALUES (:district, :mandal, :programname, :pd)");
    $statement->execute(array(':district'=> $d , ':mandal'=>$m, ':programname'=>$pn, ':pd'=>$pd));
?>