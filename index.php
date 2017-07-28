<? include 'info.php';?><!--DOWNLOADED FROM WWW.SCRIPTGATES.COM-->
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	
	<title><? echo $title; ?></title>

		<meta charset="utf-8">
	<meta name="keywords" content="premium html template, unique premium template, multipurpose" />
	<meta name="description" content="Welcome to KALLYAS Template, a wonderful and premium product for multipurpose websites" />

    <link rel="stylesheet" href="css/template.css" type="text/css" />

		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/responsive-devices.css" type="text/css" />
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font_body" />
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
	<script src="js/jquery.noconflict.js" type="text/javascript"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js" type="text/javascript"></script>
	
	<link rel="shortcut icon" href="images/favicons/favicon.png">
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
	
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="css/fixes.css" />
	<![endif]-->

	<!--[if lte IE 8]>
		<script src="js/respond.js"></script>
		<script type="text/javascript"> 
		var $buoop = {vs:{i:8,f:6,o:10.6,s:4,n:9}} 
		$buoop.ol = window.onload; 
		window.onload=function(){ 
		 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
		 var e = document.createElement("script"); 
		 e.setAttribute("type", "text/javascript"); 
		 e.setAttribute("src", "http://browser-update.org/update.js"); 
		 document.body.appendChild(e); 
		} 
		</script> 
	<![endif]-->
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Facebook OpenGraph Tags - Replace with your own -->
	<meta property="og:title" content="KALLYAS Template HTML"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.hogash.com/demo/kalypso_html/"/>
	<meta property="og:image" content="http://www.hogash.com/demo/kalypso_html/images/logo.png"/>
	<meta property="og:site_name" content="Kallyas"/>
	<meta property="fb:app_id" content=""/> <!-- PUT HERE YOUR OWN APP ID - you could get errors if you don't use this one -->
	<meta property="og:description" content="Welcome to KALLYAS Template, a wonderful and premium product for multipurpose websites"/>
	<!-- END Facebook OpenGraph Tags -->
	
	<!-- THIS IS THE DARK THEME STYLESEET // REMOVE COMMENTS TO ENABLE -->
	<!-- <link rel="stylesheet" href="css/dark-theme.css" type="text/css" /> -->
	<!-- END DARK THEME -->
	
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4777573-29']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>    
	<!-- Custom page stylesheets -->
	<link rel="stylesheet" href="sliders/iosslider/style.css" type="text/css" />
	<!-- end custom page stylesheets -->
    
</head>

<body class="">
    	<!-- ADD AN APPLICATION ID !!
	If you want to know how to find out your app id, either search on google for: facebook appid, either go to http://rieglerova.net/how-to-get-a-facebook-app-id/ -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=227862407254187"; // addyour appId here
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

