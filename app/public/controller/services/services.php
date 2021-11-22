<?php

namespace app\public\controller\services;

use app\system\engine\Controller;

class ControllerServices extends Controller
{
    public function index()
    {
        $this->load->language("services/services");
        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        echo $this->load->view('services/services', $data);

    }

}
