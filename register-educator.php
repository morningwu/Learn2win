<?php 

include ('info.php'); 
include ('function/educator/registration.php'); 

?>

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
			<? //include('register_popup.php');?>

		<!--end register_popup-->
    	<header>
    		<? include('header.php');?>
    	</header>
                
<script type="text/javascript">
// THIS SCRIPT DETECTS THE ACTIVE ELEMENT AND ADDS ACTIVE CLASS
(function($){ 
	$(document).ready(function(){
		var pathname = window.location.pathname,
			page = pathname.split(/[/ ]+/).pop(),
			menuItems = $('#main_menu a');
		menuItems.each(function(){
			var mi = $(this),
				miHrefs = mi.attr("href"),
				miParents = mi.parents('li');
			if(page == miHrefs) {
				miParents.addClass("active").siblings().removeClass('active');
			}
		});
	});
})(jQuery);
</script>
    
        <div id="page_header" class="gradient bottom-shadow">
			<div class="bgback bg3"></div>
			
			<div class="container">
				<div class="row">
					<div class="span6">
						
					</div>
					<div class="span6">
						<div class="header-titles">
							<h2>登入/註冊帳戶</h2>
							<h4>成為改變教育的一員</h4>
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
							<h1 class="page-title">Educator Account(Register)</h1>
						
							 
							      	<!--Educator register form-->
							      	<?php
							        	//Register message

							        	if(isset($_POST['login_email'], $_POST['password'],$_POST['password_cfm'])){

							        		if(empty($_POST['login_email'])){
											    $errors[] = "You must enter your login email!";
											  }	
											  if(empty($_POST['password']) || empty($_POST['password_cfm'])){
											    $errors[] = "You must enter your Password!";
											  }	
											  if($_POST['password'] !== $_POST['password_cfm']){
												    $errors[] = "Password does not match!";
											  } 

											   if(user_exist($_POST['login_email'])){
												    $errors[] = "登入電郵已註冊";
											  }
											  if(empty($errors)){

											    $login_email           = $_POST['login_email'];
											    $password          	   = $_POST['password'];
											    $group_name			   = $_POST['group_name'];
											    $name         		   = $_POST['name'];
											    $nationality           = $_POST['nationality'];
											    $education_level       = $_POST['education_level'];
											    $college               = $_POST['college'];
											    $teaching_experience   = $_POST['teaching_experience'];
											  

											    register_user(
											      $login_email,
											      $password,
											      $group_name,
											      $name,
											      $nationality,
											      $education_level,
											      $college,
											      $teaching_experience
											      );

											    $_SESSION['name'] 			= htmlentities($_POST['name']);
    											$_SESSION['educators_id']   = mysql_query("SELECT `educators_id` FROM `educators` WHERE `login_email` = '$login_email'");
							        			
							        			
							        			}
							        	}

							        	?>
							        	<div class="font-orange">
							        	<?php 
							              if(empty($errors) === false){
							                ?>
							                <ul class="no-bullet">
							                  <?php
							                  foreach ($errors as $error) {
							                    echo "<li> {$error} </li>";     
							                  }
							                  ?>
							                </ul>
							              <?php
							                }
							              ?>
							              </div>
							        <form name ="educator-form-register" action ="" class="form-horizontal"  method="POST"/>
		            					<div class="control-group">
		              						<label class="control-label" >Login Email：</label>
			              					<div class="controls">
			                					<input type="text" name ="login_email"  value="<?php if(isset($_POST['login_email'])){echo $_POST['login_email'];} ?>"/>
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Password：</label>
			              					<div class="controls">
			                					<input type="password" name ="password"  />
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Confirm Password：</label>
			              					<div class="controls">
			                					<input type="password" name ="password_cfm"  />
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Group Name：</label>
			              					<div class="controls">
			                					<input type="text" name ="group_name"  value="<?php if(isset($_POST['group_name'])){echo $_POST['group_name'];} ?>"/>
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Educator's Name：</label>
			              					<div class="controls">
			                					<input type="text" name ="name"  value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>"/>
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Nationality：</label>
			              					<div class="controls">
			                					<input type="text" name ="nationality"  value="<?php if(isset($_POST['nationality'])){echo $_POST['nationality'];} ?>"/>
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Education Level：</label>
			              					<div class="controls">
			                					<select name="education_level">
													  <option value="Form5">Form 5 or below</option>
													  <option value="From6">Form 6</option>
													  <option value="Form7">Form 7/High School Graducated</option>
													  <option value="HD">Higher Diploma/Associate Degree</option>
													  <option value="bachelor">Bachelor</option>
													  <option value="master">Master</option>
													  <option value="PHD">PHD</option>
													</select>
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Graducated From：</label>
			              					<div class="controls">
			                					<input type="text" name ="college"  value="<?php if(isset($_POST['college'])){echo $_POST['college'];} ?>"/>
			              					</div>
		            					</div>
		            					<div class="control-group">
		              						<label class="control-label" >Teaching Experience：</label>
			              					<div class="controls">
			                					<select name="teaching_experience">
													  <option value="0-1">0 - 2 Year</option>
													  <option value="1-2">2 - 5 Year</option>
													  <option value="2-3">5 - 10 Year</option>
													  <option value="3-4">10 - 20 Year</option>
													  <option value="4+">20+ Year</option>
												</select>
			              					</div>
		            					</div>

							            <div class="control-group">
							              <div class="controls">
							               
							               <input type="submit" class="btn btn-danger" value="Register">
							              </div>
							            </div>
					          		</form>
							      
							     
							  
			

						</div>
						

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