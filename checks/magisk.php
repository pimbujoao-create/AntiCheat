<?php
$paths = [
    "/data/adb/magisk",
    "/data/adb/modules"
];

$found = false;
foreach ($paths as $p) {
    if (file_exists($p)) {
        $found = true;
        break;
    }
}

return [
    "name" => "Magisk",
    "detected" => $found,
    "score" => $found ? 3 : 0
];
