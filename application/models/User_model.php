<?php

class User_model extends CI_Model
{

	public function login_user($email, $password)
	{
		$this->db->where('email', $email);
		$result = $this->db->get('users');

		$db_password = $result->row('password');

		if (password_verify($password, $db_password)) {
			// return $result->row(0)->id;
			return $result->row();
		} else {
			return false;
		}
	}

	public function getmail($email)
	{
		$this->db->where('email', $email);
		$result = $this->db->get('users');
		return $result->result_array();
	}


	public function get_devs($limit, $offset)
	{
		$this->db->select('*');
		$this->db->from('devs');

		$this->db->order_by('devs.id', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	#...For pagination
	public function num_rows_devs()
	{
		$this->db->select('*');
		$this->db->from('devs');

		$this->db->order_by('devs.id', 'DESC');
		$query = $this->db->get();
		return $query->num_rows();
	}


	public function findbranch()
	{
		$areaID	= $this->input->post('areaID');
		$bankID	= $this->input->post('bankID');

		$this->db->select('branches.*, areas.areaname, banks.bankname');
		$this->db->from('branches');
		$this->db->join('areas', 'branches.areaID = areas.areaID');
		$this->db->join('banks', 'branches.bankID = banks.bankID');
		$this->db->where('branches.bankID', $bankID);
		$this->db->where('branches.areaID', $areaID);
		$query = $this->db->get();
		return $query->result();
	}



	public function get_user_details($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row();
	}
	
	public function get_user_details_alt($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		return $query->result();
	}


	public function edit_profile($id)
	{

		$data = array(
			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact')
		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}

	public function getCurrPassword($id)
	{
		$query = $this->db->where(['id' => $id])
			->get('users');
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}


	public function changepass($id)
	{
		$options = ['cost' => 12];
		$encripted_pass = password_hash($this->input->post('newpassword'), PASSWORD_BCRYPT, $options);

		$data = array(
			//'name'	=> $this->input->post('name'),
			//'contact'	=> $this->input->post('contact'),
			'password' => $encripted_pass,

		);

		return $query = $this->db->where('id', $id)->update('users', $data);
	}

}
