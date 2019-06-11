<?php
namespace Corp\Repositories;

use config;

abstract class Repository{

    protected $model = FALSE;

    public function get(){

        $bilder = $this->model->select('*');
//        dd($bilder);
        return $bilder->get();
    }

}

?>