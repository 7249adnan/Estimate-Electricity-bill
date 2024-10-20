<?php

// data Base estimatebills



 
 $uri = $_SERVER['REQUEST_URI'];
 //echo $uri; // Outputs: URI
 //echo "<br>";
 $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  
 $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 //echo $url; // Outputs: Full URL
 //echo "<br>";
 $query = $_SERVER['QUERY_STRING'];
 //echo $query; // Outputs: Query String

// Initialize URL to the variable
//$url = 'http://www.geeksforgeeks.org/register?number=1234567890&password=abcd&email=amit1998@gmail.com';
     
// Use parse_url() function to parse the URL
// and return an associative array which
// contains its various components
$url_components = parse_url($url);
 
// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
     
// Display result

$email=$params['email'];
$number=$params['number'];
$password_par=$params['password'];

//echo ' your number is '.$params['number'].' your email ID is '.$params['email'].' your Password is '.$params['password'];


fill_database($email,$number,$password_par);


function fill_database($email,$number,$password_par)
{

//For Website estimateelectricitybill.epizy.com

$servername="sql307.epizy.com";
$username="epiz_29239566";
$password="ilogic1234";
$database="epiz_29239566_estimatebills";

/*
$servername="127.0.0.1";
$username="root";
$password="root";
$database="estimatebills";
*/



$conn =mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("sorry we failed to connect : ".mysqli_connect_error());

}

else
{

    //$sql="INSERT INTO `accounts` (`email_id`, `mobile_no`, `password`) VALUES ('$email','$number', '$password')";
    $sql="INSERT INTO `accounts` (`email_id`, `mobile_no`, `password`) VALUES ('$email', '$number', '$password_par')";

    $result =mysqli_query($conn,$sql);

    if($result)
    {
        echo "<script>alert('your verification is Successfully Completed ')</script>";
        echo "<script> location.href='login.php'; </script>";
    
    }
    else
    {
        echo "<script>alert('You have Already Verified Your E-mail ')</script>";
        echo "<script> location.href='login.php'; </script>";
 
    }

}

}







function check_database($email,$number,$password)
{
    $ex=$email;    
       
    $servername="127.0.0.1";
    $username="root";
    $password="root";
    $database="estimatebills";


    $conn =mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        die("sorry we failed to connect : ".mysqli_connect_error());

    }

    else
    {
        echo "connection was successful";
    }

  
    $sql= "SELECT * FROM `accounts` ";
    $result =mysqli_query($conn,$sql);
    
    $flag=0;

    while($row =mysqli_fetch_assoc($result))
    {
    $id=$row['email_id'];
    
        if($id==$ex)
        {
            $flag=1;
        }

    }
    
    if($flag==1)
    {
        echo "<script>alert('you have already verified your Email ID')</script>";
        return 0;
    }
    else{
        
        //echo "<script>alert('your verification is Successfully Completed ')</script>";
        return 1;
       
    }

}


?>