<?php include 'includes/data.php'; ?>

<section class="treatment_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Hospital <span>Treatment</span></h2>
    </div>
    <div class="row">
      <?php foreach ($hospitalTreatments as $treatment): ?>
      <div class="col-md-6 col-lg-3">
        <div class="box ">
          <div class="img-box">
            <img src="<?= htmlspecialchars($treatment['img']) ?>" alt="">
          </div>
          <div class="detail-box">
            <h4><?= htmlspecialchars($treatment['title']) ?></h4>
            <h7><?= htmlspecialchars($treatment['desc']) ?></h7> <br>
            <a href="treatment.php">Read More</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>