<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
	public function index()
	{
		$productModel = new ProductModel();
		$data['deals'] = $productModel->getDeals();
		$data['pizzas'] = $productModel->getPizzas();
		$data['sides'] = $productModel->getSides();

		echo view('layouts/header.php');
		echo view('pages/home.php', $data);
		echo view('layouts/footer.php');
	}
}
