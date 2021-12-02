<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*==============================*/
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function alpha_dash_space($fullname)
	{
		if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
			$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	public function validate_strongpass($str)
	{
		$password = trim($str);

		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';

		if (empty($password)) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field is required.');

			return FALSE;
		}

		if (preg_match_all($regex_lowercase, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must be have least one lowercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_uppercase, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one uppercase letter.');

			return FALSE;
		}

		if (preg_match_all($regex_number, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one number.');

			return FALSE;
		}

		if (preg_match_all($regex_special, $password) < 1) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));

			return FALSE;
		}

		if (strlen($password) < 5) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field must be at least 5 characters in length.');

			return FALSE;
		}

		if (strlen($password) > 32) {
			$this->form_validation->set_message('validate_strongpass', 'The {field} field cannot exceed 32 characters in length.');

			return FALSE;
		}

		return TRUE;
	}
	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/login');
		} else {
			$this->load->model('User_model');

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_data = $this->User_model->login_user($email, $password);

			if ($user_data) {

				$login_data = array(

					'user_data' => $user_data,
					'id'		=> $user_data->id,
					'email'		=> $email,
					'type'		=> $user_data->type,
					'name'		=> $user_data->name,
					'logged_in'	=> true

				); // Data keeps in SESSION

				$this->session->set_userdata($login_data);

				if ($user_data->type == 'A') // Admin
				{

					$this->session->set_flashdata('login_success', 'Logged in successfully. You have logged in as an admin.');
					redirect('admin/index');
				} elseif ($user_data->type == 'U') // User
				{
					$this->session->set_flashdata('login_success', 'Welcome, <span class = "text-primary">' . $this->session->userdata('name') . '</span>. You have logged in successfully.');
					redirect('users/browsedevs');
				}
			} else {
				$this->session->set_flashdata('login_fail', '<i class="fas fa-exclamation-triangle"></i> Invalid login. The email or password that you have entered is incorrect. ');

				redirect($_SERVER['HTTP_REFERER']); // Redirect at same page.
			}
		}
	}


	public function finder()
	{
		$this->load->view('users/finder');
	}

	public function branchfinder()
	{
		$this->load->model('Admin_model');
		$view['areas'] = $this->Admin_model->get_areas();

		$this->load->model('Admin_model');
		$view['banks'] = $this->Admin_model->get_banks();

		$this->load->view('users/branchfinder', $view);
	}


	public function findbranch()
	{
		$this->load->model('User_model');

		$this->load->model('Admin_model');

		$this->form_validation->set_rules('areaID', 'Area', 'trim|required');
		$this->form_validation->set_rules('bankID', 'Bank', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->branchfinder();
		} else {
			$view['branches'] = $this->User_model->findbranch();
			$this->load->view('users/branchresults', $view);
		}
	}


	public function atmfinder()
	{
		$this->load->model('Admin_model');
		$view['areas'] = $this->Admin_model->get_areas();

		$this->load->model('Admin_model');
		$view['banks'] = $this->Admin_model->get_banks();

		$this->load->view('users/atmfinder', $view);
	}


	public function findatm()
	{
		$this->load->model('User_model');

		$this->load->model('Admin_model');

		$this->form_validation->set_rules('areaID', 'Area', 'trim|required');
		$this->form_validation->set_rules('bankID', 'Bank', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->atmfinder();
		} else {
			$view['atms'] = $this->User_model->findatm();
			$this->load->view('users/atmresults', $view);
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}


	public function infophp()
	{
		$this->load->view('users/info');
	}
}
