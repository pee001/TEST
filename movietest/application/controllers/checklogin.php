<?php
class CheckLogin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

  }
  function index()
  {
    $this->load->model('Member');
    $this->Member->setUsername($this->input->post('username'));
    $this->Member->setPassword($this->input->post('password'));
    $data = $this->Member->login();

    if($data)
    {
      echo "ยินดีต้อนรับ";
    }
    else {
      	echo "รหัสผ่าน หรือ ชื่อผู้ไม่ถูกต้อง";
    }
  }
}
