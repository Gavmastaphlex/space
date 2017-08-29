<html>
<head>

	<meta charset="utf-8" />
	<title>WAITAHEKE WETLAND HOME | Space Architecture</title>
	
	<link rel="stylesheet" href="css/default.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/first-image-slide.js"></script>
    <script type="text/javascript">
        var totalslides = 8;
		var slidenum = 0;
		var slidenext = 0;

		$(function () {
		    var $slider = $('#slider');
		    var $slides = $slider.find('img');
		    var $slideTexts = $slider.find('p');

		    // hide all except first slide
		    $slides.hide().eq(0).show();
		    $slideTexts.hide().eq(0).show();

		    $('#gallery-next').data('counter', 0);
		    $('#gallery-next').click(function () {

		        slidenext = slidenum + 1;
		        if(slidenext >= totalslides) slidenext = 0;

		        var slideType = $slides.eq(slidenext).attr('rel');
		        console.log(slidenum + ', ' + slidenext + ': ' + slideType);

		        // hide(slide) is a jQueryUI function, so ensure you include that lib
		        $slides.eq(slidenext).show('slide', {
		            direction: slideType
		        }, 1000);
		        $slides.eq(slidenum).delay(600).fadeOut(600);

		        $slideTexts.eq(slidenext).delay(1200).fadeIn();
		        $slideTexts.eq(slidenum).fadeOut(400);

		        slidenum++;
		        if(slidenum >= totalslides) slidenum = 0;

		        console.log(slidenum + ', ' + slidenext);
		    });


		    
		   	$('#gallery-previous').data('counter', 0);
		    $('#gallery-previous').click(function () {

		        slideback = slidenum - 1;
		        if(slideback == -1) slideback = totalslides - 1;

		        var slideType = $slides.eq(slideback).attr('rel');
		        console.log(slidenum + ', ' + slideback + ': ' + slideType);

		        // hide(slide) is a jQueryUI function, so ensure you include that lib
		        $slides.eq(slideback).show('slide', {
		            direction: slideType
		        }, 1000);
		        $slides.eq(slidenum).fadeOut(600);

		        $slideTexts.eq(slideback).delay(1200).fadeIn();
		        $slideTexts.eq(slidenum).fadeOut(400);

		        slidenum = slidenum - 1;
		        if(slidenum == -1) slidenum = totalslides - 1;

		        console.log(slidenum + ', ' + slideback);
		    });


		});
    </script>
    
    <style type="text/css" >
        .init-hidden {display:none;}
    </style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34801004-18', 'spacearchitecture.co.nz');
  ga('send', 'pageview');

</script>

</head>
<body class="black">
	<div id="container-gallery">
		
		<div class="page-container">
	
		<h2 class="gallery-heading"> WAITAHEKE WETLAND HOME </h2>


		<?php


		if($_GET['awards']) {
			echo '<a href="space-architecture-design-awards.html#'.$_GET['awards'].'"><img src="images/waikanae/back button.png" id="gallery-back"/></a>';
		} else {
			echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><img src="images/waikanae/back button.png" id="gallery-back"/></a>';
		}


		?>


		<img src="images/waikanae/previous button.png" id="gallery-previous"/>
		<img src="images/waikanae/next button.png" id="gallery-next"/>
	
		<div id="slider">
			
			<section class="horizontal-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-1.jpg" style="display:none" id="1-slide" rel="right"/>
				<p id="1-text" class="horizontal-gallery-text"></p>
			</section>
	
			<section class="vertical-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-2.jpg" class="picture2 init-hidden" id="2-slide" rel="up" />
				<p id="2-text" class="vertical-gallery-text init-hidden"></p>
			</section>

			<section class="horizontal-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-3.jpg" class="picture3 init-hidden" id="3-slide" rel="right" />
				<p id="3-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-4.jpg" class="picture2 init-hidden" id="2-slide" rel="up" />
				<p id="2-text" class="vertical-gallery-text init-hidden"></p>
			</section>

			<section class="horizontal-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-5.jpg" class="picture3 init-hidden" id="3-slide" rel="right" />
				<p id="3-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-6.jpg" class="picture2 init-hidden" id="2-slide" rel="up" />
				<p id="2-text" class="vertical-gallery-text init-hidden"></p>
			</section>

			<section class="horizontal-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-7.jpg" class="picture3 init-hidden" id="3-slide" rel="right" />
				<p id="3-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/interior-waitaheke-wetland-home/waitaheke-interior-8.jpg" class="picture2 init-hidden" id="2-slide" rel="up" />
				<p id="2-text" class="vertical-gallery-text init-hidden"></p>
			</section>

			<!--

			<section class="horizontal-gallery">
				<img src="images/wetland/wetland9.jpg" class="picture3 init-hidden" id="9-slide" rel="right" />
				<p id="9-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/wetland/wetland10.jpg" class="picture4 init-hidden" id="10-slide" rel="up" />
				<p id="10-text" class="vertical-gallery-text text-3 init-hidden"></p>
			</section>

			 -->

			
			
    		</div> <!-- endDiv slider -->
		</div> <!-- endDiv page-container -->
	</div>
</body>
</html>