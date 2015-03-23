<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conta_model extends CI_Model {

	public function cadastrar($data){
		$this->db->insert('conta', $data);
	}

}

/* End of file contal_model.php */
/* Location: ./application/models/contal_model.php */