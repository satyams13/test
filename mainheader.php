<?
//include_once("../../akona/public_html/functions/include_public.php");
$HDR_UNAME = guess_session();
if ($HDR_UNAME) {
        $user = DB_getuserbyname($HDR_UNAME);
        $utid = $user['user_level'];
} else {
        $user = array();
        $utid = 0;
}

switch ($utid) {
        case "5": $lvl = 'Administrator'; break;
        case "4": $lvl = 'Distributor'; break;
        case "3": $lvl = 'Sales Rep'; break;
        case "2": $lvl = 'Dealer'; break;
        case "1": $lvl = 'Team Member'; break;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home | Sherwood Scuba</title>
        <meta name="description" content="">
        <meta name="DESCRIPTION" content="SHERWOOD SCUBA is one of the world's leading dive equipment manufacturers supplying dive operations and resorts around the world.">

		<meta name="KEYWORDS" content="SherwoodScuba.com,sherwood scuba,regulators,dive computers,pressure gauges,buoyancy compensators,accessories,masks,fins,snorkels,tanks,valves,cylinders,tanks,wisdom,scuba diving,equipment,recreation,sporting goods,BC,BCs,Sherwood,Shurwood,diving,swimming,snorkeling">
        <meta name="viewport" content="width=device-width">
                
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>

        <script type="text/javascript" src="js/jcarousel.ajax.js"></script>
        <script src="js/bootstrap-combobox.js"></script>
        <script src="js/main.js"></script>

        <!-- Flex Slider -->
        <link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
        <script src="flexslider/jquery.flexslider.js"></script>
        <script type="text/javascript" charset="utf-8">
         $(window).load(function() {

				var maxHeight = -1;

				$('.slides li').each(function() {
				  maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
				});

				$('.slides li').each(function() {
				  $(this).height(maxHeight);
				});
				
				maxHeight = -1;

				$('.jcarousel li img').each(function() {
				  maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
				});

				$('.jcarousel li').each(function() {
				  $(this).height(maxHeight);
				});
			

				$(function() {
				   $('li img').before('<span class="vert-center"></span>');
				});

				$('.flexslider').flexslider({
						animation: "slide",
					  });
		});


        </script>

        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-responsive.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css"> -->
        <link rel="stylesheet" type="text/css" href="css/jcarousel.ajax.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-combobox.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/html5shiv.js"><\/script>')</script>
        <![endif]-->
        
        
    </head>
