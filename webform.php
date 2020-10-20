<?php
if(isset($_POST['submit'])){
    if(isset($_POST['email']) && $_POST['email'] != ''){
        //submit form
        if((filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userAddress = $_POST['address'];
            $userCity = $_POST['city'];
            $userState = $_POST['state'];
            $userZip = $_POST['zip'];
            $userOrder = $_POST['order'];
            $submit = $_POST['submit'];
            $to = "orders@kosnacks.com";
        
            $messageSubject = "Message from: ".$userName;
            $body = "";
        
            $body .= "Name: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Address: ".$userAddress. "\r\n";
            $body .= "City: ".$userCity. "\r\n";
            $body .= "State: ".$userState. "\r\n";
            $body .= "Zip: ".$userZip. "\r\n";
            $body .= "Order: ".$userOrder. "\r\n";

            $headers = "From: ".$userName;
            mail($to, $messageSubject, $body, $headers);
        }
    }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Knockout Snacks -  Home of the Cosmic Pebbles</title>
    <meta name="Knockout Snacks - Home of the Cosmic Pebbles" content="Knockout Snacks">
    <meta name="Emmanuel Perez" content="Knockout Snacks">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' >
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <section id="thanks-page">
        <div class="thanks-wrapper">
            <h1>Thank you for contacting us. We'll be in touch shortly.</h1>
        </div>
    </section>
</body>
