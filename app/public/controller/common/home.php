<?php

namespace app\public\controller\common;

use app\system\engine\Controller;

class ControllerHome extends Controller
{
    public function index()
    {
        $this->load->language("common/home");
        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        $model = $this->load->model('common/home');
        $data['test'] = $model->test();
        echo $this->load->view('common/home', $data);

    }

}
