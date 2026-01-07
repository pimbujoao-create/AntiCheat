<?php
$bad = ["frida", "xposed"];
$ps = shell_exec("ps");
$found = false;

foreach ($bad as $proc) {
    if (stripos($ps, $proc) !== false) {
        $found = true;
        break;
    }
}

return [
    "name" => "Injeção de Código",
    "detected" => $found,
    "score" => $found ? 4 : 0
];
