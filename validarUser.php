<?php
    session_start();
    $tokensimulado="0133jdcr-12345678901234567890-2";
    echo $user." ".$password. "  ".$token;
    $user = $_POST['user'];
    $password =$_POST['pssw'];
    $token = $_POST['token'];
    if($token==$tokensimulado && $password=="123123"){
        header("Location: http://localhost/codingchallenge/");
        $_SESSION['TOKEN'] = $token;
   }else{
    header("Location: http://localhost:3000/");
   }





?>
