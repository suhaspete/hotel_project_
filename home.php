<?php 
  session_start();
  include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>THE ROYAL MOON</title>
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./admin/css/roombook.css">
    <!-- CSS Files -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/abouts/about-1/assets/css/about-1.css" />

    <style>
    
    .whatsapp_main{
        position:fixed;
        bottom:40px;
        right:20px;
        text-align:right;
        z-index:10;
      }
      @media only screen and (max-width: 600px) {

        .whatsapp_img
      {
      width: 18%;

      } 
     
    .logo{
        text-align: center !important;
    }
    .logo p
    {
font-size: 17px !important;
    }
    


      }



      #guestdetailpanel{
        display: none;
      }
      #guestdetailpanel .middle{
        height: 450px;
      }





      















      

    </style>




<div class="whatsapp_main">
<a href="https://wa.me/9535443273?text=hello,%20I%20want%20to%20know%20more%20about%20the%20THE%20ROYAL%20MOON%20services" target="_blank"><img src="image\whatsappicon.png" alt="" width="8%" class="whatsapp_img"> </a>
</div>
</head>

<body>
  <nav>
    <div class="logo">
      <img class="bluebirdlogo" src="./image/bluebird.png" alt="logo">
      <p>&nbsp&nbspTHE ROYAL MOON</p>
    </div>
    <ul>
      <li><a href="#firstsection">Home</a></li>
      <li><a href="#secondsection">Rooms</a></li>
      <li><a href="#thirdsection">Facilites</a></li>
      <li><a href="#contactus">contact us</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </nav>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="carousel-image" src="./image/hotel1.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel2.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel3.jpg">
        </div>
        <div class="carousel-item">
            <img class="carousel-image" src="./image/hotel4.jpg">
        </div>

        <div class="welcomeline">
          <h1 class="welcometag">Welcome to heaven on earth</h1>
        </div>
        <!-- bookbox -->

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



        <!-- ==== room book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Country = $_POST['Country'];
                $Phone = $_POST['Phone'];
                $RoomType = $_POST['RoomType'];
                $Bed = $_POST['Bed'];
                $NoofRoom = $_POST['NoofRoom'];
                $Meal = $_POST['Meal'];
                $cin = $_POST['cin'];
                $cout = $_POST['cout'];

                if($Name == "" || $Email == "" || $Country == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $diff = abs(strtotime($cout) - strtotime($cin));
                    $dateDiff = floor($diff / (60 * 60 * 24));
                    // $dateDiff = date_diff($cout,$cin);
                    // $dataDiff = strtotime($cout) - strtotime($cin);
                    $sta = "NotConfirm";
                    // $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta','$dateDiff')";
                    $result = mysqli_query($conn, $sql);

                    
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                }
            }
            ?>
          </div>

    </div>
  </section>
    
  <section id="secondsection"> 
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <h1 class="head">≼ Our room ≽</h1>
      <div class="roomselect">
        <!-- <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <button class="btn btn-primary bookbtn"  onclick="openbookbox()" >Book</button> -->
            
          <!-- </div> -->
        <!-- </div> -->
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2 id="price">Delux Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <!-- <i class="fa-solid fa-spa"></i> -->
              <!-- <i class="fa-solid fa-dumbbell"></i> -->
            <h2 id="price">Price: 1600+GST</h2>

             
            </div>
            <!-- <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button> -->
            <button class="btn btn-primary bookbtn" onclick="redirectToDeluxRoom()">View Details</button>

          <!-- </div> -->
        <!-- </div> -->
        <!-- <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Guest Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h4"></div>
          <div class="roomdata">
            <h2>Single Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div> -->
      <!-- </div> -->
    <!-- </div> -->
  </section>

  <section id="thirdsection">
    <h1 class="head">≼ Facilities ≽</h1>
    <div class="facility">
      <div class="box">
        <h2>WIFI</h2>
      </div>
      <!-- <div class="box">
        <h2>Spa</h2>
      </div> -->
      <div class="box">
        <h2>24*7 Restaurants</h2>
      </div>
      <div class="box">
        <h2>24*7 Snacks</h2>
      </div>
      <!-- <div class="box">
        <h2>Heli service</h2>
      </div> -->
    </div>
  </section>

  <hr>


