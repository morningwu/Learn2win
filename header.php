<div id="page_wrapper">

		<header id="header" class="style2">
			<div class="container">

				<!-- logo -->
				<h1 id="logo"><a href="index.php"><img src="images/logo1.png" alt="Learn2win Online Learning Playroom"></a></h1>

				<ul class="topnav navRight">
					<!--<li><a href="#" id="open_sliding_panel">
							<span class="icon-remove-circle icon-white"></span> SUPPORT
						</a>
					</li>
					<li><a href="#login_panel" data-rel="prettyPhoto[login_panel]">登入</a></li>-->
				</ul><!-- end topnav // right aligned -->

				<!--<ul class="topnav navLeft">
					<li class="drop"><a href="#">MY CART</a>
						<div class="pPanel">
							<div class="inner">
								<span class="cart_details">3 items, Total of <strong>$599 USD</strong> <a href="#" class="checkout">Checkout <span class="icon-chevron-right"></span></a></span>
							</div>
						</div>
					</li>
					<li class="languages drop"><a href="#"><span class="icon-globe icon-white"></span> LANGUAGES</a>
						<div class="pPanel">
							<ul class="inner">
								<li class="active"><a href="#">English <span class="icon-ok"></span></a></li>
								<li><a href="#">French</a></li>
								<li><a href="#">German</a></li>
							</ul>
						</div>
					</li>
				</ul>--><!-- end topnav // left aligned -->

				<!-- search -->
				<div id="search">
					<!--<a href="#" class="searchBtn"><span class="icon-search icon-white"></span></a>
					<div class="search">
						<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)" target="_blank">
							<input name="q" type="hidden" />
							<input name="qfront" maxlength="20" class="inputbox" type="text" size="20" value="SEARCH ..." onblur="if (this.value=='') this.value='SEARCH ...';" onfocus="if (this.value=='SEARCH ...') this.value='';" />
							<input type="submit" value="go" class=" icon-search"/>
						</form>
					</div>-->
				</div><!-- end search -->

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
				<!-- Starting of the main menu -->
				<nav id="main_menu">
					<ul class="sf-menu clearfix">
						<!--<li class="active"><a href="about.php">關於我們</a></li>-->
						<li ><a href="index.php">首頁</a></li>
						<li ><a href="flow.php">核心價值</a></li>
						<li ><a href="howitwork.php">學習模式</a></li>
						<li><a href="video-new.php">示範影片</a></li>
						<li><a href="pricing.php">課程收費</a></li>
						<li><a href="teach1.php">創建課程</a></li>
						
						<!--<li><a href="pricing.php">服務收費</a></li>-->
						<!--<li><a href="#">註冊/登入</a></li>-->
						<!--<li><a href="about.php">關於我們</a></li>-->
						
						<!-- popup register-->
						<!-- #register_panel data-rel="prettyPhoto[register_panel]" -->
						<li><a href="create-course1.php" >Ednovator</a>
							<!--<ul>
								<li><a href="login-educator.php">Login</a></li>
								<li><a href="register-educator.php" >Register</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>-->
						</li>
						<li><a href="account.php" >Student</a>
							<!--<ul>
								<li><a href="login-student.php">Login</a></li>
								<li><a href="register-student.php" >Register</a></li>
								<li><a href="logout-student.php" >Logout</a></li>
							</ul>-->
						</li>
					</ul>
				</nav><!-- end main_menu -->

			</div>
