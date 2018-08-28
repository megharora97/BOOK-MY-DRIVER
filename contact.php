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
   <title>DRIVER ON CALL</title>
   <style type="text/css">
    .bckgrnd
    {
    background-image:url("/images/drive16.png");
    background-position: center;
    background-size: cover;
    }
    </style>
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
<body class="bckgrnd">   
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
                    <li><a href="/index.php/LoginController/showloginform">LOGIN</a></li>
                    <li><a href="/index.php/RegistrationController/showregistrationform">REGISTRATION</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
     
   <!--CONTACT SECTION -->
    <div id="contact-section">
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 " >
                    <h1>NEED HELP..CONTACT US!!</h1>
                    <h4>
                       When you partner with We Drive, you are still the full business owner of your location. This is not a franchise but a partnership. Individual drivers are also welcome. We will help guide you and give you full access to the latest technology and our internal reservation staff. Including adding you to our website and marketing. You can be up and running right away! Contact us below today to get started. 
                    </h4>
                </div>
            </div>
            <!-- ./ Main Heading-->
            <div class="row main-low-margin">
                <div class="col-md-12  col-sm-12 ">
                    <div class="col-md-6  " >
                        <h3> OUR WORK LOCATION!!</h3>
                        <hr />SECTOR 21<br>
                        NEAR PARK PLAZA <br>
                        MYDRIVER              
                        Call: 9999176891<br />
                        Email: mydriver@gmail.com</h3><br />
                            </p>
                       
                    </div>
                    <div class="col-md-6  " >
                        <h3>DROP US LINE NOW!! </h3>
                        <hr />
                        <form action="/index.php/contactController/processContact" method="post">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">NAME:
                                        <input type="text" class="form-control" required="required" placeholder="Name" name="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">EMAIL:
                                        <input type="text" class="form-control" required="required" placeholder="Email Address" name="Email">
                                    </div>
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-md-6 ">
                                    <div class="form-group">ADDRESS
                                        <input type="text" class="form-control" required="required" placeholder="Address" name="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">MOBILENO:
                                        <input type="text" class="form-control" required="required" placeholder="Mobileno" name="Mobileno">
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">MESSAGE:
                                        <textarea name="Message" id="message" required="required" class="form-control" rows="3"  placeholder="Message" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
             <!-- ./ Row Content-->
             <div class="row ">
                <div class="col-md-12" >
                    <h5>
                      
                   <strong>Important  Note : CUSTOMERS ARE REQUESTED TO SUBMIT THERE ORIGINAL DOCUMENTS.. </strong> 
                       
                    </h5>
                </div>
            </div>
        </div>
    </div>  
    
    <div id="footer">
        <div class="container">
            <div class="row ">
                &copy;bookmydriver.com | All Right Reserved 				
		
            </div>
            
        </div>
       
    </div>  
    
</body>
</html>
