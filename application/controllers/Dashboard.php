<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	private $url = "https://api.rajaongkir.com/starter/";
	private $apiKey = "28837f9d6014cf6ec149c82f7887ef3d";
	
	public function index()
	{
		$data['barang']= $this->model_barang->tampil_data()->result();
		$data['flashsale']= $this->model_barang->flash_sale();
		$this->load->view('dashboard', $data);
	}

	public function tambah_ke_keranjang($id)
	{
		$barang=$this->model_barang->find($id);

		$data = array(
        'id'      => $barang->id_brg,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg
        // 'options' => array('Size' => 'L', 'Color' => 'Red')
		);
		$this->cart->insert($data);
		redirect('Dashboard');
	}

	public function detile_keranjang(){
		$this->load->view('keranjang');
	}

	public function hapus_keranjang(){
		$this->cart->destroy();
		redirect('Dashboard/detile_keranjang');
	}

	public function pembayaran(){
		$this->load->view('pembayaran');
	}

	public function proses_pesanan(){
		$is_processed=$this->model_invoice->index();
		if($is_processed){
		$this->cart->destroy();
		$this->load->view('proses_pesanan');
		} else{
			echo "Maaf, Pesanan Anda Gagal Diproses";
		}	
	}


public function detail ($id_brg)
{
	$data['barang'] = $this->model_barang->detail_brg($id_brg);
	$this->load->view('detail',$data);
}

public function about(){
	$this->load->view('about');

}
















	public function pembayaran0(){
		$provinsi1=$this->rajaongkir('province');
		$provinsi2=json_decode($provinsi1,true);
		// $provinsi3= json_decode($provinsi2->rajaongkir->results,); 
		$data['provinsi']=$provinsi2;

		// print_r ($data); die();
		$this->load->view('pembayaran',$data);
	}

public function pembayaran1(){
		$provinsi1=$this->rajaongkir('province');
		$data['provinsi']=json_decode($provinsi1)->rajaongkir->results;
		print_r ($data); die();

		$this->load->view('pembayaran',$data);
		
	}

	public function rajaongkir($method,$id_province=null)
	{
		$endPoint=$this->url.$method;
		if ($id_province!=null) {
			$endPoint=$endPoint."province=".$id_province;
		}
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $endPoint,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
		    "key: ".$this->apiKey
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		return $response;

		// if ($err) {
		//   echo "cURL Error #:" . $err;
		// } else {
		//   $provinsi=json_decode($response,TRUE);
		//   // echo "<pre>";
		//   // print_r($provinsi);
		//   // echo "</pre>";
		//   // $obj=json_decode($response) ;
		//   // var_dump($provinsi,$obj);
		//   // $dataprovinsi=$provinsi["rajaongkir"]["results"];
		//   // return $dataprovinsi;

		// }
	}

	
		public function aaa(){
			$curl = curl_init();
 
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
		    "key: ".$this->apiKey
			    
			  ),
			));
 
			$response = curl_exec($curl);
			$err = curl_error($curl);
 
			curl_close($curl);
 
			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  return json_decode($response,true);
			}
		}
 
 
		public function pembayaran2(){
			$data['province'] = $this->aaa();
			$this->load->view('pembayaran',$data);
		}
	

}

?>