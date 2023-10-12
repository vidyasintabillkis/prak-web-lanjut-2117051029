<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;
use App\Models\KelasModel;

class UserController extends BaseController
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
            'title' => 'List User',
            'users' => $this->userModel->getUser(), 
        ]; 

        return view('list_user', $data);
    }

    public function profile($nama="", $kelas="", $npm="")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ]; 
        return view('profile', $data);
    }

    public function create(){

        $kelas = $this->kelasModel->getKelas(); 

        $data = [
            'title' => 'Create User', 
            'kelas' => $kelas, 
        ]; 

        return view('create_user', $data); 
    }

    public function store(){

       if(!$this->validate($this->userModel->getValidationRules())){
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
       }

       $path = 'assets/upload/img/';

       $foto = $this->request->getFile('foto');
       $name = $foto->getRandomName();
       if ($foto->move($path, $name)){
        $foto = base_url($path . $name); 
       }

    // dd($this->request->getVar());
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),   
            'foto' => $foto
        ]);
        
        return redirect()->to(base_url('/user'));
        // $data = [
        //     'title' => 'Profile', 
        //     'nama' => $this->request->getVar('nama'),
        //     'id_kelas' => $this->request->getVar('kelas'),
        //     'npm' => $this->request->getVar('npm'),   
        // ]; 
        // return view('profile', $data); 
    }

    public function show($id){
        $user = $this->userModel->getUser($id); 

        $data = [
            'title' => 'Profile',
            'user' => $user, 
        ]; 

        return view('profile', $data); 
    }
}
