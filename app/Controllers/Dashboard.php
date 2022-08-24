<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\BiodataModel;
use App\Models\PekerjaanModel;
use App\Models\PendidikanModel;
use App\Models\PelatihanModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $UserModel = new UserModel();
        $BiodataModel = new BiodataModel();
        $data['data_user'] = $UserModel->where('email',$session->get('email'))->first();
        if ($data['data_user']['role']!='admin') {
            return view('/pages/form_input',$data);
        }else{
            $data['data_biodata'] = $BiodataModel->orderBy('nama','asc')->findAll();
            return view('/admin/listall',$data);
        }
    }

    public function singleData($id = null){
        $session = session();
        $UserModel = new UserModel();
        $BiodataModel = new BiodataModel();
        $PekerjaanModel = new PekerjaanModel();
        $PendidikanModel = new PendidikanModel();
        $PelatihanModel = new PelatihanModel();
        $data['data_user'] = $UserModel->where('email',$session->get('email'))->first();
        $data['data_biodata'] = $BiodataModel->where('userid',$id)->first();
        $data['data_pendidikan'] = $PendidikanModel->where('userid',$id)->findAll();
        $data['data_pekerjaan'] = $PekerjaanModel->where('userid',$id)->findAll();
        $data['data_pelatihan'] = $PelatihanModel->where('userid',$id)->findAll();
        if ($data['data_user']['role']=='admin') {
            return view('admin/edit_view', $data);
        }else{
            return view('/pages/404');
        }
    }
    public function singleDataPend($id = null,$jenjang= null){
        // exit("Warning");
        $session = session();
        $UserModel = new UserModel();
        $PendidikanModel = new PendidikanModel();
        $data['data_user'] = $UserModel->where('email',$session->get('email'))->first();
        // $data['data_pendidikan'] = $PendidikanModel->where('userid',$data['data_user']['userid'])->findAll();
        $data['data_pendidikan'] = $this->PendidikanModel->selectdatapend($id,$jenjang);

        if ($data['data_user']['role']=='admin') {
            return view('admin/edit_view', $data);
        }else{
            return view('/pages/404');
        }
    }

    public function show()
    {
        $session = session();
        $BiodataModel = new BiodataModel();
        $PekerjaanModel = new PekerjaanModel();
        $PendidikanModel = new PendidikanModel();
        $PelatihanModel = new PelatihanModel();
        $data['data_user'] = $BiodataModel->where('email',$session->get('email'))->first();
        if($data['data_user']){
            $userid=$data['data_user']['userid'];
            $data['data_pendidikan'] = $PendidikanModel->where('userid',$userid)->findAll();
            $data['data_pekerjaan'] = $PekerjaanModel->where('userid',$userid)->findAll();
            $data['data_pelatihan'] = $PelatihanModel->where('userid',$userid)->findAll();
            return view('/pages/show_data',$data);
        }else{
            return view('/pages/404');
        }
        // echo"<pre>";
        // print_r($data['data_pendidikan']);
        // echo"</pre>";
        // exit();
    }
    public function delete($id = null){
        $BiodataModel = new BiodataModel();
        $data['list_barang'] = $BiodataModel->where('userid', $id)->delete($id);
        return $this->response->redirect(site_url('/dashboard'));
    }    
}
