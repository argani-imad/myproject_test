<?php	
session_start();
include('../controller/controller_bd.php');
include('../controller/controller_ffami.php');
include('../controller/controller_fsfami.php');
include('../controller/controller_ffami3.php');
include('../controller/controller_fserie.php');
include('../controller/controller_ffourn.php');
include('../controller/controller_partsof.php');

// header("Refresh:0; url=products.php");
// echo $_POST['mrq'];



?>


<!-- <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script> -->
<script src="js/imagezoom.js"></script> 

<!-- FlexSlider -->
<!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />	 -->
<!-- <link href="css/StyleSliderSingle.css" rel="stylesheet" type="text/css" media="all" /> -->

<link href="css/pagination.css" rel="stylesheet" type="text/css" media="all" />




<!-- Style pagination -->

<!-- <link href="css/stylesPagination.css" rel="stylesheet"> -->

<?php if ( (isset($_POST['detail']) or isset($_POST['pdf']) ) and ( ($_SESSION['marq']=="1" or $_SESSION['marq']=="2") ) ) {


controller_setStk($_POST['detail']);
$prodDetail=controller_ReadOnePartsof(); 
				 	
 if($_POST['ch']==1){
 						 controller_setCfam($prodDetail[0]['CFAM']);
						 $marq1=controller_ReadOneFfami();
						 controller_setCfam_Fsfami($prodDetail[0]['CFAM']);
						 $CountMarq1=controller_ReadCountSfamiOfFami();


						 controller_setCfam_Fsfami($prodDetail[0]['CFAM']);
						 controller_setCsfam($prodDetail[0]['CSFAM']);
						 $marq2=controller_ReadDesc_fsfami();
						 controller_setCfam_Ffami3($prodDetail[0]['CFAM']);
						 controller_setCsfam_Ffami3($prodDetail[0]['CSFAM']);
						 $countMarq2=controller_ReadCountFfami3OfSfami();




						 controller_setCfam_Ffami3($prodDetail[0]['CFAM']);
						 controller_setCsfam_Ffami3($prodDetail[0]['CSFAM']);
						 controller_setCfam31($prodDetail[0]['CFAM3']);
						 $marq3=controller_ReadDesc_ffami3();
						 controller_setCfam_Fserie($prodDetail[0]['CFAM']);
						 controller_setCsfam_Fserie($prodDetail[0]['CSFAM']);
						 controller_setCfam31_Fserie($prodDetail[0]['CFAM3']);
						 $countMarq3=controller_ReadCountSerieOfFfami3();




						controller_setCfam_Fserie($prodDetail[0]['CFAM']);
						controller_setCsfam_Fserie($prodDetail[0]['CSFAM']);
						controller_setCfam31_Fserie($prodDetail[0]['CFAM3']);
						controller_setCser($prodDetail[0]['CSERI']);
						$marq4=controller_ReadDesc_fserie();
						controller_setCfam_partsof($prodDetail[0]['CFAM']);
						controller_setCsfam_partsof($prodDetail[0]['CSFAM']);
						controller_setCfam3_partsof($prodDetail[0]['CFAM3']);
						controller_setCseri_partsof($prodDetail[0]['CSERI']);
						$rech="";
						$countMarq4=controller_ReadCountProd($rech);


						controller_setCfour($prodDetail[0]['CFOUR']);
						$mrq5=controller_ReadOneFfourn();
						controller_setCfour_partsof($prodDetail[0]['CFOUR']);
						controller_setCfam_partsof($prodDetail[0]['CFAM']);
						controller_setCsfam_partsof($prodDetail[0]['CSFAM']);
						controller_setCfam3_partsof($prodDetail[0]['CFAM3']);
						controller_setCseri_partsof($prodDetail[0]['CSERI']);
						$counMarq5=controller_ReadMarquProd("a");
						?>
				   
					    <!--/.navbar-header-->			
		
						
									<ul id="breadcrumbs-two">
											<li><a href="#" onclick="location.reload();">Accueil</a></li>

											<?php  if(count($marq1)!=0){ ?><li><a href="#" onclick="recherche3(<?php echo $prodDetail[0]['CFAM']; ?>,'','','','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq1[0]['DESF']))); ?></a></li><?php } ?>

											<?php if(count($marq2)!=0){?><li><a href="#" onclick="recherche3(<?php echo  $prodDetail[0]['CFAM']; ?>,<?php echo $prodDetail[0]['CSFAM']; ?>,'','','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq2[0]['DESSF'])));?></ll><?php } ?>

											<?php if(count($marq3)!=0){ ?><li><a href="#" onclick="recherche3(<?php echo $prodDetail[0]['CFAM']; ?>,<?php echo $prodDetail[0]['CSFAM']; ?>,<?php echo $prodDetail[0]['CFAM3']; ?>,'','',1);"> <?php echo utf8_encode(ucfirst(strtolower($marq3[0]['DES3']))); ?></a></li><?php } ?>
	
											<?php if(count($marq4)!=0){ ?><li><a href="#" onclick="recherche3(<?php echo $prodDetail[0]['CFAM']; ?>,<?php echo $prodDetail[0]['CSFAM']; ?>,<?php echo $prodDetail[0]['CFAM3']; ?>,'<?php echo $prodDetail[0]['CSERI']; ?>','',1);" > <?php echo utf8_encode(ucfirst(strtolower($marq4[0]['DESER']))).' ('.$countMarq4[0][0].')'; ?></a></li><?php }?>

											<?php if(count($mrq5)!=0){ ?><li><a href="#" onclick="recherche3(<?php echo $prodDetail[0]['CFAM']; ?>,<?php echo $prodDetail[0]['CSFAM']; ?>,<?php echo $prodDetail[0]['CFAM3']; ?>,'<?php echo $prodDetail[0]['CSERI']; ?>','<?php echo $prodDetail[0]['CFOUR']; ?>',1);" > <?php echo utf8_encode(ucfirst(strtolower($mrq5[0]['DESFR1']))).' ('.$counMarq5[0][0].')'; ?></a></li><?php }?>

									</ul>


<?php }elseif ($_POST['ch']==2) {


						controller_setCfour($prodDetail[0]['CFOUR']);
						$m=controller_ReadOneFfourn();

					 	 controller_setCfam($prodDetail[0]['CFAM']);
						 $marq1=controller_ReadOneFfami();
			 

						 controller_setCfam_Fsfami($prodDetail[0]['CFAM']);
						 controller_setCsfam($prodDetail[0]['CSFAM']);
						 $marq2=controller_ReadDesc_fsfami();


						 controller_setCfam_Ffami3($prodDetail[0]['CFAM']);
						 controller_setCsfam_Ffami3($prodDetail[0]['CSFAM']);
						 controller_setCfam31($prodDetail[0]['CFAM3']);
						 $marq3=controller_ReadDesc_ffami3();
					

						controller_setCfam_Fserie($prodDetail[0]['CFAM']);
						controller_setCsfam_Fserie($prodDetail[0]['CSFAM']);
						controller_setCfam31_Fserie($prodDetail[0]['CFAM3']);
						controller_setCser($prodDetail[0]['CSERI']);
						$marq4=controller_ReadDesc_fserie();
						// controller_setCfam_partsof($_POST['fam1']);
						// controller_setCsfam_partsof($_POST['fam2']);
						// controller_setCfam3_partsof($_POST['fam3']);
						// controller_setCseri_partsof($_POST['fam4']);
						// $countMarq4=controller_ReadCountProd("");

						controller_setCfour_partsof($prodDetail[0]['CFOUR']);
						controller_setCfam_partsof($prodDetail[0]['CFAM']);
						controller_setCsfam_partsof($prodDetail[0]['CSFAM']);
						controller_setCfam3_partsof($prodDetail[0]['CFAM3']);
						controller_setCseri_partsof($prodDetail[0]['CSERI']);
						$countMarq4=controller_ReadMarquProd("a");




						?>
				   
					    <!--/.navbar-header-->			
		
						
									<ul id="breadcrumbs-two">
											<li><a href="#" onclick="location.reload();">Accueil</a></li>

											<?php  if(count($m)!=0){ ?><li><a href="#" onclick="rechercheMarque('<?php echo $prodDetail[0]['CFOUR'];  ?>','','','','',1);" ><?php echo utf8_encode(ucfirst(strtolower($m[0]['DESFR1']))); ?></a></li><?php } ?>

											<?php  if(count($marq1)!=0){ ?><li><a href="#" onclick="rechercheMarque('<?php echo $prodDetail[0]['CFOUR'];  ?>',<?php echo $prodDetail[0]['CFAM']; ?>,'','','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq1[0]['DESF']))); ?></a></li><?php } ?>

											<?php if(count($marq2)!=0){?><li><a href="#" onclick="rechercheMarque('<?php echo $prodDetail[0]['CFOUR']; ?>',<?php echo $prodDetail[0]['CFAM'] ;?>,<?php echo $prodDetail[0]['CSFAM']; ?>,'','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq2[0]['DESSF'])));?></ll><?php } ?>

											<?php if(count($marq3)!=0){ ?><li><a href="#" onclick="rechercheMarque('<?php echo $prodDetail[0]['CFOUR']; ?>',<?php echo $prodDetail[0]['CFAM']; ?>,<?php echo $prodDetail[0]['CSFAM']; ?>,<?php echo $prodDetail[0]['CFAM3']; ?>,'',1);"> <?php echo utf8_encode(ucfirst(strtolower($marq3[0]['DES3']))); ?></a></li><?php } ?>
	
											<?php if(count($marq4)!=0){ ?><li><a href="#" onclick="rechercheMarque('<?php echo $prodDetail[0]['CFOUR']; ?>',<?php echo $prodDetail[0]['CFAM']; ?>,<?php echo $prodDetail[0]['CSFAM']; ?>,<?php echo $prodDetail[0]['CFAM3']; ?>,'<?php echo $prodDetail[0]['CSERI']; ?>',1);" > <?php echo utf8_encode(ucfirst(strtolower($marq4[0]['DESER']))).' ('.$countMarq4[0][0].')'; ?></a></li><?php }?>
									</ul>


<?php } ?>



<?php if($_POST['type']==1){ ?>



<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>


<div class="content">
		<div class="single-grids">
					
					<div class="col-md-4 single-grid">		
						<div class="flexslider">
							<ul class="slides">
								<li >
									<div class="thumb-image"> 

											<?php  $photo=trim('../../SOFA/phart/'.trim($prodDetail[0]['CDPHOT']).'.jpg');  

												//echo trim($photo);
												if (file_exists($photo)){?>

														<img src="<?php echo $photo; ?>" data-imagezoom="true"  class="img-responsive" alt="">

												  <?php
												}else{

												?>

												<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

												<?php }	?>
							
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
					
								
						<!-- 	<div class="galry">								
								<div class="clearfix"></div>
							</div>
								 -->
								
							
									


							<!-- 	<ul class="size" style="margin-top:46px;">
												<h1>Description</h1>
				
												<li><?php echo utf8_encode(trim(ucfirst(strtolower($prodDetail[0]['ZLIB'])))); ?></li>
								</ul> -->

									
								<?php controller_setCfour($prodDetail[0]['CFOUR']);
								$m=controller_ReadOneFfourn(); ?>

								<ul class="size" style="margin-top: 19px;margin-bottom: -28px;">
												
									
									<li style="border-bottom: 1px solid #E8E5E5;width: 180%;display: inline-flex;"><div style="font-weight: bolder;font-size: 16px;width: 20%;">N° Produit </div>: <?php echo  utf8_encode(trim(ucfirst(strtolower($prodDetail[0]['STK'])))); ?></li>
								</ul>

								<ul class="size" style="margin-top:28px;margin-bottom: -28px;">
												
									
									<li style="border-bottom: 1px solid #E8E5E5;width: 180%;display: inline-flex;"><div style="font-weight: bolder;font-size: 16px;width: 20%;">Marque </div>: <?php echo  utf8_encode(trim(ucfirst(strtolower($m[0]['DESFR1'])))); ?></li>
								</ul>

								<?php controller_setCfam($prodDetail[0]['CFAM']);
						 			  $marq1=controller_ReadOneFfami(); ?>
						 
								<ul class="size" style="margin-top:28px;margin-bottom: -28px;">
												
									<li style="border-bottom: 1px solid #E8E5E5;width: 180%;display: inline-flex;"><div style="font-weight: bolder;font-size: 16px;width: 20%;">Famille </div>: <?php echo utf8_encode(trim(ucfirst(strtolower($marq1[0]['DESF'])))); ?></li>
								</ul>

	 					        <?php  controller_setCfam_Fsfami($prodDetail[0]['CFAM']);
							    controller_setCsfam($prodDetail[0]['CSFAM']);
							    $marq2=controller_ReadDesc_fsfami(); ?>

						 		<ul class="size" style="margin-top:28px;margin-bottom: -34px;">
												
									<li style="width: 180%;display: inline-flex;"><div style="font-weight: bolder;font-size: 16px;width: 20%;"></div>&nbsp; <?php echo utf8_encode(trim(ucfirst(strtolower($marq2[0]['DESSF'])))); ?></li>
								</ul>

								 <?php controller_setCfam_Ffami3($prodDetail[0]['CFAM']);
								 controller_setCsfam_Ffami3($prodDetail[0]['CSFAM']);
								 controller_setCfam31($prodDetail[0]['CFAM3']);
								 $marq3=controller_ReadDesc_ffami3(); ?>

								 <ul class="size" style="margin-top:28px;margin-bottom: -34px;">
												
											<li style="width: 180%;display: inline-flex;"><div style="font-weight: bolder;font-size: 16px;width: 20%;"></div>&nbsp; <?php echo utf8_encode(trim(ucfirst(strtolower($marq3[0]['DES3'])))); ?></li>
								</ul>

								<?php controller_setCfam_Fserie($prodDetail[0]['CFAM']);
								controller_setCsfam_Fserie($prodDetail[0]['CSFAM']);
								controller_setCfam31_Fserie($prodDetail[0]['CFAM3']);
								controller_setCser($prodDetail[0]['CSERI']);
								$marq4=controller_ReadDesc_fserie(); ?>

								 <ul class="size" style="margin-top:28px;margin-bottom: -34px;">
												
											<li style="border-bottom: 1px solid #E8E5E5;width: 180%;display: inline-flex;"><div style="font-weight: bolder;font-size: 16px;width: 20%;">Serie </div>: <?php echo utf8_encode(trim(ucfirst(strtolower($marq4[0]['DESER'])))); ?></li>
								</ul>

									<?php  $pdf=trim('../../SOFA/FichTech/'.$prodDetail[0]['CDFICH'].'.pdf');  
									
									if (file_exists($pdf)) {

											if($_POST['ch']==1){ ?>

									<a class="pdf" href="#" onclick="detail('<?php echo $prodDetail[0]['STK']; ?>','<?php  echo trim($prodDetail[0]['CDFICH'])?>','2','1');"><img class="pdf" src="images/iconeFiche.png" ></a>
									<!-- style="width: 28%;margin-top: 36px;" -->

										<?php }elseif ($_POST['ch']==2){ ?>

									<a class="pdf" href="#" onclick="detail('<?php echo $prodDetail[0]['STK']; ?>','<?php  echo trim($prodDetail[0]['CDFICH'])?>','2','2');" ><img class="pdf" src="images/iconeFiche.png" ></a>
									<!-- style="width: 28%;margin-top: 36px;" -->
											<?php } ?>

								
								

									<?php  } ?>

<!-- 
					<style type="text/css">
ul.tag-men {
    padding: 0.3em 0;
    border-top: 1px solid #C4C3C3;
    border-bottom: 1px solid #C4C3C3;
    border: 1px solid #C4C3C3;
    margin: 10px 0 0 0;
}
ul.tag-men li {
    list-style: none;
    color: #000;
    margin: 5px 0;
    font-weight: 300;
    font-size: 0.9em;
    font-family: 'BreeSerif-Regular';
}
</style>
								<ul class="tag-men">Description
									<li><span>TAG</span>
									<span class="women1">: Women,</span></li>
									<li><span>SKU</span>
									<span class="women1">: CK09</span></li>
								</ul> -->
<?php 
// if( (trim($prodDetail[0]['DESC1'])!="") or ( trim($prodDetail[0]['DESC2'])!="" ) or (trim($prodDetail[0]['DESC3'])!="") or (trim($prodDetail[0]['DESC4'])!="") or (trim($prodDetail[0]['DESC5'])!="") or (trim($prodDetail[0]['DESC6'])!="") or (trim($prodDetail[0]['DESC7'])!="") ){ ?>
  <h3 style="border-radius: 4px;background: #999;color: #f5f5f5;">Description</h3>
  <div  id="desc" >
  	<!-- style="width: 155%;margin: 2px 0px -53px  81px;" -->
      <div class="panel-body"><?php echo $prodDetail[0]['DESC1'] ?><ul style="list-style-type: square;margin-left: 20px;"><li>Desc1Desc1Desc1Desc1Desc1Desc1Desc1Desc1Desc1Desc1Desc1</li></ul></div>
      <div class="panel-body"><?php echo $prodDetail[0]['DESC2'] ?><ul style="list-style-type: square;margin-left: 20px;"><li>Desc2Desc2Desc2Desc2Desc2Desc2Desc2Desc2Desc2Desc2Desc2</li></ul></div>
      <div class="panel-body"><?php echo $prodDetail[0]['DESC3'] ?><ul style="list-style-type: square;margin-left: 20px;"><li>Desc3Desc3Desc3Desc3Desc3Desc3Desc3Desc3Desc3Desc3Desc3</li></ul></div>
      <div class="panel-body"><?php echo $prodDetail[0]['DESC4'] ?><ul style="list-style-type: square;margin-left: 20px;"><li>Desc4Desc4Desc4Desc4Desc4Desc4Desc4Desc4Desc4Desc4Desc4</li></ul></div>
      <div class="panel-body"><?php echo $prodDetail[0]['DESC5'] ?><ul style="list-style-type: square;margin-left: 20px;"><li>Desc5Desc5Desc5Desc5Desc5Desc5Desc5Desc5Desc5Desc5Desc5</li></ul></div>
      <div class="panel-body"><?php echo $prodDetail[0]['DESC6'] ?><ul style="list-style-type: square;margin-left: 20px;"><li>Desc6Desc6Desc6Desc6Desc6Desc6Desc6Desc6Desc6Desc6Desc6</li></ul></div>
      <div class="panel-body"><?php echo $prodDetail[0]['DESC7'] ?><ul style="list-style-type: square;margin-left: 20px;"><li>Desc7Desc7Desc7Desc7Desc7Desc7Desc7Desc7Desc7Desc7Desc7</li></ul></div>
  </div>
<?php // } ?>
						
					</div>
				<div class="clearfix"> </div>
				</div>
					
	<div class="single">
         <div class="wrap">
     	    <div class="cont span_2_of_3">
			 
			
			<div class="clear"></div>
	
	
  
	            	<?php  

	            	// $res=explode(" ",$prodDetail[0]['DES']);
	            	// $res2=explode(".",$prodDetail[0]['DES']);

	            	// controller_setDes_partsof($res[0]);
	            	// controller_setStk($_POST['detail']);   
	            	// $Sims=controller_ProdSimilaire1();

	            	// controller_setDes_partsof($res2[0]);
	            	// controller_setStk($_POST['detail']);
	            	// $Simls=controller_ProdSimilaire1();
					            
 
   					  // $Motcle='FICHE2P FICHEPLEXO FICHE3P CABLE65 CHEMINDECABLE CABLEU APPLMURAL APPL.MURAL APPL.UNITE';

		   				   $Motcle=$prodDetail[0]['DESC8'].' '.$prodDetail[0]['DESC9'].' '.$prodDetail[0]['DESC10'];
						   $tabcle=explode(' ',trim($Motcle));
						   $cmpt=0;
						   // echo "//".$Motcle."//";
						   for ($i = 0; $i < sizeof($tabcle); $i++) {
								// if($i!=0){
									// echo $tabcle[$i].'<br> ';
						   	if ($tabcle[$i]<>''){
						   		controller_setDes_partsof($tabcle[$i]);
									// echo $tabcle[$i]."-";
					            	controller_setStk($_POST['detail']);  
					            	// echo $_POST['detail']; 
					            	// ini_set('memory_limit', '256M');
					            	$sm=controller_ProdSimilaire1();
					            	$cmpt=$cmpt+(count($sm));
						   	}
									
					            

							
							// }
								
				             }

				          if ($cmpt<>0){ ?>
						 
						<h2 style="margin-top: 57px;">Produits similaire<?php echo "(".$cmpt.")" ?></h2>

						  <?php }
				             // print_r($sm);
				             unset($sm);
						    ?>

            		

           		 

<script type="text/javascript">
(function(f,g,c,j,d,k,l){/*! Jssor */
new(function(){});var e={Fd:function(a){return-c.cos(a*c.PI)/2+.5},Hd:function(a){return a},Id:function(a){return-a*(a-2)}};var b=new function(){var h=this,Ab=/\S+/g,F=1,yb=2,fb=3,eb=4,jb=5,G,r=0,i=0,s=0,X=0,z=0,I=navigator,ob=I.appName,o=I.userAgent,p=parseFloat;function Ib(){if(!G){G={ye:"ontouchstart"in f||"createTouch"in g};var a;if(I.pointerEnabled||(a=I.msPointerEnabled))G.ad=a?"msTouchAction":"touchAction"}return G}function v(j){if(!r){r=-1;if(ob=="Microsoft Internet Explorer"&&!!f.attachEvent&&!!f.ActiveXObject){var e=o.indexOf("MSIE");r=F;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on X=@_jscript_version@*/;i=g.documentMode||s}else if(ob=="Netscape"&&!!f.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),h=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=yb;i=p(o.substring(d+8))}else if(b>=0){var k=o.substring(0,b).lastIndexOf("/");r=h>=0?eb:fb;i=p(o.substring(k+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=F;i=s=p(a[1])}}if(c>=0)z=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=jb;i=p(a[2])}}}return j==r}function q(){return v(F)}function Q(){return q()&&(i<6||g.compatMode=="BackCompat")}function db(){return v(fb)}function ib(){return v(jb)}function vb(){return db()&&z>534&&z<535}function J(){v();return z>537||i>42||r==F&&i>=11}function O(){return q()&&i<9}function wb(a){var b,c;return function(f){if(!b){b=d;var e=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,d){var b=a;if(d)b=g+e;if(f.style[b]!=l)return c=b})}return c}}function ub(b){var a;return function(c){a=a||wb(b)(c)||b;return a}}var K=ub("transform");function nb(a){return{}.toString.call(a)}var kb={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){kb["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(nb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function C(a){return a==j?String(a):kb[nb(a)]||"object"}function lb(a){for(var b in a)return d}function A(a){try{return C(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function rb(b,a){setTimeout(b,a||0)}function H(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function tb(b,a){if(i<9)b.style.filter=a}h.qe=Ib;h.id=q;h.Ae=db;h.Fe=J;h.ed=O;wb("transform");h.Yc=function(){return i};h.wc=rb;function Y(a){a.constructor===Y.caller&&a.qc&&a.qc.apply(a,Y.caller.arguments)}h.qc=Y;h.kb=function(a){if(h.Re(a))a=g.getElementById(a);return a};function t(a){return a||f.event}h.pc=t;h.Xb=function(b){b=t(b);var a=b.target||b.srcElement||g;if(a.nodeType==3)a=h.tc(a);return a};h.uc=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function D(c,d,a){if(a!==l)c.style[d]=a==l?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&f.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function ab(b,c,a,d){if(a!==l){if(a==j)a="";else d&&(a+="px");D(b,c,a)}else return p(D(b,c))}function m(c,a){var d=a?ab:D,b;if(a&4)b=ub(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Db(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Fb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=H(h,[i],d);tb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var L={S:["rotate"],L:["rotateX"],M:["rotateY"],wb:["skewX"],vb:["skewY"]};if(!J())L=B(L,{n:["scaleX",2],m:["scaleY",2],P:["translateZ",1]});function M(d,a){var c="";if(a){if(q()&&i&&i<10){delete a.L;delete a.M;delete a.P}b.e(a,function(d,b){var a=L[b];if(a){var e=a[1]||0;if(N[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(J()){if(a.U||a.V||a.P)c+=" translate3d("+(a.U||0)+"px,"+(a.V||0)+"px,"+(a.P||0)+"px)";if(a.n==l)a.n=1;if(a.m==l)a.m=1;if(a.n!=1||a.m!=1)c+=" scale3d("+a.n+", "+a.m+", 1)"}}d.style[K(d)]=c}h.Nc=m("transformOrigin",4);h.Ee=m("backfaceVisibility",4);h.he=m("transformStyle",4);h.Ge=m("perspective",6);h.Je=m("perspectiveOrigin",4);h.Me=function(a,b){if(q()&&s<9||s<10&&Q())a.style.zoom=b==1?"":b;else{var c=K(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=H(e,[g],f);a.style[c]=d}};h.Pb=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!h.se(a,d))&&b(c)}};h.a=function(a,d,b,c){a=h.kb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};h.B=function(a,c,d,b){a=h.kb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};h.zb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};h.ve=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};h.A=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};h.te=function(a,b){if(b==l)return a.textContent||a.innerText;var c=g.createTextNode(b);h.Lb(a);a.appendChild(c)};h.sb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function mb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(U(a,b)==c)return a;if(!e){var d=mb(a,c,e,b);if(d)return d}}}h.z=mb;function S(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){U(a,b)==d&&c.push(a);if(!f){var e=S(a,d,f,b);if(e.length)c=c.concat(e)}}return c}function gb(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=gb(a,c,d);if(b)return b}}}h.ie=gb;h.ze=function(b,a){return b.getElementsByTagName(a)};function B(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==l){a=c[b];var h=d[b];d[b]=g&&(A(h)||A(a))?B(g,{},h,a):a}}return d}h.Y=B;function Z(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(A(a)&&A(b)){a=Z(a,b);e=!lb(a)}!e&&(d[c]=a)}}return d}h.Mc=function(a){return C(a)=="function"};h.Re=function(a){return C(a)=="string"};h.Oe=function(a){return!isNaN(p(a))&&isFinite(a)};h.e=n;function R(a){return g.createElement(a)}h.rb=function(){return R("DIV")};h.Ie=function(){return R("SPAN")};h.Kc=function(){};function V(b,c,a){if(a==l)return b.getAttribute(c);b.setAttribute(c,a)}function U(a,b){return V(a,b)||V(a,"data-"+b)}h.o=V;h.g=U;function x(b,a){if(a==l)return b.className;b.className=a}h.Ic=x;function qb(b){var a={};n(b,function(b){a[b]=b});return a}function sb(b,a){return b.match(a||Ab)}function P(b,a){return qb(sb(b||"",a))}h.fe=sb;function bb(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){x(a,bb(" ",B(Z(P(x(a)),P(c)),P(b))))}h.tc=function(a){return a.parentNode};h.J=function(a){h.I(a,"none")};h.H=function(a,b){h.I(a,b?"none":"")};h.ud=function(b,a){b.removeAttribute(a)};h.Bd=function(){return q()&&i<10};h.Ad=function(d,a){if(a)d.style.clip="rect("+c.round(a.k||a.p||0)+"px "+c.round(a.s)+"px "+c.round(a.v)+"px "+c.round(a.i||a.q||0)+"px)";else if(a!==l){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=H(g,f,"");b.tb(d,e)}};h.Q=function(){return+new Date};h.R=function(b,a){b.appendChild(a)};h.ub=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};h.yb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};h.pd=function(a,b){n(a,function(a){h.yb(a,b)})};h.Lb=function(a){h.pd(h.sb(a,d),a)};h.od=function(a,b){var c=h.tc(a);b&1&&h.D(a,(h.j(c)-h.j(a))/2);b&2&&h.C(a,(h.l(c)-h.l(a))/2)};h.kd=function(b,a){return parseInt(b,a||10)};h.vd=p;h.se=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return k}return b===a};function W(d,c,b){var a=d.cloneNode(!c);!b&&h.ud(a,"id");return a}h.fb=W;h.db=function(e,f){var a=new Image;function b(e,d){h.B(a,"load",b);h.B(a,"abort",c);h.B(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(ib()&&i<11.6||!e)b(!e);else{h.a(a,"load",b);h.a(a,"abort",c);h.a(a,"error",c);a.src=e}};h.Rd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){h.db(a.src,b)});b()};h.Dd=function(a,g,i,h){if(h)a=W(a);var c=S(a,g);if(!c.length)c=b.ze(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=W(i);x(e,x(d));b.tb(e,d.style.cssText);b.ub(e,d);b.yb(d)}return a};function Gb(a){var k=this,p="",r=["av","pv","ds","dn"],e=[],q,j=0,f=0,d=0;function i(){E(a,q,e[d||j||f&2||f]);b.O(a,"pointer-events",d?"none":"")}function c(){j=0;i();h.B(g,"mouseup",c);h.B(g,"touchend",c);h.B(g,"touchcancel",c)}function o(a){if(d)h.zb(a);else{j=4;i();h.a(g,"mouseup",c);h.a(g,"touchend",c);h.a(g,"touchcancel",c)}}k.de=function(a){if(a===l)return f;f=a&2||a&1;i()};k.xc=function(a){if(a===l)return!d;d=a?0:3;i()};k.W=a=h.kb(a);var m=b.fe(x(a));if(m)p=m.shift();n(r,function(a){e.push(p+a)});q=bb(" ",e);e.unshift("");h.a(a,"mousedown",o);h.a(a,"touchstart",o)}h.hc=function(a){return new Gb(a)};h.O=D;h.Db=m("overflow");h.C=m("top",2);h.D=m("left",2);h.j=m("width",2);h.l=m("height",2);h.Cd=m("marginLeft",2);h.ce=m("marginTop",2);h.u=m("position");h.I=m("display");h.r=m("zIndex",1);h.oc=function(b,a,c){if(a!=l)Fb(b,a,c);else return Db(b)};h.tb=function(a,b){if(b!=l)a.style.cssText=b;else return a.style.cssText};var T={eb:h.oc,k:h.C,i:h.D,Eb:h.j,Fb:h.l,lb:h.u,af:h.I,ib:h.r};function w(f,k){var e=O(),b=J(),d=vb(),g=K(f);function i(b,d,a){var e=b.ab(u(-d/2,-a/2)),f=b.ab(u(d/2,-a/2)),g=b.ab(u(d/2,a/2)),h=b.ab(u(-d/2,a/2));b.ab(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.P||0,p=(a.L||0)%360,q=(a.M||0)%360,u=(a.S||0)%360,k=a.n,m=a.m,f=a.Ze;if(k==l)k=1;if(m==l)m=1;if(f==l)f=1;if(e){n=0;p=0;q=0;f=0}var c=new Cb(a.U,a.V,n);c.L(p);c.M(q);c.Yd(u);c.Xd(a.wb,a.vb);c.ec(k,m,f);if(b){c.qb(a.q,a.p);d.style[g]=c.Wd()}else if(!X||X<9){var o="",j={x:0,y:0};if(a.G)j=i(c,a.G,a.bb);h.ce(d,j.y);h.Cd(d,j.x);o=c.Ud();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=H(s,[t],o);tb(d,r)}}w=function(e,c){c=c||{};var g=c.q,i=c.p,f;n(T,function(a,b){f=c[b];f!==l&&a(e,f)});h.Ad(e,c.c);if(!b){g!=l&&h.D(e,(c.Dc||0)+g);i!=l&&h.C(e,(c.Ec||0)+i)}if(c.Td)if(d)rb(h.A(j,M,e,c));else a(e,c)};h.Gb=M;if(d)h.Gb=w;if(e)h.Gb=a;else if(!b)a=M;h.N=w;w(f,k)}h.Gb=w;h.N=w;function Cb(i,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,i||0,k||0,o||0,1],h=c.sin,g=c.cos,l=c.tan;function f(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(j,(a||b).concat(c))}d.ec=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.qb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.L=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.M=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.Yd=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.Xd=function(a,c){if(a||c){i=f(a);k=f(c);b=e([1,l(k),0,0,l(i),1,0,0,0,0,1,0,0,0,0,1])}};d.ab=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.Wd=function(){return"matrix3d("+b.join(",")+")"};d.Ud=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.n=function(b,c){return a.Jc(b,c,0)};a.m=function(b,c){return a.Jc(b,0,c)};a.Jc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.ab=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var N={Dc:0,Ec:0,q:0,p:0,T:1,n:1,m:1,S:0,L:0,M:0,U:0,V:0,P:0,wb:0,vb:0};h.Sd=function(a){var c=a||{};if(a)if(b.Mc(a))c={ac:c};else if(b.Mc(a.c))c.c={ac:a.c};return c};h.Pd=function(k,m,x,q,z,A,n){var a=m;if(k){a={};for(var g in m){var B=A[g]||1,w=z[g]||[0,1],f=(x-w[0])/w[1];f=c.min(c.max(f,0),1);f=f*B;var u=c.floor(f);if(f!=u)f-=u;var h=q.ac||e.Fd,i,C=k[g],o=m[g];if(b.Oe(o)){h=q[g]||h;var y=h(f);i=C+o*y}else{i=b.Y({Ib:{}},k[g]);var v=q[g]||{};b.e(o.Ib||o,function(d,a){h=v[a]||v.ac||h;var c=h(f),b=d*c;i.Ib[a]=b;i[a]+=b})}a[g]=i}var t=b.e(m,function(b,a){return N[a]!=l});t&&b.e(N,function(c,b){if(a[b]==l&&k[b]!==l)a[b]=k[b]});if(t){if(a.T)a.n=a.m=a.T;a.G=n.G;a.bb=n.bb;a.Td=d}}if(m.c&&n.qb){var p=a.c.Ib,s=(p.k||0)+(p.v||0),r=(p.i||0)+(p.s||0);a.i=(a.i||0)+r;a.k=(a.k||0)+s;a.c.i-=r;a.c.s-=r;a.c.k-=s;a.c.v-=s}if(a.c&&b.Bd()&&!a.c.k&&!a.c.i&&!a.c.p&&!a.c.q&&a.c.s==n.G&&a.c.v==n.bb)a.c=j;return a}};function n(){var a=this,d=[];function i(a,b){d.push({Jb:a,bc:b})}function h(a,c){b.e(d,function(b,e){b.Jb==a&&b.bc===c&&d.splice(e,1)})}a.mb=a.addEventListener=i;a.removeEventListener=h;a.f=function(a){var c=[].slice.call(arguments,1);b.e(d,function(b){b.Jb==a&&b.bc.apply(f,c)})}}var m=function(z,C,i,J,M,L){z=z||0;var a=this,q,n,o,u,A=0,G,H,F,B,y=0,h=0,m=0,D,l,g,e,p,w=[],x;function O(a){g+=a;e+=a;l+=a;h+=a;m+=a;y+=a}function t(o){var f=o;if(p&&(f>=e||f<=g))f=((f-g)%p+p)%p+g;if(!D||u||h!=f){var j=c.min(f,e);j=c.max(j,g);if(!D||u||j!=m){if(L){var k=(j-l)/(C||1);if(i.Kd)k=1-k;var n=b.Pd(M,L,k,G,F,H,i);if(x)b.e(n,function(b,a){x[a]&&x[a](J,b)});else b.N(J,n)}a.Ob(m-l,j-l);m=j;b.e(w,function(b,c){var a=o<h?w[w.length-c-1]:b;a.K(m-y)});var r=h,q=m;h=f;D=d;a.Hb(r,q)}}}function E(a,b,d){b&&a.Rb(e);if(!d){g=c.min(g,a.Cc()+y);e=c.max(e,a.Sb()+y)}w.push(a)}var r=f.requestAnimationFrame||f.webkitRequestAnimationFrame||f.mozRequestAnimationFrame||f.msRequestAnimationFrame;if(b.Ae()&&b.Yc()<7)r=j;r=r||function(a){b.wc(a,i.Bc)};function I(){if(q){var d=b.Q(),e=c.min(d-A,i.Ac),a=h+e*o;A=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)K(B);else r(I)}}function s(f,i,j){if(!q){q=d;u=j;B=i;f=c.max(f,g);f=c.min(f,e);n=f;o=n<h?-1:1;a.zc();A=b.Q();r(I)}}function K(b){if(q){u=q=B=k;a.Lc();b&&b()}}a.sc=function(a,b,c){s(a?h+a:e,b,c)};a.vc=s;a.Z=K;a.Ed=function(a){s(a)};a.F=function(){return h};a.Fc=function(){return n};a.ob=function(){return m};a.K=t;a.qb=function(a){t(h+a)};a.Gc=function(){return q};a.Nd=function(a){p=a};a.Rb=O;a.Hc=function(a,b){E(a,0,b)};a.Nb=function(a){E(a,1)};a.Cc=function(){return g};a.Sb=function(){return e};a.Hb=a.zc=a.Lc=a.Ob=b.Kc;a.mc=b.Q();i=b.Y({Bc:16,Ac:50},i);p=i.yc;x=i.Zd;g=l=z;e=z+C;H=i.ae||{};F=i.be||{};G=b.Sd(i.gb)};new(function(){});var i=function(p,fc){var h=this;function Bc(){var a=this;m.call(a,-1e8,2e8);a.re=function(){var b=a.ob(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{cb:f,pe:d,lb:e}};a.Hb=function(b,a){var e=c.floor(a);if(e!=a&&a>b)e++;Tb(e,d);h.f(i.oe,t(a),t(b),a,b)}}function Ac(){var a=this;m.call(a,0,0,{yc:r});b.e(C,function(b){D&1&&b.Nd(r);a.Nb(b);b.Rb(kb/bc)})}function zc(){var a=this,b=Ub.W;m.call(a,-1,2,{gb:e.Hd,Zd:{lb:Zb},yc:r},b,{lb:1},{lb:-2});a.Tb=b}function mc(o,n){var b=this,e,f,g,l,c;m.call(b,-1e8,2e8,{Ac:100});b.zc=function(){M=d;R=j;h.f(i.le,t(w.F()),w.F())};b.Lc=function(){M=k;l=k;var a=w.re();h.f(i.je,t(w.F()),w.F());!a.lb&&Dc(a.pe,s)};b.Hb=function(i,h){var b;if(l)b=c;else{b=f;if(g){var d=h/g;b=a.Be(d)*(f-e)+e}}w.K(b)};b.Ab=function(a,d,c,h){e=a;f=d;g=c;w.K(a);b.K(0);b.vc(c,h)};b.Pe=function(a){l=d;c=a;b.sc(a,j,d)};b.Le=function(a){c=a};w=new Bc;w.Hc(o);w.Hc(n)}function oc(){var c=this,a=Xb();b.r(a,0);b.O(a,"pointerEvents","none");c.W=a;c.xb=function(){b.J(a);b.Lb(a)}}function xc(o,f){var e=this,q,M,v,l,y=[],x,B,W,H,S,F,g,w,p;m.call(e,-u,u+1,{});function E(a){q&&q.Qc();T(o,a,0);F=d;q=new I.E(o,I,b.vd(b.g(o,"idle"))||lc);q.K(0)}function Z(){q.mc<I.mc&&E()}function O(p,r,o){if(!H){H=d;if(l&&o){var g=o.width,c=o.height,n=g,m=c;if(g&&c&&a.nb){if(a.nb&3&&(!(a.nb&4)||g>K||c>J)){var j=k,q=K/J*c/g;if(a.nb&1)j=q>1;else if(a.nb&2)j=q<1;n=j?g*J/c:K;m=j?J:c*K/g}b.j(l,n);b.l(l,m);b.C(l,(J-m)/2);b.D(l,(K-n)/2)}b.u(l,"absolute");h.f(i.we,f)}}b.J(r);p&&p(e)}function Y(b,c,d,g){if(g==R&&s==f&&N)if(!Cc){var a=t(b);A.Ne(a,f,c,e,d);c.ue();U.Rb(a-U.Cc()-1);U.K(a);z.Ab(b,b,0)}}function bb(b){if(b==R&&s==f){if(!g){var a=j;if(A)if(A.cb==f)a=A.xe();else A.xb();Z();g=new vc(o,f,a,q);g.Pc(p)}!g.Gc()&&g.Kb()}}function G(d,h,l){if(d==f){if(d!=h)C[h]&&C[h].Sc();else!l&&g&&g.ne();p&&p.xc();var m=R=b.Q();e.db(b.A(j,bb,m))}else{var k=c.min(f,d),i=c.max(f,d),o=c.min(i-k,k+r-i),n=u+a.me-1;(!S||o<=n)&&e.db()}}function db(){if(s==f&&g){g.Z();p&&p.Ke();p&&p.Qe();g.jd()}}function eb(){s==f&&g&&g.Z()}function ab(a){!P&&h.f(i.He,f,a)}function Q(){p=w.pInstance;g&&g.Pc(p)}e.db=function(c,a){a=a||v;if(y.length&&!H){b.H(a);if(!W){W=d;h.f(i.De,f);b.e(y,function(a){if(!b.o(a,"src")){a.src=b.g(a,"src2");b.I(a,a["display-origin"])}})}b.Rd(y,l,b.A(j,O,c,a))}else O(c,a)};e.Ce=function(){var i=f;if(a.lc<0)i-=r;var d=i+a.lc*tc;if(D&2)d=t(d);if(!(D&1)&&!ib)d=c.max(0,c.min(d,r-u));if(d!=f){if(A){var g=A.ge(r);if(g){var k=R=b.Q(),h=C[t(d)];return h.db(b.A(j,Y,d,h,g,k),v)}}cb(d)}else if(a.hb){e.Sc();G(f,f)}};e.ic=function(){G(f,f,d)};e.Sc=function(){p&&p.Ke();p&&p.Qe();e.fd();g&&g.sd();g=j;E()};e.ue=function(){b.J(o)};e.fd=function(){b.H(o)};e.yd=function(){p&&p.xc()};function T(a,c,e){if(b.o(a,"jssor-slider"))return;if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.o(a,"src")){S=d;a["display-origin"]=b.I(a);b.J(a)}}b.ed()&&b.r(a,(b.r(a)||0)+1)}var f=b.sb(a);b.e(f,function(f){var h=f.tagName,i=b.g(f,"u");if(i=="player"&&!w){w=f;if(w.pInstance)Q();else b.a(w,"dataavailable",Q)}if(i=="caption"){if(c){b.Nc(f,b.g(f,"to"));b.Ee(f,b.g(f,"bf"));b.g(f,"3d")&&b.he(f,"preserve-3d")}else if(!b.id()){var g=b.fb(f,k,d);b.ub(g,f,a);b.yb(f,a);f=g;c=d}}else if(!F&&!e&&!l){if(h=="A"){if(b.g(f,"u")=="image")l=b.ie(f,"IMG");else l=b.z(f,"image",d);if(l){x=f;b.I(x,"block");b.N(x,V);B=b.fb(x,d);b.u(x,"relative");b.oc(B,0);b.O(B,"backgroundColor","#000")}}else if(h=="IMG"&&b.g(f,"u")=="image")l=f;if(l){l.border=0;b.N(l,V)}}T(f,c,e+1)})}e.Ob=function(c,b){var a=u-b;Zb(M,a)};e.cb=f;n.call(e);b.Ge(o,b.g(o,"p"));b.Je(o,b.g(o,"po"));var L=b.z(o,"thumb",d);if(L){b.fb(L);b.J(L)}b.H(o);v=b.fb(gb);b.r(v,1e3);b.a(o,"click",ab);E(d);e.ke=l;e.bd=B;e.Tb=M=o;b.R(M,v);h.mb(203,G);h.mb(28,eb);h.mb(24,db)}function vc(y,f,p,q){var a=this,n=0,u=0,g,j,e,c,l,t,r,o=C[f];m.call(a,0,0);function v(){b.Lb(L);cc&&l&&o.bd&&b.R(L,o.bd);b.H(L,!l&&o.ke)}function w(){a.Kb()}function x(b){r=b;a.Z();a.Kb()}a.Kb=function(){var b=a.ob();if(!B&&!M&&!r&&s==f){if(!b){if(g&&!l){l=d;a.jd(d);h.f(i.zd,f,n,u,g,c)}v()}var k,p=i.Zc;if(b!=c)if(b==e)k=c;else if(b==j)k=e;else if(!b)k=j;else k=a.Fc();h.f(p,f,b,n,j,e,c);var m=N&&(!E||F);if(b==c)(e!=c&&!(E&12)||m)&&o.Ce();else(m||b!=e)&&a.vc(k,w)}};a.ne=function(){e==c&&e==a.ob()&&a.K(j)};a.sd=function(){A&&A.cb==f&&A.xb();var b=a.ob();b<c&&h.f(i.Zc,f,-b-1,n,j,e,c)};a.jd=function(a){p&&b.Db(lb,a&&p.rc.We?"":"hidden")};a.Ob=function(b,a){if(l&&a>=g){l=k;v();o.fd();A.xb();h.f(i.xd,f,n,u,g,c)}h.f(i.wd,f,a,n,j,e,c)};a.Pc=function(a){if(a&&!t){t=a;a.mb($JssorPlayer$.qd,x)}};p&&a.Nb(p);g=a.Sb();a.Nb(q);j=g+q.Oc;e=g+q.Uc;c=a.Sb()}function Kb(a,c,d){b.D(a,c);b.C(a,d)}function Zb(c,b){var a=x>0?x:fb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){qb=M;Ib=z.Fc();G=w.F()}function gc(){Pb();if(B||!F&&E&12){z.Z();h.f(i.rd)}}function ec(f){if(!B&&(F||!(E&12))&&!z.Gc()){var d=w.F(),b=c.ceil(G);if(f&&c.abs(H)>=a.Tc){b=c.ceil(d);b+=jb}if(!(D&1))b=c.min(r-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&qb)z.Ed(Ib);else if(d==b){tb.yd();tb.ic()}else z.Ab(d,b,e*Vb)}}function Hb(a){!b.g(b.Xb(a),"nodrag")&&b.zb(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.pc(a);var l=b.Xb(a);if(!O&&!b.g(l,"nodrag")&&sc()&&(!c||a.touches.length==1)){B=d;yb=k;R=j;b.a(g,c?"touchmove":"mousemove",Bb);b.Q();P=0;gc();if(!qb)x=0;if(c){var f=a.touches[0];ub=f.clientX;vb=f.clientY}else{var e=b.uc(a);ub=e.x;vb=e.y}H=0;hb=0;jb=0;h.f(i.nd,t(G),G,a)}}function Bb(e){if(B){e=b.pc(e);var f;if(e.type!="mousemove"){var l=e.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.uc(e);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||fb&O;if((j||k)&&!x){if(O==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=O;if(ob&&x==1&&c.abs(k)-c.abs(j)>3)yb=d}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(r-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-hb<-2)jb=0;else if(H-hb>2)jb=-1;hb=H;H=a;sb=G-H/i/(Y||1);if(H&&x&&!yb){b.zb(e);if(!M)z.Pe(sb);else z.Le(sb)}}}}}function bb(){qc();if(B){B=k;b.Q();b.B(g,"mousemove",Bb);b.B(g,"touchmove",Bb);P=H;z.Z();var a=w.F();h.f(i.md,t(a),a,t(G),G);E&12&&Pb();ec(d)}}function jc(c){if(P){b.ve(c);var a=b.Xb(c);while(a&&v!==a){a.tagName=="A"&&b.zb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){C[s];s=t(a);tb=C[s];Tb(a);return s}function Dc(a,b){x=0;Jb(a);h.f(i.ld,t(a),b)}function Tb(a,c){wb=a;b.e(S,function(b){b.Mb(t(a),a,c)})}function sc(){var b=i.Rc||0,a=X;if(ob)a&1&&(a&=1);i.Rc|=a;return O=a&~b}function qc(){if(O){i.Rc&=~X;O=0}}function Xb(){var a=b.rb();b.N(a,V);b.u(a,"absolute");return a}function t(a){return(a%r+r)%r}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),r-u);d=k}else if(D&2){b=t(b+wb);d=k}cb(b,a.Cb,d)}function xb(){b.e(S,function(a){a.nc(a.Bb.Xe<=F)})}function hc(){if(!F){F=1;xb();if(!B){E&12&&ec();E&3&&C[s].ic()}}}function Ec(){if(F){F=0;xb();B||!(E&12)||gc()}}function ic(){V={Eb:K,Fb:J,k:0,i:0};b.e(T,function(a){b.N(a,V);b.u(a,"absolute");b.Db(a,"hidden");b.J(a)});b.N(gb,V)}function ab(b,a){cb(b,a,d)}function cb(g,f,j){if(Rb&&(!B&&(F||!(E&12))||a.dd)){M=d;B=k;z.Z();if(f==l)f=Vb;var e=Cb.ob(),b=g;if(j){b=e+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,r-u));var i=(b-e)%r;b=e+i;var h=e==b?0:f*c.abs(i);h=c.min(h,f*u*1.5);z.Ab(e,b,h||1)}}h.sc=function(){if(!N){N=d;C[s]&&C[s].ic()}};function W(){return b.j(y||p)}function nb(){return b.l(y||p)}h.G=W;h.bb=nb;function Eb(c,d){if(c==l)return b.j(p);if(!y){var a=b.rb(g);b.Ic(a,b.Ic(p));b.tb(a,b.tb(p));b.I(a,"block");b.u(a,"relative");b.C(a,0);b.D(a,0);b.Db(a,"visible");y=b.rb(g);b.u(y,"absolute");b.C(y,0);b.D(y,0);b.j(y,b.j(p));b.l(y,b.l(p));b.Nc(y,"0 0");b.R(y,a);var h=b.sb(p);b.R(p,y);b.O(p,"backgroundImage","");b.e(h,function(c){b.R(b.g(c,"noscale")?p:a,c);b.g(c,"autocenter")&&Lb.push(c)})}Y=c/(d?b.l:b.j)(y);b.Me(y,Y);var f=d?Y*W():c,e=d?c:Y*nb();b.j(p,f);b.l(p,e);b.e(Lb,function(a){var c=b.kd(b.g(a,"autocenter"));b.od(a,c)})}h.Vd=Eb;n.call(h);h.W=p=b.kb(p);var a=b.Y({nb:0,me:1,fc:1,gc:0,jc:k,hb:1,pb:d,dd:d,lc:1,Vc:3e3,Wc:1,Cb:500,Be:e.Id,Tc:20,kc:0,X:1,Xc:0,ee:1,dc:1,cd:1},fc);a.pb=a.pb&&b.Fe();if(a.Qd!=l)a.Vc=a.Qd;if(a.Od!=l)a.Xc=a.Od;var fb=a.dc&3,tc=(a.dc&4)/-4||1,mb=a.Ye,I=b.Y({E:q,pb:a.pb},a.Ue);I.cc=I.cc||I.Te;var Fb=a.Md,Z=a.Ld,eb=a.Se,Q=!a.ee,y,v=b.z(p,"slides",Q),gb=b.z(p,"loading",Q)||b.rb(g),Nb=b.z(p,"navigator",Q),dc=b.z(p,"arrowleft",Q),ac=b.z(p,"arrowright",Q),Mb=b.z(p,"thumbnavigator",Q),pc=b.j(v),nc=b.l(v),V,T=[],uc=b.sb(v);b.e(uc,function(a){if(a.tagName=="DIV"&&!b.g(a,"u"))T.push(a);else b.ed()&&b.r(a,(b.r(a)||0)+1)});var s=-1,wb,tb,r=T.length,K=a.hd||pc,J=a.Jd||nc,Wb=a.kc,zb=K+Wb,Ab=J+Wb,bc=fb&1?zb:Ab,u=c.min(a.X,r),lb,x,O,yb,S=[],Qb,Sb,Ob,cc,Cc,N,E=a.Wc,lc=a.Vc,Vb=a.Cb,rb,ib,kb,Rb=u<r,D=Rb?a.hb:0,X,P,F=1,M,B,R,ub=0,vb=0,H,hb,jb,Cb,w,U,z,Ub=new oc,Y,Lb=[];if(r){if(a.pb)Kb=function(a,c,d){b.Gb(a,{U:c,V:d})};N=a.jc;h.Bb=fc;ic();b.o(p,"jssor-slider",d);b.r(v,b.r(v)||0);b.u(v,"absolute");lb=b.fb(v,d);b.ub(lb,v);if(mb){cc=mb.Ve;rb=mb.E;ib=u==1&&r>1&&rb&&(!b.id()||b.Yc()>=8)}kb=ib||u>=r||!(D&1)?0:a.Xc;X=(u>1||kb?fb:-1)&a.cd;var Gb=v,C=[],A,L,Db=b.qe(),ob=Db.ye,G,qb,Ib,sb;Db.ad&&b.O(Gb,Db.ad,([j,"pan-y","pan-x","none"])[X]||"");U=new zc;if(ib)A=new rb(Ub,K,J,mb,ob);b.R(lb,U.Tb);b.Db(v,"hidden");L=Xb();b.O(L,"backgroundColor","#000");b.oc(L,0);b.ub(L,Gb.firstChild,Gb);for(var db=0;db<T.length;db++){var wc=T[db],yc=new xc(wc,db);C.push(yc)}b.J(gb);Cb=new Ac;z=new mc(Cb,U);b.a(v,"click",jc,d);b.a(p,"mouseout",b.Pb(hc,p));b.a(p,"mouseover",b.Pb(Ec,p));if(X){b.a(v,"mousedown",Yb);b.a(v,"touchstart",rc);b.a(v,"dragstart",Hb);b.a(v,"selectstart",Hb);b.a(g,"mouseup",bb);b.a(g,"touchend",bb);b.a(g,"touchcancel",bb);b.a(f,"blur",bb)}E&=ob?10:5;if(Nb&&Fb){Qb=new Fb.E(Nb,Fb,W(),nb());S.push(Qb)}if(Z&&dc&&ac){Z.hb=D;Z.X=u;Sb=new Z.E(dc,ac,Z,W(),nb());S.push(Sb)}if(Mb&&eb){eb.gc=a.gc;Ob=new eb.E(Mb,eb);S.push(Ob)}b.e(S,function(a){a.Zb(r,C,gb);a.mb(o.Qb,kc)});b.O(p,"visibility","visible");Eb(W());xb();a.fc&&b.a(g,"keydown",function(b){if(b.keyCode==37)ab(-a.fc);else b.keyCode==39&&ab(a.fc)});var pb=a.gc;if(!(D&1))pb=c.max(0,c.min(pb,r-u));z.Ab(pb,pb,0)}};i.He=21;i.nd=22;i.md=23;i.le=24;i.je=25;i.De=26;i.we=27;i.rd=28;i.oe=202;i.ld=203;i.zd=206;i.xd=207;i.wd=208;i.Zc=209;var o={Qb:1},r=function(e,C){var f=this;n.call(f);e=b.kb(e);var s,A,z,r,l=0,a,m,i,w,x,h,g,q,p,B=[],y=[];function v(a){a!=-1&&y[a].de(a==l)}function t(a){f.f(o.Qb,a*m)}f.W=e;f.Mb=function(a){if(a!=r){var d=l,b=c.floor(a/m);l=b;r=a;v(d);v(b)}};f.nc=function(a){b.H(e,a)};var u;f.Zb=function(D){if(!u){s=c.ceil(D/m);l=0;var o=q+w,r=p+x,n=c.ceil(s/i)-1;A=q+o*(!h?n:i-1);z=p+r*(h?n:i-1);b.j(e,A);b.l(e,z);for(var f=0;f<s;f++){var C=b.Ie();b.te(C,f+1);var k=b.Dd(g,"numbertemplate",C,d);b.u(k,"absolute");var v=f%(n+1);b.D(k,!h?o*v:f%i*o);b.C(k,h?r*v:c.floor(f/(n+1))*r);b.R(e,k);B[f]=k;a.Ub&1&&b.a(k,"click",b.A(j,t,f));a.Ub&2&&b.a(k,"mouseover",b.Pb(b.A(j,t,f),k));y[f]=b.hc(k)}u=d}};f.Bb=a=b.Y({Vb:10,Wb:10,gd:1,Ub:1},C);g=b.z(e,"prototype");q=b.j(g);p=b.l(g);b.yb(g,e);m=a.Yb||1;i=a.td||1;w=a.Vb;x=a.Wb;h=a.gd-1;a.ec==k&&b.o(e,"noscale",d);a.jb&&b.o(e,"autocenter",a.jb)},s=function(a,g,h){var c=this;n.call(c);var r,q,e,f,i;b.j(a);b.l(a);function l(a){c.f(o.Qb,a,d)}function p(c){b.H(a,c||!h.hb&&e==0);b.H(g,c||!h.hb&&e>=q-h.X);r=c}c.Mb=function(b,a,c){if(c)e=a;else{e=b;p(r)}};c.nc=p;var m;c.Zb=function(c){q=c;e=0;if(!m){b.a(a,"click",b.A(j,l,-i));b.a(g,"click",b.A(j,l,i));b.hc(a);b.hc(g);m=d}};c.Bb=f=b.Y({Yb:1},h);i=f.Yb;if(f.ec==k){b.o(a,"noscale",d);b.o(g,"noscale",d)}if(f.jb){b.o(a,"autocenter",f.jb);b.o(g,"autocenter",f.jb)}};function q(e,d,c){var a=this;m.call(a,0,c);a.Qc=b.Kc;a.Oc=0;a.Uc=c}jssor_1_slider_init=function(){var g={jc:d,lc:4,Cb:160,hd:200,kc:3,X:4,Ld:{E:s,Yb:4},Md:{E:r,Vb:1,Wb:1}},e=new i("jssor_1",g);function a(){var b=e.W.parentNode.clientWidth;if(b){b=c.min(b,809);e.Vd(b)}else f.setTimeout(a,30)}a();b.a(f,"load",a);b.a(f,"resize",a);b.a(f,"orientationchange",a)}})(window,document,Math,null,true,false)
</script>
<style>
.jssorb03{position:absolute}.jssorb03 div,.jssorb03 div:hover,.jssorb03 .av{position:absolute;width:21px;height:21px;text-align:center;line-height:21px;color:#1b242f;font-size:12px;background:url('images/b03.png') no-repeat;overflow:hidden;cursor:pointer}.jssorb03 div{background-position:-5px -4px}.jssorb03 div:hover,.jssorb03 .av:hover{background-position:-35px -4px}.jssorb03 .av{background-position:-65px -4px}.jssorb03 .dn,.jssorb03 .dn:hover{background-position:-95px -4px}.jssora03l,.jssora03r{display:block;position:absolute;width:55px;height:55px;cursor:pointer;background:url('images/a03.png') no-repeat;overflow:hidden}.jssora03l{background-position:-3px -33px}.jssora03r{background-position:-63px -33px}.jssora03l:hover{background-position:-123px -33px}.jssora03r:hover{background-position:-183px -33px}.jssora03l.jssora03ldn{background-position:-243px -33px}.jssora03r.jssora03rdn{background-position:-303px -33px}.jssora03l.jssora03lds{background-position:-3px -33px;opacity:.3;pointer-events:none}.jssora03r.jssora03rds{background-position:-63px -33px;opacity:.3;pointer-events:none}
</style>


<div id="jssor_1" style="position: relative; margin: 0 auto 0 0; top: 4px; left: 0px; width: 900px; height: 150px; overflow: hidden; visibility: hidden;">
<!-- Loading Screen -->
	<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
	<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	<div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
	</div>
	<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 900px; height: 150px; overflow: hidden;">

	<?php 


   for ($i = 0; $i < sizeof($tabcle); $i++) {

   	if ($tabcle[$i]<>'') {

			controller_setDes_partsof($tabcle[$i]);
			controller_setStk($_POST['detail']);   
			$sm=controller_ProdSimilaire1();


			// if(sizeof($tabcle)==0){


				foreach ($sm as $Sim){ ?>
				           	 

				<?php  $photo=trim('../../SOFA/phart/'.trim($Sim['CDPHOT']).'.jpg');

						if (file_exists($photo)) { ?>
								
				<!-- 			<li><img  class="imgSlider" src="<?php echo $photo ?>" style="width:150px;height:150px;" /><div class="grid-flex"><a href="single.php?p=<?php echo $Sim['STK'] ; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($Sim['DES'])))); ?></a></div></li>
				 -->
				<div title="<?php echo utf8_encode(trim(ucfirst(strtolower($Sim['DES'])))); ?>" style="border: 1px solid #e51e20;">
				<a href="#" onclick="detail('<?php echo $Sim['STK']; ?>','','1','1');"><img data-u="image" src="<?php echo $photo ?>" /></a>
				</div>
						<?php }else{ ?>
							<!-- <li><img src="../../SOFA/phart/indispo.png" style="width:150px;height:150px;"/><div class="grid-flex"><a href="single.php?p=<?php echo $Sim['STK'] ; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($Sim['DES'])))); ?></a></div></li> -->
						
				<div title="<?php echo utf8_encode(trim(ucfirst(strtolower($Sim['DES'])))); ?>" style="border: 1px solid #e51e20;">
				<a href="#" onclick="detail('<?php echo $Sim['STK']; ?>','','1','1');"><img data-u="image" src="../../SOFA/phart/indispo.png" /></a>
				</div>
				<?php	} } 
   		
   	}
		
		

			

			// }





					
						}

		?>



	</div>
	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb03" style="bottom:10px;">
	<!-- bullet navigator item prototype -->
	<div data-u="prototype" style="width:21px;height:21px;">
	<div data-u="numbertemplate"></div>
	</div>
	</div>
	<!-- Arrow Navigator -->
	<span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
	<span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>

</div>


<script type="text/javascript">jssor_1_slider_init();</script>
						
					



	

	   </div>
   
	 </div>
     </div>

	
			
							</div> 
			      
			      <?php }elseif ($_POST['type']==2) {?>
			      	
		<object data="<?php echo "../../SOFA/FichTech/".$_POST['pdf'].".pdf"; ?>" type="application/pdf" title="Fiche" style="width: 89%;height: 560px" ></object>


			      <?php } ?>

	<?php }elseif ((isset($_POST['r']) and $_POST['r']!='')  and (!isset($_POST['mrq']) or $_POST['mrq']=='' ) ){  ?>

				<!-- 	<ul id="breadcrumbs-two">
					    <li><a href="products2.php">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur " <?php echo (strtoupper(trim($_POST['r'])));  ?> "</a></li>
					   
					</ul> -->


						<?php	$parPage=9;

						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						$p1=controller_SearchFam1("a");

						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						$p2=controller_SearchFam2("a");


						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						$p3=controller_SearchFam3("a");

						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						$p4=controller_SearchFam4("a");

						controller_setDesfr1_Ffourn(utf8_encode(strtoupper(trim($_POST['r']))));
						$m=controller_ReadMarquByDes("a");

						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						$prods=controller_ReadCountProd("aa");


						
			if($p1[0]['TOTAL']>0){

						$total=$p1[0]['TOTAL'];
							// echo 'total'.$total;
						$nbpage=ceil($total / $parPage);
						if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
						   if($_POST['p'] > $nbpage){

						   	$current = $nbpage;
						   }else{
						   	$current = $_POST['p'];
						   }

						}else{
							$current = 1;

						}
						$premierpage = ($current - 1) * $parPage;

						// $parPage=($current - 1) * $parPage;


						$next=($current - 1) * $parPage;
						
						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						controller_setLimit1($premierpage);

						if($_POST['p']!=1 or $_POST['p']==''){
							controller_setLimit2($parPage+($next-1));

						}else{

							controller_setLimit2($parPage+($next));
						}
						
						$prods=controller_SearchFam1("");
						
					?>

					<ul id="breadcrumbs-two">
					    <li><a href="#" onclick="location.reload();">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur <?php echo '"'.(utf8_encode(strtolower(trim($_POST['r'])))).'" ('.$p1[0]['TOTAL'].')';  ?> </a></li>
					   
					</ul>

					<?php

								foreach ($prods as $prod) {
								controller_setCfam_Fsfami($prod['CFAM']);
								$nbr=controller_ReadCountSfamiOfFami();
					?>
											
									 <a href="#" onclick="recherche3(<?php echo $prod['CFAM']; ?>,'','','','',1);" >
									 	<div id="product-grid">
										<div class="more-product"><span> </span></div>						
										<div class="product-img b-link-stripe b-animate-go  thickbox">







											<?php  $photo=trim('images/familles/'.$prod['CFAM'].'/'.$prod['CFAM'].'.png');  
											if (file_exists($photo)) {

											?>

													<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

										  <?php
										}else{

										?>
											<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
										<?php
										}

										?>

								<div class="b-wrapper">
										<h4 class="b-animate b-from-left  b-delay03">							
										<!-- <button> + </button> -->
										</h4>
										</div>
									</div>
												
									<div class="product-info simpleCart_shelfItem">
										<div class="product-info-cust prt_name">
											<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DESF']))) ; ?></h4>
													</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $prod['CFAM']; ?>,'','','')"> </a>
							</span>
											<div class="ofr">
											 </div>
										
											
											<div class="clearfix">


								<?php  

								$pdf=trim('../../SOFA/FichTech/'.$prod['CFAM'].'.pdf');  
								
								if (file_exists($pdf)) {

								 ?>

							<a href="<?php echo $pdf; ?>" target="_blank"><img class="pdf" src="images/iconeFiche.png" ></a>

							   <?php

								}else{
									echo "<br>";
								}

						?>
							
						
												<!-- <a href="../../SOFA/FichTech/<?php echo $prod['CDFICH']; ?>.pdf" target="_blank"><img class="pdf" src="images/pdf.png" ></a> -->


											</div>
										</div>	

								</div>

									</div>	
								</div>
							
							<?php }


						if($nbpage>1){

							?>
	
					      	  <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',1);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>

							<?php

							}

							?>

							<?php

		}elseif($p2[0]['TOTAL']>0){  ?>

							<?php

							$total=$p2[0]['TOTAL'];
						$nbpage=ceil($total / $parPage);
						if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
						   if($_POST['p'] > $nbpage){

						   	$current = $nbpage;
						   }else{
						   	$current = $_POST['p'];
						   }

						}else{
							$current = 1;

						}
						$premierpage = ($current - 1) * $parPage;

						// $parPage=($current - 1) * $parPage;


						$next=($current - 1) * $parPage;
						
						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						controller_setLimit1($premierpage);

						if($_POST['p']!=1 or $_POST['p']==''){
							controller_setLimit2($parPage+($next-1));

						}else{

							controller_setLimit2($parPage+($next));
						}
						
						$prods=controller_SearchFam2("");?>

						<ul id="breadcrumbs-two">
					    <li><a href="#" onclick="location.reload();">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur <?php echo '"'.(ucfirst(strtolower(trim($_POST['r'])))).'" ('.$p2[0]['TOTAL'].')';  ?> </a></li>
					   
					</ul>
					
					<?php		foreach ($prods as $prod) {
								controller_setCfam_Ffami3($prod['CFAM']);
								controller_setCsfam_Ffami3($prod['CSFAM']);
								$nbr=controller_ReadCountFfami3OfSfami(); 

						?>
										


								 <a href="#" onclick="recherche3(<?php echo $prod['CFAM']; ?>,<?php echo $prod['CSFAM']; ?>,'','','',1);" ><div id="product-grid">
									<div class="more-product"><span> </span></div>						
									<div class="product-img b-link-stripe b-animate-go  thickbox">







						<?php  $photo=trim('images/familles/'.$prod['CFAM'].'/'.$prod['CFAM'].'-'.$prod['CSFAM'].'.png');  

						if (file_exists($photo)) {

						?>

								<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

						  <?php
						}else{

						?>
							<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
						<?php
						}

						?>






								<div class="b-wrapper">
										<h4 class="b-animate b-from-left  b-delay03">							
										<!-- <button> + </button> -->
										</h4>
										</div>
									</div>
												
									<div class="product-info simpleCart_shelfItem">
										<div class="product-info-cust prt_name">
											<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DESSF']))) ; ?></h4>
													</a>							
																	</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $prod['CFAM']; ?>,<?php echo $prod['CSFAM']; ?>,'','')"> </a>
							</span>
											<div class="ofr">
											 </div>
										
											
											<div class="clearfix">


						<?php  

						$pdf=trim('../../SOFA/FichTech/'.$prod['CSFAM'].'.pdf');  

						//echo trim($photo);
						
						if (file_exists($pdf)) {

						// ?>

					<a href="<?php echo $pdf; ?>" target="_blank"><img class="pdf" src="images/iconeFiche.png" ></a>

					   <?php

						}else{
							echo "<br>";
						}

						?>
							
						
												<!-- <a href="../../SOFA/FichTech/<?php echo $prod['CDFICH']; ?>.pdf" target="_blank"><img class="pdf" src="images/pdf.png" ></a> -->


											</div>
										</div>	

								</div>

									</div>	
								</div>
							
							<?php }
					
						if($nbpage>1){
						?>

		 				<!-- 	<ul class="pagination pagination-sm">
					                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
					               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);" ><?php echo  $i ;  ?></a></li>
								    <?php } } ?>
					                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
					    </ul> -->

			

					         <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',1);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>


						<?php
					}
			}elseif($p3[0]['TOTAL']>0){
						?>
							

					<?php
							$total=$p3[0]['TOTAL'];
							$nbpage=ceil($total / $parPage);
						if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
						   if($_POST['p'] > $nbpage){

						   	$current = $nbpage;
						   }else{
						   	$current = $_POST['p'];
						   }

						}else{
							$current = 1;

						}
						$premierpage = ($current - 1) * $parPage;

						// $parPage=($current - 1) * $parPage;


						$next=($current - 1) * $parPage;
						
						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						controller_setLimit1($premierpage);

						if($_POST['p']!=1 or $_POST['p']==''){
							controller_setLimit2($parPage+($next-1));

						}else{

							controller_setLimit2($parPage+($next));
						}
						
						$prods=controller_SearchFam3("");?>

						<ul id="breadcrumbs-two">
					    <li><a href="#" onclick="location.reload();">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur <?php echo '"'.(ucfirst(strtolower(trim($_POST['r'])))).'" ('.$p3[0]['TOTAL'].')';  ?> </a></li>
					   
					</ul>
							<?php foreach ($prods as $prod) {
								controller_setCfam_Fserie($prod['CFAM']);
								controller_setCsfam_Fserie($prod['CSFAM']);
								controller_setCfam31_Fserie($prod['CFAM31']);
								$nbr=controller_ReadCountSerieOfFfami3(); 

						?>
										


								 <a href="#" onclick="recherche3(<?php echo $prod['CFAM']; ?>,<?php echo $prod['CSFAM']; ?>,<?php echo $prod['CFAM31']; ?>,'','',1);" ><div id="product-grid">
									<div class="more-product"><span> </span></div>						
									<div class="product-img b-link-stripe b-animate-go  thickbox">







						<?php  $photo=trim('images/familles/'.$prod['CFAM'].'/'.$prod['CFAM'].'-'.$prod['CSFAM'].'-'.$prod['CFAM31'].'.png');  

						if (file_exists($photo)) {

						?>

								<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

						  <?php
						}else{

						?>
						<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
						<?php
						}

						?>






								<div class="b-wrapper">
										<h4 class="b-animate b-from-left  b-delay03">							
										<!-- <button> + </button> -->
										</h4>
										</div>
									</div>
												
									<div class="product-info simpleCart_shelfItem">
										<div class="product-info-cust prt_name">
											<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DES3']))) ; ?></h4>
													</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $prod['CFAM']; ?>,<?php echo $prod['CSFAM']; ?>,<?php echo $prod['CFAM31']; ?>,'')"> </a>
							</span>
											<div class="ofr">
											 </div>
										
											
											<div class="clearfix">


						<?php  

						$pdf=trim('../../SOFA/FichTech/'.$prod['CFAM31'].'.pdf');  

						//echo trim($photo);
						
						if (file_exists($pdf)) {

						// ?>

					<a href="<?php echo $pdf; ?>" target="_blank"><img class="pdf" src="images/iconeFiche.png" ></a>

					   <?php

						}else{
							echo "<br>";
						}

						?>
							
						
												<!-- <a href="../../SOFA/FichTech/<?php echo $prod['CDFICH']; ?>.pdf" target="_blank"><img class="pdf" src="images/pdf.png" ></a> -->


											</div>
										</div>	

								</div>

									</div>	
								</div>
							
							<?php }

								if($nbpage>1){
						?>

		 			<!-- 	<ul class="pagination pagination-sm">
					                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
					               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);" ><?php echo  $i ;  ?></a></li>
								    <?php } } ?>
					                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
					    </ul> -->



			

					         	  <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',1);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>



						<?php
					}


		}elseif($p4[0]['TOTAL']>0){
		?>
									

		<?php
						$total=$p4[0]['TOTAL'];
							// echo 'total'.$total;
						$nbpage=ceil($total / $parPage);
						if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
						   if($_POST['p'] > $nbpage){

						   	$current = $nbpage;
						   }else{
						   	$current = $_POST['p'];
						   }

						}else{
							$current = 1;

						}
						$premierpage = ($current - 1) * $parPage;

						$next=($current - 1) * $parPage;
						
						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						controller_setLimit1($premierpage);

						if($_POST['p']!=1 or $_POST['p']==''){
							controller_setLimit2($parPage+($next-1));

						}else{

							controller_setLimit2($parPage+($next));
						}
						
						$prods=controller_SearchFam4(""); ?>

						<ul id="breadcrumbs-two">
					    <li><a href="#" onclick="location.reload();">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur <?php echo '"'.(ucfirst(strtolower(trim($_POST['r'])))).'" ('.$p4[0]['TOTAL'].')';  ?> </a></li>
					   
					</ul>
					
						<?php	

								foreach ($prods as $prod) {
								controller_setCfam_partsof($prod['CFAM']);
								controller_setCsfam_partsof($prod['CSFAM']);
								controller_setCfam3_partsof($prod['CFAM31']);
								controller_setCseri_partsof($prod['CSER']);
								$rech="";
								$nbr=controller_ReadCountProd($rech);

						?>
										


			<a href="#" onclick="recherche3(<?php echo $prod['CFAM']; ?>,<?php echo $prod['CSFAM']; ?>,<?php echo $prod['CFAM31']; ?>,'<?php echo $prod['CSER']; ?>','',1);" ><div id="product-grid">
									<div class="more-product"><span> </span></div>						
									<div class="product-img b-link-stripe b-animate-go  thickbox">

											<?php  $photo=trim('images/familles/'.$prod['CFAM'].'/'.$prod['CFAM'].'-'.$prod['CSFAM'].'-'.$prod['CFAM31'].'-'.$prod['CSER'].'.png');  

											if (file_exists($photo)) {

											?>

													<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

											  <?php
											}else{

											?>
												<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
											<?php
											}

											?>


											<div class="b-wrapper">
													<h4 class="b-animate b-from-left  b-delay03">							
													<!-- <button> + </button> -->
													</h4>
											</div>
									</div>
												
									<div class="product-info simpleCart_shelfItem">
										<div class="product-info-cust prt_name">
											<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DESER']))).' ('.$nbr[0][0].')' ; ?></h4>
													</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $prod['CFAM']; ?>,<?php echo $prod['CSFAM']; ?>,<?php echo $prod['CFAM31']; ?>,'<?php echo $prod['CSER']; ?>')"> </a>
							</span>
									
											<div class="ofr">
											 </div>
										
											
											<div class="clearfix">


						<?php  

						$pdf=trim('../../SOFA/FichTech/'.$prod['CSER'].'.pdf');  

						
						if (file_exists($pdf)) {

					   ?>

					<a href="<?php echo $pdf; ?>" target="_blank"><img class="pdf" src="images/iconeFiche.png" ></a>

					   <?php

						}else{
							echo "<br>";
						}

						?>
							
						
												<!-- <a href="../../SOFA/FichTech/<?php echo $prod['CDFICH']; ?>.pdf" target="_blank"><img class="pdf" src="images/pdf.png" ></a> -->


											</div>
										</div>	

								</div>

									</div>	
								</div>
							
							<?php }

					if($nbpage>1){
						?>

		 		 <!--     <ul class="paginate pag4 clearfix">	
					     	<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',1);" >|<</a></li>
						        <li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);"><<</a></li>
						        <?php  for ($i=1; $i<=$nbpage ;$i++){
						          if($i == $current){ ?>       
						          <li class="current"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);"><?php echo  $i ;  ?></a></li>
						            <?php }else{ ?> -->
						        <!-- <li><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);" ><?php echo  $i ;  ?></a></li> -->
						  <!--       <?php } }?>
						        <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >>></a></li>
					      		<li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',1);" >>|</a></li>
					      		<li class="single" style="display: block;float: left;padding: 9px 12px;margin-right: 6px;border-radius: 16px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
					      </ul> -->


					      <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',1);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>

					


						<?php
					}

						}elseif($m[0]['TOTAL']>0){ 

							$_SESSION['marq']="2";
					?>
							

					<?php

						$total=$m[0]['TOTAL'];
							// echo 'total'.$total;
						$nbpage=ceil($total / $parPage);
						if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
						   if($_POST['p'] > $nbpage){

						   	$current = $nbpage;
						   }else{
						   	$current = $_POST['p'];
						   }

						}else{
							$current = 1;
						}

						$premierpage = ($current - 1) * $parPage;

						$next=($current - 1) * $parPage;
						
						controller_setDesfr1_Ffourn(utf8_encode(strtoupper(trim($_POST['r']))));
						controller_setLimit1_Ffourn($premierpage);

						if($_POST['p']!=1 or $_POST['p']==''){
							controller_setLimit2_Ffourn($parPage+($next-1));

						}else{

							controller_setLimit2_Ffourn($parPage+($next));
						}
						
						$prods=controller_ReadMarquByDes("");?>


					<ul id="breadcrumbs-two">
					    <li><a href="#" onclick="location.reload();">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur <?php echo '"'.(ucfirst(strtolower(trim($_POST['r'])))).'" ('.$m[0]['TOTAL'].')';  ?> </a></li>
					   
					</ul>
							<?php
							foreach ($prods as $prod) {
								// controller_setCfour_partsof($prod['CFOUR']);
								// $nbr=controller_ReadMarquOfFami('a');

						?>
										


								 <a href="#" onclick="rechercheMarque('<?php echo $prod['CFOUR'] ?>','','','','',1);" ><div id="product-grid">
									<div class="more-product"><span> </span></div>						
									<div class="product-img b-link-stripe b-animate-go  thickbox">







						<?php  $photo=trim('images/FFOUR/'.$prod['CFOUR'].'.jpg');  

						if (file_exists($photo)) {

						?>

								<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

						  <?php
						}else{

						?>
							<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
						<?php
						}

						?>


								<div class="b-wrapper">
										<h4 class="b-animate b-from-left  b-delay03">							
										<!-- <button> + </button> -->
										</h4>
										</div>
									</div>
												
									<div class="product-info simpleCart_shelfItem">
										<div class="product-info-cust prt_name">
											<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DESFR1']))) ; ?></h4>
													</a>							
											<span class="item_price">
												<?php
											// if($prod['PV']=='.00'){
												echo "<br>";
											// }else{
										//echo number_format($prod['PV'],2,',',' ').' DH' ; 

											//}?>

											 </span>
											<div class="ofr">
											 </div>
										
											
											<div class="clearfix">


						<?php  

						$pdf=trim('../../SOFA/FichTech/'.$prod['CFOUR'].'.pdf');  

						
						if (file_exists($pdf)) {

					   ?>

					<a href="<?php echo $pdf; ?>" target="_blank"><img class="pdf" src="images/iconeFiche.png" ></a>

					   <?php

						}else{
							echo "<br>";
						}

						?>
							
						
												<!-- <a href="../../SOFA/FichTech/<?php echo $prod['CDFICH']; ?>.pdf" target="_blank"><img class="pdf" src="images/pdf.png" ></a> -->


											</div>
										</div>	

								</div>

									</div>	
								</div>
							
							<?php }

								if($nbpage>1){
						?>

		 			<!-- 	<ul class="pagination pagination-sm">
					                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
					               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);" ><?php echo  $i ;  ?></a></li>
								    <?php } } ?>
					                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
					    </ul> -->

					   
					         	  <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',1);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>


						<?php
					}



			 }elseif($prods[0]['TOTAL']>0){
				?>
							

				<?php
					$total=$prods[0]['TOTAL'];
							// echo 'total'.$total;
						$nbpage=ceil($total / $parPage);
						if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
						   if($_POST['p'] > $nbpage){

						   	$current = $nbpage;
						   }else{
						   	$current = $_POST['p'];
						   }

						}else{
							$current = 1;

						}
						$premierpage = ($current - 1) * $parPage;

						$next=($current - 1) * $parPage;
						
						controller_setDes_partsof(utf8_encode(strtoupper(trim($_POST['r']))));
						controller_setLimit1($premierpage);

						if($_POST['p']!=1 or $_POST['p']==''){
							controller_setLimit2($parPage+($next-1));

						}else{

							controller_setLimit2($parPage+($next));
						}
						
						$prods=controller_ReadpaginntProd("aa");?>


					<ul id="breadcrumbs-two">
					    <li><a href="#" onclick="location.reload();">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur <?php echo '"'.(ucfirst(strtolower(trim($_POST['r'])))).'" ('.$total.')';  ?> </a></li>
					   
					</ul>
							<?php foreach ($prods as $prod) {

					

						?>
										


								 <a href="#" onclick="detail('<?php echo $prod['STK']; ?>','','1','1');" >
								 	<div class="product-grid" >
									<div class="more-product"><span></span></div>						
									<div class="prod b-link-stripe b-animate-go  thickbox">



								

								<?php $photo=trim('../../SOFA/phart/'.trim($prod['CDPHOT']).'.jpg');  

									if(file_exists($photo)){ ?>
								
									<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">
								
								<?php }else{ ?>

									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

								<?php }	?>


									<div class="b-wrapper">
										<h4 class="b-animate b-from-left  b-delay03">							
										<!-- <button> + </button> -->
										</h4>
									</div>
									</div>
												
									<div class="product-info simpleCart_shelfItem">
										<div class="product-info-cust prt_name">
											<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DES']))) ; ?></h4>
													</a>							
											<span class="item_price"><?php

										// 	if($prod['PV']=='.00'){
												echo "<br>";
										// 	}else{
										// echo number_format($prod['PV'],2,',',' ').' DH' ; 

										// 	}
											?>

											 </span>
											<div class="ofr">
											 </div>
										
											
											<div class="clearfix">


													<?php  

													$pdf=trim('../../SOFA/FichTech/'.$prod['CDFICH'].'.pdf');  

													
														
										if (file_exists($pdf)) {

									 ?>

									<a href="#" onclick="detail('<?php echo $prod['STK']; ?>','<?php  echo trim($prod['CDFICH'])?>','2','1');"><img class="pdf" src="images/iconeFiche.png" ></a>


								<?php  }else{
									echo "<br>";
								}	  ?>

																				
						
												<!-- <a href="../../SOFA/FichTech/<?php echo $prod['CDFICH']; ?>.pdf" target="_blank"><img class="pdf" src="images/pdf.png" ></a> -->


											</div>
										</div>	

								</div>

									</div>	
								</div>
							
							<?php 


						}
								

								if($nbpage>1){
							?>

		 				<!-- <ul class="pagination pagination-sm">
					                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
					               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',1);" ><?php echo  $i ;  ?></a></li>
								    <?php } } ?>
					                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
					    </ul> -->
			   				<ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',1);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',1);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',1);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>

						<?php
					}	

						

						}else{?>

					<ul id="breadcrumbs-two">
					    <li><a href="#" onclick="location.reload();">Accueil</a></li>
					    <li><a href="#">La resultat de la recherche sur <?php echo '"'.(ucfirst(strtolower(trim($_POST['r'])))).'"';  ?> </a></li>
					   
					</ul>


					<?php

							echo "<h2>aucun résultat<h2>";

						}


}elseif((!isset($_POST['mrq']) or $_POST['mrq']=='' ) and $_SESSION['marq']=="1" or (!isset($_SESSION['marq']) ) or (isset($_POST['f1']) or isset($_POST['f2']) or isset($_POST['f3']) or isset($_POST['f4']))   ){




			if(isset($_POST['f1']) or isset($_POST['f2']) or isset($_POST['f3']) or isset($_POST['f4'])){




					 	 controller_setCfam($_POST['f1']);
						 $marq1=controller_ReadOneFfami();
						 controller_setCfam_Fsfami($_POST['f1']);
						 $CountMarq1=controller_ReadCountSfamiOfFami();




						 controller_setCfam_Fsfami($_POST['f1']);
						 controller_setCsfam($_POST['f2']);
						 $marq2=controller_ReadDesc_fsfami();
						 controller_setCfam_Ffami3($_POST['f1']);
						 controller_setCsfam_Ffami3($_POST['f2']);
						 $countMarq2=controller_ReadCountFfami3OfSfami();




						 controller_setCfam_Ffami3($_POST['f1']);
						 controller_setCsfam_Ffami3($_POST['f2']);
						 controller_setCfam31($_POST['f3']);
						 $marq3=controller_ReadDesc_ffami3();
						 controller_setCfam_Fserie($_POST['f1']);
						 controller_setCsfam_Fserie($_POST['f2']);
						 controller_setCfam31_Fserie($_POST['f3']);
						 $countMarq3=controller_ReadCountSerieOfFfami3();




						controller_setCfam_Fserie($_POST['f1']);
						controller_setCsfam_Fserie($_POST['f2']);
						controller_setCfam31_Fserie($_POST['f3']);
						controller_setCser($_POST['f4']);
						$marq4=controller_ReadDesc_fserie();
						controller_setCfam_partsof($_POST['f1']);
						controller_setCsfam_partsof($_POST['f2']);
						controller_setCfam3_partsof($_POST['f3']);
						controller_setCseri_partsof($_POST['f4']);
						$rech="";
						$countMarq4=controller_ReadCountProd($rech);


						controller_setCfour($_POST['f5']);
						$mrq5=controller_ReadOneFfourn();
						controller_setCfour_partsof($_POST['f5']);
						controller_setCfam_partsof($_POST['f1']);
						controller_setCsfam_partsof($_POST['f2']);
						controller_setCfam3_partsof($_POST['f3']);
						controller_setCseri_partsof($_POST['f4']);
						$counMarq5=controller_ReadMarquProd("a");
						?>
				   
					    <!--/.navbar-header-->			
		
						
						<ul id="breadcrumbs-two">

											<li><a href="#" onclick="location.reload();">Accueil</a></li>

											<?php  if(count($marq1)!=0){ ?><li><a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,'','','','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq1[0]['DESF']))); ?></a></li><?php } ?>

											<?php if(count($marq2)!=0){?><li><a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,'','','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq2[0]['DESSF'])));?></ll><?php } ?>

											<?php if(count($marq3)!=0){ ?><li><a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'','',1);"> <?php echo utf8_encode(ucfirst(strtolower($marq3[0]['DES3']))); ?></a></li><?php } ?>
	
											<?php if(count($marq4)!=0){ ?><li><a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'<?php echo $_POST['f4']; ?>','',1);" > <?php echo utf8_encode(ucfirst(strtolower($marq4[0]['DESER']))).' ('.$countMarq4[0][0].')'; ?></a></li><?php }?>

											<?php if(count($mrq5)!=0){ ?><li><a href="#" onclick="#" > <?php echo utf8_encode(ucfirst(strtolower($mrq5[0]['DESFR1']))).' ('.$counMarq5[0][0].')'; ?></a></li><?php }?>
						</ul>
						
					<?php


					if($_POST['f1']!='' and $_POST['f2']=='' and $_POST['f3']=='' and $_POST['f4']=='' and $_POST['f5']==''){
					//echo "famille1";

								$parPage=16;

								controller_setCfam_Fsfami($_POST['f1']);
								$countfam1=controller_ReadCountSfamiOfFami();
								//echo $countfam1[0][0];
							

								if(count($countfam1)>0){
								$total=$countfam1[0]['TOTAL'];


								// echo 'rrrr'.$total;
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pg']) && !empty($_POST['pg']) && ctype_digit($_POST['pg']) == 1){
								   if($_POST['pg'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pg'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;
								controller_setCfam_Fsfami($_POST['f1']);
								controller_setLimit1_Fsfami($premierpage);


								if($_POST['pg']!=1 or $_POST['pg']==''){
									controller_setLimit2_Fsfami($parPage+($next-1));

								}else{

									controller_setLimit2_Fsfami($parPage+($next));
								}

								$famille=controller_ReadSfamiOfFami("req1"); 

								}else{

								$famille=array();

								}

						
								// echo "**".$total."**";
								// print_r($famille);
								foreach ($famille as $famill) {

								controller_setCfam_Ffami3($_POST['f1']);
								controller_setCsfam_Ffami3($famill['CSFAM']);
								//echo "fam1 ".$_POST['fam1']." fam2 ".$_POST['fam2'];
								$nbr=controller_ReadCountFfami3OfSfami(); 

									//print_r($prods);

								if($nbr[0][0]>0){
								?>
															


	<a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $famill['CSFAM']; ?>,'','','',1);" ><div id="product-grid">
		<div class="more-product"><span> </span></div><div class="product-img b-link-stripe b-animate-go  thickbox">


								<?php  $photo=trim('images/familles'.'/'.$_POST['f1'].'/'.$_POST['f1'].'-'.$famill['CSFAM'].'.png');  

								//echo trim($photo);
								if (file_exists($photo)){

								?>

									<img src="<?php echo $photo.'?'.filemtime($photo); ?>"  class="img-responsive" alt="">
<!--.'?'.filemtime($photo)-->
								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png?<?php filemtime("../../SOFA/phart/indispo.png");  ?>" class="img-responsive" alt="">
								<?php
								}

								?>


										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
												</div>
										</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famill['DESSF']))) ; ?></h4>
															</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $_POST['f1']; ?>,<?php echo $famill['CSFAM']; ?>,'','')"> </a>
							</span>
													<div class="ofr">
													 </div>
												
									
												</div>	

										</div>

											</div>	
										</div>
									
									<?php } }

					if(count($famille)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
					 	?>




								   <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,'','','','',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,'','','','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,'','','','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,'','','','',<?php echo $nbpage; ?>);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
								    </ul>


					   <?php } 

						 }elseif($_POST['f1']!='' and $_POST['f2']!='' and $_POST['f3']=='' and $_POST['f4']=='' and $_POST['f5']==''){

						//echo "famille2";
						$parPage=16;
								controller_setCfam_Ffami3($_POST['f1']);
								controller_setCsfam_Ffami3($_POST['f2']);
								//echo "fam1 ".$_POST['fam1']." fam2 ".$_POST['fam2'];
								$countfam1=controller_ReadCountFfami3OfSfami(); 
								//echo "**".$countfam1[0]['TOTAL'];
								if(count($countfam1[0]['TOTAL'])>0){
								$total=$countfam1[0]['TOTAL'];


								// echo 'rrrr'.$total;
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pg']) && !empty($_POST['pg']) && ctype_digit($_POST['pg']) == 1){
								   if($_POST['pg'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pg'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;
								controller_setCfam_Ffami3($_POST['f1']);
								controller_setCsfam_Ffami3($_POST['f2']);
								controller_setLimit1_Ffami3($premierpage);
								
								if($_POST['pg']!=1 or $_POST['pg']==''){
									controller_setLimit2_Ffami3($parPage+($next-1));

								}else{

									controller_setLimit2_Ffami3($parPage+($next));
								}

								$famille=controller_ReadFfami3OfSfami("req1"); 

								}else{

								$famille=array();


								}

						

								foreach ($famille as $famill) {

								controller_setCfam_Fserie($_POST['f1']);
								controller_setCsfam_Fserie($_POST['f2']);
								controller_setCfam31_Fserie($famill['CFAM31']);
								$nbr=controller_ReadCountSerieOfFfami3(); 
						//print_r($prods);
								// echo "nbr : ".$nbr[0][0];
								if($nbr[0][0]>0){  ?>
												


						<a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $famill['CFAM31']; ?>,'','',1);" ><div id="product-grid">

											<div class="more-product"><span> </span></div>						
											<div class="product-img b-link-stripe b-animate-go  thickbox">







								<?php  $photo=trim('images/familles'.'/'.$_POST['f1'].'/'.$_POST['f1'].'-'.$_POST['f2'].'-'.$famill['CFAM31'].'.png');  

								//echo trim($photo);
								if (file_exists($photo)) {

								?>

										<img src="<?php echo $photo.'?'.filemtime($photo); ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png?<?php filemtime("../../SOFA/phart/indispo.png"); ?>" class="img-responsive" alt="">
								<?php
								}

								?>






												<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
												</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famill['DES3']))) ; ?></h4>
															</a>							
													<span class="item_price">
														<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
															<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $famill['CFAM31']; ?>,'')"> </a>
													 </span>
													<div class="ofr">
													 </div>
												
												
												</div>	

										</div>

											</div>	
										</div>
									
									<?php } }
									
								if(count($famille)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
					 	?>




					        <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,'','','',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['fam1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,'','','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,'','','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,'','','',<?php echo $nbpage; ?>);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>

					   <?php } 

					 }elseif ($_POST['f1']!='' and $_POST['f2']!='' and $_POST['f3']!='' and $_POST['f4']=='' and $_POST['f5']==''){
						
					//echo "famille3";
						
								$parPage=16;
								controller_setCfam_Fserie($_POST['f1']);
								controller_setCsfam_Fserie($_POST['f2']);
								controller_setCfam31_Fserie($_POST['f3']);
								$countfam1=controller_ReadCountSerieOfFfami3(); 

								if(count($countfam1[0]['TOTAL'])>0){
								$total=$countfam1[0]['TOTAL'];

								//echo $countfam1[0]['TOTAL'];
								// echo 'rrrr'.$total;
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pg']) && !empty($_POST['pg']) && ctype_digit($_POST['pg']) == 1){
								   if($_POST['pg'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pg'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;
								controller_setCfam_Fserie($_POST['f1']);
								controller_setCsfam_Fserie($_POST['f2']);
								controller_setCfam31_Fserie($_POST['f3']);
								controller_setLimit1_Fserie($premierpage);
								
								if($_POST['pg']!=1 or $_POST['pg']==''){
									controller_setLimit2_Fserie($parPage+($next-1));

								}else{

									controller_setLimit2_Fserie($parPage+($next));
								}

								$famille=controller_ReadSerieOfFfami3("req1"); 

								}else{

								$famille=array();

								}

							

								foreach ($famille as $famill) {

									controller_setCfam_partsof($_POST['f1']);
									controller_setCsfam_partsof($_POST['f2']);
									controller_setCfam3_partsof($_POST['f3']);
									controller_setCseri_partsof($famill['CSER']);
									$rech="";
									$nbr=controller_ReadCountProd($rech);
									

									if($nbr[0][0]>0){


							?>
												


							<a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'<?php echo $famill['CSER']; ?>','',1);" ><div id="product-grid">
							<div class="more-product"><span> </span></div>						
							<div class="product-img b-link-stripe b-animate-go  thickbox">







								<?php  $photo=trim('images/familles'.'/'.$_POST['f1'].'/'.$_POST['f1'].'-'.$_POST['f2'].'-'.$_POST['f3'].'-'.$famill['CSER'].'.png');  

								//echo trim($photo);
								if (file_exists($photo)) {
								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
								<?php
								}

								?>






										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
							</div>
							</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famill['DESER']))).' ('.$nbr[0][0].')' ; ?></h4>
															</a>							
													 <span class="item_price">
														<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
														<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'<?php echo $famill['CSER']; ?>')"> </a>
													 </span>
													 <div class="ofr">
													 </div>
												
													
													
												</div>	

										</div>

											</div>	
										</div>
									
									<?php } }

	if(count($famille)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
					 			?>




				        <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'','',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'','',<?php echo $nbpage; ?>);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
						</ul>


						   <?php } 

				}elseif ($_POST['f1']!='' and $_POST['f2']!='' and $_POST['f3']!='' and $_POST['f4']!='' and $_POST['f5']=='') {

								$parPage=16;
								controller_setCfam_partsof($_POST['f1']);
								controller_setCsfam_partsof($_POST['f2']);
								controller_setCfam3_partsof($_POST['f3']);
								controller_setCseri_partsof($_POST['f4']);
								$Cmptmrq=controller_ReadMarquOfFami("a");

								$total=$Cmptmrq[0][0];
								// echo "total :".$total;
								if($total>0){
								


								// echo 'rrrr'.$total;
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pg']) && !empty($_POST['pg']) && ctype_digit($_POST['pg']) == 1){
								   if($_POST['pg'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pg'];
								   }

								}else{
									$current = 1;

								}
								$premierpage = ($current - 1) * $parPage;

								// $parPage=($current - 1) * $parPage;


								$next=($current - 1) * $parPage;
								
								controller_setCfam_partsof($_POST['f1']);
								controller_setCsfam_partsof($_POST['f2']);
								controller_setCfam3_partsof($_POST['f3']);
								controller_setCseri_partsof($_POST['f4']);
								controller_setLimit1($premierpage);

								if($_POST['pg']!=1 or $_POST['pg']==''){
									controller_setLimit2($parPage+($next-1));

								}else{

									controller_setLimit2($parPage+($next));
								}
								
								$mrqs=controller_ReadMarquOfFami("");

								}else{

									$mrqs=array();
								}?>

									<div class="aa-product-catg-head">
				              <div class="aa-product-catg-head-left">
				            
				            <!--       <label >Filtrer par :</label> -->

				                  <?php 
				                  	 controller_setCfam_partsof($_POST['f1']);
								     controller_setCsfam_partsof($_POST['f2']);
								     controller_setCfam3_partsof($_POST['f3']);
								     controller_setCseri_partsof($_POST['f4']);
									 $mrqs=controller_ReadMarquOfFami("b");

									 ?>


				                  <select  onchange="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'<?php echo $_POST['f4']; ?>',this.value,1);">
				                  	<option value="-1" selected="Default">---Marques---</option>
				                   
				                 <?php   foreach ($mrqs as $mrq) { ?>

				                    <option value="<?php echo $mrq['CFOUR']; ?>" ><?php echo utf8_encode(trim(ucfirst(strtolower($mrq['DESFR1'])))); ?></option>

				                 <?php } ?>
  								<option value="0" ><?php echo ucfirst(strtolower("Toutes les marques"));  ?></option>
				                  </select>
				               
				              
				              </div>
				             
				            </div>


						<?php	foreach ($mrqs as $mrq) {

							controller_setCfour_partsof($mrq['CFOUR']);
							controller_setCfam_partsof($_POST['f1']);
								controller_setCsfam_partsof($_POST['f2']);
								controller_setCfam3_partsof($_POST['f3']);
								controller_setCseri_partsof($_POST['f4']);
							$nbr=controller_ReadMarquProd("a"); ?>

				
				
		
								
												
									<a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'<?php echo $_POST['f4']; ?>','<?php echo $mrq['CFOUR']; ?>',1);" ><div id="product-grid-mrq"  >
									<div class="more-product"><span> </span></div>						
									<div class="mrq b-link-stripe b-animate-go  thickbox">

										<?php   $photo=trim('images/FFOUR/'.trim($mrq['CFOUR']).'.jpg');  
										if (file_exists($photo)) { ?>


 									<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">
 									<?php }else{ ?>

 									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

 									<?php } ?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
												</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($mrq['DESFR1'].' ('.$nbr[0][0].')'))) ; ?></h4>
															</a>							
													<span class="item_price"><?php

												// 	if($prod['PV']=='.00'){
														echo "<br>";
												// 	}else{
												// echo number_format($prod['PV'],2,',',' ').' DH' ; 

												// 	}

													?>

													 </span>
													<div class="ofr">
													 </div>
												
													
											</div>	

										</div>

											</div>	
										</div>
									
									<?php }


									if(count($mrqs)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
					 	?>



			
					        <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','',<?php echo $nbpage; ?>);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>


					   <?php } 


								

				}elseif ($_POST['f1']!='' and $_POST['f2']!='' and $_POST['f3']!='' and $_POST['f4']!='' and $_POST['f5']!='') {

								
								if($_POST['f5']==0){


								$parPage=9;
								controller_setCfam_partsof($_POST['f1']);
								controller_setCsfam_partsof($_POST['f2']);
								controller_setCfam3_partsof($_POST['f3']);
								controller_setCseri_partsof($_POST['f4']);
								$rech="";
								$prods=controller_ReadCountProd($rech);


								if(count($prods)>0){
								$total=$prods[0]['TOTAL'];


								// echo 'rrrr'.$total;
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pg']) && !empty($_POST['pg']) && ctype_digit($_POST['pg']) == 1){
								   if($_POST['pg'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pg'];
								   }

								}else{
									$current = 1;

								}
								$premierpage = ($current - 1) * $parPage;

								// $parPage=($current - 1) * $parPage;


								$next=($current - 1) * $parPage;
								
								controller_setCfam_partsof($_POST['f1']);
								controller_setCsfam_partsof($_POST['f2']);
								controller_setCfam3_partsof($_POST['f3']);
								controller_setCseri_partsof($_POST['f4']);
								controller_setLimit1($premierpage);

								if($_POST['pg']!=1 or $_POST['pg']==''){
									controller_setLimit2($parPage+($next-1));

								}else{

									controller_setLimit2($parPage+($next));
								}
								
								$prods=controller_ReadpaginntProd($rech);

								}else{

									$prods=array();
								}?>
							<div class="aa-product-catg-head">
								
				              <div class="aa-product-catg-head-left">
				            
				          <!--         <label >Filtrer par :</label> -->

				                  <?php 
				                  	 controller_setCfam_partsof($_POST['f1']);
								     controller_setCsfam_partsof($_POST['f2']);
								     controller_setCfam3_partsof($_POST['f3']);
								     controller_setCseri_partsof($_POST['f4']);
									 $mrqs=controller_ReadMarquOfFami("b");

									 ?>


				                  <select  onchange="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'<?php echo $_POST['f4']; ?>',this.value,1);">
				                   	<option value="-1" selected="Default">---Marques---</option>
				                     
				                 <?php   foreach ($mrqs as $mrq) { ?>

				                    <option value="<?php echo $mrq['CFOUR']; ?>" ><?php echo utf8_encode(trim(ucfirst(strtolower($mrq['DESFR1'])))); ?></option>

				                 <?php } ?>
				                 <option value="0" ><?php echo ucfirst(strtolower("Toutes les marques"));  ?></option>
				                  </select>
				               
				              
				              </div>
				             
				            </div>
					


							
										<?php
						foreach ($prods as $prod) {
				
	
									?>
												
									<a href="#" onclick="detail('<?php echo $prod['STK']; ?>','','1','1');" ><div class="product-grid"  title="<?php echo $prod['CDPHOT']; ?>">
									<div class="more-product"><span> </span></div>						
									<div class="prod b-link-stripe b-animate-go  thickbox">

										<?php   $photo=trim('../../SOFA/phart/'.trim($prod['CDPHOT']).'.jpg');  
										if (file_exists($photo)) { ?>


 									<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">
 									<?php }else{ ?>

 									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

 									<?php } ?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
									
												</h4>
												</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DES']))) ; ?></h4>
															</a>							
													<span class="item_price"><?php

														echo "<br>";
										

													?>

													 </span>
													<div class="ofr">
													 </div>
												
													
													<div class="clearfix">


									<?php 

									$pdf=trim('../../SOFA/FichTech/'.$prod['CDFICH'].'.pdf');  

						
										
										if (file_exists($pdf)) {

									 ?>

									<a href="#" onclick="detail('<?php echo $prod['STK']; ?>','<?php  echo trim($prod['CDFICH'])?>','2','1');"><img class="pdf" src="images/iconeFiche.png" ></a>


								<?php  }else{
									echo "<br>";
								}	  ?>
									
												</div>
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }

									if(count($prods)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
					 	?>



					         <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>',0,1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>',0,<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>',0,<?php echo $i; ?>);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>',0,<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>',0,<?php echo $nbpage; ?>);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>


					   <?php } 
	
								



								}else{

								$parPage=9;
								controller_setCfour_partsof($_POST['f5']);
								controller_setCfam_partsof($_POST['f1']);
								controller_setCsfam_partsof($_POST['f2']);
								controller_setCfam3_partsof($_POST['f3']);
								controller_setCseri_partsof($_POST['f4']);
								$prods=controller_ReadMarquProd("a");
								

								$total=$prods[0][0];
								
								if($total>0){
								


							
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pg']) && !empty($_POST['pg']) && ctype_digit($_POST['pg']) == 1){
								   if($_POST['pg'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pg'];
								   }

								}else{
									$current = 1;

								}
								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;

								controller_setCfour_partsof($_POST['f5']);
								controller_setCfam_partsof($_POST['f1']);
								controller_setCsfam_partsof($_POST['f2']);
								controller_setCfam3_partsof($_POST['f3']);
								controller_setCseri_partsof($_POST['f4']);
								controller_setLimit1($premierpage);

								if($_POST['pg']!=1 or $_POST['pg']==''){
									controller_setLimit2($parPage+($next-1));

								}else{

									controller_setLimit2($parPage+($next));
								}
								
								$prods=controller_ReadMarquProd("");

								}else{

									$prods=array();


								}?>

							<div class="aa-product-catg-head">
				              <div class="aa-product-catg-head-left">
				            
				          <!--         <label >Filtrer par :</label> -->

				                  <?php 
				                  	 controller_setCfam_partsof($_POST['f1']);
								     controller_setCsfam_partsof($_POST['f2']);
								     controller_setCfam3_partsof($_POST['f3']);
								     controller_setCseri_partsof($_POST['f4']);
									 $mrqs=controller_ReadMarquOfFami("b");

									 ?>


				                  <select  onchange="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'<?php echo $_POST['f4']; ?>',this.value,1);">
				                   	<option value="-1" selected="Default">---Marques---</option>
				                     
				                 <?php   foreach ($mrqs as $mrq) { ?>

				                    <option value="<?php echo $mrq['CFOUR']; ?>" ><?php echo utf8_encode(trim(ucfirst(strtolower($mrq['DESFR1'])))); ?></option>

				                 <?php } ?>
				                 <option value="0" ><?php echo ucfirst(strtolower("Toutes les marques"));  ?></option>
				                  </select>
				               
				              
				              </div>
				             
				            </div>



						
										<?php
						foreach ($prods as $prod) {
				
										?>
												
									<a href="#" onclick="detail('<?php echo $prod['STK']; ?>','','1','1')" ><div class="product-grid"  title="<?php echo $prod['CDPHOT']; ?>">
									<div class="more-product"><span> </span></div>						
									<div class="prod b-link-stripe b-animate-go  thickbox">

										<?php   $photo=trim('../../SOFA/phart/'.trim($prod['CDPHOT']).'.jpg');  
										if (file_exists($photo)) { ?>


 									<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">
 									<?php }else{ ?>

 									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

 									<?php } ?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
									
												</h4>
												</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DES']))) ; ?></h4>
															</a>							
													<span class="item_price"><?php

														echo "<br>";
										

													?>

													 </span>
													<div class="ofr">
													 </div>
												
													
													<div class="clearfix">


									<?php 

									$pdf=trim('../../SOFA/FichTech/'.$prod['CDFICH'].'.pdf');  

						
										
										if (file_exists($pdf)) {

									 ?>

									<a href="#" onclick="detail('<?php echo $prod['STK']; ?>','<?php  echo trim($prod['CDFICH'])?>','2','1');"><img class="pdf" src="images/iconeFiche.png" ></a>


								<?php  }else{
									echo "<br>";
								}	  ?>
									
												</div>
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }



									if(count($prods)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
					 	?>



				

					         <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','<?php echo  $_POST['f5'] ;  ?>',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','<?php echo  $_POST['f5'] ;  ?>',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','<?php echo  $_POST['f5'] ;  ?>',<?php echo  $i ;  ?>);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','<?php echo  $_POST['f5'] ;  ?>',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3(<?php echo  $_POST['f1'] ;  ?>,<?php echo  $_POST['f2'] ;  ?>,<?php echo  $_POST['f3'] ;  ?>,'<?php echo  $_POST['f4'] ;  ?>','<?php echo  $_POST['f5'] ;  ?>',<?php echo $nbpage; ?>)" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>



					   <?php } 
					
		

						}



								}elseif ($_POST['f1']=='' and $_POST['f2']=='' and $_POST['f3']=='' and $_POST['f4']=='' and $_POST['f5']=='' ){



										$parPage=16;

								$countfam1=controller_ReadCountAllFfami();
								//echo $countfam1[0][0];
							

								if(count($countfam1)>0){
								$total=$countfam1[0]['TOTAL'];


								// echo 'rrrr'.$total;

								if(!isset($_POST['pg'])){
								$_POST['pg']=1;

								}


								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pg']) && !empty($_POST['pg']) && ctype_digit($_POST['pg']) == 1){
								   if($_POST['pg'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pg'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;
								
								controller_setLimit1_Ffami($premierpage);


								if($_POST['pg']!=1 or $_POST['pg']==''){
									controller_setLimit2_Ffami($parPage+($next-1));

								}else{

									controller_setLimit2_Ffami($parPage+($next));
								}

								$firstFami=controller_ReadAllFfamiLimit(); 

								}else{

								$firstFami=array();

								}

										
								// echo "**".$total."**";
								// print_r($famille);
								foreach ($firstFami as $famill) {


								controller_setCfam_Fsfami($famill['CFAM']);
								$nbr=controller_ReadCountSfamiOfFami();

								
								$_SESSION['chemin']='images/familles/'.$famill['CFAM'].'/'.$famill['CFAM'].'png';

								//print_r($prods);
							?>
												


						<a href="#" onclick="recherche3(<?php echo $famill['CFAM']; ?>,'','','','',1);" ><div id="product-grid">

											<div class="more-product"><span> </span></div>						
											<div class="product-img b-link-stripe b-animate-go  thickbox">


								<?php  $photo=trim('images/familles/'.$famill['CFAM'].'/'.$famill['CFAM'].'.png');  

								//echo trim($photo);
								if (file_exists($photo)) {

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
								<?php
								}

								?>






										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
												</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famill['DESF']))); ?></h4>
															</a>							
													<span class="item_price">
														<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();"><img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $famill['CFAM']; ?>,'','','')"> </a>
													 </span>
													<div class="ofr">
													 </div>
												
													
												
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }

										if(count($firstFami)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
					 	?>


					      <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php echo $nbpage; ?>)" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>


					   <?php } 


								}


}elseif(!isset($_POST['f1']) and !isset($_POST['f2']) and !isset($_POST['f3']) and !isset($_POST['f4']) and !isset($_POST['f5'])){


?>
							
									<ul id="breadcrumbs-two">
											<li><a href="#" onclick="location.reload();">Accueil</a></li>
											<!-- <li><a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,'','','',1);"></a></li>
											<li><a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,'','',1);"> </a></li>
											<li><a href="#" onclick="recherche3(<?php echo $_POST['f1']; ?>,<?php echo $_POST['f2']; ?>,<?php echo $_POST['f3']; ?>,'',1);"></a></li>
											<li><a href="#" onclick="#"></a></li> 
											 -->
									</ul>
								
								<?php


								$parPage=16;

								$countfam1=controller_ReadCountAllFfami();
				

								if(count($countfam1)>0){

								$total=$countfam1[0]['TOTAL'];
								if(!isset($_POST['p'])){
								$_POST['p']=1;

								}
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
								   if($_POST['p'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['p'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;
								
								controller_setLimit1_Ffami($premierpage);


								if($_POST['p']!=1 or $_POST['p']==''){
									controller_setLimit2_Ffami($parPage+($next-1));

								}else{

									controller_setLimit2_Ffami($parPage+($next));
								}

								$firstFami=controller_ReadAllFfamiLimit(); 

								}else{

								$firstFami=array();

								}

											
											foreach ($firstFami as $famill) {
								controller_setCfam_Fsfami($famill['CFAM']);
								$nbr=controller_ReadCountSfamiOfFami();
							
								// $_SESSION['chemin']='images/familles/'.$famill['CFAM'].'/'.$famill['CFAM'].'.png';
									
								?>
															


									<a href="#" onclick="recherche3(<?php echo $famill['CFAM']; ?>,'','','','',1);" ><div id="product-grid">

											<div class="more-product"><span> </span></div>						
											<div class="product-img b-link-stripe b-animate-go  thickbox">



								<?php  $photo=trim('images/familles/'.$famill['CFAM'].'/'.$famill['CFAM'].'.png');  

								//echo trim($photo);
								if (file_exists($photo)) {

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
								<?php
								}

								?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famill['DESF']))); ?></h4>
															</a>							
											<span class="item_price">
											<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
												<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $famill['CFAM']; ?>,'','','')"> </a>

													 </span>
													<div class="ofr">
													 </div>
							
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }

									if(count($firstFami)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
								 	?>



								 <!--   <ul class="pagination pagination-sm">
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche3('','','','',<?php echo  $i ;  ?>);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <li style="font-size:20px;" ><a href="#" onclick="recherche3('','','','',<?php echo  $i ;  ?>);" ><?php echo  $i ;  ?></a></li>
								    <?php } } ?>
								                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    </ul> -->
