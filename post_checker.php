<?php
$email = $_POST['email'];

if(emailValidation($email)){
    echo "email address <span style='color: green'>valid</span>";
}
else{
    echo "email address <span style='color: red'>NOT valid</span>";
}
function emailValidation($email){
    $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email){
        return false;
    }
    else{
        return true;
    }
}