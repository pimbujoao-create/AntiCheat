<?php
$root = shell_exec("which su");

return [
    "name" => "Root",
    "detected" => !empty($root),
    "score" => !empty($root) ? 3 : 0
];
