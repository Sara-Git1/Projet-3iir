<?php

$emailErrorMsg=" ";
$passwordErrorMsg=" ";

if(isset($_POST["submit"])){

    $emailValue = $_POST["emailName"];
    $passwordValue = $_POST["passName"];

    if($emailValue == ""){
        $emailErrorMsg= " email must be filled";
    }
    else if (preg_match("/\w+(@emsi.ma){1}$/",$emailValue)==0){
        $emailErrorMsg= " enter a valid email";
    }
    else if ($passwordValue == " "){
        $passwordErrorMsg= "password must be filled";
    }
    else {
        session_start();
        $_SESSION["emailS"] = $emailValue;
        $_SESSION["passS"]= $passwordValue;
        header ("Location:home2.php");
    }
}
?>