<?php 
namespace App\Models;
use CodeIgniter\Model;

class Produk extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['productName', 'productLine','productScale','productVendor','productDescription','quantityInStock','buyPrice','MSRP'];
}