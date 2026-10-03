<?php
session_start();

if (empty($_SESSION['email'])) {
    header('Location: index.php');
    exit;
}

$email = htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <header class="topbar">
        <div class="brand">My Dashboard</div>
        <a class="logout" href="logout.php">Log out</a>
    </header>

    <main>
        <section class="welcome">
            <p>You're signed in</p>
            <h1>Welcome to your dashboard</h1>
            <p class="email"><?php echo $email; ?></p>
        </section>

        <h2 class="section-title">Account overview</h2>
        <section class="account-card" aria-label="Account details">
            <h3>Account email</h3>
            <p><?php echo $email; ?></p>
        </section>
    </main>
</body>
</html>
