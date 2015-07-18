<?php
class Chacklogin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('form_validation');


  }
  function check()
  {
    $this->load->model('Member');
    $this->Member->setUsername($this->input->post('username'));
    $this->Member->setPassword($this->input->post('password'));
    $data = $this->Member->login();

    if($data)
    {	$data['file']['file_name']='';
      $this->load->view('addnew',$data);
    }
    else {
        $this->load->view('login');
      	echo "รหัสผ่าน หรือ ชื่อผู้ไม่ถูกต้อง";
    }
  }

function index()
{
  $this->load->view('login');
}
}
?>
