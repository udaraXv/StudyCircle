<?php
require_once __DIR__ . '/compat.php';

/*
 * Where uploaded PDFs are kept.
 *  - Local WAMP: a folder outside www (as before).
 *  - InfinityFree: you cannot write outside htdocs, so we use
 *    htdocs/private_uploads/ and block web access with .htaccess.
 *    The PDFs are only ever served through download_material.php.
 */
if (app_is_local()) {
    $storageDirectory = 'C:/wamp64/studycircle_private';
} else {
    $storageDirectory = dirname(__DIR__) . '/private_uploads';
}

if (!is_dir($storageDirectory)) {
    @mkdir($storageDirectory, 0755, true);
}

if (is_dir($storageDirectory) && !is_file($storageDirectory . '/.htaccess')) {
    @file_put_contents(
        $storageDirectory . '/.htaccess',
        "<IfModule mod_authz_core.c>\n    Require all denied\n</IfModule>\n"
        . "<IfModule !mod_authz_core.c>\n    Order allow,deny\n    Deny from all\n</IfModule>\n"
    );
    @file_put_contents($storageDirectory . '/index.html', '');
}
