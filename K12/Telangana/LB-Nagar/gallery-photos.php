<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include('includes/head.php'); ?>
</head>

<body>
  <main id="birla">
    <section class="pos-f-t">
      <?php include('includes/header.php'); ?>
    </section>
    <section>
      <div class="gallery">
        <div class="container photos">
          <H4>Diwali</H4>
          <div class="row">
            <div class="col-md-12">
              <div id="gallery_slider1" class="owl-carousel">
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/diwali/1.jpg">
                  </div>
                </div>

                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/diwali/2.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/diwali/3.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/diwali/4.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="gallery">
        <div class="container photos">
          <H4>Graduation Ceremony</H4>
          <div class="row">
            <div class="col-md-12">
              <div id="gallery_slider2" class="owl-carousel">
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/graduation/1.jpg">
                  </div>
                </div>

                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/graduation/2.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/graduation/3.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/graduation/4.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="gallery">
        <div class="container photos">
          <H4>National Remote Sensing Centre</H4>
          <div class="row">
            <div class="col-md-12">
              <div id="gallery_slider3" class="owl-carousel">
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/national_remote_sensing_center/1.jpg">
                  </div>
                </div>

                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/national_remote_sensing_center/2.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/national_remote_sensing_center/3.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/national_remote_sensing_center/4.jpg">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="gallery">
        <div class="container photos">
          <H4>Skating Winners</H4>
          <div class="row">
            <div class="col-md-12">
              <div id="gallery_slider4" class="owl-carousel">
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/skating_winners/1.jpg">
                  </div>
                </div>

                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/skating_winners/2.jpg">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include('includes/gallery.php'); ?>
    <?php include('includes/footer.php'); ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <?php include('includes/footerlinks.php'); ?>
  </main>
  <script>
    // slider - code
    $(document).ready(function () {
      $("#gallery_slider1").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        pagination: true,
        navigationText: false,
        autoPlay: true,
        nav: true,
      });
    });

    $(document).ready(function () {
      $("#gallery_slider2").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        pagination: true,
        navigationText: false,
        autoPlay: true,
        nav: true,
      });
    });
    $(document).ready(function () {
      $("#gallery_slider3").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        pagination: true,
        navigationText: false,
        autoPlay: true,
        nav: true,
      });
    });
    $(document).ready(function () {
      $("#gallery_slider4").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        pagination: true,
        navigationText: false,
        autoPlay: true,
        nav: true,
      });
    });
  </script>
</body>

</html>