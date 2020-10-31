<?php namespace App\Controllers;

class Order extends BaseController
{
	public function index()
	{
		echo view('layouts/header.php');
		echo view('pages/order.php');
		echo view('layouts/footer.php');
	}

}
