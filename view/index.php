<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/new.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.g.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@500;700&family=Barlow&family=Righteous&family=Tektur:wght@900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/one.js"></script>
    <script src="../js/two.js"></script>
    <title>Pera_portforlio</title>

    <style>
      .forms {
        display: none;
        }

        .visible {
            display: block;
        }

    </style>
</head>
<body>
    <div class="header">
        <div class="icon">
            <img src="../images/logo1.jpeg" alt="">
            <h1 class="logo">PERA</h1>
            <p>Botanical Garden</p>
        </div>
          
        <nav>
            <a href="#section1">Gallery</a>
            <a href="#section2">Charges</a>
            <a href="#section3">Booking</a>
            <a href="footer">Contact</a>

            <span>
                <button type="button" class="btn" onclick="openWin()">Login</button>
            </span>
        </nav>   
    </div>
    
    <div class="main-container">
        <sidebar class="resources">
            <h3>Resources</h3>
            
                <ul>
                    <li><a href="https://mysltravel.com/sri-lanka-tourist-attraction-ticket-price/peradeniya-royal-botanical-garden-kandy-entrance-ticket-fee/">MYSLTravel.com</a></li>
                    <li><a href="https://www.botanicgardens.gov.lk/">Department of National Botanical Garden</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Royal_Botanical_Gardens,_Peradeniya">wikipedia</a></li>
                    <li><a href="https://www.tripadvisor.com/Attraction_Review-g1194819-d523519-Reviews-Royal_Botanical_Gardens-Peradeniya_Kandy_District_Central_Province.html">TripAdvicor</a></li>
                    <li><a href="https://www.andbeyond.com/experiences/asia/sri-lanka/kandy/peradeniya-botanical-gardens/">andBeyond</a></li>
                    <li><a href="https://www.youtube.com/watch?v=B5q-GSHnuWs">D&B Travels</a></li>
                    <li><a href="https://www.abebooks.com/book-search/title/royal-botanic-gardens-peradeniya/">AbeBooks</a></li>
                </ul>   
        </sidebar>
        <div class="container">
            <span>
                <h1 class="topic">
                    Peradeniya Botanical Garden
                </h1>
            </span>
            <div class="main-body">
                <div class="slideshow-container">

                    <div class="mySlides">
                      <img src="../images/royal-botanical-garden-peradeniya.jpg" style="width:100%">
                      
                    </div>
                    
                    <div class="mySlides">
                      <img src="../images/Peradeniya_garden_1.jpg" style="width:100%">
                      
                    </div>
                    
                    <div class="mySlides">
                      <img src="../images/Peradeniya-Botanical-Garden.jpg" style="width:100%">
                      
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <br>

                    <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    </div>
                    
                </div>
                <p>Royal Botanic Gardens, Peradeniya are about 5.5 km to the west of the city of Kandy in the Central Province of Sri Lanka. In 2016, the garden was visited by 1.2 million locals and 400,000 foreign visitors.[1] It is near the Mahaweli River (The longest river in Sri Lanka).[2] It is renowned for its collection of orchids. The garden includes more than 4000 species of plants, including orchids, spices, medicinal plants and palm trees.[3] Attached to it is the "National Herbarium of Sri Lanka". The total area of the botanical garden is 147 acres (0.59 km2), at 460 meters above sea level, and with a 200-day annual rainfall. It is managed by the Division of National Botanic Gardens of the Department of national botanic gardens.

                </p>
                <h1 class="visit">Visitors</h1>
                <div id="counter">
                    
                </div>
                
                
            </div>
            <section id="section1">
            <h2>Gallery</h2>
                <img src="../images/download1.jpeg" alt="">
                <img src="../images/download2.jpeg" alt="">
                <img src="../images/download3.jpeg" alt="">
                <img src="../images/images.jpeg" alt="">
                <img src="../images/images2.jpeg" alt="">
                <img src="../images/images3.jpeg" alt="">
                <img src="../images/download1.jpeg" alt="">
                <img src="../images/download2.jpeg" alt="">
                <img src="../images/download3.jpeg" alt="">
                <img src="../images/images.jpeg" alt="">
            
          </section>
          
          <section id="section2">
            <h2>Charges</h2>
                <table border="1">
                    <tr>
                        <th>Category</th>
                        <th>Ticket price</th>
                    </tr>
                    <tr>
                        <td>Foreign adults (Age 12 years and above 12 years)</td>
                        <td>2000LKR (6US$)</td>
                    </tr>
                    <tr>
                        <td>School children & university students</td>
                        <td>1200LKR (3.5US$)</td>
                    </tr>
                    <tr>
                        <td>Foreign children (Age 5 years and between 5 years to 12 years)</td>
                        <td>1000LKR (3US$)</td>
                    </tr>
                    <tr>
                        <td>Foreign infant and toddler (Bellow 5 years)</td>
                        <td>
                            Free entry
                        </td>
                    </tr>
                    <tr>
                        <td>Local adults (Age 12 years and above 12 years)</td>
                        <td>100LKR</td>
                    </tr>
                    <tr>
                        <td>Local children (Age 5 years and between 5 years to 12 years)</td>
                        <td>20LKR</td>
                    </tr>
                    <tr>
                        <td>Local infant and toddler (Bellow 5 years)</td>
                        <td>Free entry</td>
                    </tr>
                    <tr>
                        <td>Local Adults over the age of sixty (60) on producing national identity card</td>
                        <td>20LKR</td>
                    </tr>
                </table>
          </section>
          
          <section id="section3">
            
            <h2>Bookings</h2>
            <div class="section3-contain">
            <div class="btns">
                    <button type="button" id="form1Btn">Place Booking</button>
               
                    <button type="button" id="form2Btn">Update Booking</button>
               
                    <button type="button" id="form3Btn">Cancel Booking</button>
               
            </div>
            <div >
                <form action="../php/booking.php" method="post" id="form1" class="forms"> 
                    <input type="text" id="nic" name="nic" placeholder="NIC number..">
                    <input type="text" id="fname" name="firstname" placeholder="Your first name..">
            
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                
                    <select id="citizen" name="citizenship" placeholder="Citizenship">
                    <option value="foreign">Foriegn</option>
                    <option value="local">Local</option>
                    
                    </select>
                    <select id="category" name="category" placeholder="Category">
                        <option value="adult">Adult</option>
                        <option value="toddler">Infant and toddler</option>
                        <option value="child">Child</option>
                        <option value="student">Student</option>
                        
                    </select>
                    
                    <input type="date" id="bdate" name="bdate" placeholder="Booking Date..">
                    <input type="text" id="noBooking" name="no_booking" placeholder="Number of Bookings..">
                
                    <input type="submit" name="submit" value="Place Booking">
                
                </form>

                <form action="../php/update.php" method="post" id="form2" class="forms" >
                    <input type="text" id="nic" name="nic" placeholder="NIC number..">
                    <input type="text" id="fname" name="firstname" placeholder="Your first name..">
            
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                
                    <select id="citizen" name="citizenship" placeholder="Citizenship">
                    <option value="foreign">Foriegn</option>
                    <option value="local">Local</option>
                    
                    </select>
                    <select id="category" name="category" placeholder="Category">
                        <option value="adult">Adult</option>
                        <option value="toddler">Infant and toddler</option>
                        <option value="child">Child</option>
                        <option value="student">Student</option>
                        
                    </select>
                    
                    <input type="date" id="bdate" name="bdate" placeholder="Booking Date..">
                    <input type="text" id="noBooking" name="no_booking" placeholder="Number of Bookings..">
                
                    <input type="submit" name="submit" value="Update Booking">
                </form>

                <form action="../php/cancel.php" method="post" id="form3" class="forms" >
                    <input type="text" id="nic" name="nic" placeholder="NIC number..">
                    
                    <input type="date" id="bdate" name="bdate" placeholder="Booking Date..">
                    <input type="text" id="noBooking" name="no_booking" placeholder="Number of Bookings..">
                
                    <input type="submit" name="submit" value="Cancel Booking">
                </form>
            </div>
            </div>
          </section>

          <!-- footer -->
            <footer>
                <div class="footer-content">
                    <h3>Contact Info</h3>
                    <ul class="f-menu">
                        <li><h2><i class="fa fa-map-marker" aria-hidden="true"></i>Address</h2></li>
                        <li>P.O.14,<br>Peradeniya,<br>Sri Lanka.<br>20400</li>
                    </ul>
                    <ul>
                        <li><h2><i class="fa fa-phone" aria-hidden="true"></i>Phone</h2></li>
                        <li>081-2 388 088</li>
                    </ul>
                    <ul>
                        <li><h2><i class="fa fa-envelope" aria-hidden="true"></i>Email</h2></li>
                        <li>deptnbg@gmail.com</li>
                    </ul>
                    
                    <ul class="socials">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/accounts/login/"><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>

        <!-- ############## php fuction to validate footer contact form input data #############-->
                <?php

                    include '../php/config.php';
                    $errors = [];
                    $name = $email = $message = "";

                    function sanitize_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Validate and sanitize name
                        if (empty($_POST["name"])) {
                            $errors["name"] = "Name is required";
                        } else {
                            $name = sanitize_input($_POST["name"]);
                            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                                $errors["name"] = "Only letters and spaces are allowed";
                            }
                            else{
                                if(isset($_POST['name'])){

                                    $name = $_POST['name'];
                                
                                }else{
                                     $name = " John - This is our default name";
                                
                                } 
                            }
                        }

                        // Validate and sanitize email
                        if (empty($_POST["email"])) {
                            $errors["email"] = "Email is required";
                        } else {
                            $email = sanitize_input($_POST["email"]);
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $errors["email"] = "Invalid email format";
                            }
                            else{
                                if(isset($_POST['email'])){

                                    $email = $_POST['email'];
                                
                                }else{
                                
                                    $email = " John@gmail.com - This is our default email";
                                
                                } 
                            }
                        }

                        // Validate and sanitize message
                        if (empty($_POST["message"])) {
                            $errors["message"] = "Message is required";
                        } else {
                            $message = sanitize_input($_POST["message"]);
                            
                        }
                        if(isset($_POST['message'])){

                            $message = $_POST['message'];
                        
                        }else{
                        
                            $message = "  This is our default message";
                        
                        } 
                           

                            // Insert data into the table
                            $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";

                            if ($connection->query($sql) === FALSE){
                                echo "Error: " . $sql . "<br>" . $connection->error;
                            }

                            $connection->close();
                        }
                    
                    ?>

                    <!-- ############### end of the php validation function ###############-->

                        <div class="form">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>">
                                <span class="error"><?php echo isset($errors["name"]) ? $errors["name"] : ""; ?></span>

                                <br><br>
                                <input type="text" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
                                <span class="error"><?php echo isset($errors["email"]) ? $errors["email"] : ""; ?></span>

                                <br><br>
                                <textarea name="message" id="the-textarea" maxlength="300" placeholder="Message" autofocus><?php echo $message; ?></textarea>
                                <span class="error"><?php echo isset($errors["message"]) ? $errors["message"] : ""; ?></span>

                                <br><br>
                                <div id="the-count">
                                    <span id="current"></span>
                                </div>
                                <input type="submit" value="Submit" name="submit" class="btnn">
                            </form>
                        </div>
                </div>
                
                  
                <div class="footer-bottom">
                    <p>copyright &copy; H.L.S.S.Liyanage  </p>
                </div>
            
            </footer>

            <!-- end of footer -->
        </div>

    </div>

