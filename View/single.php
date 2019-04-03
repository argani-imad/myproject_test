<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
// if(!isset($_SESSION['ard465yuhfml47ojvcf'])){
//                 header("Location:../index.php");
//                 exit();
// }
include('../controller/controller_bd.php');
include('../controller/controller_ffami.php');
include('../controller/controller_fsfami.php');
include('../controller/controller_ffami3.php');
include('../controller/controller_fserie.php');
include('../controller/controller_ffourn.php');
include('../controller/controller_partsof.php');

?>

<!DOCTYPE HTML>
<html>
<head>
<title>E-catalogue</title>
<link href="css/styleNavBar.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/StyleSliderSingle.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
   <link rel="stylesheet" href="css/stylesheet-pure-css.css">
		<!-- the mousewheel plugin -->
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>


<!-- --------------------------------------------------------------------- -->

<style type="text/css">

h3{


	font-size: 1.5em;
    color: #FFFFFF;
    margin: 2px;
    padding: .5em;
       background: #333;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 3px;
    font-family: 'Lato', sans-serif;
}

</style>


<!-- ------------------------------ SOUS MENU ----------------------------------------- -->

<style>
.topnav {
	width: 213px;
	padding: 40px 28px 25px 0;
	font-family: "CenturyGothicRegular", "Century Gothic", Arial, Helvetica, sans-serif;
}

ul.topnav {
	padding: 0;
	margin: 0;
	font-size: 1em;
	line-height: 0.5em;
	list-style: none;
	    width: 100%;
}

ul.topnav li {}

ul.topnav li a {
	line-height: 10px;
	font-size: 11px;
	padding: 10px 5px;
	color: #000;
	display: block;
	text-decoration: none;
	font-weight: bolder;
}

ul.topnav li a:hover {
	background-color:#675C7C;
	color:white;
}

ul.topnav ul {
	margin: 0;
	padding: 0;
	display: none;
}

ul.topnav ul li {
	margin: 0;
	padding: 0;
	clear: both;
}

ul.topnav ul li a {
	padding-left: 20px;
	font-size: 10px;
	font-weight: normal;
	outline:0;
}

ul.topnav ul li a:hover {
	background-color:#D3C99C;
	color:#f5f5f5;
}

ul.topnav ul ul li a {
	color:black;
	padding-left: 40px;
}

ul.topnav ul ul li a:hover {
	background-color:#D3CEB8;
	color:#675C7C;
}


ul.topnav span{
	float:right;
	color: #e51e20;
}





	/******Scroll********/


/* For the "inset" look only */

/*body {
    position: absolute;
    top: 20px;
    left: 20px;
    bottom: 20px;
    right: 20px;
    padding: 30px; 
    overflow-y: scroll;
    overflow-x: hidden;
}

*/

/* Let's get this party started */
::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(255,0,0,0.8); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(255,0,0,0.4); 
}



</style>



<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/scriptbreaker-multiple-accordion-1.js"></script>


<link href="css/StyleSliderSingle.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>

			

</head>
<body>
	<!--header-->
		<div class="header">
			<!-- <div class="header-top">
			<div class="container">
				 <div class="lang_list">
					<select tabindex="4" class="dropdown1">
						<option value="" class="label" value="">En</option>
						<option value="1">English</option>
						<option value="2">French</option>
						<option value="3">German</option>
					</select>
   			</div>
				<div class="top-right">
				<ul>
					<li class="text">

						<a href="login.html">login</a>


					</li>
					<li><div class="cart box_1">
							<a href="checkout.html">
								 <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div></li>
				</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			</div> -->

		<div class="header-two navbar navbar-default"><!--header-two-->
			<!-- <div class="container"> -->
			<div class="logo" data-wow-delay=".7s">
					<h1><a href="products2.php"><img src="images/sofa.png"></img> </a></h1>
				</div>
				<div class="nav navbar-nav header-two-left">
					<ul>
							<!-- <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"> USER</span></a></li> -->
						<li><a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"><?php echo " ".date("d/m/Y"); ?></span></a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+212(0) 5 22 28 00 24</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:sofa@sofamaroc.com">sofa@sofamaroc.com</a></li>	
						<!-- <li><a href="#"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACTEZ-NOS</a>	</li>		 -->
					</ul>
				</div>
				
				
				
			<!-- </div> -->
		</div>

		

			<div class="header-bottom">
					<div class="container" style="box-shadow: 1px 1px 12px #555;">

				
					</div>
				</div>
			</div>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>

