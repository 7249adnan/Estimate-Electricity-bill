<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

all_kwh();

if($_SESSION["all_kwh_unit"]==0)
{
    echo "<script>alert('You have not Selected Any Item')</script>";
    echo "<script> location.href='estimate_login.php'; </script>";
}
else{
    $_SESSION["est_flag"]=1;
    echo "<script> location.href='calculate_login.php'; </script>";
}


function all_kwh()
{
    $_SESSION["all_kwh_unit"]=0;
    $unit=0;


    // 1 item
    $l=$_POST['load_1']; 
    $n=$_POST['num_1']; 
    $h=$_POST['hour_1']; 
    $unit=($l*$n*$h)+$unit;    
       
    // 2 item
    $l=$_POST['load_2']; 
    $n=$_POST['num_2']; 
    $h=$_POST['hour_2']; 
    $unit=($l*$n*$h)+$unit;
   
    // 3 item
    $l=$_POST['load_3']; 
    $n=$_POST['num_3']; 
    $h=$_POST['hour_3']; 
    $unit=($l*$n*$h)+$unit;
   
    // 4 item
    $l=$_POST['load_4']; 
    $n=$_POST['num_4']; 
    $h=$_POST['hour_4']; 
    $unit=($l*$n*$h)+$unit;
   
    // 5 item
    $l=$_POST['load_5']; 
    $n=$_POST['num_5']; 
    $h=$_POST['hour_5']; 
    $unit=($l*$n*$h)+$unit;
   
    // 6 item
    $l=$_POST['load_6']; 
    $n=$_POST['num_6']; 
    $h=$_POST['hour_6']; 
    $unit=($l*$n*$h)+$unit;
   
    // 7 item
    $l=$_POST['load_7']; 
    $n=$_POST['num_7']; 
    $h=$_POST['hour_7']; 
    $unit=($l*$n*$h)+$unit;
   
    // 8 item
    $l=$_POST['load_8']; 
    $n=$_POST['num_8']; 
    $h=$_POST['hour_8']; 
    $unit=($l*$n*$h)+$unit;
   
    // 9 item
    $l=$_POST['load_9']; 
    $n=$_POST['num_9']; 
    $h=$_POST['hour_9']; 
    $unit=($l*$n*$h)+$unit;
   
    // 10 item
    $l=$_POST['load_10']; 
    $n=$_POST['num_10']; 
    $h=$_POST['hour_10']; 
    $unit=($l*$n*$h)+$unit;
   
    // 11 item
    $l=$_POST['load_11']; 
    $n=$_POST['num_11']; 
    $h=$_POST['hour_11']; 
    $unit=($l*$n*$h)+$unit;
   
    // 12 item
    $l=$_POST['load_12']; 
    $n=$_POST['num_12']; 
    $h=$_POST['hour_12']; 
    $unit=($l*$n*$h)+$unit;
   
    // 13 item
    $l=$_POST['load_13']; 
    $n=$_POST['num_13']; 
    $h=$_POST['hour_13']; 
    $unit=($l*$n*$h)+$unit;
   
    // 14 item
    $l=$_POST['load_14']; 
    $n=$_POST['num_14']; 
    $h=$_POST['hour_14']; 
    $unit=($l*$n*$h)+$unit;
   
    // 15 item
    $l=$_POST['load_15']; 
    $n=$_POST['num_15']; 
    $h=$_POST['hour_15']; 
    $unit=($l*$n*$h)+$unit;
   
    // 16 item
    $l=$_POST['load_16']; 
    $n=$_POST['num_16']; 
    $h=$_POST['hour_16']; 
    $unit=($l*$n*$h)+$unit;
   
    // 17 item
    $l=$_POST['load_17']; 
    $n=$_POST['num_17']; 
    $h=$_POST['hour_17']; 
    $unit=($l*$n*$h)+$unit;
   
    // 18 item
    $l=$_POST['load_18']; 
    $n=$_POST['num_18']; 
    $h=$_POST['hour_18']; 
    $unit=($l*$n*$h)+$unit;
   
    // 19 item
    $l=$_POST['load_19']; 
    $n=$_POST['num_19']; 
    $h=$_POST['hour_19']; 
    $unit=($l*$n*$h)+$unit;
   
    // 20 item
    $l=$_POST['load_20']; 
    $n=$_POST['num_20']; 
    $h=$_POST['hour_20']; 
    $unit=($l*$n*$h)+$unit;
   
    // 21 item
    $l=$_POST['load_21']; 
    $n=$_POST['num_21']; 
    $h=$_POST['hour_21']; 
    $unit=($l*$n*$h)+$unit;
   
    // 22 item
    $l=$_POST['load_22']; 
    $n=$_POST['num_22']; 
    $h=$_POST['hour_22']; 
    $unit=($l*$n*$h)+$unit;
   
    // 23 item
    $l=$_POST['load_23']; 
    $n=$_POST['num_23']; 
    $h=$_POST['hour_23']; 
    $unit=($l*$n*$h)+$unit;
   
    // 24 item
    $l=$_POST['load_24']; 
    $n=$_POST['num_24']; 
    $h=$_POST['hour_24']; 
    $unit=($l*$n*$h)+$unit;
   
    // 25 item
    $l=$_POST['load_25']; 
    $n=$_POST['num_25']; 
    $h=$_POST['hour_25']; 
    $unit=($l*$n*$h)+$unit;
   
    // 26 item
    $l=$_POST['load_26']; 
    $n=$_POST['num_26']; 
    $h=$_POST['hour_26']; 
    $unit=($l*$n*$h)+$unit;
   
    // 27 item
    $l=$_POST['load_27']; 
    $n=$_POST['num_27']; 
    $h=$_POST['hour_27']; 
    $unit=($l*$n*$h)+$unit;
   
    // 28 item
    $l=$_POST['load_28']; 
    $n=$_POST['num_28']; 
    $h=$_POST['hour_28']; 
    $unit=($l*$n*$h)+$unit;
   
    // 29 item
    $l=$_POST['load_29']; 
    $n=$_POST['num_29']; 
    $h=$_POST['hour_29']; 
    $unit=($l*$n*$h)+$unit;
   
    // 30 item
    $l=$_POST['load_30']; 
    $n=$_POST['num_30']; 
    $h=$_POST['hour_30']; 
    $unit=($l*$n*$h)+$unit;
   
    // 31 item
    $l=$_POST['load_31']; 
    $n=$_POST['num_31']; 
    $h=$_POST['hour_31']; 
    $unit=($l*$n*$h)+$unit;
   
    // 32 item
    $l=$_POST['load_32']; 
    $n=$_POST['num_32']; 
    $h=$_POST['hour_32']; 
    $unit=($l*$n*$h)+$unit;
   
    // 33 item
    $l=$_POST['load_33']; 
    $n=$_POST['num_33']; 
    $h=$_POST['hour_33']; 
    $unit=($l*$n*$h)+$unit;
   
    // 34 item
    $l=$_POST['load_34']; 
    $n=$_POST['num_34']; 
    $h=$_POST['hour_34']; 
    $unit=($l*$n*$h)+$unit;
   
    // 35 item
    $l=$_POST['load_35']; 
    $n=$_POST['num_35']; 
    $h=$_POST['hour_35']; 
    $unit=($l*$n*$h)+$unit;
   
    // 36 item
    $l=$_POST['load_36']; 
    $n=$_POST['num_36']; 
    $h=$_POST['hour_36']; 
    $unit=($l*$n*$h)+$unit;
   
    // 37 item
    $l=$_POST['load_37']; 
    $n=$_POST['num_37']; 
    $h=$_POST['hour_37']; 
    $unit=($l*$n*$h)+$unit;
   
    // 38 item
    $l=$_POST['load_38']; 
    $n=$_POST['num_38']; 
    $h=$_POST['hour_38']; 
    $unit=($l*$n*$h)+$unit;
   
    // 39 item
    $l=$_POST['load_39']; 
    $n=$_POST['num_39']; 
    $h=$_POST['hour_39']; 
    $unit=($l*$n*$h)+$unit;

    $_SESSION["all_kwh_unit"]=($unit/1000)*30;
   
        
} 



?>

</body>
</html>