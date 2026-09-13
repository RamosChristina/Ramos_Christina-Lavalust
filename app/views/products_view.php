<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
    * { box-sizing: border-box; }
    body { font-family: 'Segoe UI', Arial, sans-serif; background: #faf6f7; margin: 0; padding: 60px 20px; display: flex; justify-content: center; }
    .container { width: 100%; max-width: 900px; }
    .header-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    h1 { font-weight: 700; font-size: 28px; margin: 0; color: #7A0C2E; }
    .btn { display: inline-block; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: 600; }
    .btn-add { background: #7A0C2E; color: #fff; }
    .btn-add:hover { background: #5c0821; }
    .btn-edit { background: #f0dde2; color: #7A0C2E; margin-right: 6px; }
    .btn-edit:hover { background: #e3c4cd; }
    .btn-delete { background: #a12030; color: #fff; border: none; cursor: pointer; }
    .btn-delete:hover { background: #7A0C2E; }
    .table-card { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(122,12,46,0.1); border: 1px solid #f0dde2; }
    table { width: 100%; border-collapse: collapse; font-size: 14.5px; }
    thead { background-color: #7A0C2E; }
    thead th { color: #fff; font-weight: 600; text-transform: uppercase; font-size: 12.5px; letter-spacing: 0.8px; padding: 16px 20px; text-align: left; }
    tbody td { padding: 14px 20px; border-bottom: 1px solid #f5e6ea; }
    tbody tr:nth-child(even) { background-color: #fdf7f8; }
    form { display: inline; }
</style>
</head>
<body>
    <div class="container">
        <div class="header-row">
            <h1>Product Management</h1>
            <div>
                <a href="/products/create" class="btn btn-add">+ Add Product</a>
                <a href="/logout" class="btn btn-edit">Logout</a>
            </div>
        </div>
        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th><th>Name</th><th>Price</th><th>Qty</th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><?= $product['product_name'] ?></td>
                            <td><?= number_format($product['price'], 2) ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>
                                <a href="/products/edit/<?= $product['id'] ?>" class="btn btn-edit">Edit</a>
                                <form action="/products/delete/<?= $product['id'] ?>" method="POST" onsubmit="return confirm('Delete this product?');">
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