<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo ="maulana22002@mail.unpad.ac.id";
    $headers = "From: ".$mailfrom;
    $txt = "Anda mendapatkan email dari ".$name.".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location :Location: contact.php?mailsend");
}
?>