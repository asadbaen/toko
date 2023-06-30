<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
    public function getCategories()
    {
        $sqlQuery = "SELECT * FROM tbl_categories";

        $query = $this->db->query($sqlQuery);

        return $query->result_array();
    }

    public function categoryCreated($data)
    {

        $this->db->insert('tbl_categories', $data);

        return $this->db->insert_id();
    }

    public function categoryId($id_category)
    {
        // $query = $this->db->get_where('tbl_categories', array('id_category' => $id_category))->row();

        $this->db->select('*');
        $this->db->from('tbl_categories');
        $this->db->where('id_category', $id_category);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function updateCategory($id_category, $data)
    {

        $this->db->where('id_category', $id_category);
        $this->db->update('tbl_categories', $data);
    }

    public function destroy($id_category)
    {
        try {
            $this->db->where('id_category', $id_category);
            $this->db->delete('tbl_categories');

            if ($this->db->affected_rows() > 0) {
                return true; // Mengembalikan nilai true jika data berhasil dihapus
            } else {
                return false; // Mengembalikan nilai false jika data gagal dihapus
            }
        } catch (Exception $e) {
            // Tangani kesalahan yang terjadi selama penghapusan
            error_log('Error deleting data: ' . $e->getMessage());
            return false; // Mengembalikan nilai false jika terjadi kesalahan
        }
    }
}
