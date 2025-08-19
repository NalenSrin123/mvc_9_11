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
    })
})