<!-- ################## java scrip functions ####################    -->
    <script>

//---------------javaScript function to get form
document.addEventListener("DOMContentLoaded", function() {
    const form1Btn = document.getElementById("form1Btn");
    const form2Btn = document.getElementById("form2Btn");
    const form3Btn = document.getElementById("form3Btn");

    const form1 = document.getElementById("form1");
    const form2 = document.getElementById("form2");
    const form3 = document.getElementById("form3");

    // Show Form 1 initially
    form1.classList.add("visible");

    form1Btn.addEventListener("click", function() {
        form1.classList.add("visible");
        form2.classList.remove("visible");
        form3.classList.remove("visible");
    });

    form2Btn.addEventListener("click", function() {
        form1.classList.remove("visible");
        form2.classList.add("visible");
        form3.classList.remove("visible");
    });

    form3Btn.addEventListener("click", function() {
        form1.classList.remove("visible");
        form2.classList.remove("visible");
        form3.classList.add("visible");
    });
});
// ------------------------end of the form function

//--------------------start function to open login page
        function openWin(){
            window.open("login.php");
        }

//--------------end function to open login page

//--------------start Add smooth scrolling behavior to navigation links
        document.querySelectorAll('nav a').forEach(link => {
          link.addEventListener('click', scrollToSection);
        });
        
        function scrollToSection(event) {
           event.preventDefault();
          
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
            });
          }
        }
