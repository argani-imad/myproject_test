
<?php include('header.php'); 

  // header('Location: products2.php');
?>


<script type="text/javascript">



	// function change_class(i){ 


	// $('.arrow').each(function(){ 
	// 		if($(this).attr('id')!="icon"+i){
	// 			$(this).attr('src', 'images/arrowDown.png');
	// 			// alert('cc');
	// 			// alert('1');
	// 		}else{
	// 			$(this).attr('src', 'images/arrowUp.png');
	// 			// alert('cc');
	// 			// alert('2');		
	// 		}
					
	// 		});


	// 	var btn = document.getElementById("icon"+i); 


	// 		if(btn.src=="images/arrowUp.png"){

	// 			btn.src="images/arrowDown.png";

	// 		}else{
	// 				// alert('TEst');
	// 			btn.src= "images/arrowUp.png"; 
	// 		}


	// 	}



</script>
			<!--header-->
			<div class="content">
	<div class="product-model">	 
	 <div class="container" id="center" >
	 	<!-- style="box-shadow: 1px 1px 12px #555;overflow-x: hidden;overflow-y: scroll;height:665px;" -->
		<h2></h2>	

				
				<div class="col-md-9 product-model-sec"  id="rech">



				
		
				</div>	

				
			<div class="rsidebar span_1_of_left">
				 
			<!-- <form method="POST" name="form" id="form">	-->

						<div class="left-sidebar" >
							<div>
								<h3>
									<div class="example">
										<form method="post" id="choix" name="choix" class="choix" >
						                    	 <ul class="nav nav-tabs" id="nav" value="3">

							                    	 <input value="1" hidden id="m" value="2" data-toggle="tab">
													 
													 <li <?php if(isset($_POST['marque'])){if ($_POST['marque'] == "1") {  ?> class="active" <?php }}elseif (!isset($_POST['marque'])){ ?> class="active" <?php }; ?> ><a  id="marque" value ="1" href="#"><input  type="radio"  id="marque" value="1" name="marque" onclick="this.form.submit();">
													 <label for="inlineRadio1">Familles</label></a></li>

													 <li <?php if(isset($_POST['marque'])){if ($_POST['marque'] == "2") { ?> class="active" <?php }}; ?>><a  href="#" id="marque"  value ="2"> <input data-toggle="tab" type="radio"  id="marque" value="2" name="marque" onclick="this.form.submit();">
							                         <label for="inlineRadio2">Marques</label></a></li>

												 </ul>
										   </form>
									
								</div>	
							</h3>
							</div>	

		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			
								<style type="text/css">

					
								</style>


							<?php



			if(!isset($_POST['marque']) or $_POST['marque']=="1"){        

					$_SESSION['marq']="1";

								$familles1=controller_ReadAllFfami();  
								foreach ($familles1 as $famille1) {

							?>
					
							<div class="panel panel-default">
								<div class="panel-heading" style="word-wrap: break-word;">
									<h4 class="panel-title">
										<a id="click1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php echo $famille1['CFAM'] ; ?>" onclick="recherche3(<?php echo $famille1['CFAM'];  ?>,'','','','',1);" title="<?php echo utf8_encode(trim($famille1['CFAM']));  ?>">
<!-- 										<img id="icon<?php echo $famille1['CFAM'] ; ?>" class="arrow" src="images/arrowDown.png" style="float:right;"  ></img>
 -->											<!-- <i class="fa fa-chevron-circle-up" style="font-size:48px;color:red;float:right;"></i> -->
											<?php echo utf8_encode(trim(ucfirst(strtolower($famille1['DESF']))));  ?> 
										</a>
									</h4>
								</div>
								<div id="sportswear<?php echo $famille1['CFAM'] ; ?>" class="panel-collapse collapse">
									<div class="panel-body" style="text-align: left;">
						<ul>
							<ul class="topnav">

								<?php 	
									// echo $famille1['CFAM'] ;
										controller_setCfam_Fsfami($famille1['CFAM']);
										$familles2=controller_ReadSfamiOfFami('');  
										foreach ($familles2 as $famille2) { 


											?>
											
													<li><a href="#" id="fam<?php echo trim($famille2['CSFAM']); ?>" title="<?php echo trim($famille2['CSFAM']); ?>"  onclick="recherche3(<?php echo $famille1['CFAM'];  ?>,<?php echo $famille2['CSFAM']; ?>,'','','',1);"><?php echo utf8_encode(trim(ucfirst(strtolower($famille2['DESSF'])))); ?></a>
													<!-- <li><a href="<?php echo utf8_encode(trim($famille2['CSFAM'])); ?>" id="fam2"><input  name="fam3" value="<?php echo utf8_encode(trim($famille2['DESSF'])); ?>"></a></li> -->
														
														<!-- <button onclick="click(5)">Show href Value</button> -->
														<ul>
															<?php 	
																// echo $famille1['CFAM'] ;
																controller_setCfam_Ffami3($famille1['CFAM']);
																controller_setCsfam_Ffami3($famille2['CSFAM']);
																$familles3=controller_ReadFfami3OfSfami('');  
																foreach ($familles3 as $famille3) {

																// controller_setCfam_Fserie($famille1['CFAM']);
																// controller_setCsfam_Fserie($famille2['CSFAM']);
																// controller_setCfam31_Fserie($famille3['CFAM31']);
																//  $nbr=controller_ReadCountSerieOfFfami3();

																// if($nbr[0][0]>0){
																?>


															 		<li><a href="#" name="fami" value="<?php echo utf8_encode(trim($famille3['DES3'])); ?>" title="<?php echo utf8_encode(trim($famille3['CFAM31'])); ?>" onclick="recherche3(<?php echo $famille1['CFAM'];  ?>,<?php echo $famille2['CSFAM']; ?>,<?php echo $famille3['CFAM31']; ?>,'','',1);"><?php echo utf8_encode(ucfirst(strtolower($famille3['DES3']))); ?></a>


																	 	<ul>
																	 		<?php 	
	  										


																	 			controller_setCfam_Fserie($famille1['CFAM']);
																				controller_setCsfam_Fserie($famille2['CSFAM']);
																				controller_setCfam31_Fserie($famille3['CFAM31']);
																				$familles4=controller_ReadSerieOfFfami3(''); 
																				
																				foreach ($familles4 as $famille4) { 
																				controller_setCfam_partsof($famille1['CFAM']);
																				controller_setCsfam_partsof($famille2['CSFAM']);
																				controller_setCfam3_partsof($famille3['CFAM31']);
																				controller_setCseri_partsof($famille4['CSER']);
																			    $rech="";
																				$nbr=controller_ReadCountProd($rech);
																				

																				if($nbr[0][0]>0){  ?>

																					<li><a href="#" class="famil4" name="famil4" onclick="recherche3(<?php echo $famille1['CFAM'];  ?>,<?php echo $famille2['CSFAM']; ?>,<?php echo $famille3['CFAM31']; ?>,'<?php echo $famille4['CSER']; ?>','',1);"; title="<?php echo $famille4['CSER']; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($famille4['DESER'].' ('.$nbr[0][0].')')))); ?></a>

																							<ul>


																								<?php 
																								    controller_setCfam_partsof($famille1['CFAM']);
																									controller_setCsfam_partsof($famille2['CSFAM']);
																									controller_setCfam3_partsof($famille3['CFAM31']);
																									controller_setCseri_partsof($famille4['CSER']);
																									$mrqs=controller_ReadMarquOfFami("b"); 

																									foreach ($mrqs as $mrq) {
																									controller_setCfour_partsof($mrq['CFOUR']);
																									controller_setCfam_partsof($famille1['CFAM']);
																									controller_setCsfam_partsof($famille2['CSFAM']);
																									controller_setCfam3_partsof($famille3['CFAM31']);
																									controller_setCseri_partsof($famille4['CSER']);
																									$nbr=controller_ReadMarquProd("a"); ?>


																											<li style="margin-left: 15px;"><a href="#" class="mrq" name="mrq" onclick="recherche3(<?php echo $famille1['CFAM'];  ?>,<?php echo $famille2['CSFAM']; ?>,<?php echo $famille3['CFAM31']; ?>,'<?php echo $famille4['CSER']; ?>','<?php echo $mrq['CFOUR']; ?>',1);javascript:clic();this.style.color='blue'"; title="<?php echo $mrq['CFOUR']; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($mrq['DESFR1'].' ('.$nbr[0][0].')')))); ?></a></li>


																									<?php }?>

																								

																							</ul>



																					</li>
																																				
																				<?php  } }
																			// }

																			?>
														

																		</ul>


															 		</li>

															 	<?php }
															 // } ?>
															
															
															
														</ul>
													</li>
								<?php } ?>
													
													
												
							</ul>
						</ul>
									</div>
								</div>
							</div>
					
							<?php } 


						}else{ 

								$_SESSION['marq']="2";
							?>
						<div class="panel-group category-products" id="accordian" style="overflow-x: hidden;overflow-y: scroll;height: 620px;"><!--category-productsr-->


							<?php
								$fourns=controller_ReadAllFfourn();  
								foreach ($fourns as $fourn) {

							?>
					
							<div class="panel panel-default">
								<div class="panel-heading" style="word-wrap: break-word;">
									<h4 class="panel-title">
										<a id="click1" class="accordion-toggle"  data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php echo $fourn['CFOUR'] ; ?>" onclick="rechercheMarque('<?php echo $fourn['CFOUR'];  ?>','','','','',1);" title="<?php echo utf8_encode(trim($fourn['CFOUR']));  ?>">
											<span class="badge pull-right"></span>
											<?php echo utf8_encode(trim(ucfirst(strtolower($fourn['DESFR1']))));  ?> 
										</a>
									</h4>
								</div>
								<div id="sportswear<?php echo $fourn['CFOUR'] ; ?>" class="panel-collapse collapse">
									<div class="panel-body" style="text-align: left;">
										<ul>
							<ul class="topnav">

								<?php 	
									// echo $famille1['CFAM'] ;
										controller_setCfour_partsof($fourn['CFOUR']);
										$familles1=controller_ReadMarquFam1();  
										foreach ($familles1 as $famille1) { ?>
											
													<li><a href="#" id="fam<?php echo trim($famille1['CFAM']); ?>" title="<?php echo trim($famille1['CFAM']); ?>" onclick="rechercheMarque('<?php echo $fourn['CFOUR'];  ?>',<?php echo $famille1['CFAM']; ?>,'','','',1);" ><?php echo utf8_encode(trim(ucfirst(strtolower($famille1['DESF'])))); ?></a>
													<!-- <li><a href="<?php echo utf8_encode(trim($famille2['CSFAM'])); ?>" id="fam2"><input  name="fam3" value="<?php echo utf8_encode(trim($famille2['DESSF'])); ?>"></a></li> -->
														
														<!-- <button onclick="click(5)">Show href Value</button> -->
														<ul>
															<?php 	
																// echo $famille1['CFAM'] ;
																controller_setCfour_partsof($fourn['CFOUR']);
																controller_setCfam_partsof($famille1['CFAM']);
																$familles2=controller_ReadMarquFam2();
																// echo $fourn['CFOUR'].'/'.$famille1['CFAM'].' /';
																// print_r($familles2);
															    foreach ($familles2 as $famille2) { ?>


															 		<li><a href="#" name="fami" value="<?php echo utf8_encode(trim($famille2['CSFAM'])); ?>" title="<?php echo utf8_encode(trim($famille2['CSFAM'])); ?>" onclick="rechercheMarque('<?php echo $fourn['CFOUR'];  ?>',<?php echo $famille1['CFAM']; ?>,<?php echo $famille2['CSFAM']; ?>,'','',1);" ><?php echo utf8_encode(trim(ucfirst(strtolower($famille2['DESSF'])))); ?></a>


																	 	<ul>
																	 		<?php 	
	  										


																	 			controller_setCfour_partsof($fourn['CFOUR']);
																				controller_setCfam_partsof($famille1['CFAM']);
																				controller_setCsfam_partsof($famille2['CSFAM']);
																				$familles3=controller_ReadMarquFam3(); 
																				
																				foreach ($familles3 as $famille3) { 

																	 		
																				?>

																	   <li><a href="#" class="famil4" name="famil4" onclick="rechercheMarque('<?php echo $fourn['CFOUR'];  ?>',<?php echo $famille1['CFAM']; ?>,<?php echo $famille2['CSFAM'];?>,<?php echo $famille3['CFAM31']; ?>,'',1);" title="<?php echo $famille3['CFAM31']; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($famille3['DES3'])))); ?></a>


																		<ul>

																					<?php 	
			  										


																			 			controller_setCfour_partsof($fourn['CFOUR']);
																						controller_setCfam_partsof($famille1['CFAM']);
																						controller_setCsfam_partsof($famille2['CSFAM']);
																						controller_setCfam3_partsof($famille3['CFAM31']);
																						$familles4=controller_ReadMarquFam4(); 
																						
																						foreach ($familles4 as $famille4) { 

																							controller_setCfour_partsof($fourn['CFOUR']);
																							controller_setCfam_partsof($famille1['CFAM']);
																							controller_setCsfam_partsof($famille2['CSFAM']);
																							controller_setCfam3_partsof($famille3['CFAM31']);
																							controller_setCseri_partsof($famille4['CSER']);
																							$nbr=controller_ReadMarquProd("a");

																						
																					
										
																						// echo " Count :".$cmpt;
																					

																							if($nbr[0][0]>0){

																			 			?>

																						<li style="margin-left: 15px;"><a href="#" class="mrq" name="mrq" onclick="rechercheMarque('<?php echo $fourn['CFOUR'];  ?>',<?php echo $famille1['CFAM']; ?>,<?php echo $famille2['CSFAM']; ?>,<?php echo $famille3['CFAM31']; ?>,'<?php echo $famille4['CSER']; ?>',1);javascript:clic();this.style.color='blue'"; title="<?php echo $famille4['CSER']; ?>"><?php echo utf8_encode(trim(ucfirst(strtolower($famille4['DESER'].' ('.$nbr[0][0].')')))); ?></a></li>

																						<?php } } ?>




																		</ul>




																	   </li>
																		<?php } 

																			?>
														

																		</ul>


															 		</li>

															 	<?php } ?>
															
															
															
														</ul>
													</li>
												<?php } ?>
													
													
												
												</ul>
							</ul>
									</div>
								</div>
							</div>
					
							<?php } ?>

						</div>
					

					<?php }?>
	





						</div><!--/category-products-->						
					</div> 
				   
			
								
	<!-- </form>		  -->
				   
							   
			 </div>				 
	      </div>
		</div>
