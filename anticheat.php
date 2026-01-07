<?php
$config = require "config.php";
$checks = glob("checks/*.php");

$total = 0;
$detected = [];

echo "===============================\n";
echo " FREE FIRE ANTI-CHEAT\n";
echo "===============================\n\n";

foreach ($checks as $file) {
    $result = require $file;
    $total += $result["score"];

    if ($result["detected"]) {
        $detected[] = $result["name"];
        echo "[✗] {$result["name"]} DETECTADO\n";
    } else {
        echo "[✓] {$result["name"]} OK\n";
    }
}

echo "\nSCORE FINAL: $total\n";

if ($total >= $config["score_limit"]) {
    echo "STATUS FINAL: ❌ CHEAT CONFIRMADO\n";
    echo "MOTIVOS:\n";
    foreach ($detected as $d) {
        echo "- $d\n";
    }
} else {
    echo "STATUS FINAL: ✅ CLIENTE LIMPO\n";
}
