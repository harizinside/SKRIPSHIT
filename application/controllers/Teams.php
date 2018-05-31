<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Teams extends CI_Controller
{
	private $css;
	private $js;
	private $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('teams');

		$this->css = array(
			'assets/css/bootstrap.min.css',
			'assets/new-font-awesome/css/fontawesome-all.css',
			'assets/css/plugins/dataTables/datatables.min.css',
			'assets/css/animate.css',
			'assets/css/style.css'
		);

		$this->js = array(
			'assets/js/jquery-3.1.1.min.js',
			'assets/js/bootstrap.min.js',
			'assets/js/plugins/metisMenu/jquery.metisMenu.js',
			'assets/js/plugins/slimscroll/jquery.slimscroll.min.js',
			'assets/js/plugins/dataTables/datatables.min.js',
			'assets/js/inspinia.js',
			'assets/js/plugins/pace/pace.min.js',
			'assets/custom/teams.js'
		);

		if (!$this->ion_auth->logged_in())
		{
        	redirect('auth/login');
    	}
	}
	
	public function index()
	{
		$this->load->model('teams_model');

		$data = array(
			'title' =>$this->lang->line('judul_awal'),
			'content' => $this->teams_model->get_all(),
			'css' => $this->css,
			'js' => $this->js,
			'active_items'=>'active',
			'active_teams'=>'active',
			'nama' => 'Muhammad Haris Setiawan',
			'job' => 'Bussiness Analys'
			);
		$this->load->view('header', $data);
		$this->load->view('teams', $data);
		$this->load->view('footer', $data);
	}
		
	public function get($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('teams_model');
			$data['content'] = $this->teams_model->get($id);
			$this->load->view('teams_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
	}
	
	public function add()
	{
		$this->form_validation->set_rules('element','Element label','trim|required');
		if($this->form_validation->run()===FALSE)
		{
			$data['input_element'] = array('name'=>'element', 'id'=>'element', 'value'=>set_value('element'));
			$this->load->view('teams_view', $data);
		}
		else
		{
			$field = $this->input->post('element');
			$this->load->model('teams_model');
			if($this->teams_model->add(array('field_name'=>$field)))
			{
				$this->load->view('teams_success_page_view');
			}
			else
			{
				$this->load->view('teams_error_page_view');
			}
		}
	}
	
	public function edit()
	{
		$this->form_validation->set_rules('element','Element label','trim|required');
		$this->form_validation->set_rules('id','ID','trim|is_natural_no_zero|required');
		if($this->form_validation->run()===FALSE)
		{
			if(!$this->input->post())
			{
				$id = intval($this->uri->segment($this->uri->total_segments()));
			}
			else
			{
				$id = set_value('id');
			}
			$data['input_element'] = array('name'=>'element', 'id'=>'element', 'value'=>set_value('element'));
			$data['hidden'] = array('id'=>set_value('id',$id));
			$this->load->view('teams_view', $data);
		}
		else
		{
			$element = $this->input->post('element');
			$id = $this->input->post('id');
			$this->load->model('teams_model');
			if($this->teams_model->update(array('element'=>$element),array('id'=>$id)))
			{
				$this->load->view('teams_success_page_view', $data);
			}
			else
			{
				$this->load->view('teams_error_page_view');
			}
		}
	}
	public function delete($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('teams_model');
			$data['content'] = $this->teams_model->delete();
			$this->load->view('teams_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
	}
}
/* End of file '/Teams.php' */
/* Location: ./application/controllers//Teams.php */
