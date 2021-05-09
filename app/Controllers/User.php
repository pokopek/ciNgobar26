<?php 
namespace App\Controllers;

use App\Models\Produk;
use CodeIgniter\Controller;

class User extends Controller
{
    
    public function index(){
        $data['title'] = 'My Profile' ; 
        return view('user/index', $data);
    }
    
}