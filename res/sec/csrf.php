<?php

/*
 * CSRF Protection
 * Versione: 1.0.0
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Genera e restituisce il token CSRF della sessione.
 */
function csrf_token(): string
{
    if (empty($_SESSION["_csrf_token"])) {
        $_SESSION["_csrf_token"] = bin2hex(random_bytes(32));
    }

    return $_SESSION["_csrf_token"];
}

/**
 * Restituisce il campo HTML hidden da inserire nei form.
 */
function csrf_field(): string
{
    return '<input type="hidden" name="_csrf_token" value="' .
        htmlspecialchars(csrf_token(), ENT_QUOTES, "UTF-8") .
        '">';
}

/**
 * Verifica il token CSRF inviato.
 *
 * @return bool
 */
function csrf_check(): bool
{
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        return true;
    }

    $token = $_POST["_csrf_token"] ?? "";

    if (
        empty($token) ||
        empty($_SESSION["_csrf_token"]) ||
        !hash_equals($_SESSION["_csrf_token"], $token)
    ) {
        return false;
    }

    return true;
}

/**
 * Verifica il token e interrompe la richiesta
 * se non è valido.
 */
function csrf_protect(): void
{
    if (!csrf_check()) {
        http_response_code(403);

        exit("CSRF token non valido.");
    }
}
