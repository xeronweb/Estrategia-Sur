<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Estrategia Sur es una Agencia Comercial con la que nos dedicamos a la representación oficial de marcas líderes en el mercado de la construcción sustentable.">
    <meta name="keywords" content="Acero Latina, Paneles Aislantes, Frio Latina, Bervill, representación comercial, construcción sustentable">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estrategia Sur | Paneles Aislantes | Bahía Blanca</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,300i,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147471360-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-147471360-1');
    </script>


    <!-- Icono -->
    <link rel="icon" type="image/png" href="img/logo.png" />

    <!-- Script -->
    <script src="https://kit.fontawesome.com/591d68fa75.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <script>       

        /**
         * Oculta el menu
         */ 
        function ocultarMenu(){
            $('.slicknav_nav').slideUp(600);
            $('.slicknav_nav').addClass('slicknav_hidden');
        }

        /**
         * Abre una clase
         */ 
        function abrirDesplazar(tipo){
            $(".second-features").hide();
            $(".features-"+tipo).slideDown("slow");
            desplazar(".features-"+tipo);
        }
        /**
        * abre el proximamente
        */
        function abrirDesplazarDos(tipo){
            $(".features-"+tipo).slideDown("slow");
            desplazar(".features-"+tipo);
        }

        function getURLParameter(sParam){
            var url_string = window.location.href;
            var url = new URL(url_string);
            return url.searchParams.get(sParam);
        }
    </script>
</head>

