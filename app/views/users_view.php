<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            background-color: #f2f2f2;
            color: #111111;
            margin: 0;
            padding: 60px 20px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 900px;
        }

        h1 {
            font-weight: 700;
            font-size: 28px;
            letter-spacing: 0.3px;
            margin-bottom: 6px;
            color: #111111;
        }

        .subtitle {
            color: #666666;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .table-card {
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e0e0e0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14.5px;
        }

        thead {
            background-color: #111111;
        }

        thead th {
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 12.5px;
            letter-spacing: 0.8px;
            padding: 16px 20px;
            text-align: left;
        }

        tbody td {
            padding: 14px 20px;
            border-bottom: 1px solid #ececec;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:nth-child(even) {
            background-color: #fafafa;
        }

        tbody tr {
            transition: background-color 0.15s ease;
        }

        tbody tr:hover {
            background-color: #f0f0f0;
        }

        td:first-child {
            color: #888888;
            font-variant-numeric: tabular-nums;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Management</h1>
  

        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['firstname'] ?></td>
                            <td><?= $user['lastname'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['username'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>