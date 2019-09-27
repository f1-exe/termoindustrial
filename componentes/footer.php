<?php

//funcion que retorna el codigo html del footer, esta funcion se llama en todas las vistas.
//para modificar solo una vez el footer y los efectos se vean replicados en todas las vistas donde se llame

function footers(){
    
    $footer =  '<footer>
                    <div class="footer-area termoindustrial-bg ptb-80">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-4">
                                    <div class="footer-widget md-30">
                                        <div class="footer-img">
                                            <a href="#"><img src="img/logo/2.png" alt="" /></a>
                                        </div>
                                        <div class="footer-address">
                                            <p>We create themes and templates with bootstrap framework.</p>
                                        </div>
                                        <div class="address">
                                            <ul class="list-unstyled contact">
                                                <li><p><strong><i class="fa fa-map-marker"></i> </strong> vaisahali, jaipur, 302012</p></li> 
                                                <li><p><strong><i class="fa fa-envelope"></i></strong> <a href="#">Support@domain.com</a></p></li>
                                                <li> <p><strong><i class="fa fa-phone"></i></strong> +91 1800 2345 2132</p></li>
                                                <li> <p><strong><i class="fa fa-print"></i> </strong> 1800 2345 2132</p></li>
                                                <li> <p><strong><i class="fa fa-skype"></i> </strong> jondoe001</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="widget mb-30">
                                        <div class="widget-title">
                                            <h4>Popular Posts</h4>
                                            <ul class="posts-list">
                                                <li>
                                                    <div class="list-img">
                                                        <a href="#"><img src="img/footer/1.jpg" alt="" /></a>
                                                    </div>
                                                    <h5><a href="#">Dolores labore quod.</a></h5>
                                                    <span>Jan 08, 2016</span>
                                                </li>
                                                <li>
                                                    <div class="list-img">
                                                        <a href="#"><img src="img/footer/2.jpg" alt="" /></a>
                                                    </div>
                                                    <h5><a href="#">Dolores labore ipsum quod.</a></h5>
                                                    <span>Jan 08, 2018</span>
                                                </li>
                                                <li>
                                                    <div class="list-img">
                                                        <a href="#"><img src="img/footer/3.jpg" alt="" /></a>
                                                    </div>
                                                    <h5><a href="#">Dolores labore ipsum</a></h5>
                                                    <span>Jan 01, 2016</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 hidden-sm">
                                    <div class="widget mb-30">
                                        <div class="widget-title">
                                            <h4>Tagcloud</h4>
                                            <div class="tagcloud">
                                                <a href="#">Design</a>
                                                <a href="#">Develop</a>
                                                <a href="#">Seo</a>
                                                <a href="#">jQuery</a>
                                                <a href="#">Wordpress</a>
                                                <a href="#">Angular</a>
                                                <a href="#">Node</a>
                                                <a href="#">Express</a>
                                                <a href="#">Gulp</a>
                                                <a href="#">Sass</a>
                                                <a href="#">Bootstrap</a>
                                                <a href="#">Html5</a>
                                                <a href="#">Css3</a>
                                                <a href="#">Node</a>
                                                <a href="#">Retina</a>
                                                <a href="#">Sprites</a>
                                                <a href="#">Html5</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="widget ">
                                        <div class="widget-title">
                                            <h4>Latest Work</h4>
                                            <div class="rows">
                                                <ul class="Flickr-list">
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-1.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-2.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-3.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-4.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-5.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-6.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-7.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-8.jpg" alt="" /></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img src="img/portfolio/img-9.jpg" alt="" /></a>
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
                            <div class="social-icons text-center">
                                <label>Encuéntranos en:</label>
                                <a href="https://wa.me/56984398846" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/invites/contact/?i=zenij2hhbavb&utm_content=4x0yn8s" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://goo.gl/maps/FKchy5M4MT9S88EV8" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                            </div>
                            <div class="copyright text-center">
                                <p>Termo Industrial Spa - Todos los derechos reservados - '.date('Y').' © Desarrollado por</p>
                                <a href="https://www.f1puntoexe.cl" target="_blank">f1.exe</a>
                            </div>
                        </div>
                    </div>
                </footer>';

    return $footer;
}


?>