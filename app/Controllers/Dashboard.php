<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		helper(['form']);

		$data = [];

		if ($this->request->getMethod()  == 'post'){
			$rules = [
				'theFile' => 'uploaded[theFile]',
				'label' => 'The File'
			];

			if ($this->validate($rules)){

				$file = $this->request->getFile('thefile');
				echo $file->getName();
				exit();

				return redirect()->to('/dashboard/sucess');
			} else {
				$data['validation'] = $this->validator;
			}
		}

		

		echo view('templates/header', $data);
		echo view('users/dashboard');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}