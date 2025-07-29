
 <body class="sub_page">
 <!-- team section -->

 <section class="team_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Our <span>Doctors</span></h2>
    </div>
    <div class="carousel-wrap">
      <div class="owl-carousel team_carousel">
        <?php foreach ($ourDoctors as $doctor): ?>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="<?= htmlspecialchars($doctor['img']) ?>" alt="" />
              </div>
              <div class="detail-box">
                <h5><?= htmlspecialchars($doctor['name']) ?></h5>
                <h6><?= htmlspecialchars($doctor['specialty']) ?></h6>
                <div class="social_box">
                  <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="https://x.com/?lang=en" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
  <!-- end team section -->


 


  <!-- footer section -->
  <footer class="footer_section" style="background-color: #ffffff;">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span>
        <a href="https://html.design/"></a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>
