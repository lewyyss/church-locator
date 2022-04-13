<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <link rel="stylesheet" href="/faqs.css">
    <title>FAQS</title>
</head>
<body>

  <img src="IMAGES/istockphoto-1282155335-170667a.jpg" alt="" class="logo"  width="auto" height="auto">
<!--Section: FAQ-->
<div class="container">
<?php
        session_start();
         if(isset($_SESSION['success'])){
             echo '<p class="success">'.$_SESSION['success'].'</p>';
             unset($_SESSION['success']);
         }
            if(isset($_SESSION['error'])){
                echo '<p class="error">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }
    ?>

<form action="fsave.php" method="POST">

<label for="subject">subject</label>
<input type="text" name="subject" id="subject" required> <br>


<label for="message">Message</label>
<input type="text" name="message" id="message" required> <br>

<button type="submit">SEND</button>
</form>
</div>
</body>
</html>