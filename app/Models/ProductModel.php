<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'productId';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'description', 'price', 'image', 'type'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = true;

    public function getDeals()
    {
        return $this->where('type', 'deal')->find();
    }
    public function getSides()
    {
        return $this->where('type', 'side')->find();
    }
    public function getPizzas()
    {
        return $this->where('type', 'pizza')->find();
    }
    public function getProduct($id)
    {
        return $this->where('productId', $id)->find();
    }
}
