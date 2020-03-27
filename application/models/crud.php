<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Model {

    public function insert($data){
        return $this->db->insert('login', $data);
    }

    public function getData() {
        return $this->db->get('login')->result();
    }

    public function viewData($where) {
        $this->db->where($where);
        return $this->db->get('login') -> result();
    }
    
    public function update($kondisi, $data_update) {
        $this->db->where($kondisi);
        return $this->db->update('login', $data_update);
    }

    public function hapus($kondisi) {
        $this->db->where($kondisi);
        return $this->db->delete('login');
    }
}
?>