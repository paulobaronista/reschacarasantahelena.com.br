<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'OUTLET COMPROU GANHOU';
		$data['description'] = 'O maior Outlet de imóveis com beneficios imperdíveis.';
		$data['keywords'] = 'apartamento desconto, apartamento com desconto, outlet imoveis, apartamento barato, imoveis a venda, imoveis com desconto, comprou ganhou';
		$menu['contato'] = 'active';
		$conteudo['pagina_view'] = 'contato_view';
		
		if($this->input->post('enviar_email') == "enviar"){			
			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$telefone = $this->input->post('phone');
			$mensagem = utf8_decode($this->input->post('mss'));
			$assunto = utf8_decode('Contato enviado pelo site www.outletcomprouganhou.com.br');
			
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			$this->email->from("<contato@outletcomprouganhou.com.br>","$nome");
			$this->email->to('contato@outletcomprouganhou.com.br');
			$this->email->cc('contato@digimobi.com.br, paulobaronista@gmail.com, leadsoutlet@gmail.com, vendas@brev.com.br');
			
			$this->email->subject($assunto);
			$this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
			<head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
				Nome:		{$nome}<br/>
				E-mail:		{$email}<br/>
				Telefone:	{$telefone}<br/>
				Mensagem:	{$mensagem}<br/>
			</body></html>");
			
			if($this->email->send()){				
				redirect('http://www.outletcomprouganhou.com.br/contato/obrigado');
			}else{
				redirect('http://www.outletcomprouganhou.com.br/contato/fail');
			}
			echo $this->email->print_debugger();
			
		}
		
		$this->load->view('html_header', $data);
		$this->load->view('header');
		$this->load->view('menu', $menu);
		$this->load->view('conteudo', $conteudo);
		$this->load->view('rodape');
		$this->load->view('html_footer');
	}
	
}

/* Location: ./application/controllers/contato.php */