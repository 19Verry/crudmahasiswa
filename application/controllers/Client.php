<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $file = file_get_contents('http://localhost:8000/mahasiswa');
		$data = json_decode($file);

		if (is_object($data) && property_exists($data,'data')) {
			$data_array = $data->data;

			if (is_array($data_array)) {
				echo '<table border = "1">';
				echo '<tr><th>ID Mahasiswa</th><th>Nama Mahasiswa</th><th>NIM Mahasiswa</th>
				<th>Email Mahasiswa</th><th>Jenis Kelamin Mahasiswa</th></tr>';

				foreach ($data_array as $item) {
					echo '<tr>';				
					echo '<td>' . $item->id . '</td>';				
					echo '<td>' . $item->nama_mahasiswa . '</td>';				
					echo '<td>' . $item->nim . '</td>';				
					echo '<td>' . $item->email_mahasiswa . '</td>';				
					echo '<td>' . $item->jk_mahasiswa . '</td>';				
					echo '<tr>';	
				}
				echo '</table>';
  		}else{
				echo 'Data tidak valid';
			}
		}else{
			echo 'Data tidak valid';
		} 
	}
}
