<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all()
	{
		return ('This is your first application');
	}
}
/* End of file '/Home.php' */
/* Location: ./application/models//Home.php */
