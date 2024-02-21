<footer class="footer-distributed">
    <div class="container-fluid">
        <div class="row">
            <!-- Colonna sinistra -->
            <div class="col-lg-4 my-3  text-center">
                <img class="img-footer my-0" src="/storage/images/logoAulabPost.png" alt="Logo the aulab post">
                <p class="footer-links">
                    <a href="{{ route('homepage') }}" class="text-dark">Home</a>
                    <a href="#" class="text-dark">Blog</a>
                    <a href="{{route('aboutUs')}}" class="text-dark">About</a>
                    <a href="#" class="text-dark">Faq</a>
                </p>
                <p class="footer-company-name">The Aulab Post © 2024</p>
            </div>
            
            <!-- Colonna centrale -->
            <div class="col-lg-4 my-3 text-center">
                <h6>Contattaci</h6>
                <p class="text-dark mt-5">+800 583 345</p>
                <p><a href="mailto:support@theaulabpost.com" class="text-dark email-footer">support@theaulabpost.com</a></p>
            </div>
            
            <!-- Colonna destra -->
            <div class="col-lg-4 my-3 text-center">
                <h6>The Aulab Post</h6>
                <p class="my-5">"Esplora il mondo attraverso l'insaziabile sete di conoscenza. La cultura è la chiave che apre le
                    porte
                    della comprensione, la cultura è The Aulab Post."</p>

                <div class="footer-icons">
                    <h6>Seguici su:</h6>
                    <a href="{{ url('https://www.facebook.com/aulab') }}" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="{{ url('https://api.whatsapp.com/send/?phone=393339513967&text=Ciao%21+Vorrei+avere+maggiori+informazioni+sul+corso+Hackademy+per+diventare+web+developer&type=phone_number&app_absent=0') }}" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <a href="{{ url('https://www.linkedin.com/school/aulab-srl/') }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ url('https://www.instagram.com/aulab_it/') }}" target="_blank"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>