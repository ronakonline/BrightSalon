<!doctype html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bright Threading & Beauty Salon in Richardson</title>
    <meta name="description" content="Best salon in Richardson.We are offering waxing,threading,facial,eyelash extensions,henna and hair services at Campbell Road,Richardson,TX.We also provide special offer at Bright Threading & Beauty Salon.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<?php $this->load->view('css-links'); ?>
	<style>
		/** TIPS:
1. The carousel shouldn't be in any other div, like for example div with class container.
2. You can align image position in classes bg1, bg2, bg3 using css background-position.
*/

		/* Carousel 100% Fullscreen */
		html, body {
			height:90%;
			margin:0;
			padding:0;
		}
		.carousel, .item, .active {
			height:100%;
		}
		.carousel-inner {
			height:100%;
		}
		.carousel {
			margin-bottom: 60px;
		}
		.carousel-caption {
			z-index: 10;
		}
		.carousel .item {
			background-color: #777;
		}
		.carousel .carousel-inner .bg {
			background-repeat:no-repeat;
			background-size:cover;
		}
		.carousel .carousel-inner .bg1 {
			background-image:url('<?php echo base_url();?>assets/images/slide1new.png');
			background-position: center top;
		}
		.carousel .carousel-inner .bg2 {
			background-image:url('<?php echo base_url();?>assets/images/slide4new.png');
			background-position: center center;
		}
		.carousel .carousel-inner .bg3 {
			background-image:url('<?php echo base_url();?>assets/images/slide3new.png');
			background-position: center bottom;
		}
	</style>
</head>

