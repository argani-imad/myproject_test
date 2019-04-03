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

<!-- <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script> -->
		<script type="text/javascript" id="sourcecode">
			// $(function()
			// {
			// 	$('.scroll-pane').jScrollPane();
			// });
		</script>

<!-- //the jScrollPane script -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
   <link rel="stylesheet" href="css/stylesheet-pure-css.css">
		<!-- the mousewheel plugin -->
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>


		<link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
        <script src="js/script.js"></script>
<!-- -------------------------------------------------------------------- -->

<style type="text/css">

h3{


	font-size: 1.5em;
    color: #FFFFFF;
    margin: 2px;
    padding: .5em;
       background: #000;
    text-transform: capitalize;
    text-align: center;
    letter-spacing: 3px;
    font-family: 'Lato', sans-serif;
}

</style>


<!-- ------------------------------ SOUS MENU ----------------------------------------- -->





<link rel="stylesheet" href="css/nav.css">

<style type="text/css">

/*.topnav {
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
	    font-size: 13px;
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
	font-size: 12px;
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
*/



</style>




<!-- <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script> -->
<script type="text/javascript" src="js/scriptbreaker-multiple-accordion-1.js"></script>
<script language="JavaScript">

$(document).ready(function() {
	$(".topnav").accordion({
		accordion:false,
		speed: 500,
		closedSign: '[+]',
		openedSign: '[-]'
	});
});

</script>
			
<script type="text/javascript">


	function rechercheMarque(m,a,b,c,d,e) {
		//alert("AAAA");


		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'search.php',                       
         data:{"m":m ,"fam1":a,"fam2":b,"fam3":c,"fam4":d,"pag":e},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){
			//alert(msg);
             
            //alert(a+' '+b+' '+c+' '+d);
            $('#rech').html(msg);
		
				// $('#ajaxLoad').hide();
				// $('#imgLoad').hide();
         }

    }); 	

	}



</script>

<script type="text/javascript">


	function recherche2(p,mrq,c) {
		//alert("AAAA");


		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'search.php',                       
         data:{"r":$('#search').val(),"p":p,"mrq":$('#marque option:selected').val(),"mrq":mrq,"c":c},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){
			//alert(msg);
             
            //alert(a+' '+b+' '+c+' '+d);
             $('#rech').html(msg);
		
				// $('#ajaxLoad').hide();
				// $('#imgLoad').hide();
         }

    }); 	

	}
</script>
<script type="text/javascript">

	function recherche3(a,b,c,d,f,e) {
		//alert("AAAA");


		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'search.php',                       
         data:{"f1":a,"f2":b,"f3":c,"f4":d,"f5":f,"pg":e},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){
			//alert(msg);
             
            //alert(a+' '+b+' '+c+' '+d);
            $('#rech').html(msg);
		
				// $('#ajaxLoad').hide();
				// $('#imgLoad').hide();
         }

    }); 	

	}


</script>


<script type="text/javascript">


	function detail(a,b,t,ch) {
		//alert("AAAA");


		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'search.php',                       
         data:{"detail":a,"pdf":b,"type":t,"ch":ch},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){

            $('#rech').html(msg);

         }

    }); 	

	}


</script>
<script type="text/javascript">


	function upload1(a,b,c,d){
		//alert("AAAA");


		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'upload.php',                       
         data:{"v1":a,"v2":b,"v3":c,"v4":d},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){

          

         }

    }); 	

	}

function remove(a){
		//alert("AAAA");


		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'upload.php',                       
         data:{"v5":a},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){

          

         }

    }); 	

	}

function Hiden(){

if($('#preview').attr('src')=="../../SOFA/phart/indispo.png"){

	$("#remove").hide();
}else{
	$("#remove").show();
}



}


</script>
<script type="text/javascript">


$(function() {
    $('#marque2').change(function() {

    	$('#search').val("");    	
		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'search.php',                       
         data:{"mrq":$('#marque2 option:selected').val()},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){

         	$('#rech').html(msg);
         }

    }); 




    });
});


</script>


<script>
	 function click(i) {

		$(document).ready(function(){
	    $("button").click(function(){
	        alert($("#fam"+i).attr("href"));
	    });
		});
	}
</script>


<script type="text/javascript">

$('input[type=radio]').on('change', function() {
    $(this).closest("marque").submit();
});

</script>


<script>

function clic() {
var list = document.getElementsByClassName("mrq");

for (var i = 0; i < list.length; i++) {
list[i].style.color = "#000000";

}
}

</script>



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
					<ul class="infos">
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
					<div class="container" id="header" >
						<!-- style="box-shadow: 1px 1px 12px #555;" -->


			
<!-- search-scripts -->

			<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form action="" id="form2" onsubmit="recherche2(1,'',1)">
							<input class="sb-search-input" placeholder="Entrez un mot clé..."  type="search" name="search" id="search">
							<!-- pattern=".{3,}" required title="3 characters minimum" -->
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search" > </span>
						</form>
					</div>
					
				</div>
					 <script src="js/classie.js"></script>
					  <script src="js/uisearch.js"></script>

						<script>
							 new UISearch(document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
					<div class="clearfix"></div>
					</div>
				</div>
			</div>