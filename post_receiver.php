<?php

require_once 'C:\wamp\www\alspok\PHPMail\sendmail.php';

$emailData = $_POST;
echo "<pre>";
echo 'I was in post_receiver.php' . '<br>';
    print_r($emailData);
echo "</pre>";


if(_sendMail($emailData))  echo "<p style='color: green'>Mail has been sent</p>";
    else echo "<p style='color: red'>Mail sent failed</p>" . '<p>';

if(archiveMail($mailData))
    echo "<p style='color: green'>Mail has been archieved</p>";
else echo "<p style='color: red'>Mail archived failed</p>";

function _sendMail($emailData){

    return true;
}

function archiveMail($mailData){

    $hostName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'db_alspok';
    $tblName = 'mail_archive';

    $conn = new MySQLI($hostName, $userName, $password, $dbName);
    var_dump($conn);
    $queryString = 'INSERT INTO ' . $tblName . '(email, subject, message) VALUES (?, ?, ?)';
    $stmt = $conn->prepare($queryString);
    $stmt->bind_param('sss', $emailData['email'], $emailData['subject'], $emailData['message']);
    if($stmt->execute()){
        $stmt->close();
        return true;
    } 
    else{
        $stmt->close;
        return false;
    }
}

