<?php 
class map extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	public function index(){
		 

		// $this->load->view("page");
		$data_array = array();
		$data_array['currentPage'] = '';

		$content = $this->load->view("homepage_view",$data_array,true);

		$this->set_subtitle("Pelayanan Kependudukan Online");
		$this->set_title("Pelayanan Kependudukan Online");
		$this->set_content($content);
		$this->cetak();
	}


	function register(){
		$data_array = array();
		$data_array['currentPage'] = 'register';

		$content = $this->load->view("register",$data_array,true);

		$this->set_subtitle("Pendaftaran  ");
		$this->set_title("Pendaftaran  ");
		$this->set_content($content);
		$this->cetak();
	}

	function login(){
		$data_array = array();
		$data_array['currentPage'] = 'login';
		$datalogin = $this->session->userdata("user");
		

		$content = $this->load->view("loginpage",$data_array,true);

		$this->set_subtitle("Login  ");
		$this->set_title("Login  ");
		$this->set_content($content);
		$this->cetak();

	}

function cekusername($username){

	if(empty($username)) {

		$this->form_validation->set_message('cekusername', ' %s Harus diisi ');
		return false;
	}

	$this->db->where("username",$username);

	if($this->db->get("users")->num_rows() > 0 ) {
		$this->form_validation->set_message('cekusername', ' %s Sudah digunakan');
		return false;
	}

}

function cekpassword($passsword) {
	$password2 = $_POST['password2'];

	if(empty($passsword) || empty($password2)) {
		$this->form_validation->set_message('cekpassword', ' Password harus diisi');
		return false;
	}

	if(  $passsword <> $password2 ) {
		$this->form_validation->set_message('cekpassword', ' Password tidak sama');
		return false;
	}


}



function cek_login(){

		 $data = $this->input->post();
		 $username = $data['username'];
		 $password = md5($data['password']);


		 $this->db->where("username",$username);
		 $this->db->where("password",$password);
		 $res = $this->db->get("users");

		 if($res->num_rows()==0) {
		 	$ret = array("error"=>true);

		 }else{
		 	$member = $res->row();
		 	$jj = array (
					'login' => true,
					'username' => $member->username,
					'nama' => $member->nama,
					);
		 	$this->session->set_userdata('user', $jj);
		 	$datalogin = $this->session->userdata("user");

		 		

		 	$ret = array("error"=>false);


		 }
		


		 echo json_encode($ret);
 
		 
		 
	}

	function save_register() {


		$post = $this->input->post();
		// show_array($post);

		$this->load->library('form_validation');  		 
  		$this->form_validation->set_rules('username','Nama Pengguna','callback_cekusername');

  		$this->form_validation->set_rules('password','Nama Pengguna','callback_cekpassword');
		
		$this->form_validation->set_rules('email','Email','email|required');

		$this->form_validation->set_rules('nohp','Nomo HP','required');


		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');

 		if($this->form_validation->run() == TRUE ) { 

 			// echo "vangleee..";

 			$post['password'] = md5($post['password']);
 			unset($post['password2']);

 			$res  = $this->db->insert("users",$post);
 			// echo $this->db->last_query();
 			if($res){
 				$ret = array("error"=>false,"message"=>"Pendaftaran berhasil. silahkan login untuk melanjutkan");
 			}
 			else {
 				$ret = array("error"=>true,"message"=>"data error". mysql_error());
 			}

 		}
 		else {  // validation failed ;
 			// echo "suckk....";
 			$ret = array("error"=>true,"message"=>validation_errors());
 		}

 		echo json_encode($ret);

	}
}

?>