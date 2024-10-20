<?php
// data Base estimatebills
// Start the session
session_start();


if( isset($_POST['ajax']) && isset($_POST['email_textbox']) ){ 
    $_SESSION["php_email_textbox"] = $_POST['email_textbox'];
    
      
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


function email_pass() {

var l_id=document.getElementById('email_id'); 
var email_textbox_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,email_textbox:email_textbox_value}  
});     
 

}

</script>


    <br><br>

    <form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
 
    <br>

    <p id="head_bg"><i class="fa fa-check"></i>&nbsp Verified Email ID &nbsp</p>

    <br>  

    <label id="lbl" for="Email ID" class="form-label">Email ID</label>
                        <div class="input-group mb-3 row">
                                
                                <div class="input-group-prepend">
                                    <span  id="sp" class="input-group-text" id="basic-addon2"><i class="material-icons" style='font-size:20px'>&#xe0be</i></span>                                    
                                    <input required   name="email_id" onfocusout="email_pass()" id="email_id" type="email" value="" class="form-control email-field"  placeholder="Email ID" aria-label="Email ID" aria-describedby="basic-addon2" />
                                </div>
                                <small id="email_msg" name="email_msg" class ="email-field-msg form -text text-danger ml-1"></small>      
                                  
                        </div>                        
                       
<?php 


if(isset($_SESSION["php_email_textbox"]))
{
    $txt=$_SESSION["php_email_textbox"];
    echo "<script> document.getElementById('email_id').value='$txt'</script>";
}

if(array_key_exists('create_account', $_POST)) {
    
    $t1=email_verify_forgot();

    if($t1==1){
        
        echo "<script> location.href='forgot_email.php'; </script>";
    }
   
}


function email_verify_forgot(){

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
        echo "<script>alert('Error : unable to Connect server or database faliure')</script>";
        //die("sorry we failed to connect : ".mysqli_connect_error());

    }

    else
    {
  
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
        
        if($flag==0)
        {
            echo "<script>document.getElementById('email_msg').innerHTML = 'Invalid Email Account if you forgot your E-mail Id you can use below link that is Try another way to get E-mail id and password. ';</script>";
            return 0;
        }
        else{
            echo "<script>document.getElementById('email_msg').innerHTML = '';</script>";
            
            return 1;
        }

    }

}

                        
 ?>

    
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:15px;" onclick="location.href='login.php'" type="button" id="back"  name="back"  class="btn btn-danger "><b>Back</b> </button>
    &nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:15px;" type="submit"  id="create_account" name="create_account" class="btn btn-primary"><b>&nbsp&nbsp Next &nbsp&nbsp</b></button>
    
    <br><br><br>
   
    
    &nbsp;&nbsp;<label for="forgot password" class="form-label"><a href='forgot_number.php'><b>Try Another Way ?</b></a> </label>
   
    <br>

    <script  src="Add.js"></script>
    </form>
                    
                


    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br><br><br>



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