</script>   

		<!--register_popup-->
			<? include('register_popup.php');?>

		<!--end register_popup-->
    	<header>
    		<? include('header.php');?>
    	</header>
                
    <!--begginning of content-->
		<div id="slideshow" class="gradient">
        	
			<div class = "iosSlider">
			
				<div class="slider">
					
                    <div class = "item">
						<img src="images/sliders/iosslider/slide_1.png" alt="" /><!-- slide image -->
                        <div class="caption style1">
                        	<h2 class="main_title">Learn2win 遊戲化影像學習平台</h2>
							<h3 class="title_big">全面網上「遊學園」</h3>
							<a href="flow.php" class="more"><img src="sliders/iosslider/arr01.png" alt=""></a>
							<!--<h4 class="title_small">以及學生生活設計教學內容．即學．即用</h4>-->
							<!--<h4 class="title_small"></h4>-->
                        </div>
					</div><!-- end item -->
                    
					<!--<div class = "item">
                        <img src="images/sliders/iosslider/slide_2.png" alt="" />
                        <div class="caption style2 fromright " >
                        	<h2 class="main_title">生活化、系統化、全面英語教學短片</h2>
							<h3 class="title_big">同時照顧生活應用和學科應用、全面強化英語</h3>
							<a href="flow.php" class="more"><img src="sliders/iosslider/arr01.png" alt=""></a>
							<h4 class="title_small">同時解決考試問題與生活應用</h4>
							<h4 class="title_small">CHOOSE WHAT YOU LIKE, COMBINE IT HOW YOU WANT</h4>
                        </div>
					</div>--><!-- end item -->
					<div class = "item">
						<img src="images/sliders/iosslider/slide_5.png" alt="" />
                        <div class="caption style1">
                        	<h2 class="main_title">多角度「學習任務」</h2>
							<h3 class="title_big">校本設計之「學習任務」練習校內、外知識</h3>
							<a href="flow.php" class="more"><img src="sliders/iosslider/arr01.png" alt=""></a>
							<!--<h4 class="title_small">全面強化校內、外英語知識</h4>-->
                        </div>
					</div><!-- end item -->
                    <!--
                    <div class = "item itemPngBackground">
						<img src="images/sliders/iosslider/slide4.png" alt="" />
                        <div class="caption style3 fromright">
                        	<h2 class="main_title">AUTUMN 2012<br>COLLECTION</h2>
							
                            <h4 class="title_small">FOR THE PRODUCTS IN OUR NEWEST COLLECTION</h4>
                            <h3 class="title_big"><span class="stronger">20%</span> DISCOUNT</h3>
                        </div>
					</div>--><!-- end item -->
				
				</div>
				
				<div class="prev">
					<div class="btn-label">PREV</div>
				</div>
				
				<div class="next">
					<div class="btn-label">NEXT</div>
				</div>
				
				<!--<div class="selectorsBlock bullets">
					<div class="selectors">
						<div class="item first selected"></div>
						<div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
					</div>
				</div>-->
                
			</div><!-- end iosSlider -->
            <div class="scrollbarContainer"></div>
        </div><!-- end slideshow -->
        
		<div id="action_box" data-arrowpos="center">
			<div class="container">
				<div class="row">
					<div class="span8">
						<h4 class="text">了解我們的核心價值</h4>
					</div>
					<div class="span4 align-center">
						<!--<a href="#register_panel" data-rel="prettyPhoto[register_panel]" class="btn">試用表格</a>-->
						<a href="flow.php" class="btn">我們的優勢</a>
					</div>
				</div>
			</div>
		</div><!-- end action box -->        
				<section id="content">
			<div class="container">
			
				<div class="row image-boxes imgboxes_style1">
                    <div class="span4 box">
						<a href="howitwork.php" class="hoverBorder">
							<img src="images/site_images/img-01.png" alt="">
							
						</a>
                        <h3 class="m_title">1.天天學習 Learning</h3>
                        <p>於Learn2win網上學習平台，學習不再盲從教室形式。我們把每個小學學科（如英文科、數學科）重新設計為九個難度，學生必須持續完成「學習關卡」晉級以充實學科知識。教學內容及難題以學生生活及校本課程設計。</p>
                    </div><!-- end span -->
					
					<div class="span4 box">
						<a href="howitwork.php" class="hoverBorder">
							<img src="images/site_images/img-02.png" alt="">
							
						</a>
                        <h3 class="m_title">2.完成任務 Challenging</h3>
                        <p>學生完成「學習任務」獲取學習獎分及升級。充實所學。「學習任務」包括：完成校本內容設計之測驗/考試卷、翻譯英文短文、錄制英文廣播劇等</p>
                    </div><!-- end span -->
					
					<div class="span4 box">
						<a href="howitwork.php" class="hoverBorder">
							<img src="images/site_images/img-03.png" alt="">
							<!--<h6>了解更多 +</h6>-->
						</a>
                        <h3 class="m_title">3.分享受益 Donate and Reward</h3>
                        <p>持續完成「學習關卡」及「學習任務」，可獲取「學習獎分」，用以兌換獎品，或兌換等值現金捐獻予指定慈善機構</p>
                    </div><!-- end span -->
					
                </div><!-- end row // imgboxes_style1 -->
				
                <!--<div class="row services_box">
					<div class="span4">
						<div class="box fixclear">
							<div class="icon"><img src="images/icons/services_box/ico-01.png" alt=""></div>
							<h4 class="title">WEB DESIGN  SERVICES</h4>
							<ul class="list-style1">
								<li>Content management systens</li>
								<li>Virtual shops and ecommerce </li>
								<li>Presentation websites</li>
								<li>Online catalogues</li>
								<li>Portal systems</li>
								<li>& any other dynamic website </li>
							</ul>
						</div>
					</div>
					<div class="span4">
						<div class="box fixclear">
							<div class="icon"><img src="images/icons/services_box/ico-02.png" alt=""></div>
							<h4 class="title">GRAPHIC DESIGN SERVICES</h4>
							<ul class="list-style1">
								<li>Logo design</li>
								<li>Flyers & Brochures</li>
								<li>Business Cards</li>
								<li>Stationery Design</li>
								<li>Powerpoint presentation</li>
								<li>Print Ads / Magazine</li>
								<li>Banners</li>
							</ul>
						</div>
					</div>
					<div class="span4">
						<div class="box fixclear">
							<div class="icon"><img src="images/icons/services_box/ico-03.png" alt=""></div>
							<h4 class="title">INTERNET MARKETING</h4>
							<ul class="list-style1">
								<li>Search engine optimisation</li>
								<li>Search engine marketing</li>
								<li>Internet advertising</li>
								<li>Web analysis</li>
								<li>Blog marketing</li>
							</ul>
						</div>
					</div>
				</div>--><!-- end row // services_box -->
				
				<!--
				<div class="row recentwork_carousel default-style">
					<div class="span3">
						<h3 class="m_title">RECENT WORKS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
						<div class="controls">
							<a href="#" class="prev"><span class="icon-chevron-left"></span></a>
							<a href="#" class="complete"><span class="icon-th"></span></a>
							<a href="#" class="next"><span class="icon-chevron-right"></span></a>
						</div>
					</div>
					<div class="span9">
						<ul id="recent_works1" class="fixclear">
							<li>
								<a href="#">
									<span class="hover">
										<img src="images/site_images/recent_works/work1.jpg" alt="" />
										<span class="hov"></span>
									</span>
									<div class="details">
										<span class="bg"></span>
										<h4>Business cards project</h4>
										<span>Graphic Design</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="hover">
										<img src="images/site_images/recent_works/work2.jpg" alt="" />
										<span class="hov"></span>
									</span>
									<div class="details">
										<span class="bg"></span>
										<h4>Business cards project</h4>
										<span>Graphic Design</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="hover">
										<img src="images/site_images/recent_works/work3.jpg" alt="" />
										<span class="hov"></span>
									</span>
									<div class="details">
										<span class="bg"></span>
										<h4>Business cards project</h4>
										<span>Graphic Design</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="hover">
										<img src="images/site_images/recent_works/work4.jpg" alt="" />
										<span class="hov"></span>
									</span>
									<div class="details">
										<span class="bg"></span>
										<h4>Business cards project</h4>
										<span>Graphic Design</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>--><!-- end row // recentworks_carousel default-style -->
				
				<div class="row">
					<div class="span8">
						<h3 class="m_title" style="margin-top:25px;">重新定義網上學習﹐注入遊樂元素於學習中！</h3>
						<p>詳細了解我們的教學模式</p>
					</div>
					<div class="span2">
						<img src="images/character/char3.png">
					</div>
					<div class="span2">
						<a href="flow.php" class="circlehover with-symbol" data-size="" data-position="top-left" data-align="right">
							<span class="text">了解Learn2win的優勢</span>
							<span class="symbol"><img src="images/ok.png" alt=""></span>
						</a>
					</div>
				</div><!-- end row // circlehover -->
				<!--
				<div class="row feature_box style2">
					<div class="span12">
						<h4 class="smallm_title centered bigger"><span>WHY CHOOSE THIS THEME</span></h4>
					</div>
					<div class="span3">
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-01.png" alt=""></span>
							<h4 class="title">CUSTOMER SUPPORT</h4>
							<p>Great customer support! Check out our forum.</p>
						</div>
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-05.png" alt=""></span>
							<h4 class="title">RESPONSIVE</h4>
							<p>The template has a responsive layout. Try resizing the window.</p>
						</div>
					</div>
					<div class="span3">
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-02.png" alt=""></span>
							<h4 class="title">WELL DOCUMENTED</h4>
							<p>Documentation include with explanations for most of the options.</p>
						</div>
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-06.png" alt=""></span>
							<h4 class="title">MULTILANGUAGE READY</h4>
							<p>You can install languages and extend the website's languages.</p>
						</div>
					</div>
					<div class="span3">
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-03.png" alt=""></span>
							<h4 class="title">UNLIMITED COLORS</h4>
							<p>With just a few clicks you can add any color you want.</p>
						</div>
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-07.png" alt=""></span>
							<h4 class="title">HTML5 &amp; CSS3</h4>
							<p>Built with modern technologies like HTML5 and CSS3.</p>
						</div>
					</div>
					<div class="span3">
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-04.png" alt=""></span>
							<h4 class="title">CUSTOM SHORTCODES</h4>
							<p>Great custom shortcodes which are ment to ease up your work.</p>
						</div>
						<div class="box">
							<span class="icon"><img src="images/icons/featured_boxes2/ico-08.png" alt=""></span>
							<h4 class="title">HIGHLY CUSTOMIZABLE</h4>
							<p>This template includes lots of customizations and combinations.</p>
						</div>
					</div>
				</div>--><!-- end row // featurebox style2 -->
				<!--
				<div class="row">
					<div class="span12">
						<div class="latest_posts acc-style">
							<h3 class="m_title">LATEST POSTS</h3>
							<a href="#" class="viewall">VIEW ALL -</a>
							<div class="css3accordion">
								<ul>
									<li>
										<div class="inner-acc">
											<a href="#" class="thumb hoverBorder">
												<img src="images/site_images/img1.jpg" alt="">
											</a>
											<div class="content">
												<em>03 October 2012 by Admin, in Entertanment</em>
                        						<h5 class="m_title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur </h5>
												<div class="text">Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor..</div>
												<a href="#">READ MORE +</a>
											</div>
										</div>
									</li>
					
									<li>
										<div class="inner-acc">
											<a href="#" class="thumb hoverBorder plus">
												<img src="images/site_images/img2.jpg" alt="">
											</a>
											<div class="content">
												<em>03 October 2012 by Admin, in Entertanment</em>
                        						<h5 class="m_title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur </h5>
												<div class="text">Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor..</div>
												<a href="#">READ MORE +</a>
											</div>
										</div>
									</li>
					
									<li class="last">
										<div class="inner-acc">
											<a href="#" class="thumb hoverBorder plus">
												<img src="images/site_images/img3.jpg" alt="">
											</a>
											<div class="content">
												<em>03 October 2012 by Admin, in Entertanment</em>
                        						<h5 class="m_title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur </h5>
												<div class="text">Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor..</div>
												<a href="#">READ MORE +</a>
											</div>
										</div>
									</li>
								</ul>
							</div>end CSS3 Accordion 
						</div> end acc-style
					</div>
				</div>--><!-- end row // latest posts // acc-style -->

			</div>
			<!--
			<div class="gray-area">
				<div class="container">
					<div class="row">
					<div class="span7">
						<h3 class="m_title">WELCOME TO KALLYAS Template</h3>
						<a href="#" class="hoverBorder pull-right" style="margin-left:20px;"><img src="images/site_images/img6.jpg" alt=""></a>
						<p>Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor. Quisque sit amet leo purus, eget accumsan lorem.<br>
