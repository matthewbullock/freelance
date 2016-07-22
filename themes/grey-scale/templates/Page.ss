<!DOCTYPE html>
<html lang="en">

<head>

    <% base_tag %>
    $MetaTags(false)
    <title>test</title>



    <!-- Bootstrap Core CSS -->
    <link href="$ThemeDir/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="$ThemeDir/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- Retina Images Plugin -->
    <script src="$ThemeDir/js/plugins/retina/retina.min.js"></script>


    <!-- Plugin CSS -->
    <link href="$ThemeDir/css/plugins/hover/hover.min.css" rel="stylesheet">
    <link href="$ThemeDir/css/plugins/owl.carousel/owl.carousel.css" rel="stylesheet">
    <link href="$ThemeDir/css/plugins/owl.carousel/owl.theme.css" rel="stylesheet">
    <link href="$ThemeDir/css/plugins/owl.carousel/owl.transitions.css" rel="stylesheet">
    <link href="$ThemeDir/css/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.css" rel="stylesheet">
    <link href="$ThemeDir/css/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Spectrum CSS -->
    <!-- Note: spectrum.css is the default blue theme. To use another theme, uncomment the one you want and delete the rest, including the default spectrum.css! -->
    <link href="$ThemeDir/css/spectrum.css" rel="stylesheet">
  

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="wrapper">
        $Layout
        <% include Footer %>
    </div>
  

    <!-- Core JavaScript Files -->
    <script src="$ThemeDir/js/jquery-1.10.2.js"></script>
   
 
    <script src="$ThemeDir/js/bootstrap/bootstrap.min.js"></script>
    <script src="$ThemeDir/js/modernizr.custom.js"></script>

    <!-- Plugin JavaScript Files -->
    <script src="$ThemeDir/js/plugins/jquery.easing/jquery.easing.1.3.js"></script>
    <script src="$ThemeDir/js/interactive-text.js"></script>
       <script src="$ThemeDir/js/plugins/jquery.fitvids/jquery.fitvids.js"></script>
    <script src="$ThemeDir/js/plugins/jquery.fs.wallpaper/jquery.fs.wallpaper.min.js"></script>
    <script src="$ThemeDir/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="$ThemeDir/js/plugins/jquery.tubular/jquery.tubular.1.0.js"></script>
    <script src="$ThemeDir/js/plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="$ThemeDir/js/plugins/scrollReveal/scrollReveal.js"></script>
    <script src="$ThemeDir/js/plugins/stellar/stellar.js"></script>
    <script src="$ThemeDir/js/plugins/SmoothScroll/SmoothScroll.js"></script>
    <script src="$ThemeDir/js/plugins/jqBootstrapValidation/jqBootstrapValidation.js"></script>
    <script src="$ThemeDir/js/contact_me.js"></script>
    <script src="$ThemeDir/js/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- Spectrum JavaScript Files -->
    <script src="$ThemeDir/js/spectrum.nav.js"></script>
    <script src="$ThemeDir/js/spectrum.js"></script>
    <script>
    $(".video-bg").wallpaper({
        source: {
            mp4: "$ThemeDir/mp4/code.mp4",
            // poster: "$ThemeDir/img/demo-bgs/video-bg-fallback.jpg"
        }
    });
    </script>
</body>

</html>
