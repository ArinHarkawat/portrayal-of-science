<?php
if (isset($_POST['submit'])) {
  $fname = $_POST['c_fname'];
  $lname = $_POST['c_lname'];
  $visitor_email = $_POST['c_email'];
  $message = $_POST['c_message'];
$email_subject = $_POST['c_subject']


	$email_body = "You have received a new message from the user $fname $lname.\n".
                            "Here is the message:\n $message".
            
  $to = "portrayalofsciencepodcast@gmail.com";

  $headers = "From: $to_from \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  echo "email sent.";
}
?>

<!DOCTYPE html>


<html lang="en">
  
  <head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 absolute transparent" role="banner">

      <div class="container">
        <div class="row align-items-center">
          

          <div class="col-3" data-aos="fade-down">
            <h1><a href="index.html" class="text-white h2">Portrayal of Science</a></h1>
          </div>
          <div class="col-9" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-md-right" role="navigation">

                

                <div class="d-inline-block ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none">
                  <li class="has-children">
                    <a href="index.html">Home</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Menu One</a></li>
                      <li><a href="#">Menu Two</a></li>
                      <li><a href="#">Menu Three</a></li>
                      <li class="has-children">
                        <a href="#">Sub Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                
                  <li><a href="about.html">About</a></li>
                  <li class="active"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>


          </div>

        </div>
      </div>
      
    </header>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/wallpaper2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-white font-weight-light mb-2 display-4">Contact</h2>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-6 mb-5">
            <form action="" method="post" class="bg-white">
              
              <div class="p-5 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 pl-md-5">
            <div class="p-4 border mb-3 bg-white">
           

              <p class="mb-0">Phone</p>
              <p class="mb-4"><a href="#">908-405-9674</a></p>

              <p class="mb-0">Email Address</p>
              <p class="mb-4"><a href="#">portrayalofsciencepodcast@gmail.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </div>

    
  
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Portryal of Science</h3>
              <p>The Portrayal of Science Podcast is aimed at dissecting the most popular shows and movies through a scientific lens in order to distinguish whether certain scenes in mainstream media are credible in the real world; in other words, we put the craziest scenes to the test in order to determine whether they have what it takes to fly in the world. Led by Arin Harkawat, along with Co-hosts, Sujit Tirunahari, and Daniel Li join us every Friday for a new episode as we combine our knowledge in Science with your favorite modern-media channels.</p>
            </div>


            
          </div>
         

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>

          </div>

         
        
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p><a href="https://colorlib.com/">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </a>
            </p>
            <p>
             Designed by <a href="https://ryanrana.github.io/index.html">Ryan Rana</a>
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/mediaelement-and-player.min.js"></script>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


  <script src="js/main.js"></script>
    
  </body>
</html>