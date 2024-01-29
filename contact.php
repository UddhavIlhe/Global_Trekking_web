<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Global Trekking Travel Category Flat Bootstrap Responsive Web Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Global Trekking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="index.php"><span class="fa fa-map-signs"></span> Global Trekking </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="index.php">Home</a></li>
				<li class=""><a href="about.php">About Us</a></li>
				<li class=""><a href="services.php">Services</a></li>
				<li class=""><a href="packages.php">Packages</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
				<li class="booking"><a href="booking.php">Book Now</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-3">
			<h2 class="heading text-capitalize text-center mb-sm-5 mb-4"> Get In Touch with us</h2>
			<ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
                <li class="col-md-4 col-sm-6 adress-w3pvt-info">
                    <div class=" adress-icon">
                        <span class="fa fa-map-marker"></span>
                    </div>

                    <h6>Location</h6>
                    <p>AVCOE, Sangamner,
                        <br>Maharashtra, India</p>
                </li>

                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
                    <div class="adress-icon">
                        <span class="fa fa-envelope-open-o"></span>
                    </div>
                    <h6>Phone & Email</h6>
                    <p>+91 9876543210</p>
                    <a href="mailto:globaltrek@gmail.com" class="mail">globaltrek@gmail.com</a>
                </li>
                <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">

                    <div class="adress-icon">
                        <span class="fa fa-comments-o"></span>
                    </div>

                    <h6>Stay In Touch</h6>
					<ul class="social_section_1info mt-2">
						<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
						<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					</ul>
                </li>
            </ul>
			
			<div class="contact-grids mt-5">
				<div class="row">
					<div class="col-lg-6 col-md-6 contact-left-form">
						<form method="post">
							<div class=" form-group contact-forms">
							  <input type="text" class="form-control" placeholder="Name" required="" name="name" id="name">
							</div>
							<div class="form-group contact-forms">
							  <input type="email" class="form-control" placeholder="Email" required="" name="email" id="email">
							</div>
							<div class="form-group contact-forms">
							  <input type="text" class="form-control" placeholder="Phone" required="" name="phone" id="phone"> 
							</div>
							<div class="form-group contact-forms">
							  <textarea class="form-control" placeholder="Message" rows="3" name="message" required=""></textarea>
							</div>
							<button name="send" class="btn btn-block sent-butnn">Send</button>
						</form>
					</div>
					<div class="col-lg-6 col-md-6 contact-right pl-lg-5">
					<p style="font-weight: bold; font-size: 40px; color: black;">Do you have any questions about us? write to us.</p>
						<h5 class="mt-lg-5 mt-3">Active Hours</h5>
						<p class="mt-3">Monday to Friday : 09:00 am to 05:00 pm</p>
						<p>Saturday: 09:00 am to 01:00 pm</p>
					</div>
				</div>
			</div>
	</div>
</section>
<!-- //Contact -->

<!-- map -->	
<div class="map p-2">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.3105208456545!2d74.18287627463702!3d19.614017981704468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd0070e7eb3683%3A0x812069ad0d4f7f8f!2sAmrutvahini%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1683472210950!5m2!1sen!2sin"
		width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- //map -->

<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-lg-4 py-3">
		<div class="row footer-top">
			<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Address</h3>
				</div>
				<div class="footer-text">
					<p>Location : AVCOE, Sangamner, Maharashtra, India</p>
					<p>Phone : +91 9876543210</p>
					<p>Email : <a href="mailto:globaltrek@gmail.com">globaltrek@gmail.com</a></p>
					<p>Fax : +91 9876543210</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Discover the world with us. We offer unique travel experiences tailored to your preferences. Let's make memories
					together.</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Travel Places</h3>
				</div>
				<div class="row">
					<ul class="col-6 links">
						<li><a href="#choose" class="scroll">New Zealand </a></li>
						<li><a href="#overview" class="scroll">Paris, France </a></li>
						<li><a href="#pricing" class="scroll">Los Angles</a></li>
						<li><a href="#faq" class="scroll"> Darlington</a></li>
						<li><a href="#testimonials" class="scroll">Canada </a></li>
						<li><a href="#contact" class="scroll"> South Africa </a></li>
					</ul>
					<ul class="col-6 links">
						<li><a href="#">Spain </a></li>
						<li><a href="#">Turkey </a></li>
						<li><a href="#faq" class="scroll">Europe </a></li>
						<li><a href="#">Italy </a></li>
						<li><a href="#">Sweden </a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Newsletter</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2023 Global Trekking.</p>
</div>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

	
</body>
</html>

<?php 

	if(isset($_POST['send'])) 
	{
		extract($_POST);

		$add = mysqli_query($conn,"insert into contact(name, email, phone, message) values('$name','$email','$phone','$message')") or die(mysqli_error($conn));

		if($add)
		{
			echo "<script>;";
			echo "window.alert('Data insert successfully....!');";
			echo 'window.location.href = "booking.php";'; 
			echo "</script>";
		}
		else
		{
			echo "<script>;";
			echo "window.alert('Data error....!');";
			echo "</script>";
		}
	}

 ?>