<!-- About 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
      <div class="col-12 col-lg-6 col-xl-5">
        <img class="img-fluid rounded" loading="lazy" src="image\about-img-1.jpeg" alt="">
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <h2 class="h1 mb-3">Who Are We?</h2>
            <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p>
            <p class="mb-5">Nullam gravida orci ac luctus molestie. Fusce finibus congue erat, non aliquam magna tincidunt at. Aenean lacinia arcu ex, sed pharetra nibh porta a. Curabitur vel consequat nibh, ac interdum nisl. Nunc pulvinar nec massa vitae sollicitudin.</p>
            <div class="row gy-4 gy-md-0 gx-xxl-5X">
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-3">Versatile Brand</h4>
                    <p class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="d-flex">
                  <div class="me-4 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                      <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="mb-3">Digital Agency</h4>
                    <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- <section class="u-align-center u-clearfix u-section-1" id="carousel_ec01">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"> Here are some of our clients</h2>
        <div class="custom-expanded u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/Untitled.png" alt="" data-image-width="225" data-image-height="225">
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="images/makemytrip.png" alt="" data-image-width="398" data-image-height="126">
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="image\airbnb.png" alt="" data-image-width="398" data-image-height="126">
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-4" src="image\makemytrip.png" alt="" data-image-width="225" data-image-height="225">
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-5" src="images/makemytrip.png" alt="" data-image-width="398" data-image-height="126">
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-6" src="images/black-logo-6.png" alt="" data-image-width="131" data-image-height="171">
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-7">
                <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-7" src="images/black-logo-8_150.png" alt="" data-image-width="148" data-image-height="150">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <section class="u-align-center u-clearfix u-section-1" id="carousel_ec01">
    <!-- <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">&nbsp;&nbsp;Here are some of our clients</h2>
        <div class="custom-expanded u-list u-list-1">
            <div class="u-repeater u-repeater-1" style="display: flex; justify-content: center; align-items: center;">
                <div class="u-align-center u-container-style u-list-item u-repeater-item" style="flex: 0 0 25%;">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="image\airbnb.png" alt="" data-image-width="225" data-image-height="225">
                    </div>
                </div>
                <div></div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item" style="flex: 0 0 25%;">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="image\makemytrip.png" alt="" data-image-width="398" data-image-height="126">
                    </div>
                </div>
                <div></div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item" style="flex: 0 0 25%;">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3" src="image\airbnb.png" alt="" data-image-width="398" data-image-height="126">
                    </div>
                </div> -->
                <!-- Add similar blocks for other images -->

                <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">We are here as well!!</h2>

                <section id="contactus20">
    <div class="social">
    &emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;
    <!-- &emsp;&emsp;&emsp;&emsp; -->
    <!-- &emsp;&emsp;&emsp;&emsp; -->
    <!-- &emsp;&emsp;&emsp;&emsp; -->
    <!-- &emsp;&emsp;&emsp;&emsp; -->
    <!-- &emsp;&emsp;&emsp;&emsp; -->
    <!-- &emsp;&emsp;&emsp;&emsp; -->
      
        <a href="https://www.instagram.com/_roo_hiit_" target="_blank">
        <i class=" fa-brands fa-airbnb"> A i r b n b</i>
        </a>
      &emsp;&emsp;&emsp;&emsp;
        <a href="https://www.facebook.com/your_facebook_page" target="_blank">
        <!-- <i class="fa-brands fa-airbnb"></i> -->
        <i class="fa-solid fa-hotel"> M a k e M y  T r i p </i>
        </a>

        &emsp;&emsp;&emsp;&emsp;
        <a href="mailto:theroyalmoonhotels@email.com">
        <i class="fa-solid fa-hotel"> G o i b i o</i>

        </a>

        &emsp;&emsp;&emsp;&emsp;
        <a href="https://www.twitter.com/rohit14604" target="_blank">
        <i class="fa-solid fa-hotel"> E a s e  M y  T r i p </i>

        </a>

    </div>

            
</section>






















    <?php

echo '<!-- Section: Links  -->';
echo '<section class="">';
echo '<div class="container text-center text-md-start mt-5">';
echo '<!-- Grid row -->';
echo '<div class="row mt-3">';
echo '<!-- Grid column -->';
echo '<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">';
echo '<!-- Content -->';
echo '<h6 class="text-uppercase fw-bold mb-4">';
echo '<i class="fas fa-gem me-3"></i><b>THE ROYAL MOON</b> ';
echo '</h6>';
echo '<p>';

