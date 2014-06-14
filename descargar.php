<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<title>Descargar Pedro II, el ultimo Papa</title>
        <meta name=”description” content="Pedro II Ultimo Papa del vaticano y primer pontifice"/>
        <meta name=”keywords” content="pedro II, vaticano, ultimo papa, nuevo papa, fin de la iglesia, malaquias"/>
        
        <?php include 'inc/analytics.php'; ?>
	
	
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
	<link rel="stylesheet" href="css/nivo-slider.css" media="all"  /> 
	<link rel="stylesheet" href="css/tweet.css" media="all"  />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/lessframework.css"/>
	
	
	<!-- All JavaScript at the bottom, except this Modernizr build.
	   Modernizr enables HTML5 elements & feature detects for optimal performance.
	   Create your own custom Modernizr build: www.modernizr.com/download/ -->
	<script src="js/modernizr-2.5.3.min.js"></script>
</head>
<body>
	<!-- HEADER -->
	<header>
		
		<!-- header wrapper -->
		<div class="wrapper cf">
			
                    <h4 class="headline" style="color: rgb(24, 6, 1);margin-bottom: 5px;"> Pedro II</h4>
                    <h4 class="headline" style="
                        font-size:25px; 
                        text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5);;
                        color: rgb(24, 6, 1);
                        margin-bottom: 5px;">ultimo Papa y primer Pontifice</h4>
			
		</div><!-- ENDS header wrapper -->
		<?php include 'inc/menutop.php'; ?>
	</header>
	<!-- ENDS HEADER -->
	
	
	<!-- MAIN -->
	<div role="main" id="main">
            <div class="wrapper cf">
		
            <!-- posts list -->
            <div id="posts-list" class="cf"> 
			
<article>
    <div class="excerpt" style="margin-top: -10px;">
            <a class="post-heading" >Descargar</a>
            
            <p>
            Puede descargar ahora el libro con el link expuesto m&aacute;s abajo.
            <b>Opcionalmente</b> puede dejarnos sus datos:<br/>
            <form action="descarga.php" method="POST" id="download">
                <span style="padding: 30px 5px;">Nombre: </span>
                <input type="text" name="nombre" size="25"/><br/>

                <span style="padding: 30px 5px;">Email: </span>
                <input type="text" name="email" size="35"/><br/>

                Comentarios: <br/><textarea rows="5" cols="50" name="coment" size="35"></textarea> <br/>

                <input type="button" 
                       value="descargar PDF (mas comun)"  
                       style="font-size: 1.2em;color:blue;font-weight: bolder;"
                       onClick="setAction('descarga.php')"/>
                
                <input type="button" 
                       onClick="setAction('descarga-ebook.php')"
                       value="descargar EPUB (para tablet/mobile/ebook reader)"  
                       style="font-size: 1.2em;color:blue;font-weight: bolder;"/>

                <br/><br/><small>Tambien puede contactar al autor por email a <a href="mailto:manuelvazquezmurillo@gmail.com">manuelvazquezmurillo@gmail.com</a></small>
            </form>
            </p>
    </div>
    
</article>
                				
</div>

<?php include 'inc/sidebar.php'; ?>
            
	  </div>
	</div>
	<!-- ENDS MAIN -->
	
	<!-- JavaScript at the bottom for fast page loading -->
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	
	<!-- scripts concatenated and minified via build script -->
	<script src="js/custom.js"></script>
	
	<!-- superfish -->
	<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
	<script  src="js/superfish-1.4.8/js/superfish.js"></script>
	<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
	<!-- ENDS superfish -->
	
	<script src="js/tweet/jquery.tweet.js" ></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nivo.slider.js" ></script>
	<script src="js/css3-mediaqueries.js"></script>
	<script src="js/tabs.js"></script>
	<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
	<script src="js/moveform.js"></script>
	<!-- end scripts -->
<!-- Google Code for descargar libro Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 989940321;
var google_conversion_language = "es";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "lrt7CJeY4wQQ4ZSF2AM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/989940321/?value=0&amp;label=lrt7CJeY4wQQ4ZSF2AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script type="text/javascript">                    
function setAction(action)
    {
    document.getElementById("download").action = action;
    document.getElementById("download").submit();
    }
</script>

</body>
</html>