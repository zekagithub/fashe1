<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 public function protect(){
  	$giris=$this->session->userdata('giris');
     if (!$giris) {
     	redirect('admin');
     }
  }



public function index(){
	$giris=$this->session->userdata('giris');
	if ($giris) {
     redirect('admin/anasehife');	
           }
	$this->load->view('back/giris');
}


public function giriset(){
	$email=$this->input->post('email');
	$sifre=$this->input->post('sifre');
	$kontrol=$this->dtbs->kontrol($email,$sifre);
	if ($kontrol) {
            $this->session->set_userdata('giris',true);
            redirect('admin/anasehife');
	}
	else{
       $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>İstifadəci adiniz yanlisdir...</h4></div>');
       redirect('admin');

	}


}
public function anasehife(){
	$this->protect();
	$this->load->view('back/anasehife');
}
public function cixis(){
	$this->session->sess_destroy();
	redirect('admin');
}
//admin umumi emeliyyatlarin sonu
//ayarlarin baslangici
public function ayarlar(){
  $this->protect();
	$cavab=$this->dtbs->cedvel('umumi_ayarlar');
	$data['melumat']=$cavab;
	$this->load->view('back/ayarlar/anasehife',$data);
}
public function ayardeyisdir($id){
    $this->protect();
	$cavab=$this->dtbs->cek($id,'umumi_ayarlar');
	$data['melumat']=$cavab;
	$this->load->view('back/ayarlar/edit/anasehife',$data);
}
public function ayarguncelle(){
    $this->protect();
$data=array(
'id'=>$id=$this->input->post('id'),
'title'=>$title=$this->input->post('title'),
'keyword'=>$keyword=$this->input->post('keyword'),
'author'=>$author=$this->input->post('author')
);
$cavab=$this->dtbs->guncelle($data,$id,'id','umumi_ayarlar');
if ($cavab) {
        $this->session->set_flashdata('status','<div class="alert alert-success"><h4>Sayt ayarlarini deyisdirdiniz...</h4></div>');
        redirect('admin/ayarlar');
     
  }else{
        $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Deyisdirilmedi!!!</h4></div>');
        redirect('admin/ayarlar');
       }
  

}
//sayt ayarlarinin sonu

