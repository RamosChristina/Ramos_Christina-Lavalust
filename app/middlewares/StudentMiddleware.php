<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * StudentMiddleware
 *
 * Access condition: a visitor is only allowed into the profile page
 * after they have first loaded the Student Home page (/student), which
 * sets $_SESSION['cr_profile_access'] = true. If that flag isn't set,
 * the request never reaches the controller — it gets redirected back
 * to /student with a short notice instead.
 */
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