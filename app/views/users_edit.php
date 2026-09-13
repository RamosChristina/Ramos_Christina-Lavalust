<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f2f2f2; display: flex; justify-content: center; padding: 60px 20px; }
        .card { background: #fff; padding: 32px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); width: 100%; max-width: 420px; }
        h1 { font-size: 22px; margin-bottom: 24px; }
        label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; margin-top: 16px; }
        input { width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px; }
        .hint { font-size: 12px; color: #888; margin-top: 4px; }
        .btn-submit { margin-top: 24px; background: #111; color: #fff; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; font-weight: 600; }
        .btn-cancel { margin-left: 10px; color: #555; text-decoration: none; font-size: 14px; }
        .error { background: #fdecea; color: #b3261e; padding: 10px 14px; border-radius: 6px; font-size: 13px; margin-bottom: 12px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Edit User</h1>

        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form action="/users/update/<?= $user['id'] ?>" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="<?= $user['username'] ?>" required>

            <label>Password</label>
            <input type="password" name="password" minlength="6">

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" minlength="6">
            <div class="hint">Leave both blank to keep the current password</div>

            <button type="submit" class="btn-submit">Update User</button>
            <a href="/users" class="btn-cancel">Cancel</a>
        </form>
    </div>
</body>
</html>