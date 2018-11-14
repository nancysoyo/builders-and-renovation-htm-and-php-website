<?php
if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $emailFrom= $_POST["email"];
    $phone= $_POST["phone"];
    $comment= $_POST["comment"];

    $to =" soyonancy@gmail.com";
    $subject = "form submition";
    $message = "Name: ".$name.".\n"."Phone:".$phone."\n"."wrote the following:"."\n\n".$comment;
    $headers="From:" .$email;

    if(mail($to, $subject, $message, $headers)){  
    echo"<h1>Message was sent successfully! Thank you"." ".$name.",We will contact you shortly!<h1>";
    }
    else{
        echo"something went wrong";
    }
}

?>