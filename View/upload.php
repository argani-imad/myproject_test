<?php
session_start();

if(!isset($_POST['v5'])){


if(isset($_POST['v1']) and isset($_POST['v2']) and isset($_POST['v3']) and isset($_POST['v4'])){


if($_POST['v1']!='' and $_POST['v2']=='' and $_POST['v3']=='' and $_POST['v4']=='' ){
//1
    $_SESSION['chemin']=$_POST['v1']."/".$_POST['v1'].".png";

}elseif($_POST['v1']!='' and $_POST['v2']!='' and $_POST['v3']=='' and $_POST['v4']==''){
//2
    $_SESSION['chemin']=$_POST['v1']."/".$_POST['v1']."-".$_POST['v2'].".png";

}elseif($_POST['v1']!='' and $_POST['v2']!='' and $_POST['v3']!='' and $_POST['v4']==''){
//3
    $_SESSION['chemin']=$_POST['v1']."/".$_POST['v1']."-".$_POST['v2']."-".$_POST['v3'].".png"; 

}elseif($_POST['v1']!='' and $_POST['v2']!='' and $_POST['v3']!='' and $_POST['v4']!=''){
//4
    $_SESSION['chemin']=$_POST['v1']."/".$_POST['v1']."-".$_POST['v2']."-".$_POST['v3']."-".$_POST['v4'].".png";

}else{
//5
    $_SESSION['chemin']="";
}

} 


 // echo $_SESSION['chemin'];
//$target_dir = "images/familles/";
$target_file =  "images/familles/".$_SESSION['chemin'];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])){

    $check = getimagesize($_FILES["image_file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
	// unlink($target_file);
   // echo "Sorry, file already exists."; 
 $uploadOk =1;  
}

// Check file size
if ($_FILES["image_file"]["size"] > 1048576){

	
    echo "Votre fichier est voluminous.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
    echo "Désolé, seulement JPG, JPEG & PNG  fichiers sont autorisé.";
    $uploadOk = 0;
}


$minheight = 262;
$maxheight = 262;
$minwidth = 262;
$maxwidth = 262;
list($width, $height) = getimagesize($_FILES["image_file"]["tmp_name"]);
if(isset($width) && isset($height) && ($width > $maxwidth || $height > $maxheight || $width < $minwidth || $height < $minheight))
    {
    echo "<script language='javascript'>alert('Votre image doit faire 262px de hauteur et 262px de largeur !');</script>";
     $uploadOk = 0;
//    header('location:ajout_banniere.php?temoignage=' . $_GET['temoignage'] . '&categorie=' . $_GET['categorie'] . '');
    }
    



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Désolé, Le téléchargement est echoué.";
// if everything is ok, try to upload file
    }else {
    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)){
        echo "le fichier ". basename($_FILES["image_file"]["name"]). " est téléchargé.";
    }else{
        echo "Désolé, Le téléchargement est échoué.";
    }
}


}elseif (isset($_POST['v5'])){
  

echo $_POST['v5'];

if($_POST['v5']!="../../SOFA/phart/indispo.png"){

$src=strval($_POST['v5']);

unlink($src); 

}else{

    echo "aucune image selectionnée";
}



}

?>


