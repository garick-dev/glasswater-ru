<?php

namespace app\system\lib;

class Document
{
    private string $title;
    private string $page;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        if (isset($this->title)) {
            return $this->title;
        }
        return 'GlassWater';
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPage(): string
    {
        return $this->page;
    }


}