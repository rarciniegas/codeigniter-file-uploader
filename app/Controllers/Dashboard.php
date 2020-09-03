<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		helper(['form']);

		$data = [];

		if ($this->request->getMethod() == 'post'){
			$rules = [
			'thefile' => 'uploaded[thefile]'	
			];

			if ($this->validate($rules)){
				return redirect()->('/dashboard/success');
			} else {
				$
			}

		}

		

		echo view('templates/header', $data);
		echo view('users/dashboard');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}