<?php

class UsuarioView {
    public function __construct()
    {
        # code...
    }

    public function output()
    {
        return "
        <div class='bg-gray-200 h-screen font-sans'>
            <div class='container mx-auto h-full flex justify-center items-center'>
                <div class='w-1/3'>
                    <h1 class='font-hairline mb-6 text-center'>Login to our Website</h1>
                    <div class='border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg'>
                        <div class='mb-4'>
                            <label class='font-bold text-grey-darker block mb-2'>Email</label>
                            <input type='text' class='block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow' placeholder='Tu correo electronico'>
                        </div>

                        <div class='mb-4'>
                            <label class='font-bold text-grey-darker block mb-2'>Contraseña</label>
                            <input type='text' class='block appearance-none w-full bg-white border border-grey-light hover:border-grey px-2 py-2 rounded shadow' placeholder='Tu contraseña'>
                        </div>

                        <div class='flex items-center justify-between mt-8'>
                            <button class='bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded'>
                                Iniciar sesión
                            </button>
                        </div>
                        
                    </div>
                    <div class='text-center'>
                        <p class='text-grey-dark text-sm'><a href='./' class='no-underline text-blue font-bold'>Volver a la pagina principal</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
}

?>