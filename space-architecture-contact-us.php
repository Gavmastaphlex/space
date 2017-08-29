<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		
		<title>CONTACT | Space Architecture</title>
		<link rel="stylesheet" href="css/default.css" />
		<link rel="stylesheet" href="css/jquery.jscrollpane.css" />
		
		<meta name="description" content="" />
		<meta name="keywords" content="" >
		
		 <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	
		
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34801004-18', 'spacearchitecture.co.nz');
  ga('send', 'pageview');

</script>

</head>
	
	<body class="black" id="contact">
		
		<div class="page-container">
					
					<h2 class="gallery-heading"> CONTACT </h2>

					<a href="home.html"><img src="images/waikanae/back button.png" id="gallery-back"/></a>
					<img src="images/backgrounds/contact-bg.jpg" id="form-image"/>
					

					<section id="contact-details">
						<div id="head-office">
							<h3> Head Office </h3>
							<ul>
							<li> +64(0)4 233 9906 </li> 
							<li> 114 Mana Esplanade </li>
							<li> Mana </li>
							<li> New Zealand </li>
							</ul>
						</div>
						
						<div id="kapiti-coast-office">
							<h3> Kapiti Coast Office </h3>
							<ul>
							<li> +64(0)4 904 6222 </li> 
							<li> Waikanae </li>
							<li>Kapiti Coast </li>
							<li> New Zealand </li>
							</ul>
						</div>
						
						<div id="postal">
							<h3> Postal </h3>
							<ul>
							<li>P.O Box 57-046 </li>
							<li>Mana 5247 </li>
							<li>Wellington </li>
							</ul>
						</div>
					</section>


					<?php
			echo form();
					
					if(isset($_POST['submit'])){
						
						
						$email_from = $_POST['Email'];
						
						$subject = "CONTACT FORM email from Space Architecture";
						//Set up the clients details

						$to = 'Nathan@Spacearchitecture.co.nz' . ', ';
		    			$to .= 'david@luvly.co.nz';
						
						$headers = 'From:' . $email_from . "\r\n" .  
                                   'Reply-To:' . $email_from . "\r\n" .
                                   'X-Mailer: PHP/' . phpversion();
						
						$body = 'Someone has contacted you from your website!'."\r\n";
   					 	
   					 	$body .= 'From: '.$_POST['name']."\r\n";
   					 	$body .= 'From: '.$_POST['Email']."\r\n";
   					 	$body .= 'From: '.$_POST['Phone']."\r\n";
    					$body .= 'Message: '."\r\n".$_POST['message'];
    					
    					$sent = mail($to, $subject, $body, $headers); //doesnt work locally
    					if($sent) {
        				$html = '<p class="success-message">Thank you the message was sent! </p>';
   						
   						 } else {
       					
       					 $html = '<p class="success-message"> The message failed to send. </p>';
        				 $html .= form();
    					}
    
    					echo ($html);
    					    
						}

						function form(){
		
					$html = '<section id="contact-form">';
						$html .= '<form method="post" id="form" action="'.$_SERVER['REQUEST_URI'].'" >';
						
						$html .= '<div class="form-sub">';
							$html .= '<label for="name" class="label">Name:</label>';
							$html .= '<input type="text" name="name" value="" id="form-name"class="form" />';
							$html .= '<br />';
						$html .= '</div>';
						
						$html .= '<div class="form-sub">';
							$html .= '<label for="email" class="label">Email:</label>';
							$html .= '<input type="Email" name="Email" value="" id="form-email" class="form"/>';
							$html .= '<br />';
						$html .= '</div>';
						
						$html .= '<div class="form-sub">';
							$html .= '<label for="phone" class="label">Phone:</label>';
							$html .= '<input type="phone" name="Phone" value="" id="form-email" class="form"/>';
							$html .= '<br />';
						$html .= '</div>';
						
						$html .= '<img src="images/sitemap/sitemap-underline.png" id="contact-form-line"/>';
						
						$html .= '<div id="form-enquiry">';
							$html .= '<label for="message" class="text-area-label" id="message-label">Enquiry:</label>';
							$html .= '<textarea name="message" rows="2" cols="113" id="form-message" class="form-textarea"></textarea>';
							$html .= '<br />';
							$html .= '<div class="clearDiv"></div>';
						$html .= '</div>';
						
						$html .= '<input type="submit" name="submit" id="submit" value="" id="submit-button" />';
					$html .= '</form>';
					
					$html .= '</section> ';

					return $html;
				}
			?>
			
		</div>
		
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	</body>

</html>