Curabitur fringilla ipsum id quam lacinia venenatis.</p>
						<p>Nullam facilisis mattis lacus, ut dapibus risus congue vitae. Suspendisse potenti. </p>
						<p>Nunc sodales dolor at justo posuere vitae pretium magna rhoncus. Sed quis velit eget diam condimentum tempus.</p>
						 
					</div>
					<div class="span5">
						<h3 class="m_title">TEXT ACCORDION</h3>
						<div class="acc-group default-style">
							<button data-toggle="collapse" data-target="#acc1" class="collapsed">Vivamus ut molestie nulla. Aenean vel tortor velit.</button>
							<div id="acc1" class="collapse in">
								<div class="content">
									<p>Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor. Quisque sit amet leo purus, eget accumsan lorem.<br> Curabitur fringilla ipsum id quam lacinia venenatis. </p>
								</div>
							</div>
						</div>
						<div class="acc-group default-style">
							<button data-toggle="collapse" data-target="#acc2" class="collapsed">Duis aute irure dolor in reprehenderit in voluptate.</button>
							<div id="acc2" class="collapse in">
								<div class="content">
									<p>Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor. Quisque sit amet leo purus, eget accumsan lorem.<br> Curabitur fringilla ipsum id quam lacinia venenatis. </p>
								</div>
							</div>
						</div>
						<div class="acc-group default-style">
							<button data-toggle="collapse" data-target="#acc3" class="collapsed">Neque porro quisquam est qui dolorem.</button>
							<div id="acc3" class="collapse in">
								<div class="content">
									<p>Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor. Quisque sit amet leo purus, eget accumsan lorem.<br> Curabitur fringilla ipsum id quam lacinia venenatis. </p>
								</div>
							</div>
						</div>
						<div class="acc-group default-style">
							<button data-toggle="collapse" data-target="#acc4" class="collapsed">At vero eos et accusamus et iusto odio dignissimos.</button>
							<div id="acc4" class="collapse in">
								<div class="content">
									<p>Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor. Quisque sit amet leo purus, eget accumsan lorem.<br> Curabitur fringilla ipsum id quam lacinia venenatis. </p>
								</div>
							</div>
						</div>
						<div class="acc-group default-style">
							<button data-toggle="collapse" data-target="#acc5" class="collapsed">Curabitur fringilla ipsum id quam lacinia venenatis..</button>
							<div id="acc5" class="collapse in">
								<div class="content">
									<p>Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor. Quisque sit amet leo purus, eget accumsan lorem.<br> Curabitur fringilla ipsum id quam lacinia venenatis. </p>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				
					<div class="row">
						<div class="span12">
							
							<div class="testimonial_box" data-align="left" data-size="small" data-theme="light">
								<div class="details">
									<img src="images/testimonial_logo.png" alt="">
									<h6><strong>Paul Simon</strong> General Manager</h6>
								</div>
								<blockquote>I'm very happy with your services. I have an excellent website built from scratch and I'm 100% happy.</blockquote>
							</div>
							<div class="testimonial_box" data-align="top" data-size="large" data-theme="dark">
								<div class="details">
									<img src="images/testimonial_logo.png" alt="">
									<h6><strong>Andrew Smith</strong> Strategic Coordinator</h6>
								</div>
								<blockquote>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Donec id elit non mi porta gravida at eget metus.</blockquote>
							</div>
							
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>-->

			<!--
			<div class="container">
			
				<div class="row">
					<div class="span12">
						<div class="process_steps fixclear">
							<div class="step intro">
								<h3>our working process <strong>in 3 steps</strong></h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
								<a href="#">MORE ABOUT US +</a>
							</div>
							<div class="step step1">
								<div class="icon" data-animation="tada">
									<img src="images/icons/steps/ico-plan.png" alt="">
								</div>
								<h3>planning &amp; strategy</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div><
							<div class="step step2">
								<div class="icon" data-animation="pulse">
									<img src="images/icons/steps/ico-designdev.png" alt="">
								</div>
								<h3>design &amp; develop</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
							<div class="step step3">
								<div class="icon" data-animation="fadeOutRightBig">
									<img src="images/icons/steps/ico-launch.png" alt="">
								</div>
								<h3>test &amp; deliver</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
							</div>
						</div>

					</div>
				</div>
				
				<div class="row partners_carousel">
					<div class="span2">
						<h5 class="title"><span>OUR PARTNERS // TEHNOLOGIES USED</span></h5>
						<div class="controls">
							<a href="#" class="prev"><span class="icon-chevron-left"></span></a>
							<a href="#" class="next"><span class="icon-chevron-right"></span></a>
						</div>
					</div>
					<div class="span10">
						<ul id="partners_carousel" class="fixclear">
							<li><a href="#"><img src="images/partners/css3.png" alt="" /></a></li>
							<li><a href="#"><img src="images/partners/html5.png" alt="" /></a></li>
							<li><a href="#"><img src="images/partners/joomla.png" alt="" /></a></li>
							<li><a href="#"><img src="images/partners/wordpress.png" alt="" /></a></li>
							<li><a href="#"><img src="images/partners/themeforest.png" alt="" /></a></li>
							<li><a href="#"><img src="images/partners/jquery.png" alt="" /></a></li>
						</ul>
					</div>
				</div>
				
				<div class="row">
					<div class="span12">
						<div class="keywordbox">just some keywords here, services or what any text you want</div>
					</div>
				</div>
				
			</div>-->
		</section><!-- end #content -->        
