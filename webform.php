<?php
    if(isset($_POST['email']) && $_POST['email'] != ''){
        //submit form
        if((filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userAddress = $_POST['address'];
            $userCity = $_POST['city'];
            $userState = $_POST['state'];
            $userZip = $_POST['zip'];
            $userOrder = $_POST['order'];
        
            $to = "orders@kosnacks.com";
        
            $messageSubject =. "New message from: ".$userName.;
            $body = "";
        
            $body .= "Name: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Address: ".$userAddress. "\r\n";
            $body .= "City: ".$userCity. "\r\n";
            $body .= "State: ".$userState. "\r\n";
            $body .= "Zip: ".$userZip. "\r\n";
            $body .= "Order: ".$userName. "\r\n";
        
            mail($to,$messageSubject,$body)
        }
    }
?>