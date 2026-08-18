<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Profile &mdash; <?= htmlspecialchars($name) ?></title>
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
    }
    .navbar a:hover { text-decoration: underline; }
    .card {
        max-width: 560px;
        margin: 50px auto;
        background: #ffffff;
        border: 1px solid #e8d9d9;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 14px rgba(109, 15, 26, 0.08);
    }
    .card-header {
        background: #6d0f1a;
        color: #ffffff;
        padding: 28px;
        text-align: center;
    }
    .card-header h1 { margin: 0 0 4px; font-size: 1.4rem; }
    .card-header span { opacity: 0.85; font-size: 0.85rem; }
    .card-body { padding: 28px; }
    .row {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        padding: 10px 0;
        border-bottom: 1px solid #f1e4e4;
    }
    .row:last-child { border-bottom: none; }
    .label { color: #8a1522; font-weight: 600; white-space: nowrap; }
    .value { text-align: right; }
    .about {
        margin-top: 20px;
        padding: 16px;
        background: #fbeaea;
        border-radius: 6px;
        font-style: italic;
        font-size: 0.95rem;
        line-height: 1.5;
    }
    footer {
        text-align: center;
        font-size: 0.8rem;
        color: #a37c7c;
        margin-top: 30px;
    }
</style>
</head>
<body>

    <div class="navbar">
        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h1>Student Information</h1>
            <span>Protected by StudentMiddleware</span>
        </div>
        <div class="card-body">
            <div class="row"><span class="label">Student ID</span><span class="value"><?= htmlspecialchars($student_id) ?></span></div>
            <div class="row"><span class="label">Name</span><span class="value"><?= htmlspecialchars($name) ?></span></div>
            <div class="row"><span class="label">Course</span><span class="value"><?= htmlspecialchars($course) ?></span></div>
            <div class="row"><span class="label">Year Level</span><span class="value"><?= htmlspecialchars($year) ?></span></div>
            <div class="row"><span class="label">Section</span><span class="value"><?= htmlspecialchars($section) ?></span></div>
            <div class="row"><span class="label">Email</span><span class="value"><?= htmlspecialchars($email) ?></span></div>
            <div class="row"><span class="label">Address</span><span class="value"><?= htmlspecialchars($address) ?></span></div>
            <div class="row"><span class="label">Contact No.</span><span class="value"><?= htmlspecialchars($contact) ?></span></div>
            <div class="row"><span class="label">Hobbies</span><span class="value"><?= htmlspecialchars($hobbies) ?></span></div>

            <div class="about"><?= htmlspecialchars($about) ?></div>
        </div>
    </div>

    <footer>LavaLust Laboratory Activity No. 3 &mdash; Christina Ramos</footer>

</body>
</html>