r<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<? include 'info.php';?>
	<title><? echo $title; ?></title>
	<meta charset="utf-8" />
	<meta name="keywords" content="premium html template, unique premium template, multipurpose" />
	<meta name="description" content="Welcome to KALLYAS Template, a wonderful and premium product for multipurpose websites" />

	<link rel="stylesheet" href="css/template.css" type="text/css" />

		
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/responsive-devices.css" type="text/css" />
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font_body" />
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
	<script src="js/jquery.noconflict.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js" type="text/javascript"></script>
	
	<link rel="shortcut icon" href="images/favicons/favicon.png" />
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png" />
	
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
	<meta property="og:title" content="KALLYAS Template HTML" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.hogash.com/demo/kalypso_html/" />
	<meta property="og:image" content="http://www.hogash.com/demo/kalypso_html/images/logo.png" />
	<meta property="og:site_name" content="Kallyas" />
	<meta property="fb:app_id" content="" /> <!-- PUT HERE YOUR OWN APP ID - you could get errors if you don't use this one -->
	<meta property="og:description" content="Welcome to KALLYAS Template, a wonderful and premium product for multipurpose websites" />
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

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
 
        <div id="page_header" class="gradient bottom-shadow">
			<div class="bgback bg3"></div>
			<div class="container">
				<div class="row">
					<div class="span6">
						<ul class="breadcrumbs fixclear">
							<!--<li><a href="#">HOME</a></li>
							<li>ABOUT US</li>-->
						</ul>
						<!--<span id="current-date"></span>-->
					</div>
					<div class="span6">
						<div class="header-titles">
							<h2>試用課程</h2>
							<h4>體驗網上學習樂趣</h4>
						</div>
					</div>
				</div><!-- end row -->
			</div>
			
			<div class="shadowUP"></div>
        </div><!-- end page_header -->
        
		<section id="content">
			<div class="container">
				
				<div id="mainbody">
					
					<div class="row">
						<div class="span12">
							<h1 class="page-title">試用網上學習課程</h1>

							<!--start the flow chart-->

					<div class="row hg-portfolio ">
						<div class="span12">

							<!-- step 1-->

							<div class="row">
								<div class="span6">
									<div class="img-intro"><img src="images/portfolio_images/icon-06.png" /></div>
								</div>
								<div class="span6 ">
									<h3 class="title">1.「生活化教學」課程影片</h3>
									<div class="pt-cat-desc">
										<h4>學習主題：</h4>
										<ul>
											<li>餐廳英文用語</li>
										</ul>
										<h4>學習範疇：</h4>
										<ul>
											<li>英文詞彙(Vocabulary)</li>
											<li>英文文法(Grammar)</li>
											<li>英文聆聽(Listening)</li>
											<li>英文對話(Oral and Conversion)</li>
											<li>英文閱讀理解(Comprehension)</li>
											<li>英文文化環節(English in various culture)</li>
										</ul>
										</br><br/>
										<a href="coursevid.php"><button type="button" class="btn btn-success ">立即試用</button></a>
									</div><!-- pt cat desc -->
								</div>
								
								<div class="span12">
									<hr class="bs-docs-separator" />
								</div>
							</div>
							<!-- end step 1 -->
							<!-- step 2-->
							<div class="row">
								<div class="span6">
									<div class="img-intro"><img src="images/portfolio_images/icon-09.png" /></div>
								</div>
								<div class="span6">
									<h3 class="title">2.「系統教學」課程影片</h3>
									<div class="pt-cat-desc">
										<h4>學習主題：</h4>
										<ul>
											<li>小學英文文法</li>
										</ul>
										<h4>學習範疇：</h4>

										<ul>
											<li>英文詞彙(Vocabulary)</li>
											<li>英文文法(Grammar)</li>
											<li>英文寫作(Writing)</li>
											
										</ul>
										</br><br/>
										<a href="coursevid_grammar.php"><button type="button" class="btn btn-success">立即試用</button></a>
									</div><!-- pt cat desc -->
								</div>
								<div class="span12">
									<hr class="bs-docs-separator" />
								</div>
							</div>
							<!-- end step 2 -->
							<!-- step 3 -->
							<div class="row">
								<div class="span6">
									<div class="img-intro"><img src="images/portfolio_images/icon-08.png" /></div>
								</div>
								<div class="span6">
									<h3 class="title">3.「外國文化」課程影片</h3>
									<div class="pt-cat-desc">
										<h4>學習範疇：</h4>
										<ul>
											<li>英文詞彙(Vocabulary)</li>
											<li>英文文法(Grammar)</li>
											<li>英文聆聽(Listening)</li>
											<li>英文對話(Oral English)</li>
											<li>英文文化環節(English in various culture)</li>
										</ul>
										</br><br/>
										<a href="coursecult.php"><button type="button" class="btn btn-success">立即試用</button></a>
									</div><!-- pt cat desc -->
								</div>
								<div class="span12">
									<hr class="bs-docs-separator" />
								</div>
							</div>
							<!-- end step 3 -->
							<!-- step 4 -->
							<div class="row">
								<div class="span6">
									<div class="img-intro"><img src="images/portfolio_images/icon-03.png" /></div>
								</div>
								<div class="span6">
									<h3 class="title">4.「學習任務」校本測驗及實用練習</h3>
									<div class="pt-cat-desc">
										<h4>學習範疇：</h4>
										<ul>
											<li>英文詞彙(Vocabulary)</li>
											<li>英文文法(Grammar)</li>
											<li>英文閱讀理解(Comprehension)</li>
											<li>英文作文(Writing)</li>
											<li>考試及答題技巧(Examination Tips)</li>
											
										</ul>
										</br><br/>
										<a href="coursetest.php"><button type="button" class="btn btn-success">立即試用</button></a>
									</div><!-- pt cat desc -->
								</div>
								<div class="span12">
									<hr class="bs-docs-separator" />
								</div>
							</div>
							<!-- end step 4 -->
							<!-- step 5 -->
							<div class="row">
								<div class="span6">
									<div class="img-intro"><img src="images/portfolio_images/icon-04.png" /></div>
								</div>

								<div class="span6">
									<h3 class="title">5.「學習報告」每周學習報告，了解學生能力</h3>
									<div class="pt-cat-desc">
										<h4>報告內容：</h4>
										<ul>
											<li>學生成績</li>
											<li>學習平台使用量</li>
											<li>每週登入次數</li>
											<li>建議加強範圍</li>
										</ul>
									</br><br/>
										<button type="button" class="btn btn-danger">建立中</button>
									</div><!-- pt cat desc -->
								</div>
								
							</div>
							<!-- end step 5 -->
						</div>
					</div><!-- end row -->
					<!--end flow chart-->
					<div class="span12">
						<hr class="bs-docs-separator" />
					</div>
					<div class="row">
						<div class="span12">
							<h3 class="mb_title"><img src="images/icons/ico-stats.png" alt="" />每月知識增長</h3>
						</div>
						<div class="span3">
							<div class="statbox">
								<img src="images/icons/stats/ico-finished-projects.png" alt="" />
								<h4>200+</h4>
								<h6>英語詞彙(Vocabulary)</h6>
							</div>
						</div>
						<div class="span3">
							<div class="statbox">
								<img src="images/icons/stats/ico-finished-projects.png" alt="" />
								<h4>120+</h4>
								<h6>英語文法練習(Grammar Practice)</h6>
							</div>
						</div>
						<div class="span3">
							<div class="statbox">
								<img src="images/icons/stats/ico-finished-projects.png" alt="" />
								<h4>20+</h4>
								<h6>英語閱讀理解(Comprehension)</h6>
							</div>
						</div>
						<div class="span3">
							<div class="statbox">
								<img src="images/icons/stats/ico-testimonials.png" alt="" />
								<h4>5+</h4>
								<h6>英語寫作練習(English Writing)</h6>
							</div>
						</div>
					</div><!-- end row // stats -->
					
					<!-- <div class="row">
						<div class="span12">
							<div class="process_steps fixclear">
								<div class="step intro">
									<h3>our working process <strong>in 3 steps</strong></h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
									<a href="#">MORE ABOUT US +</a>
								</div>
								<div class="step step1">
									<div class="icon" data-animation="tada">
										<img src="images/icons/steps/ico-plan.png" alt="" />
									</div>
									<h3>planning &amp; strategy</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div><
								<div class="step step2">
									<div class="icon" data-animation="pulse">
										<img src="images/icons/steps/ico-designdev.png" alt="" />
									</div>
									<h3>design &amp; develop</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
								<div class="step step3">
									<div class="icon" data-animation="fadeOutRightBig">
										<img src="images/icons/steps/ico-launch.png" alt="" />
									</div>
									<h3>test &amp; deliver</h3>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								</div>
							</div>
	
						</div>
					</div>end row // process_steps -->

				</div><!-- end mainbody -->
				
			</div><!-- end container -->
		</section><!-- end #content -->
        
<footer id="footer">
	<? include('footer.php'); ?>
</footer>        
    </div><!-- end page_wrapper -->
	
    <a href="#" id="totop">TOP</a>

<!--////////////////// Load JS Files -->




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