<?php
// Start the session
session_start();

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
  <?php
    if($_SESSION["login"]!=1) 
    { echo"
        <script>        
        $(function(){
            $('#header_page').load('header.php');
        });
        </script>";
    }
    else{

        echo"
        <script>        
        $(function(){
            $('#header_page').load('header_2.php');
        });
        </script>";

    }

    ?>

    <title>Estimate - Estimation</title>
    </head>

<body id="bd1">

<style>
#bd1,#form1{
 background-color:rgb(248, 241, 255); 
}


</style>

   <style>
        .high:hover {
            font-size: 20px;
        }
    </style>

    <div id="header_page"></div>

    

    <br><br>

    <style>        
        
        #light_item{

        border-style:  solid;
        border-width: 5px;
        border-color:rgb(46, 170, 22);
        border-radius:10px; 
        background-color:white;  
        box-shadow: 5px 10px 18px rgb(78, 78, 78);
          

        }        
        #medium_item{

        border-style:  solid;
        border-width: 5px;
        border-color:rgb(223, 174, 15);
        border-radius:10px;            
        background-color:white;
        box-shadow: 5px 10px 18px rgb(78, 78, 78);
                    

        }        
        #high_item{

        border-style:  solid;
        border-width: 5px;
        border-color:rgb(255, 0, 0);
        border-radius:10px;            
        background-color:white;
        box-shadow: 5px 10px 18px rgb(78, 78, 78);
                    

        }  
        
        

        #lb1,
        #lb2,
        #lb3,#lb4 ,#lbt1,#lbt2{
            font-size:15px;
            font-weight: bold;
            color:rgb(21, 130, 255);
        }

        .data{
            font-size: 20px;
            font-weight: bold;
        }

        #header{
            
            
            font-size:35px;
            font-weight:bolder;
            text-align: center;

            font-family: "Times New Roman";
            color:rgb(0, 93, 231);
            
        }
        #head{
            font-family: "Times New Roman";
            
            padding-left: 15px;
            padding-top: 20px;
            font-size:30px;
            text-align:center;
            color:rgb(255, 0, 0);
            
            
        }

        #head_2{
            font-family: "Times New Roman";
            
            padding-left: 15px;
            padding-top: 20px;
            font-size:30px;
            text-align:center;
            color:rgb(10, 96, 255);
            
            
        }

        #head_3{
            font-family: "Times New Roman";
            
            padding-left: 15px;
            padding-top: 20px;
            font-size:30px;
            text-align:center;
            color:rgb(0, 155, 13);
            
        }


        #light_item{
            background-color:white;
        }

        img{

             border:solid 2px;
             box-shadow: 5px 10px 18px rgb(78, 78, 78);
        
           
        }
        #container{
            font-size: 25px;
            font-weight: bold;
            padding:5px;
            
          
        }

        span{
            background-color: white;
                  border-style:  solid;
                  color:rgb(53, 66, 241);
        }


    </style>

    <div  class="form-group  col-sm-7">
    
    &nbsp &nbsp<button type="submit" onClick="location.href='electric.php'"  name="back"  class="btn btn-danger "><b> <- Back</b> </button>
    &nbsp <button type="button" style="color: white; font-weight: bolder; border: 2px solid orange; border-radius: 10px; " onclick="page_query()" class="btn btn-warning btn-sm"><i class="fa fa-question" style="font-size:25px;color:white;"></i></button>   <br><br>
    </div>

    <script>

function page_query()
{
    alert(" Here you have to select your home appliances which you use regularly , if you know exact watt of your appliances you can also enter that one , this will increase your accuracy rate. Don't Worry if you dont know your appliances wattage approximate wattage is already selected , just you enter how may items you have and selected how many hours it will on in a Day . Bill will genrate on the basis of your Appliances consumption . If the appliances is not in our list there is a blank card with names other 1, other 2 so you enter their wattage and time , next in down click on estimate button .");
}  

</script>