<body>
   
    

	<?php $this->load->view('header'); ?>

	<!-- TIPS:
	1. The carousel shouldn't be in any other div, like for example div with class container.
	2. You can align image position in classes bg1, bg2, bg3 using css background-position.
	http://arturssmirnovs.com/blog/bootstrap-carousel-100-height-and-width/
	-->

	<!-- Carousel 100% Fullscreen -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item bg bg1 active">
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>
			<div class="item bg bg2">
				<div class="container">
					<div class="carousel-caption">

					</div>
				</div>
			</div>
			<div class="item bg bg3">
				<div class="container">
					<div class="carousel-caption">

					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	<!-- /end Carousel 100% Fullscreen -->

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
        
        <!--About section start-->
    <div id="about" class="about-section" style="padding-top: 20px;padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-desc">
                        <h2>About <span class="pink">Bright Threading &amp; Beauty Salon</span></h2>
                        <p class="text-1">If you are looking for a reliable beauty salon, Bright Threading & Beauty Salon is the place to visit. With our substantial experience in beauty care, we provide top-notch experience with comfortable and friendly environment. Exceptional customer service and quality is our only focus.</p>
                        <p class="text-2">Our team has licensed and experienced professionals who will take great care of your beauty needs. We use only the finest tools and products to give you the look you envisage. Visit us and allow us to take great care of you!

 </p>
 
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-carousel owl_pagination">

                        <div class="single-about">
                           <div class="about-img">
                               <img src="<?php echo base_url();?>assets/images/feature/1.jpg" alt="">
                           </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About section end-->
    
  
   <!--Pricing palaning area start-->
    <div class="pricing-plan" style="padding-top: 60px;padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2>our <span class="pink">services</span></h2>
                      
                    </div>
                </div>
            </div>
         <div class="row">
            <div class="col-sm-4">
                <div class="sin-pricelist">
                    <div class="table-header">Threading</div>
                    <div class="table-body">
                        <ul>
                            <li class="clearfix">Eyebrow<span>$4</span></li>
                            <li class="clearfix">Upper Lips<span>$2</span></li>
                            <li class="clearfix">Forhead<span>$3</span></li>
                            <li class="clearfix">Full Sides<span>$6</span></li>
                            <li class="clearfix">Neck<span>$5</span></li>
                            <li class="clearfix">Full Face<span>$15 +</span></li>
                            <li class="clearfix">Men’s Eyebrow<span>$5</span></li>
                            <li class="clearfix">Eyebrow Tinting<span>$10 </span></li>
                            <li class="clearfix">Eyelash Extension<span>$30 +</span></li>
                        </ul>

                       
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sin-pricelist">
                    <div class="table-header">Waxing</div>
                    <div class="table-body">
                        <ul>
                            <li class="clearfix">Under Arms<span>$7</span></li>
                            <li class="clearfix">Full Arms<span>$14</span></li>
                            <li class="clearfix">Half Legs<span>$14</span></li>
                            <li class="clearfix">Full Legs<span>$20</span></li>
                            <li class="clearfix">Stomach<span>$12</span></li>
                            <li class="clearfix">Full Back<span>$12</span></li>
                             <li class="clearfix">Full Bikini<span>$30 +</span></li>
                              <li class="clearfix">Full Body<span>$75 +</span></li>
                               <li class="clearfix">Men’s Full Back/Chest<span>$20 +</span></li>
                                <li class="clearfix">Men’s Arms/Half Legs<span>$20 +</span></li>
                        </ul>

                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sin-pricelist">
                    <div class="table-header">Facial</div>
                    <div class="table-body">
                        <ul>
                            <li class="clearfix">Face  Bleach<span>$15 +</span></li>
                            <li class="clearfix">Mini Facial<span>$25</span></li>
                            <li class="clearfix">Herbal/Fruit<span>$35</span></li>
                            <li class="clearfix">Chocolate/Wine<span>$45 +</span></li>
                            <li class="clearfix">Diamond/Gold/Silver<span>$45 +</span></li>
                            <li class="clearfix">Suntan/Antiage/Blemish<span>$45 +</span></li>
                            <li class="clearfix">Shahnaz Gold<span>$55</span></li>
                            <li class="clearfix">Fresh Fruit Facial<span>$55</span></li>
                            <li class="clearfix">Full Back Massage<span>$25</span></li>
                            <li class="clearfix">Full Hand Massage<span>$25</span></li>
                        </ul>

                      
                    </div>
                </div>
            </div>

              <div class="col-sm-4">
                <div class="sin-pricelist">
                    <div class="table-header">Hair Services</div>
                    <div class="table-body">
                        <ul>
                            <li class="clearfix">Women’s Haircut<span>$12 +</span></li>
                            <li class="clearfix">Men’s Haircut<span>$15 +</span></li>
                            <li class="clearfix">Hair Henna<span>$25 +</span></li>
                            <li class="clearfix">Hair Oil Massage<span>$25</span></li>
                            <li class="clearfix">Hair Color<span>$35 +</span></li>
                            <li class="clearfix">Hair Highlights<span>$75 +</span></li>
                             <li class="clearfix">Hair Updo<span>$30 +</span></li>
                            <li class="clearfix">Hair Straightening<span>$25 +</span></li>
                            <li class="clearfix">Hair Keratin Treatment<span>$120 +</span></li>
							<li class="clearfix">Brazilian Blowout<span>$150 +</span></li>
                        </ul>

                      
                    </div>
                </div>
            </div>
			 <div class="col-sm-4">
				 <div class="sin-pricelist">
					 <div class="table-header">Henna</div>
					 <div class="table-body">
						 <ul>
							 <li class="clearfix">Henna Tattoo <span>$7 +</span></li>
							 <li class="clearfix">Bridal Henna<span>$100 +</span></li>
							 <li class="clearfix">Bridal Hair &amp; Makeup<span>$75 +</span></li>
						 </ul>

					 </div>
				 </div>
			 </div>
        </div>
        </div>
    </div>
    <!--Pricing palaning area end-->


	<!--Special Pricing palaning area start-->
	<div class="pricing-plan " id="price" style="padding-top: 20px;padding-bottom: 20px; font-family: sans-serif	">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2>special<span class="pink">offers</span> </h2>

					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >

					<div class="box-part text-center" style="background-color: #49003d; ">



						<div class="title">
							<h3 style="color: #ffffff">FOR SPECIAL OFFERS</h3>
						</div>

						<div class="text">
							<h3 style="color: #ffffff">CALL</h3>
						</div>
						<div class="text" style="padding-bottom: 3px;">
							<h3 style="color: #ffffff">972-598-0817</h3>
						</div>



					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >

					<div class="box-part text-center" style="background-color: #49003d">


						<div class="title">
							<h4 style="color: #ffffff">10% Student Discount</h4>
						</div>

						<div class="text">
							<ul style="color: #ffffff; text-align: left; list-style-type: square; margin-left: 5px;">
								<li style="padding-bottom: 5px;">- 10% OFF ON ENTIRE BILL</li>
								<li style="padding-bottom: 5px;">- Valid for student only. Must show a valid student ID &nbsp;&nbsp;at the checkout counter</li>
								<li style="padding-bottom: 5px;">- Call 972-598-0817</li>
							</ul>

						</div>


					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

					<div class="box-part text-center" style="background-color: #49003d">


						<div class="title">
							<h4 style="color: #ffffff">10% REFERRAL DISCOUNT</h4>
						</div>

						<div class="text">
							<ul style="color: #ffffff; text-align: left; list-style-type: square; margin-left: 5px;">

								<li><br></li>

								<li style="padding-bottom: 5px;">- Call 972-598-0817</li>
								<li style="padding-bottom: 10px;">- One time validity for each referal</li>
								<li><br></li>

							</ul>

						</div>


					</div>
				</div>



			</div>
		</div>
	</div>
	<!-- Special Pricing palaning area end-->
        
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
