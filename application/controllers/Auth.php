<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $this->load->view('auth/login');
	}
	
	public function cek()
	{
		$post = $this->input->post(null, true);
		
		if (isset($_POST['login'])) {
			$this->load->model('pengguna_m');
			
			$query = $this->pengguna_m->login($post);

			if ($query->num_rows() > 0) {
				// $row = $query->row();
				// echo $row->email;
				// echo "<br>";
				// echo $row->password;
				
				redirect('home');
			} else {
				redirect('auth/failed');
			}
		}
	}
	
	public function failed(){
		$this->load->view('auth/failed');
	}
}
