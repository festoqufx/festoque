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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--     <meta name='viewport' content='width=1190'> -->
    <meta name="description" content="Hi, I am Ferdinand Belleza Estoque a.k.a. Black Raven, I design and build functional websites and this is my website portfolio." />
    <meta name="keywords" content="Ferdinand Estoque, Ferdinand Belleza Estoque, Estoque, Black Raven Estoque, Raven Estoque" />
    <meta name="author" content="Ferdinand Estoque" />
    <title>Ferdinand Estoque | Web Design &amp; Development</title>
    <link rel="icon" type="image/png" href="img/estoque.png">
    
    <link href='https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,900italic,900,700italic,700,500italic,500,400italic' rel='stylesheet' type='text/css'>

    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>  
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/mouse.css">
    <link rel="stylesheet" type="text/css" href="css/circleHoverEffect.css">
    <link rel="stylesheet" type="text/css" href="css/set2.css">
    <link rel="stylesheet" type="text/css" href="css/circular.css">
    <link rel="stylesheet" type="text/css" href="css/icon.css" />
    <link rel="stylesheet" type="text/css" href="css/3dgallery.css" />
    <link rel="stylesheet" type="text/css" href="css/timeline.css" />
    <link rel="stylesheet" type="text/css" href="css/contact.css" />
    <link rel="stylesheet" type="text/css" href="css/rotatingword1.css" />
    <link href="css/superbox.css" rel="stylesheet">
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/skill.bars.jquery.js"></script>
    <script src="js/modernizr.custom.53451.js"></script>
    <script src="js/jquery.gallery.js"></script>
   
    </header>
    <body cz-shortcut-listen="true">
    <!--
    <div id="loader"></div>
    <script>
        $(window).load(function(){
            $("#loader").fadeOut("slow");
        });
    </script>
    -->
    <video autoplay="" id="bgvid" loop="">
           <source src="bg.webm" type="video/webm">
    </video>
    <section id="home" data-speed="10" data-type="background">
            <header id="top" class="wow bounceInDown animated" data-wow-delay="0.9s">
                <!-- <div class="container">
                    <div class="row">
                        <div class="logo">
                            <a href="#">
                                <h2><img class="wow rotateIn animated" data-wow-duration="1s" data-wow-delay="1.7s" style="visibility: visible;" src="img/logo.png"></h2>
                            </a>
                        </div>
                        <h2 id="s2k"><img src="img/s2k.png"></h2>
                        @end of logo
                        <div class="align-right">
                            <nav class="navigation">
                                <ul id="main-nav">
                                    <li class="active"><a href="#home"><i class="fa fa-home"></i>&nbsp;Home</a>
                                    </li>
                                    <li><a href="#about"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;About</a>
                                    </li>
                                    <li><a href="#mywork"><i class="fa fa-briefcase"></i>&nbsp;Experiences</a>
                                    </li>
                                    <li><a href="#gallery"><i class="fa fa-picture-o"></i>&nbsp;Gallery</a>
                                    </li>
                                    <li><a href="#contact"><i class="fa fa-phone-square"></i>&nbsp;Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> </div>-->
                    <!-- @end of row -->
                
                <!-- @end of container -->



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
                    <a class="navbar-brand " href="#" style="display:none;">
                        <img src="http://placehold.it/150x50&amp;text=Logo" alt="">
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
                            <a class="navbar-brand " href="#">
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
            <section id="banner" data-stellar-background-ratio="0.5">
                <div id="large-header" class="large-header">
                    <!-- canvas -->
                    <canvas id="demo-canvas"></canvas>
                    <!-- canvas -->
                    <div id="home_bg" class="container">
                        <h1>FERDINAND BELLEZA ESTOQUE
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
                                <b>&nbsp;&nbsp;&nbsp;BRANDING</b>
                                <b>&nbsp;&nbsp;&nbsp;REBRANDING</b>
                                <b>&nbsp;RESPONSIVE&nbsp;DEVELOPMENT</b>
                            </span>
                        </h1>
                    </section> 
                        <img id="imgIcon" src="img/icon-banner.png" alt="mouse">
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
                          <p>Hi, I am Black Raven. I live and a freelancer in Cavite. I offer Creative Direction for online media as well as Screen &amp; Interface design. I tell visual stories based on a strong idea in an aesthetic context. I understand design in general as philosophical handcraft. I believe in the magic of details. Love, light and rhythm.
                          </p>
                      </div>
                      <div id="ptextRight" class="wow fadeInRight animated" data-wow-offset="100" data-wow-delay="0.4s" style="visibility: visible;">
                          <p>Black RaveN is a Philippine based designer specialising in Web/UI Design, Graphic and 3D Designer, Branding, Illustration &amp; Photography. He has a worldwide client roster and his work is regulary featured in design related publications. He is also a regular speaker at design/tech conferences.
                          </p>
                      </div>
                  </div>
              </div>
       
              <span class="clearfix"></span>
              <div id="Skills">
                  <h1 class="alignCenterh1 wow rubberBand animated" data-wow-offset="100" style="visibility: visible";>SKILLS</h1>
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
                                        <div class="skillbar" data-percent="90">
                                          <span class="skillbar-title" >SCHEMA.ORG</span>
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
                                        <div class="skillbar" data-percent="88">
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
                                        <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title">ANGULAR</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="88">
                                          <span class="skillbar-title">GENESIS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                       </div>
                                  </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="98">
                                          <span class="skillbar-title">HTML5 BOILERPLATE</span>
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
                                    <h3 class="centerh3">SOFTWARE</h3>                            
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
                                          <span class="skillbar-title">MUSE CC</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="82">
                                          <span class="skillbar-title">AFTER EFFECTS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="85">
                                          <span class="skillbar-title">AFTER EFFECTS</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="89">
                                          <span class="skillbar-title">MS SQL</span>
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
                                        <div class="skillbar" data-percent="87">
                                          <span class="skillbar-title">MY SQL</span>
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
                                          <span class="skillbar-title">GIT</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                         <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title">POSTGRES</span>
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
                                          <span class="skillbar-title">JOOMLA</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                        <div class="skillbar" data-percent="90">
                                          <span class="skillbar-title">SITEFINITY</span>
                                          <p class="skillbar-bar"></p>
                                          <span class="skill-bar-percent"></span>
                                        </div>
                                  </div>
                                   <div class="col-md-4"> 
                                        <div class="skillbar" data-percent="80">
                                          <span class="skillbar-title">DRUPAL</span>
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
              <li class="timeline-inverted wow fadeInUp animated" data-wow-offset="100" data-wow-delay="0.3s">
                    <div class="timeline-badge5 warning"></div>
                    <div class="timeline-panel wow fadeInDown animated" data-wow-offset="100" data-wow-delay="0.3s">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">QUINN DATA FACILITIES, INC.</h4>
                            <p class="position">BACK-END WEB DEVELOPER</p>
                        </div>
                        <span class="date2">OCT 2015 </span>

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
                <div class="button-wrapper">
                    <a href="http://estoque.info/" class="a-btn" target="_blank">
                        <span class="a-btn-text">Want more</span>
                        <span class="a-btn-slide-text">ClICK HERE</span>
                        <span class="a-btn-icon-right"><span></span></span>
                    </a>
                </div>
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
                    <a target="blank" href="https://plus.google.com/u/0/111736575232573493296" class="hi-icon wow rotateInDownRight animated" data-wow-delay=".6s" data-wow-offset="100" style="visibility: visible;"><i class="fa fa-google-plus-square"></i></a>
                    <a target="blank" href="https://instagram.com/lexus_007/" class="hi-icon wow rotateInDownRight animated" data-wow-delay=".3s" data-wow-offset="100" style="visibility: visible;"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="copyright wow zoomIn animated" data-wow-delay="1.5s" data-wow-offset="100" style="visibility: visible;">
                    <p class="align-center">Copyright &copy; 2015 - <?php echo date("Y") ?> &nbsp;| &nbsp;FERDINAND BELLEZA ESTOQUE &nbsp; | &nbsp; All Rights Reserved</p>
                </div>
            
            
        </div>
        <div id="arrowUp"><a id="aUp" href="#home"><i class="fa fa-chevron-up faa-bounce animated"></i></a></div>
    </section>
    <script src="./js/TweenLite.min.js"></script>
    <script src="./js/EasePack.min.js"></script>
    <script src="./js/rAF.js"></script>
    <script src="./js/demo-1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.superbox.js"></script>

    <script type="text/javascript">
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
   
      new WOW().init();
    
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
  
      $(function() {
        $('.MyOtherGallery').SuperBox();
      });
   
     
    </script>
    </body>
</html>



