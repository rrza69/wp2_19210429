<?php
class Tugas_UTS extends CI_Controller
{
 public function index()
 {
 $this->load->view('Tugas_UTS/view-form');
 }
 public function cetak()
 {
     $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[3]', [
     'required' => 'Nama Siswa Harus diisi','min_lenght' => 'nama siswa terlalu pendek']);
	 
     $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
     'required' => 'NIS Harus diisi','min_lenght' => 'Nis terlalu pendek']);
	 
	 $this->form_validation->set_rules('kelas','Kelas','required|min_length[1]', [
     'required' => 'Kelas Harus diisi','min_lenght' => 'Kelas terlalu pendek']);
	 
	 $this->form_validation->set_rules('tanggal','Tanggal','required|min_length[1]', [
     'required' => 'Tanggal Lahir Harus diisi','min_lenght' => 'tanggal lahir terlalu pendek']);
	 
	 $this->form_validation->set_rules('tempat','Tempat','required|min_length[1]', [
     'required' => 'Tempat Lahir Harus diisi','min_lenght' => 'tempat lahir terlalu pendek']);
	 
	 $this->form_validation->set_rules('alamat','Alamat','required|min_length[1]', [
     'required' => 'Alamat Harus diisi','min_lenght' => 'alamat terlalu pendek']);
	 
	 $this->form_validation->set_rules('jenis','Jenis','required|min_length[1]', [
     'required' => 'Jenis Kelamin Harus diisi','min_lenght' => 'jenis kelamin terlalu pendek']);
	 
	 $this->form_validation->set_rules('agama','Agama','required|min_length[1]', [
     'required' => 'Agama Harus dipilih','min_lenght' => 'agama terlalu pendek']);
  
     if ($this->form_validation->run() != true) {
         $this->load->view('Tugas_UTS/view-form');
     } else {
         $data = [
             'nama' => $this->input->post('nama'),
             'nis' => $this->input->post('nis'),
             'kelas' => $this->input->post('kelas'),
			 'tanggal' => $this->input->post('tanggal'),
			 'tempat' => $this->input->post('tempat'),
			 'alamat' => $this->input->post('alamat'),
			 'jenis' => $this->input->post('jenis'),
			 'agama' => $this->input->post('agama'),
          ];
			 
             $this->load->view('Tugas_UTS/view-data', $data);
     }
  }
}