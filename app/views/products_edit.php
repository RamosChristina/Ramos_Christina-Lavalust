<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
    body { font-family: 'Segoe UI', Arial, sans-serif; background: #faf6f7; display: flex; justify-content: center; padding: 60px 20px; }
    .card { background: #fff; padding: 32px; border-radius: 12px; box-shadow: 0 4px 20px rgba(122,12,46,0.12); width: 100%; max-width: 420px; border-top: 4px solid #7A0C2E; }
    h1 { font-size: 22px; margin-bottom: 24px; color: #7A0C2E; }
    label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; margin-top: 16px; color: #333; }
    input, textarea { width: 100%; padding: 10px 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; }
    input:focus, textarea:focus { outline: none; border-color: #7A0C2E; }
    .btn-submit { margin-top: 24px; background: #7A0C2E; color: #fff; border: none; padding: 10px 20px; border-radius: 6px; cursor: pointer; font-weight: 600; }
    .btn-submit:hover { background: #5c0821; }
    .btn-cancel { margin-left: 10px; color: #7A0C2E; text-decoration: none; font-size: 14px; }
</style>
</head>
<body>
    <div class="card">
        <h1>Edit Product</h1>
        <form action="/products/update/<?= $product['id'] ?>" method="POST">
            <label>Product Name</label>
            <input type="text" name="product_name" value="<?= $product['product_name'] ?>" required>

            <label>Description</label>
            <textarea name="description" rows="3"><?= $product['description'] ?></textarea>

            <label>Price</label>
            <input type="number" name="price" step="0.01" min="0" value="<?= $product['price'] ?>" required>

            <label>Quantity</label>
            <input type="number" name="quantity" min="0" value="<?= $product['quantity'] ?>" required>

            <button type="submit" class="btn-submit">Update Product</button>
            <a href="/products" class="btn-cancel">Cancel</a>
        </form>
    </div>
</body>
</html>