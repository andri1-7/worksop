<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $data = array();
    $data["record"] = $this->m_mahasiswa->data();
    $this->load->view('header');
    $this->load->view('index', $data);
    $this->load->view('footer');
  }

  public function daftar()
  {
    if ($_POST) {
      $data = array (
        'nama' => $_POST['nama'],
        'gender' => $_POST['gender'],
        'telepon' => $_POST['telepon'],
        'asal_sekolah'=> $_POST['sekolah'],
        'alamat' => $_POST['alamat'],
        'program_studi' => $_POST['prodi']
      );

     $this->m_mahasiswa->tambah($data);

    }
    $this->load->view('header');
    $this->load->view('daftar');
    $this->load->view('footer');
  }

  public function edit($id = null)
  {
    $data['record'] = $this->m_mahasiswa->data($id);
    $this->load->view('header');
    $this->load->view('edit', $data);
    $this->load->view('footer');
  }

  public function detail($id)
  {
    $data['record'] = $this->m_mahasiswa->data($id);
    $this->load->view('header');
    $this->load->view('detail', $data);
    $this->load->view('footer');
  }

  public function edit_simpan($id)
  {
    $data = array(
      'nama' => $_POST['nama'],
      'gender' => $_POST['gender'],
      'telepon' => $_POST['telepon'],
      'asal_sekolah' => $_POST['sekolah'],
      'alamat' => $_POST['alamat'],
      'program_studi' => $_POST['prodi']
    );

    $this->m_mahasiswa->update($data, $id);

    redirect(base_url());
  }

  public function hapus($id) 
  {
    $this->m_mahasiswa->delete($id);
    redirect(base_url());
  }
}
