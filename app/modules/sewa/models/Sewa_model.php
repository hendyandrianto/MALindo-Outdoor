<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sewa_model extends CI_Model {
    var $table         = 'view_booking';
    var $table_        = 'tbl_booking';
    var $column_order  = array('kode_booking','foto','nama','tgl_booking','tgl_perencanaan_sewa','tgl_selesai','lama','status_booking',null);
    var $column_search = array('kode_booking','nama','tgl_booking','tgl_perencanaan_sewa','tgl_selesai'); 
    var $order         = array('kode_booking' => 'desc');
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    private function _get_datatables_query(){
        $this->db->where("status_booking",'1');
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item) {
            if($_POST['search']['value']) {
                if($i===0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                }else{
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if(isset($_POST['order'])){
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if(isset($this->order)){
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function update($where, $data){
        $this->db->update($this->table_, $data, $where);
        return $this->db->affected_rows();
    }
    function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function get_by_id($id){
        $this->db->from($this->table);
        $this->db->where('kode_booking',$id);
        $query = $this->db->get();
        return $query->row();
    }
    public function count_all(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    public function hapus_by_kode_booking($kode_booking){
        $this->db->where('kode_booking', $kode_booking);
        $this->db->delete($this->table_);
    }
}