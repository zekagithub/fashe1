<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Anasehife extends CI_Controller {
	public function index (){
		$this->load->view('anasehife');
	}
	public function haqqimizda(){
	   $this->load->view('front/haqqimizda/anasehife');
	}
	public function xeberler(){
		$this->load->view('front/xeberler/anasehife');
	}
	public function elaqe(){
		$this->load->view('front/elaqe/anasehife');
	}
	public function mesaj(){

	$data=array(
		'adi'=>$adi=$this->input->post('adi'),
		'email'  =>$email=$this->input->post('email'),
		'movzu'=>$movzu=$this->input->post('movzu'),
		'mesaj'=>$mesaj=$this->input->post('mesaj'),
		'status'=>$status=0,
		'tarix'=>$tarix=date('d-m-Y')

	);
	$cavab=$this->dtbs->elave('mesajlar',$data);
	if ($cavab) {
		
$this->session->set_flashdata('status','<div class="alert alert-success"<h2>Mesajiniz gonderildi tezlikle elaqe saxlanilacaq</h2></div>');
redirect('anasehife/elaqe');

			}else{
				$this->session->set_flashdata('status','<div class="alert alert-danger"><h2>Gonderilmedi,birazdan yeniden yoxlayin!!!</h2></div>');
				redirect('anasehife/elaqe');
			}
	
redirect($_SERVER['HTTP_REFERER']);



	}
//gallery baslangici
	public function gallery(){
$this->load->view('front/gallery/anasehife');


	}
	//pulsuz mesaj baslangici
	public function pulsuzmesaj(){
		$data=array(
			'adi'=>$adi=$this->input->post('adi'),
			'email'=>$email=$this->input->post('email'),
			'movzu'=>$movzu=$this->input->post('movzu'),
			'mesaj'=>$mesaj=$this->input->post('mesaj'),
					'status'=>$status=0,

		'tarix'=>$tarix=date('d-m-Y')



		);
		$cavab=$this->dtbs->elave('mesajlar',$data);
		if ($cavab) {
			$this->session->set_flashdata('status','<div class="alert alert-success"><h4>Mesajiniz gonderildi... Emailinize huquq meslehetcilerimiz terefinden cavab gonderilecek,Tesekkur edirik...</h4></div> ');
			redirect('anasehife');


					}else{
						$this->session->set_flashdata('status','<div class="alert alert-success"><h4>Gonderilmedi,az sonra yeniden yoxlayin');
						redirect('anasehife');
					}
	}
	public function ceza(){
		$this->load->view('front/ceza/anasehife');
	}
	public function biznes(){
		$this->load->view('front/biznes/anasehife');
	}
	public function saglamliq(){
		$this->load->view('front/saglamliq/anasehife');
	}

public function bosanma(){
	$this->load->view('front/bosanma/anasehife');
}
public function kapital(){
	$this->load->view('front/kapital/anasehife');
}
public function qeza(){
	$this->load->view('front/qeza/anasehife');
}
		

	}


?>