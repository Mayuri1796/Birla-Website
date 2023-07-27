<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blogs</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script type="text/javascript">
    (function ($) {
      $(function () {
        $("#scroller").simplyScroll();
      });
    })(jQuery);
  </script>

  <?php include('includes/head.php'); ?>

</head>

<body>
  <main id="birla">
    <section class="pos-f-t">
      <?php include('includes/header.php'); ?>
    </section>
    <section class="rs blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2> Blogs</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
            <h6 class="sub-heading1 ">MONDAY, 28th DECEMBER 2020</h6>
            <h3 class="paragraph3 ps28">Creativity and Innovation</h3>
            <p class="paragraph4 ps28"> “There is no creativity and innovation without failure.” “We cannot
              always build the future for our youth, but we can build the youth
              for our future.”</p>
          </div>
          <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
            <a href="blogs-creativity-and-innovation.php"><img src="img/Creativity-and-Innovation.png" alt=""></a>
          </div>
        </div>
        <div class="row ps28 rs">
          <div class="col-md-8" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
            <h6 class="sub-heading1">TUESDAY, 22nd DECEMBER 2020</h6>
            <h3 class="paragraph3 ps28">Mindful Parenting</h3>
            <p class="paragraph4 ps28"> Dear Parents, drawing on the tradition of Buddhist practice, the
              concept of mindfulness has become a global phenomenon.</p>
          </div>
          <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
            <img src="img/Mindful-Parenting.png" alt="">
          </div>
        </div>
        <div class="row ps28 rs">
          <div class="col-md-8" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
            <h6 class="sub-heading1">THRUSDAY, 10th DECEMBER 2020</h6>
            <h3 class="paragraph3 ps28">Introduction to the Four Temperaments</h3>
            <p class="paragraph4 ps28"> “Temperament is the thermometer of a character.” - Honore de Balzac</p>
          </div>
          <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
            <img src="img/Introduction-to-the-four-temperaments.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <?php include('includes/gallery.php'); ?>
    <?php include('includes/footer.php'); ?>

    <?php include('includes/footerlinks.php'); ?>
  </main>
  <script>
    $(".slider").slick({

      // normal options...
      infinite: false,

      // the magic
      responsive: [{

        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          infinite: true
        }

      }, {

        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          dots: true
        }

      }, {

        breakpoint: 300,
        settings: "unslick" // destroys slick

      }]
    });
  </script>
</body>

</html>