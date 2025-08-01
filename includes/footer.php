<?php include 'includes/footer-data.php'; ?>

<!-- info section -->
<section class="info_section ">
  <div class="container">
    <div class="info_top">
      <div class="info_logo">
        <a href="#">
          <img src="images/logo.png" alt="">
        </a>
      </div>
      <div class="info_form">
        <form action="">
          <input type="email" placeholder="Your email">
          <button>Subscribe</button>
        </form>
      </div>
    </div>

    <div class="info_bottom layout_padding2">
      <div class="row info_main_row">
        <!-- Address -->
        <div class="col-md-6 col-lg-3">
          <h5>Address</h5>
          <div class="info_contact">
            <a href="tel:+01123455678990">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>Call : +01 123455678990</span>
          </a>

          <a href="https://mail.google.com/mail/?view=cm&to=demo@gmail.com" target="_blank">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>Email : demo@gmail.com</span>
          </a>

          <a href="https://www.google.com/maps/search/?api=1&query=mico+hospital" target="_blank">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>Location</span>
          </a>
          </div>
          <div class="social_box">
            <a href="<?= $socialLinks['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="<?= $socialLinks['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="<?= $socialLinks['linkedin'] ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="<?= $socialLinks['instagram'] ?>" target="_blank"><i class="fa fa-instagram"></i></a>
          </div>
        </div>

        <!-- Useful Links -->
        <div class="col-md-6 col-lg-3">
          <div class="info_links">
            <h5>Useful links</h5>
            <div class="info_links_menu">
              <?php foreach ($usefulLinks as $label => $url): ?>
                <a href="<?= $url ?>"><?= $label ?></a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Latest Posts -->
        <div class="col-md-6 col-lg-3">
          <div class="info_post">
            <h5>LATEST POSTS</h5>
            <?php foreach ($latestPosts as $post): ?>
              <div class="post_box">
                <div class="img-box">
                  <img src="<?= $post['img'] ?>" alt="">
                </div>
                <p><?= $post['text'] ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- News -->
        <div class="col-md-6 col-lg-3">
          <div class="info_post">
            <h5>News</h5>
            <?php foreach ($newsPosts as $news): ?>
              <div class="post_box">
                <div class="img-box">
                  <img src="<?= $news['img'] ?>" alt="">
                </div>
                <p><?= $news['text'] ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


