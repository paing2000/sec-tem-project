<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Login</title>
    
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->
<style type="text/css">
	#confirm
	{
		color: skyblue;
		font-size: 20px;
	}

</style>
<body>


<section class="main">
	<div class="layer">
		<!---728x90--->

		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="index.php"><span class="fa fa-scissors"></span> Shwyne</a></h1>
			</div>
			
		</div>
		<div class="content-w3ls">
			
			<center><h1 id="confirm">We have sent a verification to your account.Check it.</h1></center><br>

			<div class="content-bottom">
				
				<form action="sw-confirm.php" method="post">
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="code" id="text1" type="text" value="" placeholder="Enter the code here" required>
						</div>
					</div>
					
					<div class="wthree-field">
						<a href="confirmation.php?id=<?php echo '$id'?>"><button class="btn" type="submit">Confirm</button></a>
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
php
</body>
<!-- //Body -->
</html>
