<?php
// data Base analysis
// Start the session
session_start();

$_SESSION["reload"]=0;
if( isset($_POST['ajax']) && isset($_POST['slct_date_value']) ){ 
    $_SESSION["php_slct_date_value"] = $_POST['slct_date_value'];    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['date_value']) ){ 
    $_SESSION["php_date_value"] = $_POST['date_value'];    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['est_bill_textbox']) ){ 
    $_SESSION["php_est_value"] = $_POST['est_bill_textbox'];    
      
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['cal_bill_textbox']) ){ 
    $_SESSION["php_cal_value"] = $_POST['cal_bill_textbox'];    
      
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
 

         
    <title>Update Analysis - Estimation </title>
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

    

    <style>
        #lb1,
        #lb2,
        #lb3,#lb4 ,#lbt1,#lbt2{

            font-size: 15px;
            font-weight: bold;

        }

        
        #form1{
                    border-style:  solid;
                    border-width: 8px;
                    border-color: rgb(83, 36, 255);
                    border-radius:15px; 
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
                        <b  style="color:rgb(255, 251, 0) ;"><i class="fa fa-line-chart" style="font-size:24px;"></i> Analytics</b> 
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


<script>



function est_pass() {

var l_id=document.getElementById('est_bill'); 
var est_bill_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,est_bill_textbox:est_bill_value}  
});     
 

}

function cal_pass() {

var l_id=document.getElementById('cal_bill'); 
var cal_bill_value=l_id.value;         

    
$.ajax({
type: 'post',
data: {ajax: 1,cal_bill_textbox:cal_bill_value}  
});     
 

}

function slct_month_year() {
    var x= document.getElementById("slct_mon_yr").value ;
   
var month = new Array();
    month['01'] = "Jan";
    month['02'] = "Feb";
    month['03'] = "Mar";
    month['04'] = "Apr";
    month['05'] = "May";
    month['06'] = "Jun";
    month['07'] = "Jul";
    month['08'] = "Aug";
    month['09'] = "Sep";
    month['10'] = "Oct";
    month['11'] = "Nov";
    month['12'] = "Dec";

    var year= x.slice(2,4);
    var mon1= x.slice(5,7);
    var mon=month[mon1];
    
    var slct_date=mon+"_"+year;

        
    $.ajax({
    type: 'post',
    data: {ajax: 1,slct_date_value:slct_date}  
    });  
 
}

function month_year() {
    var x= document.getElementById("mon_yr").value ;
   
var month = new Array();
    month['01'] = "Jan";
    month['02'] = "Feb";
    month['03'] = "Mar";
    month['04'] = "Apr";
    month['05'] = "May";
    month['06'] = "Jun";
    month['07'] = "Jul";
    month['08'] = "Aug";
    month['09'] = "Sep";
    month['10'] = "Oct";
    month['11'] = "Nov";
    month['12'] = "Dec";

    var year= x.slice(2,4);
    var mon1= x.slice(5,7);
    var mon=month[mon1];
    
    var date=mon+"_"+year;

        
    $.ajax({
    type: 'post',
    data: {ajax: 1,date_value:date}  
    });     
 

     document.getElementById("demo").innerHTML=date;
 
 
}

</script>


    <br><br>

    <form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
 
    <br>
    <p id="head_bg"><b>&nbsp&nbsp&nbsp<i class="fa fa-edit"></i>&nbsp Update Values &nbsp</b></p>

    <br>  

    <label id="lbl" for="Month" class="form-label">Select Month</label>    
    <div class="input-group mb-3 row">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="input-group-prepend">       
            <span class="input-group-text" id="sp"><i class="fa fa-calendar" style="font-size:20px"></i></span>
            <input required  onfocusout=" slct_month_year()" name="slct_mon_yr" id="slct_mon_yr" 
            type="month" value="" class="input form-control"  
            placeholder="Enter OTP" aria-label="Mobile Number" aria-describedby="basic-addon1" />                        
            
        </div>
        <small id="slct_date_msg" name="slct_date_msg" class =" form -text text-danger ml-1"></small>      
 
    </div>

    <br>
    <label id="lbl" for="Month" style="color:red; font-size:13px;" class="form-label"><b>Select Only field which you want to Change</b></label>    
    <br><br>

    <label id="lbl" for="Month" class="form-label">Select Month</label>    
    <div class="input-group mb-3 row">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="input-group-prepend">       
            <span class="input-group-text" id="sp"><i class="fa fa-calendar" style="font-size:20px"></i></span>
            <input  onfocusout=" month_year()" name="mon_yr" id="mon_yr" 
            type="month" value="" class="input form-control"  
            placeholder="Enter OTP" aria-label="Mobile Number" aria-describedby="basic-addon1" />                        
            
        </div>
        <small id="date_msg" name="date_msg" class =" form -text text-danger ml-1"></small>      
 
    </div>

    
    <label id="lbl" for="Estimated Bill" class="form-label">Estimated Bill</label>    
    <div class="input-group mb-3 row">

        <div class="input-group-prepend">
            <span class="input-group-text" id="sp"><i class="fa fa-inr" style="font-size:20px;"></i></span>
            <input min="1" step="1" onfocusout="est_pass()" name="est_bill" id="est_bill" type="number" value="" class="form-control "  placeholder="Estimated Amount " aria-label="Estimated Bill" aria-describedby="basic-addon1" />
            <span class="input-group-text" id="sp"><b> INR </b></span>
            
        </div>             
        
    </div>

    <label id="lbl" for="Estimated Bill" class="form-label">Calculated Bill</label>    
    <div class="input-group mb-3 row">

        <div class="input-group-prepend">
            <span class="input-group-text" id="sp"><i class="fa fa-inr" style="font-size:20px;"></i></span>
            <input  min="1" step="1" onfocusout="cal_pass()" name="cal_bill" id="cal_bill" type="number" value="" class="form-control "  placeholder="Calculated Amount" aria-label="Estimated Bill" aria-describedby="basic-addon1" />
            <span class="input-group-text" id="sp"><b> INR </b></span>
            
        </div>             
        
    </div>



