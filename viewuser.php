<?php 
include_once("db_config.php");
$statement = $conn->prepare("select `user`,`password` from `users` where 1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
    <table>
        <tr><th><?="S. No."; ?></th><th><?="User Name"; ?></th><th><?= "Password";?></th></tr> 
        <?php $sno = 0; foreach($result as $record) { $sno = $sno+1;?>
        <tr><td><?=$sno;?></td><td><?=$record["user"];?></td><td><?=$record["password"];?></td></tr>
        <?php } ?>
    </table>
