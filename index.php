<?php   
require_once('funtion/funtions.php');
?>

<!DOCTYPE html>
<html>
 
    <head>
    </head>
    
    <body id="page-top">
    <!-- include header -->  
    <?php include 'header.php';?>

    <!-- Header intro -->  
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo $LOGO; ?></h1>
                <hr>
                <p></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll"><?php echo $BtnMore; ?></a>
            </div>
        </div>
    </header>
    <!-- End Header intro -->  

    <section class="about-sect" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php echo $AboutTitle; ?></h2>
                    <hr>
                    <p class=""><?php echo $AboutDesc; ?></p>
                    <a href="#services" class="page-scroll btn btn-primary btn-xl sr-button"><?php echo $btnAbout; ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $servicesHeader; ?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-globe text-web sr-icons"></i>
                        <h3><?php echo $WEBSRVTITLE; ?></h3>
                        <p class="text-muted"><?php echo $WEBSRVDESC; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-desktop text-web sr-icons"></i>
                        <h3><?php echo $HardwareSrvTitle; ?></h3>
                        <p class="text-muted"><?php echo $HardwareSrvDesc; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-windows text-web sr-icons"></i>
                        <h3><?php echo $SoftSrvTitle; ?></h3>
                        <p class="text-muted"><?php echo $SoftSrvDesc; ?></p>
                    </div>          
                </div>          
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-tablet text-web sr-icons"></i>
                        <h3><?php echo $TabletSrvTitle; ?></h3>
                        <p class="text-muted"><?php echo $TabletSrvDesc; ?></p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-book text-web sr-icons" aria-hidden="true"></i>
                        <h3><?php echo $FormationSrvTitle; ?></h3>
                        <p class="text-muted"><?php echo $FormationSrvDesc; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-mouse-pointer text-web sr-icons"></i>
                        <h3><?php echo $RemoteSrvTitle; ?></h3>
                        <p class="text-muted"><?php echo $RemoteSrvDesc; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-exclamation-triangle text-web sr-icons"></i>
                        <h3><?php echo $VirusSrvTitle; ?></h3>
                        <p class="text-muted"><?php echo $VirusSrvDesc; ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                    <div class="service-box">
                        <i class=" text-web sr-icons">
                            <img src="img/images.jpeg" alt="Recovery" style="height:63px"/>
                        </i>
                        <h3><?php echo $RecoverySrvTitle; ?></h3>
                        <p class="text-muted"><?php echo $RecoverySrvDesc; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top:50px">
            <div class="row">
                <div class="col-lg-12 text-center" >              
                    <a href="#contact"  class="page-scroll btn btn-primary btn-xl sr-button"><?php echo $BTNCOTACT; ?></a>
                </div>
            </div>
        </div>      
    </section>
    <!-- End Services -->

    <!-- Map -->
    <section  id="map" >          
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4pv2h4ZNDJTTa1F-g5tBs4r_7bO72s-o&callback=initMap">
      </script>
    </section>
    <!-- End Map -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php echo $GETINTOUCHTITLE; ?></h2>
                    <hr class="primary">
                    <p><?php echo $GETINTOUCH; ?></p>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 text-center">
                    <i class="fa fa-phone-square fa-3x sr-contact"></i>
                    <p>438-393-6980</p>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 text-center">
                    <i onclick="window.location = 'mailto:azulsolution@gmail.com';" class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:azulsolution@gmail.com">azulsolution@gmail.com</a></p>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 text-center">
                    <i class="fa fa-3x fa-facebook-official  text-info sr-icons"
                       onclick="window.location ='http://facebook.com';"  ></i>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 text-center">
                    <a class="fa fa-3x fa-linkedin  text-info sr-icons"
                    href ="http://linkedin.com" ></a>
                </div>
            </div>
        </div>
    </section>  
    <!-- End Contact -->  

    <!-- include footer -->  
    <?php include 'footerpage.php';?>                   
</body>
</html>
