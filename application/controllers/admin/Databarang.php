<?php
/**
 * 
 */
class Databarang extends CI_Controller
{
	
	public function index()
	{
		$data['barang']=$this->model_barang->tampil_data()->result();
		$this->load->view('admin/databarang',$data);
	}

	public function aksi_tambah()
	{
		$nama_brg=$this->input->post('nama_brg');
		$keterangan=$this->input->post('keterangan');
		$kategori=$this->input->post('kategori');
		$harga=$this->input->post('harga');
		$stok=$this->input->post('stok');
		$label=$this->input->post('label');
		$gambar=$_FILES['gambar']['name'];
		if ($gambar='') {
		}
		else{
			$config['upload_path'] = './asset/img/upload';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload";
			} else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data= array(
			'nama_brg' 		=> $nama_brg,
			'keterangan' 	=> $keterangan,
			'kategori'		=> $kategori,
			'harga'			=> $harga,
			'stok'			=> $stok,
			'gambar'		=> $gambar,
			'label'			=> $label
		);

		$this->model_barang->tambah_barang($data, 'tb_barang');
		redirect('admin/databarang/index');

	}


	public function edit($id){
		$where= array('id_brg' =>$id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
		$this->load->view('admin/edit_barang', $data);
	}

	public function update(){
		$id = $this->input->post('id_brg');
		$nama_brg = $this->input->post('nama_brg');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$label = $this->input->post('label');

		$data= array(
			'nama_brg' 		=> $nama_brg,
			'keterangan' 	=> $keterangan,
			'kategori'		=> $kategori,
			'harga'			=> $harga,
			'stok'			=> $stok,
			'label'			=> $label
		);

		$where = array(
			'id_brg' => $id
		);

		$this->model_barang->update_barang($where, $data, 'tb_barang');
		redirect('admin/databarang/index');
	}

	public function hapus($id,$gambar){
		$gb=str_replace("_", '.', $gambar);
		$where= array('id_brg' =>$id);
		 if (file_exists("./asset/img/upload/".$gb)) 
                      {
                      	unlink("./asset/img/upload/".$gb);
                      }
		$this->model_barang->hapus_barang($where, 'tb_barang');
		redirect('admin/databarang/index');
	}

}

?>