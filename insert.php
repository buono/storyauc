<?php

//本日の動画をDBに挿入する
$auctionID=htmlspecialchars($_POST['auctionID'],ENT_QUOTES,'UTF-8');
$message=htmlspecialchars($_POST['message'],ENT_QUOTES,'UTF-8');
$title=htmlspecialchars($_POST['title'],ENT_QUOTES,'UTF-8');
$img=htmlspecialchars($_POST['img'],ENT_QUOTES,'UTF-8');
$url=htmlspecialchars($_POST['url'],ENT_QUOTES,'UTF-8');


$link=mysql_connect("localhost","root","");
if(!$link){
    die("データベースを開けません".mysql_error());
}
mysql_select_db("storyauc",$link);

//フォームで入力された場合はデータを入力
//データをDBに入力
$sql="INSERT INTO list (`auctionid`, `title`, `message`,`img`,`url`) VALUES('".$auctionID."','".$title."','".$message."','".$img."','".$url."')";
$result=mysql_query($sql,$link);

mysql_close($link);

//挿入が終わったらindex.phpへ戻る
header('Location:http://localhost/storyauc2/list.php');

?>



