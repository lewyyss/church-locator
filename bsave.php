<?php
 require_once 'bconnect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $service = $_POST['service'];
    try {
     $stmt = $db->prepare("INSERT INTO book(name,service) VALUES (?,?)");
    $stmt->execute([$name,$service]);
    $_SESSION['success'] = 'BOOKED SUCCESSFULLY!!!!!';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('Location: book.php');
