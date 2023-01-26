<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatModel;

class Obat extends BaseController
{

    protected $ObatModel;

    public function __construct()
    {
        helper('form');
        $this->ObatModel = new ObatModel();
    }

    public function index()
    {

        // pagination
        $paginate = 5;
        $nomor = $this->request->getGet('page_product');
        if ($nomor = null) {
            $nomor = 1;
        }
        // search data
        $keyword = $this->request->getGet('keyword');
        $jenisObat = $this->request->getGet('jenis');
        $status = $this->request->getGet('status');

        $where = [];
        $like = [];
        $orLike = [];

        if ($jenisObat) {
            $where += [
                'jenis_obat' => $jenisObat
            ];
        }
        if ($status) {
            $where += [
                'status_obat' => $status
            ];
        }
        if ($keyword) {
            $like = ['nama_obat' => $keyword];
            $orLike = [
                'deskripsi_obat' => $keyword,
                'dosis_obat' => $keyword,
            ];
        }
        $data = [
            'title' => 'Obat',
            'obat' => $this->ObatModel->where($where)->like($like)->orLike($orLike)->paginate($paginate),
            'keyword' => $keyword,
            'jenis' => $jenisObat,
            'status' => $status,

            'pager' => $this->ObatModel->pager,
            'nomor' => ($nomor - 1) * $paginate,

        ];
        return view('obat/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Obat',
            'validation' => \Config\Services::validation()
        ];
        return view('obat/create', $data);
    }

    public function store()
    {
        if (!$this->validate($this->ObatModel->getValidationRules(), $this->ObatModel->getValidationMessages())) {
            return redirect()->to('obat/create')->withInput();
        }

        $data = [
            'id_obat' => $this->request->getVar('id_obat'),
            'nama_obat' => $this->request->getVar('nama_obat'),
            'deskripsi_obat' => $this->request->getVar('deskripsi_obat'),
            'jenis_obat' => $this->request->getVar('jenis_obat'),
            'dosis_obat' => $this->request->getVar('dosis_obat'),
            'status_obat' => $this->request->getVar('status_obat'),
        ];
        $this->ObatModel->db->table('obat_0069')->insert($data);
        session()->setFlashdata('success', 'Created Obat succesfully');

        return redirect('')->to('/obat');
    }

    public function delete($id)
    {
        $hapus = $this->ObatModel->db->table('obat_0069')->delete(['id_obat' => $id]);
        if ($hapus) {
            session()->setFlashdata('warning', 'Deleted Obat Succesfully');
            return redirect()->to(base_url('obat'));
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Obat',
            'validation' => \Config\Services::validation(),
            'obat' => $this->ObatModel->table('obat_0069')
                ->where('id_obat', $id)
                ->find()
        ];
        return view('obat/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate($this->ObatModel->getValidationRules(), $this->ObatModel->getValidationMessages())) {
            return redirect()->to('obat/edit/' . $id)->withInput();
        }


        $data = [
            'id_obat' => $this->request->getVar('id_obat'),
            'nama_obat' => $this->request->getVar('nama_obat'),
            'deskripsi_obat' => $this->request->getVar('deskripsi_obat'),
            'jenis_obat' => $this->request->getVar('jenis_obat'),
            'dosis_obat' => $this->request->getVar('dosis_obat'),
            'status_obat' => $this->request->getVar('status_obat'),
        ];
        $this->ObatModel->db->table('obat_0069')->update($data, ['id_obat' => $id]);
        session()->setFlashdata('success', 'Updated Obat succesfully');

        return redirect('')->to('/obat');
    }
}