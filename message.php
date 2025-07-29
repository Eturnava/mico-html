<?php
$pageTitle = "Message Submitted";
include 'includes/header.php';
include 'includes/nav.php';
?>

<div class="container" style="margin-top:40px;">
  <h2>Message Submitted</h2>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <?php
      $name = htmlspecialchars(trim($_POST['name'] ?? ''));
      $email = htmlspecialchars(trim($_POST['email'] ?? ''));
      $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
      $message = htmlspecialchars(trim($_POST['message'] ?? ''));

      $logEntry = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n---\n";
      file_put_contents('users/contacts.txt', $logEntry, FILE_APPEND | LOCK_EX);
    ?>

    <p>Your message was submitted successfully.</p>
    <ul>
      <li><strong>Name:</strong> <?= $name ?></li>
      <li><strong>Email:</strong> <?= $email ?></li>
      <li><strong>Phone:</strong> <?= $phone ?></li>
      <li><strong>Message:</strong> <?= nl2br($message) ?></li>
    </ul>

  <?php else: ?>
    <p>No message data submitted.</p>
  <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>