<footer id="footer">
	<? include('footer.php'); ?>
</footer>        
    </div><!-- end page_wrapper -->
	
    <a href="#" id="totop">TOP</a>

<!--////////////////// Load JS Files -->

<script src = "sliders/iosslider/jquery.iosslider.min.js"></script>
<script src = "sliders/iosslider/jquery.iosslider.kalypso.js"></script><!-- some extended functionalities -->
<script type="text/javascript">
;(function($){
	$(document).ready(function() {

		$('.iosSlider').iosSlider({
			snapToChildren: true,
			desktopClickDrag: true,
			keyboardControls: true,
			navNextSelector: $('.next'),
			navPrevSelector: $('.prev'),
			navSlideSelector: $('.selectors .item'),
			scrollbar: true,
			scrollbarContainer: '#slideshow .scrollbarContainer',
			scrollbarMargin: '0',
			scrollbarBorderRadius: '4px',
			onSlideComplete: slideComplete,
			onSliderLoaded: function(args){
				var otherSettings = {
					hideControls : true, // Bool, if true, the NAVIGATION ARROWS will be hidden and shown only on mouseover the slider
					hideCaptions : false  // Bool, if true, the CAPTIONS will be hidden and shown only on mouseover the slider
				}
				sliderLoaded(args, otherSettings);
			},
			onSlideChange: slideChange,
			infiniteSlider: true,
			autoSlide: true
		});
	
	}); // end doc ready
})(jQuery);
</script>

