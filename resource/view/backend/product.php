  
<?php 
    include 'sidebar.php';
    include '../../../app/Controller/ProductController/function.php';
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
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php getAllProduct(); ?>
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
                    <input type="hidden" name="hide_id" id="hide_id">
                    <label class="form-label">Product Name</label>
                    <input type="text" id="name" name="name" class="form-input" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label class="form-label">Price</label>
                    <input type="number" id="price" name="price" class="form-input" placeholder="0.00" step="0.01">
                </div>
                <div class="form-group">
                    <label class="form-label">Stock Quantity</label>
                    <input type="number" id="qty" name="qty" class="form-input" placeholder="0">
                </div>
                 <div class="form-group">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-input" placeholder="0">
                    <input type="hidden" name="hide_image" id="hide_image">
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-textarea" name="des" id="des" placeholder="Enter product description"></textarea>
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
    <script>
        $(document).ready(function(){
            $('#btnAdd').click(function(){
                $('#add').show();
                $('#edit').hide();
                $('#title').html('Add New Product')
            })
            $(document).on('click','#btnEdit',function(){
                
                $('#add').hide();
                $('#edit').show();
                $('#title').html('Edit Product');
                $('#productForm').addClass('show');

                // get data from table
                const tr=$(this).parents('tr');
                const t_id=tr.find('td').eq(0).text();
                const t_image=tr.find('img').attr('src').split('/').pop();
                const t_name=tr.find('td').eq(2).text();
                const t_price=tr.find('td').eq(3).text().split('$').pop();
                const t_qty=tr.find('td').eq(4).text();
                const t_des=tr.find('td').eq(5).text();
                // insert data into form
                
                 $('#hide_id').val(t_id);
                 $('#name').val(t_name);
                 $('#price').val(t_price);
                 $('#qty').val(t_qty);
                 $('#hide_image').val(t_image);
                 $('#des').val(t_des); 
            })
        })
    </script>