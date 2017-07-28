
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>	
	<script type="text/javascript" src="scripts/jquery.1.7.1.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>	
	<script type="text/javascript" src="scripts/modernizr.2.5.3.min.js"></script>	
	<script type="text/javascript" src="http://www.queness.com/js/bsa.js"></script>
	<style type="text/css">
	
	
	.thumb {
		display:block;
		width:200px;
		height:140px;
		position:relative;
		margin-bottom:20px;
		margin-right:20px;
		float:left;
	}
	
		.thumb-wrapper {
			display:block;
			width:100%;
			height:100%;
		}
	
		.thumb img {
			width:100%;
			height:100%;
			position:absolute;
			display:block;			
					
		}
		
		.thumb .thumb-detail {
			display:block;
			width:100%;
			height:100%;
			position:absolute;			
			background:#fff;
			font-family:arial;
			font-weight:bold;
			font-size:16px;			
		}
		
		.thumb .thumb-detail a {
			display:block;
			width:100%;
			height:100%;
			text-transform:uppercase;
			font-weight:bold;	
			color:#333;
			text-decoration:none;		
			font-family: 'Open Sans', sans-serif;
			letter-spacing:-1px;
			padding:10px;	
			font-size:18px;
		}		
	
	/*
	* Without CSS3
	*/
	.thumb.scroll {
		overflow: hidden;
	}	
	
		.thumb.scroll .thumb-detail {
			bottom:-280px;
		}
	
	
	/*
	* CSS3 Flip
	*/	
	.thumb.flip {
		-webkit-perspective:800px;		
		   -moz-perspective:800px;
		    -ms-perspective:800px;		   		
		     -o-perspective:800px;
  		        perspective:800px;
	}
	
		.thumb.flip .thumb-wrapper {
			-webkit-transition: -webkit-transform 1s;
			   -moz-transition: -moz-transform 1s;
			    -ms-transition: -moz-transform 1s;
			     -o-transition: -moz-transform 1s;
			        transition: -moz-transform 1s;
			-webkit-transform-style: preserve-3d;
			   -moz-transform-style: preserve-3d;			
			    -ms-transform-style: preserve-3d;			
			     -o-transform-style: preserve-3d;			
					  transform-style: preserve-3d;			
		}
		
		.thumb.flip .thumb-detail {
			-webkit-transform: rotateY(-180deg);
			   -moz-transform: rotateY(-180deg);
			    -ms-transform: rotateY(-180deg);
			     -o-transform: rotateY(-180deg);
			        transform: rotateY(-180deg);			   			
		}
		
		.thumb.flip img,
		.thumb.flip .thumb-detail {
			-webkit-backface-visibility: hidden;
			   -moz-backface-visibility: hidden;
			    -ms-backface-visibility: hidden;
			     -o-backface-visibility: hidden;
			        backface-visibility: hidden;
		}
		
		.thumb.flip .flipIt {
			-webkit-transform: rotateY(-180deg);
			   -moz-transform: rotateY(-180deg);			
			    -ms-transform: rotateY(-180deg);			
			     -o-transform: rotateY(-180deg);			
			        transform: rotateY(-180deg);			
		}
	
	</style>
	
	<script type="text/javascript">
	$(function () {
	

		if ($('html').hasClass('csstransforms3d')) {	
		
			$('.thumb').removeClass('scroll').addClass('flip');		
			$('.thumb.flip').hover(
				function () {
					$(this).find('.thumb-wrapper').addClass('flipIt');
				},
				function () {
					$(this).find('.thumb-wrapper').removeClass('flipIt');			
				}
			);
			
		} else {

			$('.thumb').hover(
				function () {
					$(this).find('.thumb-detail').stop().animate({bottom:0}, 500, 'easeOutCubic');
				},
				function () {
					$(this).find('.thumb-detail').stop().animate({bottom: ($(this).height() * -1) }, 500, 'easeOutCubic');			
				}
			);

		}
	
	});
	</script>
</head>
<body>
	

<div id="container">
	
	<div id="info">
		<h1>CSS 3D Transform Card Flip Animation</h1>
		<p id="note">A simple card flip demo which will degrade gracefully if your browser doesn't support CSS 3D Transforms. This gallery will revert to a normal scrolling display instead.</p>	
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/9.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/979/weekly-design-inspirations-4">
					Weekly Design Inspiration #4
				</a>				
			</div>
		</div>
	</div>		
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/2.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/982/24-very-creative-the-avengers-illustrations">
					CREATIVE THE AVENGERS ILLUSTRATIONS
				</a>
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/3.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/979/weekly-design-inspirations-3">
					WEEKLY DESIGN INSPIRATIONS #3
				</a>				
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/4.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/975/34-ultra-realistic-ios-icon-design-showcase">
					ULTRA REALISTIC IOS ICON SHOWCASE
				</a>				
			</div>
		</div>
	</div>
	

	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/1.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/983/23-stunning-parallax-scroll-websites-you-have-to-know">
					STUNNING PARALLAX SCROLL WEBSITES
				</a>
			</div>
		</div>
	</div>	
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/6.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/965/full-of-hearts-inspirations-3">
					FULL OF HEARTS INSPIRATIONS <3
				</a>				
			</div>
		</div>
	</div>

	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/5.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/979/weekly-design-inspirations-3">
					WEEKLY DESIGN INSPIRATIONS #2
				</a>				
			</div>
		</div>
	</div>
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/7.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/906/23-ios-interface-inspirations">
					IOS INTERFACE INSPIRATIONS #1
				</a>				
			</div>
		</div>
	</div>	
	
	
	<div class="thumb scroll">
		<div class="thumb-wrapper">
			<img src="images/8.jpeg" alt="" />
			<div class="thumb-detail">
				<a href="http://favbulous.com/post/979/weekly-design-inspirations-1">
					Weekly Design Inspiration
				</a>				
			</div>
		</div>
	</div>
	

							

	
</div>	
	
</body>
</html>