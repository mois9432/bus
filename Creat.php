<?php
#region 抓取post
$accountName = $_POST['accountName'];
$passwordValue = $_POST['passwordValue'];
$nickname = $_POST['nickname'];
#endregion

#region 資料庫建置
$ip = "Noumi.hopto.org";
$db_account = "mois94328863";
$db_password = "mois8863";
$db_name = "wolf";

$db_link = mysqli_connect($ip, $db_account, $db_password) or die("Could not connect");
mysqli_select_db($db_link, $db_name) or die("Could not select database");
mysqli_query($db_link, "set names utf8");
#endregion

mysqli_query($db_link, "INSERT INTO `user` (`account`, `password`, `nickname`) VALUES ('$accountName', '$passwordValue', '$nickname');");
mysqli_close($db_link);
