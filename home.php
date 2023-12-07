

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
      <!-- <a href="./logout.php"><button class="btn btn-danger">Logout</button></a> -->
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
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
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
        <div class="roombox">
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
            <button class="btn btn-primary bookbtn"  onclick="openbookbox()" >Book</button>
            
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Delux Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
            </div>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
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
        </div>
      </div>
    </div>
  </section>

  <section id="thirdsection">
    <h1 class="head">≼ Facilities ≽</h1>
    <div class="facility">
      <div class="box">
        <h2>Swiming pool</h2>
      </div>
      <div class="box">
        <h2>Spa</h2>
      </div>
      <div class="box">
        <h2>24*7 Restaurants</h2>
      </div>
      <div class="box">
        <h2>24*7 Gym</h2>
      </div>
      <div class="box">
        <h2>Heli service</h2>
      </div>
    </div>
  </section>

  <hr>


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

echo 'Plot No 1 and 2, Sy No, 119/723,<br/>';
echo 'Bagalur - Budigere Road,<br/>';
echo ' Old  Tavern  Road,  Dasanayakanahalli,<br/> Bengaluru-562149, <br/>Karnataka, India<br/><br/><br/>';

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
echo '© 2023 Copyright:All Rights Reserved';
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
    </div>
  </section>
</body>
        
<script>
    
    var bookbox = document.getElementById("guestdetailpanel");

// Flag to track if redirection has already occurred
const usermail = '<?php echo isset($_SESSION['usermail']) ? $_SESSION['usermail'] : ''; ?>';

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


</html>