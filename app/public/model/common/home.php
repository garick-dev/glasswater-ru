<?php

namespace app\public\model\common;

use app\system\engine\Model;

class ModelHome extends Model
{
    public function test()
    {
        $result = $this->db->row('SELECT * FROM test');
        return 'test';
    }
}