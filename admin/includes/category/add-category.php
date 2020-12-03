<!-- Content Row -->
<?php $source = "add_category"; ?>
<div class="row">
    <div class="col-md-6">
        <form id="category_form" role="form">
            <div class="form-group">
                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Enter Category" > 
            </div>
            
             <div class="form-group">
                <input type="file" id="category_image" name="category_image" class="form-control" > 
            </div>
            
            <div class="form-group">                       
                <button type="submit" class="btn btn-success">
                 Add Category</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->