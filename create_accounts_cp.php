<?php
// data Base estimatebills
// Start the session
session_start();


if( isset($_POST['ajax']) && isset($_POST['email_textbox']) ){ 
    $_SESSION["php_email_textbox"] = $_POST['email_textbox'];
    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['mobile_textbox']) ){ 
    $_SESSION["php_mobile_textbox"] = $_POST['mobile_textbox'];
    $_SESSION["mobile_number"]= $_POST['mobile_textbox'];
    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['otp_textbox']) ){ 
    $_SESSION["php_otp_textbox"] = $_POST['otp_textbox'];
    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['create_textbox']) ){ 
    $_SESSION["php_create_textbox"] = $_POST['create_textbox'];
    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['confirm_textbox']) ){ 
    $_SESSION["php_confirm_textbox"] = $_POST['confirm_textbox'];
    
      
 exit;
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   


        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script>
      
    $(function(){
        $('#header').load('header.php');
    });

    </script>

         
    <title>Create Accounts CP - Estimation/title>
    </head>

<body id="bd1">

<style>
#bd1{
 background-color:rgb(248, 241, 255); 
}
#form1{
 background-color:white; 
}

</style>

<style>
    body{
      font-family: "Helvetica";
    }
    #item{
        font-size: 20px;
    }
</style>


    <style>
        .high:hover {
            font-size: 20px;
        }
        </style>

    

    <style>
        #lb1,
        #lb2,
        #lb3,#lb4 ,#lbt1,#lbt2{

            font-size: 15px;
            font-weight: bold;

        }

        
        #form1{
                    border-style:  solid;
                    border-width: 10px;
                    border-color: rgb(83, 36, 255);
                    border-radius:0px; 
                    padding-left: 20px;
                    box-shadow: 5px 10px 18px rgb(78, 78, 78);

                    
                }

                #head_bg{
                   
                    font-size:30px;
                    color:red;
                }
                #sp{

                  background-color: white;
                  border-style:  solid;
                  color:rgb(53, 66, 241);
                  
                   
                   
                }
                #lbl{
                    font-size:15px;
                    font-weight: bold;
                    color:rgb(21, 130, 255);
                }

    </style>

     
<nav class="navbar navbar-expand-lg navbar-dark"
        style="background-color: #9b33fc; border-radius: 3px; ">
        <div class="container-fluid">
            <i class="fas fa-globe" style="font-size:32px;color:rgb(255, 217, 3)"></i>&nbsp;&nbsp;
            <a class="navbar-brand" style="font-size: 28px;color: rgb(255, 217, 3);text-shadow: 2px 1px rgb(255, 253, 253);" href="#"><b>Estimation CPanel</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="item" class="navbar-nav me-auto mb-2 mb-lg-0">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li  class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b style="color:rgb(255, 251, 0) ;" ><i class="fas fa-user-edit" style="font-size:24px;"></i> Accounts</b> 
                        </a>
                        
                        <ul style="background-color: rgb(211, 165, 255);" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        
                            <li><a class="dropdown-item" a-current="page" href="view_accounts_cp.php"><i class="fa fa-eye" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; View Accounts</b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" a-current="page" href="create_accounts_cp.php"><i class="fas fa-keyboard" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; Create Accounts </b></a></li>
                                
                        
                        </ul>

                    </li> &nbsp;&nbsp;

                    <li  class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b ><i class="fa fa-line-chart" style="font-size:24px;"></i> Analytics</b> 
                        </a>
                        <ul style="background-color: rgb(211, 165, 255);" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        
                            <li><a class="dropdown-item" a-current="page" href="view_analysis_cp.php"><i class="fa fa-eye" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; View Analysis</b></a></li>
                                  
                        
                        </ul>

                    </li> &nbsp;&nbsp;

                    <li  class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b ><i class="fa fa-credit-card" style="font-size:24px;"></i> Tarrif</b> 
                        </a>
                        <ul style="background-color: rgb(211, 165, 255);" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        
                            <li><a class="dropdown-item" a-current="page" href="view_tarrif_cp.php"><i class="fa fa-eye" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; View Tarrif</b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" a-current="page" href="view_tarrif_details_cp.php"><i class="fa fa-eye" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; View Tarrif details</b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" a-current="page" href="update_tarrif_cp.php"><i class="fas fa-edit" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp;Update Tarrif </b></a></li>
                                  
                        </ul>

                    </li> &nbsp;&nbsp;

                    <li  class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b ><i class="fas fa-server" style="font-size:24px;"></i> Griveance </b> 
                        </a>
                        <ul style="background-color: rgb(211, 165, 255);" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        
                            <li><a class="dropdown-item" a-current="page" href="view_griveance_cp.php"><i class="fa fa-eye" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; View Griveance</b></a></li>
                                
                        
                        </ul>

                    </li> &nbsp;&nbsp;

                   
                </ul>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

                <div class="mx-2">
                    <button class="btn btn-danger" style="
                    color: white; font-weight: bolder; border: 2px solid rgb(255, 255, 255); border-radius: 10px; " onclick="location.href = 'logout_flag.php';" ><b> Log Out</b> <i class="fas fa-sign-in-alt" style='font-size:20px'></i></button>
                </div>
            </div>
        </div>
    </nav>





