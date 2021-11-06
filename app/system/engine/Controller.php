<?php

namespace app\system\engine;

abstract class Controller
{
    protected mixed $params;
    protected object $load;
    protected $registry;
    protected object $document;
    protected $language;

    public function __construct($params, $registry)
    {
        $this->params = $params;
        $this->registry = $registry;
        $this->load = $registry->get('load');
        $this->document = $registry->get('document');
        $this->language = $registry->get('language');
    }
}