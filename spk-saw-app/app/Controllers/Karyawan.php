<?php

namespace App\Controllers;
use App\Models\Karyawanmodel;
class Karyawan extends BaseController
{

    public function __construct(){
        $this->model = new Karyawanmodel;   
    }
    public function index()
    {
        $model = new Karyawanmodel();
        $data['karyawan'] = $model->getKaryawan();
        return view('karyawan/index', $data);
    }

    
    public function add()   
    {
        $data = [
            'nip' => $this->request->getPost('nip'),
            'nama' => $this->request->getPost('nama'),
            'jns_kel' => $this->request->getPost('jekel'),
            'no_hp' => $this->request->getPost('telepon'),
            'alamat' => $this->request->getPost('alamat'),

        ];
        // insert data
        $success =$this->model->add($data);
        if ($success) {
            return redirect()->to(base_url('karyawan'));
        } 
    }
}
