<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!empty($_SESSION['cr_profile_access'])) {
            return $next();
        }

        $_SESSION['cr_access_message'] = 'Access denied: please visit the Student Home page first before viewing the profile.';
        header('Location: ' . site_url('student'));
        exit;
    }
}