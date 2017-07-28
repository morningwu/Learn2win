<? include('info.php');?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>

	<title><? echo $title; ?></title>
	<meta charset="utf-8"/>
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
			<div class="bgback bg2"></div>
			
			<div class="container">
				<div class="row">
					<div class="span6">
						<!--<ul class="breadcrumbs fixclear">
							<li><a href="#">HOME</a></li>
							<li>STYLES</li>
							<li>PRICING TABLES</li>
						</ul>-->
						<!--<span id="current-date"></span>-->
					</div>
					<div class="span6">
						<div class="header-titles">
							<h2>更多，同時更少</h2>
							<h4>大量優質教材，卻比市價便宜</h4>
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
							<h1 class="page-title">收費模式</h1>
							
						</div>

					<!-- ////// start examples -->
	<div class="row-fluid pricing_table no-space">

	<div class="span3">
		<div class="pr_table_col caption_column" data-color="orange">
			<div class="tb_header">
				選擇月費計劃
			</div>
			<ul class="tb_content">
				<li>學習影片</li>
				<li>網上問答</li>
				<li>舊片重溫（30天）</li>
				<li>舊片重溫（90天）</li>
				
				<li>個人導師（5小時/天）</li>
				<li>個人導師（時間不限）</li>
				<!--<li data-rel="tooltip" title="testing 123">-->
				<li>即時會話（30分鐘/天）</li>
			</ul>
			
		</div><!-- end pricing table column -->
	</div>
		<div class="span2">
		<div class="pr_table_col" data-color="orange">
			<div class="tb_header">
				<h4 class="ttitle">Basic Learner</h4>
				<div class="price">
					<p>$99<span>每月</span></p>
				</div>
			</div>
			<ul class="tb_content">
				<li>&#10004;</li>
				<li>&#10004;</li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
				
				
			</ul>
			<div class="signin">
				<a class="btn" href="register_user.php">選擇月費</a>
			</div>
		</div><!-- end pricing table column -->
	</div>

	<div class="span2">
		<div class="pr_table_col" data-color="orange">
			<div class="tb_header">
				<h4 class="ttitle">Silver Learner</h4>
				<div class="price">
					<p>$199<span>每月</span></p>
				</div>
			</div>
			<ul class="tb_content">
				<li>&#10004;</li>
				<li>&#10004;</li>
				<li>&#10004;</li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
				
				

				
			</ul>
			<div class="signin">
				<a class="btn" href="register_user.php">選擇月費</a>
			</div>
		</div><!-- end pricing table column -->
	</div>
	
	<div class="span3">
		<div class="pr_table_col highlight" data-color="red">
			<div class="tb_header">
				<h4 class="ttitle">Advanced Learner</h4>
				<div class="price">
					<p>$399<span>每月</span></p>
				</div>
			</div>
			<ul class="tb_content">
				<li>&#10004;</li>
				<li>&#10004;</li>
				<li><hr class="bs-docs-separator" /></li>
				<li>&#10004;</li>
				<li>&#10004;</li>
				<li><hr class="bs-docs-separator" /></li>
				<li><hr class="bs-docs-separator" /></li>
			

				
			</ul>
			<div class="signin">
				<a class="btn" href="register_user.php">選擇月費</a>
			</div>
		</div><!-- end pricing table column -->
	</div>
	
	<div class="span2">
		<div class="pr_table_col" data-color="orange">
			<div class="tb_header">
				<h4 class="ttitle">Expert Learner</h4>
				<div class="price">
					<p>$799<span>每月</span></p>
				</div>
			</div>
			<ul class="tb_content">
				<li>&#10004;</li>
				<li>&#10004;</li>
				<li><hr class="bs-docs-separator" /></li>
				<li>&#10004;</li>
				<li><hr class="bs-docs-separator" /></li>
				<li>&#10004;</li>
				<li>&#10004;</li>
				
				
			</ul>
			<div class="signin">
				<a class="btn" href="register_user.php">選擇月費</a>
			</div>
		</div><!-- end pricing table column -->
	</div>

