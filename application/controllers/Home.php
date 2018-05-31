<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	private $css;
	private $js;
	private $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('home');

		$this->css = array(
			'assets/css/bootstrap.min.css',
			'assets/new-font-awesome/css/fontawesome-all.css',
			'assets/css/plugins/toastr/toastr.min.css',
			'assets/js/plugins/gritter/jquery.gritter.css',
			'assets/css/animate.css',
			'assets/css/style.css'
		);

		$this->js = array(
			'assets/js/jquery-3.1.1.min.js',
			'assets/js/bootstrap.min.js',
			'assets/js/plugins/metisMenu/jquery.metisMenu.js',
			'assets/js/plugins/slimscroll/jquery.slimscroll.min.js',
			'assets/js/plugins/flot/jquery.flot.js',
			'assets/js/plugins/flot/jquery.flot.tooltip.min.js',
			'assets/js/plugins/flot/jquery.flot.spline.js',
			'assets/js/plugins/flot/jquery.flot.resize.js',
			'assets/js/plugins/flot/jquery.flot.pie.js',
			'assets/js/plugins/peity/jquery.peity.min.js',
			'assets/js/demo/peity-demo.js',
			'assets/js/inspinia.js',
			'assets/js/plugins/pace/pace.min.js',
			'assets/js/plugins/jquery-ui/jquery-ui.min.js',
			'assets/js/plugins/gritter/jquery.gritter.min.js',
			'assets/js/plugins/sparkline/jquery.sparkline.min.js',
			'assets/js/demo/sparkline-demo.js',
			'assets/js/plugins/chartJs/Chart.min.js',
			'assets/js/plugins/toastr/toastr.min.js',
			'assets/custom/home.js'
		);

		if (!$this->ion_auth->logged_in())
		{
			$this->session->set_flashdata('message', $this->lang->line('gofuckout'));
			redirect('auth/login','refresh');
		}
	}
	
	public function index()
	{
		$this->load->model('home_model');
		
		$data = array(
			'title' =>$this->lang->line('judul_awal'),
			'img' => 'assets/img/landing/avatar1.jpg',
			'nama' => 'Muhammad Haris Setiawan',
			'job' => 'Bussiness Analys',
			'active_home'=>'active',
			'content' => $this->home_model->get_all('master_users'),
			'css' => $this->css,
			'js' => $this->js
			);
		$this->load->view('header', $data);
		$this->load->view('body', $data);
		$this->load->view('footer', $data);
	}
		
	public function get($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('home_model');
			$data['content'] = $this->home_model->get($id);
			$this->load->view('home_view', $data);
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
			$this->load->view('home_view', $data);
		}
		else
		{
			$field = $this->input->post('element');
			$this->load->model('home_model');
			if($this->home_model->add(array('field_name'=>$field)))
			{
				$this->load->view('home_success_page_view');
			}
			else
			{
				$this->load->view('home_error_page_view');
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
			$this->load->view('home_view', $data);
		}
		else
		{
			$element = $this->input->post('element');
			$id = $this->input->post('id');
			$this->load->model('home_model');
			if($this->home_model->update(array('element'=>$element),array('id'=>$id)))
			{
				$this->load->view('home_success_page_view', $data);
			}
			else
			{
				$this->load->view('home_error_page_view');
			}
		}
	}
	public function delete($id)
	{
		$id = intval($id);
		if($id!=0)
		{
			$this->load->model('home_model');
			$data['content'] = $this->home_model->delete();
			$this->load->view('home_view', $data);
		}
		else
		{
			redirect(site_url(),'refresh');
		}
	}
}
/* End of file '/Home.php' */
/* Location: ./application/controllers//Home.php */
