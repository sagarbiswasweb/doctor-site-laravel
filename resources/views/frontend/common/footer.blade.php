<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row gy-4">

            <!-- BRAND -->
            <div class="col-md-4">
                <h4 class="footer-brand">
                    <i class="bi bi-heart-pulse"></i> Dr. Md. Ahsan Habib
                </h4>
                <p class="footer-text">
                    <i>Providing compassionate, trusted, and modern healthcare
                    solutions for a healthier tomorrow.</i>
                </p>

                <div class="footer-social">
                    <a href="https://www.facebook.com/people/Advanced-hernia-center-Bangladesh/61588193302996" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://youtube.com/@dr.ahsanhabib-01?si=WOT8VLmwcqKg6vTr" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="https://x.com/ahcenterbd" target="_blank"><i class="bi bi-twitter-x"></i></a>
                    {{-- <a href="#"><i class="bi bi-linkedin"></i></a> --}}
                </div>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-md-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li><a href="{{ route('frontend.home') }}#about">About Doctor</a></li>
                    <li><a href="{{ route('frontend.home') }}#services">Services</a></li>
                    <li><a href="{{ route('frontend.home') }}#schedule">Appointment</a></li>
                    <li><a href="{{ route('frontend.home') }}#contact">Contact</a></li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-md-4">
                <h5 class="footer-title">Contact</h5>
                <ul class="footer-contact">
                    <li>
                        <i class="bi bi-geo-alt"></i>
                         Shaheed Suhrawardy Medical College, Dhaka
                    </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        +880 1712503159
                    </li>
                    <li>
                        <i class="bi bi-envelope"></i>
                        contact@ahcenterbd.com
                    </li>
                </ul>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="footer-bottom text-center">
            © 2026 ahcenterbd.com | All Rights Reserved. <i>Powered by <a href="https://gatewayautomations.com" target="_blank" style="color: rgb(255, 98, 98)">Gateway Automation Limited</a></i>
        </div>
    </div>
</footer>



<!-- WhatsApp -->
<a href="https://wa.me/8801712503159" class="whatsapp-btn">
    <i class="bi bi-whatsapp"></i> WhatsApp
</a>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('') }}frontend/assets/js/script.js"></script>

{{-- aos animation  --}}
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        once: true, // Animation happens only once when scrolling down
    });
  </script>
</body>
</html>
