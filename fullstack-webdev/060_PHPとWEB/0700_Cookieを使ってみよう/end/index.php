<?php 
setcookie('VISIT_COUNT', 1, [
    'expires' => time() + 60 * 60 * 24 * 30,
    'path' => '/'
]);

var_dump($_COOKIE['VISIT_COUNT']);
