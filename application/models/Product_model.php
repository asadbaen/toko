<?php
defined('BASEPATH') or exit('No direct script access aloowed');

class Product_model extends CI_Model
{
    public function getProduct()
    {
        $sqlQuery = "SELECT tbl_products.*, tbl_categories.category_title
                FROM tbl_products
                JOIN tbl_categories ON 
                tbl_products.category_product=tbl_categories.id_category";
        
        $query =$this->db->query($sqlQuery);

        return $query->result_array();
    }

    public function getProductId($id_product)
    {
        $this->db->select('*');
        $this->db->from('tbl_products');
        $this->db->where('id_product', $id_product);
        $query = $this->db->get();
        return $query->row_array();
    }
    // kode barang
    public function kdbrg(){
        $this->db->select(' RIGHT(tbl_products.kode_brg, 3) as kode_brg', false);
        $this->db->order_by('kode_brg', 'DESC');
        $this->db->limit(1);

        $query = $this->db->get('tbl_products');
            if($query->num_rows() <> 0){
                $data = $query->row();
                $kode = intval($data->kode_brg) + 1;
            }else{
                $kode = 1;
            }

        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $tampilKode = "BRG".$batas;

        return $tampilKode;
    }

    public function createProduct($data){
        $this->db->insert('tbl_products', $data);

        return $this->db->insert_id();
    }

    public function destroy($id_product)
    {
        try {
            $this->db->where('id_product', $id_product);
            $this->db->delete('tbl_products');

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
