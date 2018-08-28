<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>DRIVER</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    
    <!--CUSTOM STYLE -->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!--END HEAD SECTION -->
<body>  
     <div class="loader"></div>
 
     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"> <img src="/images/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/index.php/Welcome/index">HOME</a></li>
                    <li><a href="/index.php/Welcome/about">ABOUT</a></li>
                    <li><a href="/index.php/Welcome/booking">BOOK</a></li>
                    <li><a href="/index.php/Welcome/Service">SERVICES</a></li>
                     <li><a href="/index.php/Welcome/pricing">PRICING</a></li>
                    <li><a href="/index.php/Welcome/founder">FOUNDERS</a></li>
                    <li><a href="/index.php/Welcome/contact">CONTACT</a></li>
                    <?php session_start();?>
                    <?php if($_SESSION['userData']){ ?>
0                       <li><a>Hello <?php echo $_SESSION['userData']['Name']?>!</a></li>
                        <li><a href="/index.php/LoginController/logout">LOGOUT</a></li>
                    <?php }else{ ?>
                    <li><a href="/index.php/LoginController/showloginform">LOGIN</a></li>
                    <li><a href="/index.php/RegistrationController/showregistrationform">REGISTRATION</a></li>
                    <?php } ?>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
     <!-- HEADER SECTION -->
  <div id="header-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <h1><strong>DRIVER ON CALL</strong>          
                     
                    </h1>
                     <br /> <br /> <br />
                    <h2> GO LIVE </h2>
                     <br />
                 <h3>  EXPLORE<a href="#about-section">  <i class="fa fa-flask down-icon"></i> </a> AWESOME </h3>
                    <br /><br />
                </div>
            </div>

           
        </div>
       
    </div> 
      <!--END HEADER SECTION -->
     <!-- BASIC INFO SECTION -->
   <div id="basic-info">
       <div class="container">
      
                <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " >
                    <h1>WELCOME GUEST..WE ARE ALWAYS AVALIABLE FOR U!!!!</h1>
                    <h4>
                       Book My Driver  is an indian multinational online transportation network company headquartered in india ,Faridabad. It develops, markets and operates the MyDriver app, which allows consumers with smartphones to submit a trip request which is then routed to drivers who use their own cars. As of April 12, 2016, the service was available in over 60 countries and 404 cities worldwide.Since its launch, several other companies have copied its business model, a trend that has come to be referred to as "driverification".
                    It's  pricing is similar to that of metered taxis, although all hiring and payment is handled exclusively through Mydriver and not with the driver personally. In some cities, if the car is travelling at a speed greater than 11 mph (18 km/h), the price is calculated on a distance basis; otherwise, the price is calculated on a time basis. At the end of a ride, the complete fare is automatically billed to the customer's credit card.MyDriver has said its prices are the premium that the customers pay for a cab service that is not only reliable, but also punctual and comfortable. It began allowing drivers to place signs in their windows stating that they can accept tips.The legality of MyDriver has been challenged by governments and taxi companies, who allege that its use of drivers who are not licensed to drive taxicabs is unsafe and illegal.
                         
                    </h4>
                </div>
            </div>
           <div class="row main-low-margin text-center">
                <div class="col-md-4 col-sm-6" >
                        <div class="text-center">
                           <img src="/images/variant.png" height="100px"; width="100px";>
                            <h4>CAR VARIANT</h4>
                            <p>
                                Avail BookMyDrivers's services and experience a comfortable ride to your desired destination.All you ned to do is book our professional and reliable drriver who will serve you at your convenient time.Our professional drivers are skilled to drive any car,be it automatic or manual.  
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6"  >
                        <div class="text-center">
                            <i class="fa fa-comments fa-5x color-green"></i>
                            <h4>24x7 Support</h4>
                            <p>
                                The service BookMyDriver is 24 hours & 7days supported.  
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6" >
                        <div class="text-center">
                             <img class="img-circle" style="height:100px" src="/images/hand.jpg" alt="">
                            <h4>BECOME PARTNER</h4>
                            <p>
                               Come to join our team of professionals passionate to make our roads safer!!
                            </p>
                        </div>
                    </div>
           </div>
           <div id="basic-info"><div class="container">

                 <div class="row main-top-margin text-center">
             
                <div class="col-md-12 col-sm-12  text-justify" >
                    <h3> <center>WHY WE ARE DIFFERENT??</center></h3>
                    <p><strong>
                         We are everywhere business takes you.A relentless focus on building the most qualifies ,high-performing customer-focused team.Strong testimonials and references from satisfied clients representing top brands across industries.Foxbusiness 1 commitment to long-term client relationships based on successfull, seamless implementations.An enterpreneurial company culture that thrives on delighting customers.We continually measure performance for ongoing laerning and program improvements.Unlike  companies that use independent contractors ,our drivers are employed by <b><i>DRIVER ON CALL-</i></b>  unique approach that reduces client risk.

                    </strong></p>
            
                </div>
                     </div>
                    <div class="row main-low-margin text-center">
              
             
                <div class="col-md-8 col-sm-8   text-justify" >
                    <h3> <center>DRIVERS</center></h3>
                    <p>
                        Book My Driver  is an indian multinational online transportation network company headquartered in india ,Faridabad. It develops, markets and operates the MyDriver app, which allows consumers with smartphones to submit a trip request which is then routed to drivers who use their own cars. As of April 12, 2016, the service was available in over 60 countries and 404 cities worldwide.Since its launch, several other companies have copied its business model, a trend that has come to be referred to as "driverification".
                    It's  pricing is similar to that of metered taxis, although all hiring and payment is handled exclusively through Mydriver and not with the driver personally. In some cities, if the car is travelling at a speed greater than 11 mph (18 km/h), the price is calculated on a distance basis; otherwise, the price is calculated on a time basis. At the end of a ride, the complete fare is automatically billed to the customer's credit card.MyDriver has said its prices are the premium that the customers pay for a cab service that is not only reliable, but also punctual and comfortable. It began allowing drivers to place signs in their windows stating that they can accept tips.The legality of MyDriver has been challenged by governments and taxi companies, who allege that its use of drivers who are not licensed to drive taxicabs is unsafe and illegal.
                         
                    </p>
                   
                </div>
                  <div class="col-md-3  " >
                    <img class="img-circle" src="/images/drive22.png" alt="">
                    <h4><strong>A CARING DRIVER!!</strong> </h4>
                    
                        
                    
                    <p>
                       <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
        

                    </p>

                </div>
            </div>
            </div>
   </div>
    <!--END BASIC INFO SECTION -->
      <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
                &copy; 2014 www.bookmydriver.com | All Right Reserved 				
		
            </div>
            
        </div>
       
    </div>  
     <!--END FOOTER SECTION -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
    <script src="assets/js/jquery.js"></script>
    <!-- CORE BOOTSTRAP LIBRARY -->
    <script src="assets/js/bootstrap.min.js"></script>
           <!-- CUSTOM SCRIPT-->
    <script src="assets/js/custom.js"></script>
</body>
</html>
