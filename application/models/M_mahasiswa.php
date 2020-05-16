<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
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
    $this->load->view('welcome_message');
  }

  public function tambah($data) 
  {
    $this->db->insert('mahasiswa', $data);
  }

  public function data($id = null)
  {
    $this->db->select('*');
    $this->db->from('mahasiswa');
    if ($id) {
      $this->db->where('id_pendaftaran', $id);
      $query = $this->db->get()->row();
    } else {
      $query = $this->db->get()->result();
    }
     return $query;
  }

  public function update($data, $id)
  {
    $query = $this->db->update("mahasiswa", $data, $id);

    if ($query) {
      return true;
    } else {
      return false;
    }
  }

  public function delete($id)
  {
    $this->db->where('id_pendaftaran',$id);
    $this->db->delete('mahasiswa');
  }
}
