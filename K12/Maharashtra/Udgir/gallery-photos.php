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

          <h4>Summer Camp</h4>
          <div class="row">
            <div class="col-md-4">
              <iframe width="100%" height="250" src="https://www.youtube.com/embed/eKdnqL50IHU"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
              <!-- <img src="./img/walkthrough.png" class="iconimg" alt="">
              <div class="icon2">
                <i class="fa fa-play"></i>
              </div> -->
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="250" src="https://www.youtube.com/embed/zi1QO258aXs"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
            <div class="col-md-4">
              <iframe width="100%" height="250" src="https://www.youtube.com/embed/cIhAetPPtQY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
          </div>
          <div class="row mt-4">
            <h4>Back to School</h4>
            <div class="col-md-12">
              <div id="gallery_slider1" class="owl-carousel">
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-1.jpg">
                  </div>
                </div>

                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-2.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-3.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-4.jpg">
                  </div>
                </div>

                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-5.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-6.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-7.jpg">
                  </div>
                </div>

                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-8.jpg">
                  </div>
                </div>
                <div class="post-slide2">
                  <div class="post-img">
                    <img class="pic-1" src="./img/gallery/bts-9.jpg">
                  </div>
                </div>

              </div>
            </div>
          </div>
          <h4>Back to School</h4>
          <p>Birla Open minds International School, Udgir presents #Back to School. A series of insightful conversations
            between our students and luminaries, who have achieved extraordinary success in life. We are delighted to
            release our first episode with Dr. Vitthal Chamwad a pediatrician, who is a true inspiration for the youths
            of rural areas and has the spark to do something in their lives.</p>
          <div class="row">
            <div class="col-md-4">
              <iframe width="100%" height="300" src="https://www.youtube.com/embed/hzmeodUWggI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
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