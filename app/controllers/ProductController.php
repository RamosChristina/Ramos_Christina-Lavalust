<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function before_action()
    {
        $this->call->library('database');
        $this->call->model('ProductModel');
    }

    // READ - list all products
    public function index()
    {
        $data['products'] = $this->ProductModel->all();
        $this->call->view('products_view', $data);
    }

    // CREATE - show blank form
    public function create()
    {
        $this->call->view('products_create');
    }

    // CREATE - save new product
    public function store()
    {
        $data = [
            'product_name' => $this->request->post('product_name'),
            'description'  => $this->request->post('description'),
            'price'        => $this->request->post('price'),
            'quantity'     => $this->request->post('quantity'),
        ];

        $this->ProductModel->insert($data);
        $this->response->redirect_after_post('/products');
    }

    // UPDATE - show edit form with existing data
    public function edit($id)
    {
        $data['product'] = $this->ProductModel->find($id);
        $this->call->view('products_edit', $data);
    }

    // UPDATE - save changes
    public function update($id)
    {
        $data = [
            'product_name' => $this->request->post('product_name'),
            'description'  => $this->request->post('description'),
            'price'        => $this->request->post('price'),
            'quantity'     => $this->request->post('quantity'),
        ];

        $this->ProductModel->update($id, $data);
        $this->response->redirect_after_post('/products');
    }

    // DELETE
    public function delete($id)
    {
        $this->ProductModel->delete($id);
        $this->response->redirect_after_post('/products');
    }
}