echo '<div class="map">';

echo '<a href="https://maps.app.goo.gl/ynhMLju5frXpe3DVA">Plot No 1 and 2, Sy No, 119/723,<br/> </a>';
echo '<a href="https://maps.app.goo.gl/ynhMLju5frXpe3DVA">Bagalur - Budigere Road,<br/> </a>';
echo '<a href="https://maps.app.goo.gl/ynhMLju5frXpe3DVA">Old  Tavern  Road,  Bagalur,<br/> Bengaluru-562149, <br/>Karnataka, India </a>';


echo '</div>';

// echo 'Bagalur - Budigere Road,<br/>';
// echo ' Old  Tavern  Road,  Bagalur,<br/> Bengaluru-562149, <br/>Karnataka, India<br/><br/><br/>';
echo '<br/>';
//GMAIL

echo '<i class="fas fa-envelope me-3"></i>';
echo 'GMAIL :';
echo '<br>theroyalmoonhotels@gmail.com';

echo '</p>';
echo '</div>';
echo '<!-- Grid column -->';
echo '';
echo '<!-- Grid column -->';
echo '<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">';
echo '<!-- Links -->';
echo '<h6 class="text-uppercase fw-bold mb-4">';

echo '</div>';
echo '<!-- Grid column -->';
echo '';
echo '<!-- Grid column -->';
echo '<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">';
echo '<!-- Links -->';
echo '<h6 class="text-uppercase fw-bold mb-4">Contact</h6>';
echo '<p><i class="fas fa-home me-3"></i> Bengaluru 562149, IND</p>';
echo '<p>';


echo '</p>';
echo '<p><i class="fas fa-phone me-3"></i> +91 9535443273</p>';
echo '<p><i class="fas fa-phone me-3"></i> +91 8722333722</p>';
echo '<p><i class="fas fa-phone me-3"></i> +91 8722333122</p>';
echo '<p><i class="fas fa-phone me-3"></i> +91 9686402100</p>';
echo '</div>';
echo '<!-- Grid column -->';
echo '</div>';
echo '<!-- Grid row -->';
echo '</div>';
echo '</section>';
echo '<!-- Section: Links  -->';
echo '';
echo '<!-- Copyright -->';
echo '<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">';
echo '© 2024 Copyright:All Rights Reserved';
echo '<a class="text-reset fw-bold>theroyalmoon</a>';
echo '</div>';
echo '<!-- Copyright -->';
echo '</footer>';
echo '<!-- Footer -->';
echo '<!-- Footer -->';
echo '<footer class="text-center text-lg-start bg-body-tertiary text-muted">';
echo '<!-- Section: Social media -->';
echo '<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">';
echo '<!-- Left -->';
echo '<div class="me-5 d-none d-lg-block">';
echo '<span>Get connected with us on social networks:</span>';
echo '</div>';
echo '</div>';
echo '<!-- Right -->';
echo '</section>';
echo '<!-- Section: Social media -->';
echo '';
?>

<section id="contactus">
    <div class="social">
        <a href="https://www.instagram.com/_roo_hiit_" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
      &emsp;&emsp;&emsp;&emsp;
        <a href="https://www.facebook.com/your_facebook_page" target="_blank">
            <i class="fab fa-facebook"></i>
        </a>

        &emsp;&emsp;&emsp;&emsp;
        <a href="mailto:theroyalmoonhotels@email.com">
            <i class="fas fa-envelope"></i>
        </a>

        &emsp;&emsp;&emsp;&emsp;
        <a href="https://www.twitter.com/rohit14604" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>

    </div>


    <div class="createdby">
        <!-- Add content for the 'createdby' section if needed -->
    </div>
</section>










    <div class="createdby">
      <h5></h5>
    <!-- </div>
  </section>
</body>
        
<script>
    
    var bookbox = document.getElementById("guestdetailpanel");

// Flag to track if redirection has already occurred
const usermail = '

openbookbox = () => {
    if (usermail) {
        bookbox.style.display = "flex";
    } else {
        window.location.href = "index.php";
    }
}


      
    
    closebox = () =>{
      bookbox.style.display = "none";
    }
</script>


</html> -->

</div>
  </section>
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

    redirectToDeluxRoom = () => {
        window.location.href = "http://localhost/hotel_project_/deluxroom_2.php";
    }
</script>
</html>