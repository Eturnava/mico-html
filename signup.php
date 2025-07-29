<?php
session_start();
$pageTitle = "Sign Up";
include 'includes/header.php';
include 'includes/nav.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username'] ?? '');
  $password = trim($_POST['password'] ?? '');

  if ($username && $password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $entry = "$username|$hashedPassword\n";
    file_put_contents('users/users.txt', $entry, FILE_APPEND | LOCK_EX);

    $_SESSION['username'] = $username;

    header('Location: index.php');
    exit;
  } else {
    $error = "Please fill in both fields.";
  }
}
?>

<section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Sign Up</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <form method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input
              type="text"
              name="username"
              id="username"
              class="form-control"
              placeholder="Enter your username"
              required
            />
          </div>

          <div class="form-group mt-3">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              placeholder="Enter your password"
              required
            />
          </div>

          <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>

          <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-3"><?= htmlspecialchars($error) ?></div>
          <?php endif; ?>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>