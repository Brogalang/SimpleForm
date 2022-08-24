<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan_terakhir';
    protected $allowedFields = [
        'userid',
        'jenjang',
        'institusi',
        'jurusan',
        'tahunlulus',
        'ipk',
        'createdtime'
    ];

    // public function selectdatapend($userid,$id)
    // {
    //     //pembuatan query
    //     $sql = "SELECT * FROM pendidikan_terakhir where userid='".$userid."' and jenjang='".$id."'";

    //     //eksekusi query sql
    //     $query = $this->db->query($sql);

    //     // uraikan hasil query dalam bentuk array
    //     $data = $query->getResultArray();

    //     //kembalikan hasil query ke controller
    //     return $data;
    // }
}
