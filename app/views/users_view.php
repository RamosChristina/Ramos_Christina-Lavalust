<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f2f2f2; margin: 0; padding: 60px 20px; display: flex; justify-content: center; }
        .container { width: 100%; max-width: 700px; }
        .header-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        h1 { font-weight: 700; font-size: 28px; margin: 0; }
        .btn { display: inline-block; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; }
        .btn-add { background: #111; color: #fff; }
        .btn-edit { background: #e0e0e0; color: #111; margin-right: 6px; }
        .btn-delete { background: #d9534f; color: #fff; border: none; cursor: pointer; }
        .table-card { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: 1px solid #e0e0e0; }
        table { width: 100%; border-collapse: collapse; font-size: 14.5px; }
        thead { background-color: #111; }
        thead th { color: #fff; font-weight: 600; text-transform: uppercase; font-size: 12.5px; letter-spacing: 0.8px; padding: 16px 20px; text-align: left; }
        tbody td { padding: 14px 20px; border-bottom: 1px solid #ececec; }
        tbody tr:nth-child(even) { background-color: #fafafa; }
        form { display: inline; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-row">
            <h1>User Management</h1>
            <a href="/users/create" class="btn btn-add">+ Add User</a>
        </div>
        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td>
                                <a href="/users/edit/<?= $user['id'] ?>" class="btn btn-edit">Edit</a>
                                <form action="/users/delete/<?= $user['id'] ?>" method="POST" onsubmit="return confirm('Delete this user?');">
                                    <button type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>