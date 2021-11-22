<?php

namespace app\public\controller\account;

use app\system\engine\Controller;

class ControllerAccount extends Controller
{
    public function index()
    {
        $this->load->language("account/account");
        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        echo $this->load->view('account/account', $data);

    }

}
