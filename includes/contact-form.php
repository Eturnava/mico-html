 <!-- contact section -->
 <section class="contact_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container">
      <h2><?= htmlspecialchars($contactForm['heading']) ?></h2>
    </div>
    <div class="row">
      <div class="col-md-7">
        <div class="form_container">
          <form action="message.php" method="post">
            <div>
              <input type="text" name="name" placeholder="<?= htmlspecialchars($contactForm['fields']['name']) ?>" required />
            </div>
            <div>
              <input type="email" name="email" placeholder="<?= htmlspecialchars($contactForm['fields']['email']) ?>" required />
            </div>
            <div>
              <input type="text" name="phone" placeholder="<?= htmlspecialchars($contactForm['fields']['phone']) ?>" required />
            </div>
            <div>
              <input type="text" name="message" class="message-box" placeholder="<?= htmlspecialchars($contactForm['fields']['message']) ?>" />
            </div>
            <div class="btn_box">
              <button><?= htmlspecialchars($contactForm['button_text']) ?></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="img-box">
          <img src="<?= htmlspecialchars($contactForm['image']) ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>