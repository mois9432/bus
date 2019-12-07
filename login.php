<?php
#region 資料庫建置
$ip = "Noumi.hopto.org";
$db_account = "mois94328863";
$db_password = "mois8863";
$db_name = "wolf";

$db_link = mysqli_connect($ip, $db_account, $db_password) or die("Could not connect");
mysqli_select_db($db_link, $db_name) or die("Could not select database");
mysqli_query($db_link, "set names utf8");
#endregion

if (isset($_POST["accountName"]) && isset($_POST["password"])) {
    $result = mysqli_query($db_link, "SELECT * FROM `user` WHERE account = '" . $_POST["accountName"] . "'");
    $row_result = mysqli_fetch_assoc($result);

    if ($_POST["accountName"] == $row_result["account"] && $_POST["password"] == $row_result["password"]) {
        echo $row_result["nickname"];
    } else {
        echo "false";
    }
} else {
    echo "false";
}
