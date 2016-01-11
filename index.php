
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Bienvenidos | Crafting Brands</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
        
        <script type="text/javascript" src="js/modernizr.js"></script>
    </head>
    <body class="bodyInicio">
        <section id="contenedor">
            <section id="header">
                <?php include('header.php');?>
            </section>
            <section id="contenido">
                <div class="contenedorslider">
                    <div id="slidecaption"></div>
                    <ul id="slide-list"></ul>
                </div>
                
                

                <div class="contenedorinicio">
                <div class="inicioIzq principal transparenteizq">
                    <div class="inicioItem">
                        <h2 class="extrasize">Planning Estratégico<a>Ver más</a></h2>
                    </div>
                    <div class="inicioSub">
                        <div class="inicioItem diagnostico">
                            <h2>Diagnóstico de Negocio y Marcas<a class="grey">Ver más</a></h2>
                            <div class="inicioSubContenido">
                                <ul>
                                    <li>Rentabilidad y estructuración integral de la empresa, sus áreas de negocio y sus marcas.</li>
                                    <li>Portfolio optimization.</li>
                                    <li>Ruta y llegada al mercado.</li>
                                    <li>Posicionamiento competitivo.</li>
                                    <li>Estrategia de precios y segmentación por tiers.</li>
                                    <li>Imagen y salud marcaria.</li>
                                    <li>Principales oportunidades y amenazas internas y externas.</li>
                                    <li>Diseño de Estrategias de desembarco en el mercado local para nuevas marcas y categorías de producto.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="inicioItem creacion">
                            <h2>Creación, Gestión de Marcas<br> y Categorías de Productos<a class="grey">Ver más</a></h2>
                            <div class="inicioSubContenido">
                                
                                    <h4>Creaci&oacute;n y desarrollo marcario a largo plazo:</h4>
                                    <p>1. Visi&oacute;n.</p>
                                    <p>2. Identidad, valores, discriminadores, roles, atributos, beneficios.</p>
                                    <p>3. Ventajas competitivas  y esencia marcaria.</p>
                                
                                    <h4>Definici&oacute;n de targets de compra, consumo y comunicación de marca/categoría</h4>
                                
                                <h4>Construcci&oacute;n de  estrategia de inversi&oacute;n, comunicaci&oacute;n, innovaci&oacute;n y crecimiento a mediano / largo plazo</h4>
                                
                            </div>
                        </div>
                        <div class="inicioItem planeamiento">
                            <h2>Planeamiento Estratégico<a class="grey">Ver más</a></h2>
                            <div class="inicioSubContenido">
                                <ul>
                                    <li>Definición y priorización de objetivos de negocio a corto, mediano y largo plazo.</li>
                                    <li>Diseño de estructura organizacional y procesos por área de actividad.</li>
                                    <li>Construcción de ruta de crecimiento y desarrollo de la empresa.</li>
                                    <li>Desarrollo, implementación y seguimiento de planes estratégicos corporativos por marca y por unidades de negocios.</li>
                                    <li>Diseño e implementación de sistemas de tracking y control de negocios.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inicioDer principal transparenteder">
                    <div class="inicioItem">
                        <h2 class="extrasize">Business intelligence<a>Ver más</a></h2>
                    </div>
                    <div class="inicioSub">
                        <div class="inicioItem asesoramiento">
                            <h2>Asesoramiento<a>Ver más</a></h2>
                            <div class="inicioSubContenido">
                                <h4>Asesoramiento y acompañamiento en proceso investigativo:</h4>
                                <p>Definición de necesidades de investigación cualitativa y cuantitativa.</p>
                                <p>Armado de briefing y definición de action standard para la toma de decisiones.</p>
                                <h4>Búsqueda, evaluación y recomendación al cliente de:</h4>
                                <p>Tipos de estudio a llevar a cabo.</p>
                                <p>Presupuesto con proveedores (Crafting Brands y/o terceros).</p>
                                <p>Análisis de resultados post investigación y recomendaciones finales de acción.</p>
                            </div>
                        </div>
                        <div class="inicioItem investigacion">
                            <h2>Investigación de Mercado<a>Ver más</a></h2>
                            <div class="inicioSubContenido">
                                <p class="sinPadding">Diseño, implementación y análisis de estudios de mercado <i>ad hoc</i> ajustados a las necesidades de investigación del cliente:</p>
                                <h4>Estudios Cuantitativos:</h4>
                                <p>1. Encuestas: telefónicas, en hogares,   coincidentales.</p>
                                <p>2. Shopper understanding: in store, pre store, mystery shopper.</p>
                                <p>3. Satisfacción del cliente.</p>
                                <p>4. Usos y hábitos de productos y categorías.</p>
                                <p>5. Percepción de precios.</p>
                                <h4>Estudios Cualitativos:</h4>
                                <p>1. Entrevistas: a profundidad (personales - individuales, grupales).</p>
                                <p>2. Focus groups.</p>
                                <p>3. Concept product test.</p>
                                <p>4. Imagen y posicionamiento de marcas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <div class="push"></div>
        </section>
        
        <section id="footer" class="row">
            <?php include('footer.php');?>
        </section>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
        <script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $('.principal > .inicioItem > h2 > a').click(function(){
                    $(this).parents('.principal').find('.inicioSub').slideToggle();
                    $(this).toggleClass('abierto');
                });

                $('.inicioSub a').click(function(){
                    $(this).parents('.inicioItem').find('.inicioSubContenido').slideToggle();
                    $(this).toggleClass('abierto');
                });
            });
        </script>
        <script>

        </script>
        <script type="text/javascript">
            
            jQuery(function($){
                
                $.supersized({
                
                    // Functionality
                    slideshow               :   1,          // Slideshow on/off
                    autoplay                :   1,          // Slideshow starts playing automatically
                    start_slide             :   1,          // Start slide (0 is random)
                    stop_loop               :   0,          // Pauses slideshow on last slide
                    random                  :   0,          // Randomize slide order (Ignores start slide)
                    slide_interval          :   3000,       // Length between transitions
                    transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed        :   1000,       // Speed of transition
                    new_window              :   0,          // Image links open in new window/tab
                    pause_hover             :   0,          // Pause slideshow on hover
                    keyboard_nav            :   1,          // Keyboard navigation on/off
                    performance             :   1,          // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect           :   1,          // Disables image dragging and right click with Javascript
                                                               
                    // Size & Position                         
                    min_width               :   0,          // Min width allowed (in pixels)
                    min_height              :   0,          // Min height allowed (in pixels)
                    vertical_center         :   1,          // Vertically center background
                    horizontal_center       :   1,          // Horizontally center background
                    fit_always              :   0,          // Image will never exceed browser width or height (Ignores min. dimensions)
                    fit_portrait            :   1,          // Portrait images will not exceed browser height
                    fit_landscape           :   0,          // Landscape images will not exceed browser width
                                                               
                    // Components                           
                    slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    thumb_links             :   0,          // Individual thumb links for each slide
                    thumbnail_navigation    :   0,          // Thumbnail navigation
                    slides                  :   [           // Slideshow Images
                                                        
                                                        {image : 'images/slider/slider1.jpg', title : 'Creamos, construimos y fortalecemos la identidad única de cada marca'},
                                                        {image : 'images/slider/slider4.jpg', title : '“Una mente que se abre a una nueva idea jamás volverá a su tamaño original.” <span>— Albert Einstein</span>'},
                                                        {image : 'images/slider/slider2.jpg', title : 'Elevamos el nivel de competitividad y profesionalismo de las empresas'},
                                                        {image : 'images/slider/slider5.jpg', title : '“Lo realmente importante no es llegar a la cima; sino saber mantenerse en ella.” <span>— Alfred de Musset</span>'},
                                                        {image : 'images/slider/slider3.jpg', title : 'Contribuimos al crecimiento y expansión de las empresas y marcas en Paraguay'},
                                                        {image : 'images/slider/slider6.jpg', title : '“Se alcanza el éxito convirtiendo cada paso en una meta y cada meta en un paso.” <span>— C.C. Cortéz</span>'}

                                                        
                                                ]
                    
                });
            });
            
        </script>
    </body>
</html>