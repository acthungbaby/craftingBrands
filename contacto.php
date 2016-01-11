<?php
require('class.phpmailer.php');

if (isset($_POST['enviar'])) {
$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
$mail->IsHTML(true);
$mail->From = "no-reply@craftingbrands.com.py";
$mail->FromName = "Crafting brands - Sitio Web";
$mail->Subject = "Crafting brands - Mensaje de contacto";
$mail->AddAddress("info@craftingbrands.com.py");
$cuerpo = '<p>Ha recibido un nuevo mensaje desde la web</p>';
$cuerpo .= '<p>Nombre: '.$_POST['nombre'].'</p>';
$cuerpo .= '<p>E-mail: '.$_POST['email'].'</p>';
$cuerpo .= '<p>Telefono: '.$_POST['tel'].'</p>';
$cuerpo .= '<p>Rubro: '.$_POST['rubro'].'</p>';
$cuerpo .= '<p>Mensaje: '.$_POST['mensaje'].'</p>';
$mail->Body = $cuerpo;
$mail->Send();
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Contacto | Crafting Brands</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
        <script type="text/javascript" src="js/modernizr.js"></script>
    </head>
    <body class="bodyContacto">
        <section id="contenedor">
            <section id="header">
                <?php include('header.php');?>
            </section>
            <section id="contenido">
                <img id="banner" src="images/banner-contacto.jpg" alt="">

                <h2 class="titular">Contacto</h2>
                <section id="contacto">
                    <p id="textocabecera">Senador Long esq. España - Paseo San José, Planta Alta
                    <br>
                    Asunción, Paraguay
                    <br>
                    Móvil: +595 971 110480
                    <br>
                    Email: info@craftingbrands.com.py</p>
                    <h3>si quiere conocer más, contacte con nosotros</h3>
                    <form>
                        
                        <ul>
                            <li>
                                <label>Nombre:</label>
                                <input type="text" name="nombre">
                            </li>
                            <li>
                                <label>Rubro:</label>
                                <input type="text" name="rubro">
                            </li>
                            <li>
                                <label>Teléfono:</label>
                                <input type="tel" name="tel">
                            </li>
                            <li>
                                <label>Mail:</label>
                                <input type="email" name="email">
                            </li>
                            <li>
                                <label>Mensaje:</label>
                                <textarea rows="5" name="mensaje"></textarea>
                            </li>
                        </ul>
                        <input type="submit" name="enviar" value="Enviar" id="contactoEnviar">
                    </form>
                </section>
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
                
            });
        </script>
    </body>
</html>