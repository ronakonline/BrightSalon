<!doctype html>
<html class="" lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Bright Threading & Beauty Salon in Richardson</title>
	<meta name="description" content="Best salon in Richardson.We are offering waxing,threading,facial,eyelash extensions,henna and hair services at Campbell Road,Richardson,TX.We also provide special offer at Bright Threading & Beauty Salon.">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>

	<?php $this->load->view('css-links'); ?>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<?php $this->load->view('header'); ?>

<!--Contact area start-->
<section id="contact" class="contact-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-title text-center">
					<h2>Contact us</h2>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 ">
				<div class="contact-address contact-wraper">
					<div class="sin-add">
						<div class="add-icon">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<p class="phone">Phone: <a href="#">972-598-0817</a></p>
					</div>
					<div class="sin-add">
						<div class="add-icon">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</div>
						<p class="mail">
							Email:<a href="#">service@brightsalontx.com</a>
						</p>
					</div>
					<div class="sin-add">
						<div class="add-icon">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<p class="adress">Address<br>1403 E Campbell Road, Suite 103<br> Richardson, TX 75081</p>
					</div>
				</div>
			</div>
			<div class="col-sm-8 ">
				<div class="contact-wraper">
					<form class="contact-form" id="contact-form" name="contactform" method="post" action="send_form_email.php" >
						<div class="col-md-6">
							<input placeholder="Name" type="text" name="first_name" maxlength="50" size="30">
						</div>

						<div class="col-md-6">
							<input  placeholder="Email" type="text" name="email" maxlength="80" size="30">
						</div>

						<div class="col-md-12">

							<input  placeholder="Subject" type="text" name="subject" maxlength="50" size="30">
						</div>
						<div class="col-md-12">
							<textarea  placeholder="Your text..." name="comments" maxlength="1000" cols="25" rows="6"></textarea>
						</div>
						<div class="col-md-12">
							<button class="btn submit-btn btn-primary" id="send" name="submit" type="submit" >Send Message</button>

						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</section>
<!--Contact area end-->

<?php $this->load->view('footer'); ?>



<?php $this->load->view('js-links'); ?>

</body>


</html>
