<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact</title>
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
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/contact-banner.png" class="d-block w-100" alt="Banner1" />
                </div>

                <div class="carousel-item">
                  <img src="./img/contact-banner.png" class="d-block w-100" alt="Banner2" />
                </div>

                <div class="carousel-item">
                  <img src="./img/contact-banner.png" class="d-block w-100" alt="Banner3" />
                </div>
              </div>

              <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon">
                  <i class="fa fa-angle-left"></i>
                </span>
              </a>
              <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                <span class="carousel-control-next-icon">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
        <h2>Contact Info</h2>
        <div class="row">
          <div class="col-md-3">
            <div class="call_section d-flex align-items-center">
              <i class="fa fa-phone"></i>
              <div class="para">
                <p><a class="text-black" href="tel:+91 8886759888">+91 8886759888</a></p>
                <p><a class="text-black" href="tel:+91 8886185888">+91 8886185888</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="address d-flex align-items-center">
              <i class="fa fa-map"></i>
              <p>Baba institute of technology and science,visakhapatnam
                U/m - of ambedkar educational and welfare society,
                Bakkanapalem(V), Pothinamallayapalem,
                Visakhapatnam - 530048, India.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="mail d-flex align-items-center">
              <i class="fa fa-envelope"></i>
              <div class="para">
                <p><a class="text-black" href="mailto:admissions.vizag@birlaopenminds.com">
                    admissions.vizag@birlaopenminds.com</a></p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="map">
      <div class="container">
        <div class="col-md-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15194.293670559104!2d83.3318685!3d17.8117346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdeb7ac6bcdf0557!2sBaba+Institute+Of+Technology+And+Sciences!5e0!3m2!1sen!2sin!4v1543384347868"
            width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>
    </section>
    <section id="contact-form" class="contact-form section-padding">
      <div class="row">
        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
          <div class="form_img">
            <img src="./img/contact-form.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="main-form">
            <div class="card">
              <div class="card-body">
                <form autocomplete="off" action="" method="post" class="form d-block" role="form">
                  <h3 class="mb-0">Admission Enquiry</h3>
                  <h6>All fields are mandatory</h6>
                  <div class="form-group">
                    <div class="inputBox">
                      <input type="text" name="first_name" required="required" oninvalid="InvalidMsg(this);"
                        oninput="InvalidMsg(this);" placeholder="First Name*">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="inputBox">
                      <input type="text" name="last_name" required="required" oninvalid="InvalidMsg(this);"
                        oninput="InvalidMsg(this);" placeholder="Last Name*">
                    </div>
                    <!-- oninput="InvalidMsg(this);"   -->
                  </div>
                  <div class="form-group">
                    <div class="inputBox">
                      <input type="text" name="mobile" required="required" oninvalid="InvalidMsg(this);"
                        oninput="InvalidMsg(this);" placeholder="Mobile">

                    </div>
                  </div>

                  <div class="form-group">
                    <div class="inputBox">
                      <input type="text" name="email" required="required" oninvalid="InvalidMsg(this);"
                        oninput="InvalidMsg(this);" placeholder="Email">

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="inputBox">
                      <input type="text" name="state" required="required" oninvalid="InvalidMsg(this);"
                        oninput="InvalidMsg(this);" placeholder="State">

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="inputBox">
                      <input type="text" name="city" required="required" oninvalid="InvalidMsg(this);"
                        oninput="InvalidMsg(this); " placeholder="City">

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="inputBox">
                      <input type="text" name="zip_code" required="required" oninvalid="InvalidMsg(this);"
                        oninput="InvalidMsg(this);" placeholder="Zip Code">

                    </div>
                  </div>

                  <div class="form-group">
                    <select class="form-control inputBox" name="school_type" id="inputEmail3" required="">
                      <option>Vishakapatanam</option>
                    </select>
                  </div>

                  <div class="form-group mt-4 align-right">
                    <button name="submit" class="primary btn btn-lg" type="submit">
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- form -->
    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/SMTP.php';

    if (isset($_POST['submit'])) {
      $first_name = $_POST["first_name"];
      $last_name = $_POST["last_name"];
      $mobile = $_POST["mobile"];
      $email = $_POST["email"];
      $state = $_POST["state"];
      $city = $_POST["city"];
      $zip_code = $_POST["zip_code"];
      $school_type = $_POST["school_type"];

      $mail = new PHPMailer(true);
      $subject = "Admission Enquiry"; //getting subject line from client
      //Message for client confirmation
      $message2 = "Contact Form Submission \n"
        . "First Name :" . $first_name . "\n"
        . "Last Name :" . $last_name . "\n"
        . "Mobile :" . $mobile . "\n"
        . "Email :" . $email . "\n"
        . "State :" . $state . "\n"
        . "City :" . $city . "\n"
        . "Zip Code :" . $zip_code . "\n"
        . "School Type :" . $school_type . "\n";

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'contact@birlaopenminds.com';
      $mail->Password = 'Contact@20';
      $mail->SMTPSecure = 'Tls';
      $mail->Port = '587';
      $mail->setFrom('franchise@birlaopenminds.com');

      $mail->addAddress('admissions.vizag@birlaopenminds.com');
      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = $message2;
      $mail->send();

      if (mail($to, $subject, $message, $headers)) {
        echo '<p style="color: green;">Form submitted successfully! We will get back to you soon.</p>';
      } else {
        echo '<p style="color: red;">Error sending the form. Please try again later.</p>';
      }
    }
    ?>

    <!-- form -->
    <?php include('includes/gallery.php'); ?>
    <?php include('includes/footer.php'); ?>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <?php include('includes/footerlinks.php'); ?>
  </main>
  <script>
    function InvalidMsg(textbox) {
      if (textbox.value === "") {
        textbox.setCustomValidity("Enter a valid field*");
      } else {
        textbox.setCustomValidity("");
      }

      return true;
    }
  </script>
</body>

</html>