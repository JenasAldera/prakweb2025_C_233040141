<?php

class User extends Controller {
    public function index() {
        $data['judul'] = 'Daftar User';
        $data['user'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('user/list', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail User';
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if ($this->model('User_model')->tambahUser($_POST) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function hapus($id) {
        if ($this->model('User_model')->hapusUser($id) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function edit($id) {
        $data['judul'] = 'Edit User';
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('user/edit', $data);
        $this->view('templates/footer');
    }

    public function update() {
        if ($this->model('User_model')->ubahUser($_POST) > 0) {
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }
}
