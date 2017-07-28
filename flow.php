<? include 'info.php';?>
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
							<h2>教學模式</h2>
							<h4>學習 ‧ 挑戰 ‧ 分享成果</h4>
						</div>
					</div>
				</div><!-- end row -->
			</div>
			
			<div class="shadowUP"></div>
        </div><!-- end page_header -->
        
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h1 class="page-title">核心價值</h1>
					</div>
					<div class="span12">
					<div class="row image-boxes imgboxes_style1">
                 
					<div class="span3 box">
						<span class="hoverBorder">
							<img src="images/site_images/img01.png" alt="">	
						</span>
                        <h3 class="m_title">學得Fun</h3>
                        <p>於Learn2win網上學習平台，學習不再盲從教室形式。我們以影片教學，輔以多媒體發科技協助教學。加上遊戲化教學發學習社群，令學生學得Fun!</p>
                    </div><!-- end span -->
					
					<div class="span3 box">
						<span class="hoverBorder">
							<img src="images/site_images/img02.png" alt="">	
						</span>
                        <h3 class="m_title">多媒體學習</h3>
                        <p>學習媒體已經十分成熟，我們以影音，視頻，動畫，聲音輔助教學，令教學素材更有趣</p>
                    </div><!-- end span -->
                    <div class="span3 box">
						<span class="hoverBorder">
							<img src="images/site_images/img-01.png" alt="">	
						</span>
                        <h3 class="m_title">同步校內課程</h3>
                        <p>我們的影片教學以香港學習大綱設計，完成我們的課程及完成練習，助學生提昇考試成績</p>
                    </div><!-- end span -->
                    
                    <div class="span3 box">
						<span class="hoverBorder">
							<img src="images/site_images/img03.png" alt="">	
						</span>
                        <h3 class="m_title">文化學習</h3>
                        <p>Learn2win邀請各地人仕製作教材，不同地方之教材後映不同文化，學生可學得非課堂內之知識</p>
                    </div><!-- end span -->

                </div>
                <div class="row">

                    <div class="span3 box">
						<span class="hoverBorder">
							<img src="images/site_images/img04.png" alt="">	
						</span>
                        <h3 class="m_title">跨國社群</h3>
                        <p>學習社群以學生為中心打造，學生分享學習成果及相互學習，令學習更有趣</p>
                    </div><!-- end span -->

                    <div class="span3 box">
						<span class="hoverBorder">
							<img src="images/site_images/img05.png" alt="">	
						</span>
                        <h3 class="m_title">取獎分、助他人</h3>
                        <p>於Learn2win網上學習平台，學生每完成一個學習環節，包括觀賞學習影片及練習，皆可獲取學習獎分。用以排名及銃換獎品</p>
                    </div><!-- end span -->

                    
                    <div class="span3 box">
                        <span class="hoverBorder">
                            <img src="images/site_images/img06.png" alt=""> 
                        </span>
                        <h3 class="m_title">隨時上、隨時學</h3>
                        <p>網上學習平台可照顧學生之習慣名學習環境，只要上到網，就上到學。</p>
                    </div><!-- end span -->
                    <div class="span3 box">
                        <span class="hoverBorder">
                            <img src="images/site_images/img07-02.png" alt=""> 
                        </span>
                        <h3 class="m_title">進度報告</h3>
                        <p>我們每週發出學生報告予學生及家長，記錄學生之學習進度，進步或退步走勢，讓學習有跡可尋</p>
                    </div><!-- end span -->

</div>
<div class="row">
                      <div class="span3 box">
                        <span class="hoverBorder">
                            <img src="images/site_images/img08.png" alt=""> 
                        </span>
                        <h3 class="m_title">成效保證</h3>
                        <p>提供成效保證計劃，只要於我們平台學習後仍沒有進步，我們將退款予同學</p>
                    </div><!-- end span -->

                  
						
					<div class="span6"></div>


                      <div class="span3 box_v_center">
                      	
                        <a href="howitwork.php" class="circlehover with-symbol" data-align="right" >
							<span class="text">Learn2win學習模式</span>
							<span class="symbol"><img src="images/ok.png" alt=""></span>
						</a>
                       
                    </div><!-- end span -->

				
                    </div>
					
                </div><!-- end row // imgboxes_style1 -->



						
						
						
				</div>	
			</div><!-- end row -->	

				
				
			
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