
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Servicios | Crafting Brands</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
        <script type="text/javascript" src="js/modernizr.js"></script>
    </head>
    <body class="bodyServicios">
        <section id="contenedor">
            <section id="header">
                <?php include('header.php');?>
            </section>
            <section id="contenido">
                <img id="banner" src="images/banner-servicios.jpg" alt="">

                <h2 class="titular">Servicios</h2>
                <a href="casos.php" class="verCasos">Ver casos de estudio</a>
                <div class="servicioIzq principal">
                    <div class="inicioItem ">
                        <h2>Planning Estratégico <a>Ver más</a></h2>
                    </div>
                    <div class="inicioSub">
                        <div class="inicioItem diagnostico">
                            <h2>Diagnóstico de Negocio y Marcas <a class="grey">Ver más</a></h2>
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
                            <h2>Creación, Gestión de Marcas <br>y Categorías de Productos <a class="grey">Ver más</a></h2>
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
                            <h2>Planeamiento Estratégico <a class="grey">Ver más</a></h2>
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
                <div class="servicioDer principal">
                    <div class="inicioItem darkcolor ">
                        <h2>Business intelligence<a>Ver más</a></h2>
                    </div>
                    <div class="inicioSub">
                        <div class="inicioItem asesoramiento darkcolor">
                            <h2>Asesoramiento <a class="grey">Ver más</a></h2>
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
                        <div class="inicioItem darkcolor investigacion">
                            <h2>Investigación de Mercado <a class="grey">Ver más</a></h2>
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
            </section>
            <div class="push"></div>
        </section>
        <section id="footer">
            <?php include('footer.php');?>
        </section>
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $(".bold").next().slideUp(0);

                $("h2").next().slideUp(0);

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
    </body>
</html>