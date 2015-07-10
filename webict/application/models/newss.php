<?php

class Newss extends CI_model
{
  var $idnew;
  var $feetnew;
  var $contennew;
  var $datenew;
  function __construct()
  {
    $this->load->database();
		parent::__construct();
  }

  public function setIdnew($idnew)
  {
  $this->idnew = $idnew;
  }

  public function getIdnew()
  {
  return $this->idnew;
  }
  #####################################
  public function setFeetnew($feetnew)
  {
  $this->feetnew = $feetnew;
  }

  public function getFeetnew()
  {
  return $this->feetnew;
  }
  ######################################
  public function setContennew($contennew)
  {
  $this->contennew = $contennew;
  }

  public function getContennew()
  {
  return $this->contennew;
  }
  #######################################
  public function setDatenew($datenew)
{
  $this->datenew = $datenew;
}

public function getDatenew()
{
  return $this->datenew;
}

  ###################################### findByPk ######################################

  function findByPk($idnew)
{
  $query=$this->db->query
    ('
      SELECT *
      FROM webncu
      WHERE idnew
    ');

  return $query->result();
}
  ###################################### findByPk ######################################
  ###################################### findByAll ######################################

  	function findByAll()
  	{
  		$query=$this->db->query
  			('
  				SELECT *  FROM webncu
  			');

  		return $query->result();
  	}
  ###################################### findByAll ######################################
  }


 ?>
