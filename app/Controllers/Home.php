<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('template/hader');
		echo view('index');
		echo view('template/footer');
	}

	public function historia()
	{
		echo view('template/hader.php');
		echo view('historia');
		echo view('template/footer');
	}
	
	public function caracteristicas()
	{
		echo view('template/hader.php');
		echo view('caracteristicas');
		echo view('template/footer');
	}

	public function mexico()
	{
		echo view('template/hader.php');
		echo view('mexico');
		echo view('template/footer');
	}


	//--------------------------------------------------------------------

}