<!-- Carousels (by CarouFredSel) -->
<script src="js/jquery.carouFredSel.js" type="text/javascript"></script>
<script type="text/javascript">
;(function($) {
	// ** partners carousel
	$('#partners_carousel').carouFredSel({
		responsive: true,
		scroll: 1,
		auto: false,
		items: {
			width: 250,
			visible: {
				min: 1,
				max: 10
			}
		},
		prev	: {	
			button	: ".partners_carousel .prev",
			key		: "left"
		},
		next	: { 
			button	: ".partners_carousel .next",
			key		: "right"
		}
	});
	// *** end partners carousel
	$(window).load(function(){
		// ** recent works
		$('#recent_works1').carouFredSel({
			responsive: true,
			scroll: 1,
			auto: false,
			items: {
				width: 300,
				visible: {
					min: 1,
					max: 10
				}
			},
			prev	: {	
				button	: ".recentwork_carousel .prev",
				key		: "left"
			},
			next	: { 
				button	: ".recentwork_carousel .next",
				key		: "right"
			}
		});
		// *** end recent works carousel
	});
})(jQuery);
</script>
<!-- end Carousels (by CarouFredSel) --><link rel="stylesheet" href="css/template1.css" type="text/css" />
<link rel="stylesheet" href="css/template.css" type="text/css" />
<link rel="stylesheet" href="addons/demo_panel/jquery.miniColors.min.css" type="text/css" />
<script type="text/javascript" src="js/template.js"></script>




