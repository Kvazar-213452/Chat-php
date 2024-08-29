<?php
$filename = 'messages.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $message = htmlspecialchars($_POST['message']);
    
    $newMessage = "<p><strong>{$username}:</strong> {$message}</p>\n";
    
    file_put_contents($filename, $newMessage, FILE_APPEND);
}

if (file_exists($filename)) {
    echo file_get_contents($filename);
}
?>