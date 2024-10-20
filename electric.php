<?php
// Start the session
session_start();
//$GLOBALS["flag_adani_bpl"]=0; 
$_SESSION["flag_adani_bpl"] =0;
$_SESSION["calculate_11"] =0;


//Estimate api page
$_SESSION["est_flag"]=0;
$_SESSION["all_kwh_unit"]=0;

// Estimate page session start

$_SESSION["count"]=0;
// Estimate page session End

if( isset($_POST['ajax']) && isset($_POST['js_state']) ){

    $_SESSION["php_state"] = $_POST['js_state'];     
   exit;
}



if( isset($_POST['ajax']) && isset($_POST['temp_state']) ){

    $_SESSION["php_temp_state"] = $_POST['temp_state'];     
   exit;
}

if( isset($_POST['ajax']) && isset($_POST['js_provider']) ){ 
    $_SESSION["php_provider"] = $_POST['js_provider'];    
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['js_tariff']) ){ 
    
    $_SESSION["php_tariff"] = $_POST['js_tariff'];    
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['js_load']) ){ 
    $_SESSION["php_load"] = $_POST['js_load'];    
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['js_phase']) ){ 
    $_SESSION["php_phase"] = $_POST['js_phase'];    
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['start_mytime']) ){ 
    $_SESSION["php_start_mytime"] = $_POST['start_mytime'];
   
 exit;
}

