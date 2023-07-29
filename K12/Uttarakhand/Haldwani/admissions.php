<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admission</title>
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
                                            <input type="text" name="first_name" required="required"
                                                oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"
                                                placeholder="First Name*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="inputBox">
                                            <input type="text" name="last_name" required="required"
                                                oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"
                                                placeholder="Last Name*">
                                        </div>
                                        <!-- oninput="InvalidMsg(this);"   -->
                                    </div>
                                    <div class="form-group">
                                        <div class="inputBox">
                                            <input type="text" name="mobile" required="required"
                                                oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"
                                                placeholder="Mobile">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="inputBox">
                                            <input type="text" name="email" required="required"
                                                oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"
                                                placeholder="Email">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="inputBox">
                                            <input type="text" name="state" required="required"
                                                oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"
                                                placeholder="State">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="inputBox">
                                            <input type="text" name="city" required="required"
                                                oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this); "
                                                placeholder="City">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="inputBox">
                                            <input type="text" name="zip_code" required="required"
                                                oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"
                                                placeholder="Zip Code">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control inputBox" name="school_type" id="inputEmail3"
                                            required="">
                                            <option>Haldwani</option>
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

            $mail->addAddress('admissions.haldwani@birlaopenminds.com');
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