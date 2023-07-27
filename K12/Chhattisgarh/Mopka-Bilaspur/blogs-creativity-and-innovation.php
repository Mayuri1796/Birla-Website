<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blogs-Creativity and Innovation</title>
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
    <section class="blog_one">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
            <h2>Creativity and Innovation</h2>
            <h6>monday, 28th december 2020</h6>
            <p>“There is no creativity and innovation without failure.” “We cannot always build the future for our
              youth, but we can build the youth for our future.”</p>
            <img src="./img/creativity-and-innovation-blog1.png" alt="">
          </div>
          <p class="blog_one_para"> <b> "There is no creativity and innovation without failure"</b> <br><br>

            <b> "We cannot always build the future for our youth, but we can build the youth for our future." </b>
            <br><br>

            Innovation and creativity are two words heard frequently in education today. How can we encourage innovation
            and creativity in ourselves and our learners?
            Education is one of the most dynamic fields, and it has to be as we deal with children with different
            sensibilities, skill sets, interests and backgrounds. We as educators have to constantly reinvent ourselves,
            improvise, and keep ourselves updated with the latest innovations in teaching techniques if we intend to
            connect with our learners.
            With a fast growth of information technology, the ways of teaching learners demand fundamental changes. The
            process of learning should be creative and captivating; hence, teachers have to take advantage of
            educational innovations in order to keep abreast with recent developments.
            Some people believe that creativity is an inborn trait and it cannot be acquired; however every person has
            the potential to become creative. It is important not to be afraid to try something new. So we should not
            focus on the result, but we should try to free our mind and enjoy thinking.
            Innovation in the classroom is no longer an asset, it is a necessity. It goes without saying that: "To
            become innovative, a teacher and the students must be ready to take risks."
            Learning by doing, a concept used for pre-schoolers, is applicable for older students as well where a method
            is used in which they engage learners in multiple senses like visual, auditory and kinaesthetic. If
            activities like art, drama, music and movement are incorporated while teaching subjects, the learners can be
            creatively engaged in the learning process.
          </p>
          <h3>Conclusion</h3>
          <p>It is impossible to find new effective ways without experimenting. Teacher should not be afraid of trying
            different pedagogical approaches and adopting technologies.
            Creativity is the key to Innovation.
            We thank you for being such lovely parents and giving safe homes to our children. We value your enthusiasm
            as a collaborative BOMIS community.</p>
          <p>“There is no creativity and innovation without failure.” “We cannot always build the future for our youth,
            but we can build the youth for our future.”</p>
          <h5>Teacher, Miss AvaniPYP Co-ordinator <br>
            Birla Open Minds International School Walkeshwar</h5>
        </div>
      </div>
    </section>
    <section class="rs blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2> Latest Blogs</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
            <h6 class="sub-heading1 ">tuesday, 22nd december 2020</h6>
            <h3 class="paragraph3 ps28">Mindful Parenting</h3>
            <p class="paragraph4 ps28"> Dear Parents, drawing on the tradition of Buddhist practice, the
              concept of mindfulness has become a global phenomenon.</p>
          </div>
          <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
            <a href=""><img src="./img/Mindful-Parenting.png" alt=""></a>
          </div>
        </div>
        <div class="row ps28 rs">
          <div class="col-md-8" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
            <h6 class="sub-heading1">THRUSDAY, 10th DECEMBER 2020</h6>
            <h3 class="paragraph3 ps28">Introduction to the Four Temperaments</h3>
            <p class="paragraph4 ps28"> “Temperament is the thermometer of a character.” - Honore de Balzac</p>
          </div>
          <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
            <img src="img/introduction-to-the-four-temperaments.png" alt="">
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