<form id="form1" action="estimate_api.php"  method ="POST" class=" p-2  mx-1 ">        


  <!--  Light Wattage Items -->
  
    <label class="form-label" id="header">  Low Wattage Items </label>
    
    <div id="container"  class="row row-cols-auto">
                 
                <!-- #1 LED BULB Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">1) LED Bulb</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="led_bulb_1.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="LED Tube Light">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input type="number"required min="1" step="1" id="load_1"  name="load_1" value="10" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input type="number" required min="0" step="1" id="num_1"  name="num_1"   value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_1" id="hour_1"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #2 CFL Bulb Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">2) CFL BULB</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="cfl_bulb.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="CFL BULB">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_2"   
                                    name="load_2" value="15" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_2"  name="num_2"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_2" id="hour_2"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option selected value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #3 Halogen BULB Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">3) Halogen Bulb</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="halogen_bulb.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Halogen Bulb">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_3"   
                                    name="load_3" value="45" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_3"  name="num_3"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_3" id="hour_3"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option selected value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
                 
                <!-- #4 Incandescent BULB Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">4) Incandescent</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="incandescent.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Incandescent">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_4"   
                                    name="load_4" value="60" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_4"  name="num_4"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_4" id="hour_4"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #5 LED TubeLight Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">5) LED TubeLight</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="led_tubelight_2.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="LED TubeLight">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_5"  onfocusout="led_bulb()"   
                                    name="load_5" value="20" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_5"  name="num_5"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_5" id="hour_5"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option selected value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #6 fulorecent Tube light Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">6) Tube Light</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="tubelight_3.jpg"  class="img-fluid" width="auto"
                             height="auto" alt=" Tube Light">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_6"  onfocusout="led_bulb()" 
                                      name="load_6" value="35" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_6"  name="num_6"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_6" id="hour_6"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option selected value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
                 
                <!-- #7 Ceiling Fans Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">7) Ceiling Fans</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="celling_fan.png"  class="img-fluid" width="auto"
                             height="auto" alt="Ceiling Fans">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_7"  onfocusout="led_bulb()"
                                   name="load_7" value="60" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_7"  name="num_7"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_7" id="hour_7"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option selected value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #8 Exhaust Fan Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">8) Exhaust Fan</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="exhaust_fan.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Exhaust Fan">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_8"  onfocusout="led_bulb()"   
                                    name="load_8" value="80" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_8"  name="num_8"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required  name="hour_8" id="hour_8"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #9 Air Cooler Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">9) Air Cooler</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="air_cooler.png"  class="img-fluid" width="auto"
                             height="auto" alt="Air Cooler">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_9"  onfocusout="led_bulb()"   
                                    name="load_9" value="120" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_9"  name="num_9"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_9" id="hour_9"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
                 
                <!-- #10 Laptop Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">10) Laptop</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="laptop.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="laptop">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_10"  onfocusout="led_bulb()"
                                   name="load_10" value="40" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_10"  name="num_10"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_10" id="hour_10"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option selected value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #11 Desktop PC Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">11) Desktop PC</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="desktop.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Desktop PC">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_11"  onfocusout="led_bulb()"   
                                    name="load_11" value="120" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_11"  name="num_11"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required  name="hour_11" id="hour_11"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #12 Smart Phone Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">12) Smart Phone</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="smart_phone.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Smart Phone">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_12"  onfocusout="led_bulb()"   
                                    name="load_12" value="20" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_12"  name="num_12"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration ( Charging Time )</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_12" id="hour_12"  class="form-select">
                                                                        
                                    <option value="0.5">30 min</option>
                                    <option selected value="1">1 Hours</option>
                                    <option value="1.5">1.5 Hours</option>
                                    <option value="2">2 Hours</option>
                                    <option value="2.5">2.5 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    
                                    </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
                 
                <!-- #13 Wifi Router Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">13) Wifi Router</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="wifi_router.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Wifi Router">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_13"  onfocusout="led_bulb()"
                                   name="load_13" value="8" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_13"  name="num_13"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_13" id="hour_13"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option selected value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #14 LED TV Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">14) LED TV</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="led_tv.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="LED TV">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <select required name="load_14" id="load_14"  class="form-select">
                                                                        
                                    <option value="15">15 inch &nbsp&nbsp 15 W</option>
                                    <option value="18">17 inch &nbsp&nbsp 18 W</option>
                                    <option value="20">19 inch &nbsp&nbsp 20 W</option>
                                    <option value="24">20 inch &nbsp&nbsp 24 W</option>
                                    <option value="26">21 inch &nbsp&nbsp 26 W</option>
                                    <option value="30">22 inch &nbsp&nbsp 30 W</option>
                                    <option value="40">24 inch &nbsp&nbsp 40 W</option>
                                    <option value="50">30 inch &nbsp&nbsp 50 W</option>
                                    <option selected value="55">32 inch &nbsp&nbsp 55 W</option>
                                    <option value="60">37 inch &nbsp&nbsp 60 W</option>
                                    <option value="80">42 inch &nbsp&nbsp 80 W</option>
                                    <option value="100">50 inch &nbsp&nbsp 100 W</option>
                                    
                            </select>
                        </div>
                        
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_14"  name="num_14"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_14" id="hour_14"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
        
                <!-- #15 LCD TV Card -->
                <div id="light_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head">15) LCD TV</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="lcd_tv.png"  class="img-fluid" width="auto"
                             height="auto" alt="LCD TV">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <select required name="load_15" id="load_15"  class="form-select">
                                                                        
                                    <option value="15">15 inch &nbsp&nbsp 18 W</option>
                                    <option value="20">17 inch &nbsp&nbsp 20 W</option>
                                    <option value="22">19 inch &nbsp&nbsp 22 W</option>
                                    <option value="26">20 inch &nbsp&nbsp 26 W</option>
                                    <option value="30">21 inch &nbsp&nbsp 30 W</option>
                                    <option value="40">22 inch &nbsp&nbsp 40 W</option>
                                    <option value="50">24 inch &nbsp&nbsp 50 W</option>
                                    <option value="60">30 inch &nbsp&nbsp 60 W</option>
                                    <option selected value="70">32 inch &nbsp&nbsp 70 W</option>
                                    <option value="80">37 inch &nbsp&nbsp 80 W</option>
                                    <option value="120">42 inch &nbsp&nbsp 120 W</option>
                                    <option value="150">50 inch &nbsp&nbsp 150 W</option>
                                    
                            </select>
                        </div>
                        
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_15"  name="num_15"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_15" id="hour_15"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div> 
         
               
        
                                
    </div>


    <!-- Medium Wattage Items -->
  <br><br>
    <label class="form-label" id="header">  Medium Wattage Items </label>
    
    <div id="container"  class="row row-cols-auto">
                 
                <!-- #16 Refrigerator Card -->
                <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head_2">1) Refrigerator</label>
                                        
                    <div  class="row-md-5 p-2">                                
                        <img src="refrigerator.jpg"  class="img-fluid" width="auto"
                                height="auto" alt="Refrigerator">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                            
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_16"  onfocusout="led_bulb()"   name="load_16" value="150" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_16"  name="num_16"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration ( 33% Duty Cycle) </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_16" id="hour_16"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option selected value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div>
                 
                 <!-- #17 water pump Card -->
               <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head_2">2) Water Pump</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="water_motor.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Water Pump">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <select required name="load_17" id="load_17"  class="form-select">
                                                                        
                                    <option value="125">1/6 hp &nbsp&nbsp&nbsp 125 W</option>
                                    <option value="187">1/4 hp &nbsp&nbsp&nbsp 187 W</option>
                                    <option value="375">1/2 hp &nbsp&nbsp&nbsp 375 W</option>
                                    <option selected value="750">&nbsp1 hp  &nbsp&nbsp&nbsp 750 W</option>
                                    <option value="1500">&nbsp2 hp &nbsp&nbsp 1500 W</option>
                                    <option value="2250">&nbsp3 hp &nbsp&nbsp 2250 W</option>
                                    <option value="3000">&nbsp4 hp &nbsp&nbsp 3000 W</option>
                                    <option value="3750">&nbsp5 hp &nbsp&nbsp 3750 W</option>
                                    <option value="7500">10 hp &nbsp&nbsp 7500 W</option>
                                    <option value="11250">15 hp &nbsp&nbsp 11250 W</option>
                                    <option value="15000">20 hp &nbsp&nbsp 15000 W</option>
                                    <option value="18750">25 hp &nbsp&nbsp 18750 W</option>                                  
                                    
                            </select>
                        </div>
                        
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_17"  name="num_17"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_17" id="hour_17"  class="form-select">
                                    
                                    <option value="0.16">10 min</option>
                                    <option value="0.25">15 min</option>
                                    <option value="0.5">30 min</option>
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
               </div> 

               <!-- #18 CRT TV Card -->
               <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head_2">3) CRT TV</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="crt_tv.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="crt TV">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <select required name="load_18" id="load_18"  class="form-select">
                                                                        
                                    <option value="65">15 inch &nbsp&nbsp 65 W</option>
                                    <option value="75">17 inch &nbsp&nbsp 75 W</option>
                                    <option value="80">19 inch &nbsp&nbsp 80 W</option>
                                    <option value="90">20 inch &nbsp&nbsp 90 W</option>
                                    <option value="100">21 inch &nbsp&nbsp 100 W</option>
                                    <option selected value="110">22 inch &nbsp&nbsp 110 W</option>
                                    <option value="120">24 inch &nbsp&nbsp 120 W</option>                                  
                                    
                            </select>
                        </div>
                        
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_18"  name="num_18"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_18" id="hour_18"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
               </div> 
        
                
                 <!-- #19 Plasma TV Card -->
               <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head_2">4) Plasma TV</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="plasma_tv.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Plasma TV">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <select required name="load_19" id="load_19"  class="form-select">
                                                                        
                                    <option value="150">30 inch &nbsp&nbsp 150 W</option>
                                    <option value="160">32 inch &nbsp&nbsp 160 W</option>
                                    <option value="180">37 inch &nbsp&nbsp 180 W</option>
                                    <option selected value="220">42 inch &nbsp&nbsp 220 W</option>
                                    <option value="300">50 inch &nbsp&nbsp 300 W</option>                                  
                                    
                            </select>
                        </div>
                        
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_19"  name="num_19"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_19" id="hour_19"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
               </div> 
                 
                <!-- #20 Speaker Card -->
                <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_2">5) Speaker</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="speaker.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Speaker">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_20"  onfocusout="led_bulb()"   name="load_20" value="230" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_20"  name="num_20"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_20" id="hour_20"  class="form-select">
                                                                                
                                            <option value="1">1 Hour</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option selected value="4">4 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="6">6 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="8">8 Hours</option>
                                            <option value="9">9 Hours</option>
                                            <option value="10">10 Hours</option>
                                            <option value="11">11 Hours</option>
                                            <option value="12">12 Hours</option>
                                            <option value="13">13 Hours</option>
                                            <option value="14">14 Hours</option>
                                            <option value="15">15 Hours</option>
                                            <option value="16">16 Hours</option>
                                            <option value="17">17 Hours</option>
                                            <option value="18">18 Hours</option>
                                            <option value="19">19 Hours</option>
                                            <option value="20">20 Hours</option>
                                            <option value="21">21 Hours</option>
                                            <option value="22">22 Hours</option>
                                            <option value="23">23 Hours</option>
                                            <option value="24">24 Hours</option>
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
                </div>

                <!-- #21 Sewing Machine -->
                <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_2">6) Sewing Machine</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="sewing_machine.jpeg"  class="img-fluid" width="auto"
                                        height="auto" alt="Sewing Machine">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_21"  onfocusout="led_bulb()"   name="load_21" value="100" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_21"  name="num_21"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_21" id="hour_21"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>        
                                            <option value="1">1 Hour</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="4">4 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="6">6 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="8">8 Hours</option>
                                            <option value="9">9 Hours</option>
                                            <option value="10">10 Hours</option>
                                            <option value="11">11 Hours</option>
                                            <option value="12">12 Hours</option>
                                            <option value="13">13 Hours</option>
                                            <option value="14">14 Hours</option>
                                            <option value="15">15 Hours</option>
                                            <option value="16">16 Hours</option>
                                            <option value="17">17 Hours</option>
                                            <option value="18">18 Hours</option>
                                            <option value="19">19 Hours</option>
                                            <option value="20">20 Hours</option>
                                            <option value="21">21 Hours</option>
                                            <option value="22">22 Hours</option>
                                            <option value="23">23 Hours</option>
                                            <option value="24">24 Hours</option>
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
                </div> 
                
                 <!-- #22 Others 1 Card -->
                <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head_2">7) Other 1</label>
                                        
                    <div  class="row-md-5 p-2">                                
                        <img src="other_2.jpg"  class="img-fluid" width="auto"
                                height="auto" alt="Other 1">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                            
                        <label class="form-label" id="lb1">Power Load</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <input required type="number" min="1" step="1" id="load_22"  onfocusout="led_bulb()"   name="load_22" value="200" class="form-control"
                                    placeholder="Consumption Load in W" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_22"  name="num_22"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required  name="hour_22" id="hour_22"  class="form-select">
                                                                        
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
                </div>
                 
                <!-- #23 Others 2 Card -->
                <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_2">8) Others 2</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="other_3.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Others 2">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_23"  onfocusout="led_bulb()"   name="load_23" value="170" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_23"  name="num_23"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_23" id="hour_23"  class="form-select">
                                                                                
                                            <option value="1">1 Hour</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option selected value="4">4 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="6">6 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="8">8 Hours</option>
                                            <option value="9">9 Hours</option>
                                            <option value="10">10 Hours</option>
                                            <option value="11">11 Hours</option>
                                            <option value="12">12 Hours</option>
                                            <option value="13">13 Hours</option>
                                            <option value="14">14 Hours</option>
                                            <option value="15">15 Hours</option>
                                            <option value="16">16 Hours</option>
                                            <option value="17">17 Hours</option>
                                            <option value="18">18 Hours</option>
                                            <option value="19">19 Hours</option>
                                            <option value="20">20 Hours</option>
                                            <option value="21">21 Hours</option>
                                            <option value="22">22 Hours</option>
                                            <option value="23">23 Hours</option>
                                            <option value="24">24 Hours</option>
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
                </div>

                <!-- #24 Others 3 Card -->
                <div id="medium_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_2">9) Others 3</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="other_4.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Others 3">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_24"  onfocusout="led_bulb()"   name="load_24" value="10" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_24"  name="num_24"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_24" id="hour_24"  class="form-select">
                                                                                
                                            <option value="1">1 Hour</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option selected value="4">4 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="6">6 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="8">8 Hours</option>
                                            <option value="9">9 Hours</option>
                                            <option value="10">10 Hours</option>
                                            <option value="11">11 Hours</option>
                                            <option value="12">12 Hours</option>
                                            <option value="13">13 Hours</option>
                                            <option value="14">14 Hours</option>
                                            <option value="15">15 Hours</option>
                                            <option value="16">16 Hours</option>
                                            <option value="17">17 Hours</option>
                                            <option value="18">18 Hours</option>
                                            <option value="19">19 Hours</option>
                                            <option value="20">20 Hours</option>
                                            <option value="21">21 Hours</option>
                                            <option value="22">22 Hours</option>
                                            <option value="23">23 Hours</option>
                                            <option value="24">24 Hours</option>
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
                </div>                 
    
    </div>

     <!-- High Wattage Appliances -->
  <br><br>
    <label class="form-label" id="header">  High Wattage Appliance </label>
    
    <div id="container"  class="row row-cols-auto">
        
         <!-- #25 Split AC Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
            
            <label class="form-label" id="head_3">1) Split AC</label>
                                
            <div  class="row-md-5 p-2">                                
                <img src="split_ac.jpg"  class="img-fluid" width="auto"
                        height="auto" alt="Split AC">
            </div>                    

            <div class="row-md-4 p-2">                        
                                    
                <label class="form-label" id="lb1">Power Load </label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                    <select required name="load_25" id="load_25"  class="form-select">
                        
                    <optgroup label="5 Star">
                        <option value="1000">1.0 Ton &nbsp&nbsp 1000 W</option>
                        <option value="1500">1.5 Ton &nbsp&nbsp 1500 W</option>
                        <option value="1730">2.0 Ton &nbsp&nbsp 1730 W</option>                                        
                    </optgroup>
                    <optgroup label="3 Star">
                        <option value="810">0.8 Ton &nbsp&nbsp 810 W</option>
                        <option selected value="1100">1.0 Ton &nbsp&nbsp 1100 W</option>
                        <option value="1560">1.5 Ton &nbsp&nbsp 1560 W</option>
                        <option value="1940">2.0 Ton &nbsp&nbsp 1940 W</option>                                        
                    </optgroup>
                    <optgroup label="2 Star">
                        <option value="1150">1.0 Ton &nbsp&nbsp 1150 W</option>
                        <option value="1710">1.5 Ton &nbsp&nbsp 1710 W</option>
                        <option value="2210">2.0 Ton &nbsp&nbsp 2210 W</option>                                        
                    </optgroup>

                                                                
                    </select>
                </div>
                
                                    
                <label class="form-label" id="lb1">No. of unit</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">No.</span>
                    <input required type="number" min="0" step="1" id="num_25"  name="num_25"  onfocusout="led_bulb()"  value="0" class="form-control" 
                            placeholder="Enter no of unit" 
                            aria-label="session load" aria-describedby="addon-wrapping">
                </div>
                                    
                <label class="form-label" id="lb1">Duration</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                    <select required  name="hour_25" id="hour_25"  class="form-select">
                            
                            <option value="0.25">15 min</option>
                            <option value="0.5">30 min</option>
                            <option value="1">1 Hour</option>
                            <option value="2">2 Hours</option>
                            <option value="3">3 Hours</option>
                            <option selected value="4">4 Hours</option>
                            <option value="5">5 Hours</option>
                            <option value="6">6 Hours</option>
                            <option value="7">7 Hours</option>
                            <option value="8">8 Hours</option>
                            <option value="9">9 Hours</option>
                            <option value="10">10 Hours</option>
                            <option value="11">11 Hours</option>
                            <option value="12">12 Hours</option>
                            <option value="13">13 Hours</option>
                            <option value="14">14 Hours</option>
                            <option value="15">15 Hours</option>
                            <option value="16">16 Hours</option>
                            <option value="17">17 Hours</option>
                            <option value="18">18 Hours</option>
                            <option value="19">19 Hours</option>
                            <option value="20">20 Hours</option>
                            <option value="21">21 Hours</option>
                            <option value="22">22 Hours</option>
                            <option value="23">23 Hours</option>
                            <option value="24">24 Hours</option>
                    </select>
                </div>
                <br>

            </div>  

        </div> 

         <!-- #26 Window AC Card -->
         <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                    
                    <label class="form-label" id="head_3">2) Window AC</label>
                                     
                    <div  class="row-md-5 p-2">                                
                        <img src="window_ac.jpg"  class="img-fluid" width="auto"
                             height="auto" alt="Window AC">
                    </div>                    
        
                    <div class="row-md-4 p-2">                        
                                           
                        <label class="form-label" id="lb1">Power Load </label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Watt</span>
                            <select required name="load_26" id="load_26"  class="form-select">
                                                         
                            <optgroup label="3 Star">
                                <option selected value="1160">1.0 Ton &nbsp&nbsp 1160 W</option>
                                <option value="1680">1.5 Ton &nbsp&nbsp 1680 W</option>
                            </optgroup>
                            <optgroup label="2 Star">
                                <option value="1250">1.0 Ton &nbsp&nbsp 1250 W</option>
                                <option value="1750">1.5 Ton &nbsp&nbsp 1750 W</option>
                            </optgroup>

                                                                        
                            </select>
                        </div>
                        
                                            
                        <label class="form-label" id="lb1">No. of unit</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">No.</span>
                            <input required type="number" min="0" step="1" id="num_26"  name="num_26"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                    placeholder="Enter no of unit" 
                                    aria-label="session load" aria-describedby="addon-wrapping">
                        </div>
                                            
                        <label class="form-label" id="lb1">Duration</label>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Hour</span>
                            <select required name="hour_26" id="hour_26"  class="form-select">
                                    
                                    <option value="0.25">15 min</option>
                                    <option value="0.5">30 min</option>
                                    <option value="1">1 Hour</option>
                                    <option value="2">2 Hours</option>
                                    <option value="3">3 Hours</option>
                                    <option selected value="4">4 Hours</option>
                                    <option value="5">5 Hours</option>
                                    <option value="6">6 Hours</option>
                                    <option value="7">7 Hours</option>
                                    <option value="8">8 Hours</option>
                                    <option value="9">9 Hours</option>
                                    <option value="10">10 Hours</option>
                                    <option value="11">11 Hours</option>
                                    <option value="12">12 Hours</option>
                                    <option value="13">13 Hours</option>
                                    <option value="14">14 Hours</option>
                                    <option value="15">15 Hours</option>
                                    <option value="16">16 Hours</option>
                                    <option value="17">17 Hours</option>
                                    <option value="18">18 Hours</option>
                                    <option value="19">19 Hours</option>
                                    <option value="20">20 Hours</option>
                                    <option value="21">21 Hours</option>
                                    <option value="22">22 Hours</option>
                                    <option value="23">23 Hours</option>
                                    <option value="24">24 Hours</option>
                            </select>
                        </div>
                        <br>
        
                    </div>  
        
         </div>
         
        <!-- #27 Washing Machine Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">3) WashingMachine</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="washing_machine.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Washing Machine">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_27"  onfocusout="led_bulb()"   name="load_27" value="800" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_27"  name="num_27"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_27" id="hour_27"  class="form-select">
                                            
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>
                                            <option value="1">1 Hour</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option selected value="4">4 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="6">6 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="8">8 Hours</option>
                                            <option value="9">9 Hours</option>
                                            <option value="10">10 Hours</option>
                                            <option value="11">11 Hours</option>
                                            <option value="12">12 Hours</option>
                                            <option value="13">13 Hours</option>
                                            <option value="14">14 Hours</option>
                                            <option value="15">15 Hours</option>
                                            <option value="16">16 Hours</option>
                                            <option value="17">17 Hours</option>
                                            <option value="18">18 Hours</option>
                                            <option value="19">19 Hours</option>
                                            <option value="20">20 Hours</option>
                                            <option value="21">21 Hours</option>
                                            <option value="22">22 Hours</option>
                                            <option value="23">23 Hours</option>
                                            <option value="24">24 Hours</option>
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #28 Electric Iron Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">4) Electric Iron</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="iron.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Electric Iron">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_28"  onfocusout="led_bulb()"   name="load_28" value="1200" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_28"  name="num_28"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_28" id="hour_28"  class="form-select">
                                                                                
                                    <option value="0.03">2 min</option>
                                    <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>   
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #29 Grinder ( Mixer ) Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">5) Grinder ( Mixer )</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="mixer.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Grinder">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_29"  onfocusout="led_bulb()"   name="load_29" value="500" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_29"  name="num_29"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_29" id="hour_29"  class="form-select">
                                                                                
                                    <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                               
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #30 Dish Washer Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">6) Dish Washer</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="dish_washer.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Dish Washer">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_30"  onfocusout="led_bulb()"   name="load_30" value="1500" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_30"  name="num_30"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_30" id="hour_30"  class="form-select">
                                            
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>
                                            <option value="1">1 Hour</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option selected value="4">4 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="6">6 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="8">8 Hours</option>
                                            <option value="9">9 Hours</option>
                                            <option value="10">10 Hours</option>
                                            <option value="11">11 Hours</option>
                                            <option value="12">12 Hours</option>
                                            <option value="13">13 Hours</option>
                                            <option value="14">14 Hours</option>
                                            <option value="15">15 Hours</option>
                                            <option value="16">16 Hours</option>
                                            <option value="17">17 Hours</option>
                                            <option value="18">18 Hours</option>
                                            <option value="19">19 Hours</option>
                                            <option value="20">20 Hours</option>
                                            <option value="21">21 Hours</option>
                                            <option value="22">22 Hours</option>
                                            <option value="23">23 Hours</option>
                                            <option value="24">24 Hours</option>
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #31 Microwave Oven Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">7) Microwave Oven</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="microwave_oven.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt=" Microwave Ovent">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_31"  onfocusout="led_bulb()"   name="load_31" value="1000" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_31"  name="num_31"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_31" id="hour_31"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                         
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #32 Electric Oven Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">8) Electric Oven</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="electric_oven.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Electric Oven">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_32"  onfocusout="led_bulb()"   name="load_32" value="1200" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_32"  name="num_32"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_32" id="hour_32"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #33 Toster Oven Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">9) Toster Oven</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="toaster_oven.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Toster Oven">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_33"  onfocusout="led_bulb()"   name="load_33" value="1300" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_33"  name="num_33"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required  name="hour_33" id="hour_33"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #34 Toaster Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">10) Toaster</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="toaster.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Toaster">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_34"  onfocusout="led_bulb()"   name="load_34" value="850" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_34"  name="num_34"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_34" id="hour_34"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #35 Geyser Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">11) Geyser</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="geyser.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Geyser">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_35"  onfocusout="led_bulb()"   name="load_35" value="3000" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_35"  name="num_35"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_35" id="hour_35"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #36 Immersion Rod Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">12) Immersion Rod</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="immersion_rod.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Immersion Rod">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_36"  onfocusout="led_bulb()"   name="load_36" value="1500" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_36"  name="num_36"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_36" id="hour_36"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #37 Hair Dryer Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">13) Hair Dryer </label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="hair_dryer.jpeg"  class="img-fluid" width="auto"
                                        height="auto" alt="Hair Dryer">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_37"  onfocusout="led_bulb()"   name="load_37" value="1500" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_37"  name="num_37"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_37" id="hour_37"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #38 Vacuum Cleaner Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">14) Vacuum Cleaner</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="vacuum_cleaner.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Vacuum Cleaner">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_38"  onfocusout="led_bulb()"   name="load_38" value="1250" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_38"  name="num_38"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required  name="hour_38" id="hour_38"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>

        <!-- #39 Other Card -->
        <div id="high_item" class="col  my-3 mx-2 col-md-3 ">
                            
                            <label class="form-label" id="head_3">15) Other</label>
                                                
                            <div  class="row-md-5 p-2">                                
                                <img src="other_5.jpg"  class="img-fluid" width="auto"
                                        height="auto" alt="Other">
                            </div>                    
                
                            <div class="row-md-4 p-2">                        
                                                    
                                <label class="form-label" id="lb1">Power Load</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Watt</span>
                                    <input required type="number" min="1" step="1" id="load_39"  onfocusout="led_bulb()"   name="load_39" value="950" class="form-control"
                                            placeholder="Consumption Load in W" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">No. of unit</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">No.</span>
                                    <input required type="number" min="0" step="1" id="num_39"  name="num_39"  onfocusout="led_bulb()"  value="0" class="form-control" 
                                            placeholder="Enter no of unit" 
                                            aria-label="session load" aria-describedby="addon-wrapping">
                                </div>
                                                    
                                <label class="form-label" id="lb1">Duration</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">Hour</span>
                                    <select required name="hour_39" id="hour_39"  class="form-select">
                                                                                
                                            <option value="0.03">2 min</option>
                                            <option selected value="0.08">5 min</option>
                                            <option value="0.16">10 min</option>
                                            <option value="0.25">15 min</option>
                                            <option value="0.5">30 min</option>                                            
                                            <option value="1">1 Hours</option>
                                            <option value="2">2 Hours</option>
                                            <option value="3">3 Hours</option>
                                            <option value="5">5 Hours</option>
                                            <option value="7">7 Hours</option>
                                            <option value="10">10 Hours</option>                                            
                                    </select>
                                </div>
                                <br>
                
                            </div>  
                
        </div>
        
                   
    </div>

    <br><br>           
    &nbsp&nbsp&nbsp&nbsp<button type="submit" name="mycalculate" class="btn btn-primary btn-lg"><b><i class="fa fa-calculator" style="font-size:22px"></i> &nbsp;Calculate Bill</b></button>
    

    </form>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <br><br>

<br><br><br>
    
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2021–2022 Estimate, Bill. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>



    
    <!-- Optional JavaScript; choose one of the two -->

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
