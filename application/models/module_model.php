<?php

class Module_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	function get_modules($uid=FALSE) {
		if($uid) {
			$query = $this->db->query("SELECT * FROM `module` WHERE `uid` = $uid");
		} else {
			$query = $this->db->get('module');
		}
		return $query->result();
	}
	
	function insert_module($data) {
		return $this->db->insert('module', $data);
	}
	
	function get_mid_cid($cid) {
		$this->db->select('mid');
		$this->db->where('cid', $cid);
		$query = $this->db->get('code');
		
		$row = $query->row();
		
		return $row->mid;
	}
}