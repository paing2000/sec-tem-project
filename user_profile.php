<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Reset CSS -->
	<link rel="stylesheet" href="css/reset.css">

	<!-- responsive tabs --><!-- for pricing section -->
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<!-- responsive tabs -->

	<!-- form.css-->
	<link rel="stylesheet" type="text/css" href="css/form.css">

	<!-- style-xxxx -->
	<link rel="stylesheet" href="css/style-home.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	

	<!-- zoom slider -->
	<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

	<!-- responsive-xxxx -->
	<link rel="stylesheet" href="css/responsive-home.css">


	<!-- responsive-ptkhome -->
	<link rel="stylesheet" href="css/responsive-ptkhome.css">

	<!-- user profile -->
	<link rel="stylesheet" href="css/style-user_profile.css">

	<title>User Profile</title>
</head>
<body>
	<!-- nav bar -->

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
			<ul style="background:#000;">
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
	<!-- end of nav bar -->

	<!
	<div class="container">
		<div class="row">
			<div class="col-md-4 img_side">
				<div class="text-center mt-md-5 greeting"><h3>Hello, Paing Thet Ko</h3></div>
				<div class="circle"><img class="profile-pic" src="img/banner1.jpg"></div>
				<div class="camera">
					<i class="fa fa-camera upload-button" style="cursor: pointer;"></i>
					<input class="file-upload" type="file" accept="image/*"/>
				</div>
				<div class="row edit-delete-btn">
					<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg edit">Change</button></div>
					<div class="col-md-6"><button type="button" class="btn btn-primary btn-lg delete">Delete</button></div>
				</div>
			</div>
			<div class="col-md-8 info_side">
				<!--<div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div><-->
      <h3 class="mt-md-4" style="text-transform: uppercase;font-weight: 500;letter-spacing: .1px;text-shadow: 0 1px 2px rgba(0,0,0,0.37);font-size: 25px; border-bottom: 1px solid #a5b3c1;padding-bottom: 20px;">Personal Information</h3>


      <form class="mt-md-4 label ml-2 p-l-2">
      	<div class="form-group username">
      		<label for="user_name" class="col-form-label">Username:</label>
      		<div class="row ml-1">
      			<input type="text" name="username" class="form-control mr-md-1" id="" placeholder="Paing Thet Ko" style="width: 48%;margin-left: -3px;" disabled>
      			<button type="button" class="btn"  data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></button>
      			
      			

      			<!-- Modal -->
      			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      				<div class="modal-dialog modal-dialog-centered" role="document">
      					<div class="modal-content">
      						<div class="modal-header">
      							<h5 class="modal-title" id="exampleModalLongTitle" style="text-transform: uppercase;font-weight: 600;font-size: 22px;text-shadow: 0 1px 2px rgba(0,0,0,0.37);">Change Username</h5>
      							
      						</div>
      						<div class="modal-body">
      							
      								<div class="form-group">
      									<label class="">New Username:</label>
      									<input type="text" name="" class="form-control">
      								</div>
      							
      						</div>
      						<div class="modal-footer">
      							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      							<button type="button" class="btn btn-primary">Save changes</button>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      		


      	</div>
      	<div class="form-group row">
      		<div class="col-md-6 username">
      			<label for="inputEmail">E-mail Address:</label>
      			<div class="row ml-1">
      				<input type="email" class="form-control col-sm-10" id="inputEmail" placeholder="paingthetko2000@gmail.com" disabled style="margin-left: -3px;">
      				<button type="button" class="btn col-sm-2"  data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></button>



      				<!-- Modal -->
      				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      					<div class="modal-dialog modal-dialog-centered" role="document">
      						<div class="modal-content">
      							<div class="modal-header">
      								<h5 class="modal-title" id="exampleModalLongTitle" style="text-transform: uppercase;font-weight: 600;font-size: 22px;text-shadow: 0 1px 2px rgba(0,0,0,0.37);">Change Username</h5>

      							</div>
      							<div class="modal-body">

      								<div class="form-group">
      									<label class="">New Username:</label>
      									<input type="text" name="" class="form-control">
      								</div>

      							</div>
      							<div class="modal-footer">
      								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      								<button type="button" class="btn btn-primary">Save changes</button>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-6 username">
      			<label for="inputPhoneNumber">Phone Number:</label>
      			<div class="row ml-1">
      				<input type="email" class="form-control col-sm-10" id="inputEmail" placeholder="09782750134" disabled style="margin-left: -3px;">
      				<button type="button" class="btn col-sm-2"  data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></button>
      				
      				

      				<!-- Modal -->
      				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      					<div class="modal-dialog modal-dialog-centered" role="document">
      						<div class="modal-content">
      							<div class="modal-header">
      								<h5 class="modal-title" id="exampleModalLongTitle" style="text-transform: uppercase;font-weight: 600;font-size: 22px;text-shadow: 0 1px 2px rgba(0,0,0,0.37);">Change Username</h5>
      								
      							</div>
      							<div class="modal-body">
      								
      								<div class="form-group">
      									<label class="">New Username:</label>
      									<input type="text" name="" class="form-control">
      								</div>
      								
      							</div>
      							<div class="modal-footer">
      								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      								<button type="button" class="btn btn-primary">Save changes</button>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="form-group">
      		<label class="col-form-label" for="postalAddress">Postal Address:</label>

      		<textarea rows="2" class="form-control" id="postalAddress" placeholder="Postal Address"></textarea>
      	</div>
      	<div class="form-group row">
      		<div class="col-md-6">
      			<label class="col-form-label" for="ZipCode">Zip Code:</label>
      			<input type="text" class="form-control" id="ZipCode" placeholder="">
      		</div>
      		<div class="col-md-6">
      			<label class="col-form-label" for="Gender">Gender:</label><br>

      			<input type="radio" class="mr-2" name="gender"> Male
      			
      			
      			<input type="radio" class="mr-2" name="gender"> Female

      		</div>
      	</div>
      	<div class="form-group">
      		
      		<input onMouseOver="this.style.background='#124c43'" onMouseOut="this.style.background='#00a98f'" type="submit" class="btn save-button btn-md" value="Save Changes" style="background: #00a98f;color: #fff;">

      		
      	</div>
      </form>
  </div>
</div>

</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- js -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
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


<script type="text/javascript">
	$(document).ready(function() {


		var readURL = function(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('.profile-pic').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}


		$(".file-upload").on('change', function(){
			readURL(this);
		});

		$(".upload-button").on('click', function() {
			$(".file-upload").click();
		});
	});
</script>
</body>
</html>