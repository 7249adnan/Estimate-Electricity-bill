<?php 

session_start();

?>

<!DOCTYPE html>
<html>
  
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
  <title>Email Verification - Estimation</title>
  <script src="https://smtpjs.com/v3/smtp.js">
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

</head>
  
<body id="bd1">

<p id="header"></p>

<?php
$php_email = $_SESSION["php_email_textbox"]; //Define our PHP variable. You can of course get the value of this variable however you need.
$php_mobile=$_SESSION["mobile_number"];
$php_password= $_SESSION["php_confirm_textbox"];



?>

  <script type="text/javascript">
 
   
        var email_value="<?php echo $php_email; ?>";
        var mobile_value="<?php echo $php_mobile; ?>";
        var password_value="<?php echo $php_password; ?>";

        var url_link="https://estimateelectricitybill.epizy.com/url_link.php?number="+mobile_value+"&password="+password_value+"&email="+email_value;

        Email.send({
    Host : "smtp.gmail.com",
    Username : "estimatebill.ilogic@gmail.com",
    Password : "wdaybykayylywgyu",
    To : email_value,
    From : "estimatebill.ilogic@gmail.com",
    Subject : " Verification link from EstimateBill",
    Body : '<h3 style="color:black"; ><b>Verification</b></h3><h5 style="color: #4bb7ff " >Click below button to verify your email id and You can analysis your bills  </h5>  <button type="submit" style="background-color: #ddd;  border: none;  color: black;  padding: 16px 32px;  text-align: center;  font-size: 16px;  margin: 4px 2px;  transition: 0.1s;" value="Submit" ><a href='+url_link+'><b> Click to Verify</b></a></button>'
}).then(
  message => alert(" Verification Link is sended to your gmail Id check it out and click on it. ")
);   

  </script>

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


  
<br><br>

<form id="form1"  method ="POST"  class=" container-fluid col-sm-4  ">
<br>
 <p id="head_bg"><i class="fa fa-check"></i>&nbsp Verification  &nbsp</p>
<br>  

<label id="lbl" for="Email ID" class="form-label"> Verification Link has been sended to your E-mail Id check it out. <br> You can Analysis your Bill and also you can save.   </label>
                    
<br><br>

</form>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<br><br>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>

<footer class="container">
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