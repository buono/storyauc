<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
	<meta name="google-site-verification" content="pBOsuHKKVEHL1bp85C3JBL1kDYzMbFYoa5hyUDnd3cA" />
    <title>STORY TO AUCTION: 出品者の想いを綴ったオークション</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="STORY TO AUCTIONは、オークション出品者の出品までの想いが詠めるWebサービスです。どんな想いで購入したのか、どれだけ大切に扱われていたのか、そしてどうして手放すことになってしまったのか…。どうせ買うなら、想いを共感できた人から買いませんか？">
    <meta name="author" content="buono">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/storyauc.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
	  <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->
	<!--[if lte IE 7.0]>
	<script src="js/imgsizer.js"></script>
	<![endif]-->
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
<!--facebook plugin-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=226014524245632";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->
        <div class="navbar navbar-inverse navbar-static-top">
          <div class="navbar-inner">
		  <div class="container">
            <a class="brand active" href="index.php">STORY TO AUCTION</a>
			<a class="pull-right tweet-icon" href="https://twitter.com/storytoauction" data-show-count="false" data-lang="ja" data-show-screen-name="false" data-dnt="true"><img class="width:30px;" src="img/Twitter_logo_white.png"></a>
		  </div>
		  </div>
		 </div>

    <!-- Carousel
    ================================================== -->
<div class="row">
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/top3_after.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>その出品には、色んな想いが詰まってる。</h1>
              <p class="lead">買った時、使っている時、出品する時。<br/>オークションの出品物には、その時々の想い全てが<br/>詰まっています。</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/top2_after.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>前使っていたのは、どんな人なんだろう。</h1>
              <p class="lead">中古品を買って、そんなことを考えた事はありませんか？<br/>STORY TO AUCTIONなら、買う前に知る事ができます。</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/top1_after.jpg" alt="" style="width:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1>せっかくだから、次も大事に使ってほしい。</h1>
              <p class="lead">大事に使っていた物は、大事にしてくれる人に売りたい。<br/>熱い想いを語る場がここにあります。</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
</div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span6 write-explain">
		  <div class="row">
		  <div class="span6">
          	<h2><i class="fa fa-leaf"></i> 想いを綴る</h2>
		  </div>
		  </div>
		  <div class="row">
		  <div class="span6">
          	<p>あなたのその商品に対する熱い想いを綴って下さい。</p>
		  	<p>なぜそれを買う事になったのか、どんな気持ちで使っていたのか、どうして手放すことになってしまったのか。</p>
		  	<p>きっとその気持ちは、見ている人に届くはず。</p>
		  </div>
		  </div>
		  
		  <div class="row">
		  <div class="span3 offset3">
			<form action="submit.php" method="get" class="pull-right input-append" >
			<a rel="tooltip-error" data-placement="top" data-original-title="オークションIDを正しく入力して下さい" data-trigger="manual"><input class="input-large validate auctionid" type="text" id="appendedInputButton" name="auctionID" placeholder="オークションIDを入力して下さい"></a>
			<button type="submit" class="btn btn-primary">綴る <i class="fa fa-caret-right"></i></button>
			</form>
		  </div>
		  </div>

		  <div class="row">
		  <div class="span6">
		  &nbsp;
		  </div>
		  </div>
			
		  <div class="row">
				<div class="span2 offset4">
		  			<a href="#" class="pull-right" rel="tooltip" data-placement="top" data-original-title="オークションIDとは、出品物に対して固有に割り当てられた番号の事です。ヤフオクであれば、出品ページに行き、「商品の情報」→「詳細情報」→「オークションID」で確認する事ができます。">オークションIDとは</a>
				</div>
			</div>
		  <div class="row">
				<div class="span2 offset4">
		  			<a href="#" class="pull-right" rel="tooltip" data-placement="top" data-original-title="既に投稿をした事のある出品物であれば、オークションIDを入力すれば過去の投稿を修正／消去する事ができます。">修正、消去の仕方</a>
				</div>
		  </div>
		</div>
		
		<div class="span6 read-explain">
		<div class="row">	
          <div class="span6">
          <h2><i class="fa fa-book "></i> 想いを詠む</h2>
		  </div>
		</div>
		<div class="row">
		  <div class="span6">
          <p>オークションは安いけど、どんな人が使っていたのかもどんな風に使われていたのか分からない。</p>
		  <p>そんな不安を持っている方、是非このサイトで出品者の熱い想いを詠んでみて下さい。</p>
		  <p>出品者の人柄まで、伝わって来るかもしれません。</p>
		  </div>
		</div>
		<div class="row">
		  <div class="span5 offset1">
           <a class="btn btn-primary pull-right" href="list.php">詠む <i class="fa fa-caret-right"></i></a>
		   </div>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
	</div>
</div><!-- /.container -->

<div class="container" id="media-info">
	<h3 id="media-title" class="text-center">-メディアに掲載して頂きました-</h3>
	<div class="row">
		<div class="span3 offset3">
			<a href="http://techable.jp/archives/9227"><img src="http://techable.jp/wp-content/themes/imbalance2/images/techable/logo.png" /></a>
		</div>
		<div class="span3">
			<a href="http://www.fashionsnap.com/the-posts/2013-12-23/story-to-auction/"><img src="http://www.fashionsnap.com/img/logo-360.png" /></a>
		</div>
	</div>
</div>

<div class="container" id="top-message">
	<h1 class="text-center">オークションの世界を覗いてみよう</h1>
	<h2 class="text-center"><i class="fa fa-chevron-down"></i></h2>
</div>
<div id="content-img-3">
<div id="content-img-2">
<div id="content-img-1">
	<h1 id="img-message" class="container">こだわりの一品を。</h1>
</div>
</div>
</div>
<div class="container text-right" id="footer">
    <p>&copy; 2013 <a href="http://buono.in/">Buono</a></p> 
</div>

<div class="container" id="footer-message">
<div class="row">
<div class="span1">
			<a href="https://twitter.com/share" style="margin-top:10px" class="twitter-share-button" data-url="http://storyauc.com" data-text="STORY TO AUCTION">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>	
</div>

<!--
<div class="span1">
	<div class="fb-like" data-href="http://storyauc.com" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
</div>
-->
<div class="fb-like" data-href="http://storyauc.com/" data-width="450" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="span2 offset8">
</div>
</div>
</div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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
    <script src="js/holder/holder.js"></script>
	<script src="js/storyauc.js"></script>
    <script>
jQuery(function($){
	$("a[rel=tooltip]").tooltip();
});
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
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

