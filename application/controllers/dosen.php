<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Dosen_model');
    }
    public function index(){

        $data['dosen']=$this->Dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['dosen']=$this->Dosen_model->get_all_dosen();
        $this->load->view('templates/header');
        $this->load->view('dosen/form_dosen', $data);
        $this->load->view('templates/footer');
    }
    public function insert(){
        $nidn=$this->input->post('nidn');
        $nama_dosen=$this->input->post('nama_dosen');
        $alamat=$this->input->post('alamat');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $email=$this->input->post('email');
        $telp=$this->input->post('telp');

        $data=array(
            'nidn'=>$nidn,
            'nama_dosen'=>$nama_dosen,
            'alamat'=>$alamat,
            'jenis_kelamin'=>$jenis_kelamin,
            'email'=>$email,
            'telp' =>$telp
        );

        $result=$this->Dosen_model->insert_dosen($data);

        if ($result){
            $this->session->set_flashdata('success','Data Dosen berhasil disimpan');
            redirect('dosen');
        }else{
            $this->session->set_flashdata('error','Data Dosen gagal disimpan');
            redirect('dosen');
        }
    }
    public function hapus($nidn){
        $this->Dosen_model->delete_dosen($nidn);
        redirect('dosen');
    }
    public function edit($nidn){
        $data['dosen']=$this->Dosen_model->get_dosen_by_id($nidn);
        $this->load->view('templates/header');
        $this->load->view('dosen/edit_dosen', $data);
        $this->load->view('templates/footer');
    }
    public function update($nidn){
        $this->form_validation->set_rules('nidn','nidn', 'required');
        $this->form_validation->set_rules('nama_dosen','nama_dosen', 'required');
        $this->form_validation->set_rules('alamat','alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin','alamat', 'required');
        $this->form_validation->set_rules('email','email', 'required');
        $this->form_validation->set_rules('telp','telp', 'required');
        if ($this ->form_validation->run() === FALSE){
            $this->index($nidn);
        }else{
            $data = [
                'nidn' => $this->input->post('nidn'),
                'nama_dosen' => $this->input->post('nama_dosen'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email' => $this->input->post('email'),
                'telp' => $this->input->post('telp')
            ];
            $this->Dosen_model->update_dosen($nidn, $data);
            redirect('dosen');
        }
    }
}
?>