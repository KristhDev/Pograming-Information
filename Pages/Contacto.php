<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kristhian Ferrufino">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Los mejores lenguajes de programación y frameworks para este año 2020, aprende cualquiera de estos para tener mas oportunidades">
    <meta name="keywords" content="Lenguajes de programacion, programacion, Mejores lenguajes, programacion 2020, frameworks 2020, mejores frameworks, lenguajes de programacion mas demandados ">
    <title>Programing Information</title>
    <link rel="stylesheet" href="../Styles/Contacto.css">
    <link rel="stylesheet" href="../Styles/ContactoResponsive.css">
    <link rel="stylesheet" href="../Styles/ContactFormValidation.css">
    <link rel="stylesheet" href="../Styles/BanerNav.css">
    <link rel="stylesheet" href="../Styles/BanerNavResponsive.css">
    <link rel="stylesheet" href="../Styles/Footer.css">
    <link rel="stylesheet" href="../Styles/FooterResponsive.css">
</head>
<body>
    <div class="Container">
        <div class="Subcont">
            <div class="title">
                <h1><a href="../index"><img src="../Imagenes/Logo.png" alt="Programing Information Logo"></a>Programing Information</h1>
            </div>
            <Nav class="Nav">
                <a id="BtnMenu" onclick="Btns()"><img src="../Imagenes/Menu.png" alt="Icono de Menu" srcset="">Menú</a>
                <div class="Menu Desplazar" id="Menu">
                    <a href="../" class="BtnsNav"><img src="../Imagenes/Home.png" alt="Icono Inicio">Inicio</a>
                    <a href="SobreMi" class="BtnsNav"><img src="../Imagenes/SobreMi.png" alt="Icono SobreMi">Sobre Mi</a>
                    <a href="Lenguajesdeprogramacion" class="BtnsNav"><img src="../Imagenes/LenguajesDeProgramacion.png" alt="Icono de Lenguajes de programacion">Lenguajes</a>
                    <a href="Frameworks" class="BtnsNav"><img src="../Imagenes/Framework.png" alt="Icono de frameworks">Frameworks</a>
                    <a href="Librerias" class="BtnsNav"><img src="../Imagenes/Libreria.png" alt="Icono de librerias">Librerías</a>
                    <a href="Contacto" class="BtnsNav"><img src="../Imagenes/Contacto.png" alt="Icono de contacto">Contacto</a>
                </div>
            </Nav>
            <img src="../Imagenes/programacion-2-e1551291144973.jpg" alt="Imagen del Baner">
        </div>
        <h2>Contacto</h2>
        <div class="Contact">
            <div class="Info">
                <p>Espero que toda la información que he compartido por este sitio haya sido de su agrado, además de que la haya podido aprovechar. Si tienen dudas o alguna sugerencia siéntanse en la libertad de hacerlo.</p>
                <img src="../Imagenes/code.jpg" alt="" srcset="">
            </div>
            <div class="social">
                <a class="facebook" href="https://www.facebook.com/" target="_blank"><i><img src="../Imagenes/FacebookLogo.png" alt="Log de Facebook"></i>Facebook</a>
                <a class="twitter" href="https://twitter.com/home" target="_blank"><i><img src="../Imagenes/TwitterLogo.png" alt="Logo de Twitter"></i>Twitter</a>
                <a class="pinterest" href="https://www.pinterest.ca/" target="_blank"><i><img src="../Imagenes/PinterestLogo.png" alt="Logo de Pinterest"></i>Pinterest</a>
                <a class="instagram" href="https://www.instagram.com/kristhianfe/?hl=en" target="_blank"><i><img src="../Imagenes/InstagramLogo.png" alt="Logo de Instagram"></i>Instagram</a>
                <a class="youtube" href="https://www.youtube.com/channel/UC2VZVhLZefAraDxUNs028Ew/featured?view_as=subscriber" target="_blank"><i><img src="../Imagenes/YoutubeLogo.png" alt="Logo de Youtube"></i>Youtube</a>
                <a class="gmail" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i><img src="../Imagenes/GmailLogo.png" alt="Logo de Gmail"></i>Gmail</a>
            </div>

            <div class="ContactForm">
                <div class="ImgForm">
                    <img src="../Imagenes/c-lenguaje-programacion.jpg" alt="" srcset="">
                </div>
                <form class="ContactPrograming" method="POST" action="../Php/mail.php" id="ContactForm">
                    <div class="Email" id="groupemail">
                        <label for="email">Dirección de correo electrónico:</label>
                        <input type="email" name="email" id="email" placeholder="example@gmail.com">
                        <small id="campoerroremail" class="groupMsgError"></small>
                    </div>
                    <div class="About" id="groupabout">
                        <label for="about">Asunto:</label>
                        <input type="text" name="about" id="about" placeholder="tema a tratar">
                        <small id="campoerrorabout" class="groupMsgError"></small>
                    </div>
                    <div class="Message" id="groupmessage">
                        <label for="message">Mensaje:</label>
                        <textarea name="message" id="message" cols="30" rows="11" placeholder="mensaje del tema a tratar"></textarea>
                        <small id="campoerrormessage" class="groupMsgError"></small>
                    </div>
                        <button type="submit" class="BtnSend" name="send" id="btnSend">Enviar</button>
                </form>
                <div class="salida" id="error"></div>
            </div>
        </div>
        <hr class="Line">
        <div class="endHomeBaner">
            <figure class="ImgEndHomeBaner">
                <div class="SlideEndHomeBaner">
                    <ul>
                        <li>
                            <img src="../Imagenes/img_30298_programhtml.jpg" alt="" srcset="">
                        </li>
                        <li>
                            <img src="../Imagenes/5b9a55a2ef4e9.jpeg" alt="">
                        </li>
                        <li>
                            <img src="../Imagenes/04bb1ec93c6c223aa61e1479435bb6e7.png" alt="">
                        </li>
                        <li>
                            <img src="../Imagenes/Qué-puedo-hacer-para-iniciar-mi-camino-como-programador.png" alt="">
                        </li>
                    </ul>
                </div>    
                <div class="hoverEndHomeBaner">
                    <p>Domina las nuevas tendencias del 2020</p>
                </div>
            </figure>
        </div>
        <div class="SubFooter">
            <div class="SubFooLeng">
                <div class="SubFooSubTitle">
                    <h3>Lenguajes de programación</h3>
                </div>
                <div class="SubFooSubContent">
                    <div class="ListLinks">
                        <a href="https://golang.org/">GO</a>
                        <a href="https://www.scala-lang.org/">Scala</a>
                        <a href="https://www.ruby-lang.org/es/">Ruby</a>
                        <a href="https://www.typescriptlang.org/">TypeScript</a>
                        <a href="https://kotlinlang.org/">Kotlin</a>
                    </div>
                    <div class="ListLinks">
                        <a href="https://developer.apple.com/library/archive/documentation/Cocoa/Conceptual/ProgrammingWithObjectiveC/Introduction/Introduction.html">Objective-c</a>
                        <a href="https://www.javascript.com/">JavaScript</a>
                        <a href="https://www.swift.com/es">Swift</a>
                        <a href="https://www.php.net/manual/es/intro-whatis.php">Php</a>
                        <a href="https://www.java.com/es/">Java</a>
                    </div>
                </div>
            </div>
            <div class="SubFooFrame">
                <div class="SubFooSubTitle">
                    <h3>Frameworks</h3>
                </div>
                <div class="SubFooSubContent">
                    <div class="ListLinks">
                        <a href="https://vuejs.org/">Vue.js</a>
                        <a href="https://angular.io/">Angular</a>
                        <a href="https://www.djangoproject.com/">Django</a>
                        <a href="https://spring.io/">Spring</a>
                        <a href="https://nodejs.org/es/">Node js</a>
                    </div>
                    <div class="ListLinks">
                        <a href="https://rubyonrails.org/">Ruby on Rails</a>
                        <a href="https://flask.palletsprojects.com/en/1.1.x/">Flask</a>
                        <a href="https://www.asp.net/">ASP.NET</a>
                        <a href="https://laravel.com/">Laravel</a>
                        <a href="https://www.drupal.org/">Drupal</a>
                    </div>
                </div>
            </div>
            <div class="SubFooLib">
                <div class="SubFooSubTitle">
                    <h3>Librerías</h3>
                </div>
                <div class="SubFooSubContent">
                    <div class="ListLinks">
                        <a href="https://es.reactjs.org/">React js</a>
                        <a href="https://jquery.com/">jQuery</a>
                        <a href="https://www.pygame.org/news">Pygame</a>
                        <a href="https://requests.readthedocs.io/en/master/">Requests</a>
                        <a href="https://momentjs.com/">Moments js</a>
                    </div>
                </div>
            </div>
            <div class="FooLinks">
                <div class="SubFooSubTitle">
                    <h3>Enlaces directos</h3>
                </div>
                <div class="SubFooSubContent">
                    <div class="ListLinks">
                        <a href="../">Inicio</a>
                        <a href="SobreMi">Sobre Mi</a>
                        <a href="Lenguajesdeprogramacion">Lenguajes de programación</a>
                        <a href="Frameworks">Frameworks</a>
                        <a href="Librerias">Librerias</a>
                        <a href="Contacto">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>Copyright ©. Realizado por desarrollador web Kristhian Ferrufino</p>
        </footer>
    </div>
    <script src="../Js/index.js"></script>
    <script src="../JS/validation.js"></script>
</body>
</html>