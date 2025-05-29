<?php
// === QR registrace skript ===

// Soubor pro logování
$logfile = "a877689b461.txt";

// Získání ID z URL
$id = isset($_GET['id']) ? preg_replace('/[^a-zA-Z0-9]/', '', $_GET['id']) : '';
$time = date('Y-m-d H:i:s');

if ($id === '') {
    http_response_code(400);
    echo "Chyba: Neplatné ID.";
    exit;
}

// Záznam do souboru
$entry = "$time;$id\n";
file_put_contents($logfile, $entry, FILE_APPEND | LOCK_EX);

// Potvrzovací stránka
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Potvrzení účasti</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 20vh; }
        h1 { color: #2e7d32; }
    </style>
</head>
<body>
    <h1>Děkujeme za potvrzení účasti</h1>
    <p>Těšíme se na viděnou<br>17. června 2025 v Praze</p>
</body>
</html>
