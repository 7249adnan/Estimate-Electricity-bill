<?php
// Start the session
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</style>
</head>
<body>

<?php 



$num=$_SESSION["mobile_number"];

$otp=$_SESSION["otp_gen"]." is Your Estimate Electricity Bill Verification Code.";

$fields = array(
    "sender_id" => "TXTIND",
    "message" =>$otp,
    "route" => "v3",
    "numbers" => $num,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: eglh0Q5CWMrv3cptuxAVj9oXnR62YLdIzGTSPayOiDKU7NwHJ4SvRhZ5Y9QNngzHUBLC62as8yJWlwGk",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 // echo $response;
}
$_SESSION["flag_msg"]=1;
echo "<script> location.href='signup.php'; </script>";        
      

?>

</body>