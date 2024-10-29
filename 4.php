<?php
// 4.php
session_start();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

echo "Страница 3 была открыта " . $_SESSION['count'] . " раз.";
?>
