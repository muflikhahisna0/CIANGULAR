<?php
class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function addMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('input-name', true),
            "nim" => $this->input->post('input-nim', true),
            "email" => $this->input->post('input-email', true),
            "jurusan" => $this->input->post('select-jurusan', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }
    public function deleteMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', [
            'id' => $id
        ])->row_array();
    }
    public function editMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('input-name', true),
            "nim" => $this->input->post('input-nim', true),
            "email" => $this->input->post('input-email', true),
            "jurusan" => $this->input->post('select-jurusan', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }
}
