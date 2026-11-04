<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$pageTitle = 'Welcome';
include 'header.inc';
?>
  <main>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
  </main>
<?php include 'footer.inc'; ?>