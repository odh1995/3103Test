<?php

$passwordErr ="";

$data = fopen('10-million-password-list-top-1000000.txt','r');
echo $data;

if ( ! isset( $_POST['submitted'] ) )
{
    foreach($data as $line_num=>$line)
    {
        if($password == $line){
            $passwordErr = "Common Password not allow!";
        }
    }

    if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
    }
    elseif(!empty($_POST["password"])) {
        $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
    } else {
         $passwordErr = "Please enter password   ";
    }
    echo $passwordErr;
}
header('Location: ' . $_SERVER['HTTP_REFERER']);


session_start();

exit();
