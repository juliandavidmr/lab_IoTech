<?php

class RegistrarView
{
    public function __construct()
    {
        # code...
    }

    public function output()
    {
        return "

        <center>
            <div class='container mx-auto mt-16'>
                <form action='./' method='post' class='w-full max-w-lg text-left'>
                    <input type='hidden' name='action' value='registrar' />
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full px-3'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='nombreEmpresa'>
                                Nombre de la empresa
                            </label>
                            <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white' id='nombreEmpresa' type='text' name='nombreEmpresa' placeholder='Example'>
                        </div>
                    </div>
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full px-3'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='email'>
                                Correo electrónico
                            </label>
                            <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='email' name='email' type='email' placeholder='example@domain.com'>
                        </div>
                    </div>
                    <div class='flex flex-wrap -mx-3 mb-2'>
                        <div class='w-full md:w-1/2 px-3 mb-6 md:mb-0'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='telefono'>
                                City
                            </label>
                            <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='telefono' name='telefono' type='tel'>
                        </div>
                        <div class='w-full md:w-1/2 px-3'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='nit'>
                                NIT
                            </label>
                            <input class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='nit' type='text' name='NIT'>
                        </div>
                    </div>
                    <div class='flex flex-wrap -mx-3 mb-2 mt-12'>
                        <div class='w-full px-3'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='propuesta'>
                                Descripción de propuesta
                            </label>
                            <textarea class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500' id='propuesta' name='propuesta' placeholder='Propuesta'></textarea>
                        </div>
                    </div>

                    <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' type='submit'>
                        Registrar
                    </button>
                </form>
            </div>
        </center>
        ";
    }
}


?>