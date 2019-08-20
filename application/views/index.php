<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siyago Travels|Travel Agent in Sri Lanka</title>
  <link rel="icon" type="image ico" href="asserts/images/logo.png" />  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script type="text/javascript" src="asserts/plugins/javascript.js"></script>
  <link rel="stylesheet" type="text/css" href="asserts/css/style.css">
  <link rel="stylesheet" type="text/css" href="asserts/css/responsive.css">

</head>
<body>

  <div class="super_container">

    <!--Top header-->
    <div class="top_header" style="background-color:#0c0033; color: white">
      <div class="row">
        <div class="col-lg-6" style="padding: 10px 0px 15px 15px; margin-left: 15px;">
          <div class="row">
            <div class="col-lg-6 col-xs-12" >
              <i class="fas fa-envelope" style="color: white"></i> Email : info@siyagotravels.com
            </div>
            <div class="col-lg-6 col-xs-12">
              <i class="fas fa-phone" style="color: white"></i> Hotline : +94 770 000 000
            </div>
          </div>
        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>

    <header class="header">
      <!--header-->
      <div class="container">
        <div class="row">
          <div class="header_container d-flex flex-row align-items-center justify-content-start">

            <!--logo-->
            <div class="logo_container">
                <div class="logo">
                      <div>SIYAGO</div>
                      <div>travel agency</div>
                      <div class="logo_image"><img src="asserts/images/logo.png" alt=""></div>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav">
                <ul class="main_nav_list">
                    <li class="main_nav_item active"><a href="">Home</a></li>
                    <li class="main_nav_item"><a href="about.html">Destinations</a></li>
                    <li class="main_nav_item"><a href="offers.html">Deals</a></li>
                    <li class="main_nav_item"><a href="news.html">Blog</a></li>
                    <li class="main_nav_item"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <!-- Hamburger -->
            <div class="hamburger">
              <i class="fa fa-bars" aria-hidden="true"  onclick="openNav()"></i>
            </div>

          </div>
        </div>
      </div>
    </header>

    <!-- Sidenav -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Home</a>
      <a href="#">Destinations</a>
      <a href="#">Deals</a>
      <a href="#">Blog</a>
      <a href="#">Contact</a>

      <div class="menu_copyright ">pumudijay All rights reserved</div>
    </div>

    <!-- Home -->

   <div class="home">
      <div class="home_background" style="background-image:url(asserts/images/home_0.jpg)"></div>
      <div class="home_content">
        <div class="home_content_inner">
          <div class="home_text_large">discover</div>
          <div class="home_text_small">Discover new worlds</div>
        </div>
      </div>
    </div>


    <!--Form-->
    <div class="booking">
      <div class="booking_background" style="background-image:url(asserts/images/home_1.jpg)">
        <div class="container">
        <div class="row">
        <div class="col">

          <div class="booking_form">
            <!--form-->
            <form >
              <div class="input-group mb-3">
                <select name="country" class="custom-select" style=" height: 50px;border-color: black; border-right: none">
                  <option selected>Tour Country</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Singapore">Singapore</option>
                </select>

                <select name="dates" class="custom-select" style=" height: 50px;border-color: black">
                  <option selected>Tour Duration</option>
                  <option value="3">3 days </option>
                  <option value="4">4 days </option>
                  <option value="5">5 days </option>
                  <option value="6">6 days </option>
                  <option value="7">7 days </option>
                  <option value="8">8 days </option>
                  <option value="9">9 days </option>
                  <option value="10">10 days </option>
                  <option value="11">11 days </option>
                  <option value="12">12 days </option>
                  <option value="15">15 days </option>
                </select>
                <input type="date" class="form-control" placeholder="Travelling Date" style=" height: 50px;border-color: black" data-toggle="tooltip" title="Travelling Date">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Check out</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>
      
    </div>

    <div class="container">
  

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align: center;">Enquire Now</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Place your enquire below and we will get back to you in few minutes
          <form action="/action_page.php" class="needs-validation jumbotron" novalidate>

                <div class="form-group">
                  <label for="uname">Your Name:</label>
                  <input type="text" class="form-control" id="uname" name="uname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="email">Your Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Your Phone:</label>
                  <input type="text" class="form-control" id="number" name="number" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Your Country:</label>
                  <input type="text" class="form-control" id="country" name="country">
                </div>

                <div class="form-group">
                  <label for="text">Your Destination:</label>
                  <input type="text" class="form-control" id="dest" name="dest" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="date">Arrival Date:</label>
                  <input type="date" class="form-control" id="date" name="date" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Adults:</label>
                  <input type="text" class="form-control" id="adults" name="adults" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Children:</label>
                  <input type="text" class="form-control" id="child" name="child">
                </div>

                <div class="form-group">
                  <label for="text">Your Message:</label>
                  <input type="text" class="form-control" id="msg" name="msg">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
    
    <!-- Popular -->
    <div class="popular">
      <div class="container">
        <div class="row">

          <div class="col">
          <div class="section_title text-center">
            <h2>Popular destinations in 2018</h2>
            <div>take a look at these offers</div>
          </div>
        </div>
          
        </div>
        <div class="row">
          <div class="col">
            <div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">
              <!-- Popular Item -->
              <div class="card-deck">
                <div class="card ">
                  <img class="card-img-top" src="asserts/images/popular_1.jfif" alt="Card image">
                  <div class="card-body text-center">
                    <h4 class="card-title">Sri Lanka Tours</h4>
                    <a href="#" class="btn btn-primary">View Package</a>
                  </div>
                </div>
                <div class="card ">
                  <img class="card-img-top" src="asserts/images/popular_2.jfif" alt="Card image">
                  <div class="card-body text-center">
                    <h4 class="card-title">Thailand Tours</h4>
                    <a href="#" class="btn btn-primary">View Package</a>
                  </div>
                </div>
                <div class="card ">
                  <img class="card-img-top" src="asserts/images/popular_3.jfif" alt="Card image">
                  <div class="card-body text-center">
                    <h4 class="card-title">Malaysian Tours</h4>
                    <a href="#" class="btn btn-primary">View Package</a>
                  </div>
                </div>
                <div class="card ">
                  <img class="card-img-top" src="asserts/images/popular_4.jfif" alt="Card image">
                  <div class="card-body text-center">
                    <h4 class="card-title">Maldives Tours</h4>
                    <a href="#" class="btn btn-primary">View Package</a>
                  </div>
                </div> 
              </div>
                

            </div>
          </div>
      </div>
      </div>
    </div>

    <!--About-->
    <div class="about">
      <div class="row">
          <div class="jumbotron about" >
        
            <div class="row" style="padding-left: 50px;">
              <div class="col-lg-6">
                
                <div class="col-xs-12 ">
                  <h2>Who we are?</h2>
                  <p >Welcome to Olanka Travels! We are a dedicated travel destination management company in Sri Lanka. We started off our journey from Sri Lanka in the first place, but over the years, we have expanded our reach to several countries in the World. We have a branch office in Australia and its neighboring countries, a sales office in China and Japan, and partner office in Armenia.</p>

                  <p>We reside in the city of Colombo in Sri Lanka where our Head Office is based. Our aim is to serve the forthcoming travelers to Sri Lanka, India, Maldives, and from all over the world. We strongly believe in providing quality services to our clients and uphold our reputation as the best tour operator company in Sri Lanka.</p>
                </div>
              </div>
              
              <div class="col-lg-6">
                <div class="col-xs-12">
                  <h2>Why Siyago Travels?</h2>
                  <p>A number of people have chosen us as their number one travel destination management company and you will also choose us for the following reasons.</p>
                  <ul class="facilities">
                    <li><span><i class="fas fa-paper-plane"></i>We are one of the top destination management companies in Sri Lanka.</span></li>
                    <li><i class="fas fa-paper-plane"></i>We are one of the leading travel agents in Sri Lanka.</li>
                    <li><i class="fas fa-paper-plane"></i>We are one of the leading tour operators in Sri Lanka.</li>
                    <li><i class="fas fa-paper-plane"></i>We provide custom-made & specialized tours to our clients.</li>
                    <li><i class="fas fa-paper-plane"></i>We offer a complete travel package to travelers and travel agents.</li>
                    <li><i class="fas fa-paper-plane"></i>We are a leading travel agent in Sri Lanka who provides tours and holiday packages to exotic destinations.</li>
                    <li><i class="fas fa-paper-plane"></i>We have a passionate and professional team consisting of 40 representatives who possess extensive knowledge on the Sri Lanka tourism industry.</li>
                    <li><i class="fas fa-paper-plane"></i>We offer 24/7 customer support to our clients.</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
      </div>
    </div>
  
  <!-- Special -->

    <div class="special">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title text-center">
              <h2>Special offers</h2>
              <div>take a look at these offers</div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-group">

        <!--card-->
        <div class="card" style="width:400px">
          <img class="card-img" src="asserts/images/special_1.jpg" alt="Card image" style="width:100%; height:auto;">
          <div class="card-img-overlay">
            <div class="card-body" style="margin-top: 250px;text-align: center; color: white">
              <h4 class="card-text">Visiting</h4>
              <h3 class="card-title">Bangkok</h3>
            </div>
            <a href="#" class=" stretched-link"></a>
          </div>
        </div>

        <!--card-->
        <div class="card" style="width:400px">
          <img class="card-img-top" src="asserts/images/special_2.jpg" alt="Card image" style="width:100%">
          <div class="card-img-overlay">
            <div class="card-body" style="margin-top: 250px;text-align: center;color: white">
              <h4 class="card-text">Culture</h4>
              <h3 class="card-title">India</h3>
            </div>
            <a href="#" class=" stretched-link"></a>
          </div>
        </div>

        <!--card-->
        <div class="card" style="width:400px">
          <img class="card-img-top" src="asserts/images/special_4.jpg" alt="Card image" style="width:100%">
          <div class="card-img-overlay">
            <div class="card-body" style="margin-top: 250px;text-align: center;color:white">
              <h4 class="card-text">Sunbathing</h4>
              <h3 class="card-title">Thailand</h3>
            </div>
            <a href="#" class=" stretched-link"></a>
          </div>
        </div>

        <!--card-->
        <div class="card" style="width:400px">
          <img class="card-img-top" src="asserts/images/special_5.jpg" alt="Card image" style="width:100%">
          <div class="card-img-overlay">
            <div class="card-body" style="margin-top: 250px;text-align: center;color: white">
              <h4 class="card-text">Visiting</h4>
              <h3 class="card-title">France</h3>
            </div>
            <a href="#" class=" stretched-link"></a>
          </div>
        </div>

      </div>      
    </div>

    <!--Contact-->
    <div class="contact">
      <div class="container" style="margin-top: 50px;">
        <div class="row">

          <!--Contact details-->
          <div class="col-md-6">
            <div class="col-xs-12">
              <div class="media border p-3" style=" height:auto;">
            <img src="asserts/images/profilepic.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
              <h4>Palitha Bambarandage <small><i>Travel Consultant</i></small></h4>
              <p>Hi I’m Palitha, I represent Siyago Travels as a Travel Consultant. We are online 24/7 365 days. You can contact me  Whats App, Viber number given below or simply by filling up this form below. Our response time is almost real time. We can give you a tailor made customized tour package with in few minutes.</p>
              <h5>Contact me</h5>
              <div>
                <div>
                   <img src="asserts/images/contact.png" style="height: 40px; width: 70px;"><span style="padding-right: auto;">+94 777000000 </span>
                   <img src="asserts/images/email.png" style="height: 35px; width: 35px;"><span>info@siyagotravels.com</span>
                </div>
                </div>
              </div> 
            </div>
            </div>
          </div>
          
          <!--Contact Form-->
          <div class="col-md-6">
            <div class="col-xs-12">
              <form action="/action_page.php" class="needs-validation jumbotron" novalidate >

                <div class="form-group">
                  <label for="uname">Your Name:</label>
                  <input type="text" class="form-control" id="uname" name="uname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="email">Your Email:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Your Phone:</label>
                  <input type="text" class="form-control" id="number" name="number" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Your Country:</label>
                  <input type="text" class="form-control" id="country" name="country">
                </div>

                <div class="form-group">
                  <label for="text">Your Destination:</label>
                  <input type="text" class="form-control" id="dest" name="dest" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="date">Arrival Date:</label>
                  <input type="date" class="form-control" id="date" name="date" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Adults:</label>
                  <input type="text" class="form-control" id="adults" name="adults" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                  <label for="text">Children:</label>
                  <input type="text" class="form-control" id="child" name="child">
                </div>

                <div class="form-group">
                  <label for="text">Your Message:</label>
                  <input type="text" class="form-control" id="msg" name="msg">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
    
    <!--footer-->
    <div class="footer">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">  
            <div class="col-lg-4 col-xs-12">
              <h5><strong>Siyago Travels</strong></h5>
              <ul>
                <li><a href="">About</a></li>
                <li><a href="">Why Siyago</a></li>
                <li><a href="">Testimonials</a></li>
              </ul>
            </div>
          
            <div class="col-lg-4 col-xs-12">
              <h5><strong>Support</strong></h5>
              <ul>
                <li><a href="">Contact</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Blog</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-xs-12">
              <h5><strong>Tours and Deals</strong></h5>
              <ul>
                <li><a href="">Destinations</a></li>
                <li><a href="">Deals</a></li>
              </ul>
            </div>
         </div>
        </div>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 col-xs-12">
              
              <h5><strong>Social Networks</strong></h5>
              <div>
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              </div>
              <div class="footer_detail">
                Tourist Board License No : TS/TA/1387</br>
                Civil Aviation License No: A-922</br>
                </br>
                No.100<br>
                Athurugiriya
              </div>
            </div>
            <div class="col-lg-6 col-xs-12">
              <img src="asserts/images/logo.png" style="height: 100%; width:100%">
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <!--bottom footer-->
    <div class="bottom_footer">
      pumudijay All rights reserved
    </div>

  </div>   
</body>
</html> 
