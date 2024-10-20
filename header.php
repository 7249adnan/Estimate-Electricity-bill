<?php
// data Base estimatebills
// Start the session
session_start();

$_SESSION["php_create_textbox"]=0;
if( isset($_POST['ajax']) && isset($_POST['js_load']) ){ 
    $_SESSION["php_email"] = $_POST['js_load'];
    
      
 exit;
}

$_SESSION["login"]=0;

?>
<!DOCTYPE html>
<html lang="en">
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





  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


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
    
    </head>
    <body>

    <p id="lbtest"></P>
    <script>

        function test(otp,number)
        {
           
          //mobile otp code fast2SMS  
        }


        function mail33() {

            

           document.getElementById("lbtest").innerHTML=("<?php 
            
            echo "hello";
            echo $_SESSION["php_email"];
           
      
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
            echo "connection was successful";
        }



        {
        $sql= "SELECT * FROM `accounts` ";
        $result =mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        echo $num;
        

        while($row =mysqli_fetch_assoc($result))
        {
        $id=$row['email_id'];
        $name=$row['mobile_no'];
        $class=$row['password'];
        

        //echo var_dump($row);
        echo "<br>";
        echo $id." ".$name." ".$class;

        }
        
        }           
            
              ?>"); 
        }

        function session_load()
    {
  
    var l_id=document.getElementById('email_id'); 
    var js_load_value=l_id.value;         
   
        
    $.ajax({
    type: 'post',
    data: {ajax: 1,js_load:js_load_value}  
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
                            aria-current="page" href="index.html"><b><i class="fa fa-home" style="font-size:22px;color:white"></i> Home</b></a>
                            
                    </li>&nbsp;&nbsp;

                    <li class="nav-item">
                        <a class="nav-link active" a-current="page" href="electric.php"><b><i class="fas fa-lightbulb" style="font-size:22px;color:white"></i> Electric</b></a>
                    </li>&nbsp;&nbsp;
                    
                    <li class="nav-item">
                        <a class="nav-link active" a-current="page" href="analytics.php"><b><i class="fa fa-line-chart" style="font-size:24px;color:white"></i> Analytics</b> </a>
                    </li>&nbsp;&nbsp;
                     

                    <li class="nav-item">
                        <a class="nav-link active"  aria-current="page" href="grievance.php"><i class="fas fa-edit" style="font-size:22px;color:rgb(255, 255, 255)"></i><b>&nbsp;Grievance</b></a>
                    </li>
                </ul>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

                <div class="mx-2">
                    <button class="btn btn-primary" style="
                    font-weight: bolder; border: 2px solid rgb(255, 255, 255); border-radius: 12px; "  onclick="location.href = 'login.php';"><b>Login &nbsp<i style="font-size:18px" class="fa fa-sign-in"></i></b></button>
                    <button class="btn btn-danger" style="
                    font-weight: bolder; border: 2px solid rgb(255, 255, 255); border-radius: 12px; " onclick="location.href = 'signup.php';" ><b>SignUp &nbsp<i style="font-size:18px" class="fa fa-pencil"></i></b></button>
                </div>
            </div>
        </div>
    </nav>  
    
    <!--signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        
     
    </div>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>
</html>