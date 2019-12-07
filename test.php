<?php
$ip = "Noumi.hopto.org";
$account = "mois94328863";
$password = "mois8863";
$db_name = "wolf";

$db_link = mysqli_connect($ip, $account, $password) or die("Could not connect");
mysqli_select_db($db_link, $db_name) or die("Could not select database");
mysqli_query($db_link, "set names utf8");

$result = mysqli_query($db_link, "SELECT * FROM user");
while ($row = mysqli_fetch_assoc($result)) {
    $tmp[] = $row;
}

/*foreach($tmp as $key => $value)
{
    $content = implode(" ", $value);
    echo $content.'<br>';
}*/

echo json_encode(array($tmp)); //放到json裡面，名稱是data
mysqli_close($db_link);