<body id="inicio">
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>--> 
    <!-- Header Section Begin -->
    <?php include('bloques/header.php'); ?>
    <!-- Header End -->
    <!-- Hero Slider Section Begin -->
    <section class="hero-slider">
        <div class="slide-items owl-carousel">
            <div class="single-slide set-bg active" data-setbg="img/carousel1.jpg">
                <!-- <a href="https://www.youtube.com/watch?v=SEVuD_djKrU" class="play-btn pop-up"><i class="fa fa-play"></i></a> -->
                
                <a href="#servicio" class="logo-carousel p-0 m-0">
                    <img class="col-12 p-0 m-0" src="img/logos_empresas/acerolatina.jpg">
                    <div onclick="abrirDesplazar('paneles')" class="leer-mas col-12 h-100">Leer más</div>
                </a>
                <a href="#servicio" class="logo-carousel p-0 m-0">
                    <img class="col-12 p-0 m-0" src="img/logos_empresas/friolatina.jpg">
                    <div onclick="abrirDesplazar('paneles')" class="leer-mas col-12 h-100">Leer más</div>
                </a>
                <a href="#servicio" class="logo-carousel p-0 m-0">
                    <img class="col-12 p-0 m-0" src="img/logos_empresas/bervill.jpg">
                    <div onclick="abrirDesplazar('paneles')" class="leer-mas col-12 h-100">Leer más</div>
                </a>
                <h1 class="title-carousel mt-4 mb-4">Estrategia Sur</h1>
                <a href="#paneles-aislantes" class="primary-btn boton-carousel mt-2">Ver info</a>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- NOSOTROS SECTION Begin  -->
    <section id="nosotros" class="contact-section nosotros-section ancla">
    <div class="container">
            <h2 class="text-center col-12 mt-4 mt-md-5 pt-4 pb-0 mb-1">Estrategia Sur </h2>
            <h3 class="text-center col-12 pt-0 mt-0"> Agencia Comercial</h3>
            <p class="text-justify col-12 pb-1 pb-md-5">
                    <span class="mr-4"></span>Estrategia Sur es una Agencia Comercial con la que nos dedicamos a la representación oficial de marcas líderes en el mercado de la construcción sustentable. 
                    <br><br>
                    <span class="mr-4"></span>Somos un equipo de profesionales con amplia experiencia en el ramo y en constante capacitación, a fin de brindar y garantizar a nuestros clientes, una promoción íntegra y responsable de los productos ofrecidos, junto a un eficiente asesoramiento técnico. A su vez, contamos con un servicio oficial de postventa para el adecuado montaje y colocación de los productos comercializados; así como también, brindamos servicio de supervisión de final de obra.
                    <br><br>
                    <span class="mr-4"></span>La sede central de Estrategia Sur se localiza en Bahía Blanca (en el Centro de Desarrollo del Parque Industrial), y sus subagencias, en el sur de la Pcia de Buenos Aires, Pcias de Neuquén, Río Negro y Chubut.

            </p>
        </div>
    </section>
    

    <!-- NOSOTROS SECTION End  -->


    <!-- Features Section Begin -->
    <section id="paneles-aislantes" class="features-section spad ancla">
        <div class="container">
            
            <!--<h2 class="text-center col-12 pt-3 pt-md-5 pb-4 mb-4  clearfix">PANELES AISLANTES</h2>-->

            <!-- FILA GENERAL -->
            <!-- <div class="row">
                <div class="col-md-4 dos-features" >
                    <div class="single-features" onclick="abrirDesplazar('paneles')" >
                        <div class="features-img">
                            <img src="img/features/paneles.jpg" alt="Paneles Aislantes">
                            <div class="ver-mas col-12 h-100">Ver más</div>
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <i class="fas fa-angle-double-down pt-2"></i>
                            </div>
                            <h5>Construcción sustentable</h5>
                            <p>Estrategia Sur representa comercialmente al grupo empresario LTN. El mismo está conformado por tres empresas
                                que brindan sistemas de refrigeración y soluciones constructivas eficientes,
                                a través de procesos sostenibles y éticamente responsables, los cuales
                                contribuyen al cuidado del medioambiente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 dos-features" onclick="abrirDesplazar('servicios')" >
                    <div class="single-features">
                        <div class="features-img">
                            <img src="img/features/departamento-tecnico.jpg" alt="">
                            <div class="ver-mas col-12 h-100">Ver más</div>
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon">
                                <i class="fas fa-angle-double-down pt-2"></i>
                            </div>
                            <h5>DEPARTAMENTO TéCNICO</h5>
                            <p>Estrategia Sur ofrece un asesoramiento técnico integral para satisfacer las necesidades
                                de nuestros clientes y garantizar una eficiente elección y colocación de los paneles.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix mt-5"></div> -->

            <!-- SEGUNDA FILA: GRUPO LTN PANELES TERMICOS -->
            <div class="row">
                
                <h2 class="text-center col-12 pt-0 pb-4 mb-4 second-features features-paneles clearfix">Paneles asilantes</h2>

                <div class="col-md-4" onclick="abrirDesplazarDos('acero')">
                    <div class="single-features second-features features-paneles">
                        <div class="features-img">
                            <img src="img/features/acero-latina.jpg" alt="Acero Latina">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon feature-icon-mas">
                                <i class="fas fa-angle-double-down pt-2"></i>
                            </div>
                            <h5>Paneles térmicos</h5>
                            <p>Empresa dedicada a la fabricación y comercialización de paneles y soluciones arquitectónicas con aislamiento térmico y acústico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" onclick="abrirDesplazarDos('prox')">
                    <div class="single-features second-features features-paneles">
                        <div class="features-img">
                            <img src="img/features/frio-latina.jpg" alt="Frio Latina">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon feature-icon-mas">
                                <i class="fas fa-plus pt-2"></i>
                            </div>
                            <h5>Refrigeración modular</h5>
                            <p>Empresa proveedora de soluciones integrales en cámaras frigoríficas modulares, cerramientos y proyectos llave en mano.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" onclick="abrirDesplazarDos('prox')">
                    <div class="single-features second-features features-paneles">
                        <div class="features-img">
                            <img src="img/features/bervill.jpg" alt="Bervill">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon feature-icon-mas">
                                <i class="fas fa-plus pt-2"></i>
                            </div>
                            <h5>sistemas de refrigeración</h5>
                            <p>Dedicados a la fabricación de Equipamientos frigoríficos y unidades condensadoras.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TERCERA FILA: ACERO LATINA -->
            <div class="row">
                <h2 class="text-center col-12 pt-0 pb-4 mb-4 second-features features-acero clearfix">Paneles térmicos</h2>
                <a href="techos-cubiertas" class="col-md-4">
                    <div class="single-features second-features features-acero">
                        <div class="features-img" >
                            <img class="rounded-circle" src="img/features/techos.png" alt="Nova Fusión">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon feature-icon-mas">
                                <i class="fas fa-plus pt-2"></i>
                            </div>
                            <h5>Techos y <strong>cubiertas</strong></h5>
                            <p></p>
                        </div>
                    </div>
                </a>
                <a href="fachadas-muros" class="col-md-4">
                    <div class="single-features second-features features-acero">
                        <div class="features-img">
                            <img class="rounded-circle" src="img/features/muros.png" alt="Casa Latina">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon feature-icon-mas">
                                <i class="fas fa-plus pt-2"></i>
                            </div>
                            <h5>Fachadas y <strong>muros</strong></h5>
                            <p></p>
                        </div>
                    </div>
                </a>
                <div class="col-md-4" onclick="abrirDesplazarDos('prox')">
                    <div class="single-features second-features features-acero">
                        <div class="features-img">
                            <img class="rounded-circle" src="img/features/pisos.png" alt="Casa Latina">
                        </div>
                        <div class="feature-text">
                            <div class="feature-icon feature-icon-mas">
                                <i class="fas fa-plus pt-2"></i>
                            </div>
                            <h5>Pisos y <strong>entrepisos</strong></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SEGUNDA FILA: SERVICIOS -->
            <div class="row">
                <h2 class="text-center col-12 pt-0 pb-4 mb-4 second-features features-servicios clearfix">Nuestro Departamento Técnico se encarga de:</h2>
                <div class="col-md-10 dos-features" onclick="abrirDesplazarDos('prox')">
                    <div class="features-texto second-features features-servicios">
                        <p><i class="fas fa-check mr-2"></i>La evaluación particular de cada proyecto, a fin de brindar un asesoramiento
                        personalizado e integral.</p>
                        <p><i class="fas fa-check mr-2"></i>Computar y presupuestar los materiales, acorde a cada proyecto.</p>
                        <p><i class="fas fa-check mr-2"></i>Despiece de paneles, a fin de racionalizar y hacer uso correcto de los mismos.</p>
                        <p><i class="fas fa-check mr-2"></i>Confeccionar croquis detallado con la distribución de los paneles en obra.</p>
                        <p><i class="fas fa-check mr-2"></i>Elaborar planos de detalles técnicos y constructivos, referentes al sistema elegido.</p>
                        <p><i class="fas fa-check mr-2"></i>Ofrecer servicio de supervisión de final de obra (opcional).</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <h2 class="text-center col-12 pt-3 pb-4 mb-4 second-features features-prox clearfix">PRÓXIMAMENTE</h2>
                <p class="text-center col-12 second-features features-prox">
                    Sección en construcción. Para más información envianos un mensaje haciendo clic <a href="#contacto">acá</a>
                </p>
            </div>
            <div id="contacto" class="pb-5" name="contacto"></div>
        </div>
    </section>
    <!-- Features Section End -->
    
    <!-- CONTACTO Y FOOTER BEGIN -->
    <?php include('bloques/footer.php'); ?>
    <!-- CONTACTO Y FOOTER END -->

    <!-- Js Plugins -->
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/main.js"></script>
    <script>
        const param = getURLParameter('t');  
        if(param!=null){
            document.getElementById("mensaje-contacto").innerHTML = param;
        }
    </script>
</body>

</html>