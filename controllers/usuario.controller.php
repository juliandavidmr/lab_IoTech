<?php
class UsuarioController {
	
	private Usuario $model;
	private UsuarioView $view;
	
	public function __construct(Usuario $model, ProyectoModel $proyectoModel) {
		$this->model = $model;
		$this->view = new UsuarioView($proyectoModel);
	}
	
	public function autenticar() {
		if ($this->model->autenticar()) {
			return array(
				True
			);
		} else {
			return array(
				False,
				$this->view->output(True)
			);
		}
	}
}
?>