<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/imagezoom.js"></script>

						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>


<body>
	<!--header-->
	<?php 
	controller_setStk($_GET['p']);
	$prodDetail=controller_ReadOnePartsof(); 

	?>
<div class="content">
	<div class="product-model">	 
	 <div class="container" style="box-shadow: 1px 1px 12px #555;overflow-x: hidden;overflow-y: scroll;height:493px;">
		<h2></h2>	

				<div class="single-grids">
					
					<div class="col-md-4 single-grid">		
						<div class="flexslider">
							<ul class="slides">
								<li >
									<div class="thumb-image"> 

											<?php  $photo=trim('../../SOFA/phart/'.trim($prodDetail[0]['CDPHOT']).'.jpg');  

												//echo trim($photo);
												if (file_exists($photo)) {

												?>

														<img src="<?php echo $photo; ?>" data-imagezoom="true"  class="img-responsive" alt="">

												  <?php
												}else{

												?>
													<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
												<?php
												}

												?>
							
									</div>
								</li>
								<!-- <li data-thumb="../../../../../../PRODW/SOFA/phart/000000004.jpg">
									 <div class="thumb-image"> <img src="images/si1.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="../../../../../../PRODW/SOFA/phart/000000004.jpg">
								   <div class="thumb-image"> <img src="images/si2.jpg" data-imagezoom="true" class="img-responsive"> </div>
								</li>  -->
							</ul>
						</div>
					</div>	


					<div class="col-md-4 single-grid simpleCart_shelfItem">		
						<h2><?php echo utf8_encode(trim(ucfirst(strtolower($prodDetail[0]['DES'])))); ?></h2>
							<!-- <p style="word-wrap: break-word;"><?php echo utf8_encode($prodDetail[0]['ZLIB2']); ?></p> -->
								
							<div class="galry">
								<!-- <div class="prices">
									<h5 class="item_price"><?php
							


								 if($prodDetail[0]['PV']=='.00'){
									echo "<br>";
								}else{
								echo number_format($prodDetail[0]['PV'],2,',',' ').' DH' ; 

								}?></h5>

								</div> -->
								
								<div class="clearfix"></div>
							</div>
								<!-- <p class="qty"> Qty :  </p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small"> -->


			<?php  $pdf=trim('../../SOFA/FichTech/'.$prodDetail[0]['CDFICH'].'.pdf');  
						
						if (file_exists($pdf)) {

						// ?>

					<a href="<?php echo $pdf; ?>" target="_blank"><img class="pdf" src="images/iconeFiche.png" style="width: 28%;"></a>
					

				<?php  }

				
				// echo "First char : ".$res[0];

			?>
				
				
								<!-- <a href="../../SOFA/FichTech/000000005.pdf" target="_blank"><img class="pdf2" src="images/pdf.png" ></a> -->
							


							<div class="btn_form">
								<!-- <a href="#" class="add-cart item_add">ADD TO CART</a>	 -->

							</div>
							<div class="tag">
								
								<!-- 
								<?php 
								controller_setCfam($prodDetail[0]['CFAM']);
								$familles1=controller_ReadOneFfami();

											controller_setCsfam($prodDetail[0]['CSFAM']);
											$familles2=controller_ReadOneFsfami();

									
														controller_setCfam31($prodDetail[0]['CFAM3']);
														$familles3=controller_ReadOneFfami3();

																			
																				controller_setCfam_Fserie($prodDetail[0]['CSERI']);
																				$familles4=controller_ReadOneFserie();
																					?>
								

								<p>Categorie :  <?php echo $familles1[0]['DESF'].' 
								/'.$familles2[0]['DESSF'].'
								/'.$familles3[0]['DES3'].'
								/'.$familles4[0]['DESER']; ?> 
							</p> -->
							
							</div>
					</div>
					<div class="clearfix"> </div>
				</div>
					
					 
	      </div>
		</div>
		
		<div class="container">

		
            	<?php  

            	// echo "FAM1 : ".$prodDetail[0]['CFAM'];
            	// echo "FAM2 : ".$prodDetail[0]['CSFAM'];
            	// echo "FAM3 : ".$prodDetail[0]['CFAM3'];
            	// echo "FAM4 : ".$prodDetail[0]['CSERI'];
            	// echo "FAM5 : ".$prodDetail[0]['CFOUR'];

         		// controller_setCfam3_partsof($prodDetail[0]['CFAM3']);
            	// controller_setCseri_partsof($prodDetail[0]['CSERI']);
            	// controller_setCfour_partsof($prodDetail[0]['CFOUR']);
            	// controller_setStk($prodDetail[0]['STK']);
            	$res=explode(" ",$prodDetail[0]['DES']);
            	$res2=explode(".",$prodDetail[0]['DES']);
            	controller_setDes_partsof($res[0]);
            	controller_setCsfam_partsof($_GET['p']);
   
            	$Sims=controller_ProdSimilaire1();

            	controller_setDes_partsof($res2[0]);
            	controller_setCsfam_partsof($_GET['p']);
            	$Simls=controller_ProdSimilaire1();
            	// controller_setCfam_partsof($prodDetail[0]['CFAM']);
            	// controller_setCsfam_partsof($prodDetail[0]['CSFAM']);
            	// controller_setCfam3_partsof($prodDetail[0]['CFAM3']);
            	// controller_setCseri_partsof($prodDetail[0]['CSERI']);
            	// controller_setCfour_partsof($prodDetail[0]['CFOUR']);
            	// controller_setStk($prodDetail[0]['STK']);
            	// $Simil=controller_ProdSimilaire2();

            	// if(count($Sims)>0){
            		
            	// 	$similrs=$Sims;

            	// }elseif (count($Simil)>0) {

            	// 	$similrs=$Simil;
            	// }

            	
				if(count($Sims)>0 or count($Simls)>0){

            	if(count($Sims)>0){ ?>
           		
            		<h2>Produits similaire<?php echo "(".count($Sims).")" ?></h2>

            <?php 	}elseif (count($Simls)>0) {?>
            	
				<h2>Produits similaire<?php echo "(".count($Simls).")" ?></h2>

          <?php  } ?>



         <ul id="flexiselDemo3" style="display:inline-flex;">

            
           	 	<?php foreach ($Sims as $Sim){ ?>
           	 

		<?php  $photo=trim('../../SOFA/phart/'.trim($Sim['CDPHOT']).'.jpg');

		if (file_exists($photo)) { ?>
				
			<li><img  class="imgSlider" src="<?php echo $photo ?>" style="width:150px;height:150px;" /><div class="grid-flex"><a href="single.php?p=<?php echo $Sim['STK'] ; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($Sim['DES'])))); ?></a></div></li>

		<?php }else{ ?>
			<li><img src="../../SOFA/phart/indispo.png" style="width:150px;height:150px;"/><div class="grid-flex"><a href="single.php?p=<?php echo $Sim['STK'] ; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($Sim['DES'])))); ?></a></div></li>
		<?php	} } 
						}
			
		?>


		 </ul>
		</div>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	

		
	
	<script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
	</script>
			
</body>
</html>