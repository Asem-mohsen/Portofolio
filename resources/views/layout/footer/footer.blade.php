<footer id="footer" class="footer">

    <div class="container">
        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Assem Mohsen</strong> <span>All Rights Reserved</span></p>
        </div>
        <div class="social-links d-flex justify-content-center">
        <a href="{{ config('social.facebook') }}" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="{{ config('social.instagram') }}" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="{{ config('social.linkedin') }}" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="{{ config('social.github') }}" target="_blank"><i class="bi bi-github"></i></a>
        </div>
        <div class="credits">
            Designed by <a href="{{ route('home') }}">Assem Mohsen</a>
        </div>
    </div>

</footer>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
  // Configure toastr options
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
</script>