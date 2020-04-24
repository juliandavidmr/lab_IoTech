<?php

class PrincipalView
{
    public function __construct()
    {
        # code...
    }

    public function outputNavigation()
    {
        return "
            <nav>
                <div
                class=\"container mx-auto px-6 py-2 flex justify-between items-center\"
                >
                <a
                    class=\"font-bold text-2xl lg:text-4xl\"
                    href=\"/\"
                >
                    IoTech
                </a>
                <div class=\"block lg:hidden\">
                    <button
                    class=\"flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none\"
                    >
                    <svg
                        class=\"fill-current h-3 w-3\"
                        viewBox=\"0 0 20 20\"
                        xmlns=\"http://www.w3.org/2000/svg\"
                    >
                        <title>Menu</title>
                        <path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\" />
                    </svg>
                    </button>
                </div>
                <div class=\"hidden lg:block\">
                    <ul class=\"inline-flex\">
                    <li>
                        <a class=\"px-4 " . (!array_key_exists("pagina", $_GET) ? "font-bold" : "") . "\" href=\"./\">Inicio</a>
                    </li>
                    <li>
                        <a class=\"px-4 hover:text-gray-800 " . (array_key_exists("pagina", $_GET) && $_GET["pagina"] == "registrar" ? "font-bold" : "") . " \" href=\"./?pagina=registrar\">Registrar proyecto</a>
                    </li>
                    <li>
                        <a class=\"px-4 hover:text-gray-800 " . (array_key_exists("pagina", $_GET) && $_GET["pagina"] == "autenticacion" ? "font-bold" : "") . "\" href=\"./?pagina=autenticacion\">Iniciar sesión</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>        
        ";
    }

    public function output()
    {
        return $this->outputNavigation() . "
          <!--Content-->
          <div
            class=\"py-20\"
            style=\"background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)\"
          >
            <div class=\"container mx-auto px-6\">
              <h2 class=\"text-4xl font-bold mb-2 text-white\">
                Smart Health Monitoring!
              </h2>
              <h3 class=\"text-2xl mb-8 text-gray-200\">
              El internet de las cosas es un nuevo concepto tecnológico en el que se involucran diferentes ramas de la ingeniería para desarrollar sistemas electrónicos y de software conectados a través de una dirección IP única para cada dispositivo, que mediante sensores de todo tipo generen información y datos que deben
              ser gestionados con seguridad. En la actualidad esta tecnología se encuentra en auge y promete ser determinante desde ahora y en el futuro del desarrollo
              tecnológico humano.

              </h3>
              <button class=\"bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider\">
                Pre Order
              </button>
            </div>
          </div>
          <!-- Features -->
          <section class=\"container mx-auto px-6 p-10\">
            <div class=\"flex items-center flex-wrap mb-20\">
              <div class=\"w-full md:w-1/2\">
                <h4 class=\"text-3xl text-gray-800 font-bold mb-3\">
                  Metas
                </h4>
                <p class=\"text-gray-600 mb-8\">
                IoTech busca convertirse en una empresa líder en el desarrollo de sistemas electrónicos conectados a Internet que brinden soluciones a diferentes
                sectores de la economía como la industria, el transporte, la salud, la agricultura entre otros.
                </p>
              </div>
            </div>
          </section>

          <!-- Testimonials -->
          <section class=\"bg-gray-100\">
            <div class=\"container mx-auto px-6 py-20\">
              <h2 class=\"text-4xl font-bold text-center text-gray-800 mb-8\">
                Testimonials
              </h2>
              <div class=\"flex flex-wrap\">
                <div class=\"w-full md:w-1/3 px-2 mb-4\">
                  <div class=\"bg-white rounded shadow py-2\">
                    <p class=\"text-gray-800 text-base px-6 mb-5\">
                      Monitoring and tracking my health vitals anywhere I go and on
                      any platform I use has never been easier.
                    </p>
                    <p class=\"text-gray-500 text-xs md:text-sm px-6\">
                      John Doe
                    </p>
                  </div>
                </div>
                <div class=\"w-full md:w-1/3 px-2 mb-4\">
                  <div class=\"bg-white rounded shadow py-2\">
                    <p class=\"text-gray-800 text-base px-6 mb-5\">
                      As an Athlete, this is the perfect product for me. I wear my
                      Smart Health Monitoring Wristwatch everywhere i go, even in the
                      bathroom since it's waterproof.
                    </p>
                    <p class=\"text-gray-500 text-xs md:text-sm px-6\">
                      Jane Doe
                    </p>
                  </div>
                </div>
                <div class=\"w-full md:w-1/3 px-2 mb-4\">
                  <div class=\"bg-white rounded shadow py-2\">
                    <p class=\"text-gray-800 text-base px-6 mb-5\">
                      I don't regret buying this wearble gadget. One of the best
                      gadgets I own!.
                    </p>
                    <p class=\"text-gray-500 text-xs md:text-sm px-6\">
                      James Doe
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--Call to Action-->
          <section style=\"background-color: #667eea\">
            <div class=\"container mx-auto px-6 text-center py-20\">
              <h2 class=\"mb-6 text-4xl font-bold text-center text-white\">
                Limited in Stock
              </h2>
              <h3 class=\"my-4 text-2xl text-white\">
                Get yourself the Smart Health Monitoring Wristwatch!
              </h3>
              <button
                class=\"bg-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider\"
              >
                Pre Order
              </button>
            </div>
          </section>
          <!--Footer-->
          <footer class=\"bg-gray-100\">
            <div class=\"container mx-auto px-6 pt-10 pb-6\">
              <div class=\"flex flex-wrap\">
                <div class=\"w-full md:w-1/4 text-center md:text-left \">
                  <h5 class=\"uppercase mb-6 font-bold\">Links</h5>
                  <ul class=\"mb-4\">
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >FAQ</a
                      >
                    </li>
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Help</a
                      >
                    </li>
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Support</a
                      >
                    </li>
                  </ul>
                </div>
                <div class=\"w-full md:w-1/4 text-center md:text-left \">
                  <h5 class=\"uppercase mb-6 font-bold\">Legal</h5>
                  <ul class=\"mb-4\">
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Terms</a
                      >
                    </li>
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Privacy</a
                      >
                    </li>
                  </ul>
                </div>
                <div class=\"w-full md:w-1/4 text-center md:text-left \">
                  <h5 class=\"uppercase mb-6 font-bold\">Social</h5>
                  <ul class=\"mb-4\">
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Facebook</a
                      >
                    </li>
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Linkedin</a
                      >
                    </li>
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Twitter</a
                      >
                    </li>
                  </ul>
                </div>
                <div class=\"w-full md:w-1/4 text-center md:text-left \">
                  <h5 class=\"uppercase mb-6 font-bold\">Company</h5>
                  <ul class=\"mb-4\">
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Official Blog</a
                      >
                    </li>
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >About Us</a
                      >
                    </li>
                    <li class=\"mt-2\">
                      <a
                        href=\"#\"
                        class=\"hover:underline text-gray-600 hover:text-orange-500\"
                        >Contact</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        ";
    }
}

?>