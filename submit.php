
<?php

$affiliateID="auct%2Fp%2FvCGwZF_FrdxqAPnTdwvy";

//リクエストクエリ作成
$appID="dj0zaiZpPXlhNFlsVEVNakJOMSZkPVlXazlWMU00T1hreE5UUW1jR285TUEtLSZzPWNvbnN1bWVyc2VjcmV0Jng9ZTA-";
$auctionID=$_GET['auctionID'];
$query="http://auctions.yahooapis.jp/AuctionWebService/V2/auctionItem?appid=".$appID."&auctionID=".$auctionID;

//画像を取得する
$res=@file_get_contents($query);
$dom=@DOMDocument::loadHTML($res);
$xml=simplexml_import_dom($dom);
$result['img']=$xml->xpath("//image1");
$result['title']=$xml->xpath("//title");
//文字化け対策
$pre_result['url']=$xml->xpath("//auctionitemurl");
$result['url']=urlencode($pre_result['url'][0]);

//もしオークションIDが既にデータベースにあったら内容を取得する
$link=mysql_connect("localhost","root","");
if(!$link){
	die("接続エラー!".mysql_error());
}
mysql_select_db("storyauc",$link);
$sql="SELECT message FROM list WHERE auctionid='".$auctionID."'";
$posts=mysql_query($sql,$link);
//デフォルトモードはnew
$mode="new";
while($post=mysql_fetch_array($posts)){
	if(!$post['message']){
		//メッセージが入っていなければ新規投稿モード
		$mode="new";
	/*
	}elseif($_SESSION['message']){
		//修正ボタンで戻ってきた場合
		$mode="edit";	
		$message=$_SESSION['message'];
		var_dump($message);
	*/

	}else{
		//編集モード
		$mode="edit";
		$pre_message = $post['message'];
		//<br>を改行に変換
		$message=str_replace("<br/>","\r\n", $pre_message);
	}
}

mysql_close($link);
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>STORY TO AUCTION: 出品者の想いを綴ったオークション</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="STORY TO AUCTIONは、オークション出品者の出品までの想いが詠めるWebサービスです。どんな想いで購入したのか、どれだけ大切に扱われていたのか、そしてどうして手放すことになってしまったのか…。どうせ買うなら、想いを共感できた人から買いませんか？">
    <meta name="author" content="buono">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/storyauc.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->

    <div class="navbar navbar-inverse navbar-static-top">
      <div class="navbar-inner">
	  <div class="container">
        <a class="brand active" href="index.php">STORY TO AUCTION</a>
	  </div>
	  </div>
	 </div>
	<div class="container">
		<div class="row">
			<div class="span6">
<?php
if($mode=="edit"&&!$result['img'][0]){
	echo "※このオークションは終了しています";
}
?>
				<h2><?php echo $result['title'][0];?></h2>
				<a href='http://atq.ck.valuecommerce.com/servlet/atq/referral?sid=2219441&pid=877775177&vcptn=<?php echo $affiliateID;?>&vc_url=<?php echo $result['url'];?>' target='_blank'>
			</div>
			<div class="span6">
				<img src='<?php echo $result['img'][0];?>'>
				</a>
			</div>
			<form action="confirm.php" method="post" onsubmit="return convert(this)" class="span12" name="submitObject">
				<input type="hidden" name="auctionID" value="<?php echo $auctionID;?>"></input>
				<input type="hidden" name="title" value="<?php echo $result['title'][0];?>"></input>
				<input type="hidden" name="img" value="<?php echo $result['img'][0];?>"></input>
				<input type="hidden" name="url" value="<?php echo $result['url'];?>"></input>
				<input type="hidden" name="editornew" value="<?php echo $mode;?>"></input>
				<div class="row">
				<div class="span12">&nbsp;
				<?php if($mode=="new"){;?>
				<textarea class="span12" name="message" rows="20" placeholder="ストーリーを綴って下さい"></textarea>
				<?php }elseif($mode=="edit"){;?>
				<textarea class="span12" name="message" rows="20"><?php echo $message;?></textarea>	
				</div>
				</div>
				<?php };?>
				<button type="submit" class="btn" name="mode" value="confirm">確認画面へ</button>
				<?php if($mode=="edit"){;?>
				<button type="submit" class="btn" name="mode" value="remove">投稿を削除する</button>
				<?php };?>
			</form>
	
	      <!-- FOOTER -->
      <footer class="pull-right">
        <p>&copy; 2013 buono</p> 
      </footer>
	  </div>
	
	</div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="js/holder/holder.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/storyauc.js"></script>
<script type="text/javascript">

/*
	function convert(frm){
		var title = frm.elements["title"].value;
		var img = frm.elements["img"].value;
		var url = frm.elements["url"].value;
		var auctionID = frm.elements["auctionID"].value;
		var msg = frm.elements["message"].value;
		convertedMsg = msg.replace("\n","<br/>");
		return true;
	};
*/
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42120283-1', 'storyauc.com');
  ga('send', 'pageview');

</script>

  </body>
</html>

