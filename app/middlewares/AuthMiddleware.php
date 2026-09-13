<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle(Closure $next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!empty($_SESSION['auth_user_id'])) {
            return $next();
        }

        $_SESSION['auth_error'] = 'Please log in to access that page.';
        header('Location: ' . site_url('login'));
        exit;
    }
}