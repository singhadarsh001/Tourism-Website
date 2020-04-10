<?php
$serverName="localhost";
$username="root";
$password="";


$conn= new mysqli($serverName,$username,$password); //creating connection object using NEW keyword via object oriented 


$queryTobepassed="create database tourists"; 

$check=$conn->query($queryTobepassed);   //  calling it with object directly . query is a predefined method

if($check==TRUE)  
	{
		echo"database created";
	}
else
	{
		echo "creation failed".mysqli_error($conn);  // the extension tells about the error encountered while creation
	}

?>
