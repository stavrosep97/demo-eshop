<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

       
        echo"<script type = 'text/javascript'> alert('Email Sent') </script>";
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="design.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class ="kommati">
    <?php include('header.php'); ?>
    <form class="contact_form" action="contact.php" method="post">
        <p>SEND E-MAIL</p>
        <br>
        <input type="text" class="name" name="name" placeholder="FullName">
        <br>
        <input type="text" class="mail" name="mail" placeholder="Your Email">
        <br>
        <input type="text" class="subject" name="subject" placeholder="Subject">
        <br>
        <textarea class="textarea" name="message" placeholder="Message"></textarea>
        <br>
        <button class="btn" type="submit" name="submit">SEND MAIL</button>
    </form>
    </div>
    <?php include('footer.php'); ?>
</body>
</html> 