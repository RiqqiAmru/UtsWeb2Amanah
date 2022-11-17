<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $dosen = [
        'nama_dosen'     => 'required',
        'alamat'     => 'required',
        'no_telepon'     => 'required',
        'status'     => 'required'
    ];

    public $dosen_errors = [
        'nama_dosen' => [
            'required'    => 'Nama Dosen wajib diisi.',
        ],
        'alamat' => [
            'required'    => 'Alamat wajib diisi.',
        ],
        'no_telepon' => [
            'required'    => 'No Telepon wajib diisi.',
        ],
        'status' => [
            'required'    => 'status wajib diisi.',
        ],
    ];
}
