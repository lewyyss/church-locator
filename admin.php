<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Admin</title>
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="lview.php">View logins</a>
        <a href="fview.php">view faqs</a>
        <a href="sview.php">view signin</a>
        <a href="bview.php">view booking</a>


    </nav>
    <h1>All Messages</h1>
    <?php
     require_once 'connect.php';
     $stmt = $db->query('SELECT * FROM christian');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Email</th>';
        echo '<th>Message</th>';
        echo '<th>Actions</th>';
        echo '</tr>';
     foreach($feedbacks as $feedback){
            echo '<tr>';
            echo '<td>'.$feedback['name'].'</td>';
            echo '<td>'.$feedback['email'].'</td>';
            echo '<td>'.$feedback['message'].'</td>';
            echo '<td><a href="delete.php?id='.$feedback['id'].'">Delete</a> <a href="edit.php?id='.$feedback['id'].'">Edit</a> </td>'; 
            echo '</tr>';
     }
     echo '</table>';


    ?>
    <script src="./JS/signin.js"></script>

    
</body>
</html>