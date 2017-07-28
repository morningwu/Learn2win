<?php include ('info.php');?>
<?php include ('function/user/registration.php'); ?>

<?php check_student_login(); ?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	
	<title><? echo $title; ?></title>
	<meta charset="utf-8" />
	<meta name="keywords" content="premium html template, unique premium template, multipurpose" />
	<meta name="description" content="Welcome to KALLYAS Template, a wonderful and premium product for multipurpose websites" />

	<link rel="stylesheet" href="css/template.css" type="text/css" />

	<link rel='stylesheet' href='css/bar.css'>
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
			<div class="bgback bg1"></div>
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
							<h2>學習伙伴</h2>
							
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
						<section id="content">
				<div class="container">
				
				<div class="row image-boxes imgboxes_style1">
                 
					<div class="span3 box">
					<h3><?php if(isset($_SESSION['student_name'])){ echo $_SESSION['student_name'];}?> 's Buddies - Carrot</h3><hr/>
						
							<img src="images/buddy.png" alt="">	
							<div class="clearfix"></div>
						<table class="table">
							<tr>
								<td class="buddy_header">等級：</td>
								<td>6</td>
							</tr>
							<tr>
								<td class="buddy_header">經驗值：</td>
								<td>621 exp	<a href="video-new.php" class="btn btn-success">learn</a></td>
							</tr>
							<tr>
								<td class="buddy_header">技能：</td>
								<td>Tips Buster(3:49)</td>
							</tr>

						</table>
						<p><a href="account.php" class="btn btn-info">返回</a></p>
					
                        
                       
                    </div><!-- end span -->
					
					<div class="span9 box">
					<h1>&nbsp;</h1>
						<div class="tabbable tabs_style4">
							<ul class="nav fixclear">
								<li class="active"><a href="#tabs4-pane1" data-toggle="tab">狀態（Status）</a></li>
								<li><a href="#tabs4-pane2" data-toggle="tab">寵物道場（Buddy Dojo）</a></li>
								<li><a href="#tabs4-pane3" data-toggle="tab">寵物商場（Buddy mall）</a></li>
								<li><a href="#tabs4-pane4" data-toggle="tab">學習中心（Playroom）</a></li>
								<li><a href="#tabs4-pane5" data-toggle="tab">緊急任務（Mission）</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tabs4-pane1">
									
									<div class="span3">
									<h4>能力值(Buddy Status)</h4><hr/>
										<table>
											<tr>
												<td>聽講：</td>
												<td>40 Level</td>
											</tr>
											<tr>
												<td>詞彙：</td>
												<td>66 Level</td>
											</tr>
											<tr>
												<td>閱讀：</td>
												<td>20 Level</td>
											</tr>
											<tr>
												<td>寫作：</td>
												<td>10 Level</td>
											</tr>
											<tr>
												<td>文法：</td>
												<td>5 Level</td>
											</tr>

										</table>

										<h4>技能(Buddy skills)</h4><hr/>
										<ul class="no-bullet">
											<li> <strong>Tip Buster (Equiped)</strong></li>
											

										</ul>

									</div>



									<div class="span5">
										
										<div id="skills_diagram">
										<div class="legend">
									
									<ul class="skills">
										<li data-percent="40" style="background-color:#97BE0D;">Listening & Speaking</li>
										<li data-percent="66" style="background-color:#D84F5F;">Vocaublary</li>
										<li data-percent="20" style="background-color:#88B8E6;">Reading</li>
										<li data-percent="10" style="background-color:#BEDBE9;">Writing</li>
										<li data-percent="5" style="background-color:#EDEBEE;">Grammar</li>
									</ul><!-- end the skills -->
								</div>
								<div id="thediagram" data-width="600" data-height="600" data-maincolor="#193340" data-maintext="Carrot's Abilities" data-fontsize="20px Arial" data-textcolor="#ffffff"></div>
								<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
								<script type="text/javascript" src="addons/raphael_diagram/init.js"></script>
						
									</div>
								</div>


									</div>
								<div class="tab-pane" id="tabs4-pane2">
									<div class="buddy-container">
										<div class="span4 buddy-center">
											<img src="images/buddy_icon/buddy-icon-6.png">
											<p><strong>360 LPs</strong>   <a href="" class="btn btn-warning">Upgrade</a></p>
											
										</div>
										<div class="span4">
											<h5>實用性</h5>
											<div class="meter">
												<span style="width: 25%"></span>
											</div>
										
											
											<h5>精準度</h5>
											<div class="meter red ">
												
												<span style="width: 60%"></span>
											</div>
											
										</div>
									</div><hr/>
									
									<div class="buddy-container">
										<div class="span4 buddy-center">
											<img src="images/buddy_icon/buddy-icon-7.png">
											<p><strong>650 LPs </strong>  <a href="" class="btn btn-success">Buy</a></p>
											
										</div>


										<div class="span4">
											<h5>實用性</h5>
											<div class="meter">
												
												<span style="width: 75%"></span>
											</div>
											
											<h5>精準度</h5>
											<div class="meter red animate">
												
												<span style="width: 30%"><span>
											</div>
											
										</div>
									</div>

									
								</div>
								<div class="tab-pane" id="tabs4-pane3">
									<h4>寵物廣場(Buddy Mall)</h4>
									<div class="span4 buddy-center">
										<h3>服飾</h3><hr/>
										<img src="images/buddy_icon/buddy-icon-10.png">
										<h5>Green Hat</h5>
										<p>360 Learning Points</p>
										<p><a href="#" class="btn btn-success">Buy</a></p>
									</div>
									<div class="span4 buddy-center">
										<h3>外貌</h3><hr/>
										<img src="images/buddy_icon/buddy-icon-13.png">
										<h5>Beard (1)</h5>
										<p>160 Learning Points</p>
										<p><a href="#" class="btn btn-success">Buy</a></p>
									</div>
									<div class="span4 buddy-center">
										
										<img src="images/buddy_icon/buddy-icon-11.png">
										<h5>Mask</h5>
										<p>560 Learning Points</p>
										<p><a href="#" class="btn btn-success">Buy</a></p>
									</div>
									<div class="span4 buddy-center">
										
										<img src="images/buddy_icon/buddy-icon-14.png">
										<h5>Beard (2)</h5>
										<p>260 Learning Points</p>
										<p><a href="#" class="btn btn-success">Buy</a></p>
									</div>
									<div class="span4 buddy-center">
										
										<img src="images/buddy_icon/buddy-icon-12.png">
										<h5>Tobacco pipe</h5>
										<p>760 Learning Points</p>
										<p><a href="#" class="btn btn-success">Buy</a></p>
									</div>
									<div class="span4 buddy-center">
										
										<img src="images/buddy_icon/buddy-icon-15.png">
										<h5>Beard (3)</h5>
										<p>360 Learning Points</p>
										<p><a href="#" class="btn btn-success">Buy</a></p>
									</div>
									
									
								</div>
								<div class="tab-pane" id="tabs4-pane4">
									<h4>學習中心（Playroom）</h4>
									<div class="span3 buddy-center">
										<img src="images/buddy_icon/buddy-icon-1.png">
										<p><a href="#" class="btn btn-warning">Learning Report</a></p>
									</div>
									<div class="span3 buddy-center">
										<img src="images/buddy_icon/buddy-icon-2.png">
										<p><a href="#" class="btn btn-info">Leader-broad</a></p>
									</div>
									<div class="span3 buddy-center">
										<img src="images/buddy_icon/buddy-icon-3.png">
										<p><a href="#" class="btn ">Connect with Buddy </a></p>
									</div>
									<div class="span3 buddy-center">
										<img src="images/buddy_icon/buddy-icon-4.png">
										<p><a href="#" class="btn btn-success">Redeem Gifts</a></p>
									</div>
									<div class="span3 buddy-center">
										<img src="images/buddy_icon/buddy-icon-5.png">
										<p><a href="#" class="btn btn-danger">Make Donation</a></p>
									</div>
								</div>
								<div class="tab-pane" id="tabs4-pane5">
								<h4>緊急任務（Special Mission）</h4><hr/>

								<div class="span3 buddy-center">
										<h3>Pictionary - English</h3>
										<img src="images/buddy_icon/buddy-icon-8.png">
										<p>660 Learning Points</p>
										<p>Starting at 18:00(Monday)</p>
										<p><a href="#" class="btn btn-info">Challenge</a></p>
								</div>
								<div class="span3 buddy-center">
										<h3>Scrabble - English</h3>
										<img src="images/buddy_icon/buddy-icon-9.png">
										<p>860 Learning Points</p>
										<p>Starting at 18:00(Tuesday)</p>
										<p><a href="#" class="btn btn-info">Challenge</a></p>
								</div>


								</div>

							</div><!-- /.tab-content -->
						</div><!-- /.tabbable -->
                        
                    </div><!-- end span -->
                 
                    
                   
					
                </div><!-- end row // imgboxes_style1 -->
						
						
						
						
					</div><!-- end row -->
					

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