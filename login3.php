<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<FORM method="post" >
	Name:	<input type="text" name="email"><br>
	
			Password:<input type="Password" name="password">
			<br>
			<input type="submit" name="submit" value="submit">

		</FORM>
	
<?php 




$serverName="localhost";
$username="root";
$password="";
$databaseName="mydatabase";

function executeNonQuery($query)
{
    global $serverName,$username,$password,$databaseName;
    $result=false;
    $connection=mysqli_connect($serverName,$username,$password,$databaseName);
    if($connection)
        {
            $result=mysqli_query($connection,$query);
        }
    return $result;
}






if(isset($_POST["submit"])){
	$res=getUserByIdPass($_POST["email"],$_POST["password"]);
	if($res){
		echo "login";
	}
	else {
		echo "not login";
	}
}



function getUserByIdPass($email,$password)
{




    $query="SELECT * FROM registration where password=$password and email=$email";
    echo $query;
    $result=executeNonQuery($query);
        return $result;
}

 ?>



</body>
</html>