<?php

namespace app\public\controller\blog;

use app\system\engine\Controller;

class ControllerBlogInside extends Controller
{
    public function index()
    {
        $this->load->language("blog/blogInside");
        $this->document->setTitle($this->language->get('heading_title'));
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        echo $this->load->view('blog/blogInside', $data);
    }

}
