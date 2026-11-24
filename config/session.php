<?php
require_once __DIR__ . '/compat.php';

if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.use_strict_mode', '1');
    ini_set('session.use_only_cookies', '1');
    ini_set('session.use_trans_sid', '0');

    $httpsValue = strtolower((string) ($_SERVER['HTTPS'] ?? ''));
    $isHttps = ($httpsValue !== ''
        && $httpsValue !== 'off'
        && $httpsValue !== '0')
        || strtolower((string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '')) === 'https';

    session_name('STUDYCIRCLE_SESSION');

    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => $isHttps,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    session_start();
}