<!-- 
								 <ul class="paginate pag4 clearfix">

								 <li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',1);" >|<</a></li>	
						        		<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);"><<</a></li>
							        	<?php  for ($i=1; $i<=$nbpage ;$i++){
							          if($i == $current){ ?>       
							          <li class="current"><a href="#" onclick="recherche3('','','','','',<?php echo  $i ;  ?>);"><?php echo  $i ;  ?></a></li>
							            <?php }else{ ?> -->
							        <!-- <li><a href="#" onclick="recherche3('','','','',<?php echo  $i ;  ?>);" ><?php echo  $i ;  ?></a></li> -->
							 <!--        <?php } }?>
							        <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >>></a></li>
							        <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php echo $nbpage; ?>);" >>|</a></li>
									<li class="single" style="display: block;float: left;padding: 9px 12px;margin-right: 6px;border-radius: 16px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
	      		
					      		</ul> -->


					      	<ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="rrecherche3('','','','','',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								                <?php  for ($i=1; $i<=$nbpage ;$i++){
											    if($i == $current){ ?>
											    
											          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
											    <?php }else{ ?>
											           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
											    <?php } } ?>
											                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche3('','','','','',<?php echo $nbpage; ?>)" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
							</ul>


								   <?php } 


								}

}elseif ($_SESSION['marq']=="2" or  isset($_POST['m']) or isset($_POST['fam1']) or isset($_POST['fam2']) or isset($_POST['fam3']) or isset($_POST['fam4']) ) {


					if(isset($_POST['m']) or isset($_POST['fam1']) or isset($_POST['fam2']) or isset($_POST['fam3']) or isset($_POST['fam4'])){


						controller_setCfour($_POST['m']);
						$m=controller_ReadOneFfourn();

					 	 controller_setCfam($_POST['fam1']);
						 $marq1=controller_ReadOneFfami();
						 




						 controller_setCfam_Fsfami($_POST['fam1']);
						 controller_setCsfam($_POST['fam2']);
						 $marq2=controller_ReadDesc_fsfami();
						




						 controller_setCfam_Ffami3($_POST['fam1']);
						 controller_setCsfam_Ffami3($_POST['fam2']);
						 controller_setCfam31($_POST['fam3']);
						 $marq3=controller_ReadDesc_ffami3();
					




						controller_setCfam_Fserie($_POST['fam1']);
						controller_setCsfam_Fserie($_POST['fam2']);
						controller_setCfam31_Fserie($_POST['fam3']);
						controller_setCser($_POST['fam4']);
						$marq4=controller_ReadDesc_fserie();
						// controller_setCfam_partsof($_POST['fam1']);
						// controller_setCsfam_partsof($_POST['fam2']);
						// controller_setCfam3_partsof($_POST['fam3']);
						// controller_setCseri_partsof($_POST['fam4']);
						// $countMarq4=controller_ReadCountProd("");

						controller_setCfour_partsof($_POST['m']);
						controller_setCfam_partsof($_POST['fam1']);
						controller_setCsfam_partsof($_POST['fam2']);
						controller_setCfam3_partsof($_POST['fam3']);
						controller_setCseri_partsof($_POST['fam4']);
						$countMarq4=controller_ReadMarquProd("a");




						?>
				   
					    <!--/.navbar-header-->			
		
						
									<ul id="breadcrumbs-two">
											<li><a href="#" onclick="location.reload();">Accueil</a></li>

											<?php  if(count($m)!=0){ ?><li><a href="#" onclick="rechercheMarque('<?php echo $_POST['m'];  ?>','','','','',1);" ><?php echo utf8_encode(ucfirst(strtolower($m[0]['DESFR1']))); ?></a></li><?php } ?>

											<?php  if(count($marq1)!=0){ ?><li><a href="#" onclick="rechercheMarque('<?php echo $_POST['m'];  ?>',<?php echo $_POST['fam1']; ?>,'','','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq1[0]['DESF']))); ?></a></li><?php } ?>

											<?php if(count($marq2)!=0){?><li><a href="#" onclick="rechercheMarque('<?php echo $_POST['m']; ?>',<?php echo $_POST['fam1'] ;?>,<?php echo $_POST['fam2']; ?>,'','',1);"><?php echo utf8_encode(ucfirst(strtolower($marq2[0]['DESSF'])));?></ll><?php } ?>

											<?php if(count($marq3)!=0){ ?><li><a href="#" onclick="rechercheMarque('<?php echo $_POST['m']; ?>',<?php echo $_POST['fam1']; ?>,<?php echo $_POST['fam2']; ?>,<?php echo $_POST['fam3']; ?>,'',1);"> <?php echo utf8_encode(ucfirst(strtolower($marq3[0]['DES3']))); ?></a></li><?php } ?>
	
											<?php if(count($marq4)!=0){ ?><li><a href="#" onclick="#" > <?php echo utf8_encode(ucfirst(strtolower($marq4[0]['DESER']))).' ('.$countMarq4[0][0].')'; ?></a></li><?php }?>
									</ul>
			<?php

					if($_POST['m']=='' and $_POST['fam1']=='' and $_POST['fam2']=='' and $_POST['fam3']=='' and $_POST['fam4']==''){ ?> 

					<?php

								$parPage=16;
							
								$cprods=controller_ReadAllFfournLimit("a");
				

								if(count($cprods)>0){
								$total=$cprods[0]['TOTAL'];


								if(!isset($_POST['p'])){
								$_POST['p']=1;

								}
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
								   if($_POST['p'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['p'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;

						
								controller_setLimit1_Ffourn($premierpage);


								if($_POST['p']!=1 or $_POST['p']==''){
									controller_setLimit2_Ffourn($parPage+($next-1));

								}else{

									controller_setLimit2_Ffourn($parPage+($next));
								}

								$prods=controller_ReadAllFfournLimit(""); 

								}else{

								$prods=array();

								}

										
											foreach ($prods as $prod) {

								controller_setCfour_partsof($prod['CFOUR']);
								$nbr=controller_ReadMarquOfFami('a');
									
								?>
															


								<a href="#" onclick="rechercheMarque('<?php echo $prod['CFOUR'];  ?>','','','','',1);"  ><div  id="product-grid-mrq" >

											<div class="more-product"><span> </span></div>						
											<div class="mrq b-link-stripe b-animate-go  thickbox">



								<?php  $photo=trim('images/FFOUR/'.$prod['CFOUR'].'.jpg');  

								//echo trim($photo);
								if (file_exists($photo)) {

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
								<?php
								}

								?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DESFR1']))).' ('.$nbr[0][0].')'; ?></h4>
															</a>							
													<span class="item_price"><?php
													//if($prod['PV']=='.00'){
														echo "<br>";
													//}else{
												//echo number_format($prod['PV'],2,',',' ').' DH' ; 

													//}?>

													 </span>
													<div class="ofr">
													 </div>
												
													
													
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }

										if(count($prods)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
								 	?>



								   <ul class="pagination pagination-sm">
								   				 <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',2);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',2);">&laquo;</a></li>
								               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
								    <?php } } ?>
								                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',2);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',2);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
								    </ul>

								    <!--  <ul class="paginate pag4 clearfix">
								     		<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',2);">|<</a></li>
							        		<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',2);"><<</a></li>
								        	<?php  for ($i=1; $i<=$nbpage ;$i++){
								          if($i == $current){ ?>       
								          <li class="current"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
								            <?php }else{ ?>
								       
								        <?php } }?>
								        <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',2);" >>></a></li>
								         <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',2);" >>|</a></li>
					      			<li class="single" style="display: block;float: left;padding: 9px 12px;margin-right: 6px;border-radius: 16px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
					      			</ul>
 -->

								   <?php } 







		  
					}elseif ($_POST['m']!='' and $_POST['fam1']=='' and $_POST['fam2']=='' and $_POST['fam3']=='' and $_POST['fam4']=='') {


								
							
								controller_setCfour_partsof($_POST['m']);
								$familles1=controller_ReadMarquFam1();  
				

					

										
								foreach ($familles1 as $famille1) {

						
									
								?>
															


									<a href="#" onclick="rechercheMarque('<?php echo $_POST['m'];  ?>',<?php echo $famille1['CFAM']; ?>,'','','',1);"   ><div id="product-grid">

											<div class="more-product"><span> </span></div>						
											<div class="product-img b-link-stripe b-animate-go  thickbox">



								<?php  $photo=trim('images/familles/'.$famille1['CFAM'].'/'.$famille1['CFAM'].'.png');  

								//echo trim($photo);
								if (file_exists($photo)){

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

								<?php

								}

								?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famille1['DESF']))); ?></h4>
															</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $famille1['CFAM']; ?>,'','','')"> </a>
							</span>
													<div class="ofr">
													 </div>
												
													
													
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }

										// if(count($prods)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
								 	?>



						<!-- 		   <ul class="pagination pagination-sm">
								   				<li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',2);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',2);">&laquo;</a></li>
								               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								    <?php } } ?>
								                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',2);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',2);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 7.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
								    </ul>
 -->
								   


								   <?php //} 


						
					}elseif ($_POST['m']!='' and $_POST['fam1']!='' and $_POST['fam2']=='' and $_POST['fam3']=='' and $_POST['fam4']=='') {

								controller_setCfour_partsof($_POST['m']);
								controller_setCfam_partsof($_POST['fam1']);
								$familles2=controller_ReadMarquFam2();  
				

					

										
								foreach ($familles2 as $famille2) {
					
									
								?>
															


									<a href="#" onclick="rechercheMarque('<?php echo $_POST['m'];  ?>',<?php echo $_POST['fam1']; ?>,<?php echo $famille2['CSFAM']; ?>,'','',1);" ><div id="product-grid">

											<div class="more-product"><span> </span></div>						
											<div class="product-img b-link-stripe b-animate-go  thickbox">



								<?php  $photo=trim('images/familles/'.$_POST['fam1'].'/'.$_POST['fam1'].'-'.$famille2['CSFAM'].'.png');  

								//echo trim($photo);
								if (file_exists($photo)){

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

								<?php

								}

								?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famille2['DESSF']))); ?></h4>
															</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $_POST['fam1']; ?>,<?php echo $famille2['CSFAM']; ?>,'','')"> </a>
							</span>
									
													<div class="ofr">
													 </div>
												
													
													
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }

								 							

					}elseif ($_POST['m']!='' and $_POST['fam1']!='' and $_POST['fam2']!='' and $_POST['fam3']=='' and $_POST['fam4']=='') {

										controller_setCfour_partsof($_POST['m']);
										controller_setCfam_partsof($_POST['fam1']);
										controller_setCsfam_partsof($_POST['fam2']);
										$familles3=controller_ReadMarquFam3();  
				

					

										
								foreach ($familles3 as $famille3) {
					
									
								?>
															


									<a href="#" onclick="rechercheMarque('<?php echo $_POST['m'];  ?>',<?php echo $_POST['fam1']; ?>,<?php echo $_POST['fam2']; ?>,<?php echo $famille3['CFAM31']; ?>,'',1);"  ><div id="product-grid">

											<div class="more-product"><span> </span></div>						
											<div class="product-img b-link-stripe b-animate-go  thickbox">



								<?php  $photo=trim('images/familles/'.$_POST['fam1'].'/'.$_POST['fam1'].'-'.$_POST['fam2'].'-'.$famille3['CFAM31'].'.png');  

								if (file_exists($photo)){

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

								<?php

								}

								?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famille3['DES3']))); ?></h4>
															</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $_POST['fam1']; ?>,<?php echo $_POST['fam2']; ?>,<?php echo $famille3['CFAM31']; ?>,'')"> </a>
							</span>
													<div class="ofr">
													 </div>
												
													
													
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }


						
					}elseif ($_POST['m']!='' and $_POST['fam1']!='' and $_POST['fam2']!='' and $_POST['fam3']!='' and $_POST['fam4']=='') {

												controller_setCfour_partsof($_POST['m']);
												controller_setCfam_partsof($_POST['fam1']);
												controller_setCsfam_partsof($_POST['fam2']);
												controller_setCfam3_partsof($_POST['fam3']);
												$familles4=controller_ReadMarquFam4();  
				

					

										
								foreach ($familles4 as $famille4) {
									controller_setCfour_partsof($_POST['m']);
								controller_setCfam_partsof($_POST['fam1']);
								controller_setCsfam_partsof($_POST['fam2']);
								controller_setCfam3_partsof($_POST['fam3']);
								controller_setCseri_partsof($famille4['CSER']);
							
								$nbr=controller_ReadMarquProd("a");
								
					if($nbr[0][0]>0){
									
								?>
															


									<a href="#" onclick="rechercheMarque('<?php echo $_POST['m'];  ?>',<?php echo $_POST['fam1']; ?>,<?php echo $_POST['fam2']; ?>,<?php echo $_POST['fam3']; ?>,'<?php echo $famille4['CSER']; ?>',1);"  ><div id="product-grid">

											<div class="more-product"><span> </span></div>						
											<div class="product-img b-link-stripe b-animate-go  thickbox">



								<?php  $photo=trim('images/familles/'.$_POST['fam1'].'/'.$_POST['fam1'].'-'.$_POST['fam2'].'-'.$_POST['fam3'].'-'.$famille4['CSER'].'.png');  

								if (file_exists($photo)){

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">

								<?php

								}

								?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($famille4['DESER']))).' ('.$nbr[0][0].')'; ?></h4>
															</a>							
							<span class="item_price">
								<a href="#" onclick="document.getElementById('preview').src='<?php if(file_exists($photo)){ echo $photo; }else{ echo "../../SOFA/phart/indispo.png";} ?>';Hiden();">
								<img src="images/config.ico" class="popup-button" data-modal="popup" onclick="upload1(<?php echo $_POST['fam1']; ?>,<?php echo $_POST['fam2']; ?>,<?php echo $_POST['fam3']; ?>,<?php echo $famille4['CSER']; ?>)"> </a>
							</span>
													<div class="ofr">
													 </div>
												
													
													
												</div>	

										</div>

											</div>	
										</div>
									
									<?php } }


					}elseif ($_POST['m']!='' and $_POST['fam1']!='' and $_POST['fam2']!='' and $_POST['fam3']!='' and $_POST['fam4']!='') {

								$parPage=9;


								controller_setCfour_partsof($_POST['m']);
								controller_setCfam_partsof($_POST['fam1']);
								controller_setCsfam_partsof($_POST['fam2']);
								controller_setCfam3_partsof($_POST['fam3']);
								controller_setCseri_partsof($_POST['fam4']);
							
								$cprods=controller_ReadMarquProd("a");



								
									$total=$cprods[0][0];

								

								// controller_setCfour_partsof($_POST['m']);
								// controller_setCfam_partsof($_POST['fam1']);
								// controller_setCsfam_partsof($_POST['fam2']);
								// controller_setCfam3_partsof($_POST['fam3']);
								// controller_setCseri_partsof($famille4['CSER']);
							
								// $ps=controller_ReadMarq();

								// 	$cmpt=0;
								// 	foreach ($ps as $prod) {
								// 	$photo=trim('../../SOFA/phart/'.$prod['CDPHOT'].'.jpg');  
								// 	if (file_exists($photo)){
								// 	$cmpt=$cmpt+1;
						        //  }}
								// 	$nbr=$cmpt;



								if($total>0){

								// $total=$cprods[0]['TOTAL'];


								if(!isset($_POST['pag'])){
								$_POST['pag']=1;

								}
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['pag']) && !empty($_POST['pag']) && ctype_digit($_POST['pag']) == 1){
								   if($_POST['pag'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['pag'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;

								controller_setCfour_partsof($_POST['m']);
								controller_setCfam_partsof($_POST['fam1']);
								controller_setCsfam_partsof($_POST['fam2']);
								controller_setCfam3_partsof($_POST['fam3']);
								controller_setCseri_partsof($_POST['fam4']);
						
								controller_setLimit1($premierpage);


								if($_POST['pag']!=1 or $_POST['pag']==''){
									controller_setLimit2($parPage+($next-1));

								}else{

									controller_setLimit2($parPage+($next));
								}

								$prods=controller_ReadMarquProd(""); 

								}else{

								$prods=array();

								}
									
										
											foreach ($prods as $prod) {


								// $photo=trim('../../SOFA/phart/'.$prod['CDPHOT'].'.jpg');  
        //    						if (file_exists($photo)) {
									
								?>
															


									<a href="#" onclick="detail('<?php echo $prod['STK']; ?>','','1','2');"   ><div class="product-grid" >

											<div class="more-product"><span> </span></div>						
											<div class="prod b-link-stripe b-animate-go  thickbox">
												<?php 

										$photo=trim('../../SOFA/phart/'.trim($prod['CDPHOT']).'.jpg');
										if (file_exists($photo)) {
          					
?>
										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

										<?php }else{?>
										<img src="../../SOFA/phart/indispo.png"  class="img-responsive" alt="">
										<?php }?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DES']))); ?></h4>
															</a>							
													<span class="item_price"><?php
													//if($prod['PV']=='.00'){
														echo "<br>";
													//}else{
												//echo number_format($prod['PV'],2,',',' ').' DH' ; 

													//}?>

													 </span>
													<div class="ofr">
													 </div>
												
													
													<div class="clearfix">


								<?php  

								$pdf=trim('../../SOFA/FichTech/'.trim($prod['CDFICH']).'.pdf');  
								
								if (file_exists($pdf)) {

								 ?>

							<a href="#" onclick="detail('<?php echo $prod['STK']; ?>','<?php  echo trim($prod['CDFICH']) ?>','2','2');"><img class="pdf" src="images/iconeFiche.png" ></a>

							   <?php

								}else{
									echo "<br>";
								}

								?>
									
								
														<!-- <a href="../../SOFA/FichTech/<?php echo $prod['CDFICH']; ?>.pdf" target="_blank"><img class="pdf" src="images/pdf.png" ></a> -->


													</div>
												</div>	

										</div>

											</div>	
										</div>
									
									<?php  }
								// }

										if(count($prods)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
								 	?>



								   <ul class="pagination pagination-sm">
								   				 <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="rechercheMarque('<?php echo $_POST['m'] ?>',<?php echo $_POST['fam1'] ?>,<?php echo $_POST['fam2'] ?>,<?php echo $_POST['fam3'] ?>,'<?php echo $_POST['fam4'] ?>',1);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="rechercheMarque('<?php echo $_POST['m'] ?>',<?php echo $_POST['fam1'] ?>,<?php echo $_POST['fam2'] ?>,<?php echo $_POST['fam3'] ?>,'<?php echo $_POST['fam4'] ?>',<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>);">&laquo;</a></li>
								               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="rechercheMarque('<?php echo $_POST['m'] ?>',<?php echo $_POST['fam1'] ?>,<?php echo $_POST['fam2'] ?>,<?php echo $_POST['fam3'] ?>,'<?php echo $_POST['fam4'] ?>',<?php echo  $i ;  ?>);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
								    <?php } } ?>
								                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="rechercheMarque('<?php echo $_POST['m'] ?>',<?php echo $_POST['fam1'] ?>,<?php echo $_POST['fam2'] ?>,<?php echo $_POST['fam3'] ?>,'<?php echo $_POST['fam4'] ?>',<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="rechercheMarque('<?php echo $_POST['m'] ?>',<?php echo $_POST['fam1'] ?>,<?php echo $_POST['fam2'] ?>,<?php echo $_POST['fam3'] ?>,'<?php echo $_POST['fam4'] ?>',<?php echo $nbpage; ?>);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
								    </ul>

								    <!--  <ul class="paginate pag4 clearfix">
								     		<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',2);">|<</a></li>
							        		<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',2);"><<</a></li>
								        	<?php  for ($i=1; $i<=$nbpage ;$i++){
								          if($i == $current){ ?>       
								          <li class="current"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
								            <?php }else{ ?>
								       
								        <?php } }?>
								        <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',2);" >>></a></li>
								         <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',2);" >>|</a></li>
					      			<li class="single" style="display: block;float: left;padding: 9px 12px;margin-right: 6px;border-radius: 16px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
					      			</ul>
 -->

								   <?php } 

						
					
					} ?>
				



				<?php	}else{   ?>


									<ul id="breadcrumbs-two">

										<li><a href="#" onclick="location.reload();">Accueil</a></li>
							
									</ul>

								<?php

								$parPage=16;
							
								$cprods=controller_ReadAllFfournLimit("a");
				

								if(count($cprods)>0){
								$total=$cprods[0]['TOTAL'];


								if(!isset($_POST['p'])){
								$_POST['p']=1;

								}
								$nbpage=ceil($total / $parPage);
								if( isset($_POST['p']) && !empty($_POST['p']) && ctype_digit($_POST['p']) == 1){
								   if($_POST['p'] > $nbpage){

								   	$current = $nbpage;
								   }else{
								   	$current = $_POST['p'];
								   }

								}else{
									$current = 1;

								}

								$premierpage = ($current - 1) * $parPage;

								$next=($current - 1) * $parPage;

						
								controller_setLimit1_Ffourn($premierpage);


								if($_POST['p']!=1 or $_POST['p']==''){
									controller_setLimit2_Ffourn($parPage+($next-1));

								}else{

									controller_setLimit2_Ffourn($parPage+($next));
								}

								$prods=controller_ReadAllFfournLimit(""); 

								}else{

								$prods=array();

								}

										
								foreach ($prods as $prod) {

								controller_setCfour_partsof($prod['CFOUR']);
								$nbr=controller_ReadMarquOfFami('a');
									
								?>
															


									<a href="#" onclick="rechercheMarque('<?php echo $prod['CFOUR'];  ?>','','','','',1);"  ><div  id="product-grid-mrq" >

											<div class="more-product"><span> </span></div>						
											<div class="mrq b-link-stripe b-animate-go  thickbox">



								<?php  $photo=trim('images/FFOUR/'.$prod['CFOUR'].'.jpg');  

								//echo trim($photo);
								if (file_exists($photo)) {

								?>

										<img src="<?php echo $photo; ?>"  class="img-responsive" alt="">

								  <?php
								}else{

								?>
									<img src="../../SOFA/phart/indispo.png" class="img-responsive" alt="">
								<?php
								}

								?>

										<div class="b-wrapper">
												<h4 class="b-animate b-from-left  b-delay03">							
												<!-- <button> + </button> -->
												</h4>
										</div>
											</div>
														
											<div class="product-info simpleCart_shelfItem">
												<div class="product-info-cust prt_name">
													<h4><?php echo utf8_encode(ucfirst(strtolower($prod['DESFR1']))); ?></h4>
															</a>							
													<span class="item_price"><?php
													//if($prod['PV']=='.00'){
														echo "<br>";
													//}else{
												//echo number_format($prod['PV'],2,',',' ').' DH' ; 

													//}?>

													 </span>
													<div class="ofr">
													 </div>
												
													
											
												</div>	

										</div>

											</div>	
										</div>
									
									<?php }

										if(count($prods)==0){echo "<h2>aucun résultat <h2>";}elseif($nbpage>1){
								 	?>



								   <ul class="pagination pagination-sm">
								   				 <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',2);">|<</a></li>
								                <li style="font-size:20px;" class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',2);">&laquo;</a></li>
								               <?php  for ($i=1; $i<=$nbpage ;$i++){
								    if($i == $current){ ?>
								    
								          <li style="font-size:20px;" class="active"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
								    <?php }else{ ?>
								           <!-- <li style="font-size:20px;" ><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);" ><?php echo  $i ;  ?></a></li> -->
								    <?php } } ?>
								                <li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',2);" >&raquo;</a></li>
								    			<li style="font-size:20px;" class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',2);" >>|</a></li>
								    			<li class="single" style="display: block;float: left;padding: 6.5px 17px;margin-right: 11px;border-radius: 0px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
								    </ul>

								    <!--  <ul class="paginate pag4 clearfix">
								     		<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(1,'',2);">|<</a></li>
							        		<li class="<?php if($current == '1'){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != '1'){ echo $current -1 ;}else{echo $current ;}?>,'',2);"><<</a></li>
								        	<?php  for ($i=1; $i<=$nbpage ;$i++){
								          if($i == $current){ ?>       
								          <li class="current"><a href="#" onclick="recherche2(<?php echo  $i ;  ?>,'',2);"><?php echo  $i ;  ?></a></li>
								            <?php }else{ ?>
								       
								        <?php } }?>
								        <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php if($current != $nbpage){ echo $current + 1 ;}else{echo $current ;}?>,'',2);" >>></a></li>
								         <li class="<?php if($current == $nbpage){ echo "disabled" ;} ?>"><a href="#" onclick="recherche2(<?php echo $nbpage; ?>,'',2);" >>|</a></li>
					      			<li class="single" style="display: block;float: left;padding: 9px 12px;margin-right: 6px;border-radius: 16px;color: #f5f5f5;background: #999;">Sur <?php echo $nbpage; ?></li>	
					      			</ul>
 -->

								   <?php } 


				 } 	



			}



			?>
		

		<div class="modal blur-effect" id="popup" style="overflow: hidden;overflow-y: hidden;">
			<div class="popup-content">
            
            <div class="containerPop">
            	<div class="contr"><h2 style="color: white;font-size: 27px;width: 100%;">Selectionnez une image et cliquez sur le button upload</h2></div>

            	<div class="upload_form_cont">
                	<form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php" >
                    	<div class="input">
                        
                        	<div><input  type="file" name="image_file" id="image_file" onChange="fileSelected();"/></div>
                     
                    	</div >
                    	

        
