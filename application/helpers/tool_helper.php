<?php 

function elaqe_ayarlari(){
	$ci=& get_instance();
	$cavab=$ci->db->select('*')->from('elaqe')
	->get()->result_array();
	return $cavab;
}
function haqqimizda(){
	$ci=& get_instance();
	$cavab=$ci->db->select('*')->from('haqqimizda')
	->get()->result_array();
	return $cavab;
}
function slider()
{
	$ci=& get_instance();
	$cavab=$ci->db->select('*')->from('slider')
	->get()->result_array();
	return $cavab;
}
function xeberler(){
	$ci=& get_instance();
	$cavab=$ci->db->select('*')->from('xeberler')
	->get()->result_array();
	return $cavab;
}
function elaqe(){
	$ci = & get_instance();
	$cavab=$ci->db->select('*')->from('elaqe')
	->get()->result_array();
	return $cavab;
}
function gallery(){
	$ci= &get_instance();
	$cavab=$ci->db->select('*')->from('gallery')
	->where('status','1')
	->order_by('id','desc')
	->limit('4')
	->get()->result_array();
	return $cavab;
}


 ?>