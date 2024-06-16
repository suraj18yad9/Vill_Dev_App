<?php 
include_once("db_config.php");
$statement = $conn->prepare("select `username`,`password` from `volunteers` where 1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
    <table>
        <tr><th><?="S. No."; ?></th><th><?="User NAme"; ?></th><th><?= "Password";?></th></tr> 
        <?php $sno = 0; foreach($result as $record) { $sno = $sno+1;?>
        <tr><td><?=$sno;?></td><td><?=$record["username"];?></td><td><?=$record["password"];?></td></tr>
        <?php } ?>
    </table>
