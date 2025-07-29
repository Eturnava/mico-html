<?php
$pageTitle = "Appointment Confirmation";
include 'includes/header.php';
include 'includes/nav.php';
?>
<div class="container" style="margin-top:40px;">
  <h2>Appointment Confirmation</h2>
  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <p>Your appointment has been received and confirmed.</p>
    <ul>
      <li><strong>Patient Name:</strong> <?= htmlspecialchars($_POST['patient_name'] ?? '') ?></li>
      <li><strong>Doctor's Name:</strong> <?= htmlspecialchars($_POST['doctor_name'] ?? '') ?></li>
      <li><strong>Department:</strong> <?= htmlspecialchars($_POST['Department'] ?? '') ?></li>
      <li><strong>Phone:</strong> <?= htmlspecialchars($_POST['phone'] ?? '') ?></li>
      <li><strong>Symptoms:</strong> <?= htmlspecialchars($_POST['symptoms'] ?? '') ?></li>
      <li><strong>Date:</strong> <?= htmlspecialchars($_POST['date'] ?? '') ?></li>
    </ul>
    <?php
      $appointmentData = [
        'patient_name' => htmlspecialchars($_POST['patient_name'] ?? ''),
        'doctor_name' => htmlspecialchars($_POST['doctor_name'] ?? ''),
        'department' => htmlspecialchars($_POST['Department'] ?? ''),
        'phone' => htmlspecialchars($_POST['phone'] ?? ''),
        'symptoms' => htmlspecialchars($_POST['symptoms'] ?? ''),
        'date' => htmlspecialchars($_POST['date'] ?? '')
      ];
     $logEntry = "Patient Name: {$appointmentData['patient_name']}\n" .
            "Doctor's Name: {$appointmentData['doctor_name']}\n" .
            "Department: {$appointmentData['department']}\n" .
            "Phone: {$appointmentData['phone']}\n" .
            "Symptoms: {$appointmentData['symptoms']}\n" .
            "Date: {$appointmentData['date']}\n" .
            "-----------------------------\n";
      file_put_contents('users/appointments.txt', $logEntry, FILE_APPEND | LOCK_EX);
      ?>
  <?php else: ?>
    <p>No appointment data submitted.</p>
  <?php endif; ?>
</div>
<?php include 'includes/footer.php'; ?>
