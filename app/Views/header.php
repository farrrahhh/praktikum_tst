<html>
    <body>
    <?php if (session()->get('isLoggedIn')): ?>
        <h1>Welcome, <?= esc(session()->get('username')) ?></h1>
        <p>Data Users:</p>
    <?php else: ?>
        <p>You are not logged in.</p>
        <a href="/login">Login</a>
    <?php endif; ?>