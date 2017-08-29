<html>
<head>
	
	<meta charset="utf-8" />	
	<title>AKATARAWA VALLEY HOME | Space Architecture</title>

	<link rel="stylesheet" href="css/default.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/first-image-slide.js"></script>
	<script type="text/javascript" src="js/preload.js"></script>

	<script type="text/javascript">
		var totalslides = 10;
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

		<h2 class="gallery-heading"> AKATARAWA VALLEY HOME </h2>
		
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
				<img src="images/akatarawaInterior/aka1.jpg" style="display:none" id="1-slide" rel="right"/>
				<p id="1-text" class="horizontal-gallery-text"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/akatarawaInterior/aka2.jpg" class="picture2 init-hidden" id="2-slide" rel="up" />
				<p id="2-text" class="vertical-gallery-text text-3 init-hidden"></p>
			</section>

			<section class="horizontal-gallery">
				<img src="images/akatarawaInterior/aka3.jpg" class="picture3 init-hidden" id="3-slide" rel="right" />
				<p id="3-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/akatarawaInterior/aka4.jpg" class="picture2 init-hidden" id="4-slide" rel="up" />
				<p id="4-text" class="vertical-gallery-text text-3 init-hidden"></p>
			</section>

			<section class="horizontal-gallery">
				<img src="images/akatarawaInterior/aka5.jpg" class="picture3 init-hidden" id="3-slide" rel="right" />
				<p id="3-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/akatarawaInterior/aka6.jpg" class="picture2 init-hidden" id="4-slide" rel="up" />
				<p id="4-text" class="vertical-gallery-text text-3 init-hidden"></p>
			</section>

			<section class="horizontal-gallery">
				<img src="images/akatarawaInterior/aka7.jpg" class="picture3 init-hidden" id="3-slide" rel="right" />
				<p id="3-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/akatarawaInterior/aka8.jpg" class="picture2 init-hidden" id="8-slide" rel="up" />
				<p id="8-text" class="vertical-gallery-text text-3 init-hidden"></p>
			</section>

			<section class="horizontal-gallery">
				<img src="images/akatarawaInterior/aka9.jpg" class="picture3 init-hidden" id="3-slide" rel="right" />
				<p id="3-text" class="horizontal-gallery-text init-hidden"></p>
			</section>

			<section class="vertical-gallery">
				<img src="images/akatarawaInterior/aka10.jpg" class="picture2 init-hidden" id="8-slide" rel="up" />
				<p id="8-text" class="vertical-gallery-text text-3 init-hidden"></p>
			</section>


			
		
			
			
			
    		</div> <!-- endDiv slider -->
		</div> <!-- endDiv page-container -->
	</div>


</body>
</html>