<script>


    function create_password_show_hide()
    {
  
        var x = document.getElementById("create_password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }

function confirm_password_show_hide() {
  var x = document.getElementById("confirm_password");
  var show_eye = document.getElementById("confirm_show_eye");
  var hide_eye = document.getElementById("confirm_hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}

function email_pass() {

var l_id=document.getElementById('email_id'); 
var email_textbox_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,email_textbox:email_textbox_value}  
});     
 

}


function mobile_pass() {

var l_id=document.getElementById('mobile_number'); 
var mobile_textbox_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,mobile_textbox:mobile_textbox_value}  
});     
 

}

function otp_pass() {

var l_id=document.getElementById('otp_number'); 
var otp_textbox_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,otp_textbox:otp_textbox_value}  
});     
 

}

function create_pass() {

var l_id=document.getElementById('create_password'); 
var create_textbox_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,create_textbox:create_textbox_value}  
});     
 

}

function confirm_pass() {

var l_id=document.getElementById('confirm_password'); 
var confirm_textbox_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,confirm_textbox:confirm_textbox_value}  
});     
 

}

function timer(str,btn,label)
{
    //disable Button

    document.getElementById(btn).disabled = true;

    // Set the date we're counting down to
    var minutesToAdd=3;
    var currentDate = new Date();
    var countDownDate = new Date(currentDate.getTime() + minutesToAdd*60000);
    
    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();
        
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    // Time calculations for days, hours, minutes and seconds
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.getElementById(label).innerHTML = str+ minutes + "m " + seconds + "s ";
        
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById(label).innerHTML = "";
        document.getElementById(btn).disabled = false;
    }
    }, 1000);
}



function check_otp()
{
    var otp=document.getElementById("otp_number").value;

    if(otp=="")
    {
        document.getElementById("mobile_otp").innerHTML=" OTP  is Required *";
    }
    if(!(otp>10000 && otp<10000000))
    {
        document.getElementById("mobile_otp").innerHTML=" Invalid OTP *";    
    }
    else{
        document.getElementById("mobile_otp").innerHTML="";

    }

}

function check_create_pass() {

    var pass=document.getElementById("").value;
    pass = $(".password-field").val();
     let ppt= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{6,15}$/;
 
     if (pass == "" || pass == undefined) 
     {
         $('.password-field-msg').html('Password  is Required !!').  addClass('text-danger');
                f=false;
      }
         else if(ppt.test(pass)==false)
         {
             $('.password-field-msg').
             html('Invalid !!!! 6 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character').addClass('text-danger');
             f=false;          
         }
      else
       {
         $('.password-field-msg').html("").
         removeClass('text-danger');
         f = true;
      }

    
}

function check_number() {

    var num=document.getElementById("mobile_number").value;

   
     // Phone  Validation 

        mob = num;
     let mptm= /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
 
     if (num == "" ||num == undefined) 
     {                
        document.getElementById("mobile_msg").innerHTML="Mobile Number  is Required *";
      }
         else if(mptm.test(num)==false)
         {            
             document.getElementById("mobile_msg").innerHTML="Invalid Mobile Number !!! Must be valid and contain 10 Digit and Start With 6,7,8,9 *";
                     
         }
      else
       {
        document.getElementById("mobile_msg").innerHTML="";
         location.href='otp_sms.php';
      
      }   
      


}


</script>


    <br><br>


    <form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
 
    <br>

    <p id="head_bg">&nbsp Signup Your Account &nbsp<i class="fa fa-pencil"></i></p>

    <br>  

    
