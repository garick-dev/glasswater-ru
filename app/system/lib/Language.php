<?php

namespace app\system\lib;

class Language
{
    public array $data = array();
    private string $code;

    public function __construct()
    {
        if (isset($_SESSION['languageCode'])) {
            $this->code = $_SESSION['languageCode'];
        } else {
            $this->code = 'ru-ru';
            $_SESSION['languageCode'] = $this->code;
        }
    }

    public function getLangCode()
    {
        return $this->code;
    }

    public function get($key)
    {
        return ($this->data[$key] ?? $key);
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function load($path): array
    {
        $_ = array();

        $file = "app/" . WORK_AREA . "/languages/" . $_SESSION['languageCode'] . "/" . $path . ".php";

        if (is_file($file)) {
            require($file);
        }
        $this->data = array_merge($this->data, $_);

        return $this->data;
    }

}