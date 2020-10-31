<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Item extends BaseController
{
	public function index()
	{
	}
	public function view($id)
	{
		$productModel = new ProductModel();
		$data["product"] = $productModel->getProduct($id);
		echo view('layouts/header.php');
		echo view('pages/item.php', $data);
		echo view('layouts/footer.php');
	}
}
