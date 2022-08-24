<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'userid';
    protected $allowedFields = [
        'userid',
        'email',
        'nama',
        'posisi',
        'ktp',
        'tempatlahir',
        'tgllahir',
        'jk',
        'agama',
        'goldarah',
        'status',
        'alamat',
        'domisili',
        'notelp',
        'orgterdekat',
        'skill',
        'lokasitugas',
        'penghasilan',
        'createdtime'
    ];
}
