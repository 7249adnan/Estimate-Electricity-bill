<?php
// data Base estimatebills
// Start the session
session_start();
$_SESSION["login"]=0;
$_SESSION["reload"]=0;
if( isset($_POST['ajax']) && isset($_POST['email_textbox']) ){ 
    $_SESSION["php_email_textbox"] = $_POST['email_textbox'];
    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['create_textbox']) ){ 
    $_SESSION["php_create_textbox"] = $_POST['create_textbox'];
     
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
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>

        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script>
      
    $(function(){
        $('#header').load('header.php');
    });

    </script>

         
    <title>Login - Estimation</title>
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
        .high:hover {
            font-size: 20px;
        }
        </style>

    <div id="header"></div>

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


</script>


<br>

<form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
 
    <br>
    <p id="head_bg"><b>&nbsp Login to Account &nbsp<i  class="fa fa-sign-in"></i></b></p>
    <br>  

    <label id="lbl" for="Email ID" class="form-label">Email ID</label>
    <div class="input-group mb-3 row">
            
            <div class="input-group-prepend">
                <span id="sp" class="input-group-text" id="basic-addon2"><i class="material-icons" style='font-size:20px'>&#xe0be</i></span>                                    
                <input required   name="email_id" onfocusout="email_pass()" id="email_id" type="email" value="" class="form-control email-field"  placeholder="Email ID" aria-label="Email ID" aria-describedby="basic-addon2" />
            </div>
            <small id="email_msg" name="email_msg" class ="email-field-msg form -text text-danger ml-1"></small>      
                
    </div>

    <label id="lbl" for="Password" class="form-label">Password</label>
    <div class="input-group mb-3 row">
        <div class="input-group-prepend">
            <span id="sp" class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        
            <input name="create_password" id="create_password" onfocusout="create_pass()" type="password" value="" class="input form-control"  placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1" />
            <div class="input-group-append">
                <span  id="sp" class="input-group-text" onclick="create_password_show_hide();">
                <i class="fas fa-eye" id="show_eye"></i>
                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
            </div>
        </div>
        <small id="create_msg" name="create_msg" class =" form -text text-danger ml-1"></small>      
    
    </div>                       

<?php 


if(isset($_SESSION["php_email_textbox"]))
{
    $txt=$_SESSION["php_email_textbox"];
    echo "<script> document.getElementById('email_id').value='$txt'</script>";
}




if(array_key_exists('login', $_POST)) {
    
    $t1=email_verify();

    if($t1==1){
        $_SESSION["login"]=1;
        echo "<script> location.href='index_login.html'; </script>";
        
    }
   
}

function email_verify(){

    $email_temp=$_SESSION["php_email_textbox"];
    $password_temp= $_SESSION["php_create_textbox"];
       
    
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
    
        $sql= "SELECT * FROM `accounts` ";
        $result =mysqli_query($conn,$sql);
        
        $flag_e=0;
        $flag_p=0;
        $admin_cp=0;
        $admin_id_1="estimatebill.ilogic@gmail.com";
        $admin_id_2="adnan.ilogic@gmail.com";
        $admin_pass_1="iLogic#1234";
        $admin_pass_2="Windows10$";
        
        if(($admin_id_1==$email_temp) || ($admin_id_2==$email_temp) )
        {
            if( ($admin_pass_1==$password_temp)|| ($admin_pass_2==$password_temp) )
            {
                $admin_cp=1;
            }
        }
    

        while($row =mysqli_fetch_assoc($result))
        {
        
           
            if($email_temp==$row['email_id'])
            {
                $flag_e=1;
                if($password_temp==$row['password'])
                {
                    $flag_p=1;
                }
            }

        }

        if($admin_cp==1)
        {
            $_SESSION["login"]=1;
            echo "<script> location.href='view_accounts_cp.php'; </script>";
        
        }
        else{       
        
            if($flag_e==0)
            {
                echo "<script>document.getElementById('email_msg').innerHTML = 'Incorrect E-mail ID *';</script>";
                
            }
            else{
                if($flag_p==0)
                {
                    echo "<script>document.getElementById('create_msg').innerHTML = ' Incorrect Password *';</script>";
                    
                }
                else{
                    echo "<script>document.getElementById('create_msg').innerHTML = '';</script>";
                    
                }
                echo "<script>document.getElementById('email_msg').innerHTML = '';</script>";
                
            }
        
            if($flag_e==1 && $flag_p==1)
            {
                return 1;
            }
        }

    }

}
                        
 ?>

                        
    <br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" style="font-size:18px;"  id="login" name="login" class="btn btn-primary"><b>&nbsp; Login <i style="font-size:20px"  class="fa fa-sign-in"></i></b>&nbsp;</button>
    <br><br>
    <br>
    &nbsp;&nbsp;<label for="forgot password"  class="form-label"><a href='forgot_password.php'><b>Forgot Password ?</b></a> </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <br>
   
</form>

<script> 
        $(window).ready(function() {
        $("#form1").on("keypress", function (event) {
            console.log("aaya");
            var keyPressed = event.keyCode || event.which;
            if (keyPressed === 13) {
               
                event.preventDefault();
                return false;
            }
        });
        });
  
    </script> 

<br><br><br><br><br><br><br><br><br>



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