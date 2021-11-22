<?php

namespace app\public\controller\product;

use app\system\engine\Controller;

class ControllerProduct extends Controller
{
    public function index()
    {
        $this->load->language("product/product");
        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        echo $this->load->view('product/product', $data);

    }

}
