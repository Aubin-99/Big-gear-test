<?php
function sendMessageContact($db){

    $email_address = htmlspecialchars(trim($_POST['email_address']));
    $message_text = htmlspecialchars(trim($_POST['message_text']));
    $req = $db->prepare(
        'INSERT INTO message_contact(email_address, message_text) 
            VALUES (:email_address, :message_text)');
    $req->execute(array(
        'email_address' => $email_address,
        'message_text' => $message_text
    ));
    return $req;
}