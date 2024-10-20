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
      
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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


    <title>Calculate - Estimation</title>
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
                    font-size:25px;
                    font-weight: bold;
                    color:rgb(21, 130, 255);
                }

    </style>

    <br><br>

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
            <label for="unit" class="visually-hidden">Enter your Consumtion Unit </label>
            <input type="number"  class="form-control" name="unit" id="unit" placeholder="Enter your Consumtion Unit">
        </div>
        <br><br>        
        <div class="form-group  ">

        &nbsp &nbsp<button type="submit"  name="back"  class="btn btn-danger "><b>&nbsp;&nbsp; Back &nbsp;&nbsp;</b> </button>
        &nbsp &nbsp<button style="font-size: 16px" type="submit"  name="mycalculate"  class="btn btn-primary "><b><i class="fa fa-calculator" style="font-size:20px"></i> &nbsp; Calculate</b> </button>

        <br><br>
        </div>

        </form>
        <br><br>
       
    <?php 


     
if(array_key_exists('mycalculate', $_POST)) {
    button12();
}
if(array_key_exists('back', $_POST)) {
    electric_back();
}

function electric_back()
{
    echo "<script> location.href='electric.php'; </script>";        
     
}

if(array_key_exists('estimate', $_POST)) {
    electric_estimate();
}

function electric_estimate()
{
    echo "<script> location.href='estimate.php'; </script>";        
     
}

function button12() {

    $a=0;
    if(isset($_POST['unit']))
    {
        
       if($_POST['unit']>0)
       {
        
        $_SESSION["myunit"] =$_POST['unit'];
        echo "<script> location.href='test.php'; </script>";        
        
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
    
    <label class="form-label" id="lbl"> <i style="font-size:28px" class="fas fa-file-invoice-dollar"></i> &nbspYour Tariff Details </label>
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

        <label class="form-label" id="head_bg" >  <i style="font-size:28px" class="fas fa-receipt"></i>  TOTAL BILL :&nbsp'.number_format($_SESSION["total_bill_all"], 2).'&nbsp INR  </label><br>
        <br>
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
