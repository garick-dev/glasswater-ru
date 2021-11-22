<?php

namespace app\public\controller\portfolio;

use app\system\engine\Controller;

class ControllerPortfolioInside extends Controller
{
    public function index()
    {
        $this->load->language("portfolio/portfolioInside");
        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        echo $this->load->view('portfolio/portfolioInside', $data);
    }

}
