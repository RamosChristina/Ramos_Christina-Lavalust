<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function before_action()
    {
        $this->call->library('database');
        $this->call->model('UsersModel');

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Show login form
    public function login()
    {
        $data['error'] = $_SESSION['auth_error'] ?? null;
        unset($_SESSION['auth_error']);
        $this->call->view('login', $data);
    }

    // Process login
    public function authenticate()
    {
        $username = $this->request->post('username');
        $password = $this->request->post('password');

        $user = $this->UsersModel->find_by('username', $username);

        if (!$user || !password_verify($password, $user['password'])) {
            $_SESSION['auth_error'] = 'Invalid username or password.';
            $this->response->redirect_after_post('/login');
            return;
        }

        $_SESSION['auth_user_id']  = $user['id'];
        $_SESSION['auth_username'] = $user['username'];

        $this->response->redirect_after_post('/products');
    }

    // Logout
    public function logout()
    {
        session_unset();
        session_destroy();
        $this->response->redirect_after_post('/login');
    }
}