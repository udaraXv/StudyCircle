<?php
/*
 * Compatibility + environment helpers.
 * Works on local WAMP and on free shared hosting (InfinityFree).
 */

if (!function_exists('app_is_local')) {
    function app_is_local() {
        $host = strtolower((string) ($_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? ''));
        $host = preg_replace('/:\d+$/', '', $host);

        return $host === 'localhost'
            || $host === '127.0.0.1'
            || $host === '::1'
            || substr($host, -6) === '.local'
            || substr($host, -5) === '.test';
    }
}

date_default_timezone_set('Asia/Colombo');

// Never print PHP warnings/stack traces to visitors on the live site.
if (!app_is_local()) {
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
    ini_set('log_errors', '1');
}

/* ---- mbstring fallbacks (used only if the extension is missing) ---- */
if (!function_exists('mb_strlen')) {
    function mb_strlen($s, $enc = null) {
        $s = (string) $s;
        if (preg_match_all('/./su', $s, $m) !== false) {
            return count($m[0]);
        }
        return strlen($s);
    }
}

if (!function_exists('mb_substr')) {
    function mb_substr($s, $start, $length = null, $enc = null) {
        $s = (string) $s;
        if (preg_match_all('/./su', $s, $m) === false) {
            return $length === null ? substr($s, $start) : substr($s, $start, $length);
        }
        return implode('', $length === null
            ? array_slice($m[0], $start)
            : array_slice($m[0], $start, $length));
    }
}

if (!function_exists('mb_strtoupper')) {
    function mb_strtoupper($s, $enc = null) {
        return strtoupper((string) $s);
    }
}

if (!function_exists('mb_check_encoding')) {
    function mb_check_encoding($s = null, $enc = null) {
        return (bool) preg_match('//u', (string) $s);
    }
}

/* ---- MIME detection that works even if Fileinfo is disabled ---- */
if (!function_exists('detect_pdf_mime')) {
    function detect_pdf_mime($path) {
        if (class_exists('finfo')) {
            $mime = (new finfo(FILEINFO_MIME_TYPE))->file($path);
            if (is_string($mime) && $mime !== '') {
                return $mime;
            }
        }

        $head = @file_get_contents($path, false, null, 0, 5);

        return $head === '%PDF-' ? 'application/pdf' : 'application/octet-stream';
    }
}
