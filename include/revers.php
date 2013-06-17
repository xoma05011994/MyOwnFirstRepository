<?php
$select = "SELECT * FROM {$_GET['table']} WHERE id = {$_GET['id']}";
if ($result_select = mysql_query($select)) {
    $user = mysql_fetch_assoc($result_select);
    if($user['like'])
    {
        $update= "UPDATE {$_GET['table']} SET `like`=0 WHERE id = {$_GET['id']};";
        mysql_query($update);
    }
    else
    {
        $update= "UPDATE {$_GET['table']} SET `like`=1 WHERE id = {$_GET['id']};";
        mysql_query($update);
    }
}
header("Location: ?page=search&search={$_GET['s']}");
    ?>