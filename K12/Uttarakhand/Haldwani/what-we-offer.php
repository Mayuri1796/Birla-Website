<!DOCTYPE html>
<html lang="en">

<head>
  <title>What we offer </title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
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
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
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
    <section class="facilities">
      <div class="container" data-aos="fade-up" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
          <div class="col-md-4">
            <h2> Facilites </h2>
            <img src="img/facilities.png" alt="">
            <ul class="mt-3">
              <li>A Centre of Academic Excellence </li>
              <li>World class Infrastructure</li>
              <li>Joyful and digitized learning environment </li>
              <li>Air Conditioned Smart Classrooms with Interactive Digital Board </li>
              <li>Wi-Fi enabled Campus </li>
              <li>Computer Lab with digital learning facilities </li>
              <li>CCTV Surveillance System </li>
              <li>Indoor Astro Turf Sports Facility (Proposed) </li>
              <li>Multipurpose Hall </li>
              <li>Well equipped and spacious library with e-learning resources (Proposed) </li>
              <li>Multi-cuisine Cafeteria (Proposed)</li>
              <li> Creative Learning / Activity Zones</li>
              <li> Thematic and STEM based integrated international curriculum</li>
            </ul>
          </div>
          <div class="col-md-4">
            <h2>Activities</h2>
            <img src="img/activities.png" alt="">
            <ul class="mt-3">
              <li>Guest Lectures by renowned Educationists</li>
              <li>Cultural Exchange Programme </li>
              <li>Career Development Programme</li>
              <li>Culminating Week / Cultural Week / Subject Development Week Celebration</li>
              <li>Community Connect Programme / Educational Tips / Social Awareness Programme </li>
              <li>Clap Talk Sessions </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h2>Co-Curricular</h2>
            <img src="img/co-curricular.png" alt="">
            <ul class="mt-3">
              <li>Dance sessions by Shiamak Davar Institute of performing Arts</li>
              <li>Performing Arts Sessions by Helen O Grady</li>
              <li>Music Sessions by Furtados School of Music</li>
              <li>Football at Astro Turf</li>
            </ul>
          </div>
        </div>
        <button class="read" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
          aria-controls="collapseExample">Show More <i class="fa fa-angle-down"></i> </button>
        <div class="collapse" id="collapseExample">
          <div class="row">
            <div class="col-md-4">
              <h2> Facilites </h2>
              <img src="img/facilities.png" alt="">
              <ul class="mt-3">
                <li>A Centre of Academic Excellence </li>
                <li>World class Infrastructure</li>
                <li>Joyful and digitized learning environment </li>
                <li>Air Conditioned Smart Classrooms with Interactive Digital Board </li>
                <li>Wi-Fi enabled Campus </li>
                <li>Computer Lab with digital learning facilities </li>
                <li>CCTV Surveillance System </li>
                <li>Indoor Astro Turf Sports Facility (Proposed) </li>
                <li>Multipurpose Hall </li>
                <li>Well equipped and spacious library with e-learning resources (Proposed) </li>
                <li>Multi-cuisine Cafeteria (Proposed)</li>
                <li> Creative Learning / Activity Zones</li>
                <li> Thematic and STEM based integrated international curriculum</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h2>Activities</h2>
              <img src="img/activities.png" alt="">
              <ul class="mt-3">
                <li>Guest Lectures by renowned Educationists</li>
                <li>Cultural Exchange Programme </li>
                <li>Career Development Programme</li>
                <li>Culminating Week / Cultural Week / Subject Development Week Celebration</li>
                <li>Community Connect Programme / Educational Tips / Social Awareness Programme </li>
                <li>Clap Talk Sessions </li>
              </ul>
            </div>
            <div class="col-md-4">
              <h2>Co-Curricular</h2>
              <img src="img/co-curricular.png" alt="">
              <ul class="mt-3">
                <li>Dance sessions by Shiamak Davar Institute of performing Arts</li>
                <li>Performing Arts Sessions by Helen O Grady</li>
                <li>Music Sessions by Furtados School of Music</li>
                <li>Football at Astro Turf</li>
              </ul>
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

</body>

</html>