<!-- JavaScript at the bottom for fast page loading -->


<!-- prettyphoto scripts & styles -->
<link rel="stylesheet" href="addons/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript">

	function ppOpen(panel, width){
		jQuery.prettyPhoto.close();
		setTimeout(function() {
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: width, theme:'pp_kalypso'});
			jQuery.prettyPhoto.open(panel);
		}, 300);
	} // function to open different panel within the panel
	
	jQuery(document).ready(function($) {
		jQuery("a[data-rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({theme:'pp_kalypso',social_tools:false, deeplinking:false});
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_kalypso'});
		jQuery("a[data-rel^='prettyPhoto[login_panel]']").prettyPhoto({theme:'pp_kalypso', default_width:800, social_tools:false, deeplinking:false});
		
		jQuery(".prettyPhoto_transparent").click(function(e){
			e.preventDefault();
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: 980, theme:'pp_kalypso transparent', opacity: 0.95});
			jQuery.prettyPhoto.open($(this).attr('href'),'','');
		});
		
	});

</script>
<!--end prettyphoto -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
		s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>
	
<div class="hide">
	<div id="transparent_panel" class="transparent_content">
		<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
		<p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
		<p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image.</p>
		<p>Duis dictum tristique lacus, id placerat dolor lobortis sed. In nulla lorem, accumsan sed mollis eu, dapibus non sapien. Curabitur eu adipiscing ipsum. Mauris ut dui turpis, vel iaculis est. Morbi molestie fermentum sem quis ultricies. Mauris ac lacinia sapien. Fusce ut enim libero, vitae venenatis arcu. Cras viverra, libero a fringilla gravida, dolor enim cursus turpis, id sodales sem justo sit amet lectus. Fusce ut arcu eu metus lacinia commodo. Proin cursus ornare turpis, et faucibus ipsum egestas ut. Maecenas aliquam suscipit ante non consectetur. Etiam quis metus a dolor vehicula scelerisque.</p>
		<p>Nam elementum consequat bibendum. Suspendisse id semper odio. Sed nec leo vel ligula cursus aliquet a nec nulla. Sed eu nulla quam. Etiam quis est ut sapien volutpat vulputate. Cras in purus quis sapien aliquam viverra et volutpat ligula. Vestibulum condimentum ultricies pharetra. Etiam dapibus cursus ligula quis iaculis. Mauris pellentesque dui quis mi fermentum elementum sodales libero consequat. Duis eu elit et dui varius bibendum. Sed interdum nisl in ante sollicitudin id facilisis tortor ullamcorper. Etiam scelerisque leo vel elit venenatis nec condimentum ipsum molestie. In hac habitasse platea dictumst. Sed quis nulla et nibh aliquam cursus vitae quis enim. Maecenas eget risus turpis.</p>
	</div>
</div><!-- end transparent panel -->

</body>
</html>