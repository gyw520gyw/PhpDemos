<!DOCTYPE html>
<?php
require_once ('config.php');
require_once('connect.php');

$id = $_GET['id'];
$sql = "select * from articletable where id = '$id'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    $item = $result->fetch_assoc();
} else {
    echo "这篇文章不存在";
    exit;
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="default.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><a href="#">ARTICLE<sup></sup></a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="active"><a href="article.list.php">文章</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="page">
    <div id="content">
        <div class="post">
            <h1 class="title"><?php echo $item['title']?><br>
                <span style="color:#ccc; font-size: 14px">作者: <?php echo $item['author']?> &nbsp; &nbsp; &nbsp; 时间: <?php echo $item['create_time']?></span>
            </h1>
            <div class="entry">
                <?php echo $item['content']?>
            </div>
        </div>
    </div>

    <div id="sidebar">
        <ul>
            <li id="search">
                <h2><b class="text1">Search</b></h2>
                <form method="get" action="article.search.php">
                    <fieldset>
                        <input type="text" id="s" name="key" value="" />
                        <input type="submit" id="x" value="Search" />
                    </fieldset>
                </form>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <div style="clear: both;">&nbsp;</div>
</div>

</body>

</html>






















