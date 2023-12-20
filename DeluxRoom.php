<?php 
  session_start();
  include_once 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Delux Room</title>

		<!-- Bootstrap core CSS -->
		<link href="admin\css\bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Custom fonts for this template -->
		<link href="admin\css\all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    

		<!-- Custom styles for this template -->
		<link href="admin\css\grayscale.min.css" rel="stylesheet">
		<link href="admin\css\custom.css" rel="stylesheet">
		<!-- Favicon for CreatED 2020 -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon_io/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
        #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }
      
    /* #guestdetailpanel {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    } */
</style>

</style>
	</head>

	<!-- <a id="mlh-trust-badge" style="display:block;max-width:100px;min-width:60px;position:fixed;right:50px;top:0;width:10%;z-index:10000" href="https://mlh.io/seasons/eu-2020/events?utm_source=eu-hackathon&utm_medium=TrustBadge&utm_campaign=2020-season&utm_content=gray" target="_blank"><img src="https://s3.amazonaws.com/logged-assets/trust-badge/2020/mlh-trust-badge-2020-gray.svg" alt="Major League Hacking 2020 Hackathon Season" style="width:100%"></a> -->

	<body id="page-top">

		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			<div id="navbar-container" class="container">
				<div id="navbar-top-menu">
					<div class="d-flex align-items-center justify-content-between">
						<a class="navbar-brand js-scroll-trigger" href="index.html">
							<div class="title-icon"></div>
						</a>
						<button class="navbar-toggler nexa" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							Menu
							<i class="fas fa-bars"></i>
						</button>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul id="navbar-buttons" class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger nexa" href="https://my.mlh.io/oauth/authorize?client_id=cef9c1e6ba6e0e53dca74d35208a5b5a1f8aa2b8b9805724ef6657d15ce5a5ec&redirect_uri=http%3A%2F%2Fapply.createdhack.com%2F&response_type=token">Apply</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger nexa" href="faqs.html">FAQs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger nexa" href="sponsors.html">Sponsors</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger nexa" href="workshops.html">Workshops</a>
						</li>
						<li class="nav-item" id="team">
							<a class="nav-link js-scroll-trigger nexa" href="teams.html">Team</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="particles-js"></div>

		<section class="text-center">

			<section>
			
			<h1 class="sub-heading diagonal-text orange" style="padding: 6em 0 4em 0;">Delux Rooms</h1>
			
			</section>
		
			<section class="container" style="padding-bottom: 3em;">
			
				<div class="row">
				
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image\hotel2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image\hotel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image\hotel2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
					
				</div>
				
			</section>

      <div>
			<h1 class="heading diagonal-text white">Delux Rooms booking details</h1>
      <h2 class="section-heading text-uppercase">Deluxe Rooms</h2>
                <p class="text-muted">Experience luxury and comfort in our deluxe rooms.</p>
                
                <!-- Features List -->
                <ul class="list-unstyled text-white" >
                    <li> Spacious and elegantly decorated</li>
                    <li> King-size bed with premium linens</li>
                    <li> Panoramic city views</li>
                    <li> High-speed Wi-Fi</li>
                    <li> Complimentary breakfast</li>
                    <li> En-suite bathroom with luxury amenities</li>
                </ul>
                <!-- End of Features List -->

                <!-- Button for More Information or Booking -->
                <!-- <a href="#booking-section" class="btn btn-primary btn-xl text-uppercase">Book Now</a> -->
                <button class="btn btn-primary bookbtn"  onclick="openbookbox()" >Book</button>

      </div>


      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name">
                    <input type="email" name="Email" placeholder="Enter Email">

                    <?php
                    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Country" class="selectinput">
						<option value selected >Select your country</option>
                        <?php
							foreach($countries as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phoneno">
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="RoomType" class="selectinput">
						<option value selected >Type Of Room</option>
                        <option value="Superior Room">SUPERIOR ROOM</option>
                        <option value="Deluxe Room">DELUXE ROOM</option>
						<option value="Guest House">GUEST HOUSE</option>
						<option value="Single Room">SINGLE ROOM</option>
                    </select>
                    <select name="Bed" class="selectinput">
						<option value selected >Bedding Type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
						<option value="Triple">Triple</option>
                        <option value="Quad">Quad</option>
						<option value="None">None</option>
                    </select>
                    <select name="NoofRoom" class="selectinput">
						<option value selected >No of Room</option>
                        <option value="1">1</option>
                        <!-- <option value="1">2</option>
                        <option value="1">3</option> -->
                    </select>
                    <select name="Meal" class="selectinput">
						<option value selected >Meal</option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
						<option value="Half Board">Half Board</option>
						<option value="Full Board">Full Board</option>
					</select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type ="date">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type ="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>










      
     
		
			<section class="diagonal-section black-bg" style="height: 4em; opacity: 1;"></section>
		
			<section class="footer-section black-bg">
			
				<div style="padding-top: 0">
					<div class="small text-center white">
						<div class="social d-flex justify-content-center"></div>
						<div class="white mb-4 nexa">
							Copyright &copy; CreatED 2020
						</div>
						<a href="https://www.facebook.com/createdhack/" class="mx-2 orange-hover">
						  <i class="fab fa-facebook-f"></i>
						</a>
						<a href="https://github.com/createdhack" class="mx-2 orange-hover">
						  <i class="fab fa-github"></i>
						</a>
						<a href="https://twitter.com/createdhack" class="mx-2 orange-hover">
						  <i class="fab fa-twitter"></i>
						</a>
						<a href="https://www.linkedin.com/company/created-hardware-hackathon" class="mx-2 orange-hover">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
				</div>
				
			</section>
		
		</section>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for this template -->
		<script src="js/grayscale.js"></script>

		<!-- Custom javascript -->
		<script src="js/custom.js"></script>

		<!-- Particle library -->
		<script src="particles/particles.js"></script>
		<script src="particles/app.js"></script>

	</body>


  <script>
    var bookbox = document.getElementById("guestdetailpanel");

    openbookbox = () =>{
      let usermail = <?php echo !empty($_SESSION['usermail']) ? json_encode($_SESSION['usermail']) : "''" ?>;
      if (usermail) {
        bookbox.style.display = "flex";
      } else {
        window.location.href = "http://localhost/hotel_project_/index.php";
        
      }
      
    }
    closebox = () =>{
      bookbox.style.display = "none";
    }

</script>

</script>



  

</html>
