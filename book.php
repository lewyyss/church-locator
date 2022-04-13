<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
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
    <img src="IMAGES/samuel-martins-3U7HcqkIbb4-unsplash.jpg" alt="" srcset="">
    <form action="bsave.php" method="POST">
        <label for="name">Name of the church</label>
        <input type="text" name="name" id="name" required>  <br> <br>
        
        
        <label for="branch">Side</label>
        <input type="text" name="side " id="side"> <br> <br>
        
        
        <label for="service">Service</label>
        <select name="service" id="servicee">
            <option value=""></option>
            <option value="1service">1st service</option>
            <option value="2service">2nd service</option>
            <option value="3service">3rd service</option>
        </select>


        <button type="submit">Book</button>
    </form>
    </div>
</body>
</html>