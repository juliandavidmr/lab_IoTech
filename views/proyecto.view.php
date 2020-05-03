<?php

class ProyectoView {
    private ProyectoModel $model;

    public function __construct(ProyectoModel $model) {
        $this->model = $model;
    }
    
    /**
     * Devuelve un mensaje informativo, usado para mostrar errores al registrar una propuesta de proyecto.
     */
    public function outputRegistrado() {
        $empresa = $this->model->nombreEmpresa;

        return "
            <div class='container mx-auto px-6 py-2 flex justify-between items-center'>
                <div class='bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md' role='alert'>
                    <div class='flex'>
                        <div class='py-1'><svg class='fill-current h-6 w-6 text-teal-500 mr-4' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path d='M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z'/></svg></div>
                        <div>
                            <p class='font-bold'>Propuesta enviada</p>
                            <p class='text-sm'>La propuesta de la empresa <strong>$empresa</strong> ha sido registrada. Será evaluada y obtendrá una respuesta pronto.</p>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    /**
     * Devuelve un mensaje de error, usado para mostrar errores al registrar una propuesta de proyecto.
     */
    public function outputErrorRegistro()
    {
        return "
        <div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative' role='alert'>
            <strong class='font-bold'>Ha ocurrido un error!</strong>
            <span class='block sm:inline'>Algo malo ha pasado, por favor intentelo de nuevo más tarde.</span>
            <span class='absolute top-0 bottom-0 right-0 px-4 py-3'>
                <svg class='fill-current h-6 w-6 text-red-500' role='button' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><title>Close</title><path d='M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z'/></svg>
            </span>
        </div>
        ";
    }

    /**
     * Devuelve el listado de proyectos en forma de tarjetas.
     */
    public function listarProyectos()
    {
        $content = "<br><h1 class='text-3xl flex-none'>Propuestas de proyectos</h1>";
        $content .= "<div class='flex flex-wrap mb-4'>";

        $resultado = $this->model->getProyectos();

        /* obtener un array asociativo */
        while ($fila = $resultado->fetch_assoc()) {
            $content .= "
            <div class='w-2/5 px-4 py-2 m-2 max-w-sm rounded overflow-hidden shadow-lg hover:bg-gray-100 cursor-pointer'>
                <div class='px-6 py-4'>
                    <div class='font-bold text-xl mb-2'>{$fila["nombreEmpresa"]}</div>
                    <p class='text-gray-700 text-base'>
                        <strong>NIT:</strong> {$fila["nit"]} <br/>
                        <strong>Telefono:</strong> {$fila["telefono"]} <br/>
                        <strong>Email:</strong> {$fila["email"]} <br/>
                    </p>
                    <p class='text-gray-700 text-base'>
                        {$fila["propuesta"]}
                    </p>
                </div>
            </div>
            ";
        }
        $content .= "</div>";

        return "
        <div class='container mx-auto px-6 py-2'>
            $content
        </div>
        ";
    }

    public function output() {
        return '<h1>' . $this->model->text .'</h1>';
    }
}

?>