<label for="Email ID" class="form-label" id="lbl">Email ID</label>
    <div class="input-group mb-3 row">
            
            <div class="input-group-prepend">
                <span id="sp" class="input-group-text" id="basic-addon2"><i class="material-icons" style='font-size:20px'>&#xe0be</i></span>                                    
                <input required   name="email_id" onfocusout="email_pass()" id="email_id" type="email" value="" class="form-control email-field"  placeholder="Email ID" aria-label="Email ID" aria-describedby="basic-addon2" />
            </div>
            <small id="email_msg" name="email_msg" class ="email-field-msg form -text text-danger ml-1"></small>      
                
    </div>

    <label id="lbl" for="mobile number" class="form-label">Mobile Number</label>
    <div class="input-group mb-3 row">
            
            <div class="input-group-prepend">
                <div class="input-group ">
                    <span id="sp" class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt" style='font-size:20px'></i></span>
                    <span id="sp" class="input-group-text" id="addon-wrapping"><b> + 91 </b></span>
            
                    <input required min="0" step="1" onfocusout="mobile_pass()" name="mobile_number" id="mobile_number" type="number" value="" class="form-control "  placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="basic-addon1" />
                </div>
            </div>
            <small id="mobile_msg" name="mobile_msg" class =" form -text text-danger ml-1"></small>      
                
    </div>
    


    <label id="lbl" for="create password" class="form-label">Create Password</label>
    <div class="input-group mb-3 row">
        <div class="input-group-prepend">
            <span id="sp" class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        
            <input name="create_password" id="create_password" onfocusout="create_pass()" type="password" value="" class="input form-control"  placeholder="Create Password" required="true" aria-label="password" aria-describedby="basic-addon1" />
            <div class="input-group-append">
                <span id="sp" class="input-group-text" onclick="create_password_show_hide();">
                <i class="fas fa-eye" id="show_eye"></i>
                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
            </div>
        </div>
        <small id="create_msg" name="create_msg" class =" form -text text-danger ml-1"></small>      
    
    </div>
        

    <label id="lbl" for="confirm password" class="form-label">Confirm Password</label>
    <div class="input-group mb-3 row">
        <div class="input-group-prepend">
            <span id="sp" class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        
            <input name="confirm_password" id="confirm_password" type="password" onfocusout="confirm_pass()" value="" class="input form-control"  placeholder="Confirm Password" required="true" aria-label="password" aria-describedby="basic-addon1" />
            <div class="input-group-append">
                <span id="sp" class="input-group-text" onclick="confirm_password_show_hide();">
                <i class="fas fa-eye" id="confirm_show_eye"></i>
                <i class="fas fa-eye-slash d-none" id="confirm_hide_eye"></i>
                </span>
            </div>
        </div>
        <small id="confirm_msg" name="confirm_msg" class =" form -text text-danger ml-1"></small>      
    
    </div>

<?php 



if(isset($_SESSION["php_email_textbox"]))
{
    $txt=$_SESSION["php_email_textbox"];
    echo "<script> document.getElementById('email_id').value='$txt'</script>";
}

if(isset( $_SESSION["php_mobile_textbox"]))
{
    $txt= $_SESSION["php_mobile_textbox"];
    
    echo "<script> document.getElementById('mobile_number').value='$txt'</script>";
}

if(isset( $_SESSION["php_otp_textbox"]))
{
    $txt= $_SESSION["php_otp_textbox"];
    echo "<script> document.getElementById('otp_number').value='$txt'</script>";
}




if(array_key_exists('create_account', $_POST)) {
    
    $t1=email_verify();    
    $t3=create_password_verify(); 
    $t4=confirm_password_verify(); 

    if($t1==1 && $t3==1 && $t4==1){
        create_account_cp();
       }
   
}

function confirm_password_verify()
{
   if($_SESSION["php_create_textbox"]!=$_SESSION["php_confirm_textbox"])
   {
    echo "<script>document.getElementById('confirm_msg').innerHTML = ' Password does not matched * ';</script>";        
    return 0;  
   }
   else{
    echo "<script>document.getElementById('confirm_msg').innerHTML = '';</script>";        
    return 1;
   }
}

function create_password_verify()
{

    if(isset($_SESSION["php_create_textbox"])) {
        $password = $_SESSION["php_create_textbox"];
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        $whitespace = preg_match('@[ ]@', $password);
       
        if(strlen($password) < 8 || strlen($password) > 20 ||!$number || !$uppercase || !$lowercase || $specialChars || $whitespace) {
            
            echo "<script>document.getElementById('create_msg').innerHTML = ' Password must be at least 8 and max 20 characters in length and must contain at least one number, one upper case letter, one lower case letter , NO special character ,NO White Space are Allowed. * ';</script>";        
            return 0;
         } else {
            echo "<script>document.getElementById('create_msg').innerHTML ='';</script>";        
            return 1;
        }
      }

}

function create_account_cp(){

    
$email=$_SESSION["php_email_textbox"];
$number=$_SESSION["mobile_number"];
$password_par=$_SESSION["php_confirm_textbox"];


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
        echo "<script>alert('$email Account Created Successfully  ')</script>";
       
    
    }   

}

}




function email_verify(){

    $ex=$_SESSION["php_email_textbox"];
    
  
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
        echo "<script>document.getElementById('email_msg').innerHTML = 'Email account Already Exsist';</script>";
        return 0;
    }
    else{
        return 1;
    }

}
                        
 ?>

                        
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" style="font-size:18px;" id="create_account" name="create_account" class="btn btn-primary"><b><i class="fa fa-plus" style="font-size:20px"></i> Create Account</b></button>
                        <br><br>
                        <script  src="Add.js"></script>
                    </form>
                    
                


    <br><br><br><br>



    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2021–2022 Estimate, Bill. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
     --> 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
</body>

</html>