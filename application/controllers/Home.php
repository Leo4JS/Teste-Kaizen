<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){
		
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){

		$dados['title'] = "Um click no tempo";
		$this->load->view('home', $dados);
	}


	public function Contato(){
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'email'));
		//regras de validação do formulário
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');
		//validação do formulário
		if($this->form_validation->run() == FALSE):
			$dados['formerror']	= validation_errors();
		else:
			$dados_form = $this->input->post();
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to('avitassibanac@gmail.com');
			$this->email->subject($dados_form['assunto']);
			$this->email->message($dados_form['mensagem']);
			if($this->email->send()):
				$dados['formerror'] = "Email enviado com sucesso!";
			else:
				$dados['formerror'] = "Erro ao enviar e-mail, tente novamente mais tarde!";
			endif;		
		endif;	


		$dados['title'] = "Contatos";
		$this->load->view('Contato', $dados);
	}
}
