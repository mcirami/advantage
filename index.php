<?php

    include 'header.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'lib/phpmailer/src/Exception.php';
    require 'lib/phpmailer/src/PHPMailer.php';
    require 'lib/phpmailer/src/SMTP.php';


    date_default_timezone_set('America/Los_Angeles');

    $firstNameErr = $lastNameErr = $emailErr = $titleErr = $practiceNameErr = $zipErr = $phoneErr = "";
    $firstName = $lastName = $email = $title = $practiceName = $zipCode = $phone = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $post = true;
        $emailTemplate = $_GET['email'];

        if (empty($_POST["firstName"])) {
            $firstNameErr = "first name is required";
            $post = false;
        } else {
            $firstName = test_input($_POST["firstName"]);

            if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
                $firstNameErr = "Only letters and white space allowed";
                $post = false;
            }
        }

        if (empty($_POST["lastName"])) {
            $lastNameErr = "last name is required";
            $post = false;
        } else {
            $lastName = test_input($_POST["lastName"]);

            if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
                $lastNameErr = "Only letters and white space allowed";
                $post = false;
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "email is required";
            $post = false;
        } else {
            $email = test_input($_POST["email"]);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $post = false;
            }
        }

        if (empty($_POST["title"])) {
            $titleErr = "title is required";
            $post = false;
        } else {
            $title = test_input($_POST["title"]);

            if (!preg_match("/^[a-zA-Z ]*$/",$title)) {
                $titleErr = "Only letters and white space allowed";
                $post = false;
            }
        }

        if (empty($_POST["practiceName"])) {
            $practiceNameErr = "practice is required";
            $post = false;
        } else {
            $practiceName = test_input($_POST["practiceName"]);

            if (!preg_match("/^[a-zA-Z ]*$/",$practiceName)) {
                $practiceNameErr = "Only letters and white space allowed";
                $post = false;
            }
        }

        if (empty($_POST["zipCode"])) {
            $zipErr = "zip code is required";
            $post = false;
        } else {
            $zipCode = test_input($_POST["zipCode"]);
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "phone is required";
            $post = false;
        } else {
            $phone = test_input($_POST["phone"]);
        }

        if ($post != false) {
            $mysqli = new mysqli($servername, $username, $password, $dbname);

            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            $ip = $_SERVER['SERVER_ADDR'];

            //insert data
            $sql = "INSERT INTO user (first_name, last_name, email, title, practice_name, zip_code, phone, ip_address, submitted_at, email_template) VALUES (
                          '{$mysqli->real_escape_string($firstName)}',
                           '{$mysqli->real_escape_string($lastName)}',
                           '{$mysqli->real_escape_string($email)}',
                           '{$mysqli->real_escape_string($title)}',
                           '{$mysqli->real_escape_string($practiceName)}',
                           '{$mysqli->real_escape_string($zipCode)}',
                           '{$mysqli->real_escape_string($phone)}',
                           '{$mysqli->real_escape_string($ip)}',
                            NOW(),
                            '{$mysqli->real_escape_string($emailTemplate)}'
                           )";

            $insert = $mysqli->query($sql);

            // print response
            if ($insert) {
                //echo "Success! Row ID: {$mysqli->insert_id}";
                $_POST['submit'] = "success";

                $mail = new PHPMailer(true);

                try {
                    $firstName = $_POST["firstName"]; // HINT: use preg_replace() to filter the data
                    $lastName = $_POST["lastName"];
                    $email = $_POST["email"];
                    $title = $_POST["title"];
                    $practiceName = $_POST["practiceName"];
                    $zipCode = $_POST["zipCode"];
                    $phone = $_POST["phone"];

                    //$mail->SMTPDebug = 2;
                    $mail->IsSMTP(); // set mailer to use SMTP
                    $mail->Host = "smtp.gmail.com";  // specify main and backup server
                    $mail->SMTPAuth = true;     // turn on SMTP authentication
                    $mail->Username = "matteo@moneylovers.com";  // SMTP username
                    $mail->Password = "RedBirds57"; // SMTP password
                    $mail->SMTPSecure = "tls";
                    $mail->Port = 587;
                    $mail->setFrom($email);
                    //$mail->FromName = "Advantage Plus MD Form";
                    $mail->AddAddress("gary_welltrackone@outlook.com");
                    $mail->AddAddress("jeff@moneylovers.com");
                    //$mail->AddAddress("ellen@example.com");                  // name is optional
                    $mail->AddReplyTo($email, $firstName);

                    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
                    //$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
                    //$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
                    $mail->IsHTML(true);                                  // set email format to HTML

                    $mail->Subject = "Advantage Plus MD Lead Submitted";

                    $message = "First Name: " . $firstName .
                        "<br> Last name: " . $lastName .
                        "<br>Email: " . $email .
                        "<br>Title: " . $title .
                        "<br>Practice Name: " . $practiceName .
                        "<br>Zip Code: " . $zipCode .
                        "<br>Phone Number: " . $phone;

                    $mail->Body = $message;
                    $mail->AltBody = $message;

                    /*if (!$mail->Send()) {
                        echo "Message could not be sent. <p>";
                        //echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        echo "success";
                    }*/

                    $mail->send();
                    //echo 'Message has been sent';

                } catch (Exception $e) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                }



            } else {
                die("Error: {$mysqli->errno} : {$mysqli->error}");
            }

            // close
            $mysqli->close();
        }
    }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


        <div class="header row no-gutters">
            <div class="top_header col-12">
                <div class="my_container">
                    <h3 class="text-uppercase text-center">Turn waiting room time into an increase in your bottom line!</h3>
                </div>
            </div><!-- top_header -->
            <div class="bottom_header col-12">
                <div class="my_container">
                    <div class="logo float-left header-left">
                        <img src="images/logo.png" alt="Advantage Plus MD">
                    </div>
                    <div class="float-right header_right d-flex">
                        <div class="float-none float-md-left d-inline-block d-md-block">
                            <img src="images/dollar-sign.png" alt="Advantage Plus MD">
                        </div>
                        <div class="align-middle d-inline-block d-md-inline-flex">
                            <h5>Reimbursements range between <span>$170-$220</span></h5>
                        </div>
                    </div>
                </div>
            </div><!-- bottom_header -->
        </div><!-- header -->

        <div class="hero_section row no-gutters" id="form">
            <div class="hero_top col-12">
                <div class="my_container">
                    <div class="form_wrap">

                        <div class="form_heading text-center">
                            <h3 class="text-uppercase">Contact Us</h3>
                            <p>Submit below for info!</p>
                        </div>

                        <?php /*if (!empty ($errors)) : */?><!--
                                <div class="errors">
                                    <p class="text-danger"><?php /*echo implode('</p><p class="text-danger">', $errors); */?></p>
                                </div>
                        --><?php /*endif; */?>

                        <?php if (!isset($_POST['submit'])) : ?>

                            <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <input name="firstName" type="text" class="form-control" id="firstName" aria-describedby="firstName" placeholder="First Name"
                                        value="<?php if (isset($_POST['firstName'])) { echo $_POST['firstName']; } ?>">

                                        <div class="errors">
                                            <p class="text-danger"><?php echo $firstNameErr; ?></p>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name"
                                               value="<?php if (isset($_POST['lastName'])) { echo $_POST['lastName'];} ?>" >

                                        <div class="errors">
                                            <p class="text-danger"><?php echo $lastNameErr; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <input name="title" type="text" class="form-control" id="title" placeholder="Title"
                                               value="<?php if (isset($_POST['title'])) { echo $_POST['title'];} ?>">

                                        <div class="errors">
                                            <p class="text-danger"><?php echo $titleErr; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <input name="practiceName" type="text" class="form-control" id="practiceName" placeholder="Practice Name"
                                               value="<?php if (isset($_POST['practiceName'])) { echo $_POST['practiceName'];} ?>">

                                        <div class="errors">
                                            <p class="text-danger"><?php echo $practiceNameErr; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <input name="zipCode" type="number" class="form-control" id="zipCode" placeholder="Zip Code"
                                               value="<?php if (isset($_POST['zipCode'])) { echo $_POST['zipCode'];} ?>">

                                        <div class="errors">
                                            <p class="text-danger"><?php echo $zipErr; ?></p>
                                        </div>

                                    </div>
                                    <div class="form-group col-6">
                                        <input name="phone" type="tel" class="form-control" id="phoneNumber" placeholder="Phone"
                                               value="<?php if (isset($_POST['phone'])) { echo $_POST['phone'];} ?>">

                                        <div class="errors">
                                            <p class="text-danger"><?php echo $phoneErr; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <input name="email" class="form-control" id="email" placeholder="Email Address"
                                               value="<?php if (isset($_POST['email'])) { echo $_POST['email'];} ?>">

                                        <div class="errors">
                                            <p class="text-danger"><?php echo $emailErr; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn text-uppercase">Continue</button>
                            </form>

                        <?php else : ?>

                            <div class="text-center success_message">
                                <h2 class="text-uppercase">Thanks for Your Inquiry!</h2>
                                <p>We will be contacting you soon with all the details and get you setup with a demo!</p>
                            </div>

                        <?php endif; ?>

                    </div><!-- form_wrap -->
                </div>
            </div>
            <div class="hero_bottom col-12">
                <div class="my_container">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-10">
                            <h3 class="text-uppercase">Annual Wellness Visits Done While Waiting</h3>
                            <ul class="list-inline">
                                <li class="text-capitalize list-inline-item"><p>Request your free demo</p></li>
                                <li class="text-capitalize list-inline-item"><p>Save Visit Time!</p></li>
                                <li class="text-capitalize list-inline-item"><p>Earn more money!</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- bottom -->
        </div><!-- hero_section -->

        <div class="bottom_section">
            <div class="my_container">
                <h4><span class="text-uppercase">Attention:</span> Private Practice Medical Doctors</h4>
                <p>Learn how you can enhance the care you are providing your Medicare patients while improving revenue by allowing them to do their annual wellness visits on their own while they are sitting in your waiting room!</p>
                <p>With this simple system, simply hand them an iPad with our proprietry software and let them do the work for you.</p>
                <p>NO UP FRONT FEES, SETUP FEES, MINIMUM FEES, or MAINTENANCE FEES</p>
                <h5>Benefits to your patients:</h5>
                <ul class="list-unstyled">
                    <li><p>Properly document and bill for Medicare Annual Wellness Visit</p></li>
                    <li><p>Help to find hidden health risks</p></li>
                    <li><p>Generate new revenue for your practice</p></li>
                    <li><p>No cost to the patient themself</p></li>
                    <li><p>Save time and guarantee income for any medicare patient</p></li>
                    <li><p>Recommend additional billable events for your patients</p></li>
                </ul>
                <div class="button_wrap">
                    <a class="btn text-uppercase" href="#form">Get more info Now</a>
                </div>
            </div><!-- container -->
        </div><!-- bottom_section -->

        <div class="footer row">
            <div class="col-12 text-center">
                <p>Copyright Advantage Plus MD | All rights reserved</p>
            </div>
        </div>

    </body>

</html>