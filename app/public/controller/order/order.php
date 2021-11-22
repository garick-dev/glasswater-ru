<?php

namespace app\public\controller\order;

use app\system\engine\Controller;

class ControllerOrder extends Controller
{
    public function index()
    {
        $this->load->language("order/order");
        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        echo $this->load->view('order/order', $data);

    }

}
