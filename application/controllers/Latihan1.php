<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang... selamat belajar Web Programming";
    }
    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($nil1, $nil2);
        echo "Hasil Penjumlahan dari". $nil1 ." + " . $nil2 ." = " .$hasil;
    }
}
