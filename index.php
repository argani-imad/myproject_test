<?php
session_start();
// if(isset($_SESSION['ard465yuhfml47ojvcf'])){
//                 header("Location: View/products2.php");
//                 // exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" />
	<title>SIGN IN</title>


	<link rel="stylesheet" href="View/css/animateIndex.css">
	<link rel="stylesheet" href="View/css/styleIndex.css">

	
		<script src="View/js/jquery8.js"></script>

	<script type="text/javascript">


	function login() {
		//alert("AAAA");

		$.ajax({ 
	     
         type: 'POST',
         cache:false, 
         url: 'Controller/controller_authentif.php',                       
         data:{"username":$('#username').val(),"password":$('#password').val()},

         error:function(err){
         	alert("error"); 
				}, 	

         success: function(msg){
			//alert(msg);
            if(msg.toLowerCase().indexOf("sqlcode") >= 0 || msg.toLowerCase().indexOf("error") >= 0){	
            alert("Informations de connexion invalide. Veuillez réessayer.");
			$('#password').val('');

	
         	}else{

         	   document.location.href="View/products2.php";	
         	}

				// $('#ajaxLoad').hide();
				// $('#imgLoad').hide();
         }  
    }); 	

	}


	


	</script>
</head>

<body>
	<div class="container">
		<div class="top">
			
		</div>

		<form method="POST" name="form1" id="form1">
		<div class="login-box animated fadeInUp" id="login">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username" required>
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="password" required>
			<br/>
			<button type="submit" >Sign In</button>

			
			<br/>
			<!-- <a href="#"><p class="small">Forgot your password?</p></a> -->
		</div>
		</form>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});


	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});


$(document).ready(function(){
$('#form1').submit(function(){
login();
return false;
});
});
</script>

</html>