<?php include('includes/head.php'); ?>
<section>
  <div class="gallery">
    <div class="container">
      <h2>Photo Gallery</h2>
      <div class="row">
        <div class="col-md-12">
          <div id="news-slider2" class="owl-carousel">
            <div class="post-slide2">
              <div class="post-img">
                <img class="pic-1" src="./img/gallery/jungle_theme_celebration/1.png">
              </div>
            </div>

            <div class="post-slide2">
              <div class="post-img">
                <img class="pic-1" src="./img/gallery/jungle_theme_celebration/2.png">
              </div>
            </div>
            <div class="post-slide2">
              <div class="post-img">
                <img class="pic-1" src="./img/gallery/jungle_theme_celebration/3.png">
              </div>
            </div>
            <div class="post-slide2">
              <div class="post-img">
                <img class="pic-1" src="./img/gallery/jungle_theme_celebration/4.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('includes/footerlinks.php'); ?>
<script>
  // slider - code
  $(document).ready(function () {

    $(function () {
      var owl = $("#news-slider2");
      owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000, // 5 seconds delay
        responsive: {
          // breakpoint from 0 up
          0: {
            items: 2
          },
          // breakpoint from 480 up
          480: {
            items: 3
          },
          // breakpoint from 768 up
          768: {
            items: 4
          }
        }
      });
    });

  });
</script>