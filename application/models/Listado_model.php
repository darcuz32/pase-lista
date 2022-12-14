<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listado_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function save($data){
        $this->db->insert('guests',$data);
    }

    public function getGuest($id){
        $this->db->select("*");
        $this->db->where('id', $id);
        $query = $this->db->get("guests");
        return $query->row();
    }

    public function getGuests(){
        $this->db->select("*, CASE WHEN attendance = 1 THEN 'SI' ELSE 'NO' END AS attendance");
        $query = $this->db->get("guests");
        return $query->result();
    }

    public function update($id, $data){
        $this->db->where('id', $id);
        $this->db->update('guests',$data);
    }

    public function updateAttendance($id, $data){
        $this->db->set('attendance_date','NOW()',FALSE);
        $this->db->where('id', $id);
        $this->db->update('guests',$data);
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('guests');
    }
    
}