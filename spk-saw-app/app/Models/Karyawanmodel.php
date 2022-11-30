<?php 
namespace App\Models;
use CodeIgniter\Model;

class Karyawanmodel extends Model
{
    protected $table = 'karyawan';
    public function getKaryawan($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }
    }

    public function add($data){
       return $this->db->table('karyawan')->insert($data);
    }
}

?>