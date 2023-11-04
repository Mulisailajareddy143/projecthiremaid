<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;

}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 16px;
}

/* Remove extra left and right margins, due to padding */
.row {
  margin: 0 -5px;
  margin-top: 367px;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1; */

  height: 234px;
    width: 202px;
    padding: 16px;
    text-align: center;
    margin-left: 20px;
    margin-top: 16px;
    border-radius: 10px;
    border: 1px solid;
    border-color: #165069;
}
.desktop .overlap-15 {
    position: absolute;
    width: 1257px;
    height: 86px;
    top: -12px;
    left: -7px;
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
    left: 479px;
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
  position: absolute;
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

</style>
</head>
<body>
<div class="desktop">
<div class="overlap-15">
                    <div class="text-wrapper-15">Home</div>
                    <div class="text-wrapper-16"><a href="customerprofile.html" style="text-decoration: none; color: white;">Profile</a></div>
                    <div class="text-wrapper-21"><a href="booking.html" style="text-decoration: none; color: white;">Booking</a></div>
                    <div class="text-wrapper-18"><a href="home1.html" style="text-decoration: none; color: white;">Categories</a></div>
                    <div class="text-wrapper-19"> Notifications</div>
                    <div class="text-wrapper-17">Chats</div>
                    <img class="menu" src="Menu.png" style="margin-left: 1178px;
    margin-top: 36px;
    width: 44px;" />
                 <div class="group">
                        <div class="overlap-16">
                            <div class="overlap-group-wrapper">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <div class="div-wrapper"><div class="text-wrapper-20"><input type="search" name = "search" placeholder="Search" required style="width: 198px;
                                    height: 32px;
                                    margin-left: 26px;
                                    margin-top: -3px;
                                "></div>
                              </div>
                            </div>
                            <div class="overlap-2">
                    <img class="showcase" src="Showcase.png" />
                    <img class="emotions" src="Emotions (3).png" />
                    <img class="home-cleaning" src="Home cleaning.png" />
                    <img class="element" src="percentage.png" />
                    <div class="text-wrapper-3">Up to</div>
                </div>

                        </div>
                    </div>
                    <div class="text-wrapper-2"style=" font-size: 22px;
    margin-top: 260px;
    margin-left: 44px;
     ">Recommended for you </div></div>
                </div>
            </div>


  <!-- <div class="column">
    <div class="card">
    <img class="rectangle-5" src="Rectangle 209.png" />
                        <div class="text-wrapper-13">Labour</div>
    </div>
  </div> -->
 
  
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
        $sql = "SELECT * FROM hiremaid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Retrieve the image data
          
                
		
                
        $image_data = $row['image_data'];
        $category = $row['category'];
			
        
http://localhost/musicon/landing/create.php
                // Generate the HTML for each image with Bootstrap card styling
                echo '<div class="row">';
                echo  '<div class="column">';
                echo  '<div class="card">';
    echo    '<img src="data:image/jpeg;base64,' . base64_encode($image_data) . '" alt="Image"/>';
    echo     '<div class="text-wrapper-13" style="margin-top: 26px;">'.$category.'</div>';
    echo     '<img class="heart" src="Heart (1).png" style="margin-top: -201px;margin-left: 69px;position:absolute;"/>';
    echo   '</div><br><br>';
    echo   '</div>';
            }
        } else {
            echo 'No images found in the table.';
        }

        $conn->close();
        ?>
               



</body>
</html>
