<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Residencial Chácara Santa Helena';
        $data['description'] = 'O Residencial Chácara Santa Helena resgata uma forma única de morar com sofisticação inspirada nos prazeres da natureza. Um loteamento de alto padrão para apenas 53 famílias, no Alto da Boa Vista, com projeto urbanístico de Isay Weinfeld e paisagismo de Renata Tilli.';
        $data['keywords'] = 'casas em condomínio, condomínio fechado, condomínio de alto luxo, empreendimento imobiliário, condomínios residenciais, imóveis na planta, casas de alto padrão, lançamentos imobiliários, imóveis exclusivos, isay weindfeld, imóveis de luxo, casas de luxo a venda, condomínios de luxo, renata tilli';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade() {
        $data['title'] = 'Residencial Chácara Santa Helena';
        $data['description'] = 'O Residencial Chácara Santa Helena resgata uma forma única de morar com sofisticação inspirada nos prazeres da natureza. Um loteamento de alto padrão para apenas 53 famílias, no Alto da Boa Vista, com projeto urbanístico de Isay Weinfeld e paisagismo de Renata Tilli.';
        $data['keywords'] = 'casas em condomínio, condomínio fechado, condomínio de alto luxo, empreendimento imobiliário, condomínios residenciais, imóveis na planta, casas de alto padrão, lançamentos imobiliários, imóveis exclusivos, isay weindfeld, imóveis de luxo, casas de luxo a venda, condomínios de luxo, renata tilli';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/home.php */
