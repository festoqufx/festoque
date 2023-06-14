<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
  
  // require a name from user
  if(trim($_POST['contactName']) === '') {
    $nameError =  'Forgot your name!'; 
    $hasError = true;
  } else {
    $name = trim($_POST['contactName']);
  }
  
  // need valid email
  if(trim($_POST['email']) === '')  {
    $emailError = 'Forgot to enter in your e-mail address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }
    
  // we need at least some content
  if(trim($_POST['comments']) === '') {
    $commentError = 'You forgot to enter a message!';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['comments']));
    } else {
      $comments = trim($_POST['comments']);
    }
  }
    
  // upon no failure errors let's email now!
  if(!isset($hasError)) {
    
    $emailTo = 'ferdinand.estoque@yahoo.com';

    $subject = 'Submitted message from '.$name;
    $sendCopy = trim($_POST['sendCopy']);
    $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
    $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

    mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
    $emailSent = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Hi, I am Ferdinand Belleza Estoque a.k.a. Black Raven, I design and build functional websites and this is my website portfolio." />
      <meta name="keywords" content="Ferdinand Estoque, Ferdinand Belleza Estoque, Estoque, Black Raven Estoque, Raven Estoque" />
      <meta name="author" content="Ferdinand Estoque" />
      <title>Ferdinand Estoque | Web Design &amp; Development</title>
      <link rel="icon" type="image/png" href="img/estoque1.png">
      <link href='https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href='css/bootstrap.min.css'/>  
      <link rel="stylesheet" type="text/css" href="css/font-awesome-animation.min.css"/>
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
      <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen"/>
      <link rel="stylesheet" type="text/css" href="css/animate.css"/>
      <link rel="stylesheet" type="text/css" href="css/mouse.css"/>
      <link rel="stylesheet" type="text/css" href="css/circleHoverEffect.css"/>
      <link rel="stylesheet" type="text/css" href="css/set2.css"/>
      <link rel="stylesheet" type="text/css" href="css/circular.css"/>
      <link rel="stylesheet" type="text/css" href="css/icon.css" />
      <link rel="stylesheet" type="text/css" href="css/3dgallery.css" />
      <link rel="stylesheet" type="text/css" href="css/timeline.css" />
      <link rel="stylesheet" type="text/css" href="css/contact.css" />
      <link rel="stylesheet" type="text/css" href="css/rotatingword1.css" />
      <link rel="stylesheet" type="text/css" href="css/superbox.css" />
      <!--[if IE]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- animation -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-64942396-1', 'auto');
        ga('send', 'pageview');
      </script>
      <script>
      	 $.stellar();
      </script>
      
    </head>
    <body>
    
  <!--   <div id="loader"></div>
    <script>
        $(window).load(function(){
            $("#loader").fadeOut("slow");
        });
    </script> -->
    
    <video autoplay="" id="bgvid" loop="">
           <source src="bg.webm" type="video/webm">
    </video>
    <section id="home" data-speed="10" data-type="background">
      <header id="top" class="wow bounceInDown animated" data-wow-delay="0.9s">
               
          <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand " href="http://ferdinandestoque.com/" style="display:none;">
                            <img id="logo" class="wow rotateIn flip animated" src="img/logo.png" alt="s2klogoss">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-center" id="bs-example-navbar-collapse-1">
                        <div class="menu text-center">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#home">HOME</a>
                                </li>
                                <li>
                                    <a href="#about">ABOUT</a>
                                </li>
                                <li>
                                    <a href="#mywork">EXPERIENCES</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <a class="navbar-brand " href="http://ferdinandestoque.com/">
                                    <!-- <img src="http://placehold.it/150x50&amp;text=Logo" alt=""> -->
                                    <img id="logo" class="wow rotateIn flip animated" data-wow-duration="1s" data-wow-delay="1.7s"  style="visibility: visible;" src="img/logo.png" alt="s2klogoss">
                                </a>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#gallery">GALLERY</a>
                                </li>
                                <li>
                                    <a href="#interest">INTEREST</a>
                                </li>
                                <li>
                                    <a href="#contact">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </header>


        <div class="wrapper">       
            <section id="banner" data-stellar-background-ratio="0.5">
                <div id="large-header" class="large-header">
                    <!-- canvas -->
                    <canvas id="demo-canvas"></canvas>
                    <!-- canvas -->
                    <div id="home_bg" class="container">
                        <h1>FERDINAND ESTOQUE
                          </h1>
                        <p class="h1-sub">
                            <br>
                            <span class="aka">a.k.a.</span>
                            <br><span class="nickName">BlacK RaveN</span>
                        </p>
                      <section class="cd-intro">
                        <h1 class="cd-headline letters rotate-2">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">&nbsp;&nbsp;WEB&nbsp;DESIGN</b>
                                <b>&nbsp;WEB&nbsp;DEVELOPMENT</b>
                                <b>&nbsp;WEB&nbsp;MAINTENANCE</b>
                                <b>&nbsp;WEB&nbsp;CONSULTING</b>
                                <b>3D&nbsp;&AMP;&nbsp;MOTION&nbsp;GRAPHICS</b>
                                <b>&nbsp;&nbsp;&nbsp;ILLUSTRATION</b>
                                <b>&nbsp;&nbsp;PRINT&nbsp;DESIGN</b>
                                <b>&nbsp;&nbsp;&nbsp;BRANDING</b>
                                <b>&nbsp;&nbsp;&nbsp;REBRANDING</b>
                                <b>&nbsp;RESPONSIVE&nbsp;DEVELOPMENT</b>
                            </span>
                        </h1>
                    </section> 
                        <img id="imgIcon" src="img/icon-banner1.png" alt="website logo">
                        <div class="uls">
                            <div class="start section fp-section active animate" data-anchor="start">
                                <a href="#about"> <span class="icon-scroll"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    <!-- canvas -->
    <section id="about">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
                  <h1 class="alignCenterh1 wow rubberBand animated" data-wow-offset="100" style="visibility: visible;">ABOUT</h1>
                  <div class="hrline"></div>

                  <br>
                  <br>
                  <br>

              <div id="profile">
                  <ul class="ch-grid">
                      <li>
                          <div class="ch-item ch-img-2">
                              <div class="ch-info-wrap">
                                  <div class="ch-info">
                                      <div class="ch-info-front ch-img-2"></div>
                                      <div class="ch-info-back">
                                          <h3>ME</h3>
                                          <!--  <p>a.k.a<a href="#">BlacK RaveN</a></p> -->
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                   
                  <div id="aboutMe">
                      <div id="ptextLeft" class="wow fadeInLeft animated" data-wow-offset="100" data-wow-delay="0.4s" style="visibility: visible;">
                          <p>Hi, I am Black Raven, BS InfoTech graduate. I live and a freelancer in Cavite Philippines. I offer Creative Direction for online media as well as Screen &amp; Interface design. I tell visual stories based on a strong idea in an aesthetic context. I understand design in general as philosophical handcraft. I believe in the magic of details. Love, light and rhythm.
                          </p>
                      </div>
                      <div id="ptextRight" class="wow fadeInRight animated" data-wow-offset="100" data-wow-delay="0.4s" style="visibility: visible;">
                          <!-- <p>Black RaveN is a Philippine based designer specialising in Web/UI Design, Graphic and 3D Designer, Branding, Illustration &amp; Photography. He has a worldwide client roster and his work is regulary featured in design related publications. He is also a regular speaker at design/tech conferences.
                          </p> -->
                          <p>The crossover between design and programming has always been of interest to me, I've been lucky enough to work alongside some talented teams on a number of high profile websites. I have a wide range of skills that include design, front and back-end development using open source technologies, deployment and performance tuning.</p>
                      </div>
                  </div>
              </div>
       
              <span class="clearfix"></span>
              <div id="Skills">
                  <h1 class="alignCenterh1 wow rubberBand animated" data-wow-offset="100" style="visibility: visible;">SKILLS</h1>
                  <div class="hrline"></div>
                  <br>
                  <br>
                  <br>
                  <br><br>
                  <div class="container">
                             <div class="row">
                                  
                                  <h3 class="centerh3">PROGRAMMING</h3>                           
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="98">
                                          <span class="skillbar-title">HTML5</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="96">
                                          <span class="skillbar-title" >CSS3</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="83">
                                          <span class="skillbar-title">JAVASCRIPT</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="88">
                                          <span class="skillbar-title">JQUERY</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="83">
                                          <span class="skillbar-title">REACT</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                   </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="75">
                                          <span class="skillbar-title">PHP</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="76">
                                          <span class="skillbar-title" >SQL</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title">MVC</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="84">
                                          <span class="skillbar-title">SEO</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                      <!--   <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title" >VUE</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div> -->

                                        
                                        
                                        <!-- End Skill Bar -->
                                  </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">XML</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="93">
                                          <span class="skillbar-title" >JSON</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title">AJAX</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title" >SASS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->
                                        <div class="skillbar" data-percent="78">
                                          <span class="skillbar-title">NODE.JS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <!-- End Skill Bar -->

                                  </div>
                            </div>                     
                             <div class="row">
                                  <h3 class="centerh3">FRAMEWORKS</h3>                            
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="98">
                                          <span class="skillbar-title">TWITTER BOOTSTRAP</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="78">
                                          <span class="skillbar-title">LARAVEL</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                   </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">ZURB FOUNDATION</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                       <!--  <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title">ANGULAR</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div> -->
                                        <div class="skillbar" data-percent="88">
                                          <span class="skillbar-title">GENESIS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                       </div>

                                  </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title">MATERIAL UI</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="98">
                                          <span class="skillbar-title">INITIALIZR</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                            </div>
                            <div class="row">
                                    <h3 class="centerh3">SOFTWARE APPLICATIONS</h3>                            
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="98">
                                          <span class="skillbar-title">PHOTOSHOP</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="90">
                                          <span class="skillbar-title">FIREWORKS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">MUSE</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title">AFTER EFFECTS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title">CINEMA 4D</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>  
                                         <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">FIGMA</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>                                                             
                                   </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="90">
                                          <span class="skillbar-title">ILLUSTRATOR</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="93">
                                          <span class="skillbar-title">EDGE ANIMATE</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="90">
                                          <span class="skillbar-title">INDESIGN</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title">SONY VEGAS PRO</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="92">
                                          <span class="skillbar-title">SWISH MAX</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                         
                                   </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">DREAMWEAVER</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="82">
                                          <span class="skillbar-title">FLASH PRO</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="87">
                                          <span class="skillbar-title">PREMIERE PRO</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="90">
                                          <span class="skillbar-title">BALSAMIQ</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                         <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">PRO CREATE</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div> 
                                        <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">XD</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>    
                                                           
                                  </div>
                             </div>
                             <div class="row">
                                  <h3 class="centerh3">CMS</h3>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="95">
                                          <span class="skillbar-title">WORDPRESS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                                  <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title">SITEFINITY</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="90">
                                          <span class="skillbar-title">SHAREPOINT</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title">AEM</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                            </div>
                            <div class="row">
                              <h3 class="centerh3">VERSION CONTROL SYSTEMS</h3>
                               <div class="col-md-4"> 
                                    <div class="skillbar" data-percent="95">
                                      <span class="skillbar-title">GIT</span>
                                      <p class="skillbar-bar"></p>
                                      <span class="skill-bar-percent"></span>
                                    </div>
                              </div>
                              <div class="col-md-4"> 
                                    <div class="skillbar" data-percent="85">
                                      <span class="skillbar-title">TFS</span>
                                      <p class="skillbar-bar"></p>
                                      <span class="skill-bar-percent"></span>
                                    </div>
                              </div>
                               <div class="col-md-4"> 
                                    <div class="skillbar" data-percent="80">
                                      <span class="skillbar-title">SOURCETREE</span>
                                      <p class="skillbar-bar"></p>
                                      <span class="skill-bar-percent"></span>
                                    </div>
                              </div>
                        </div>

                            <div class="row">
                                   <h3 class="centerh3">OTHERS</h3>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="98">
                                          <span class="skillbar-title">GOOGLE ANALYTYCS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title">GOOGLE WEB MASTERTOOL</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="87">
                                          <span class="skillbar-title">GOOGLE ADSENSE</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                            </div>
                </div>
             </div>

        </div>

    </section>
<div class="triangle-down"></div>

   


	
    <section id="mywork" data-stellar-background-ratio="0.9">
        <div class="container">
            <br>
            <br>
            <h1 class="alignCenterh2 wow fadeInDown animated" data-wow-offset="100" style="visibility: visible;">WORK EXPERIENCES</h1>
            <br>
            <br>
            <br>
            <ul class="timeline">
              <li>
                    <div class="timeline-badge6 wow fadeInUp animated" data-wow-offset="100" data-wow-delay="0s"></div>
                    <div class="timeline-panel wow fadeInDown animated" data-wow-offset="100" data-wow-delay="0s">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">VISA</h4>
                            <p class="position">DIGITAL CONTENT MANAGER/Implementation Analyst</p>
                        </div>
                        <span class="date1">JULY 2016</span>
                        <div class="timeline-body">
                            <p class="software">AEM, Visual Studio, Bastion Host, Bootstrap, HTML5, CSS, JS, SharePoint</p>
                        </div>
                        <span class="job">Fulltime</span>
                    </div>
              </li>
              <li class="timeline-inverted wow fadeInUp animated" data-wow-offset="100" data-wow-delay="0.3s">
                    <div class="timeline-badge5 warning"></div>
                    <div class="timeline-panel wow fadeInDown animated" data-wow-offset="100" data-wow-delay="0.3s">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">QUINN DATA FACILITIES, INC.</h4>
                            <p class="position">BACK-END WEB DEVELOPER</p>
                        </div>
                        <span class="date2">OCT 2015 - JULY 2016</span>

                        <div class="timeline-body">
                            <p class="software">Laravel, MySQL, MsSQL, Postgres, Wordpress, Bootstrap, HTML5, CSS, JS</p>
                            <span class="job">Fulltime</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge1 wow fadeInUp animated" data-wow-offset="100" data-wow-delay="0s"></div>
                    <div class="timeline-panel wow fadeInDown animated" data-wow-offset="100" data-wow-delay="0s">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">SMART COMMUNICATION, INC.</h4>
                            <p class="position">IT CONSULTANT/FRONT-END WEB DEVELOPER</p>
                        </div>
                        <span class="date1">MAY 2015 - SEPT 2015</span>
                        <div class="timeline-body">
                            <p class="software">Sitefinity, ASP.NET, C#, Bootstrap, HTML5, CSS, JS, JQUERY, SEO</p>
                        </div>
                        <span class="job">Contractual</span>
                    </div>
                </li>
                <li class="timeline-inverted wow fadeInUp animated" data-wow-offset="100" data-wow-delay="0.3s">
                    <div class="timeline-badge2 warning"></div>
                    <div class="timeline-panel wow fadeInDown animated" data-wow-offset="100" data-wow-delay="0.3s">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">NASDAQ</h4>
                            <p class="position">WEB DESIGNER DEVELOPER</p>
                        </div>
                        <span class="date2">OCT 2014 - APR 2015</span>
                        <div class="timeline-body">
                            <p class="software">Phoenix, Web360, Bootstrap, Foundation, ColdFusion, HTML5, XSLT, CSS, JS</p>
                            <span class="job">Contractual</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge3 wow fadeInUp animated" data-wow-offset="100" data-wow-delay="0.6s"></div>
                    <div class="timeline-panel wow fadeInDown animated" data-wow-offset="100" data-wow-delay="0.6s">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">CROSSPOWER PHILS, INC.</h4>
                            <p class="position">MULTIMEDIA WEB DESIGNER</p>
                        </div>
                        <span class="date1">SEPT 2013 - OCT 2014</span>
                        <div class="timeline-body">
                            <p class="software">Wordpress, Genesis, Initializr, PHP/Mysql, Bootstrap, HTML5, JS, CSS</p>
                            <span class="job">Project based</span>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted wow fadeInUp animated" data-wow-offset="100" data-wow-delay="0.9s">
                    <div class="timeline-badge4 warning"></div>
                    <div class="timeline-panel wow fadeInDown animated" data-wow-offset="100" data-wow-delay="0.9s">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">SPI GLOBAL</h4>
                            <p class="position">SENIOR WEB CONTENT EDITOR/ANALYST</p>
                        </div>
                        <span class="date2">FEB 2008 - APR 2013</span>
                        <div class="timeline-body">
                            <p class="software">Arbortext, Contenta DB, SGML, DTD, DHTML, XHTML, XML, CSS, JIRA, Citrix</p>
                            <span class="job">Fulltime</span>
                        </div>
                    </div>
                </li>
            </ul>
            <br>
            <br>
            <br>
            <br>
            <br>

         <div class="clearfix"></div>
        </div>
    </section>
    <section id="gallery">
            <br>
            <div class="container">
                <h1 class="alignCenterh1 wow rubberBand animated" data-wow-offset="100" style="visibility: visible;">SAMPLE WORKS</h1>
                <div class="hrline"></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div id="dg-container" class="dg-container">
                    <div class="dg-wrapper">
                        <a href="#">
                            <img src="img/1.jpg" alt="image01">
                            <div></div>
                        </a>
                        <a href="http://www.theguthriegroup.co.uk/">
                            <img src="img/2.jpg" alt="image02">
                            <div></div>
                        </a>
                        <a href="http://www.pkimt.com/">
                            <img src="img/3.jpg" alt="image03">
                            <div></div>
                        </a>
                        <a href="http://pldt.com/">
                            <img src="img/4.jpg" alt="image04">
                            <div></div>
                        </a>
                        <a href="http://qlaseminar.com/">
                            <img src="img/5.jpg" alt="image05">
                            <div></div>
                        </a>
                        <a href="http://smart.com.ph/corporate">
                            <img src="img/6.jpg" alt="image06">
                            <div></div>
                        </a>
                        <a href="http://suncellular.com.ph/">
                            <img src="img/7.jpg" alt="image07">
                            <div></div>
                        </a>
                        <a href="http://tntph.com/">
                            <img src="img/8.jpg" alt="image08">
                            <div></div>
                        </a>
                        <a href="http://askthe50billiondollarman.com/">
                            <img src="img/9.jpg" alt="image09">
                            <div></div>
                        </a>
                        <a href="#">
                            <img src="img/10.jpg" alt="image10">
                            <div></div>
                        </a>
                        <a href="http://smart.com.ph/infinity">
                            <img src="img/11.jpg" alt="image11">
                            <div></div>
                        </a>
                        <a href="http://financial-advise.net/ ">
                            <img src="img/12.jpg" alt="image12">
                            <div></div>
                        </a>
                        <a href="http://ii-tax.com/">
                            <img src="img/13.jpg" alt="image13">
                            <div></div>
                        </a>
	                        <a href="http://tax-takayuki.com/">
                            <img src="img/14.jpg" alt="image14">
                            <div></div>
                        </a>
                    </div>
                    <!--nav>
                        <span class="dg-prev">&lt;</span>
                        <span class="dg-next">&gt;</span>
                    </nav-->
                    <div class="clearfix"></div>
                </div>
                <br>
                <div style="text-align:center" class="trapezoid wow zoomIn animated" data-wow-offset="20" data-wow-delay="1s" style="visibility: visible;">This is where I show my stuff. Expose myself. Put my ego in your hands. Take a look around.</div>
                <div class="divider wow zoomIn animated" data-wow-offset="20" data-wow-delay="1s"></div>
                 <br>
                
            </div> 
        </section>
        <div class="triangle-down"></div>
    <section id="etc" data-stellar-background-ratio="0.5">
        <div class="container">

          <div id="logo1"></div>
         <h2 style="text-align: center; color: white; margin: 48px 0 160px 0;">ANIMATED SVG</h2>


          <div id="gallery_wrapper">

               <div class="MyOtherGallery">
                 <!--   <div>
                     <img src="img/superbox/superbox2-thumb-1.jpg" data-img="img/superbox/superbox2-full-1.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-2.jpg" data-img="img/superbox/superbox2-full-2.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-3.jpg" data-img="img/superbox/superbox2-full-3.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-4.jpg" data-img="img/superbox/superbox2-full-4.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-5.jpg" data-img="img/superbox/superbox2-full-5.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-6.jpg" data-img="img/superbox/superbox2-full-6.jpg" alt="">
                   </div>-->
                   <div>
                     <img src="img/superbox/superbox2-thumb-7.jpg" data-img="img/superbox/superbox2-full-7.jpg" alt="">
                   </div> 
                   <div>
                     <img src="img/superbox/superbox2-thumb-8.jpg" data-img="img/superbox/superbox2-full-8.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-9.jpg" data-img="img/superbox/superbox2-full-9.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-10.jpg" data-img="img/superbox/superbox2-full-10.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-11.jpg" data-img="img/superbox/superbox2-full-11.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-12.jpg" data-img="img/superbox/superbox2-full-12.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-13.jpg" data-img="img/superbox/superbox2-full-13.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-14.jpg" data-img="img/superbox/superbox2-full-14.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-15.jpg" data-img="img/superbox/superbox2-full-15.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-16.jpg" data-img="img/superbox/superbox2-full-16.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-17.jpg" data-img="img/superbox/superbox2-full-17.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-18.jpg" data-img="img/superbox/superbox2-full-18.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-19.jpg" data-img="img/superbox/superbox2-full-19.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-20.jpg" data-img="img/superbox/superbox2-full-20.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-21.jpg" data-img="img/superbox/superbox2-full-21.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-22.jpg" data-img="img/superbox/superbox2-full-22.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-23.jpg" data-img="img/superbox/superbox2-full-23.jpg" alt="">
                   </div>
                   <div>
                     <img src="img/superbox/superbox2-thumb-24.jpg" data-img="img/superbox/superbox2-full-24.jpg" alt="">
                   </div>
                 </div>
                
         </div>


         

         <div class="clearfix"></div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                
                  <!-- <video style="width: 960px;" controls autoplay>
                    <source src="s2k.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                  </video>
               -->

                  <iframe width="960px" height="500" src="https://www.youtube.com/embed/Yh3T9Wec1B4?loop=1"></iframe>
          <div class="clearfix"></div>
    </section>

    <section id="interest">

      
      <div class="container">

      <h1 class="alignCenterh1 wow rubberBand animated" data-wow-offset="100" style="visibility: visible;">INTEREST
      </h1>
      <div class="hrline"></div>

      <br>
      <br>
        <div class="wrap1"> 

          <div class="imgholder">
            <div class="outer1 circle">
            </div>
            <div class="outer2 circle">
            </div>
            <figure>
              <img src="img/web.gif" />
              <figcaption class="caption">WEB DESIGN
              </figcaption>
            </figure>
          </div>
          <div class="imgholder">
            <div class="outer1 circle">
            </div>
            <div class="outer2 circle">
            </div>
            <figure>
              <img src="img/graphics.gif" />
              <figcaption class="caption">GRAPHICS
              </figcaption>
            </figure>
          </div>
          <div class="imgholder">
            <div class="outer1 circle">
            </div>
            <div class="outer2 circle">
            </div>
            <figure>
              <img src="img/games.gif" />
              <figcaption class="caption">GAMES
              </figcaption>
            </figure>
          </div>
          <div class="imgholder">
            <div class="outer1 circle">
            </div>
            <div class="outer2 circle">
            </div>
            <figure>
              <img src="img/movies.gif" />
              <figcaption class="caption">MOVIES
              </figcaption>
            </figure>
          </div>
          <div class="imgholder">
            <div class="outer1 circle">
            </div>
            <div class="outer2 circle">
            </div>
            <figure>
              <img src="img/music.gif" />
              <figcaption class="caption">MUSIC
              </figcaption>
            </figure>
          </div>
          <div class="clearfix">
          </div>

          <div id="interest2">
            <div class="imgholder">
              <div class="outer1 circle">
              </div>
              <div class="outer2 circle">
              </div>
              <figure>
                <img src="img/anime.gif" />
                <figcaption class="caption">ANIME
                </figcaption>
              </figure>
            </div>
            <div class="imgholder">
              <div class="outer1 circle">
              </div>
              <div class="outer2 circle">
              </div>
              <figure>
                <img src="img/arts.gif" />
                <figcaption class="caption">ARTS
                </figcaption>
              </figure>
            </div>
            <div class="imgholder">
              <div class="outer1 circle">
              </div>
              <div class="outer2 circle">
              </div>
              <figure>
                <img src="img/sports.gif" />
                <figcaption class="caption">SPORTS
                </figcaption>
              </figure>
            </div>
            <div class="imgholder">
              <div class="outer1 circle">
              </div>
              <div class="outer2 circle">
              </div>
              <figure>
                <img src="img/travel.gif" />
                <figcaption class="caption">TRAVEL
                </figcaption>
              </figure>
            </div>
          </div> <!-- interest2 -->

        </div> <!-- wrap1 -->
      </div> <!-- container -->
    </section>


    <section id="contact" data-stellar-background-ratio="0.5">
     
      <h1 class="alignCenterh2 wow fadeInDown animated" data-wow-offset="100" style="visibility: visible;">GET IN TOUCH
      </h1>
        <br>
            <div class="container">

                <div id="contactSect">   
                    <div class="contact-details">
                      <h2>Let's start something great together</h2>
                      <br>
                      <img id="contactimg" src="img/contact.jpg" alt="contact">
                      <br>
                      <h3><b>Contact Details</b></h3>
                      <br>
                      <address>
                          <p class="location">
                          <i id="contacticon" class="fa fa-globe" aria-hidden="true"></i>
                          Blk 32, Lot 72, Emerald St. Golden City, Salawag Dasmariñas Cavite
                          </p>
                          <p class="number">
                            <i id="contacticon" class="fa fa-phone-square" aria-hidden="true"></i>
                            <a href="tel:+639958143127">+63.995.814.3127 |
                            </a>
                            <a href="tel:+639434971043">+63.943.497.1043
                            </a>
                          </p>
                          <p class="email">
                            <i id="contacticon" class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:iamraven@ferdinandestoque.com">iamraven@ferdinandestoque.com |
                            </a>
                            <a href="mailto:ferdinand.estoque@yahoo.com">ferdinand.estoque@yahoo.com
                            </a>
                          </p>
                          <p class="skype">
                            <i id="contacticon" class="fa fa-skype" aria-hidden="true"></i>
                            <a href="skype:ferdinand.estoque?call">ferdinand.estoque
                            </a>
                          </p>
                      </address>
                    </div>  
      
              <div id="contactbox" class="section">

                  <div class="container1 content">

                          <?php if(isset($emailSent) && $emailSent == true) { ?>
                                  <p class="info">Your email was sent.</p>
                          <?php } else { ?>
                              
                          <div class="desc">
                            <h2>Inquire Now</h2>
                              <div class="desc">
                              </div>
                          </div>

                          <div id="contact-form">

                            <?php if(isset($hasError) || isset($captchaError) ) { ?>
                                <p class="alert">Error submitting the form</p>
                            <?php } ?>
                          
                            <form id="contact-us" action="index.php" method="post">
                                  <div class="formblock">
                                      <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="Name:" width="100%" />
                                      <?php if($nameError != '') { ?>
                                        <br /><span class="error"><?php echo $nameError;?></span> 
                                      <?php } ?>
                                  </div>
                                            
                                  <div class="formblock">
                                      <input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="Email:" />
                                      <?php if($emailError != '') { ?>
                                        <br /><span class="error"><?php echo $emailError;?></span>
                                      <?php } ?>
                                  </div>
                                            
                                  <div class="formblock">
                                      <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                                      <?php if($commentError != '') { ?>
                                        <br /><span class="error"><?php echo $commentError;?></span> 
                                      <?php } ?>
                                  </div>

                                  <button name="submit" type="submit" id="subbutton">SUBMIT</button>

                                  
                              </form> 

                          </div> <!-- form -->
                          <?php } ?>
                        </div>
                    </div>    <!-- End #contact -->
                </div> <!-- ContactSect -->
          </div>  <!-- Container -->
        <div class="clearfix"></div>
    </section>

    <section id="map">
                <div class="container">
                      <div class="googleMap">
                        <iframe src="https://www.google.com/maps/d/embed?mid=zYGV5eP5-U3E.kqWdAoZ93oBE" width="100%" height="400" frameborder="5" >
                        </iframe>
                      </div>
                      <div class="clearfix"></div>

                </div>  
    </section>

    <div class="triangle-downA"></div>
     
    <section id="footer" data-stellar-background-ratio="0.5">
        <div class="clearfix"></div>
        <div class="container">
                <h1 class="alignCenterh2 wow fadeInDown animated" data-wow-offset="100" style="visibility: visible;">FOLLOW ME AROUND THE WEB</h1>
                <div class="hi-icon-wrap hi-icon-effect-8">
                    <a target="blank" href="https://www.linkedin.com/profile/view?id=AAIAABApO48BRvHphoPdqMUD_21zjhnB9Ak1RRc&amp;trk=nav_responsive_tab_profile" class="hi-icon wow rotateIn animated" data-wow-delay=".3s" data-wow-offset="100" style="visibility: visible;"><i class="fa fa-linkedin-square"></i></a>
                    <a target="blank" href="#" class="hi-icon wow rotateInUpLeft animated" data-wow-delay=".6s" data-wow-offset="100" style="visibility: visible;"><i class="fa fa-facebook-square"></i></span></a>
                    <a target="blank" href="https://twitter.com/lexus_007" class="hi-icon wow rotateInUpRight animated" data-wow-delay=".9s" data-wow-offset="100" style="visibility: visible;"><i class="fa fa-twitter-square"></i></a>
                    <a target="blank" href="https://github.com/" class="hi-icon wow rotateInDownRight animated" data-wow-delay=".6s" data-wow-offset="100" style="visibility: visible;"><i class="fa fa-github-square"></i></a>
                   
                    <a target="blank" href="https://instagram.com/lexus_007/" class="hi-icon wow rotateInDownRight animated" data-wow-delay=".3s" data-wow-offset="100" style="visibility: visible;"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="copyright wow zoomIn animated" data-wow-delay="1.5s" data-wow-offset="100" style="visibility: visible;">
                    <p class="align-center">Copyright &copy; 2015 - <?php echo date("Y") ?> &nbsp;| &nbsp;FERDINAND BELLEZA ESTOQUE &nbsp; | &nbsp; All Rights Reserved</p>
                </div>
            
            
        </div>
      <!--   <div id="arrowUp"><a id="aUp" href="#home"><i class="fa fa-chevron-up faa-bounce animated"></i></a></div> -->

        <div id="arrowUp"><a id="aUp" href="#home"><img id="arrow" class="wow bounce animated" data-wow-duration="1s" data-wow-iteration="100000"  style="visibility: visible;" src="img/arrow.png" alt="s2klogoss">
        </div>

    </section>
    
    <script src="js/1.3.2.jquery.min.js"></script>
    <script src="js/1.7.1.jquery.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <!--   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
    <script src="js/loader.js"></script>
    <script src="js/raphael-min.js"></script>     
    <script src="js/jquery.lazylinepainter-1.7.0.min.js"></script> 
    <script src="js/parallax.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/skill.bars.jquery.js"></script>
    <script src="js/modernizr.custom.53451.js"></script>
    <script src="js/jquery.gallery.js"></script>
    <script src="js/TweenLite.min.js"></script>
    <script src="js/EasePack.min.js"></script>
    <script src="js/rAF.js"></script>
    <script src="js/demo-1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.superbox.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){   
        $('.skillbar').skillBars({
          from: 0,
          speed: 15000, 
          interval: 100,
          decimals: 0,
        });
        
      });

      $(window).scroll(function() {
          if ($(this).scrollTop() > 1) {
              $('header').addClass("sticky");
          } else {
              $('header').removeClass("sticky");
          }
      });

      new WOW().init();

     <!--//--><![CDATA[//><!--
      $(document).ready(function() {
        $('form#contact-us').submit(function() {
          $('form#contact-us .error').remove();
          var hasError = false;
          $('.requiredField').each(function() {
            if($.trim($(this).val()) == '') {
              var labelText = $(this).prev('label').text();
              $(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
              $(this).addClass('inputError');
              hasError = true;
            } else if($(this).hasClass('email')) {
              var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
              if(!emailReg.test($.trim($(this).val()))) {
                var labelText = $(this).prev('label').text();
                $(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
                $(this).addClass('inputError');
                hasError = true;
              }
            }
          });
          if(!hasError) {
            var formInput = $(this).serialize();
            $.post($(this).attr('action'),formInput, function(data){
              $('form#contact-us').slideUp("fast", function() {          
                $(this).before('<p class="tick"><strong>Thanks!</strong> Your email has been delivered.</p>');
              });
            });
          }
          
          return false; 
        });
      });
      //-->!]]>

     
      $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
      
  
      $(function() {
        $('.MyOtherGallery').SuperBox();
      });
   
     var pathObj = {
    "logo1": {
        "strokepath": [
            {
                "path": "m 382.59473,729.46744 c -17.05957,-0.83456 -39.67552,-3.70086 -49.12488,-6.22601 -1.56421,-0.41799 -6.91884,-1.69006 -11.89919,-2.82683 -10.22167,-2.33308 -34.29357,-10.29724 -45.9199,-15.19254 -62.65845,-26.38254 -116.2513,-73.62634 -151.18769,-133.27672 -8.23824,-14.06597 -19.89543,-39.23952 -24.634188,-53.19723 -8.45468,-24.90265 -13.14719,-45.91022 -16.44364,-73.61533 -1.41083,-11.85739 -1.6279,-49.53791 -0.344,-59.71448 3.66813,-29.07462 6.81843,-44.78958 12.955,-64.6248 C 130.78095,208.3591 225.09382,124.86372 340.86214,104.01321 c 22.11825,-3.98362 31.4766,-4.775167 55.90592,-4.728643 24.54432,0.04674 36.57519,1.152503 59.44925,5.464003 88.92705,16.76172 168.15611,72.77842 214.39965,151.5853 4.15079,7.07367 16.31067,30.81289 16.31067,31.84265 0,0.25905 1.46742,3.90768 3.26092,8.10807 3.11977,7.3065 8.8239,23.12827 10.1342,28.10966 0.34176,1.29922 1.56709,5.90555 2.72298,10.23629 2.23182,8.36193 2.4925,9.51175 5.08792,22.44111 3.62597,18.06324 5.97729,49.0272 5.23193,68.89812 -0.64429,17.17661 -3.3757,40.3512 -6.12517,51.96888 -0.40997,1.7323 -1.03008,4.56696 -1.37802,6.29926 -0.95618,4.7605 -3.71472,15.68245 -4.70804,18.64066 -0.48374,1.44063 -2.27506,6.87133 -3.98071,12.06822 -3.16577,9.64571 -4.43346,13.14408 -6.27721,17.32296 -3.2493,7.36459 -3.9688,9.07749 -3.9688,9.44856 0,0.93327 -8.54694,17.9601 -13.24117,26.37846 -8.40319,15.0698 -22.45066,35.83047 -30.38822,44.91056 -1.33866,1.53135 -4.01737,4.72035 -5.95267,7.08667 -6.26857,7.66461 -22.99644,24.33596 -33.4894,33.37624 -23.4967,20.24374 -49.54594,36.89747 -76.37851,48.83013 -8.39341,3.73261 -9.39422,4.16063 -12.99222,5.55632 -1.94883,0.75598 -4.252,1.68623 -5.11814,2.06725 -2.28441,1.00488 -10.61516,3.82847 -13.48991,4.5722 -1.35641,0.35093 -2.85807,0.88023 -3.33703,1.17624 -1.98851,1.22897 -23.72195,6.54697 -40.42082,9.89067 -10.47958,2.09837 -40.39999,4.73716 -51.80815,4.56916 -3.24806,-0.0479 -11.22055,-0.34698 -17.71666,-0.66477 z m 43.3074,-12.25707 c 38.94143,-3.44596 73.13079,-13.26737 109.0559,-31.32799 29.60525,-14.88343 52.65033,-31.72199 77.6019,-56.70211 35.01927,-35.05931 58.17025,-72.49932 73.80091,-119.35163 8.66032,-25.95895 14.72887,-60.22051 14.73743,-83.20396 l 0.003,-7.21916 -23.24395,-22.70231 c -12.78417,-12.48627 -23.40639,-23.41098 -23.60493,-24.27712 -9.10521,-39.72237 -21.70994,-70.37581 -40.95851,-99.60701 -9.59217,-14.56684 -18.83999,-25.75521 -32.21642,-38.97666 -25.73759,-25.43939 -52.31118,-42.49237 -86.2769,-55.36616 -12.58793,-4.77112 -19.27908,-6.68438 -34.73671,-9.93258 l -11.50821,-2.41828 -18.41327,-19.14859 c -10.1273,-10.53172 -21.77944,-22.8608 -25.89364,-27.39794 l -7.48037,-8.24935 -12.20482,0.4097 c -116.48381,3.9102 -221.95873,77.53938 -267.6139,186.81401 -14.47751,34.65161 -22.924598,75.63122 -22.936178,111.27096 l -0.003,9.83885 30.348098,30.35558 30.3481,30.35558 1.22333,4.68465 c 1.87917,7.19614 8.49,24.45787 13.23095,34.54773 8.68135,18.47595 21.57597,39.37847 34.75876,56.34486 8.47639,10.9092 28.62941,31.41459 38.91074,39.59107 27.20133,21.63254 52.5764,34.62799 87.23637,44.6768 l 5.73972,1.66409 28.5125,28.3487 28.51249,28.34871 10.23629,-0.1278 c 5.62997,-0.0703 15.90563,-0.62947 22.83482,-1.24264 z m -40.94518,-34.13522 c -4.33074,-0.26266 -8.40558,-0.76052 -9.05519,-1.10635 -0.64961,-0.34584 -9.33077,-9.4343 -19.29147,-20.19659 l -18.11037,-19.5678 -10.79371,-3.57435 c -5.93654,-1.96588 -13.0232,-4.60993 -15.74814,-5.87566 -2.72495,-1.26573 -7.62592,-3.51796 -10.89104,-5.00497 -10.06008,-4.58158 -37.13742,-21.23432 -39.33932,-24.19395 -0.21654,-0.29105 -2.34254,-1.97649 -4.72444,-3.74542 -5.49117,-4.07804 -16.78549,-14.51005 -24.53102,-22.6581 -15.24458,-16.0368 -27.29111,-33.20623 -38.17933,-54.41539 -6.15484,-11.98902 -8.42169,-17.43006 -14.50889,-34.82516 l -2.57211,-7.3502 -16.9945,-16.33313 c -9.34698,-8.98321 -19.23077,-18.4359 -21.96399,-21.00596 l -4.96948,-4.67284 -0.88755,-10.97918 c -1.46083,-18.0709 1.12451,-49.63132 5.80729,-70.89216 13.15159,-59.71112 46.54238,-114.75393 91.64043,-151.06405 37.64495,-30.30935 83.35166,-50.04115 131.49061,-56.76511 19.08815,-2.6662 46.41831,-3.64328 49.77175,-1.7794 0.95695,0.53189 10.70111,9.84674 21.65369,20.69968 l 19.9138,19.73262 9.05395,2.18705 c 18.45114,4.45701 42.41364,14.37012 60.6316,25.08284 39.80623,23.40728 72.58798,59.23317 92.87329,101.49756 6.91006,14.39711 11.08879,25.87555 15.73281,43.21614 l 2.41133,9.00378 8.46812,8.10773 c 4.65747,4.45926 12.85778,12.06352 18.22291,16.89835 l 9.75479,8.7906 -0.52085,11.84202 c -1.63938,37.27297 -9.11077,75.97973 -19.74122,102.27255 -6.85302,16.94996 -20.9092,41.46745 -32.55662,56.78693 -34.85775,45.84727 -79.50342,78.33407 -131.50629,95.69166 -31.77537,10.60603 -70.22437,16.03499 -100.54084,14.19626 z m 43.50025,-40.62506 c 28.87704,-3.07646 57.94983,-12.10838 83.53695,-25.95208 12.37514,-6.69547 30.49927,-19.37586 41.45378,-29.00279 23.79403,-20.91042 45.06704,-49.60654 56.70022,-76.48547 1.68691,-3.89766 3.32524,-7.44379 3.64075,-7.88027 0.94117,-1.30206 2.91063,-7.14039 6.90397,-20.46639 7.77454,-25.94399 9.08928,-35.36301 9.12247,-65.35479 0.0201,-18.14185 -0.27496,-24.93855 -1.43553,-33.07111 -5.71818,-40.0692 -22.91267,-79.34446 -48.33472,-110.40503 -8.1783,-9.99223 -21.19163,-23.24072 -30.52002,-31.07157 -6.34582,-5.32707 -23.52891,-17.97335 -24.42124,-17.97335 -0.19334,0 -2.38778,-1.30259 -4.87654,-2.89463 -4.49081,-2.87273 -20.74077,-11.20865 -28.22114,-14.47691 -7.41044,-3.2377 -31.91046,-10.96819 -39.54486,-12.47759 -22.49002,-4.44651 -43.23513,-6.08705 -61.04751,-4.82769 -12.99202,0.91856 -29.1272,3.05013 -38.34683,5.06589 -7.09045,1.55025 -15.00262,3.66858 -16.48042,4.41234 -0.67994,0.3422 -4.77957,1.76648 -9.11031,3.16508 -8.69177,2.80698 -10.65965,3.62888 -24.40963,10.19493 -15.21201,7.26421 -29.39909,16.54549 -47.63814,31.16519 -11.18944,8.96901 -28.17104,27.80284 -38.75116,42.97787 -4.17672,5.99065 -16.36735,26.15434 -16.36735,27.07211 0,0.12731 -1.37754,3.18989 -3.06122,6.80575 -4.76809,10.24 -5.49988,12.1127 -9.49213,24.29096 -4.54479,13.86377 -5.89612,18.85577 -7.46028,27.55925 -5.35464,29.79494 -5.24637,60.34097 0.31677,89.37072 2.35424,12.28492 9.05732,34.01252 13.30108,43.11456 1.26096,2.7045 3.59836,7.75194 5.19423,11.21653 5.20346,11.29659 15.43073,27.6877 24.99054,40.05206 12.8497,16.61941 31.35224,34.11846 49.24022,46.56967 7.0432,4.90252 18.7488,12.19788 19.57186,12.19788 0.18935,0 1.66599,0.82623 3.28141,1.83608 1.61543,1.00984 6.3033,3.34733 10.4175,5.19441 4.11421,1.84709 8.72054,3.91639 10.2363,4.59846 7.79553,3.50786 29.67952,10.18519 40.94518,12.49336 19.8358,4.06405 48.98752,5.29611 70.6658,2.98657 z M 208.69454,491.34507 c -0.29408,-0.76637 4.29124,-5.98275 13.49853,-15.35629 l 13.9439,-14.19566 15.59033,0.002 15.59033,0.002 6.24743,-6.49611 c 3.43608,-3.57286 6.25318,-6.71442 6.26022,-6.98124 0.007,-0.26682 -13.2752,-13.90865 -29.51609,-30.31518 -26.08029,-26.34575 -29.37323,-29.94446 -28.19616,-30.81377 0.99209,-0.7327 7.01473,-0.98426 23.56417,-0.98426 l 22.23145,0 30.37434,30.41353 c 16.70588,16.72744 30.37434,30.99176 30.37434,31.69851 0,0.70673 -9.65795,10.93814 -21.46213,22.73646 l -21.46212,21.45147 -38.29658,0 c -33.0145,0 -38.35802,-0.16008 -38.74196,-1.16061 z m 91.3727,0.0872 c -0.25494,-0.66437 5.10844,-6.57346 13.93937,-15.35766 l 14.35374,-14.2778 64.80862,0 64.80861,0 14.27746,13.97648 c 7.8526,7.68706 14.27744,14.50798 14.27744,15.15759 0,1.04208 -10.95001,1.20466 -93.02542,1.38118 -78.22132,0.16823 -93.09139,0.0282 -93.43982,-0.87979 z m 190.2827,-6.99193 c -16.04915,-16.49807 -17.73837,-18.47269 -17.4634,-20.41398 l 0.26002,-1.83584 31.29944,-0.20589 c 17.21469,-0.11324 31.29944,-0.41312 31.29944,-0.6664 0,-0.25328 -1.99313,-2.73071 -4.42917,-5.5054 -5.9131,-6.73511 -5.84739,-7.67375 1.03359,-14.7647 3.00452,-3.0962 6.79304,-7.31254 8.41892,-9.36964 4.05385,-5.12899 5.73059,-5.00898 10.088,0.72201 1.866,2.45421 6.80418,8.03496 10.97373,12.40166 4.16955,4.36671 9.09173,9.71114 10.93817,11.87651 1.84643,2.16537 7.58092,8.43355 12.74328,13.9293 5.16237,5.49575 10.3387,11.18135 11.50295,12.63469 1.16425,1.45333 2.92493,3.50187 3.91263,4.55231 4.1975,4.46413 6.05367,4.29865 -50.69425,4.51945 l -52.02662,0.20243 -7.85673,-8.07651 z m -17.9961,-34.65149 c -0.23596,-0.97441 -0.33129,-25.68916 -0.21185,-54.92165 l 0.21716,-53.14999 16.3387,-0.21282 16.33871,-0.21283 0,29.54374 c 0,17.37865 0.29718,29.54375 0.72173,29.54375 0.39695,0 1.37137,-0.84477 2.16537,-1.87726 1.77012,-2.30181 11.7677,-13.63275 16.75452,-18.98903 2.016,-2.16537 5.74478,-6.41737 8.28617,-9.44889 6.23428,-7.43662 14.69751,-16.95245 20.82379,-23.41371 l 5.05047,-5.32665 20.34341,0 c 18.30651,0 20.34341,0.12893 20.34341,1.2877 0,0.70824 -2.74609,4.30231 -6.10241,7.98683 -3.35632,3.68453 -7.85065,8.86298 -9.98739,11.50767 -2.13674,2.64469 -5.38253,6.40303 -7.21287,8.35187 -1.83034,1.94883 -4.68843,5.19386 -6.35131,7.21118 -1.66289,2.01732 -7.45259,8.70139 -12.86601,14.85348 -10.55885,11.99962 -18.9363,21.70472 -28.31241,32.79936 -3.22922,3.8211 -6.07513,7.12461 -6.32425,7.34115 -0.24912,0.21653 -4.09435,4.55712 -8.54496,9.64573 l -8.09204,9.25204 -16.47446,0 c -16.43257,0 -16.47555,-0.005 -16.90348,-1.77167 z m -127.35781,-0.34594 c -0.75788,-0.19805 -1.37796,-0.95599 -1.37796,-1.68431 0,-0.72832 13.11033,-14.43095 29.13406,-30.4503 16.02374,-16.01935 29.13407,-29.49004 29.13407,-29.93487 0,-0.44483 -2.93065,-3.72421 -6.51256,-7.28751 l -6.51255,-6.47872 -91.12595,0 -91.12594,0 0.1115,-2.16537 c 0.088,-1.70913 3.21197,-5.1932 14.8265,-16.53555 l 14.715,-14.37019 84.56878,0 84.56878,0 23.04655,23.04655 c 12.6756,12.67561 23.04655,23.40479 23.04655,23.84265 0,1.32895 -60.51499,61.34136 -62.40968,61.89136 -1.97768,0.57409 -41.93557,0.68853 -44.08715,0.12626 z",
                "duration": 900000
                  }
              ],
              "dimensions": {
                  "width": 805,
                  "height": 813
              }
        }
    }; 
 

    $(document).ready(function(){ 
     $('#logo1').lazylinepainter( 
     {
        "svgData": pathObj,
        "strokeWidth": 2,
        "strokeColor": "#fff"
    }).lazylinepainter('paint'); 
     });

    </script>
    </body>
</html>



