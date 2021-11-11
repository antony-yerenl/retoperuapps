<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct () {
		parent::__construct();
		$this->load->model('usuarioModel');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome
	 *	- or -  
	 * 		http://example.com/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->test();
		
		// $this->load->model('model_name');
	}

	public function test() {
		$filterData = $this->input->get();
		$viewdata = [
			'users' => $this->usuarioModel->list(($filterData !== false ? $filterData : [])),
		];
		$view = [
			'title' => 'listado de usuarios',
			'content' => $this->load->view('index', $viewdata, true)
		];
		$this->load->view('templates/global', $view);
	}


	public function saveForm($idUser = 0, $delete = 0) {
		$userInfo = $this->usuarioModel->findUser($idUser);
		$actions = [
			'edit' => 'Actualizar',
			'add' => 'Agregar',
			'delete' => 'Eliminar'
		];
		$viewdata = [
			'user' => $userInfo,
			'action' => $delete == 1 ? 'delete' : (!empty($userInfo) ? 'edit' : 'add'),
		];
		$viewdata['action_alias'] = $actions[$viewdata['action']];
		$view = [
			'title' => 'Usuario',
			'content' => $this->load->view('user/saveUser', $viewdata, true)
		];
		$this->load->view('templates/global', $view);
	}

	public function delete(){
		$data = ['estado' => 0];
		if ($this->usuarioModel->edit($data, $this->input->post('id')) > 0) {
			redirect(base_url('welcome/test'));
		} else {
			redirect(base_url('welcome/saveForm/'.$this->input->post('id').'/1'));
		}
	}

	public function edit() {
		$data = $this->input->post();
		unset($data['id']);
		if ($this->usuarioModel->edit($data, $this->input->post('id')) > 0) {
			redirect(base_url('welcome/test'));
		} else {
			redirect(base_url('welcome/saveForm/'.$this->input->post('id')));
		}
	}

	public function add() {
		$data = $this->input->post();
		$insertedId = $this->usuarioModel->add($data);
		if ($insertedId > 0) {
			redirect(base_url('welcome/test'));
		} else {
			redirect(base_url('welcome/saveForm'));
		}
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */