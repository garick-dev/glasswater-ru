<?php

namespace app\public\controller\common;

use app\system\engine\Controller;

class ControllerFooter extends Controller
{
    public function index()
    {
        $data['title'] = $this->document->getTitle();
        $data['h1'] = 'footer';
        $data['year'] = date('Y');
        return $this->load->view('common/footer', $data);
    }

}
