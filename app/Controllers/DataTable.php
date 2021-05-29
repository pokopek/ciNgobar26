<?php 
namespace App\Controllers;

use App\Models\Produk;
use CodeIgniter\Controller;

class Datatable extends Controller
{
    
    public function index(){
        $userModel = new Produk();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user/index',$data);
    }
    public function datatable(){
        $userModel = new Produk();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    } 
}