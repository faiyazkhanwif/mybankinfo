<?php

class Admin_model extends CI_Model
{

	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

	public function addarea()
	{

		$data = array(

			'areaname'	=> $this->input->post('area')

		);

		$insert_area = $this->db->insert('areas', $data);
		return $insert_area;
	}

	public function addbank()
	{

		$data = array(

			'bankname'	=> $this->input->post('bank')

		);

		$insert_bank = $this->db->insert('banks', $data);
		return $insert_bank;
	}

	public function addbranch()
	{

		$data = array(

			'areaID'	=> $this->input->post('areaID'),
			'bankID'	=> $this->input->post('bankID'),
			'address'	=> $this->input->post('address'),
			'map'	=>  $_POST['map'],
			'contact'	=> $this->input->post('contact'),
			'addinfo'	=> $this->input->post('addinfo')

		);

		$insert_branch = $this->db->insert('branches', $data);
		return $insert_branch;
	}

	public function addatm()
	{

		$data = array(

			'areaID'	=> $this->input->post('areaID'),
			'bankID'	=> $this->input->post('bankID'),
			'address'	=> $this->input->post('address'),
			'map'	=>  $_POST['map'],
			'contact'	=> $this->input->post('contact'),
			'addinfo'	=> $this->input->post('addinfo')

		);

		$insert_atm = $this->db->insert('atms', $data);
		return $insert_atm;
	}

	public function deletearea($id)
	{
		$this->db->where('areaID', $id);
		$this->db->delete('areas');

	}

	public function deletebank($id)
	{
		$this->db->where('bankID', $id);
		$this->db->delete('banks');

	}

	public function deletebranch($id)
	{
		$this->db->where('branchID', $id);
		$this->db->delete('branches');

	}

	public function deleteatm($id)
	{
		$this->db->where('atmID', $id);
		$this->db->delete('atms');

	}

	public function get_areas()
	{
		$this->db->select('areas.areaID, areas.areaname');

		$this->db->from('areas');

		$this->db->order_by('areas.areaID', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_banks()
	{
		/*=== SQL join ===*/
		$this->db->select('*');

		$this->db->from('banks');

		$this->db->order_by('banks.bankID', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function num_rows_admin_banks()
	{
		$this->db->select('*');
		$this->db->from('banks');

		$this->db->order_by('banks.bankID', 'DESC');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_total_banks()
	{
		$query = $this->db->get('banks');
		return $query->result();
	}

	public function num_rows_admin_areas()
	{
		$this->db->select('*');
		$this->db->from('areas');

		$this->db->order_by('areas.areaID', 'DESC');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_total_areas()
	{
		$query = $this->db->get('areas');
		return $query->result();
	}

	public function count_total_branches()
	{
		$query = $this->db->get('branches');
		return $query->result();
	}

	public function count_total_atms()
	{
		$query = $this->db->get('atms');
		return $query->result();
	}


	public function get_branches()
	{
		/*=== SQL join ===*/
		$this->db->select('branches.branchID, branches.areaID, branches.bankID, branches.address, banks.bankname, areas.areaname');
		$this->db->from('branches');
		$this->db->join('areas', 'branches.areaID = areas.areaID');
		$this->db->join('banks', 'branches.bankID = banks.bankID');

		$this->db->order_by('branches.branchID', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_branch_details($id)
	{
		/*=== SQL join ===*/
		$this->db->select('branches.*, banks.bankname, areas.areaname');
		$this->db->from('branches');
		$this->db->join('areas', 'branches.areaID = areas.areaID');
		$this->db->join('banks', 'branches.bankID = banks.bankID');

		$this->db->where('branches.branchID', $id);

		$this->db->order_by('branches.branchID', 'ASC');
		$query = $this->db->get();
		return $query->row();
	}

	public function get_atms()
	{
		/*=== SQL join ===*/
		$this->db->select('atms.atmID, atms.areaID, atms.bankID, atms.address, banks.bankname, areas.areaname');
		$this->db->from('atms');
		$this->db->join('areas', 'atms.areaID = areas.areaID');
		$this->db->join('banks', 'atms.bankID = banks.bankID');

		$this->db->order_by('atms.atmID', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_atm_details($id)
	{
		/*=== SQL join ===*/
		$this->db->select('atms.*, banks.bankname, areas.areaname');
		$this->db->from('atms');
		$this->db->join('areas', 'atms.areaID = areas.areaID');
		$this->db->join('banks', 'atms.bankID = banks.bankID');

		$this->db->where('atms.atmID', $id);

		$this->db->order_by('atms.atmID', 'ASC');
		$query = $this->db->get();
		return $query->row();
	}

	public function get_user_details($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		return $query->row();
	}
	public function get_area_details($id)
	{
		$this->db->where('areaID', $id);
		$query = $this->db->get('areas');
		return $query->row();
	}

	public function get_bank_details($id)
	{
		$this->db->where('bankID', $id);
		$query = $this->db->get('banks');
		return $query->row();
	}

	public function editadminprofile($id)
	{
		//$options = ['cost'=> 12];
		//$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(
			'name'	=> $this->input->post('name'),
			'contact'	=> $this->input->post('contact'),
			//'password' => $encripted_pass,

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


	public function editarea($id)
	{


		$data = array(
			'areaname'	=> $this->input->post('area'),

		);

		return $query = $this->db->where('areaID', $id)->update('areas', $data);
	}

	public function editbank($id)
	{


		$data = array(
			'bankname'	=> $this->input->post('bank'),

		);

		return $query = $this->db->where('bankID', $id)->update('banks', $data);
	}

	public function editbranch($id)
	{


		$data = array(
			'address'	=> $this->input->post('address'),
			'map'	=> $_POST['map'],
			'contact'	=> $this->input->post('contact'),
			'addinfo'	=> $this->input->post('addinfo')

		);

		return $query = $this->db->where('branchID', $id)->update('branches', $data);
	}

	public function editatm($id)
	{


		$data = array(
			'address'	=> $this->input->post('address'),
			'map'	=> $_POST['map'],
			'contact'	=> $this->input->post('contact'),
			'addinfo'	=> $this->input->post('addinfo')

		);

		return $query = $this->db->where('atmID', $id)->update('atms', $data);
	}
}
