<?php
var_dump($_POST);
echo "<div class='response'> Here is response: " . $_POST['email'] . " " . $_POST['subject'] . "</div>";

// if(emailValidation($email)) echo 'email address valid';
//     else echo 'email address NOT valid';

// function emailValidation($email){
//     $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
//     if (filter_var($emailB, FILTER_VALIDATE_EMAIL) === false || $emailB != $email){
//         echo 'email adress is not valid!';
//         return false;
//     }
//     else return true;
// }