</div>
<!---->
</div>
	<!--footer-->
		<!-- <div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-2 footer-grid">
					<h4>company</h4>
					<ul>
						<li><a href="products.html">products</a></li>
						<li><a href="#">Work Here</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Happenings</a></li>
						<li><a href="#">Dealer Locator</a></li>
					</ul>
				</div>
					<div class="col-md-2 footer-grid">
					<h4>service</h4>
					<ul>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Warranty</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
					</div>
					<div class="col-md-2 footer-grid">
					<h4>order & returns</h4>
					<ul>
						<li><a href="#">Order Status</a></li>
						<li><a href="#">Shipping Policy</a></li>
						<li><a href="#">Return Policy</a></li>
						<li><a href="#">Digital Gift Card</a></li>
					</ul>
					</div>
					<div class="col-md-2 footer-grid">
					<h4>legal</h4>
					<ul>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms and Conditions</a></li>
						<li><a href="#">Social Responsibility</a></li>
					</ul>
					</div>
					<div class="col-md-4 footer-grid1">
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
					<p>Copyright &copy; 2015 Swim Wear. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</div> -->
	<!--footer-->

	<script type="text/javascript">
			$(document).ready(function(){
			$('#form').submit(function(){
			
			return false;
			});
			});
// recherche();

	</script>
		<script type="text/javascript">
			$(document).ready(function(){
			$('#form2').submit(function(){
			
			return false;
			});
			});
recherche2();	

 	</script>
			<script type="text/javascript">
			$(document).ready(function(){
			$('#marque').submit(function(){
	
			return false;
			});
			});

 	</script>
</body>
</html>