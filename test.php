<?php
// data Base estimatebills
// Start the session
session_start();
//$_SESSION["flag_adani_bpl"] =0;

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
    //echo "connection was successful";
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
if(isset($_SESSION["php_start_mytime"])){
  unset($_SESSION["php_start_mytime"]);
}
if(isset($_SESSION["php_end_mytime"])){
  unset($_SESSION["php_end_mytime"]);
}



//echo " qqqq";
//echo "<br>";


//if ($_SERVER["REQUEST_METHOD"] == "POST")

  /*$username =$_POST['username'];
  $email    =$_POST['email'];
  echo "<br>";

  echo "Username: ".$username;
  echo "<br>";

  echo "Email: ".$email;*/
  
  $state=$_SESSION["state"] ;

  $provider=$_SESSION["provider"] ;

  $tariff= $_SESSION["tariff"];

  $load=$_SESSION["load"];

  $phase=$_SESSION["phase"];

  $unit=$_SESSION["myunit"];

  $start_time=$_SESSION["mystart"];

  $end_time=$_SESSION["myend"];


  if($state==0)
  {
    $_SESSION["state_name"]="Maharashtra";

    if($provider==0)
    {
      $_SESSION["provider_name"]="Adani";            
    }
    else if($provider==1)
    {
      $_SESSION["provider_name"]="BEST";
    }
    else if($provider==2)
    {
      $_SESSION["provider_name"]="MSEDCL";
    }

      if($tariff==0)
      {
        $_SESSION["tariff_name"]="BPL (Below Poverty Line)";
      }
      else if($tariff==1)
      {
        $_SESSION["tariff_name"]="Domestic / Residental";
      }
      else if($tariff==2)
      {
        $_SESSION["tariff_name"]="Commercial / Business";
      }
      else if($tariff==3)
      {
        $_SESSION["tariff_name"]="Educational institution / Service / other  ";
      }
      else if($tariff==4)
      {
        $_SESSION["tariff_name"]="Agriculture / Farm";
      }
      
    
  }
  else if($state==1)
  {
    $_SESSION["state_name"]="Telangana";

      if($provider==0)
      {
        $_SESSION["provider_name"]="Telangana State Power Distribution";
      }

        if($tariff==0)
        {
          $_SESSION["tariff_name"]="Category 1 ( BPL )";
        }
        else if($tariff==1)
        {
          $_SESSION["tariff_name"]="Category 2";
        }
        else if($tariff==2)
        {
          $_SESSION["tariff_name"]="Category 3";
        }
        else if($tariff==3)
        {
          $_SESSION["tariff_name"]="Commercial / Business";
        }
    

  }

  


  
  function calculate_fun_unit($t_name,$conn,$unit)
  {

    $n=0;
    if($unit <=100)
    {
      $n=1;
    }
    else if($unit <=300)
    {
      $n=2;
    }
    else if($unit <=500)
    {
      $n=3;
    }
    else
    {
      $n=4;
    } 

    $sql= "SELECT * FROM $t_name ";
    $result =mysqli_query($conn,$sql);
    //$num = mysqli_num_rows($result);
    //echo $num;
    //$row =mysqli_fetch_assoc($result);

      
    $i=0;

     while($row =mysqli_fetch_assoc($result))
      {
     
      $_SESSION["fixed_charge"]=$row['fixed_charge'];
      $_SESSION["wheeling_charge"]=$row['wheeling_charge'];
      $_SESSION["energy_charge"]=$row['energy_charge'];
      $_SESSION["govt_ed"]=$row['govt_ed'];
      $_SESSION["govt_tax"]=$row['govt_tax'];

      

      //340 // 3*1
        if($i <$n)
        {
          if($i==0 && $unit<=100)
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * $unit;
            break;
          }
          if($i==0 && $unit>100)          
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * 100;            
          }

          if($i==1 && $unit<=300)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 100) ) + $_SESSION["energy_charge_all"];
              break;
            }
            if($i==1 && $unit>300)         
            {
              $_SESSION["energy_charge_all"]=($_SESSION["energy_charge"] * 200 ) + $_SESSION["energy_charge_all"] ;            
            }

            if($i==2 && $unit<=500)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 300) ) + $_SESSION["energy_charge_all"];
              break;
            }
            if($i==2 && $unit>500)
            {
              $_SESSION["energy_charge_all"]=($_SESSION["energy_charge"] * 200 ) + $_SESSION["energy_charge_all"] ;            
            }

            if($i==3 && $unit >500)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 500) ) + $_SESSION["energy_charge_all"];
              break;
            }
          
          
        }
        $i++;
        
      }

      $_SESSION["wheeling_charge_all"]= $_SESSION["wheeling_charge"] * $unit;
      $_SESSION["govt_tax_all"]= $_SESSION["govt_tax"] * $unit;

      $_SESSION["consumer_charge_all"]= $_SESSION["fixed_charge"] +  $_SESSION["wheeling_charge_all"]+ $_SESSION["energy_charge_all"];
      $_SESSION["govt_ed_all"]=(($_SESSION["consumer_charge_all"] * $_SESSION["govt_ed"])/100.0);

      $_SESSION["total_bill_all"]=  $_SESSION["govt_ed_all"] +  $_SESSION["govt_tax_all"] +$_SESSION["consumer_charge_all"];
  
      $_SESSION["calculate_11"]=2;   



  }

  function calculate_fun_kw($t_name,$add_t_c,$conn,$unit,$load,$start_time,$end_time)
  {
    
    $n=0;
    if($load <=20)
    {
      $n=1;
    }
    else if($load <=50)
    {
      $n=2;
    }    
    else
    {
      $n=3;
    } 
    
     
    $sql= "SELECT * FROM $add_t_c ";
    $result =mysqli_query($conn,$sql);   
      
    $i=1;

     while($row =mysqli_fetch_assoc($result))
      {


        if($i==1)
        {
          $_SESSION["t1"]=$row['time_charge'];
      
        }      
        else if($i==2)
        {
          $_SESSION["t2"]=$row['time_charge'];
      
        }      
        else if($i==3)
        {
          $_SESSION["t3"]=$row['time_charge'];
      
        }      
        else if($i==4)
        {
          $_SESSION["t4"]=$row['time_charge'];
      
        }      
        else if($i==5)
        {
          $_SESSION["t5"]=$row['time_charge'];
      
        }      
      
        $i++;

      }
    
      $t1=$_SESSION["t1"];
      $t2=$_SESSION["t2"];
      $t3=$_SESSION["t3"];
      $t4=$_SESSION["t4"];
      $t5=$_SESSION["t5"];

      

      $t_c=($t2  +$t4 + $t5)/3;

      if($start_time >= 6 && $end_time <9)
      {
        $t_c=$t_c + $t1;
      }
      else if($start_time >= 9 && $end_time <12)
      {
        $t_c=$t_c + $t2;
      }
      else if($start_time >= 12 && $end_time <18)
      {
        $t_c=$t_c + $t3;
      }
      else if($start_time >= 18 && $end_time <22)
      {
        $t_c=$t_c + $t4;
      }

      
      else if($start_time >=6 && $end_time <12)
      {
        $t_c=($t1 +$t2)/2;
      }
      else if($start_time >=12 && $end_time <22)
      {
        $t_c=($t3 +$t4)/2;
      }


      else if($start_time >=6 && $end_time <18)
      {
        $t_c=($t1 +$t2 +$t3)/3;
      }
      else if($start_time >=9 && $end_time<22)
      {
        $t_c=($t2 + $t3 + $t4 )/3;
      }
      else if($start_time >=6 && $end_time<24)
      {
        $t_c=($t1+$t2 + $t3 + $t4 )/4;
      }
      else if($start_time >=12 && $end_time<6)
      {
        $t_c=($t3 + $t4 +$t5)/4;
      }
      else if($start_time >=6 && $end_time<7)
      {
        $t_c=($t4+$t5)/2;
      }
    
    $sql= "SELECT * FROM $t_name ";
    $result =mysqli_query($conn,$sql);   
      
    $i=1;

     while($row =mysqli_fetch_assoc($result))
      {

        
        $_SESSION["fixed_charge"]=$row['fixed_charge'];
        $_SESSION["wheeling_charge"]=$row['wheeling_charge'];
        $_SESSION["energy_charge"]=$row['energy_charge'];
        $_SESSION["govt_ed"]=$row['govt_ed'];
        $_SESSION["govt_tax"]=$row['govt_tax'];

      

          if($i==$n)
          {
             break;
          }      
        
        $i++;

      }

      $_SESSION["energy_charge_all"]= ($_SESSION["energy_charge"] +$t_c) * $unit; 
      $_SESSION["wheeling_charge_all"]= $_SESSION["wheeling_charge"] * $unit;
      $_SESSION["govt_tax_all"]= $_SESSION["govt_tax"] * $unit;

      $_SESSION["consumer_charge_all"]= $_SESSION["fixed_charge"] +  $_SESSION["wheeling_charge_all"]+ $_SESSION["energy_charge_all"];
      $_SESSION["govt_ed_all"]=(($_SESSION["consumer_charge_all"] * $_SESSION["govt_ed"])/100.0);

      $_SESSION["total_bill_all"]=  $_SESSION["govt_ed_all"] +  $_SESSION["govt_tax_all"] +$_SESSION["consumer_charge_all"];
  
      $_SESSION["calculate_11"]=2;   


  }



  if(($state==0) && ($provider==0) && ($tariff==0))
  {
    
    $table_name='adani_bpl';

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";     

  }

  if(($state==0) && ($provider==0) && ($tariff==1))
  {  
      $table_name='adani_residental';

      calculate_fun_unit($table_name,$conn,$unit);

      if($phase == 2)
      {
        $kw_c=0;
        $kw_c=($load/10)*145;
        $_SESSION["total_bill_all"]= $_SESSION["total_bill_all"] + 135+$kw_c;
      }
  
      echo "<script> location.href='calculate.php'; </script>";        
        
  }

  if(($state==0) && ($provider==0) && ($tariff==2))
  {
    $table_name='adani_commercial';
    $add_t_c='adani_time_charge';

    calculate_fun_kw($table_name,$add_t_c,$conn,$unit,$load,$start_time,$end_time);
    echo "<script> location.href='calculate.php'; </script>";     


  }
  
  if(($state==0) && ($provider==0) && ($tariff==3))
  {
    $table_name='adani_service'; 
    $add_t_c='adani_time_charge';   

    calculate_fun_kw($table_name,$add_t_c,$conn,$unit,$load,$start_time,$end_time);
    echo "<script> location.href='calculate.php'; </script>";
  }

  if(($state==0) && ($provider==0) && ($tariff==4))
  {
    
    $table_name='adani_agriculture';

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";     

  }
  
  if(($state==0) && ($provider==1) && ($tariff==0))
  {
    
    $table_name='best_bpl';

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";     

  }
  
  if(($state==0) && ($provider==1) && ($tariff==1))
  {
    
    $table_name='best_residental';

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";     

  }
  
  if(($state==0) && ($provider==1) && ($tariff==2))
  {
    
    $table_name='best_commercial'; 
    $add_t_c='best_time_charge';   

    calculate_fun_kw($table_name,$add_t_c,$conn,$unit,$load,$start_time,$end_time);
    echo "<script> location.href='calculate.php'; </script>";
  
  }
  
  if(($state==0) && ($provider==1) && ($tariff==3))
  {
    
    $table_name='best_service'; 
    $add_t_c='best_time_charge';   

    calculate_fun_kw($table_name,$add_t_c,$conn,$unit,$load,$start_time,$end_time);
    echo "<script> location.href='calculate.php'; </script>";
  
  }
  
  if(($state==0) && ($provider==1) && ($tariff==4))
  {
    $table_name='best_agriculture';

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";     

  }
  
  if(($state==0) && ($provider==2) && ($tariff==0))
  {
    $table_name='msedcl_bpl';

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";     

  }
  
  if(($state==0) && ($provider==2) && ($tariff==1))
  {
    $table_name='msedcl_residental';

    calculate_fun_unit($table_name,$conn,$unit);
    if($phase == 2)
    {      
      $_SESSION["total_bill_all"]= $_SESSION["total_bill_all"] + 238;
    }     

    echo "<script> location.href='calculate.php'; </script>";     

  }

  if(($state==0) && ($provider==2) && ($tariff==2))
  {
    
    $table_name='msedcl_commercial'; 
    $add_t_c='msedcl_time_charge';   

    calculate_fun_kw($table_name,$add_t_c,$conn,$unit,$load,$start_time,$end_time);
    echo "<script> location.href='calculate.php'; </script>";
  
  }
  
  if(($state==0) && ($provider==2) && ($tariff==3))
  {
    
    $table_name='msedcl_service'; 
    $add_t_c='msedcl_time_charge';   

    calculate_fun_kw($table_name,$add_t_c,$conn,$unit,$load,$start_time,$end_time);
    echo "<script> location.href='calculate.php'; </script>";
  
  }

  if(($state==0) && ($provider==2) && ($tariff==4))
  {
    $table_name='msedcl_agriculture';

    

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";

  }

  if(($state==1) && ($provider==0) && ($tariff==0))
  {
    $table_name='telangana_category_1';

    $n=0;
    if($unit <=50)
    {
      $n=1;
    }
    else if($unit >50)
    {
      $n=2;
    }
    

    $sql= "SELECT * FROM  $table_name ";
    $result =mysqli_query($conn,$sql);    
      
    $i=0;

     while($row =mysqli_fetch_assoc($result))
      {
     
      $_SESSION["fixed_charge"]=$row['fixed_charge'];
      $_SESSION["wheeling_charge"]=$row['wheeling_charge'];
      $_SESSION["energy_charge"]=$row['energy_charge'];
      $_SESSION["govt_ed"]=$row['govt_ed'];
      $_SESSION["govt_tax"]=$row['govt_tax'];

      

      //340 // 3*1
        if($i <$n)
        {
          if($i==0 && $unit<=50)
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * $unit;
            break;
          }
          if($i==0 && $unit>50)          
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * 50;            
          }

          if($i==1 && $unit >50)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 50) ) + $_SESSION["energy_charge_all"];
              break;
            }
          
        }
        $i++;
        
      }

      $_SESSION["wheeling_charge_all"]= $_SESSION["wheeling_charge"] * $unit;
      $_SESSION["govt_tax_all"]= $_SESSION["govt_tax"] * $unit;

      $_SESSION["consumer_charge_all"]= $_SESSION["fixed_charge"] +  $_SESSION["wheeling_charge_all"]+ $_SESSION["energy_charge_all"];
      $_SESSION["govt_ed_all"]=(($_SESSION["consumer_charge_all"] * $_SESSION["govt_ed"])/100.0);

      $_SESSION["total_bill_all"]= $_SESSION["govt_ed_all"] +  $_SESSION["govt_tax_all"] +$_SESSION["consumer_charge_all"];
  
      $_SESSION["calculate_11"]=2;
 

    echo "<script> location.href='calculate.php'; </script>";

  }

  if(($state==1) && ($provider==0) && ($tariff==1))
  {
    $table_name='telangana_category_2';

    $n=0;
    if($unit <=100)
    {
      $n=1;
    }
    else if($unit >100)
    {
      $n=2;
    }
    

    $sql= "SELECT * FROM  $table_name ";
    $result =mysqli_query($conn,$sql);    
      
    $i=0;

     while($row =mysqli_fetch_assoc($result))
      {
     
      $_SESSION["fixed_charge"]=$row['fixed_charge'];
      $_SESSION["wheeling_charge"]=$row['wheeling_charge'];
      $_SESSION["energy_charge"]=$row['energy_charge'];
      $_SESSION["govt_ed"]=$row['govt_ed'];
      $_SESSION["govt_tax"]=$row['govt_tax'];

      

      //340 // 3*1
        if($i <$n)
        {
          if($i==0 && $unit<=100)
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * $unit;
            break;
          }
          if($i==0 && $unit>100)          
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * 100;            
          }

          if($i==1 && $unit >100)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 100) ) + $_SESSION["energy_charge_all"];
              break;
            }
          
        }
        $i++;
        
      }

      $_SESSION["wheeling_charge_all"]= $_SESSION["wheeling_charge"] * $unit;
      $_SESSION["govt_tax_all"]= $_SESSION["govt_tax"] * $unit;

      $_SESSION["consumer_charge_all"]= $_SESSION["fixed_charge"] +  $_SESSION["wheeling_charge_all"]+ $_SESSION["energy_charge_all"];
      $_SESSION["govt_ed_all"]=(($_SESSION["consumer_charge_all"] * $_SESSION["govt_ed"])/100.0);

      $_SESSION["total_bill_all"]= $_SESSION["govt_ed_all"] +  $_SESSION["govt_tax_all"] +$_SESSION["consumer_charge_all"];
  
      $_SESSION["calculate_11"]=2;
 

    echo "<script> location.href='calculate.php'; </script>";

  }

  if(($state==1) && ($provider==0) && ($tariff==2))
  {
    $table_name='telangana_category_3';


    $n=0;

    if($unit <=200)
    {
      $n=1;
    }
    else if($unit <=300)
    {
      $n=2;
    }
    else if($unit <=400)
    {
      $n=3;
    }
    else if($unit <=800)
    {
      $n=4;
    }
    else
    {
      $n=5;
    } 

    $sql= "SELECT * FROM $table_name ";
    $result =mysqli_query($conn,$sql);
    
      
    $i=0;

     while($row =mysqli_fetch_assoc($result))
      {
     
      $_SESSION["fixed_charge"]=$row['fixed_charge'];
      $_SESSION["wheeling_charge"]=$row['wheeling_charge'];
      $_SESSION["energy_charge"]=$row['energy_charge'];
      $_SESSION["govt_ed"]=$row['govt_ed'];
      $_SESSION["govt_tax"]=$row['govt_tax'];

      

      //340 // 3*1
        if($i <$n)
        {
          if($i==0 && $unit<=200)
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * $unit;
            break;
          }
          if($i==0 && $unit>200)          
          {
            $_SESSION["energy_charge_all"]=$_SESSION["energy_charge"] * 200;            
          }


          if($i==1 && $unit<=300)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 200) ) + $_SESSION["energy_charge_all"];
              break;
            }
            if($i==1 && $unit>300)         
            {
              $_SESSION["energy_charge_all"]=($_SESSION["energy_charge"] * 100 ) + $_SESSION["energy_charge_all"] ;            
            }


            if($i==2 && $unit<=400)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 300) ) + $_SESSION["energy_charge_all"];
              break;
            }
            if($i==2 && $unit>400)
            {
              $_SESSION["energy_charge_all"]=($_SESSION["energy_charge"] * 100 ) + $_SESSION["energy_charge_all"] ;            
            }
            
            if($i==3 && $unit<=800)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 400) ) + $_SESSION["energy_charge_all"];
              break;
            }
            if($i==3 && $unit>800)
            {
              $_SESSION["energy_charge_all"]=($_SESSION["energy_charge"] * 400 ) + $_SESSION["energy_charge_all"] ;            
            }
            

            if($i==4 && $unit >800)
            {
              $_SESSION["energy_charge_all"]=( $_SESSION["energy_charge"] * ( $unit - 800) ) + $_SESSION["energy_charge_all"];
              break;
            }
          
          
        }
        $i++;
        
      }

      $_SESSION["wheeling_charge_all"]= $_SESSION["wheeling_charge"] * $unit;
      $_SESSION["govt_tax_all"]= $_SESSION["govt_tax"] * $unit;

      $_SESSION["consumer_charge_all"]= $_SESSION["fixed_charge"] +  $_SESSION["wheeling_charge_all"]+ $_SESSION["energy_charge_all"];
      $_SESSION["govt_ed_all"]=(($_SESSION["consumer_charge_all"] * $_SESSION["govt_ed"])/100.0);

      $_SESSION["total_bill_all"]=  $_SESSION["govt_ed_all"] +  $_SESSION["govt_tax_all"] +$_SESSION["consumer_charge_all"];
  
      $_SESSION["calculate_11"]=2;
 
    echo "<script> location.href='calculate.php'; </script>";

  }

  if(($state==1) && ($provider==0) && ($tariff==3))
  {
    $table_name='telangana_commercial';

    calculate_fun_unit($table_name,$conn,$unit);     

    echo "<script> location.href='calculate.php'; </script>";

  }

?>
</body>
</html>