</div> <!-- end pricing table -->
						<div class="span12">
							<h1 class="page-title">常見問題</h1>

							<div class="acc-group style2">
									<button data-toggle="collapse" data-target="#acc1" class="collapsed btn-link">如何學習？</button>
									<div id="acc1" class="collapse in">
										<div class="content">
											<h5>Step 1 : 能力評估</h5>
											<p>不同學生能力有差異，註冊前先作程度評估，分為9等。每天分配程度不同的「學習任務」 ，能力增強時可升等。</p>
											<h5>Step 2 : 每天學習</h5>
											<p>每天上線觀看5段教學片，每片長3至12分鐘不等，包括生活化的本地及海外影片、文法講解等，每周5天。每天上線觀看5段教學片，每片長3至12分鐘不等，包括生活化的本地及海外影片、文法講解等，每周5天。</p>
											<h5>Step 3 : 學習任務</h5>
											<p>同時完成影片指定的「學習任務」 ，包括聽、說、讀、寫。</p>
											<h5>Step 4 : 有問題？</h5>
											<p>可直接與老師對答，或以短訊發問*。</p>
											<h5>Step 5 : 取得獎分、獎狀、排名</h5>
											<p>完成「學習任務」 ，每次均取得WIN獎分及列於排名榜，累積可取得獎狀及可捐輸協助其他小朋友。</p>
											<h5>Step 6 : 進度報告</h5>
											<p>	最少每周可獲知學習進度，上網紀錄等資料。</p>


										</div><!-- end content -->
									</div>
								</div><!-- end acc group -->
								<div class="acc-group style2">
									<button data-toggle="collapse" data-target="#acc2" class="collapsed btn-link">學些什麼？</button>
									<div id="acc2" class="collapse in">
										<div class="content">
											<h5>學習科目</h5>
											<ul>
												<li>高小英語</li>
												<li>高小數學(暫未推出)</li>
												<li>高小中國語文 (暫未推出)</li>
												<li>高小常識(暫未推出)</li>

											</ul>
											<h5>學習內容</h5>
											<p><a href="singup.php" class="btn">試學模式</a></p>
											<p><a href="howitwork.php" class="btn">節目形式</a></p>
											

										</div><!-- end content -->
									</div>
								</div><!-- end acc group -->
								<div class="acc-group style2">
									<button data-toggle="collapse" data-target="#acc3" class="collapsed btn-link">有何優勢？</button>
									<div id="acc3" class="collapse in">
										<div class="content">
											
											<ol>
												<li>學得Fun</li>
												<li>注重搶眼球</li>
												<li>學校課程對對碰</li>
												<li>外地文化補課堂不足</li>
												<li>跨國社群展友誼</li>
												<li>取獎分、助他人</li>
												<li>隨時隨意、省時方便</li>
												<li>進度報告、有助提昇</li>
												<li>保證成效，否則退款</li>

											</ol>
											
										</div><!-- end content -->
									</div>
								</div><!-- end acc group -->

								<div class="acc-group style2">
									<button data-toggle="collapse" data-target="#acc4" class="collapsed btn-link">何時學習？</button>
									<div id="acc4" class="collapse in">
										<div class="content">
											
											<ul>
												<li>任何適當時間，只須有電腦或手機。</li>
												<li>每星期周一至周五均有新課程，每天只須完成一天約30分鐘的修習。</li>
												<li>每次學習時最好能完成其中一段（由3分鐘、 5分鐘至12分鐘一段，參看每日流程）</li>
												<li>利用任何空餘時間（例如小息、返家旅途…）修習。</li>
												<li>完成後可複習舊材料。</li>
											</ul>
										

										</div><!-- end content -->
									</div>
								</div><!-- end acc group -->

								<div class="acc-group style2">
									<button data-toggle="collapse" data-target="#acc5" class="collapsed btn-link">誰來教？</button>
									<div id="acc5" class="collapse in">
										<div class="content">
											<p>我們按照香港教育署頒發的《???》一早擬訂好每個學年的教程，每天、每節的學習目標，並向以下一些專業人士要求提供教學影片： </p>
											<ul>
												<li>現職老師、科主任</li>
												<li>退休老師</li>
												<li>大學教授</li>
												<li>大學碩士或本科生，他們曾主修有關學科</li>
											</ul>
											<p>外國文化實況影片則向以英語為母語的國家（如英、美、澳等）年紀較長的學生要求提供。</p>
											<p>一個由現職及退職科主任組成的評選團，按收集得來影片</p>
										</div><!-- end content -->
									</div>
								</div><!-- end acc group -->

								<div class="acc-group style2">
									<button data-toggle="collapse" data-target="#acc6" class="collapsed btn-link">誰來學？</button>
									<div id="acc6" class="collapse in">
										<div class="content">
											<p>現只供在本港就讀高小的同學學習，旨在補充一般學校教學的不足。其他班級或外地學生，須經個別申請，批淮後方淮予與參與。</p>
											<ul>
												<li>現職教師</li>
												<li>退休教師</li>
												<li>補習教師</li>
												<li>熱衷於英語教學</li>
											</ul>
											<p>了解我們的課題，選擇最適合你的開始教學</p>

										</div><!-- end content -->
									</div>
								</div><!-- end acc group -->

								<div class="acc-group style2">
									<button data-toggle="collapse" data-target="#acc7" class="collapsed btn-link">付出多少？</button>
									<div id="acc7" class="collapse in">
										<div class="content">
											<p>教育工作並不設限，只要你跟隨我們的教學大綱，我們歡迎任何人於我們的平台設計教學影片。你可以是： </p>
											<p>學生學習時須注意：</p>
											<ul>
												<li>參與的同學須定期完成「學習任務」 ，拖延太久或時常沒有完成任務者，將被勸退出。</li>
												<li>本課程強調參與，故請積極參與「學習社區」 、評選影片、集體討論…等活動。</li>
												<li>課程內容只供參與者個人修習使用，未經淮許而把內容翻錄或轉傳均屬違約，將按法律處理。</li>
											</ul>
										

										</div><!-- end content -->
									</div>
								</div><!-- end acc group -->

						</div>

