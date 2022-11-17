<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use config\Services;

class Dosen extends BaseController
{
    protected $model;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->model = new DosenModel();
    }
    public function index()
    {
        $data = [
            'dosen' => $this->model->findAll()
        ];
        return view('dosen/index', $data);
    }
    public function create()
    {
        return view('dosen/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $data = array(
            'nama_dosen'     => $this->request->getPost('nama_dosen'),
            'alamat'     => $this->request->getPost('alamat'),
            'no_telepon'     => $this->request->getPost('no_telepon'),
            'status'     => $this->request->getPost('status'),
        );

        if ($validation->run($data, 'dosen') == FALSE) {
            session()->setFlashdata('input', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('dosen/create'));
        } else {
            $simpan = $this->model->db->table('dosen')->insert($data);
            if ($simpan) {
                session()->setFlashdata('success', 'Created Dosen successfully');
                return redirect()->to(base_url('dosen'));
            }
        }
    }
    public function edit($id)
    {
        $data['dosen'] = $this->model->find($id);
        echo view('dosen/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id_dosen');
        $validation = \Config\Services::validation();

        $data = array(
            'nama_dosen'     => $this->request->getPost('nama_dosen'),
            'alamat'     => $this->request->getPost('alamat'),
            'no_telepon'     => $this->request->getPost('no_telepon'),
            'status'     => $this->request->getPost('status'),
        );

        if ($validation->run($data, 'dosen') == FALSE) {
            session()->setFlashdata('input', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('dosen/edit/' . $id));
        } else {
            $ubah = $this->model->db->table('dosen')->update($data, ['id_dosen' => $id]);
            if ($ubah) {
                session()->setFlashdata('info', 'Updated Dosen');
                return redirect()->to(base_url('Dosen'));
            }
        }
    }

    public function delete($id)
    {
        $hapus = $this->model->db->table('dosen')->delete(['id_dosen' => $id]);
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted Dosen Succesfully');
            return redirect()->to(base_url('Dosen'));
        }
    }
}