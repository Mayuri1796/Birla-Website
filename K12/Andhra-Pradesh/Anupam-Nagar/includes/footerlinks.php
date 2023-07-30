<script src="https://birla.nuvodiamonds.com/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js" integrity="sha512-S/H9RQ6govCzeA7F9D0m8NGfsGf0/HjJEiLEfWGaMCjFzavo+DkRbYtZLSO+X6cZsIKQ6JvV/7Y9YMaYnSGnAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.0.4/swiper-bundle.min.js" integrity="sha512-0N/5ZOjfsh3niel+5dRD40HQkFOWaxoVzqMVAHnmAO2DC3nY/TFB7OYTaPRAFJ571IRS/XRsXGb2XyiFLFeu1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnk12.nuvodiamonds.com/assets/vendor/php-email-form/validate.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha512-ldc1sPu1FZ8smgkgp+HwnYyVb1eRn2wEmKrDg1JqPEb02+Ei4kNzDIQ0Uwh0AJVLQFjJoWwG+764x70zy5Tv4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- Template Main JS File -->
<script src="https://cdnk12.nuvodiamonds.com/assets/js/main.js"></script>
<script src="https://cdnk12.nuvodiamonds.com/js/script.js"></script>
<script>
    // Helper function to select elements
    function select(selector) {
        return document.querySelector(selector);
    }

    // Helper function to add event listeners
    function addListener(element, event, handler, useCapture = false) {  
        element.addEventListener(event, handler, useCapture);
    }

    // Mobile nav toggle
    addListener(document, 'click', function(e) {
        if (e.target.classList.contains('mobile-nav-toggle')) {
            select('#navbar').classList.toggle('navbar-mobile');
            e.target.classList.toggle('bi-list');
            e.target.classList.toggle('bi-x');
        }
    });

    // Mobile nav dropdowns activate
    const dropdownLinks = document.querySelectorAll('.navbar .dropdown > a');
    for (const link of dropdownLinks) {
        addListener(link, 'click', function(e) {
            if (select('#navbar').classList.contains('navbar-mobile')) {
                e.preventDefault();
                this.nextElementSibling.classList.toggle('dropdown-active');
            }
        }, true);
    }
</script>