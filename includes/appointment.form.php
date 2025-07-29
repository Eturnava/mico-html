<section class="book_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col">
        <form method="post" action="appointment.php">
          <h4>BOOK <span>APPOINTMENT</span></h4>
          <div class="form-row ">
            <div class="form-group col-lg-4">
              <label for="inputPatientName">Patient Name </label>
              <input type="text" class="form-control" id="inputPatientName" name="patient_name" required>
            </div>
            <div class="form-group col-lg-4">
        <label for="inputDoctorName">Doctor's Name</label>
        <select name="doctor_name" class="form-control wide" id="inputDoctorName" required>
          <option value="" disabled selected>-- Select Doctor --</option>
          <?php foreach ($ourDoctors as $doc): ?>
            <option value="<?= htmlspecialchars($doc['name']) ?>">
              <?= htmlspecialchars($doc['name']) ?> (<?= htmlspecialchars($doc['specialty']) ?>)
            </option>
          <?php endforeach; ?>
        </select>
      </div>
            <div class="form-group col-lg-4">
              <label for="inputDepartmentName">Department's Name</label>
              <select name="Department" class="form-control wide" id="inputDepartmentName">
                   <option value="" disabled selected>-- Select Department --</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Orthopedics">Orthopedics</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Gynecology">Gynecology</option>
                    <option value="ENT (Ear, Nose, Throat)">ENT (Ear, Nose, Throat)</option>
                    <option value="Radiology">Radiology</option>
                    <option value="Oncology">Oncology</option>
                </select>
            </div>
          </div>
          <div class="form-row ">
            <div class="form-group col-lg-4">
              <label for="inputPhone">Phone Number</label>
              <input type="text" class="form-control" id="inputPhone" name="phone" required>
            </div>
            <div class="form-group col-lg-4">
              <label for="inputSymptoms">Symptoms</label>
              <input type="text" class="form-control" id="inputSymptoms" name="symptoms">
            </div>
            <div class="form-group col-lg-4">
              <label for="inputDate">Choose Date </label>
              <input type="text" class="form-control" id="inputDate" name="date" required>
            </div>
          </div>
          <div class="btn-box">
            <button type="submit" class="btn ">Submit Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
