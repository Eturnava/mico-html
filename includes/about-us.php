<section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="<?= htmlspecialchars($aboutHospital['img']) ?>" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2><?= $aboutHospital['title'] ?></h2>
          </div>
          <p><?= $aboutHospital['description'] ?></p>
          <a href="<?= $aboutHospital['link'] ?>">
            <?= $aboutHospital['link_text'] ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>