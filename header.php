<?php   
require_once('funtion/funtions.php');
?>

<!DOCTYPE html>
<html>
    
    
    <head>
    <title><?php echo $PAGE_TITLE; ?></title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW, NOARCHIVE" />
	<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW, ARCHIVE" />
        
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Azulsolution">
	<meta name="description" content="<?php echo $PAGE_DESC; ?>">

    

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/_creative.min.css" rel="stylesheet">
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/58649defe7588f12124db986/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Website CSS -->
    <link href="css/azulsolution.css" rel="stylesheet">

        
        
    </head>
    
    <body id="page-top">
        
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">          
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a href="#page-top" class="brand page-scroll"><img src="img/azul.jpeg" alt="Azul Solution logo" style="height:58px"/></a>
                <a class="navbar-brand page-scroll" href="#page-top">Azul Solution</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about"><?php echo $ABOUT; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><?php echo $SERVICE; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><?php echo $CONTACT; ?></a>
                    </li>
                    <li>                     
                        <a class="page-scroll" href="/" >/<?php echo $CONTENT_FR; ?></a>                                                       
                     </li>  
                     <li>                     
                            <a class="page-scroll" href="/?lang=en" >/<?php echo $CONTENT_EN; ?></a>                                        
                     </li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <!-- Map -->
    <script src="js/map.js"></script>
</body>
</html>