//elaqe ayarlarinin baslangici
public function elaqe(){
    $this->protect();
	$cavab=$this->dtbs->cedvel('elaqe');
	$data['melumat']=$cavab;
	$this->load->view('back/elaqe/anasehife',$data);
}
public function elaqedeyisdir($id){
    $this->protect();
	$cavab=$this->dtbs->cek($id,'elaqe');
	$data['melumat']=$cavab;
   $this->load->view('back/elaqe/edit/anasehife',$data);

}
public function elaqeguncelle(){
    $this->protect();
	$data=array(
		'id'=>$id=$this->input->post('id'),
		'tel'=>$tel=$this->input->post('tel'),
		'fax'=>$fax=$this->input->post('fax'),
		'mail'=>$mail=$this->input->post('mail'),
		'adres'=>$adres=$this->input->post('adres'),
		'is_vaxti'=>$vaxt=$this->input->post('is_vaxti')

	);
	$cavab=$this->dtbs->guncelle($data,$id,'id','elaqe');
	if ($cavab) {
        $this->session->set_flashdata('status','<div class="alert alert-success"><h4>Sayt ayarlarini deyisdirdiniz...</h4></div>');
        redirect('admin/elaqe');
     
  }else{
        $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Deyisdirilmedi!!!</h4></div>');
        redirect('admin/elaqe');
       }
}
//elaqe ayarlarinin sonu
//sosial-mediya ayarlarinin baslangici
public function sosial(){
    $this->protect();
$cavab=$this->dtbs->cedvel('sosial');
$data['melumat']=$cavab;
$this->load->view('back/sosial/anasehife',$data);
}
public function smediyadeyis($id){
    $this->protect();

$cavab=$this->dtbs->cek($id,'sosial');
$data['melumat']=$cavab;
$this->load->view('back/sosial/edit/anasehife',$data);

}
public function smediyaguncelle(){
    $this->protect();
	$data=array(
		'id'=>$id=$this->input->post('id'),
		'sosial-title'=>$sosial=$this->input->post('sosial-title'),
        'sosial-url'=>$url=$this->input->post('sosial-url')

	);
	$cavab=$this->dtbs->guncelle($data,$id,'id','sosial');
	if ($cavab) {
        $this->session->set_flashdata('status','<div class="alert alert-success"><h4>Sosial-mediya ayarlarini deyisdirdiniz...</h4></div>');
        redirect('admin/sosial');


   	}else{
   		$thsi->session->set_flashdata('status','<div class="alert alert-danger"><h4>Deyisdirilmedi...</h4></div>');
   		redirect('admin/sosial');   	}
}
public function smediyaelave(){
    $this->protect();
	$this->load->view('back/sosial/add/anasehife');
}
public function smediyaelaveetme(){
    $this->protect();
	$data=array(
		'sosial-title'=>$sosial=$this->input->post('sosial-title'),
		'sosial-url'=>$url=$this->input->post('sosial-url')
	);
	$cavab=$this->dtbs->elave('sosial',$data);
	if ($cavab) {
         $this->session->set_flashdata('status','<div class="alert alert-success"><h4>Sosisal mediya elave etdiniz</h4></div>');
         redirect('admin/sosial');}
         else{
         	$this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Elave edilmedi</h4></div>');
         	redirect('admin/sosial');
         }

	

}
public function smediyasil($id,$where,$from){
    $this->protect();
	$cavab=$this->dtbs->sil($id,$where,$from);
	if ($cavab) {
          $this->session->set_flashdata('status','<div class="alert alert-success"><h4>Silindi!!!</h4></div>');
          redirect('admin/sosial');


	}else{
		$this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Silinmedi!!!</h4></div>');
		redirect('admin/sosial');
	}
}
public function smediyaset(){
    $this->protect();
  $id=$this->input->post('id');
  $status=($this->input->post('status')=="true") ? 1 : 0 ;
  $this->db->where('id',$id)->update('sosial',array('status'=>$status));
}
//sosial bitisi
//haqqimizda baslangici
public function haqqimizda(){
    $this->protect();
	$cavab=$this->dtbs->cedvel('haqqimizda');
	$data['melumat']=$cavab;
$this->load->view('back/haqqimizda/anasehife',$data);

}
public function haqqimizdadeyisdir($id){
    $this->protect();
	$cavab=$this->dtbs->cek($id,'haqqimizda');
	$data['melumat']=$cavab;
	$this->load->view('back/haqqimizda/edit/anasehife',$data);

}
public function haqqimizdaguncelle(){
    $this->protect();
		$data=array(
		'id'=>$id=$this->input->post('id'),
     	'haqqimizda_basliq'=>$basliq=$this->input->post('basliq'),
		'haqqimizda-melumat'=>$melumat=$this->input->post('melumat')
	);
	$cavab=$this->dtbs->guncelle($data,$id,'id','haqqimizda');
	if ($cavab) {
        $this->session->set_flashdata('status','<div class="alert alert-success"><h4>Haqqimizda deyisdirdiniz...</h4></div>');
        redirect('admin/haqqimizda');


   	}else{
   		$this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Deyisdirilmedi...</h4></div>');
   		redirect('admin/haqqimizda');   	}
	


} public function haqqimizdasil($id,$where,$from){
    $this->protect();
	$cavab=$this->dtbs->sil($id,$where,$from);
	if ($cavab) {
		$this->session->set_flashdata('status','<div class="alert alert-success"><h4>Silindi</h4></div>');
		redirect('admin/haqqimizda');
	}else{
		$this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Silinmedi</h4></div>');
		redirect('admin/haqqimizda');
	}
}
//haqqimizda bitisi
//xeberler baslangici
public function xeberler(){
    $this->protect();
	$cavab=$this->dtbs->cedvel('xeberler');
	$data['melumat']=$cavab;
	$this->load->view('back/xeberler/anasehife',$data);
}
public function xeberelave(){
    $this->protect();
   $this->load->view('back/xeberler/add/anasehife');

}

