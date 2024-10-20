<?php
// data Base estimatebills
// Start the session
session_start();


if( isset($_POST['ajax']) && isset($_POST['email_textbox']) ){ 
    $_SESSION["php_email_textbox"] = $_POST['email_textbox'];
    
      
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

<script src="https://smtpjs.com/v3/smtp.js"></script>
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


  
  <?php
    if($_SESSION["login"]!=1) 
    { echo"
        <script>        
        $(function(){
            $('#header').load('header.php');
        });
        </script>";
    }
    else{

        echo"
        <script>        
        $(function(){
            $('#header').load('header_2.php');
        });
        </script>";

    }


    ?>

         
    <title>Grievance - Estimation</title>
   
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
                                    <span id="sp" class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt" style='font-size:20px'></i></span>
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