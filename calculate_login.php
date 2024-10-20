<?php
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title> Calculate - Estimation</title>

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
                    border-width: 15px;
                    border-color: rgb(83, 36, 255);
                    border-radius:0px; 
                    padding-left: 20px;
                    box-shadow: 5px 10px 18px rgb(78, 78, 78);
                    background-color:white; 
                    
                }

                #head_bg{
                   
                    font-size:25px;
                    color:red;
                    font-weight:bolder;
                }
                #sp{

                  background-color: white;
                  border-style:  solid;
                  color:rgb(53, 66, 241);
                  
                   
                   
                }
                #lbl{
                    font-size:30px;
                    font-weight: bold;
                    color:rgb(21, 130, 255);
                }

    </style>

   
    <style>

        #lb1
        {
            font-size: 25px;
            font-weight: bold;
        }
        #div_1
        {
            font-size: 15px;
            font-weight: bold;
        }
        #div_2
        {
            font-size: 20px;
            font-weight: bold;
        }
        #lb8
        {
            font-size: 25px;
            font-weight: bold;
        }
       
        #form2{
            border-style:  solid;
            border-width: 10px;
            border-color: rgb(255, 102, 0);
            border-radius:0px; 
            padding-left: 20px;
            box-shadow: 5px 10px 18px rgb(78, 78, 78);
            background-color:white; 
            
            
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
                        <a style="color:rgb(255, 251, 0) ;" class="nav-link active" a-current="page" href="electric_login.php"><b><i class="fas fa-lightbulb" style="font-size:22px;"></i> Electric</b></a>
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

    <br><br>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>

function page_query()
{
    alert(" Put the Units In TextBox to calculate Your bills with Tarrif Structures , And Click on Calculate .");
}  

</script>


    <form id="form1" method ="POST" class=" container-fluid col-sm-5 my-4  ">
    
    <br><br>
    <label class="form-label" id="lbl"> Enter Your Total Month Units <i style="font-size:28px" class="fa fa-pencil"></i> &nbsp <button type="button" style="color: white; font-weight: bolder; border: 2px solid orange; border-radius: 10px; " onclick="page_query()" class="btn btn-warning btn-sm"><i class="fa fa-question" style="font-size:25px;color:white;"></i></button> </label>
                 
        <br><br>
        <div class="col-auto">
            <label for="unit" class="visually-hidden">Enter your Consumtion Unit</label>
            <input type="number"  class="form-control" name="unit" id="unit" placeholder="Enter your Consumtion Unit">
        </div>
        <br> <br> <br>        
        <div class="form-group  ">

        &nbsp;&nbsp;&nbsp;&nbsp;<button onclick="goBack()" type="button" id="back"  name="back"  class="btn btn-danger "><b>&nbsp;&nbsp; Back &nbsp;&nbsp;</b> </button>
        &nbsp &nbsp<button type="submit"  name="mycalculate"  class="btn btn-primary "><b><i class="fa fa-calculator" style="font-size:20px"></i> &nbsp; Calculate</b></button>

        
        <script>
        function goBack() {
        window.history.back();
        }
        </script>
        <br><br>
        </div>

        </form>
        <br><br>
       
    <?php 


     
if(array_key_exists('mycalculate', $_POST)) {
    button12();
}


if(array_key_exists('estimate', $_POST)) {
    electric_estimate();
}

function electric_estimate()
{
    echo "<script> location.href='estimate_login.php'; </script>";        
     
}

function button12() {

    $a=0;
    if(isset($_POST['unit']))
    {
        
       if($_POST['unit']>0)
       {
        
        $_SESSION["myunit"] =$_POST['unit'];
        echo "<script> location.href='test_login.php'; </script>";        
        
       }
       else{
           echo "<script>alert('Enter Positive Number')</script>";
       }
   
    }    

}

if( $_SESSION["est_flag"]==1)
{
    
    
    $unit=$_SESSION["all_kwh_unit"];
      
    echo "<script>document.getElementById('unit').value = Math.ceil('$unit');</script>";
    $_SESSION["est_flag"]=0;
}


if($_SESSION["calculate_11"] ==2)
{
    echo ' <form id="form2" method ="POST" class=" container-fluid col-sm-4 ">
    
    <br><br>
    
    <label class="form-label" id="lbl"><i style="font-size:28px" class="fas fa-file-invoice-dollar"></i> &nbspYour Tariff Details </label>
    <br><br>           
    <div id="div_1">
        <label class="form-label" id="lb2"> &nbsp State :&nbsp'.$_SESSION["state_name"].'  </label><br>
        <label class="form-label" id="lb3"> &nbsp Provider :&nbsp'.$_SESSION["provider_name"].' </label><br>
        <label class="form-label" id="lb4"> &nbsp Tariff  :&nbsp'.$_SESSION["tariff_name"].' </label><br>                
        <label class="form-label" id="lb4"> &nbsp Unit  :&nbsp'.$_SESSION["myunit"].' KWh </label><br>                
        <label class="form-label" id="lb4"> &nbsp Duration  :&nbsp 1 Month </label><br>                
        </div><br>

     <div id="div_1">
     <label class="form-label" id="lb2"> &nbsp Energy Charge :&nbsp'.$_SESSION["energy_charge_all"].'  </label><br>
     <label class="form-label" id="lb3"> &nbsp Fixed Charge :&nbsp'.$_SESSION["fixed_charge"].' </label><br>
     <label class="form-label" id="lb4"> &nbsp Wheeling Charge :&nbsp'.$_SESSION["wheeling_charge_all"].' </label><br>                
    </div><br>

  <div id="div_2">
        <label class="form-label" id="lb5"> &nbsp Consumer Charge :&nbsp'.number_format($_SESSION["consumer_charge_all"], 2).' </label><br>
        <label class="form-label" id="lb6"> &nbsp Govt Electricity Duty :&nbsp'.number_format($_SESSION["govt_ed_all"], 2).' </label><br>
        <label class="form-label" id="lb7"> &nbsp Govt tariff Tax :&nbsp'.number_format($_SESSION["govt_tax_all"], 2).' </label><br>                
     </div>
     <br>

        <label class="form-label" id="head_bg" >  <i style="font-size:28px" class="fas fa-receipt"></i>  TOTAL BILL :&nbsp'.number_format($_SESSION["total_bill_all"], 2).'&nbsp INR  </label><br>        <br>
</form>';
   // echo "total charge".$_SESSION["total_bill_all"];
    $_SESSION["calculate_11"]=0;

}

    if(isset($_SESSION["php_state"])){
        unset($_SESSION["php_state"]);
    }
    if(isset($_SESSION["php_provider"])){
        unset($_SESSION["php_provider"]);
    }
    if(isset($_SESSION["php_tariff"])){
        unset($_SESSION["php_tariff"]);
    }
    if(isset($_SESSION["php_load"])){
        unset($_SESSION["php_load"]);
    }

         


?> 




<br><br><br>
    
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
