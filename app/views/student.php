<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title ?? 'Student Home') ?></title>
<style>
    * { box-sizing: border-box; }
    body {
        margin: 0;
        font-family: 'Segoe UI', Arial, sans-serif;
        background: #fdfaf9;
        color: #3a1212;
    }
    .navbar {
        background: #6d0f1a;
        padding: 16px 32px;
    }
    .navbar a {
        color: #fdfaf9;
        text-decoration: none;
        margin-right: 24px;
        font-weight: 600;
        letter-spacing: .3px;
    }
    .navbar a:hover { text-decoration: underline; }
    .hero {
        max-width: 640px;
        margin: 60px auto;
        background: #ffffff;
        border: 1px solid #e8d9d9;
        border-radius: 10px;
        padding: 40px;
        text-align: center;
        box-shadow: 0 4px 14px rgba(109, 15, 26, 0.08);
    }
    .hero h1 { color: #6d0f1a; margin-top: 0; }
    .hero p { line-height: 1.6; }
    .notice {
        background: #fbeaea;
        border-left: 4px solid #6d0f1a;
        padding: 10px 16px;
        margin-bottom: 20px;
        font-size: 0.9rem;
        text-align: left;
        border-radius: 4px;
    }
    .btn {
        display: inline-block;
        margin-top: 16px;
        padding: 10px 24px;
        background: #6d0f1a;
        color: #ffffff;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
    }
    .btn:hover { background: #8a1522; }
    footer {
        text-align: center;
        font-size: 0.8rem;
        color: #a37c7c;
        margin-top: 40px;
    }
</style>
</head>
<body>

    <div class="navbar">
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </div>

    <div class="hero">
        <?php if (!empty($message)): ?>
            <div class="notice"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>

        <h1><?= htmlspecialchars($page_title ?? 'Student Home') ?></h1>
        <p>Welcome to my Student Portal, built using the LavaLust PHP framework.</p>
        <p>Visiting this page unlocks access to the protected profile page below.</p>

        <a class="btn" href="<?= site_url('student/profile') ?>">View My Profile</a>
    </div>

    <footer>LavaLust Laboratory Activity No. 3 &mdash; Christina Ramos</footer>

</body>
</html>