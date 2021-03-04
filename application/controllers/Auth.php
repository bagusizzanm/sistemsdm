<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('userlogin', ['username' => $username])->row_array();

        if ($user) {
            if ($this->db->get('userlogin', ['password' => $password])) {
                redirect('homepage');
            } else {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
            Password Salah!
          </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
            User tidak ada!
          </div>');
            redirect('auth');
        }
    }
}
