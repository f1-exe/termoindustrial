<?php

//funcion que retorna el codigo html del footer, esta funcion se llama en todas las vistas.
//para modificar solo una vez el footer y los efectos se vean replicados en todas las vistas donde se llame

function footers(){
    
    $footer =  '<footer>
                    <div class="footer-area termoindustrial-bg ptb-80">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="footer-widget md-30">
                                        <!-- <div class="footer-img">
                                            <a href="#"><img src="img/logo/2.png" alt="" /></a>
                                        </div> -->
                                        <div class="footer-address">
                                            <p><img src="img/footer/t-logo-footer.jpg" alt="" /></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 col-sm-3">
                                    <div class="widget mb-30">
                                        <div class="widget-title">
                                            <h4>Navegación del sitio</h4>
                                            <div class="address">
                                                <ul class="list-unstyled">
                                                    <li><p><a class="text-white" href="index.php"><strong>Inicio</strong></a></p></li> 
                                                    <li><p><a class="text-white" href="about.php"><strong>Nosotros</strong></a></p></li>
                                                    <li><p><a class="text-white" href="service.php"><strong>Productos</strong></a></p></li>
                                                    <li><p><a class="text-white" href="portfolio.php"><strong>Obras</strong></a></p></li>
                                                    <li><p><a class="text-white" href="contact.php"><strong>Contacto</strong><a></p></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="widget-title">
                                        <h4>Información de Contacto</h4>
                                        <div class="address">
                                            <ul class="list-unstyled contact">        
                                                <li>
                                                    <p>
                                                        <a class="text-white" href="https://www.instagram.com/invites/contact/?i=zenij2hhbavb&utm_content=4x0yn8s" target="_blank">
                                                            <strong>
                                                                <i class="fa fa-instagram"></i>
                                                            </strong> 
                                                         @termoindustrial
                                                        </a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <a class="text-white"  href="mailto:ventas@termoindustrial.cl">
                                                            <strong>
                                                                <i class="fa fa-envelope"></i>
                                                            </strong>
                                                        contacto@termoindustrial.cl
                                                        </a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <a class="text-white" href="https://wa.me/56984398846" target="_blank">
                                                            <strong>
                                                                <i class="fa fa-whatsapp"></i> 
                                                            </strong> 
                                                            +56 9 8439 8846
                                                        </a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <a class="text-white" href="https://goo.gl/maps/FKchy5M4MT9S88EV8" target="_blank">
                                                            <strong>
                                                                <i class="fa fa-map-marker"></i>
                                                            </strong> 
                                                            Avenida La Montaña #59, Colina
                                                        </a>
                                                    </p>
                                                </li> 
                                                <li>
                                                    <p>
                                                        <a class="text-white" href="tel:+5627846400">
                                                            <strong>
                                                                <i class="fa fa-phone"></i>
                                                            </strong>+56 2 2784 6400
                                                        </a>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom-area">
                        <div class="container">
                            <div class="copyright text-center">
                                <p>Termo Industrial Spa - Todos los derechos reservados - '.date('Y').' © Desarrollado por</p>
                                <a href="https://www.f1puntoexe.cl" target="_blank"><img src="img/footer/f1-footer.png" alt="logo-f1.exe"></a>
                            </div>
                        </div>
                    </div>
                </footer>';

    return $footer;
}


?>