if( isset($_POST['ajax']) && isset($_POST['end_mytime']) ){ 
    $_SESSION["php_end_mytime"] = $_POST['end_mytime'];    
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

  <?php
    if(isset($_SESSION["login"]))
    {
        if($_SESSION["login"]==1) 
        { 
            echo"
        <script>        
        $(function(){
            $('#header').load('header_2.php');
        });
        </script>";
        }
        else
        {

            echo"
                <script>        
                $(function(){
                    $('#header').load('header.php');
                });
                </script>";

        }
        

    }
    else
        {

            echo"
                <script>        
                $(function(){
                    $('#header').load('header.php');
                });
                </script>";

        }
    

    ?>

         
    <title>Electric - Estimation</title>
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
                    border-width: 13px;
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

function page_query()
{
    alert(" Fill All information Correctly Your Electricity Bill Will produce According to this details Only. Click On CheckBox to Enabel Buttons . If you Want to calculate your bill by unit click on calculate button otherwise Click on Estimate to predict your Future Bills");
}  

</script>


    <br><br>

    <form id="form1" method ="POST"  class=" container-fluid col-sm-5  ">

    <br><br>     
    <p id="head_bg"><b>&nbsp&nbsp&nbsp<i class="fa fa-edit"></i>&nbsp Fill All Details  &nbsp</b><button type="button" style="color: white; font-weight: bolder; border: 2px solid orange; border-radius: 10px; " onclick="page_query()" class="btn btn-warning btn-sm"><i class="fa fa-question" style="font-size:25px;color:white;"></i></button> </p>

    
        &nbsp;
        &nbsp;
        <div class="form-group" >
                <label id="lbl" class="form-label" id="lb1">Select State</label>
                <select  name="slct1" id="slct1" onchange="state(this.id,'slct2')  " class="form-select" required>                    
                    <option value="0">Maharashtra</option>
                    <option value="1">Telangana</option>
                </select>
                 

                <br>
                
                <label id="lbl" class="form-label" id="lb2">Select Provider</label>
                <select required name="slct2" id="slct2" onchange="provider(this.id)" class="form-select Required">
                    <option selected value="0">- - Select Your Board - -</option>
                
                </select>
                <br>

                
                <label id="lbl" class="form-label" id="lb3">Select Low tension tarrif</label>
                <select required name="slct3" id="slct3" onchange="tariff(this.id)" class="form-select Required">
                <option selected value="0">- - Select Your Tarrif - -</option>
    
                </select>
            
                <br>
                <label id="lbl" class="form-label" id="lb4">Session Load</label>
                <div class="input-group flex-nowrap">
                    <span id="sp" class="input-group-text" id="addon-wrapping"><b>KW</b></span>
                    <input required type="number" min="1" step="1"  id="load"  oninput="session_load()" name="load" value="10" class="form-control" placeholder="Over all Load in KW" 
                    aria-label="session load" aria-describedby="addon-wrapping">
                </div>
                <br>

                <label id="lbl" class="form-label" id="lbt1">Start time ( For Commercial /shops only )</label>
                <div class="input-group flex-nowrap">
                    <span id="sp" class="input-group-text" id="addon-wrapping"><b>Hours</b></span>
                    <input type="time" id="start_time" oninput="start_time_hour()" value="08:00"  name="start_time"  class="form-control" placeholder="Over all Load in KW" 
                    aria-label="session load" aria-describedby="addon-wrapping">
                </div>
                <br>             

                <label id="lbl" class="form-label" id="lbt2">End time ( For Commercial /shops only )</label>
                <div class="input-group flex-nowrap">
                    <span id="sp" class="input-group-text" id="addon-wrapping"><b>Hours</b></span>
                    <input type="time" id="end_time" oninput="end_time_hour()" value="20:00"  name="end_time"  class="form-control" placeholder="Over all Load in KW" 
                    aria-label="session load" aria-describedby="addon-wrapping">
                </div>                

                <br>

                    <label id="lbl"  class="form-label" id="lb3">Select Your Phase</label> <br>
                    <label  class="form-label" style="font-size: 12px;">Select 1 phase for ( Small load ,Basic Appliances ) 
                    <br> Select 3 phase for (high load, Industry, Heavy Duty )  </label>
              
        
        
           <div class="form-group row">
      
      <div class="col-sm-5">
        <div class=" btn-group" role="group" aria-label="Basic radio toggle button group">

          <input type="radio" class="btn-check" onchange="phases()" name="phase" value="1" id="phase1" autocomplete="off" checked>
          <label class="btn btn-outline-primary" for="phase1" data-bs-placement="bottom"
            title="Mainly Use for Commercial Puspose">1 Phase </label>

          <input type="radio" class="btn-check" onchange="phases()" name="phase" value="2" id="phase2" autocomplete="off">

          <label class="btn btn-outline-primary" for="phase2" data-bs-placement="bottom"
            title="Mainly Use for Industry purpose">3 Phase </label>

        </div>
        <br> <br> <br>
        

      </div>

     
    </div>

     <div  class="form-check">
        &nbsp &nbsp&nbsp &nbsp <input class="form-check-input" unchecked onclick="checkCheckbox()" type="checkbox" value="" name="check_box"  id="check_box">
            <label class="form-check-label" for="flexCheckDefault"><b>There may cause some percent of error .</b></label>
        </div>

    
</div>     
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
 <body onload="checkCheckbox()">

 <script>



function checkCheckbox() {  
  var yes = document.getElementById("check_box");  
 
  if (yes.checked == false ){  
      
      document.getElementById('calculate').disabled = true;
      document.getElementById('estimate').disabled = true;
    
    
    }  
  else {  
    document.getElementById('calculate').disabled = false;
    document.getElementById('estimate').disabled = false;
    
     }  

}  
</script>  

<script>

var option_1=document.getElementById('slct1').value;
            
$.ajax({
      type: 'post',
      data: {ajax: 1,temp_state:option_1}  
     });  

session_load();
phases();
start_time_hour();
end_time_hour();
state('slct1','slct2');

 document.getElementById('slct1').value = "0";
 provider_val=document.getElementById('slct2').value="0";
 tariff_val=document.getElementById('slct3').value="0";



function state(state_id,provider_id)
{
    var s_id=document.getElementById(state_id);
    var p_id=document.getElementById(provider_id);        

    var js_state_value=s_id.value;    
     

    $.ajax({
      type: 'post',
      data: {ajax: 1,js_state:js_state_value},
      
     });     
     
    p_id.innerHTML="";
    if(s_id.value ==0)
    {
        var provider_company=['0|Adani Electricity','1|BEST','2|MSEDCL'];
            tariff_option('slct1','slct3');
    }
    else if(s_id.value==1)
    {
        var provider_company=['0|Telangana State Power distribution Company '];
            tariff_option('slct1','slct3');
    
    }

    for(var option in provider_company)
        {
            var pair=provider_company[option].split("|");
            var newoption=document.createElement("option");

            newoption.value=pair[0];
            newoption.innerHTML=pair[1];
            p_id.options.add(newoption);
        }
}

function provider(provider_id)
{
    var p_id=document.getElementById(provider_id);   

    var js_provider_value=p_id.value;
    
    

    $.ajax({
      type: 'post',
      data: {ajax: 1,js_provider:js_provider_value}  
     });    

}


function tariff(tariff_id)
{
    var t_id=document.getElementById(tariff_id);
    var js_tariff_value=t_id.value;    
    
    $.ajax({
    type: 'post',
    data: {ajax: 1,js_tariff:js_tariff_value}  
    });      
     
}



function start_time_hour()
{
    //alert("hello");
    var st_id=document.getElementById('start_time');
    var start_time_value=st_id.value;  
    
    
   
    start_time_value= start_time_value.split(":");
    start_time_value=start_time_value[0];
    //alert(start_time_value);
    $.ajax({
    type: 'post',
    data: {ajax: 1,start_mytime:start_time_value}  
    });    
     
}


function end_time_hour()
{
    //alert("hello");
    var et_id=document.getElementById('end_time');
    var end_time_value=et_id.value;  
    
    
   
    end_time_value= end_time_value.split(":");
    end_time_value=end_time_value[0];
   // alert(start_time_value);
    $.ajax({
    type: 'post',
    data: {ajax: 1,end_mytime:end_time_value}  
    });    
     
}

function session_load()
{
  
    var l_id=document.getElementById('load'); 
    var js_load_value=l_id.value;         
   

    $.ajax({
    type: 'post',
    data: {ajax: 1,js_load:js_load_value}  
    });     
     
}


function phases()
{
    
    var phase_name_1=document.getElementById('phase1');     
    var phase_name_2=document.getElementById('phase2'); 

    var p1_value=phase_name_1.value;
    var p2_value=phase_name_2.value;
    var phase;
        
    
    if(phase_name_2.checked)
    {
        js_phase_value=p2_value;
    }
    else
    {
        js_phase_value=p1_value;
    }   

     $.ajax({
    type: 'post',
    data: {ajax: 1,js_phase:js_phase_value}  
    });    

}

function tariff_option(state_id,tariff_id)
{
    var s_id=document.getElementById(state_id);
    var t_id=document.getElementById(tariff_id);    
    
    t_id.innerHTML="";
    
    if(s_id.value ==0)
    {        
        var tariff_category=['0|BPL ','1|Domestic / Residentals','2|Commercial / Bussiness',
                        '3|Educational institution / Hospital / other ', '4|Agriculture / farm'];
    }
    else if(s_id.value==1)
    {
        var tariff_category=['0|Category 1 (BPL) < 100 units','1|Category 2 < 200 units','2|Category 3 >200 Units','3|Commercial / Bussiness '];
    }

    
    for(var option in tariff_category)
        {
            var pair=tariff_category[option].split("|");
            var newoption=document.createElement("option");

            newoption.value=pair[0];
            newoption.innerHTML=pair[1];
            t_id.options.add(newoption);
        }        
}


</script>

    
<?php 
    
  


    
    if(array_key_exists('calculate', $_POST)) {
        
       calculate();
    
    }

    if(array_key_exists('estimate', $_POST)) {

        estimate();
    }

   
    

    function calculate() {
        
                
            if(isset($_SESSION["php_state"])){
            $state= $_SESSION["php_state"];
        }
        if(isset($_SESSION["php_provider"])){
            $provider= $_SESSION["php_provider"];
            
        }

        if(isset($_SESSION["php_start_mytime"])){
            $start_time= $_SESSION["php_start_mytime"];
            
            
        }

        if(isset($_SESSION["php_end_mytime"])){
            $end_time= $_SESSION["php_end_mytime"];
            
        }

        
        if(isset($_SESSION["php_tariff"])){
            $tariff= $_SESSION["php_tariff"];
        }
        if(isset($_SESSION["php_load"])){
            $load= $_SESSION["php_load"];
            
        }
       
        if($start_time >= $end_time )
        {
            echo "<script>alert('Start Time cannot be greater Than or Equal to End Time');</script>";
        }       
        else
        {
        $_SESSION["state"] =$state;

        $_SESSION["provider"] =$provider;
        
        $_SESSION["tariff"] =$tariff;
       
        $_SESSION["load"] =$load;
        
        $_SESSION["mystart"] =$start_time;
        
        $_SESSION["myend"] =$end_time;       

        $_SESSION["phase"] =$_SESSION["php_phase"];        
       
        echo "<script> location.href='calculate.php'; </script>";        
        
        }        
        
    }
    
    function estimate() {

                
        if(isset($_SESSION["php_state"])){
            $state= $_SESSION["php_state"];
        }
        if(isset($_SESSION["php_provider"])){
            $provider= $_SESSION["php_provider"];
            
        }

        if(isset($_SESSION["php_start_mytime"])){
            $start_time= $_SESSION["php_start_mytime"];
            
            
        }

        if(isset($_SESSION["php_end_mytime"])){
            $end_time= $_SESSION["php_end_mytime"];
            
        }

        
        if(isset($_SESSION["php_tariff"])){
            $tariff= $_SESSION["php_tariff"];
        }
        if(isset($_SESSION["php_load"])){
            $load= $_SESSION["php_load"];
            
        }
       
        if($start_time >= $end_time )
        {
            echo "<script>alert('Start Time cannot be greater Than or Equal to End Time');</script>";
        }       
        else
        {
        $_SESSION["state"] =$state;

        $_SESSION["provider"] =$provider;
        
        $_SESSION["tariff"] =$tariff;
       
        $_SESSION["load"] =$load;
        
        $_SESSION["mystart"] =$start_time;
        
        $_SESSION["myend"] =$end_time;       

        $_SESSION["phase"] =$_SESSION["php_phase"];        
       
        echo "<script> location.href='estimate.php'; </script>";        
        
        }        
        
    }   
        



?>
<br><br><br>

<div class="form-group  col-sm-10">

    <button type="submit" id="calculate"  name="calculate"  class="btn btn-danger "><b><i class="fa fa-calculator" style="font-size:20px"></i> &nbsp; Calculate</b> </button>
    <button type="submit" id="estimate" name="estimate" class="btn btn-primary  " ><b><i class="fas fa-cogs" style="font-size:20px"></i> &nbsp; Estimate </b> </button>
    <br><br>
</div>


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