public function xeberelaveetme(){
    $this->protect();

   //$config['upload_path']= FCPATH.'assets/front/images/xeberler';
   $config['upload_path']= './assets/front/images/xeberler';
  $config['allowed_types']= 'gif|jpg|jpeg|png';
  $config['encrypt_name']= TRUE;
  $this->load->library('upload',$config);
  if ($this->upload->do_upload('sekil')) {
    $sekil =$this->upload->data();
    $sekilyolu =$sekil['file_name'];
    $sekilqeyd ='assets/front/images/xeberler/'.$sekilyolu.'';
    $config['image_library'] ='gd2';
    $config['source_image'] ='assets/front/images/xeberler/'.$sekilyolu.'';
    $config['create_thumb'] =false;
    $config['maintain_ratio'] = true;
    $config['quality'] ='60%';
    $config['width'] = 430;
    $config['height'] = 150;
    $this->load->library('image_lib',$config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();
    $data=array(
    	'xeber_sekilurl'=>$sekilqeyd,
    	'xeber_basliq'=>$basliq=$this->input->post('basliq'),
    	'xeber_tarix'=>$tarix=$this->input->post('tarix'),
    	'xeber'=>$xeber=$this->input->post('xeber')

    );
    $cavab=$this->dtbs->elave('xeberler',$data);


}if ($cavab) {
 $this->session->set_flashdata('status','<div class="alert alert-success"><h4>  Elave etdiniz...</h4></div>');
        redirect('admin/xeberler');
          }else{
            $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Sehv!!!Elave edilmedi</h4></div>');
        redirect('admin/xeberler');

          }

}
public function xeberdeyis($id){
    $this->protect();
$cavab=$this->dtbs->cek($id,'xeberler');
$data['melumat']=$cavab;
$this->load->view('back/xeberler/edit/anasehife',$data);

}
public function xeberguncelle(){
    $this->protect();
   $config['upload_path']= FCPATH.'/assets/front/images/xeberler';
  $config['allowed_types']= 'gif|jpg|jpeg|png';
  $config['encrypt_name']= TRUE;
  $this->load->library('upload',$config);
  if ($this->upload->do_upload('sekil')) {
    $sekil =$this->upload->data();
    $sekilyolu =$sekil['file_name'];
    $sekilqeyd ='assets/front/images/xeberler/'.$sekilyolu.'';
    $config['image_library'] ='gd2';
    $config['source_image'] ='assets/front/images/xeberler/'.$sekilyolu.'';
    $config['create_thumb'] =false;
    $config['maintain_ratio'] = true;
    $config['quality'] ='60%';
    $config['width'] = 430;
    $config['height'] = 150;
    $this->load->library('image_lib',$config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();
    $data=array(
      'id'=>$id=$this->input->post('id'),
      'xeber_sekilurl'=>$sekilqeyd,
      'xeber_basliq'=>$basliq=$this->input->post('basliq'),
      'xeber_tarix'=>$tarix=$this->input->post('tarix'),
      'xeber'=>$xeber=$this->input->post('xeber')

    );
    $cavab=$this->dtbs->guncelle($data,$id,'id','xeberler');


}if ($cavab) {
 $this->session->set_flashdata('status','<div class="alert alert-success"><h4>  Elave etdiniz...</h4></div>');
        redirect('admin/xeberler');
          }else{
            $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Sehv!!!Elave edilmedi</h4></div>');
        redirect('admin/xeberler');

          }

}
public function xebersil($id,$where,$from){
    $this->protect();
  $cavab=$this->dtbs->sil($id,$where,$from);
  if ($cavab) {
$this->session->set_flashdata('status','<div class="alert alert-success"><h4>Silindi...</h4></div>'); redirect('admin/xeberler');
}else {
  $this->session->set_flashdata('status','<div class="alert alert-danger>"<h4>Silinmedi...</h4></div>');redirect('admin/xeberler');
}
}
public function xeberset(){
    $this->protect();
  $id=$this->input->post('id');
  $status=($this->input->post('xeber_status')=="true") ? 1 : 0 ;
  $this->db->where('id',$id)->update('xeberler',array('xeber_status'=>$status));
}
//xeberler sonu
//slider baslangici
public function slider(){
    $this->protect();
  $cavab=$this->dtbs->cedvel('slider');
  $data['melumat']=$cavab;
  $this->load->view('back/slider/anasehife',$data);
}
public function sliderelave(){
    $this->protect();
  $this->load->view('back/slider/add/anasehife');
}
public function sliderelaveetme(){
  $this->protect();
   $config['upload_path']= FCPATH.'assets/front/images/slider';
  $config['allowed_types']= 'gif|jpg|jpeg|png';
  $config['encrypt_name']= TRUE;
  $this->load->library('upload',$config);
  if ($this->upload->do_upload('slider_sekil')) {
    $resim =$this->upload->data();
    $resimyolu =$resim['file_name'];
    $resimqeyd ='assets/front/images/slider/'.$resimyolu.'';
    $resimmini ='assets/front/images/slider/mini/'.$resimyolu.'';
    $config['image_library'] ='gd2';
    $config['source_image'] ='assets/front/images/slider/'.$resimyolu.'';
    $config['new_image'] ='assets/front/images/slider/mini/'.$resimyolu.'';
    $config['create_thumb'] =false;
    $config['maintain_ratio'] =false;
    $config['quality'] ='60%';
    $config['width'] =94;
    $config['height'] =73;
    $this->load->library('image_lib',$config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();

    $data=array('slider_sekil'=>$resimqeyd,
      'mini'=>$resimmini,
      'slider_adi'=>$adi=$this->input->post('slider_adi'),
      'status'=>$status=1);
    $cavab=$this->dtbs->elave('slider',$data);

}if ($cavab) {
 $this->session->set_flashdata('status','<div class="alert alert-success"><h4>  Elave etdiniz...</h4></div>');
        redirect('admin/slider');
          }else{
            $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Sehv!!!Elave edilmedi</h4></div>');
        redirect('admin/slider');

          }
}

public function sliderdeyis($id){
    $this->protect();
   $cavab=$this->dtbs->cek($id,'slider');
   $data['melumat']=$cavab;
   $this->load->view('back/slider/edit/anasehife',$data);
 
}
public function sliderguncelle(){
    $this->protect();
  $config['upload_path']= FCPATH.'assets/front/images/slider';
  $config['allowed_types']= 'gif|jpg|jpeg|png';
  $config['encrypt_name']= TRUE;
  $this->load->library('upload',$config);
  if ($this->upload->do_upload('slider_sekil')) {
    $resim =$this->upload->data();
    $resimyolu =$resim['file_name'];
    $resimqeyd ='assets/front/images/slider/'.$resimyolu.'';
    $resimmini ='assets/front/images/slider/mini/'.$resimyolu.'';
    $config['image_library'] ='gd2';
    $config['source_image'] ='assets/front/images/slider/'.$resimyolu.'';
    $config['new_image'] ='assets/front/images/slider/mini/'.$resimyolu.'';
    $config['create_thumb'] =false;
    $config['maintain_ratio'] =false;
    $config['quality'] ='60%';
    $config['width'] =94;
    $config['height'] =73;
    $this->load->library('image_lib',$config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();


 $data=array(
        'id'=>$id=$this->input->post('id'),
        'slider_sekil'=>$resimqeyd,
        'mini'=>$resimmini,
        'slider_adi'=>$adi=$this->input->post('slider_adi'),
        'status'=>$status=$this->input->post('status'));
       $cavab=$this->dtbs->guncelle($data,$id,'id','slider');

}if ($cavab) {
 $this->session->set_flashdata('status','<div class="alert alert-success"><h4> Deyisdirdiniz</h4></div>');
        redirect('admin/slider');
          }
          else{
            $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Sehv!!!Deyisilmedi</h4></div>');
        redirect('admin/slider');

          }
}
public function sliderset(){
    $this->protect();
  $id=$this->input->post('id');
  $status=($this->input->post('status')=="true")? 1: 0;
  $this->db->where('id',$id)->update('slider',array('status',$status));
}
public function slidersil($id,$where,$from)
{
    $this->protect();
    $cavab=$this->dtbs->sil($id,$where,$from);
  if ($cavab) {
        $this->session->set_flashdata('status','<div class="alert alert-success"><h4> Silindi...</h4></div>');
        redirect('admin/slider');


   }else{
        $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Silinmedi!!!</h4></div>');
        redirect('admin/slider');
}


}
//slider sonu
//mesajlar baslangci
public function mesaj(){
    $this->protect();
  $cavab=$this->dtbs->cedvel('mesajlar');
  $data['melumat']=$cavab;
  $this->load->view('back/mesajlar/anasehife',$data);
}
public function mesajdeyis($id){
    $this->protect();
  $cavab=$this->dtbs->cek($id,'mesajlar');
  $data['melumat']=$cavab;
  if ($cavab) {
$data['cavab']=$cavab;
$this->load->view('back/mesajlar/edit/anasehife',$data);
$data=array('status'=>1);
$this->dtbs->mesajupdate($cavab['id'],$data);
  }

  $this->load->view('back/mesajlar/edit/anasehife',$data);
}
public function mesajsil($id,$where,$from){
    $this->protect();
  $cavab=$this->dtbs->sil($id,$where,$from);
  if ($cavab) {
        $this->session->set_flashdata('status','<div class="alert alert-success"><h4> Silindi...</h4></div>');
        redirect('admin/mesaj');


   }else{
        $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Silinmedi!!!</h4></div>');
        redirect('admin/mesaj');
       }

}
//mesajin bitmesi
//gallery nin baslangici
public function gallery(){
    $this->protect();
  $cavab=$this->dtbs->cedvel('gallery');
  $data['melumat']=$cavab;
  $this->load->view('back/gallery/anasehife',$data);
}
public function galleryelave(){
    $this->protect();
  $this->load->view('back/gallery/add/anasehife');
}
public function galleryelaveetme(){
    $this->protect();
  $config['upload_path']= FCPATH.'assets/front/images/gallery';
  $config['allowed_types']= 'gif|jpg|jpeg|png';
  $config['encrypt_name']= TRUE;
  $this->load->library('upload',$config);
  if ($this->upload->do_upload('sekil')) {
    $resim =$this->upload->data();
    $resimyolu =$resim['file_name'];
    $resimqeyd ='assets/front/images/gallery/'.$resimyolu.'';
    $resimmini ='assets/front/images/gallery/mini/'.$resimyolu.'';
    $config['image_library'] ='gd2';
    $config['source_image'] ='assets/front/images/gallery/'.$resimyolu.'';
    $config['new_image'] ='assets/front/images/gallery/mini/'.$resimyolu.'';
    $config['create_thumb'] =false;
    $config['maintain_ratio'] =false;
    $config['quality'] ='60%';
    $config['width'] =94;
    $config['height'] =73;
    $this->load->library('image_lib',$config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();

    $data=array('sekil'=>$resimqeyd,
      'mini'=>$resimmini,
      'sekil_basliq'=>$basliq=$this->input->post('sekil_basliq'),
      'sekil_text'=>$text=$this->input->post('sekil_text'),
      'status'=>$status=1);
    $cavab=$this->dtbs->elave('gallery',$data);

}if ($cavab) {
 $this->session->set_flashdata('status','<div class="alert alert-success"><h4>  Elave etdiniz...</h4></div>');
        redirect('admin/gallery');
          }else{
            $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Sehv!!!Elave edilmedi</h4></div>');
        redirect('admin/gallery');

          }
}
public function gallerydeyis($id){
    $this->protect();
  $cavab=$this->dtbs->cek($id,'gallery');
  $data['melumat']=$cavab;
  $this->load->view('back/gallery/edit/anasehife',$data);
}
public function galleryguncelle(){
    $this->protect();
  $config['upload_path']= FCPATH.'assets/front/images/gallery';
  $config['allowed_types']= 'gif|jpg|jpeg|png';
  $config['encrypt_name']= TRUE;
  $this->load->library('upload',$config);
  if ($this->upload->do_upload('sekil')) {
    $resim =$this->upload->data();
    $resimyolu =$resim['file_name'];
    $resimqeyd ='assets/front/images/gallery/'.$resimyolu.'';
    $resimmini ='assets/front/images/gallery/mini/'.$resimyolu.'';
    $config['image_library'] ='gd2';
    $config['source_image'] ='assets/front/images/gallery/'.$resimyolu.'';
    $config['new_image'] ='assets/front/images/gallery/mini/'.$resimyolu.'';
    $config['create_thumb'] =false;
    $config['maintain_ratio'] =false;
    $config['quality'] ='60%';
    $config['width'] =94;
    $config['height'] =73;
    $this->load->library('image_lib',$config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();


 $data=array(
        'id'=>$id=$this->input->post('id'),
        'sekil'=>$resimqeyd,
        'mini'=>$resimmini,
        'sekil_basliq'=>$basliq=$this->input->post('sekil_basliq'),
        'sekil_text'=>$text=$this->input->post('sekil_text'),
        'status'=>$status=$this->input->post('status'));
       $cavab=$this->dtbs->guncelle($data,$id,'id','gallery');

}if ($cavab) {
 $this->session->set_flashdata('status','<div class="alert alert-success"><h4> Deyisdirdiniz</h4></div>');
        redirect('admin/gallery');
          }
          else{
            $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Sehv!!!Deyisilmedi</h4></div>');
        redirect('admin/gallery');

          }

}
public function galleryset(){
    $this->protect();
  $id=$this->input->post('id');
  $status=($this->input->post('status')=="true") ? 1 : 0 ;
  $this->db->where('id',$id)->update('gallery',array('status'=>$status));
}
public function gallerysil($id,$where,$from)
  
{
  $this->protect();
    $cavab=$this->dtbs->sil($id,$where,$from);
  if ($cavab) {
        $this->session->set_flashdata('status','<div class="alert alert-success"><h4> Silindi...</h4></div>');
        redirect('admin/gallery');


   }else{
        $this->session->set_flashdata('status','<div class="alert alert-danger"><h4>Silinmedi!!!</h4></div>');
        redirect('admin/gallery');
}


}
}


 ?>