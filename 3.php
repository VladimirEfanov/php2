
<?php
// 3.php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

$_SESSION['count']++;

if ($_SESSION['count'] % 3 == 0) {
    header('Location: 4.php');
    exit;
}

echo "Страница 3 была открыта " . $_SESSION['count'] . " раз.";
?>
