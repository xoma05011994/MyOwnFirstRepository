<?php
$select = "SELECT * FROM {".mysql_real_escape_string($_GET['table'])."} WHERE id = {".mysql_real_escape_string($_GET['id'])."}";
if ($result_select = mysql_query($select)) {
    $user = mysql_fetch_assoc($result_select);
    if($user['like'])
    {
        $update= "UPDATE {".mysql_real_escape_string($_GET['table'])."} SET `like`=0 WHERE id = {".mysql_real_escape_string($_GET['id'])."};";
        mysql_query($update);
    }
    else
    {
        $update= "UPDATE {".mysql_real_escape_string($_GET['table'])."} SET `like`=1 WHERE id = {".mysql_real_escape_string($_GET['id'])."};";
        mysql_query($update);
    }
}
header("Location: ?page=search&search={".mysql_real_escape_string($_GET['s'])."}");
    ?>