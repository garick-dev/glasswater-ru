<?php

namespace app\system\engine;

final class Registry
{
    private array $data = array();

    public function get($key)
    {
        return ($this->data[$key] ?? null);
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function has($key): bool
    {
        return isset($this->data[$key]);
    }
}