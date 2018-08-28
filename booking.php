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
    <style type="text/css">
    .bckgrnd
    {
    background-image:url("/images/car4.jpg");
    background-position: center;
    background-size: cover;
    }
    .p
    { text-align:center;
    color:green;
    text-align: center;font-style: italic;
    text-decoration:none; }
    .q
    { text-align:center;
    color:orange;font-weight:bold;
    text-align: center;font-style: italic;
    text-decoration:none;}
    </style>

    
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
     <!--PRETTY PHOTO MAIN STYLE (REQUIRED FOR PORFOLIO)-->
    <link href="/assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!--END HEAD SECTION -->
<body class="bckgrnd">   
     <!-- NAV SECTION -->
     <h1 id="bckgrnd">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><img src="/images/logo.png"></a>
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
                    <li><a href="/index.php/LoginController/showloginform">LOGIN</a></li>
                    <li><a href="/index.php/RegistrationController/showregistrationform">REGISTRATION</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
     
    <!--PORTFOLIO SECTION -->
    <div id="porfolio-section" >
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " >
                
                
                       
                    </h4>
                <center><h1 class="q">BOOKING</h1><h2><div class="p"><h2 class="p"><h3 class="q"><b>BOOK -</b></h3> Book a ride with just a few taps. We’ll even remember your past destinations, forms of payment and driver preference.<br><h4 class="q"><b>
UPCOMING RIDES -</b></h4> View all of your upcoming and past reservations. Whether you booked them here, or on our website<br><h5 class="q"><b>
COMMUNICATE WITH YOUR DRIVER-</b></h5> View your driver’s info and contact him/her direct by text or phone. View your driver’s picture. Receive live notifications about your driver status and track him/her on a map.<br></h2><h3 class="q">
    <?=$error?>
<form action="/index.php/BookingController/processBooking" method="POST"><p><br>
<table>
<tr><td align="left">PICKUP DATE:</td><td align="left"><input type="date" name="pickup_date" required ></td></tr>
<tr><td align="left">PICKUP TIME:</td><td align="left"><input type="time" name="pickup_time" required ></td></tr>
<tr><td align="left">PICKUP PLACE:</td><td align="left"><select id="pickup_place" name="pickup_place" ><option value="selected">
    ----------SELECT ONE---------</option><option value="office">NOIDA</option><option value="town_hall">DELHI</option>
<option value="telepathy">GURGAON!!</option></select></td></tr>
<tr><td align="left"> DROP OFF PLACE:</td><td align="left"><input type="text" name="dropoff_place" required list="destination">
<datalist id="destination"><option value="AIRPORT"><option value="BEACH">   <option value="FRED FLINSTONE HOUSE"></datalist></td></tr>
<tr><td align="left"> SPECIAL INSTRUCTION:</td><td align="left"> <textarea name="specialinstr" maxlength="500"></textarea></td></tr>
<tr><td colspan=2><button type="submit" class="btn btn-primary">SUBMIT BOOKING</button></td> </tr>
</table>
</form></h3>
<h6 class="p">All drivers are certified by passing driving, drug and criminal background checks! And we can drive personal or rental vehicles.</h6>  
<h7 class="p">Note: If you are making a booking after 9:00 PM online, kindly do not make a booking for earlier than 11:00 AM for the next day. Drivers subject to availability.

Please fill this form to make an online booking, and get your Booking ID in less than a minute.
</h7>          
            
   
 
    <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
                &copy; bookmydriver.com | All Right Reserved 				
		</h1>
            </div></div>
            
       
</body>
</html>
