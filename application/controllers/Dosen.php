<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Dosen";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dosen'] = $this->Dosen_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("dosen/vw_dosen", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Dosen";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Dosen', 'required', [
            'required' => 'Nama Dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('nip', 'Nip', 'required|integer', [
            'required' => 'NIP Dosen Wajib di isi',
            'integer' => 'NIP Harus Angka'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required', [
            'required' => 'No Hp Dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required', [
            'required' => 'Jenis kelamin dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[dosen.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus valid',
            'required' => 'Email Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("dosen/vw_tambah_dosen", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'nip' => $this->input->POST('nip'),
                'alamat' => $this->input->POST('alamat'),
                'no_hp' => $this->input->POST('no_hp'),
                'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
                'email' => $this->input->POST('email'),
            ];
            $this->Dosen_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Dosen Berhasil Ditambah!</div>');
            redirect('Dosen');
        }
    }

    public function hapus($id)
    {
        $this->Dosen_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Dosen Berhasil Dihapus!</div>');
        redirect('Dosen');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah Dosen";
        $data['dosen'] = $this->Dosen_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Dosen', 'required', [
            'required' => 'Nama Dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('nip', 'Nip', 'required|integer', [
            'required' => 'NIP Dosen Wajib di isi',
            'integer' => 'NIP Harus Angka'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required', [
            'required' => 'No Hp Dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required', [
            'required' => 'Jenis kelamin dosen Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email Harus valid',
            'required' => 'Email Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("dosen/vw_ubah_dosen", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'nip' => $this->input->POST('nip'),
                'alamat' => $this->input->POST('alamat'),
                'no_hp' => $this->input->POST('no_hp'),
                'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
                'email' => $this->input->POST('email'),
            ];
            $id = $this->input->POST('id');
            $this->Dosen_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data Dosen Berhasil Diubah!</div>');
            redirect('Dosen');
        }
    }
    public function detail($id)
	{
		$data['judul'] = "Halaman Detail Dosen";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dosen'] = $this->Dosen_model->getById($id);
		$this->load->view("layout/header",$data);
		$this->load->view("dosen/vw_detail_dosen", $data);
		$this->load->view("layout/footer",$data);
	}
}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */
