<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title></title>
    </head>
    <body>
        <div id="wrap">
            <?php include './include/header.php'; ?>
            <div id="content">
                <?php
                if (isset($_GET['page'])) {
                    $file_name = "include/" . $_GET['page'] . ".php";
                    if (file_exists($file_name)) {
                        include($file_name);
                    } else {
                        echo "404";
                    }
                } else {
                    $select = "SELECT * FROM projects;";
                    if ($result_select = mysql_query($select)) {
                        ?>
                <div>Main page of this site. </div>
                <p>List of companies: Use search in top right corner;</p>
                        <ul>
                            <?php while ($row = mysql_fetch_assoc($result_select)) { ?>
                            <li> - <?php echo $row['name']; ?> </li>
                            <?php    
                            }
                            ?>
                        </ul>
                            <?php
                        }
                    }
                    ?>
            </div>
<?php include './include/footer.php'; ?>
        </div>
    </body>
</html>
