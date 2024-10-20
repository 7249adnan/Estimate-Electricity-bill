<?php
// data Base estimatebills
// Start the session
session_start();


if( isset($_POST['ajax']) && isset($_POST['email_textbox']) ){ 
    $_SESSION["php_email_textbox"] = $_POST['email_textbox'];
    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['otp_email']) ){ 
    $_SESSION["php_otp_email"] = $_POST['otp_email'];
    
      
 exit;
}



if( isset($_POST['ajax']) && isset($_POST['mobile_textbox']) ){ 
    $_SESSION["php_mobile_textbox"] = $_POST['mobile_textbox'];
    $_SESSION["mobile_number"]= $_POST['mobile_textbox'];
    $_SESSION["otp_gen"]= rand(10,900000);
      
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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

<script src="https://smtpjs.com/v3/smtp.js">
</script>
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

         
    <title>Forgot Password - Estimation</title>
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

function send_otp_email() {

   var otp=Math.floor((Math.random() * 100000) + 10000);
   
   $.ajax({
    type: 'post',
    data: {ajax: 1,otp_email:otp}  
    }); 
    
    timer(" Resend OTP After ","send_btn","timer");
 

    var email_value="<?php echo  $_SESSION["php_email_textbox"]; ?>";
             
        Email.send({
    Host : "smtp.gmail.com",
    Username : "estimatebill.ilogic@gmail.com",
    Password : "wdaybykayylywgyu",
    To : email_value,
    From : "estimatebill.ilogic@gmail.com",
    Subject : "EstimateBill ",
    Body : '<h3 style="color:black"; ><b>Forgot Password</b></h3><h1 style="color: red " > OTP : '+otp+'</h1> <h3 style="color: #4bb7ff "> this is your OTP for Forgot Password </h3>'
}).then(
  message => alert(" OTP is sended to your verified gmail Id . ")
);


}


</script>


    <br><br>

    <form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
 
    <br>

    <p id="head_bg"><i class="fa fa-edit"></i>&nbsp Update Password &nbsp</p>

    <br>  

    <label id="lbl" for="Email ID" class="form-label">Send OTP to Email ID</label>
                        
    <div class="input-group mb-3 row">

                        <div class="input-group-prepend">       
                            <span id="sp" class="input-group-text" id="addon-wrapping"><b> OTP </b></span>
                            <input  required min="0" step="1" onfocusout="otp_pass()" name="otp_number" id="otp_number" 
                            type="number" value="" class="input form-control"  
                            placeholder="Enter OTP" aria-label="Mobile Number" aria-describedby="basic-addon1" />                        
                            
                        </div>
                        <small id="mobile_otp" name="mobile_otp" class =" form -text text-danger ml-1"></small>      

                        </div>

                        <button type="button" name="send_btn" id="send_btn"  onclick="send_otp_email()"  class="btn  btn-outline-success btn-sm "><b>Send OTP</b></button>
                        &nbsp&nbsp&nbsp&nbsp<label for="mobile number" id="timer" style="color: blue;" class="form-label"></label>
                        </br></br> 

                        <label id="lbl" for="New password" class="form-label">New Password</label>
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


if(array_key_exists('create_account', $_POST)) {
    
    
    $t2=otp_verify(); 
    $t3=create_password_verify(); 
    $t4=confirm_password_verify(); 

    if($t2==1 && $t3==1 && $t4==1){
        update_password();
        echo "<script> location.href='index.html'; </script>";
    }
   
}


function update_password(){

    $email=$_SESSION["php_email_textbox"];
    $new_password=$_SESSION["php_confirm_textbox"];

    
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
        echo "<script>alert('Error : unable to Connect server or database faliure')</script>";
        //die("sorry we failed to connect : ".mysqli_connect_error());

    }

    else
    {
       
        $sql = " UPDATE `accounts` SET `password` = '$new_password' WHERE `accounts`.`email_id` = '$email'";
        $result =mysqli_query($conn,$sql);

        if($result)
        {
            echo  "<script>alert('Password Updated Successfully ')</script>";
        }



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

function otp_verify()
{
    if( $_SESSION["php_otp_email"]!= $_SESSION["php_otp_textbox"])
    {
        echo "<script>document.getElementById('mobile_otp').innerHTML = ' Invalid OTP * ';</script>";        
        return 0;
    }
    else
    {
        echo "<script>document.getElementById('mobile_otp').innerHTML = '';</script>";            
        return 1;
    }
}



                       
 ?>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;<button onclick="location.href='forgot_password.php'" type="button" id="back"  name="back"  class="btn btn-danger "><b>Back</b> </button>
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit"  id="create_account" name="create_account" class="btn btn-primary"><b><i style="font-size:20px;" class="fa fa-edit"></i> &nbsp;Update Password</b></button>
    <br><br>
    <script  src="Add.js"></script>
</form>
                    
                


<br><br><br><br><br><br><br><br>



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