<!DOCTYPE html>
<html lang="en">

<head>
  <title>Programmes</title>
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
    <section class="banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 p-0">
            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
              <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol> -->
              <!-- slides -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/banner1.png" class="d-block w-100" alt="Banner1" />
                </div>

                <div class="carousel-item">
                  <img src="img/banner1.png" class="d-block w-100" alt="Banner2" />
                </div>

                <div class="carousel-item">
                  <img src="img/banner1.png" class="d-block w-100" alt="Banner3" />
                </div>
              </div>
              <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon">
                  <i class="bi bi-chevron-left"></i>
                </span>
              </a>
              <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                <span class="carousel-control-next-icon">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="rs">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
          <div class="col-md-3">
            <h6>PROGRAMME</h6>
          </div>
          <div class="col-md-9"></div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <h2>Cambridge Primary</h2>
          </div>
          <div class="col-md-7">
            <p class="paragraph1">The Cambridge Primary curriculum is administered for learners within the age bracket
              of 5 to 11 years. The program imparts understanding in English, Maths and Science which are core subjects.
              The schools also have Information and communication technology (ICT) programs for learners to attain
              computer literacy along with Global Perspectives, Hindi, French (as third language) and Visual Art as a
              part of primary curriculum.<br>
              Each framework for English, Mathematics and Science is designed to engage learners in an active and
              creative learning journey while providing a comprehensive set of progressive learning objectives.<br>
              Children's social and emotional well-being is an integral part of Primary curriculum. Through PSHE lessons
              and assemblies we emphasize the importance of life skills such as respect, honesty, kindness and
              Independence.</p>

            <button class="read mt-3"> Read More</button>
          </div>
        </div>
      </div>
    </section>
    <section class="rs">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
          <div class="col-md-3">
            <h6>PROGRAMME</h6>
          </div>
          <div class="col-md-9"></div>
        </div>
        <div class="row">
          <div class="col-md-5">

            <h2>Cambridge Lower Secondary</h2>
          </div>
          <div class="col-md-7">
            <p class="paragraph1">Cambridge Lower Secondary is typically for learners aged 11 to 14 years. Cambridge
              lower secondary programme is part of the Cambridge Pathway. The four stages lead seamlessly from lower
              secondary to secondary and pre-university years. Each stage builds on the learners' development from the
              previous one or from other educational systems.<br>
              Cambridge Lower Secondary curriculum prepares students for the next step of their education, providing a
              clear path as they progress through the Cambridge Pathway in an age-appropriate way.<br>
              By offering Cambridge Lower Secondary, we provide a broad and balanced education for learners, helping
              them to thrive throughout their schooling, work and life.<br>
              The curriculum is flexible, and the content is adapted to suit the school ethos and culture.<br>
              Cambridge Lower Secondary prepares students for the next stage by developing knowledge, understanding and
              skills across the programme and developing young learners who are confident, responsible, reflective,
              innovative and engaged.</p>

            <button class="read mt-3"> Read More</button>
          </div>
        </div>
      </div>
    </section>
    <section class="rs">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
          <div class="col-md-3">
            <h6>PROGRAMME</h6>
          </div>
          <div class="col-md-9"></div>
        </div>
        <div class="row">
          <div class="col-md-5">

            <h2>Cambridge Upper Secondary</h2>
          </div>
          <div class="col-md-7">
            <p class="paragraph1">Upper Secondary is typically for learners aged 14 to 16 years. The curriculum provides
              broad and balanced study across a wide range of subjects, using learner-centred and enquiry-based
              approaches to learning. Learners take internationally recognised Cambridge IGCSE or Cambridge O Level
              qualifications at the end of Cambridge Upper Secondary.<br>
              Cambridge IGCSE helps students to develop knowledge, understanding and skills in subject content and
              intellectual enquiry. Cambridge IGCSE has been designed for students worldwide, including those whose
              first language is not English. They offer students the flexibility to choose from over 70 subjects at
              Cambridge IGCSE, meaning they can study the subjects they enjoy and are best at.</p>

            <button class="read mt-3"> Read More</button>
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