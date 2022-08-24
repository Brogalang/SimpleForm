<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PekerjaanModel;
use App\Models\PelatihanModel;

class Biodata extends BaseController
{
    public function save() {
        $BiodataModel = new BiodataModel();
        $tlahir=str_replace("-","",$this->request->getVar('tgllahir'));
        $datanew = [
            'userid' => $this->request->getVar('userid'),
            'email' => $this->request->getVar('email_user'),
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'ktp' => $this->request->getVar('noktp'),
            'tempatlahir' => $this->request->getVar('tempat'),
            'tgllahir' => $tlahir,
            'jk' => $this->request->getVar('jk'),
            'agama' => $this->request->getVar('agama'),
            'goldarah' => $this->request->getVar('goldarah'),
            'status' => $this->request->getVar('status'),
            'alamat' => $this->request->getVar('alamat'),
            'domisili' => $this->request->getVar('domisili'),
            'notelp' => $this->request->getVar('notelp'),
            'orgterdekat' => $this->request->getVar('orgterdekat'),
            'skill' => $this->request->getVar('skill'),
            'lokasitugas' => $this->request->getVar('lokasitugas'),
            'penghasilan' => $this->request->getVar('penghasilan'),
            'cretedtime' => date('Y-m-d H:i:s'),
        ];
        $BiodataModel->insert($datanew);
        // echo"<pre>";
        // print_r($datanew);
        // exit("Warning:");

        $PendidikanModel = new PendidikanModel();
        if(is_countable($this->request->getVar('jenjang'))){
            $jumlah1 = count($this->request->getVar('jenjang'));
            for($i=0;$i<$jumlah1;$i++){
                $data_pendidikan = array(
                        'userid'=> $this->request->getVar('userid'),
                        'jenjang'=> $this->request->getVar('jenjang')[$i],
                        'institusi'=> $this->request->getVar('institusi')[$i],
                        'jurusan'=> $this->request->getVar('jurusan')[$i],
                        'tahunlulus'=> $this->request->getVar('tahunlulus')[$i],
                        'ipk'=> $this->request->getVar('ipk')[$i],
                        'cretedtime'=> date('Y-m-d H:i:s'),
                    );
                $PendidikanModel->insert($data_pendidikan);
            }    
        }
       
        $PekerjaanModel = new PekerjaanModel();
        if(is_countable($this->request->getVar('namaperusahaan'))){
            $jumlah2 = count($this->request->getVar('namaperusahaan'));
            for($i=0;$i<$jumlah2;$i++){
                $data_pekerjaan = array(
                        'userid'=> $this->request->getVar('userid'),
                        'namaperusahaan'=> $this->request->getVar('namaperusahaan')[$i],
                        'posisi_perusahaan'=> $this->request->getVar('posisi_perusahaan')[$i],
                        'pendapatan'=> $this->request->getVar('pendapatan')[$i],
                        'tahun_perusahaan'=> $this->request->getVar('tahun_perusahaan')[$i],
                        'cretedtime'=> date('Y-m-d H:i:s'),
                    );
                $PekerjaanModel->insert($data_pekerjaan);
            }   
        }

        $PelatihanModel = new PelatihanModel();
        if(is_countable($this->request->getVar('kursus'))){
            $jumlah3 = count($this->request->getVar('kursus'));
            for($i=0;$i<$jumlah3;$i++){
                $data_pelatihan = array(
                        'userid'=> $this->request->getVar('userid'),
                        'kursus'=> $this->request->getVar('kursus')[$i],
                        'sertifikat'=> $this->request->getVar('sertifikat')[$i],
                        'tahun_sertifikat'=> $this->request->getVar('tahun_sertifikat')[$i],
                        'cretedtime'=> date('Y-m-d H:i:s'),
                    );
                $PelatihanModel->insert($data_pelatihan);
            }    
        }
        // echo"<pre>";
        // print_r($jumlah2);
        // exit("Warning:");
        return $this->response->redirect(site_url('/dashboard'));
        // return view('/pages/form_input',$data);
    }

    public function update(){
        $BiodataModel = new BiodataModel();
        $userid = $this->request->getVar('userid');
        $tlahir=str_replace("-","",$this->request->getVar('tgllahir'));
        $data = [
            // 'userid' => $this->request->getVar('userid'),
            // 'email' => $this->request->getVar('email_user'),
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'ktp' => $this->request->getVar('noktp'),
            'tempatlahir' => $this->request->getVar('tempat'),
            'tgllahir' => $tlahir,
            'jk' => $this->request->getVar('jk'),
            'agama' => $this->request->getVar('agama'),
            'goldarah' => $this->request->getVar('goldarah'),
            'status' => $this->request->getVar('status'),
            'alamat' => $this->request->getVar('alamat'),
            'domisili' => $this->request->getVar('domisili'),
            'notelp' => $this->request->getVar('notelp'),
            'orgterdekat' => $this->request->getVar('orgterdekat'),
            'skill' => $this->request->getVar('skill'),
            'lokasitugas' => $this->request->getVar('lokasitugas'),
            'penghasilan' => $this->request->getVar('penghasilan'),
            'cretedtime' => date('Y-m-d H:i:s'),
        ];
        $BiodataModel->update($userid, $data);
        // echo"<pre>";
        // print_r($BiodataModel);
        // exit();
        return $this->response->redirect(site_url('/dashboard'));
    }
}
