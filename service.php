<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
  height: 271px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
    width: 70%;
    height: auto;
    margin-left: 27px;
    margin-top: 10px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 18.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}



.desktop .overlap-15 {
    position: absolute;
    width: 1268px;
    height: 86px;
    top: -12px;
    left: 0px;
    background-color: #165069;
    /* background-image: url(./img/rectangle-334.svg); */
   
}

.desktop .notification {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 44px;
    left: 549px;
}

.desktop .home {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 45px;
    left: 32px;
}

.desktop .order-completed {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 46px;
    left: 186px;
}
.desktop .user {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 46px;
    left: 383px;
}

.desktop .text-wrapper-15 {
    position: absolute;
    top: 32px;
    left: 8px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .text-wrapper-16 {
    position: absolute;
    top: 32px;
    left: 84px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .text-wrapper-17 {
   position: absolute;
   top: 34px;
    left:983px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .chat {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 47px;
    left: 758px;
}

.desktop .text-wrapper-18 {
    position: absolute;
    top: 33px;
    left: 250px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .text-wrapper-19 {
    position: absolute;
    top: 33px;
    left: 358px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}

.desktop .group {
    width: 312px;
    top: 39px;
    left: 922px;
    position: absolute;
    height: 43px;
}

.desktop .overlap-16 {
    position: relative;
    width: 314px;
    height: 43px;
}

.desktop .overlap-group-wrapper {
    width: 314px;
    top: 0;
    left: 0;
    position: absolute;
    height: 43px;
}

.desktop .div-wrapper {
    position: relative;
    width: 216px;
    height: 43px;
    top: -10px;
    left: 8px;
    background-color: #ffffff;
    border-radius: 10px;
    border-right-width: 1px;
    border-right-style: solid;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    border-left-width: 1px;
    border-left-style: solid;
    border-color: #a667a8;
}

.desktop .text-wrapper-20 {
    position: absolute;
    width: 213px;
    height: 43px;
    top: 9px;
    left: -17px;
    font-family: "Inter-Regular", Helvetica;
    font-weight: 400;
    color: #00000061;
    font-size: 12px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22p
}

.desktop .search {
    position: absolute;
    width: 21px;
    height: 15px;
    top: 3px;
    left: 9px;
}

.desktop .order-completed {
    position: absolute;
    width: 30px;
    height: 30px;
    top: 46px;
    left: 186px;
}

.desktop .text-wrapper-21 {
    position: absolute;
    top: 32px;
    left: 161px;
    font-family: "Inter-Medium", Helvetica;
    font-weight: 500;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.41px;
    line-height: 22px;
    white-space: nowrap;
}
.desktop .overlap-2 {
  /* position: absolute; */
    width: 436px;
    height: 180px;
    top: 92px;
    left: -854px;
}


.desktop .showcase {
    position: absolute;
    width: 416px;
    height: 180px;
    top: -3px;
    left: -36px;
    border-color: #165069;
}

.desktop .emotions {
    position: absolute;
    width: 218px;
    height: 158px;
    top: 19px;
    left: 178px;
}

.desktop .home-cleaning {
    position: absolute;
    width: 110px;
    height: 15px;
    top: 30px;
    left: -19px;
}

.desktop .element {
    position: absolute;
    width: 41px;
    height: 14px;
    top: 96px;
    left: 121px;
}

.desktop .text-wrapper-3 {
    position: absolute;
    width: 41px;
    top: 45px;
    left: 73px;
    font-family: "Mulish-SemiBold", Helvetica;
    font-weight: 600;
    color: #ffffff;
    font-size: 16px;
    letter-spacing: 0;
    line-height: 50px;
    white-space: nowrap;
}

/* style */

.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 114px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
} 

</style>

</head>
<body>

<div class="desktop">
<div class="overlap-15">
                    <div class="text-wrapper-15">Home</div>
                    <div class="text-wrapper-16" ><a href="bookinghistory.html"  style="text-decoration: none; color: white;">Profile</a></div>
                    <div class="text-wrapper-21"><a href="bookinghistory.html"  style="text-decoration: none; color: white;">Booking</a></div>
                    <div class="text-wrapper-18"><a href="service.html" style="text-decoration: none; color: white;">Services</a></div>
                    <div class="text-wrapper-19"> Notifications</div>
                    <div class="text-wrapper-17"><input type="search" name = "search" placeholder="Search" required style="width: 198px;
                                    height: 32px;
                                    background-color:white;
                                    margin-left: 26px;
                                    margin-top: -3px;
                                "></div>
           
<!-- <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="img/Group 28-min.png" alt="Cinque Terre" width="600" height="400" style="margin: 20px;
    margin-left: 28px;
}">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div> -->
<div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <img src="img\Homeservice.png" style="width: 128%;
  height: 349px;
  margin-left: -144px;">
  <div class="text">HIREMAID</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">2 / 3</div> -->
  
  <img src="img\Banner.png" style="width: 128%;
  height: 349px;
  margin-left: -144px;">
  <div class="text">HIREMAID</div>
</div>

<div class="mySlides fade">
  <!-- <div class="numbertext">3 / 3</div> -->
  
  <img src="img\serviceslide1.jpg" style="width: 128%;
  height: 349px;
  margin-left: -144px;">
  <div class="text">HIREMAID</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<br><br>
<div class="title" style="
   font-size: 1.5rem;
    margin-top: -22px;
    margin-left: 520px;
    font-weight: 600;
">Choose Your Service</div>
<br><br>

<?php
        // Database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'maid';

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to select all images from the table
        $sql = "SELECT * FROM cusservice";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
          
                
		
                
        $image_data = $row['image_data'];
        $category = $row['category'];
			
        
http://localhost/musicon/landing/create.php
                // Generate the HTML for each image with Bootstrap card styling

                echo '<div class="responsive">';
                echo  '<div class="gallery">';
             
                
    echo    '<img src="data:image/jpeg;base64,' . base64_encode($image_data) . '" alt="Image"/>';
    echo     '  <div class="desc">'.$category.'</div>';
     
    
    echo   '</div><br><br>';
    echo   '</div>';
            }
        } else {
            echo 'No images found in the table.';
        }
        $conn->close();
        ?>
               


<div class="clearfix"></div>


</body>
</html>


