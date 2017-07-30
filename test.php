<?php
require ('mysqli_connect.php');
$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	
$target_dir = "testimonials/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$url = 'testimonial';
header("Location: http://$host$uri/$url"); 
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg" && $imageFileType != "gif"&& $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
$randoms = mt_rand();$random1 = rand();
$recept = $_SESSION['email'].$randoms.$random1;
$newfilename = $recept . $file_ext .'.'.$imageFileType ;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "testimonials/" . $newfilename)) {

		$image_name = $newfilename;
        
        $randoms = rand();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

		$query="INSERT INTO `Testimonial`(`image`, `name`, `email`, `message`, `id`) VALUES ('$image_name','$name','$email','$message','')";

		$result = mysqli_query($dbcon,$query);
               $host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$url = 'tst.php?sucess';
header("Location: http://$host$uri/$url"); 

        if ($result){
           header("location:  tst.php");
        }

     
		
    } else {
        echo "Sorry, there was an error uploading your file.";
		header("location:  tst.php?remarks=ERROR");
    }
}
?>