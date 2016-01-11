<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

  public function __construct() {
    parent:: __construct();
    $this->load->model('Post');
  }

	public function index() {
		$this->load->view('ajax');
	}

  public function create() {
    $new_post = $this->input->post();
    $this->Post->create($new_post);
    $data['posts'] = $this->Post->get_all();
    $this->load->view('partials/posts', $data);
  }

  public function display() {
    $data['posts'] = $this->Post->get_all();
    $this->load->view('partials/posts', $data);
    $data['description'] = ' ';
  }

}
