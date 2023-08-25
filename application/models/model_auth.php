<?php

class Model_auth extends CI_Model{

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function masuk_data($data,$table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function get($table)
    {
        $this->db->ORDER_BY('id_user', 'DESC');
        return $this->db->get($table);
    }

	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');

		$result   = $this->db->where('username',$username)
		                     ->where('password',$password)
		                     ->limit(1)
		                     ->get('tb_user');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
}