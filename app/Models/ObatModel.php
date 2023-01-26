<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'obat_0069';
    protected $primaryKey       = 'id_obat';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama_obat' => 'required',
        'deskripsi_obat' => 'required',
        'jenis_obat' => 'required',
        'dosis_obat' => 'required',
        'status_obat' => 'required',
    ];
    protected $validationMessages   = [
        'nama_obat' => ['required' => "anying"],
        'deskripsi_obat' => ['required' => "Deskripsi Obat harus diisi"],
        'jenis_obat' => ['required' => "jenis Obat harus diisi"],
        'dosis_obat' => ['required' => "dosis Obat harus diisi"],
        'status_obat' => ['required' => "status Obat harus diisi"],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}