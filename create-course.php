<?php include('info.php');?>
<?php include ('function/educator/registration.php'); ?>
<?php check_login(); ?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	
	<title><? echo $title;?></title>
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
	}(document, 'script', 'facebook-jssdk'));</script>

	<div id="page_wrapper">

		<header id="header" class="style2">
			<? include ('header.php');?>
		</header>        
        <div id="page_header" class="gradient bottom-shadow">
			<div class="bgback bg2"></div>
			
			<div class="container">
				<div class="row">
					<div class="span6">
						
						
					</div>
					<div class="span6">
						<div class="header-titles">
							<h2>創建課程</h2>
							<h4>令學習更美好</h4>
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
					
						<div class="span3">
							<div id="sidebar" class="sidebar-left">
								
								<div class="widget">
									<h4 class="title">Hello ! <?php  if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?></h4>
									<p>Start Create Your course</p>
									<!--<h4 class="title">學習影片類型</h4>

									<ul class="menu">
										<li class="active"><a href="#">Creating Local Live Tour Video</a></li>
										<li><a href="#">Creating Cultural Video</a></li>
										<li><a href="#">Creating Grammartical Video</a></li>
										<li><a href="#">Creating Movie and Animation Video</a></li>
										<li><a href="#">創建特別教學影片</a></li>
										
										
									</ul>--><!-- end footer menu -->
									
									<p><a href="http://www.youtube.com/watch?v=SYbMR85bZsE" data-rel="prettyPhoto" class="btn btn-info">Course Example &raquo;</a></p>
									<p><a href="logout.php" class="btn btn-danger">Logout</a></p>
									<!--<a href="#" class="btn btn-success">Suggestion &raquo;</a><br/><br/>
									<a href="#" class="btn btn-warning">Question &raquo;</a>-->
								</div><!-- end widget -->
								<!--
								<div class="widget">
									<h4 class="title">Flickr Feed</h4>
									<div class="flickrfeed loading">
										<ul class="flickr_feeds fixclear" data-size="small"></ul>
									</div>
								</div>-->
								
							</div>
						</div>
					
						<div class="span9">
							
							<h1 class="page-title">創建生活化影片</h1>

							<!--<p class="path">Put a Class Creation Path here</p>-->

							<div class="tabbable tabs_style1">
								  <ul class="nav fixclear">
								    <li class="active"><a href="#tabs1-pane1" data-toggle="tab">1：Planning &raquo;</a></li>
								    <li><a href="#tabs1-pane2" data-toggle="tab">2：Create Contents &raquo;</a></li>
								    <li><a href="#tabs1-pane3" data-toggle="tab">3：Flash Card &raquo;</a></li>
								    <li><a href="#tabs1-pane4" data-toggle="tab">4：Study Mission &raquo;</a></li>
								    <li><a href="#tabs1-pane5" data-toggle="tab">5：Upload &raquo;</a></li>
								    <li><a href="#tabs1-pane16" data-toggle="tab">6：Confirm</a></li>
								     <!--<li><a href="#tabs1-pane5" data-toggle="tab">Step 5：上載練習內容</a></li>-->
								  </ul>
								  <div class="tab-content">
								      <div class="tab-pane active" id="tabs1-pane1">
								      	<h5 class="page-title">Summary</h5>
								      	<h5>Before you start</h5>
								      	<ul>
								      		<li><a href="#">Understand our core values</a></li>
								      		<li><a href="#">Understand our Requirement</a></li>
								      	</ul>
								      	<h5>I understand and agree with learn2Win’s core value and your format of learning.  I would like to support them and become an educator. </h5>
								      		<ul>	
								      			<li><a href="#">Terms and Condition</a></li>
								      		</ul>

								      	 <h5>I am planning to provide:</h5>
								      	 <p>One full day (5 courses)</p>
								      	 <input type="text" placeholder="Which Day?">
								      	 <input type="submit" class="btn btn-success" value="submit">
								      	 <p>Separate course – type:</p>
								      	 <input type="text" placeholder="Type of Content?">
								      	 <input type="submit" class="btn btn-success" value="submit">
								      	 
								      	 <h2>Select Content</h2>
								      	 <div class="acc-group style2">
											<button data-toggle="collapse" data-target="#acc1" class="collapsed btn-link">Select a Day's Content</button>
											<div id="acc1" class="collapse in">
											<div class="content">

												<p>A Local Tour</p>
												<p>A Cultural Learning</p>

												<input type="text" placeholder="A Day's Topic">
												<input type="submit" class="btn" value="submit">
										
											</div><!-- end content -->
											</div>
										</div><!-- end acc group -->
										 <div class="acc-group style2">
											<button data-toggle="collapse" data-target="#acc2" class="collapsed btn-link">Select a Course's Content</button>
											<div id="acc2" class="collapse in">
											<div class="content">

												<p>Grammar Course</p>
												<p>Writing And comprehension</p>

												<input type="text" placeholder="A Course's Content">
												<input type="submit" class="btn" value="submit">
										
											</div><!-- end content -->
											</div>
										</div><!-- end acc group -->
										<h2>Create Class Summary</h2>
										 <div class="acc-group style2">
											<button data-toggle="collapse" data-target="#acc3" class="collapsed btn-link">Class Summary</button>
											<div id="acc3" class="collapse in">
												<div class="content">
													<a href="#" class="btn btn-warning">See example</a><br/><br/>
													
														<input type="text" placeholder="Course Title"><br/><br/>
														<textarea rows="3" name ="Duration" placeholder="Duration"></textarea><br/><br/>
														<textarea rows="3" name ="Topic Summary" placeholder="Topic Summary"></textarea><br/><br/>
														<textarea rows="3" name ="KeyLearning Outcome" placeholder="KeyLearning Outcome"></textarea><br/><br/>
														<textarea rows="3" name ="Teaching/Assessment format" placeholder="Teaching/Assessment format"></textarea><br/><br/>
														<textarea rows="3" name ="Remarks" placeholder="Remarks"></textarea><br/><br/>
														<input type="submit" class="btn" value="submit">
													
											
												</div><!-- end content -->
											</div>
										</div><!-- end acc group -->


										<br/><a href="#" class="btn btn-success">Submit</a>

									</div><!--end of tab 1-->

								      <div class="tab-pane" id="tabs1-pane2">
								      	<h5 class="page-title">Learning Video</h5>
								      	

										 <div class="tabbable tabs_style2">
											  <ul class="nav fixclear">
											    <li class="active"><a href="#tabs1-pane6" data-toggle="tab">Session #1</a></li>
											    <li><a href="#tabs1-pane7" data-toggle="tab">Session #2</a></li>
											    <li><a href="#tabs1-pane8" data-toggle="tab">Session #3</a></li>
											  </ul>
											  <div class="tab-content">
											      <div class="tab-pane active" id="tabs1-pane6">
											      	<h5>Session 1</h5>
											       	<input type="text" placeholder="Video Subject"><br/><br/>
											       	<input type="text" placeholder="Number of Flash Card"><br/><br/>
											       	<input type="text" placeholder="Study Mission-Format"><br/><br/>
											       	<input type="text" placeholder="Number of Questions"><br/><br/>

											       	<input type ="submit" class="btn btn-success" value="submit">
											      </div>
											      <div class="tab-pane" id="tabs1-pane7">
											      	<h5>Session 2</h5>
											        <input type="text" placeholder="Video Subject"><br/><br/>
											       	<input type="text" placeholder="Number of Flash Card"><br/><br/>
											       	<input type="text" placeholder="Study Mission-Format"><br/><br/>
											       	<input type="text" placeholder="Number of Questions"><br/><br/>
											       	<input type ="submit" class="btn btn-success" value="submit">
											      </div>
											      <div class="tab-pane" id="tabs1-pane8">
											      	<h5>Session 3</h5>
											        <input type="text" placeholder="Video Subject"><br/><br/>
											       	<input type="text" placeholder="Number of Flash Card"><br/><br/>
											       	<input type="text" placeholder="Study Mission-Format"><br/><br/>
											       	<input type="text" placeholder="Number of Questions"><br/><br/>
											       	<input type ="submit" class="btn btn-success" value="submit">
											      </div>
											  </div>
	
										</div>
									
									      	<h4>Technical requirements</h4><hr/>
									      	<p>In mp4,mov,avi format, at least 720p SD/HD</p>
								  
								      </div>
								      <div class="tab-pane" id="tabs1-pane3">
								        <h5 class="page-title">Create Flash Card</h5>

								        <div class="span6">

								        	<div class="tabbable tabs_style2">
											  <ul class="nav fixclear">
											    <li class="active"><a href="#tabs1-pane9" data-toggle="tab">Flash Card #1</a></li>
											    <li><a href="#tabs1-pane10" data-toggle="tab">Flash Card #2</a></li>
											    <li><a href="#tabs1-pane11" data-toggle="tab">Flash Card #3</a></li>
											    <li><a href="#tabs1-pane12" data-toggle="tab">Flash Card #4</a></li>
											  </ul>
											  <div class="tab-content">
											      <div class="tab-pane active" id="tabs1-pane9">
											      	<h5>Flash Card #1 </h5><hr/>
											   		<textarea row="3" placeholder="Key Learning"></textarea><br/>
										        	<textarea row="5" placeholder="How to use (with Chinese translation):"></textarea><br/>
										        	<textarea row="5" placeholder="Common errors"></textarea><br/>
										        	<ul class="the-icons clearfix">
										        		<li><i class="icon-glass"></i></li>
										        		<li><i class="icon-book"></i></li>
										        		<li><i class="icon-volume-up"></i></li>
										        		<li><i class="icon-comment"></i></li>
										        	</ul>
										        	<input type="submit" class="btn btn-success" value="submit">
											      </div>
											      <div class="tab-pane" id="tabs1-pane10">
											      	<h5>Flash Card #2</h5><hr/>
											   		<textarea row="3" placeholder="Key Learning"></textarea><br/>
										        	<textarea row="5" placeholder="How to use (with Chinese translation):"></textarea><br/>
										        	<textarea row="5" placeholder="Common errors"></textarea><br/>
										        	<ul class="the-icons clearfix">
										        		<li><i class="icon-glass"></i></li>
										        		<li><i class="icon-book"></i></li>
										        		<li><i class="icon-volume-up"></i></li>
										        		<li><i class="icon-comment"></i></li>
										        	</ul>
										        	<input type="submit" class="btn btn-success" value="submit">
											      </div>
											      <div class="tab-pane" id="tabs1-pane11">
											      	<h5>Flash Card #3</h5><hr/>
											   		<textarea row="3" placeholder="Key Learning"></textarea><br/>
										        	<textarea row="5" placeholder="How to use (with Chinese translation):"></textarea><br/>
										        	<textarea row="5" placeholder="Common errors"></textarea><br/>
										        	<ul class="the-icons clearfix">
										        		<li><i class="icon-glass"></i></li>
										        		<li><i class="icon-book"></i></li>
										        		<li><i class="icon-volume-up"></i></li>
										        		<li><i class="icon-comment"></i></li>
										        	</ul>
										        	<input type="submit" class="btn btn-success" value="submit">
											      </div>
											      <div class="tab-pane" id="tabs1-pane12">
											      	<h5>Flash Card #4</h5><hr/>
											   		<textarea row="3" placeholder="Key Learning"></textarea><br/>
										        	<textarea row="5" placeholder="How to use (with Chinese translation):"></textarea><br/>
										        	<textarea row="5" placeholder="Common errors"></textarea><br/>
										        	<ul class="the-icons clearfix">
										        		<li><i class="icon-glass"></i></li>
										        		<li><i class="icon-book"></i></li>
										        		<li><i class="icon-volume-up"></i></li>
										        		<li><i class="icon-comment"></i></li>
										        	</ul>
										        	<input type="submit" class="btn btn-success" value="submit">
											      </div>
											  </div>
	
											</div>

											<h5>Tips for Writing Flash Card</h5><hr/>

											<ul>
												<li><a href="#">Key Learning</a></li>
												<li><a href="#">How to Use</a></li>
												<li><a href="#">Common Errors</a></li>
											</ul>
								        </div>
								         

								        <div class="span2">
								        	<a href="#" class="btn btn-warning">Example &raquo;</a>
								        </div>


								      </div>
								      <div class="tab-pane" id="tabs1-pane4">
								       <h5 class="page-title">Study Mission</h5>

								        <div class="span6">

								        	<div class="tabbable tabs_style2">
											  <ul class="nav fixclear">
											    <li class="active"><a href="#tabs1-pane13" data-toggle="tab">Mission #1</a></li>
											    <li><a href="#tabs1-pane14" data-toggle="tab">Mission &#43;</a></li>
											    
											  </ul>
											  <div class="tab-content">
											      <div class="tab-pane active" id="tabs1-pane13">
											      	<h5>Study Mission #1</h5><hr/>
											   		<textarea row="3" placeholder="Format of Quizs,Number of questions"></textarea><br/>
											   		<ul class="the-icons clearfix">
										        		<li><i class="icon-glass"></i></li>
										        		<li><i class="icon-book"></i></li>
										        		<li><i class="icon-volume-up"></i></li>
										        		<li><i class="icon-comment"></i></li>
										        	</ul>
										        	<input type="submit" class="btn btn-success" value="submit">
											      </div>
											      <div class="tab-pane" id="tabs1-pane14">
											      	<h5>Study Mission &#43;</h5><hr/>
											   		
											   		<textarea row="3" placeholder="Format of Quizs,Number of questions"></textarea><br/>
											   		<ul class="the-icons clearfix">
										        		<li><i class="icon-glass"></i></li>
										        		<li><i class="icon-book"></i></li>
										        		<li><i class="icon-volume-up"></i></li>
										        		<li><i class="icon-comment"></i></li>
										        	</ul>
										        	<input type="submit" class="btn btn-success" value="submit">
											      </div>
											     
											     
											  </div>
	
											</div>

											<h5>Tips for Writing Study Mission</h5><hr/>
											<ul>
												<li>Format</li>
												<li>Fitting different levels </li>
												<li>Number of questions</li>
											</ul>

											<ul>
												<li><a href="#">Key Learning</a></li>
												<li><a href="#">How to Use</a></li>
												<li><a href="#">Common Errors</a></li>
											</ul>
								        </div>
								         

								        <div class="span2">
								        	<a href="#" class="btn btn-danger">Example &raquo;</a>
								        </div>


								     
								      </div>

								      <div class="tab-pane" id="tabs1-pane5">
								        <h5 class="page-title">Upload Details</h5>
								       
								       	<ul>
											<li><a href="#">Format</a></li>
											<li><a href="#">Uploading Link</a></li>
											<li><a href="#">Technical issues</a></li>
										</ul>
										 <h5 class="page-title">Terms and Conditions</h5>

										 <ul>
											<li><a href="#">Copyright</a></li>
											<li><a href="#">How long will it stay on our library? </a></li>
											<li><a href="#">Selection process </a></li>
										</ul>

										<a href="#" class="btn btn-success">Upload Video</a>
								      </div>

								      <div class="tab-pane" id="tabs1-pane16">
								        <h5 class="page-title">Terms And video usage regulation</h5>

								        <h4>Video For a Day</h4>

								        <p>USD 200 for using a full day materials -- including 5 videos, drama, lifestyle, teaching instructions, audio and sub-titles in both English and Chinese,  full set of required supportive accessories and documents, including Title cards, flash cards and study missions. </p>
								        <p>If the production quality is not up to standard and require any re-do by other party, USD10 will be deducted for each item/session required such a re-do. </p>
								       
								       	
										<h4>Video For a Session</h4>
										<p>USD 100 for using a 12 minutes video with drama performance, including all required supportive accessories and documents. </p>
										<p>USD 35 for using a video with only teachers in the video and all required supportive accessories and documents. </p>
										<p>If the production quality is not up to standard and require any re-do by other party, USD10 will be deducted for each item/session required such a re-do. </p>

										<a href="#" class="btn btn-success">Confirm Upload Video</a>
								      </div>

								      
								  </div>
							</div>


						</div>

					</div><!-- end row -->
					
				</div><!-- end mainbody -->
				
			</div><!-- end container -->
		</section><!-- end #content -->
        
<footer id="footer">
	<? include ('footer.php');?>
</footer>        
    </div><!-- end page_wrapper -->
	
    <a href="#" id="totop">TOP</a>

<!--////////////////// Load JS Files -->


<script type="text/javascript" src="addons/flickrfeed/jquery.jflickrfeed.min.js"></script>


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