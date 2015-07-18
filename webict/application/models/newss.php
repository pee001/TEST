<?php

class Newss extends CI_model
{
  var $idnew;
  var $feetnew;
  var $contennew;
  var $datenew;
  var $file;
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
    #########################################
    public function setFile($file)
    {
    $this->file = $file;
    }

    public function getFile()
    {
    return $this->file;
    }


  ###################################### findByPk ######################################

  function findByPk($idnew)
  {
  $query=$this->db->query
    ('
      SELECT *
      FROM webncu
       WHERE idnew = "'. $idnew .'"
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
  public function add()
	{
		$array = array
		(
			'feetnew'  => $this->getFeetnew(),
			'contennew' => $this->getContennew(),
      'datenew' => $this->getDatenew(),
      'file' => $this->getFile()

		);

		$this->db->insert('webncu', $array);
	}
  }

 ?>
