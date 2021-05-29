<?php 
namespace App\Controllers;

use App\Models\Produk;
use CodeIgniter\Controller;
use CodeIgniter\Database\Query;

class Admin extends Controller
{
    protected $db,$builder ;
    public function __construct(){
        
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        
    }

    public function index(){
        $data['title']='User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();
        $this->builder->select('users.id as userid,username,email,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users']= $query->getResult();
        return view('admin/index',$data);
    }
    public function detail($id = 0){
        $data['title']='Detail User';
        $this->builder->select('users.id as userid,username,email,name,fullname,user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data['user'] = $query->getRow();

        if (empty($data['user'])){
            return redirect()->to('/admin');
        }
        return view('admin/detail',$data);
    }
    public function data(){
        $userModel = new Produk();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('admin/index',$data);
    }
    
}

