toastr.options = {
        "closeButton": true
        , "debug": false
        , "newestOnTop": false
        , "progressBar": true
        , "positionClass": "toast-top-right"
        , "preventDuplicates": false
        , "onclick": null
        , "showDuration": "300"
        , "hideDuration": "1000"
        , "timeOut": "5000"
        , "extendedTimeOut": "1000"
        , "showEasing": "swing"
        , "hideEasing": "linear"
        , "showMethod": "fadeIn"
        , "hideMethod": "fadeOut"
    }

$(document).ready(function () {
    //Create Category
    $("#category_form").validate({
        rules: {
            category_name: {
                required: true
            }
            , category_image: {
                required: true, 
                extension: "PNG|JPEG|JPG"
            }
        }
        , messages: {
            category_name: "Please Fill Category"
            , category_image: "Please Select Image with Proper Extension"
        }
        , submitHandler: function (form) {
            var fd = new FormData()
            var category_name = $('#category_name').val();
            var files = $('#category_image')[0].files[0];
            var action = "create_category";
            
            fd.append("category_name", category_name);
            fd.append("file", files);
            fd.append("action", action);
            
            $.ajax({
                url: "includes/actions.php"
                , type: "POST"
                , data: fd
                , contentType: false
                , processData: false
                , success: function (res) {
                    result = res.trim();
                    if (result == 'success') {
                        $('#category_name').val('');
                        $('#category_image').val('');
                        toastr.success("New Category Added");
                    }
                    else if (result == 'warning') {
                        toastr.warning("Category Already Exists");
                    }
                    else {
                        toastr.error("Failed to Add Category");
                    }
                }
                , error: function (result) {
                    toastr.error("Failed to Add Category");
                }
            });
        }
    });
    
    //Create Certification
    $("#certification_form").validate({
        rules: {
            certification_name: {
                required: true
            }
            , certification_image: {
                required: true, 
                extension: "PNG|JPEG|JPG"
            }
        }
        , messages: {
            certification_name: "Please Fill Certification"
            , certification_image: "Please Select Image with Proper Extension"
        , }
        , submitHandler: function (form) {
            var fd = new FormData()
            var certification_name = $('#certification_name').val();
            var files = $('#certification_image')[0].files[0];
            var action = "create_certification";
            
            fd.append("certification_name", certification_name);
            fd.append("file", files);
            fd.append("action", action);
            $.ajax({
                url: "includes/actions.php"
                , type: "POST"
                , data: fd
                , contentType: false
                , processData: false
                , success: function (res) {
                    result = res.trim();
                    if (result == 'success') {
                        $('#certification_name').val('');
                        $('#certification_image').val('');
                        toastr.success("New Certification Added");
                    }
                    else if (result == 'warning') {
                        toastr.warning("Certification Already Exists");
                    }
                    else {
                        toastr.error("Failed to Add Certification");
                    }
                }
                , error: function (result) {
                    toastr.error("Failed to add Certification");
                }
            });
        }
    });
    

    //Create Product
    $("#product_form").validate({
        rules: {
            product_name: {
                required: true
            }
            , product_image: {
                required: true,
                extension: "PNG|JPEG|JPG" 
            }
            , product_description: {
                required: true
            }
        }
        , messages: {
            product_name: "Please Fill Product Name"
            , product_image: "Please Select Image with Proper Extension"
            , product_description: "Please write some Description"
        , }
        , submitHandler: function (form) {
            var fd = new FormData()
            var product_name = $('#product_name').val();
            var files = $('#product_image')[0].files[0];
            var category_id = $('#category_id').val();
            var product_description = $('#product_description').val();
            var action = "create_product";
            
            fd.append('product_name', product_name);
            fd.append('file', files);
            fd.append('category_id', category_id);
            fd.append('product_description', product_description);
            fd.append('action', action);
            if (files == 'null') {
                console.log("insert files");
            }
            $.ajax({
                url: "includes/actions.php"
                , type: "POST"
                , data: fd
                , contentType: false
                , processData: false
                , success: function (res) {
                    result = res.trim();
                    if (result == 'success') {
                        $('#product_name').val('');
                        $('#product_image').val('');
                        $('#product_description').val('');
                        toastr.success("New Product Added");
                    }
                    else if (result == 'warning') {
                        toastr.warning("Product Already Exists");
                    }
                    else {
                        toastr.error("Failed to Add Product");
                    }
                }
                , error: function (result) {
                    toastr.error("Failed to Add Product");
                }
            });
        }
    });

    //Create User
    $("#register-form").validate({
        rules: {
            first_name: {
                required: true
            }
            , last_name: {
                required: true
            } 
            , email: {
                required: true
                ,email: true
            }
            , password: {
                required: true
                ,minlength: 8
                ,maxlength: 8
            }
            , confirm_password: {
                required: true
                ,minlength: 8
                ,maxlength: 8
                ,equalTo: "#password"
            }
        }
        , messages: {
            first_name: "Please Insert First Name"
            , last_name: "Please Insert Last Name"
            , email: "Please Type your Email"
            , password: "Please type your Password"
            , confirm_password: "Re-type your Password"
        , }
        , submitHandler: function (form) {
            data = {
                "first_name": $('#first_name').val()
                ,"last_name": $('#last_name').val()
                ,"email": $('#email').val()
                ,"password": $('#password').val()
                ,"confirm_password": $('#confirm_password').val()
                ,"action": "create_user"
            }
          
            $.ajax({
                url: "includes/actions.php"
                , type: "POST"
                , data: data
                , success: function (res) {
                    result = res.trim();
                    if (result == 'success') {
                        console.log(result);
                        $('#first_name').val('');
                        $('#last_name').val('');
                        $('#email').val('');
                        $('#password').val('');
                        $('#confirm_password').val('');
                        toastr.success("New User Added");
                    }
                    else if (result == 'warning') {
                        toastr.warning("User Already Exists");
                    }
                    else {
                        toastr.error("Failed to Create User");
                    }
                }
                , error: function (result) {
                    toastr.error("Failed to Create User");
                }
            });
        }
    });    
    
    //Edit Category
    $("#edit_category").click(function (e) {
        var fd = new FormData()
        var category_id = $('#category_id').val();
        var category_name = $('#category_name').val();
        var files = $('#category_image')[0].files[0];
        if (files == undefined) {
            files = "";
        }
        else {
            files = $('#category_image')[0].files[0];
        }
        var action = "edit_category";
        fd.append("category_id", category_id)
        fd.append("category_name", category_name);
        fd.append("file", files);
        fd.append("action", action);
        e.preventDefault();
        $.ajax({
            type: "POST"
            , url: "includes/actions.php"
            , data: fd
            , contentType: false
            , processData: false
            , success: function (res) {
                result = res.trim();
                if (result == 'success') {
                    toastr.success("Edited Category Successfully");
                }
            }
            , error: function (result) {
                toastr.error("Failed to edit Category");
            }
        });
    });
    
    //Edit Certification
    $("#edit_certification").click(function (e) {
        var fd = new FormData()
        var cert_id = $('#cert_id').val();
        var certification_name = $('#certification_name').val();
        var files = $('#certification_image')[0].files[0];
        if (files == undefined) {
            files = "";
        }
        else {
            files = $('#certification_image')[0].files[0];
        }
        var action = "edit_certification";
        fd.append("cert_id", cert_id)
        fd.append("certification_name", certification_name);
        fd.append("file", files);
        fd.append("action", action);
        e.preventDefault();
        $.ajax({
            type: "POST"
            , url: "includes/actions.php"
            , data: fd
            , contentType: false
            , processData: false
            , success: function (res) {
                result = res.trim();
                if (result == 'success') {
                    toastr.success("Edited Certification Successfully");
                }
            }
            , error: function (result) {
                toastr.error("Failed to edit Certification");
            }
        });
    });

    //Edit Product
    $("#edit_product").click(function (e) {
        var fd = new FormData()
        var product_id = $('#product_id').val();
        var product_category_id = $('#category_id').val();
        var product_name = $('#product_name').val();
        var product_description = $('#product_description').val();
        var files = $('#product_image')[0].files[0];
        if (files == undefined) {
            files = "";
        }
        else {
            files = $('#product_image')[0].files[0];
        }
        console.log(files);
        var action = "edit_product";
        fd.append("product_id", product_id)
            , fd.append("product_category_id", product_category_id);
        fd.append("product_name", product_name);
        fd.append("product_description", product_description);
        fd.append("file", files);
        fd.append("action", action);
        e.preventDefault();
        $.ajax({
            type: "POST"
            , url: "includes/actions.php"
            , data: fd
            , contentType: false
            , processData: false
            , success: function (res) {
                result = res.trim();
                if (result == 'success') {
                    toastr.success("Edited Product Successfully");
                }
            }
            , error: function (result) {
                toastr.error("Failed to edit Product");
            }
        });
    });
    
    //Edit User
    $("#edit_user").click(function (e) {
        data = {
            "user_id": $('#user_id').val()
            , "first_name": $('#first_name').val()
            , "last_name": $('#last_name').val()
            , "email": $('#email').val()
            , "password": $('#password').val()
            , "action": "edit_user"
        }
        e.preventDefault();
        $.ajax({
            type: "POST"
            , url: "includes/actions.php"
            , data: data
            , success: function (res) {
                result = res.trim();
                if (result == 'success') {
                    toastr.success("User Edited Successfully");
                }
            }
            , error: function (result) {
                toastr.error("Failed to edit User");
            }
        });
    });

});