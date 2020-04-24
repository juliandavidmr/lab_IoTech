<?php

class ProyectoView {
    private ProyectoModel $model;

    public function __construct(ProyectoModel $model) {
        $this->model = $model;
    }
    
    public function outputRegistrar() {
        return "Proyecto registrado de: " . $this->$model->$nombreEmpresa;
    }

    public function output() {
        return '<h1>' . $this->model->text .'</h1>';
    }
}

?>