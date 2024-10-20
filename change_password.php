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

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

         
    <title> Change Password - Estimation</title>
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
       
    

    <style>
        #lb1,
        #lb2,
        #lb3,#lb4 ,#lbt1,#lbt2{

            font-size: 15px;
            font-weight: bold;

        }

        
        #form1{
                    border-style:  solid;
                    border-width: 7px;
                    border-color: rgb(83, 36, 255);
                    border-radius:40px; 
                    padding-left: 20px;
                    box-shadow: 5px 10px 18px rgb(78, 78, 78);

                    
                }

                #head_bg{
                   
                    font-size:35px;
                    color:rgb(56, 75, 247);
                }
                #title_bg_1,#title_bg_2,#title_bg_3{
                   
                   font-size:24px;
                   color:rgb(250, 21, 21);
                   font-weight:bolder ;
                   
                }

                #title_bg_1_lb,#title_bg_2_lb,#title_bg_3_lb{
                   
                   font-size:20px;
                   color:rgb(255, 255, 255);
                   background-color:rgb(15, 174, 248);
                }
                   
              
               }#title_bg_3{
                   
                   font-size:22px;
                   color:purple;
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

 
<style>

  .login_oueter {
      width: 360px;
      max-width: 100%;
  }
  .logo_outer{
      text-align: center;
  }
  .logo_outer img{
      width:120px;
      margin-bottom: 40px;
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

  .login_oueter {
      width: 360px;
      max-width: 100%;
  }
  .logo_outer{
      text-align: center;
  }
  .logo_outer img{
      width:120px;
      margin-bottom: 40px;
  }

  </style>
  





  
<nav class="navbar navbar-expand-lg navbar-dark"
        style="background-color: #9b33fc; border-radius: 3px; ">
        <div class="container-fluid">
            <i class="fas fa-globe" style="font-size:32px;color:rgb(255, 217, 3)"></i>&nbsp;&nbsp;
            <a class="navbar-brand" style="font-size: 28px;color: rgb(255, 217, 3);text-shadow: 2px 1px rgb(255, 253, 253);" href="#"><b>Estimation</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="item" class="navbar-nav me-auto mb-2 mb-lg-0">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">                        
                            <a class="nav-link active "                      
                            aria-current="page" href="index_login.html"><b><i class="fa fa-home" style="font-size:22px;color:white"></i> Home</b></a>
                            
                    </li>&nbsp;&nbsp;

                    <li class="nav-item">
                        <a class="nav-link active" a-current="page" href="electric_login.php"><b><i class="fas fa-lightbulb" style="font-size:22px;color:white"></i> Electric</b></a>
                    </li>&nbsp;&nbsp;

                    <li  class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b><i class="fa fa-line-chart" style="font-size:24px;color:white"></i> Analytics</b> 
                        </a>
                        <ul style="background-color: rgb(211, 165, 255);" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        
                            <li><a class="dropdown-item" a-current="page" href="analysis_login.php"><i class="fa fa-bar-chart" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; Analysis</b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" a-current="page" href="how_work.php"><i class="fa fa-file-text" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp;  How Its Work ? </b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" a-current="page" href="examples.php"><i class="fa fa-cubes" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; Examples </b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" a-current="page" href="tips.php"><i class="fa fa-check-square" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; Tips </b></a></li>
                                
                        
                        </ul>

                    </li> &nbsp;&nbsp;

                    <li  class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b  style="color:rgb(255, 251, 0) ;"><i class="fa fa-gear " style="font-size:24px;"></i> Setting</b> 
                        </a>
                        <ul style="background-color: rgb(211, 165, 255);" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        
                            <li><a class="dropdown-item" a-current="page" href="profile.php"><i class="fas fa-user-cog" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; Profile</b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" a-current="page" href="change_password.php"><i class="fas fa-eraser" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp;  Change Password</b></a></li>
                                <li> <hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" a-current="page" href="delete_account.php"><i class="fas fa-trash-alt" style="font-size:22px;color:rgb(37, 36, 36)"></i><b> &nbsp; Delete Account</b></a></li>
                                
                        
                        </ul>

                    </li> &nbsp;&nbsp;
                     

                    <li class="nav-item">
                        <a class="nav-link active"  aria-current="page" href="grievance_login.php"><i class="fas fa-edit" style="font-size:22px;color:rgb(255, 255, 255)"></i><b>&nbsp;Grievance</b></a>
                    </li>
                </ul>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

                <div class="mx-2">
                    <button class="btn btn-danger" style="
                    color: white; font-weight: bolder; border: 2px solid rgb(255, 255, 255); border-radius: 10px; " onclick="location.href = 'logout_flag.php';" ><b> Log Out</b> <i class="fas fa-sign-in-alt" style='font-size:20px'></i></button>
                </div>
            </div>
        </div>
    </nav>

<style>
#bd1{
 background-color:rgb(248, 241, 255); 
}
#form1{
 background-color:white; 
}

</style>


    <div id="header"></div>

    <style>
       
        
        #form1{
                    border-style:  solid;
                    border-width: 5px;
                    border-color: rgb(83, 36, 255);
                    border-radius:10px; 
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

location.href='forgot_otp_sms.php';

}


</script>


    <br><br>

    <form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
 
    <br>

    <p id="head_bg"><i class="fa fa-edit"></i>&nbsp Update Password &nbsp</p>

    <br>               
    

    <label id="lbl" for="create password" class="form-label">New Password</label>
    <div class="input-group mb-3 row">
        <div class="input-group-prepend">
            <span id="sp" class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        
            <input name="create_password" id="create_password" onfocusout="create_pass()" type="password" value="" class="input form-control"  placeholder="New Password" required="true" aria-label="password" aria-describedby="basic-addon1" />
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


if(array_key_exists('update_pass', $_POST)) {
    
   
   
    $t1=create_password_verify(); 
    $t2=confirm_password_verify(); 

    if($t1==1 && $t2==1){
        
        change_password_login();
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



function change_password_login(){

    $email=$_SESSION["php_email_textbox"];
    $new_password= $_SESSION["php_confirm_textbox"];
    
    
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
        
        $sql = " UPDATE `accounts` SET `password` = '$new_password' WHERE `accounts`.`email_id` = '$email'";
        $result =mysqli_query($conn,$sql);

        if($result)
        {
            echo  "<script>alert('Password Updated Successfully ')</script>";
            return 1;
        }
        else{
            return 0;
        }

    }


}
                        
 ?>

    
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;<button onclick="goBack()" type="button" id="back"  name="back"  class="btn btn-danger "><b>Back</b> </button>
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"  id="update_pass" name="update_pass" class="btn btn-primary"><b><i style="font-size:20px;" class="fa fa-edit"></i> Update Password</b></button>
    <br><br>
    <script>
    function goBack() {
    window.history.back();
    }
    </script>
</form>
                    
                


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br>

    <footer class="container">
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