<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Residencial Chácara Santa Helena';
        $data['description'] = 'O Residencial Chácara Santa Helena resgata uma forma única de morar com sofisticação inspirada nos prazeres da natureza. Um loteamento de alto padrão para apenas 53 famílias, no Alto da Boa Vista, com projeto urbanístico de Isay Weinfeld e paisagismo de Renata Tilli.';
        $data['keywords'] = 'casas em condomínio, condomínio fechado, condomínio de alto luxo, empreendimento imobiliário, condomínios residenciais, imóveis na planta, casas de alto padrão, lançamentos imobiliários, imóveis exclusivos, isay weindfeld, imóveis de luxo, casas de luxo a venda, condomínios de luxo, renata tilli';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.reschacarasantahelena.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@digiclick.com.br","Residencial Chácara Santa Helena");
            $this->email->to('rodrigo.vieira@jveiga.com.br');
            $this->email->cc('paulobaronista@gmail.com, renata@spicycomm.com.br, alebertone@spicycomm.com.br');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Residencial Chácara Santa Helena';
        $data['description'] = 'O Residencial Chácara Santa Helena resgata uma forma única de morar com sofisticação inspirada nos prazeres da natureza. Um loteamento de alto padrão para apenas 53 famílias, no Alto da Boa Vista, com projeto urbanístico de Isay Weinfeld e paisagismo de Renata Tilli.';
        $data['keywords'] = 'casas em condomínio, condomínio fechado, condomínio de alto luxo, empreendimento imobiliário, condomínios residenciais, imóveis na planta, casas de alto padrão, lançamentos imobiliários, imóveis exclusivos, isay weindfeld, imóveis de luxo, casas de luxo a venda, condomínios de luxo, renata tilli';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Residencial Chácara Santa Helena';
        $data['description'] = 'O Residencial Chácara Santa Helena resgata uma forma única de morar com sofisticação inspirada nos prazeres da natureza. Um loteamento de alto padrão para apenas 53 famílias, no Alto da Boa Vista, com projeto urbanístico de Isay Weinfeld e paisagismo de Renata Tilli.';
        $data['keywords'] = 'casas em condomínio, condomínio fechado, condomínio de alto luxo, empreendimento imobiliário, condomínios residenciais, imóveis na planta, casas de alto padrão, lançamentos imobiliários, imóveis exclusivos, isay weindfeld, imóveis de luxo, casas de luxo a venda, condomínios de luxo, renata tilli';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
