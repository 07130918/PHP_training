<?php
session_start();

if (
    isset($_POST['username'])
    && isset($_POST['pwd'])
    && $_POST['username'] === 'test'
    && $_POST['pwd'] === 'pwd'
) {
    // ログインOK
    $_SESSION['user'] = [
        'name' => $_POST['username'],
        'pwd' => $_POST['pwd']
    ];
}

if(!empty($_SESSION['user'])) {
    echo 'ログイン中です。';
} else {
    echo 'ログインしていません。';
}