<?php 

function date_verify(){

   $d= $_SESSION["php_date_value"];
   //$len=strlen($d);
    $len=5;
   if($len!=6)
   {
       return 0;
   }
   else{
    return 1;
   }
}


if(array_key_exists('update_data', $_POST)) {
    
  

    add_data_fun();

    //slct mon
    if( $_SESSION['flag']==0){
        echo "<script> document.getElementById('slct_date_msg').innerHTML='<b> This Month And Year Does Not Exisit * </b>'</script>";
    }
    else{
        echo "<script> document.getElementById('slct_date_msg').innerHTML=''</script>";
    
    }
 
    //mon
    if($_SESSION['flag_1']==1){
        echo "<script> document.getElementById('date_msg').innerHTML='<b> This Month And Year Already Exisit * </b>'</script>";
    }
    else{
        echo "<script> document.getElementById('date_msg').innerHTML=''</script>";
    
    }
 
}


function add_data_fun(){

    $email=$_SESSION["php_email_textbox"];

    $slct_mon=$_SESSION["php_slct_date_value"];
    $mon= $_SESSION["php_date_value"];
   
    $est= $_SESSION["php_est_value"];
    $cal= $_SESSION["php_cal_value"];

    
   
    $len=strlen($mon);
    if($len!=6)
    {
        $mon='0';
    }
    

    $_SESSION["php_date_value"]='0';
    $_SESSION["php_est_value"]='0';
    $_SESSION["php_cal_value"]='0';
   
   
  
     /*  
    $servername="127.0.0.1";
    $username="root";
    $password="root";
    $database="analysis";
    */
    $servername="sql307.epizy.com";
    $username="epiz_29239566";
    $password="ilogic1234";
    $database="epiz_29239566_analysis";



    $_SESSION['flag']='0';
    $_SESSION['flag_1']='0';
    
    $conn =mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        die("sorry we failed to connect : ".mysqli_connect_error());

    }

    else
    {
       
        
        $sql= "SELECT * FROM `$database`.`$email`";
        $result =mysqli_query($conn,$sql);

        $n=0;
        
        while($row =mysqli_fetch_assoc($result))
        {
            $mon_t=$row['months'];
        
            if($mon_t==$slct_mon)
            {
                $id_no=$row['id_no'];
                
                $_SESSION['flag']=1;
               
            }     
            if($mon_t == $mon)
            {             
               
                $_SESSION['flag_1']=1;
            }     
        
        }

        $str1="";
        $str2="";
        $str3="";
        
        $s1=0;
        $s2=0;
        $s3=0;

        if($_SESSION['flag_1']!=1 && $_SESSION['flag']==1 ){

            
            
            if($mon)
            {   
                  
            $sql="UPDATE `$email` SET `months` = '$mon' WHERE `$email`.`id_no` = '$id_no'";
            mysqli_query($conn,$sql);

            
            $str1=" Months ".$mon." is Updated succesfully ";

            $_SESSION["php_slct_date_value"]=0;
            $_SESSION["php_date_value"]=0;
            $_SESSION["php_est_value"]=0;
            $_SESSION["php_cal_value"]=0;
            $_SESSION["php_date_value"]=0;


            }
            else{
                $s1=1;
            }

            if($est)
            {          
            $sql="UPDATE `$email` SET `est_bill` = '$est' WHERE `$email`.`id_no` = '$id_no'";
            mysqli_query($conn,$sql);

           
            $str2=" Estimated value ".$est." is Updated succesfully ";

            }
            else{
                $s2=1;
            }

            if($cal)
            {          
            $sql="UPDATE `$email` SET `cal_bill` = '$cal' WHERE `$email`.`id_no` = '$id_no'";
            mysqli_query($conn,$sql);

          
            $str3=" Calculated value  ".$cal." is Updated succesfully ";

            }
            else{
                $s3=1;
            }            

            if($s1==0 || $s2==0 || $s3==0 ){
                echo "<script>alert('$str1 $str2 $str3')</script>";
            
            }else{
                echo "<script>alert('You have not Selected any option')</script>";
            

            }
            
           
        }
      
        
    }

}
                        
 ?>

                        
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="location.href='analysis_login.php';" class="btn btn-danger"><b><i class="fa fa-arrow-left" style="font-size:18px"></i> &nbsp Back</b></button>
    &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" id="update_data" name="update_data" class="btn btn-success"><b> <i class="fa fa-edit" style="font-size:20px"></i> &nbsp Update Data</b></button>
    <br><br>
</form>
                    
                


    <br><br><br><br>



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