<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all($table)
	{
		//return ('This is your first application');
		$this->db->select('usrId, usrLevel, usrFullName');
		$this->db->from('master_users');
		$this->db->where('usrDeleteId IS NULL' , NULL, FALSE);
		return $this->db->get()->result();
	}
}
/* End of file '/Home.php' */
/* Location: ./application/models//Home.php */
