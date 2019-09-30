<?php

//funcion que retorna el codigo html del header, esta funcion se llama en todas las vistas.
//para modificar solo una vez el header y los efectos se vean replicados en todas las vistas donde se llame
function headers(){

    $header = '<header>
                    <div class="header-top-area termoindustrial-bg hidden-xs">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <ul class="top-right">
                                        <li>
                                            <a href="mailto:ventas@termoindustrial.cl">
                                                <i class="fa fa-envelope"></i>
                                                <span>ventas@termoindustrial.cl</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+5627846400">
                                                <i class="fa fa-phone"></i>
                                                <span>+56 2 2784 6400</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6 hidden-xs">
                                    <div class="header-icon floatright">
                                        <a href="https://wa.me/56984398846" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                        <a href="https://www.instagram.com/invites/contact/?i=zenij2hhbavb&utm_content=4x0yn8s" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="https://goo.gl/maps/FKchy5M4MT9S88EV8" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                                    </div>							
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main-menu-area-start -->
                    <div class="main-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-2">
                                    <div class="logo">
                                        <a href="index.php"><img src="img/logo/t-header.jpg" alt="TermoIndustrial logo"/></a>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-10">
                                    <div class="main-menu floatright">
                                        <nav>
                                            <ul>
                                                <li><a href="index.php">Inicio</a></li>
                                                <li><a href="about.php">Nosotros</a></li>
                                                <li><a href="service.php">Productos</a></li>
                                                <li><a href="portfolio.php">Obras</a></li>
                                                <li><a href="contact.php">Contacto</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mobile-menu-area"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main-menu-area-end -->
                </header>';

    return $header;
}

?>