<?php
$emailData = $_POST;
echo "<pre>";
echo 'I was in post_receiver.php' . '<br>';
    print_r($emailData);
echo "</pre>";

$hostName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'db_alspok';
$tblName = 'mail_archive';

$sendBoolen = sendMail($emailData);
if($sendBoolen) echo "<p style='color: green'>Mail has been sent</p>";
    else echo "<p style='color: red'>Mail sent failed</p>" . '<p>';
$archiveBoolen = archiveMail($emailData, $hostName, $userName, $password, $dbName, $tblName);
if($archiveBoolen) echo "<p style='color: green'>Mail has been archieved</p>";
    else echo "<p style='color: red'>Mail archived failed</p>";

function sendMail($emailData){

    return true;
}

function archiveMail($emailData, $hostName, $userName, $password, $dbName, $tblName){

    $conn = new MySQLI($hostName, $userName, $password, $dbName);
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

