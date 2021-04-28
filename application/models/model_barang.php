<?php
/**
 * 
 */
class model_barang extends CI_Model
{
	
	public function tampil_data()
	{
		return $this->db->get('tb_barang');
	}

	public function flash_sale()
	{
		$this->db->get('tb_barang');
		$this->db->from('tb_barang');
		$this->db->where('label','Flash Sale');
		$query= $this->db->get();
		return $query->result();
	}

	public function tambah_barang($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_barang($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_barang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id){
		$result = $this->db->where('id_brg',$id)
							->limit(1)
							->get('tb_barang');
		if ($result->num_rows()>0) {
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_brg($id_brg){
		$result=$this->db->where('id_brg',$id_brg)->get('tb_barang');
		if ($result-> num_rows() > 0) {
			return $result->result();		
		} else{
			return false;
		}
	}
}
?>