//--------------end Add smooth scrolling behavior to navigation links

//--------------start function to show letter count of footer contact form message text area 
        $(document).ready(function() {
                        $('textarea').keyup(function() {
                          let characterCount = $(this).val().length,
                              current = $('#current'),
                              theCount = $('#the-count');
                  
                          current.text(characterCount);
                  
                          /*This isn't entirely necessary, just playing around*/
                          if (characterCount < 50) {
                            current.css('color', '#696969');
                          }
                          if (characterCount >=50 && characterCount < 100) {
                            current.css('color', '#808080');
                          }
                          if (characterCount >=100 && characterCount < 200) {
                            current.css('color', 'white');
                          }

                  
                          if (characterCount >= 200) {
                            current.css('color', 'yellow');
                            theCount.css('font-weight', 'bold');
                          } else {
                            maximum.css('color', '#666');
                            theCount.css('font-weight', 'normal');
                          }
                        });
                      });
                      var textWrapper = document.querySelector('.topic');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

//--------------end function to show letter count of footer contact form message text area

//------------ main topic animation
            anime.timeline({loop: true})
            .add({
                targets: '.topic .letter',
                scale: [4,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70*i
            }).add({
                targets: '.topic',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
//------------- main topic animation - end of the function --------------------------------

        </script>

 <!-- ########## end of javascript functions ########## -->
</body>
</html>