<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username == 'DaoTuanNam' && $password == '02988') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    header('Location: login.php?error=1');
    exit;
}
?>