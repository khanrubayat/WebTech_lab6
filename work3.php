<?php 

session_start();





 ?>
<?php
$target_dir = "D:/Pro/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}











?>


<?php 

class person{
	public $name;







	public $id;
	public $email;


	function get_name(){
	return $this->name;
	}

	function get_id(){
	return $this->id;
	}

function get_email(){
	return $this->email;
	}
	function set_name($name){
		$this->name=$name;
	}
	function set_id($id){
		$this->id=$id;
	}
	function set_email($email){
		$this->email=$email;
	}


}

 ?>
 <?php 

 	$us = new person();
 	$us->set_name($_SESSION["name"]);
 	$us->set_id($_SESSION["id"]);
 	$us->set_email($_SESSION["email"]);

		$ditails=$us->get_name()." ".$us->get_email()." ".$us->get_id()."\n";

		$myfile = fopen("userditails.txt", "w") or die("Unable to open file!");
		//echo $ditails;
	
		fwrite($myfile,$ditails);
		echo "success fully save.. <br>";


		print_r($_SESSION);
		echo "<img src=$target_file>";
		$dd="../../../../";

  ?>