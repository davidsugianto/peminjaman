<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
//load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	//halaman Login
	public function index()
	{
		if($this->session->userdata('AKSES_LEVEL') == 'Admin')
		{
		redirect('admin/Dasbor');
		}	
		elseif($this->session->userdata('AKSES_LEVEL') == 'User')
		{
		redirect('public/Dasbor');
		}
		else{
		$data = array('title' => 'Login');
		$this->load->view('admin/login_view', $data, FALSE);
		}
	}	
	
	public function login(){
		$NIM = $this->input->post('NIM');
		$PASSWORD = md5($this->input->post('PASSWORD'));
		//echo $NIM, $PASSWORD;
		$cek = $this->User_model->cek($NIM, $PASSWORD);
		//redirect('public/Dasbor');
		//echo "sudah masuk";
		if($cek->num_rows() == 1)
		{
		//	echo "sudah masuk";
			foreach($cek->result() as $data){
				$sess_data['NIM'] = $data->NIM;
				$sess_data['NAMA_MAHASISWA'] = $data->NAMA_MAHASISWA;
				$sess_data['AKSES_LEVEL'] = $data->AKSES_LEVEL;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('AKSES_LEVEL') == 'Admin')
			{
				redirect('admin/Dasbor');
			}	
			elseif($this->session->userdata('AKSES_LEVEL') == 'User')
			{
				redirect('public/Dasbor');
			}
		}else{
		?>
            <script>
            alert('Gagal Login: Cek NIM dan password anda!<?php echo $NIM, $akses_level;?>');
            history.go(-1);
            </script>
            <?php
		}
	}
	
		public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}

