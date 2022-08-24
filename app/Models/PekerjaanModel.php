<?php

namespace App\Models;

use CodeIgniter\Model;

class PekerjaanModel extends Model
{
    protected $table = 'riwayat_pekerjaan';
    protected $allowedFields = [
        'userid',
        'namaperusahaan',
        'posisi_perusahaan',
        'pendapatan',
        'tahun_perusahaan',
        'createdtime'
    ];
}
