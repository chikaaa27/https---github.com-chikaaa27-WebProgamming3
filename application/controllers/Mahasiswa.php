<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-mahasiswa');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Mahasiswa',
            'required|min_length[3]',
            [
                'required' => 'Nama Mahasiswa Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'NIS Mahasiswa',
            'required|min_length[3]',
            [
                'required' => 'NIS Mahasiswa Harus diisi',
                'min_length' => 'NIS terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required|min_length[3]',
            [
                'required' => 'Kelas Mahasiswa Harus diisi',
                'min_length' => 'Kelas tidak sesuai'
            ]
        );
        $this->form_validation->set_rules(
            'tgl_lahir',
            'Tanggal Lahir',
            'required|min_length[3]',
            [
                'required' => 'Tanggal Lahir Mahasiswa Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'tmpt_lahir',
            'Tempat Lahir',
            'required|min_length[3]',
            [
                'required' => 'Tempat Lahir Mahasiswa Harus diisi',
                'min_length' => 'Input salah'
            ]
        ); 
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|min_length[3]',
            [
                'required' => 'Alamat Mahasiswa Harus diisi',
                'min_length' => 'Alamat terlalu pendek'
            ]
        ); 
        $this->form_validation->set_rules(
            'jns_kelamin',
            'Jenis Kelamin',
            'required|min_length[3]',
            [
                'required' => 'Jenis Kelamin Mahasiswa Harus diisi',
            ]
        );
        $this->form_validation->set_rules(
            'agama',
            'Agama',
            'required|min_length[3]',
            [
                'required' => 'Agama Mahasiswa Harus diisi',
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('view-mahasiswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgl_lahir'=>$this->input->post('tgl_lahir'),
                'tmpt_lahir' => $this->input->post('tmpt_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jns_kelamin' => $this->input->post('jns_kelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data-mahasiswa', $data);
        }
    }
}
