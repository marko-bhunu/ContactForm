<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mailedfrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailedTo ="test.email@kaributechs.com";
    $headers ="From: ".$mailedfrom;
    $txt = "You have received an email from " .$name.".\n\n".$message;

    mail($mailedTo, $headers, $txt );
    header("Location: index.html?mailsent");
}
