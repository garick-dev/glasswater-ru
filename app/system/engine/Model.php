<?php

namespace app\system\engine;

use app\system\lib\db\Db;

abstract class Model
{

    public object $db;

    public function __construct()
    {
        if($this->connectDB()){
            $this->db = new Db;
        }
   }
    private function connectDB(){
        $path = "app/system/lib/db/Db.php";
        if (file_exists($path)) {
            return require_once $path;
        }
        return false;

    }

}