<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargo_model extends CI_Model {

	public function getAll(){
		return $this->db->get('cargo')->result();
	}

}

/* End of file cargo_model.php */
/* Location: ./application/models/cargo_model.php */