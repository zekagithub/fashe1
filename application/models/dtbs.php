<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dtbs extends CI_Model{
  function kontrol($email,$sifre){
  	$cavab=$this->db->select('*')
  	->from('admin')->where('email',$email)
  	->where('sifre',sha1(md5($sifre)))
  	->get()
    ->row();
  	return $cavab;
  }
  function cedvel($from){
  	$cavab=$this->db->select('*')->from($from)
  	->order_by('id','desc')->get()->result_array();
  	return $cavab;
  }
  function cek($id,$from){
  	$cavab=$this->db->select('*')->from($from)
  	->where('id',$id)->get()->row_array();
  	return $cavab;
  }
  function guncelle($data=array(),$id,$where,$from){
  	$cavab=$this->db->where($where,$id)->update($from,$data);
  return $cavab;
  }
function elave($from,$data=array()){
  $cavab=$this->db->insert($from,$data);
  return $cavab;
}
function sil($id,$where,$from){
  $cavab=$this->db->delete($from,array($where=>$id));
  return $cavab;
}
function mesajupdate($id,$data=array()){
  $cavab=$this->db->where('id',$id)->update('mesajlar',$data);
  return $cavab;
}

}
?>