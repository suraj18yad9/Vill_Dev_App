<?php 
include_once("db_config.php");
$statement = $conn->prepare("select `District`,`Mandal`,`program Name`, `Program Description`from `postprogram` where 1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//echo"<pre>";print_r($result);echo"</pre>";
?>
    <table>
        <tr>
            <th><?="S. No."; ?></th>
            <th><?="District"; ?></th>
            <th><?= "Mandal";?></th>
            <th><?= "program Name";?></th>
            <th><?= "Program Description";?></th>
        </tr> 
        <?php $sno = 0; foreach($result as $record) { $sno = $sno+1;?>
        <tr>
            <td><?=$sno;?></td>
            <td><?=$record["District"];?></td>
            <td><?=$record["Mandal"];?></td>
            <td><?=$record["program Name"];?></td>
            <td><?=$record["Program Description"];?></td>
        </tr>
        <?php } ?>
    </table>
