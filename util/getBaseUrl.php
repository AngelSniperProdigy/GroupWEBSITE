<?php
function getBaseUrl()
{
    // Get the protocol (HTTP or HTTPS)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http';

    // Get the server name (e.g., www.example.com)
    $serverName = $_SERVER['HTTP_HOST'];

    // Get the base URL (protocol + server name)
    $baseUrl = $protocol . '://' . $serverName;

    // Return the base URL
    return rtrim($baseUrl, '/');
}
?>