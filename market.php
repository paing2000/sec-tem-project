<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Market</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Google fonts -->
	<style type="text/css">	
		.main {
    background: url(img/bg3.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
	position: relative;
    min-height: 100vh;
}

	</style>

</head>
<!-- //Head -->
<!-- Body -->

<body>

		
<nav>
					<div class="menu-icon">
						<span></span>
					</div>
					<div class="logo-ptk mb-5 text-center">
							<a href="index.php" class="navbar-brand l0g0">
					<i class="fas fa-cut"></i> Shwyne <span> Just search & cut </span>
							</a> 
					</div>
					<div id="menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Appointment</a></li>
							<li><a href="loginas.php">Login</a></li>
							<li><a href="registeras.php">Register</a></li>
							
							

						</ul>
					</div>
				</nav>
<section class="main">
	
	<div class="layer">
		

		<!---728x90--->

		
		<div class="content-w3ls">
			
			<!---728x90--->

			<div class="content-bottom">
				<form action="sw-marchants.php" method="post">
					<div class="field-group">
						<span class="fa fa-shopping-cart" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="username" id="text1" type="text" value="" placeholder="Shop Name" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="password" id="myInput" type="Password" placeholder="Password">
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="c-password" id="myInput" type="Password" placeholder="Confirm Password">
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="email" id="myInput" type="email" placeholder="Email">
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-address-card" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="address" id="myInput" type="address" placeholder="Address">
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-phone" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="phone" id="myInput" type="text" placeholder="Phone no">
						</div>
					</div>
					<div class="wthree-field">
						<button type="submit" class="btn">Register</button>
					</div>
					
					
				</form>
			</div>
		</div>
		<!---728x90--->

		<div class="bottom-grid1">
			<div class="links">
				<ul class="links-unordered-list">
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Privacy Policy</a>
					</li>
					<li class="">
						<a href="#" class="">Terms of Use</a>
					</li>
				</ul>
			</div>
			<div class="copyright">
				<p>© 2019 Shwyne. All rights reserved | Design by
					<a href="http://w3layouts.com">Shwyne</a>
				</p>
			</div>
		</div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- zoom slider -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".menu-icon").on("click",function(){
					$("nav ul").toggleClass("showing");
					$(".menu-icon").toggleClass("active");
				});
			});

			$(window).on("scroll",function(){
				if($(window).scrollTop()){
					$('nav ul').addClass('black');
				}
				else{
					$('nav ul').removeClass('black');
				}
			})
		</script>
</body>
<!-- //Body -->
</html>
