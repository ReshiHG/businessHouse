    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-col first">
                        <h6>Acerca de Business House</h6>
                        <p class="p-small">En Business House somos una agencia de marketing inmobiliario que ofrece servicios integrales para que puedas comprar o vender propiedades de manera eficaz</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Enlaces</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="terminos">Términos y condiciones</a></li>
                            <li><a href="privacidad">Política de privacidad</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third text-center">
                        <span class="fa-stack">
                            <a target="_blank" href="https://www.facebook.com/BusinessHouseMkt">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a target="_blank" href="https://wa.link/bcbqn2">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-whatsapp fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a target="_blank" href="https://www.instagram.com/businesshousem/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a target="_blank" href="https://www.linkedin.com/company/business-house-mkt">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </footer> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">© 2021 Business House</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->


    <!-- Cookies advice -->
    <aside id="cookies-advice" class="hide">
            <div class="row">
                <div class="cookies-text col-lg-10 col-sm-12">
                    <h5 class="text-light">Aviso de cookies</h4>
                    <p class="text-light p-small">Usamos cookies propias y de terceros para mejorar tu experiencia en nuestra web. Si continúas usando este sitio, asumiremos que estás de acuerdo con ello. Para saber más revisa nuestra <a href="#">política de cookies</a>.</p>
                </div>
                <div class="cookies-btn col-lg-2 col-sm-12">
                    <button class="btn-solid-reg" id="cookiesBtn">Aceptar</button>
                </div>
            </div>
    </aside>
    <!-- end of cookies advice -->
    
    	


    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->

    <!-- Messenger Plugin de chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin de chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102453522268675");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- end of messenger-plugin -->
</body>
</html>