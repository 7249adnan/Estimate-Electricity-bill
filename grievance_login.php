<?php
// data Base estimatebills
// Start the session
session_start();


if( isset($_POST['ajax']) && isset($_POST['email_textbox']) ){ 
    $_SESSION["php_email_textbox_g"] = $_POST['email_textbox'];
    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['query']) ){ 
    $_SESSION["php_query"] = $_POST['query'];
    
      
 exit;
}




if( isset($_POST['ajax']) && isset($_POST['text_detail']) ){ 
    $_SESSION["php_text_detail"] = $_POST['text_detail'];
    
      
 exit;
}


if( isset($_POST['ajax']) && isset($_POST['mobile_textbox']) ){ 
    $_SESSION["php_mobile_textbox"] = $_POST['mobile_textbox'];
    $_SESSION["mobile_number"]= $_POST['mobile_textbox'];
       
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

        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  
  <!-- Email Link -->
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

 

         
    <title> Grievance - Estimation</title>
   
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

        <style>
    body{
      font-family: "Helvetica";
    }
    #item{
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
                    border-width: 7px;
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



function query_pass() {

var l_id=document.getElementById('slct1'); 
var confirm_textbox_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,query:confirm_textbox_value}  
});     
 

}


function text_box() {



   var str= document.getElementById("text_area").value;

    document.getElementById("detail_msg").innerHTML=" ( "+str.length + " / 1000 )";
  
        
$.ajax({
type: 'post',
data: {ajax: 1,text_detail:str}  
});     
 

    
}

</script>




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
                        <b><i class="fa fa-gear " style="font-size:24px;color:white"></i> Setting</b> 
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
                        <a  style="color:rgb(255, 251, 0) ;" class="nav-link active"  aria-current="page" href="grievance_login.php"><i class="fas fa-edit" style="font-size:22px;"></i><b>&nbsp;Grievance</b></a>
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



    <br><br>

    <form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
 
    <br>

    <p id="head_bg"><b><i  class="fas fa-edit"></i> Grievance</b></p>

    <br>  

                        <label for="Email ID" id="lbl" class="form-label">Email ID</label>
                        <div class="input-group mb-3 row">
                                
                                <div class="input-group-prepend">
                                    <span id="sp" class="input-group-text" id="basic-addon2"><i class="material-icons" style='font-size:20px'>&#xe0be</i></span>                                    
                                    <input required   name="email_id" onfocusout="email_pass()" id="email_id" type="email" value="" class="form-control email-field"  placeholder="Email ID" aria-label="Email ID" aria-describedby="basic-addon2" />
                                </div>
                                <small id="email_msg" name="email_msg" class ="email-field-msg form -text text-danger ml-1"></small>      
                                  
                        </div>
                        <br>

                        <label for="mobile number" id="lbl" class="form-label">Mobile Number</label>
                        <div class="input-group mb-3 row">
                                
                                <div class="input-group-prepend">
                                    <span id="sp" class="input-group-text" id="basic-addon1"><b><i class="fa fa-mobile-phone" style='font-size:20px'></i></b></span>
                                    <span id="sp" class="input-group-text" id="addon-wrapping"><b> + 91 </b></span>
                            
                                    <input required min="0"   step="1" oninput="mobile_pass()" name="mobile_number" id="mobile_number" type="number" value="" class="form-control "  placeholder="Mobile Number" aria-label="Mobile Number" aria-describedby="basic-addon1" />
                                </div>
                                <small id="mobile_msg" name="mobile_msg" class =" form -text text-danger ml-1"></small>      
                        </div> 
                        <br>  
                        
                        <label for="Query" id="lbl" class="form-label">Select Query</label>
                        <select onfocusout="query_pass()"  name="slct1" id="slct1" class="form-select" required>                    
                            <option value="">-- Select Your Query --</option>
                            <option value="Login issue">Login issue</option>
                            <option value="Request to add State or provider ">Request to add State or provider </option>
                            <option value="Problem in Estimation">Problem in Estimation </option>
                            <option value="Request to add New Appliances">Request to add New Appliances</option>
                            <option value="Others">Others</option>                            
                        </select>
                        <br>

                        <div class="form-group">
                            <label id="lbl" for="exampleFormControlTextarea1">Explain in detail</label><small id="detail_msg" name="detail_msg" class =" form -text text-danger ml-1"></small>      
                        
                            <textarea required class="form-control" id="text_area" oninput="text_box()" maxlength="1000" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                          

<?php 



if(array_key_exists('submit_query', $_POST)) {
    
    $n=number_verify();
    if($n==1)
    {
        grievance_submit();
    }
}

function number_verify()
{

    $number=$_SESSION["php_mobile_textbox"];
    
               
    if($number>5000000000 && $number < 9999999999)
    { 
        echo '<script>document.getElementById("mobile_msg").innerHTML="";</script>' ;       
        return 1;           
        }
    else
    {
        echo '<script>document.getElementById("mobile_msg").innerHTML=" Invalid Mobile Number * ";</script>' ;                
    
    }   

}


function grievance_submit(){
    
    $email=$_SESSION["php_email_textbox"];
    $number=$_SESSION["php_mobile_textbox"];
    $query= $_SESSION["php_query"];
    $detail=$_SESSION["php_text_detail"];


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
    
        $sql="INSERT INTO `grievance` (`email_id`, `mobile_no`, `query`,`explain_detail`) VALUES ('$email','$number','$query','$detail')";

        $result =mysqli_query($conn,$sql);
        
        if($result)
        {
        
        echo '<script>
        
        Email.send({
            Host : "smtp.gmail.com",
            Username : "estimatebill.ilogic@gmail.com",
            Password : "wdaybykayylywgyu",
            To :"estimatebill.ilogic@gmail.com",
            From : "estimatebill.ilogic@gmail.com",
            Subject : "Grievance",
            Body : " Some one send you a grievance check it Out"
        }).then(
        message => alert(" Your grievance Sended succesfully Admin will Reply you soon ")
        );   
        
        </script>';
        $_SESSION["php_mobile_textbox"]="";

    }

    }
    
}
     
                        
 ?>

   <br>
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" style="font-size:18px"  id="submit_query" name="submit_query" class="btn btn-primary"><b><i class="fa fa-send-o" style="font-size:22px"></i>  Submit</b></button>
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