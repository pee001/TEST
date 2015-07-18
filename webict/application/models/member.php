<?php

class Member extends CI_model
{
  var $id;

  var $username;
  var $password;



    function __construct()
    {
    $this->load->database();
    parent::__construct();
    }

    public function setId($id)
    {
    $this->id = $id;
    }

    public function getId()
    {
    return $this->id;
    }
    #####################################


    public function setUsername($username)
    {
    $this->username = $username;
    }

    public function getUsername()
    {
    return $this->username;
    }
    ####################################
    public function setPassword($password)
    {
    $this->password = $password;
    }

    public function getPassword()
    {
    return $this->password;
    }
    ######################################
    
    function login()
  	 {
  	   $this -> db -> select('*');  						###########
  	   $this -> db -> from('member'); 						 ########### เช็คข้อมูลใน DB
  	   $this -> db -> where('username', $this->getUsername()); ###########
  	   $this -> db -> where('password', $this->getPassword()); ###########
  	   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

  	   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข

  	   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record
  	   {
  			 return $data=$query->result(); #############$query->result() ส่งค้าที่ดึงได้กลับ ใส่trueเพื่อทดสอบ
  	   }
  	   else ########### เมื่อไม่ตรงตามเงื่อนไข
  	   {
  			  return FALSE;  ############# ส่งค้า FALSE กลับ
  	   }
  	 }

}



?>
