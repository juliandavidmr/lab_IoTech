<?php

class ProyectoController {

    private ProyectoModel $model;
    private ProyectoView $view;

    public function __construct(ProyectoModel $model) {
        $this->model = $model;
        $this->view = new ProyectoView($model);
    }

    public function registrar()
    {
        if ($this->model->registrar()) {
            return $this->view->outputRegistrado();
        }

        return $this->view->outputErrorRegistro();
    }
}

?>