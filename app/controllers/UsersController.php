<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller
{
    public function before_action()
    {
        $this->call->library('database');
        $this->call->model('UsersModel');
    }

    // READ - list all users
    public function index()
    {
        $data['users'] = $this->UsersModel->all();
        $this->call->view('users_view', $data);
    }

    // CREATE - show blank form
    public function create()
    {
        $this->call->view('users_create');
    }

    // CREATE - save new user
    public function store()
    {
        $password = $this->request->post('password');
        $confirm_password = $this->request->post('confirm_password');

        if ($password !== $confirm_password) {
            $data['error'] = 'Passwords do not match.';
            $this->call->view('users_create', $data);
            return;
        }

        $data = [
            'username' => $this->request->post('username'),
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $this->UsersModel->insert($data);
        $this->response->redirect_after_post('/users');
    }

    // UPDATE - show edit form with existing data
    public function edit($id)
    {
        $data['user'] = $this->UsersModel->find($id);
        $this->call->view('users_edit', $data);
    }

    // UPDATE - save changes
    public function update($id)
    {
        $password = $this->request->post('password');
        $confirm_password = $this->request->post('confirm_password');

        if (!empty($password) && $password !== $confirm_password) {
            $data['user'] = $this->UsersModel->find($id);
            $data['error'] = 'Passwords do not match.';
            $this->call->view('users_edit', $data);
            return;
        }

        $data = [
            'username' => $this->request->post('username'),
        ];

        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $this->UsersModel->update($id, $data);
        $this->response->redirect_after_post('/users');
    }

    // DELETE
    public function delete($id)
    {
        $this->UsersModel->delete($id);
        $this->response->redirect_after_post('/users');
    }
}