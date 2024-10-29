<?php
// 2.php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    $filename = "saved_text.txt";

    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo $text;
    exit;
} else {
    echo "Не передан параметр text.";
}
?>
