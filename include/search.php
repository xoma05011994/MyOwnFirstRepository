<?php
if(!isset($_GET['search']))
{
    $_GET['search'] = $_POST['search'];
} ?>
<span>For search term "<?php echo $_GET['search']; ?>" found: </span>
<?php
$select = "SELECT * FROM projects WHERE name LIKE '%{$_GET['search']}%'";
if ($result_select = mysql_query($select)) {
    while ($row = mysql_fetch_assoc($result_select)) {
        ?>
        <div>
            <span>Name: </span><?php echo $row['name']; ?></br>
            <span>Homepage: </span><?php echo $row['homepage']; ?></br>
            <span>Owner: </span><a href="?page=user&id_user=<?php echo $row['id_user'] ?>"><?php echo $row['owner']; ?></a></br>
            <span>Description: </span><?php echo $row['description']; ?></br>
            <span>Watchers: </span><?php echo $row['watchers']; ?></br>
            <span>Forks: </span><?php echo $row['forks']; ?></br>
            <span id="like">
                <?php if ($row['like']) { ?>
                    <a href ="?page=revers&table=projects&id=<?php echo $row['id']; ?>&s=<?php echo $_GET['search']; ?>">Like</a>
                <?php } else { ?>
                    <a href ="?page=revers&table=projects&id=<?php echo $row['id']; ?>&s=<?php echo $_GET['search']; ?>">UnLike</a>
                <?php } ?>
            </span>
            <?php
            echo "</br>----------------------------------------------------------------"
            ?>        
        </div>
    <?php }
}
?>

