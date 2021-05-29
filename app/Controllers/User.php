<?php 
namespace App\Controllers;

use App\Models\Data_table;
use CodeIgniter\Controller;

class User extends Controller
{
    
    public function index(){
        $data['title'] = 'My Profile' ; 
        return view('user/index', $data);
    }
    public function data_table(){
        $table = new Data_table;
        $data = [
        'title' => 'Data table',
        'tampildata' => $table -> findAll()
    ];
      // d($table -> findAll());
            return view('user/data_table',$data);
    }
    
}