<?php
$adb = trim(shell_exec("settings get global adb_enabled"));

return [
    "name" => "ADB Ativo",
    "detected" => $adb === "1",
    "score" => $adb === "1" ? 1 : 0
];