<?php if($_SESSION['marq']=="1"){  ?>  


<?php if(!isset($_POST['f1'])){ ?>
<div class="input" onclick="startUploading();location.reload();">
 	<input  type="button" value="Upload" onClick="startUploading();location.reload();" style="color:black;" />
<div id="btn" ></div>
</div>
<?php }else{ ?>
<div class="input" onclick="startUploading();recherche3('<?php if(isset($_POST['f1'])){ echo $_POST['f1']; } ?>','<?php if(isset($_POST['f2'])){ echo $_POST['f2']; }  ?>','<?php if(isset($_POST['f3'])){ echo $_POST['f3'];}  ?>','<?php if(isset($_POST['f4'])){ echo $_POST['f4']; } ?>','<?php if(isset($_POST['f5'])){ echo $_POST['f5']; } ?>',<?php if(isset($_POST['pg'])){ echo $_POST['pg']; }else{echo "1";} ?>);recherche3('<?php if(isset($_POST['f1'])){ echo $_POST['f1']; } ?>','<?php if(isset($_POST['f2'])){ echo $_POST['f2']; }  ?>','<?php if(isset($_POST['f3'])){ echo $_POST['f3'];}  ?>','<?php if(isset($_POST['f4'])){ echo $_POST['f4']; } ?>','<?php if(isset($_POST['f5'])){ echo $_POST['f5']; } ?>',<?php if(isset($_POST['pg'])){ echo $_POST['pg']; }else{echo "1";} ?>);">
	<input  type="button" value="Upload" onClick="startUploading();recherche3('<?php if(isset($_POST['f1'])){ echo $_POST['f1']; } ?>','<?php if(isset($_POST['f2'])){ echo $_POST['f2']; }  ?>','<?php if(isset($_POST['f3'])){ echo $_POST['f3'];}  ?>','<?php if(isset($_POST['f4'])){ echo $_POST['f4']; } ?>','<?php if(isset($_POST['f5'])){ echo $_POST['f5']; } ?>',<?php if(isset($_POST['pg'])){ echo $_POST['pg']; }else{echo "1";} ?>);recherche3('<?php if(isset($_POST['f1'])){ echo $_POST['f1']; } ?>','<?php if(isset($_POST['f2'])){ echo $_POST['f2']; }  ?>','<?php if(isset($_POST['f3'])){ echo $_POST['f3'];}  ?>','<?php if(isset($_POST['f4'])){ echo $_POST['f4']; } ?>','<?php if(isset($_POST['f5'])){ echo $_POST['f5']; } ?>',<?php if(isset($_POST['pg'])){ echo $_POST['pg']; }else{echo "1";} ?>);" style="color:black;" />
<div id="btn" ></div>
</div>

<?php } ?>
 		
<?php }else{ ?>
<div class="input" onclick="startUploading();rechercheMarque('<?php echo $_POST['m']; ?>','<?php echo $_POST['fam1']; ?>','<?php echo $_POST['fam2']; ?>','<?php echo $_POST['fam3']; ?>','<?php echo $_POST['fam4']; ?>',1);rechercheMarque('<?php echo $_POST['m']; ?>','<?php echo $_POST['fam1']; ?>','<?php echo $_POST['fam2']; ?>','<?php echo $_POST['fam3']; ?>','<?php echo $_POST['fam4']; ?>',1);">
	<input  type="button" value="Upload" onClick="startUploading();rechercheMarque('<?php echo $_POST['m']; ?>','<?php echo $_POST['fam1']; ?>','<?php echo $_POST['fam2']; ?>','<?php echo $_POST['fam3']; ?>','<?php echo $_POST['fam4']; ?>',1);rechercheMarque('<?php echo $_POST['m']; ?>','<?php echo $_POST['fam1']; ?>','<?php echo $_POST['fam2']; ?>','<?php echo $_POST['fam3']; ?>','<?php echo $_POST['fam4']; ?>',1);" style="color:black;" />    	
<div id="btn" ></div>
</div>
<!-- document.getElementsByClassName('img-responsive').src = document.document.getElementsByClassName('img-responsive').src + '?' + (new Date()).getTime(); -->
<?php } ?>

	                



	                        
                      
                        <!-- location.reload(); 
						$('.product-grid').load(location.href+ '.product-grid')
						$('.img-responsive').load(location.href+ '.img-responsive')
						img-responsive
						recherche3(<?php if(isset($_POST['f1'])){ echo $_POST['f1']; }else{echo "''";}  ?>,<?php if(isset($_POST['f2'])){ echo $_POST['f2']; }else{echo "''";}  ?>,<?php if(isset($_POST['f3'])){ echo $_POST['f3'];}else{echo "''";}  ?>,'<?php if(isset($_POST['f4'])){ echo $_POST['f4']; }else{echo "''";}  ?>',<?php if(isset($_POST['f5'])){ echo $_POST['f5']; }else{echo "''";} ?>,<?php if(isset($_POST['pg'])){ echo $_POST['pg']; }else{echo "1";} ?>);
                    		-->
	                    
	                    <div id="fileinfo">
	                        <div id="filename"></div>
	                        <div id="filesize"></div>
	                        <div id="filetype"></div>
	                        <div id="filedim"></div>
	                    </div>
	                    <div id="error">Les fichiers n'est pas valide!</div>
	                    <div id="error2">Erreur de téléchargement</div>
	                    <div id="abort">Le téléchargement est echoué</div>
	                    <div id="warnsize">Votre fichier est voluminous</div>

	                    <div id="progress_info">
	                        <div id="progress"></div>
	                        <div id="progress_percent">&nbsp;</div>
	                        <div class="clear_both"></div>
	                        <div>
	                            <div id="speed">&nbsp;</div>
	                            <div id="remaining">&nbsp;</div>
	                            <div id="b_transfered">&nbsp;</div>
	                            <div class="clear_both"></div>
	                        </div>
	                        <div id="upload_response"></div>
	                    </div>
	                </form>

                	<img id="preview" />

		<?php if($_SESSION['marq']=="1"){  ?>

<a id="remove" onclick="remove($('#preview').attr('src'));recherche3('<?php if(isset($_POST['f1'])){ echo $_POST['f1']; } ?>','<?php if(isset($_POST['f2'])){ echo $_POST['f2']; }  ?>','<?php if(isset($_POST['f3'])){ echo $_POST['f3'];}  ?>','<?php if(isset($_POST['f4'])){ echo $_POST['f4']; } ?>','<?php if(isset($_POST['f5'])){ echo $_POST['f5']; } ?>',<?php if(isset($_POST['pg'])){ echo $_POST['pg']; }else{echo "1";} ?>)
;recherche3('<?php if(isset($_POST['f1'])){ echo $_POST['f1']; } ?>','<?php if(isset($_POST['f2'])){ echo $_POST['f2']; }  ?>','<?php if(isset($_POST['f3'])){ echo $_POST['f3'];}  ?>','<?php if(isset($_POST['f4'])){ echo $_POST['f4']; } ?>','<?php if(isset($_POST['f5'])){ echo $_POST['f5']; } ?>',<?php if(isset($_POST['pg'])){ echo $_POST['pg']; }else{echo "1";} ?>);
;" href="#" style="text-decoration: underline;margin-left: 75px;">Supprimer</a>   


		<?php }else{ ?>

			<a id="remove" onclick="remove($('#preview').attr('src'));rechercheMarque('<?php echo $_POST['m']; ?>','<?php echo $_POST['fam1']; ?>','<?php echo $_POST['fam2']; ?>','<?php echo $_POST['fam3']; ?>','<?php echo $_POST['fam4']; ?>',1);rechercheMarque('<?php echo $_POST['m']; ?>','<?php echo $_POST['fam1']; ?>','<?php echo $_POST['fam2']; ?>','<?php echo $_POST['fam3']; ?>','<?php echo $_POST['fam4']; ?>',1);" href="#" style="text-decoration: underline;margin-left: 75px;">Supprimer</a>


		<?php } ?>

                	<!--document.getElementById("preview").src 

                	$('.img-responsive').load(location.href+ '.img-responsive')  -->
	            </div>
	        </div>
				
				
					<div class="close"></div>
				
			</div>
		</div>

				

				
		<!-- <a href="#" class="popup-button" data-modal="popup">Je m'inscris !</a> -->

		<script src="js/popup.js"></script>