<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include_once('ssp.class.php');

class Datatable{
   function simple( $params, $query, $primaryKey, $columns){
      $CI =& get_instance();
      $sql_details = array(
          'user' => $CI->db->username,
          'pass' => $CI->db->password,
          'port' => $CI->db->port,
          'db'   => $CI->db->database,
          'host' => $CI->db->hostname
      );
      $query="($query) xyz";
      $data=SSP::simple( $params, $sql_details, $query, $primaryKey, $columns);
      return $data;
   }
}