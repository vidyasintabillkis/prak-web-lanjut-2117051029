<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'npm', 'id_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules  = [
        'nama' => [
            'rules' => 'required', 
            'errors' => [
                'required' => '{field} wajib diisi*'
            ]
        ],
        'npm' => [
            'rules' => 'required', 
            'errors' => [
                'required' => '{field} wajib diisi*'
            ]
        ], 
        'kelas' => [
            'rules' => 'required', 
            'errors' => [
                'required' => '{field} wajib diisi*'
            ]
        ], 
    ];

    protected $skipValidation = true; 
    
    public function saveUser($data){
        // dd($this->insert($data));
        $this->insert($data); 
    }

    public function getUser(){
        return $this->join('kelas', 'kelas.id=user.id_kelas')->findAll();
    }
}

