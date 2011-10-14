<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menus extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('captcha_model');
                $this->load->model('menu_model');
	}

	public function index()
	{
echo "hello";
        }

        public function view_menu($id)
        {
             $data['menudata'] = $this->menu_model->get_menu($id);
             foreach($data['menudata'] as $row):

			$data['title'] = $row->menu_title;


		endforeach;
                $data['main_content'] = "menus/menu";
                $this->load->vars($data);
		$this->load->view('template/main');
        }

}