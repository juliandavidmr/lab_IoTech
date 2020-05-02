<?php

class UsuarioView {

    private ProyectoModel $model;

    public function __construct(ProyectoModel $model)
    {
        $this->model = $model;
    }

    public function output($showError = False)
    {
        $content = "";

        if ($showError) {
            $content = "
            <div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative' role='alert'>
                <span class='block sm:inline'>Contraseña o usuario incorrecto.</span>
            </div>
            ";
        }

        return "
        <div class='bg-gray-200 h-screen font-sans'>
            <div class='container mx-auto h-full flex justify-center items-center'>
                <form action='./' method='post' class='w-1/3'>
                    <input type='hidden' name='action' value='autenticacion'>

                    <h1 class='font-hairline mb-6 text-center'>Inicie sesión</h1>
                    <div class='border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg'>
                        <div class='mb-4'>
                            <label class='font-bold text-grey-darker block mb-2'>Email</label>
                            <input type='text' class='block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow' placeholder='Tu correo electronico' name='username'>
                        </div>

                        <div class='mb-4'>
                            <label class='font-bold text-grey-darker block mb-2'>Contraseña</label>
                            <input type='text' class='block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow' placeholder='Tu contraseña' name='password'>
                        </div>

                        <div class='flex items-center justify-between mt-8'>
                            <button class='bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded'>
                                Iniciar sesión
                            </button>
                        </div>
                        <br>
                        $content
                    </div>
                    <div class='text-center'>
                        <p class='text-grey-dark text-sm'><a href='./' class='no-underline text-blue font-bold'>Volver a la pagina principal</a>.</p>
                    </div>
                </form>
            </div>
        </div>
        ";
    }
}

?>