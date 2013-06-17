<?php
$select = "SELECT * FROM users WHERE id = {$_GET['id_user']}";
if ($result_select = mysql_query($select)) {
    $user = mysql_fetch_assoc($result_select);
    ?>
    <div>
        <span>Name: </span><?php echo $user['name']; ?></br>
        <span>Sername: </span><?php echo $user['sname']; ?></br>
        <span>Company: </span><?php echo $user['company']; ?></br>
        <span>Blog: </span><?php echo $user['blog']; ?></br>
        <span>Followers: </span><?php echo $user['followers']; ?></br>
        <span id="like">
                <?php if ($user['like']) { ?>
                    <a href ="?page=revers_user&table=users&id=<?php echo $user['id']; ?>&s=<?php echo $_GET['id_user']; ?>">Like</a>
                <?php } else { ?>
                    <a href ="?page=revers_user&table=users&id=<?php echo $user['id']; ?>&s=<?php echo $_GET['id_user']; ?>">UnLike</a>
                <?php } ?>
            </span>
    </div>
        <?php
    }
    ?>