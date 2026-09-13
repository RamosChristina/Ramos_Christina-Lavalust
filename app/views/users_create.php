<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f2f2f2; display: flex; justify-content: center; padding: 60px 20px; }
        .card { background: #fff; padding: 32px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); width: 100%; max-width: 420px; }
        h1 { font-size: 22px; margin-bottom: 24px; }
        label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; margin-top: 16px; }
        input { width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px; }
        .btn-submit { margin-top: 24px; background: #111; color: #fff; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; font-weight: 600; }
        .btn-cancel { margin-left: 10px; color: #555; text-decoration: none; font-size: 14px; }
        .error { background: #fdecea; color: #b3261e; padding: 10px 14px; border-radius: 6px; font-size: 13px; margin-bottom: 12px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Add New User</h1>

        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form action="/users/store" method="POST">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required minlength="6">

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" required minlength="6">

            <button type="submit" class="btn-submit">Save User</button>
            <a href="/users" class="btn-cancel">Cancel</a>
        </form>
    </div>
</body>
</html>