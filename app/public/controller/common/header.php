<?php

namespace app\public\controller\common;

use app\system\engine\Controller;

class ControllerHeader extends Controller
{
    public function index()
    {
        $data['languageCode'] = $this->language->getLangCode();
        $data['title'] = $this->document->getTitle();
        $page = $this->document->getPage();
        $data['styleLinks'][] = 'assets/css/public/' . $page . ".css";
        return $this->load->view('common/header', $data);
    }

}
