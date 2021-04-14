<?php

namespace App\Models;

use CodeIgniter\Model;

class prodiModel extends Model
{
    protected $table = 'prodi';
    protected $useTimestamps = true;
 
    protected $allowedFields = ['nama_prodi', 'group_prodi_id'];

    public function getprodi($user_id = false)
    {

        if ($user_id == false) {
            if (in_groups('superadmin')| in_groups('admin')) {
                return $this->findAll();
            }else{
                $user_id = user_id();
                $query = $this->select('hak')
                    ->from('users')
                    ->where('users.id', $user_id)
                    ->get()->getResultArray();
                foreach ($query as $q) :

                return $this->select('*')
                        ->where('group_prodi_id', $q['hak'])
                        ->get()->getResultArray();
                    
                endforeach;
            }
            
        }


        return $this->where(['user_id' => $user_id])->first();
    }
}