<!--start user voice -->
			<div class="span12">
				<h1 class="page-title">用戶意見</h1>
			</div>
			<div class="container">
			
				<div class="row image-boxes imgboxes_style1">
                    <div class="span4 box">
						<span class="hoverBorder">
							<img src="images/site_images/student-01.png" alt="">	
						</span>
                        <h3 class="m_title">Macy Yiu（小一）</h3>
                        <h4>荃灣天主教小學</h4>
                        <p>使用Learn2win教學平台3個月，大大改善了文法及字詞，而且所學可直接能用於真實情況，即學即用，加深記憶</p>
                    </div><!-- end span -->
					
					<div class="span4 box">
						<span class="hoverBorder">
							<img src="images/site_images/student-02.png" alt="">
							
						</span>
                        <h3 class="m_title">Angel Luk（小六）</h3>
                        <h4>油麻地天主教小學（海泓道）</h4>
                        <p>使用Learn2win教學平台3個月，大大改善了文法及字詞，而且所學可直接能用於真實情況，即學即用，加深記憶</p>
                    </div><!-- end span -->
					
					<div class="span4 box">
						<span class="hoverBorder">
							<img src="images/site_images/student-03.png" alt="">
						</span>
                        <h3 class="m_title">Jessica Wong（小四）</h3>
                        <h4>黃埔宣道小學</h4>
                        <p>使用Learn2win教學平台3個月，大大改善了文法及字詞，而且所學可直接能用於真實情況，即學即用，加深記憶</p>
                    </div><!-- end span -->
					
                </div><!-- end row // imgboxes_style1 -->
             </div>
	<!--end user voice-->
<!-- ////// end examples -->
		  
						</div>
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