<?php

namespace App\Models;

use CodeIgniter\Model;

class PelatihanModel extends Model
{
    protected $table = 'riwayat_pelatihan';
    protected $allowedFields = [
        'userid',
        'kursus',
        'sertifikat',
        'tahun_sertifikat',
        'createdtime'
    ];
}
