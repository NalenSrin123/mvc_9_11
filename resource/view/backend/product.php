  
<?php 
    include 'sidebar.php'
?>
   <!-- Product Section -->
            <section class="product-section">
                <div class="section-header">
                    <h2 class="section-title">Products</h2>
                    <button class="btn btn-primary" id="btnAdd" onclick="showForm()">+ Add Product</button>
                </div>

                <div class="controls">
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search products...">
                    </div>
                    <select class="filter-select">
                        <option>All Categories</option>
                        <option>Electronics</option>
                        <option>Clothing</option>
                        <option>Books</option>
                    </select>
                    <select class="filter-select">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="table-container">
                    <table class="product-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="/placeholder.svg?height=50&width=50" alt="Laptop" class="product-image">
                                </td>
                                <td>MacBook Pro 16"</td>
                                <td>$2,499.00</td>
                                <td>15</td>
                                <td>
                                    <div class="actions">
                                        <button class="btn btn-secondary btn-sm" id="btnEdit">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </section>
  <div class="product-form" id="productForm">
        <div class="form-container">
            <div class="form-header">
                <h3 id="title"></h3>
            </div>
            <form action="../../../app/Controller/ProductController/function.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-input" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-input" placeholder="0.00" step="0.01">
                </div>
                <div class="form-group">
                    <label class="form-label">Stock Quantity</label>
                    <input type="number" name="qty" class="form-input" placeholder="0">
                </div>
                 <div class="form-group">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-input" placeholder="0">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-textarea" name="des" placeholder="Enter product description"></textarea>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="hideForm()">Cancel</button>
                    <input type="submit" name="btn" id="add" class="btn btn-primary" value="Save Product">
                    <input type="submit" name="btn" id="edit" class="btn btn-primary" value="Edit Product">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../js//productModal.js"></script>