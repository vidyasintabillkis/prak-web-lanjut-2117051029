<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;
use App\Models\KelasModel;

class ClassController extends BaseController
{

    public $kelasModel;
    public $userModel; 

    public function __construct(){
        $this->kelasModel = new KelasModel();
        $this->userModel = new UserModel(); 
    }

    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(), 
        ]; 

        return view('list_kelas', $data);
    }

    public function create(){

        $data = [
            'title' => 'Create Kelas', 
        ]; 

        return view('create_kelas', $data); 
    }

    public function store(){

       if(!$this->validate($this->kelasModel->getValidationRules())){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
       }

        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ]);
        
        return redirect()->to(base_url('/kelas')); 
    }

    public function edit($id){
        $kelas = $this->kelasModel->getKelas($id); 

        $data = [
            'title' => 'Edit Kelas', 
            'kelas' => $kelas,
        ]; 

        return view('edit_kelas', $data); 
    }

    public function update($id){

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas')
        ]; 

        $result = $this->kelasModel->updateKelas($data, $id); 

        if(!$result){
            return redirect()->back()->withInput()
            ->with('error', 'Gagal menyimpan data');
        }

        return redirect()->to(base_url('/kelas')); 
    }

    public function destroy($id){
        $result = $this->kelasModel->deleteKelas($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }

        return redirect()->to(base_url('/kelas'))
        ->with('succes', 'Berhasil menghapus data');
    }
}
