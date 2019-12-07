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

$accountName = $_POST["accountName"];
$result = mysqli_query($db_link, "SELECT account FROM user");


$state = 'true';
foreach($result as $arr)
{
    $content = implode("", $arr);

    if($accountName == $content)
    {
        $state = 'false';
    }

}

echo $state;
mysqli_close($db_link);