<!DOCTYPE html>
<html lang="en">

<head>
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
    <section class="testimonial">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
          <div class="col-md-12">
            <h2>Testimonals</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="card">
              <div class="card-body one">
                <p class="paragraph6">Covid times have been really tough on everyone, especially children who were
                  unable to attend regular school, play outside and were forced to stay indoors.
                  In such testing times, online schooling has been a blessing for children as well as parents.
                  Initially there was skepticism around whether the increased screen time is good for children or not
                  and whether they would be able to learn through online classes the way they are being taught
                  physically in school.
                  But the way BOMIS has conducted classes has been amazing and I being a parent of a Grade 1 kid who is
                  prone to be restless and needs constant monitoring,
                  I was utterly surprised how the kids sat in front of the computer with focus and attention.</p>
                <br>
                <br>
                <p class="paragraph7">Saba Banglawala</p>
                <p class="paragraph8">(Grade 1 Parent)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card">
              <div class="card-body two">
                <p class="paragraph6">The online classes have been very helpful in giving the kids a structure and
                  routine. The worksheets sent at home help reinforce concepts to allow kids to
                  really grasp the concepts well. The constant interaction during online classes
                  ensures that the kids stay focused in class and pay attention to what is being
                  taught. The school is doing a great job in ensuring that there is continuity in
                  learning and the kids have adjusted well to the new system of learning.
                </p>
                <br>
                <br>
                <p class="paragraph7">Shefali Petiwala </p>
                <p class="paragraph8">(Grade 2 Parent)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card">
              <div class="card-body three">
                <p class="paragraph6">With the education scene having changed drastically, e-learning has become the
                  norm. At BOMIS we are assured of an amazing educational environment thanks to
                  the fantastic group of educators. The schooling is geared towards learning and
                  creativity, rather than just getting a grade. From the online interactions,
                  assignment submissions, art, drama and music sessions, to the assessments, my
                  daughter loves it all!
                </p>
                <br>
                <br>
                <p class="paragraph7">Shweta Shah </p>
                <p class="paragraph8">(Grade 3 Parent)</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="card spacing1">
              <div class="card-body four">
                <p class="paragraph6">Online studies have been a little difficult but the teachers of BOMIS have made
                  it easy and efficient for the students and have worked hard to conduct the
                  classes so that the students don't miss out on anything. They have regularly
                  monitored students' performance, teachers have provided invaluable support
                  during these hard times. I really appreciate the efforts made by the teachers
                  and the Principal.</p>
                <br>
                <br>
                <p class="paragraph7">Ronak Desai </p>
                <p class="paragraph8">(Grade 3 Parent)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="card spacing2">
              <div class="card-body five">
                <img src="img/testimonal2.png" alt="">
                <p class="paragraph6 ps28">We have been very impressed with the all-round personal development of our
                  child, Aayaan Mody (Grade I). He has become more expressive, inquisitive, and
                  confident. He has thoroughly enjoyed the curricular activities of sports, yoga,
                  and dance. Introduction of a foreign language so early in his schooling has been
                  a plus. Looking forward to the next academic year.</p>
                <br>
                <br>
                <p class="paragraph7">Mr. and Mrs. Mody </p>
                <p class="paragraph8">(Grade 1 Parent)</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 width-show">
            <div class="card spacing3">
              <div class="card-body six">
                <img src="img/testimonal1.png" alt="">
                <p class="paragraph6 ps28">Dhiyaan has had a wonderful learning experience in BOMIS in grade 1 as well
                  as
                  grade 2. We are satisfied to see the all round development of Dhiyaan as a
                  student. The teachers are a very good mentor to guide him in learning the right
                  attitude/Skills/discipline/learning that are essential for these kids to become
                  a confident teenager.</p>
                <br>
                <br>
                <p class="paragraph7">Mr. Saumil Shah</p>
                <p class="paragraph8">(Grade 2 Parent)</p>

              </div>
            </div>
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