<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$type = $this->session->userdata('type');
		if ($type != 'A') {
			$this->session->set_flashdata('no_access', '<i class="fas fa-exclamation-triangle"></i> You are not allowed or not logged in! Please Log in with an admin account');
			redirect('users/login');
		}
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

	public function index()
	{
		$this->load->model('Admin_model');

		$view['admin_view'] = "admin/admin_index";
		$this->load->view('layouts/admin_layout', $view);
	}


	public function addarea()
	{
		$this->form_validation->set_rules('area', 'Area Name', 'trim|required|max_length[80]');

		if ($this->form_validation->run() == FALSE) {

			$view['admin_view'] = "admin/addarea";
			$this->load->view('layouts/admin_layout', $view);
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->addarea()) {
				$this->session->set_flashdata('success', 'Area has been added successfully');
				redirect('admin/areas');
			} else {
				print $this->db->error();
			}
		}
	}

	public function addbank()
	{
		$this->form_validation->set_rules('bank', 'Bank Name', 'trim|required|max_length[80]');

		if ($this->form_validation->run() == FALSE) {

			$view['admin_view'] = "admin/addbank";
			$this->load->view('layouts/admin_layout', $view);
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->addbank()) {
				$this->session->set_flashdata('success', 'Bank has been added successfully');
				redirect('admin/banks');
			} else {
				print $this->db->error();
			}
		}
	}

	public function addbranch()
	{
		$this->load->model('Admin_model');
		$view['areas'] = $this->Admin_model->get_areas();

		$this->load->model('Admin_model');
		$view['banks'] = $this->Admin_model->get_banks();

		//$this->form_validation->set_rules('bank', 'Bank Name', 'trim|required|max_length[80]');
		$this->form_validation->set_rules('areaID', 'Area', 'trim|required');
		$this->form_validation->set_rules('bankID', 'Bank', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|strip_tags[address]|required');
		$this->form_validation->set_rules('map', 'Map', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[5]|max_length[15]|numeric');
		//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[devs.email]');
		$this->form_validation->set_rules('addinfo', 'Additional Information', 'trim|strip_tags[addinfo]');

		if ($this->form_validation->run() == FALSE) {

			$view['admin_view'] = "admin/addbranch";
			$this->load->view('layouts/admin_layout', $view);
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->addbranch()) {
				$this->session->set_flashdata('success', 'Branch Location has been added successfully');
				redirect('admin/branches');
			} else {
				print $this->db->error();
			}
		}
	}

	public function addatm()
	{
		$this->load->model('Admin_model');
		$view['areas'] = $this->Admin_model->get_areas();

		$this->load->model('Admin_model');
		$view['banks'] = $this->Admin_model->get_banks();

		//$this->form_validation->set_rules('bank', 'Bank Name', 'trim|required|max_length[80]');
		$this->form_validation->set_rules('areaID', 'Area', 'trim|required');
		$this->form_validation->set_rules('bankID', 'Bank', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|strip_tags[address]|required');
		$this->form_validation->set_rules('map', 'Map', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[5]|max_length[15]|numeric');
		//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[devs.email]');
		$this->form_validation->set_rules('addinfo', 'Additional Information', 'trim|strip_tags[addinfo]');

		if ($this->form_validation->run() == FALSE) {

			$view['admin_view'] = "admin/addatm";
			$this->load->view('layouts/admin_layout', $view);
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->addatm()) {
				$this->session->set_flashdata('success', 'ATM Location has been added successfully');
				redirect('admin/atms');
			} else {
				print $this->db->error();
			}
		}
	}

	public function deletearea($id)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deletearea($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Area removed successfully');
		redirect('admin/areas');
	}

	public function deletebank($id)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deletebank($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Bank removed successfully');
		redirect('admin/banks');
	}

	public function deletebranch($id)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deletebranch($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Branch removed successfully');
		redirect('admin/branches');
	}

	public function deleteatm($id)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deleteatm($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> ATM removed successfully');
		redirect('admin/atms');
	}

	public function edit_area($id)
	{
		$this->load->model('User_model');

		$this->load->model('Admin_model');
		$view['area_details'] = $this->Admin_model->get_area_details($id);

		$this->form_validation->set_rules('area', 'Area Name', 'trim|required|max_length[80]');

		if ($this->form_validation->run() == FALSE) {
			if ($this->Admin_model->get_area_details($id)) {
				$view['admin_view'] = "admin/editarea";
				$this->load->view('layouts/admin_layout', $view);
			} else {
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->editarea($id)) {
				$this->session->set_flashdata('success', 'Area name has been updated successfully.');
				redirect('admin/areas');
			} else {
				print $this->db->error();
			}
		}
	}


	public function edit_bank($id)
	{
		$this->load->model('User_model');

		$this->load->model('Admin_model');
		$view['bank_details'] = $this->Admin_model->get_bank_details($id);

		$this->form_validation->set_rules('bank', 'Bank Name', 'trim|required|max_length[80]');

		if ($this->form_validation->run() == FALSE) {
			if ($this->Admin_model->get_bank_details($id)) {
				$view['admin_view'] = "admin/editbank";
				$this->load->view('layouts/admin_layout', $view);
			} else {
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->editbank($id)) {
				$this->session->set_flashdata('success', 'Bank name has been updated successfully.');
				redirect('admin/banks');
			} else {
				print $this->db->error();
			}
		}
	}

	public function edit_branch($id)
	{
		$this->load->model('User_model');

		$this->load->model('Admin_model');
		$view['branch_details'] = $this->Admin_model->get_branch_details($id);

		$this->form_validation->set_rules('address', 'Address', 'trim|strip_tags[address]|required');
		$this->form_validation->set_rules('map', 'Map', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[5]|max_length[15]|numeric');
		$this->form_validation->set_rules('addinfo', 'Additional Information', 'trim|strip_tags[addinfo]');

		if ($this->form_validation->run() == FALSE) {
			if ($this->Admin_model->get_branch_details($id)) {
				$view['admin_view'] = "admin/editbranch";
				$this->load->view('layouts/admin_layout', $view);
			} else {
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->editbranch($id)) {
				$this->session->set_flashdata('success', 'Branch details have been updated successfully.');
				redirect('admin/branches');
			} else {
				print $this->db->error();
			}
		}
	}

	public function edit_atm($id)
	{
		$this->load->model('User_model');

		$this->load->model('Admin_model');
		$view['atm_details'] = $this->Admin_model->get_atm_details($id);

		$this->form_validation->set_rules('address', 'Address', 'trim|strip_tags[address]|required');
		$this->form_validation->set_rules('map', 'Map', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|min_length[5]|max_length[15]|numeric');
		$this->form_validation->set_rules('addinfo', 'Additional Information', 'trim|strip_tags[addinfo]');

		if ($this->form_validation->run() == FALSE) {
			if ($this->Admin_model->get_atm_details($id)) {
				$view['admin_view'] = "admin/editatm";
				$this->load->view('layouts/admin_layout', $view);
			} else {
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->editatm($id)) {
				$this->session->set_flashdata('success', 'ATM details have been updated successfully.');
				redirect('admin/atms');
			} else {
				print $this->db->error();
			}
		}
	}

	public function banks()
	{
		$this->load->model('Admin_model');

		$view['banks'] = $this->Admin_model->get_banks();

		$view['admin_view'] = "admin/allbanks";
		$this->load->view('layouts/admin_layout', $view);
	}



	public function areas()
	{
		$this->load->model('Admin_model');
		$view['areas'] = $this->Admin_model->get_areas();

		$view['admin_view'] = "admin/allareas";
		$this->load->view('layouts/admin_layout', $view);
	}

	public function branches()
	{
		$this->load->model('Admin_model');
		$view['branches'] = $this->Admin_model->get_branches();

		$view['admin_view'] = "admin/allbranches";
		$this->load->view('layouts/admin_layout', $view);
	}

	public function atms()
	{
		$this->load->model('Admin_model');
		$view['atms'] = $this->Admin_model->get_atms();

		$view['admin_view'] = "admin/allatms";
		$this->load->view('layouts/admin_layout', $view);
	}

	public function editadminprofile($id)
	{

		$this->load->model('User_model');
		#get existing informations
		$this->load->model('Admin_model');
		$view['user_details'] = $this->Admin_model->get_user_details($id);

		$this->form_validation->set_rules('name', 'Name', 'trim|required|strip_tags[name]|callback_alpha_dash_space');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|min_length[10]|max_length[15]|numeric|strip_tags[contact]');

		if ($this->form_validation->run() == FALSE) {
			if ($this->User_model->get_user_details($id)) {
				$view['admin_view'] = "admin/editadminprofile";
				$this->load->view('layouts/admin_layout', $view);
			} else {
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}
		} else {
			$this->load->model('Admin_model');

			if ($this->Admin_model->editadminprofile($id)) {
				$this->session->set_flashdata('success', 'Admin profile information has been updated successfully.');
				redirect('admin');
			} else {
				print $this->db->error();
			}
		}
	}


	public function change_password($id)
	{

		$this->load->model('User_model');
		#get existing informations
		$this->load->model('User_model');
		$view['user_details'] = $this->User_model->get_user_details($id);


		$this->form_validation->set_rules('oldpassword', 'Current Password', 'trim|required');

		$this->form_validation->set_rules('newpassword', 'New Password', 'trim|required|callback_validate_strongpass');
		$this->form_validation->set_rules(
			'repassword',
			'Confirm Password',
			'trim|required|callback_validate_strongpass|matches[newpassword]'
		);


		if ($this->form_validation->run() == FALSE) {
			if ($this->User_model->get_user_details($id)) {
				$view['admin_view'] = "admin/editadminpass";
				$this->load->view('layouts/admin_layout', $view);
			} else {
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}
		} else {
			$cur_password = $this->input->post('oldpassword');
			$this->load->model('Admin_model');
			$passwd = $this->User_model->getCurrPassword($id);


			if (password_verify($cur_password, $passwd->password)) {
				if ($this->User_model->changepass($id)) {
					$this->session->set_flashdata('success', 'Your have changed your password successfully.');
					redirect('admin');
				} else {
					print $this->db->error();
				}
			} else {
				$this->session->set_flashdata('danger', 'Please enter your current password correctly.');
				$view['admin_view'] = "admin/editadminpass";
				$this->load->view('layouts/admin_layout', $view);
			}
		}
	}
}
