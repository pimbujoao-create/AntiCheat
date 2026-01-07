<?php
$badApps = [
    "com.gameguardian",
    "com.luckypatcher"
];

$list = shell_exec("pm list packages");
$found = false;

foreach ($badApps as $app) {
    if (strpos($list, $app) !== false) {
        $found = true;
        break;
    }
}

return [
    "name" => "Apps de Cheat",
    "detected" => $found,
    "score" => $found ? 2 : 0
];
