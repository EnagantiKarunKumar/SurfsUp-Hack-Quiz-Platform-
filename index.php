<?php
    session_start();
    if(!$_SESSION['auth']){
        #echo "Unauthorised user";
        header('location:student-login.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>CONFORMATION-PAGE</title>
</head>
<body>
    <div class="login_box">
        <div class="login-type"><span>HELLO  YOU CAN START THE QUIZ</span></div>
        
           
        
        <div class="buttons">
            <button class="teacher">Start</button>
            
        </div>
    </div>
</body>
</html>