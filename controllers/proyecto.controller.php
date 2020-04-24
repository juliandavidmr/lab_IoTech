<?php

class ProyectoController {

    private $model;
    private $view;

    public function __construct(ProyectoModel $model) {
        $this->model = $model;
        $this->$view = new ProyectoView($model);
    }

    public function registrar()
    {
        if (this->$model->registrar()) {
            return $this->$view->outputRegistrar();
        } else {
            # 
        }
    }
}

?>