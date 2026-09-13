<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
    body { font-family: 'Segoe UI', Arial, sans-serif; background: #faf6f7; display: flex; justify-content: center; padding: 60px 20px; }
    .card { background: #fff; padding: 32px; border-radius: 12px; box-shadow: 0 4px 20px rgba(122,12,46,0.12); width: 100%; max-width: 380px; border-top: 4px solid #7A0C2E; }
    h1 { font-size: 22px; margin-bottom: 24px; color: #7A0C2E; }
    label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; margin-top: 16px; color: #333; }
    input { width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; }
    input:focus { outline: none; border-color: #7A0C2E; }
    .btn-submit { width: 100%; margin-top: 24px; background: #7A0C2E; color: #fff; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; font-weight: 600; }
    .btn-submit:hover { background: #5c0821; }
    .error { background: #fbe4e9; color: #7A0C2E; padding: 10px 14px; border-radius: 6px; font-size: 13px; margin-bottom: 12px; }
</style>
</head>
<body>
    <div class="card">
        <h1>Login</h1>
        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form action="/login" method="POST">
            <label>Username</label>
            <input type="text" name="username" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit" class="btn-submit">Log In</button>
        </form>
    </div>
</body>
</html>