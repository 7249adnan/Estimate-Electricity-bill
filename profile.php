<?php
// data Base analysis
// Start the session
session_start();


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
         
    <title>Profile - Estimation</title>
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
                        <b ><i class="fa fa-line-chart" style="font-size:24px;"></i> Analytics</b> 
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


<br>

<form id="form1"  method ="POST"  class=" container-fluid col-sm-4 ">

<br>



<div  class="row-md-5 p-4"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                               
    <img src="user_profile_3.jpg"  class="img-fluid" width="auto"
    height="auto" alt="LED Tube Light">
</div>

 <p id="head_bg"><b> &nbsp &nbsp &nbsp;&nbsp;&nbsp;&nbsp;Your  Profile &nbsp</b></p>
 

    <br>
    
    <p id="title_bg_1"><i class="fa fa-envelope" style="font-size:26px"></i>&nbsp E-mail &nbsp</p>
    <p id="title_bg_1_lb"> </p>
    
    <br>
    <p id="title_bg_2"><i class="fa fa-mobile-phone" style="font-size:26px"></i>&nbsp Number   &nbsp</p>
    <p id="title_bg_2_lb"> </p>
    <br>
    <p id="title_bg_3"><i class="fas fa-user-shield" style="font-size:26px"></i>&nbspPassword   &nbsp</p>
    <p id="title_bg_3_lb"> </p>




<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   


<?php
 
 profile();
 
 $email=$_SESSION["php_email_textbox"];   
 echo "<script> document.getElementById('title_bg_1_lb').innerHTML=' &nbsp&nbsp&nbsp&nbsp&nbsp $email'</script>";
 
 $number=$_SESSION["number_profile"];   
 echo "<script> document.getElementById('title_bg_2_lb').innerHTML=' &nbsp&nbsp&nbsp&nbsp&nbsp $number'</script>";
 
 $password=$_SESSION["password_profile"];   
 echo "<script> document.getElementById('title_bg_3_lb').innerHTML=' &nbsp&nbsp&nbsp&nbsp&nbsp $password'</script>";
    

   
   


function profile(){

    $email_temp=$_SESSION["php_email_textbox"];
   
       
    
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
      

        while($row =mysqli_fetch_assoc($result))
        {
        
        
            if($email_temp==$row['email_id'])
            { 
                $_SESSION["password_profile"] =$row['password'];
                $_SESSION["number_profile"] =$row['mobile_no'];
                
            }

        }
       

    }

}
    

 
?>

    
<br>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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