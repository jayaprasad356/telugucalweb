<?php
include_once('includes/functions.php');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

?>
<?php
if (isset($_POST['btnAdd'])) {
        $add_title= $db->escapeString($_POST['add_title']);
        $add_description= $db->escapeString($_POST['add_description']);
        $add_linked_text= $db->escapeString($_POST['add_linked_text']);

        if (empty($add_title)) {
            $error['add_title'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($add_description)) {
            $error['add_description'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($add_linked_text)) {
            $error['add_linked_text'] = " <span class='label label-danger'>Required!</span>";
        }
       
        // Validate and process the image upload
    if ($_FILES['image']['size'] != 0 && $_FILES['image']['error'] == 0 && !empty($_FILES['image'])) {
        $extension = pathinfo($_FILES["image"]["name"])['extension'];

        $result = $fn->validate_image($_FILES["image"]);
        $target_path = 'upload/images/';

        $filename = microtime(true) . '.' . strtolower($extension);
        $full_path = $target_path . "" . $filename;

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $full_path)) {
            echo '<p class="alert alert-danger">Can not upload image.</p>';
            return false;
            exit();
        }

        $upload_image = 'upload/images/' . $filename;
        $sql = "INSERT INTO items (add_title,add_description,add_linked_text, image) VALUES ('$add_title','$add_description','$add_linked_text', '$upload_image')";
        $db->sql($sql);
    } else {
    
        // Image is not uploaded or empty, insert only the title
        $sql = "INSERT INTO items (add_title,add_description,add_linked_text, image) VALUES ('$add_title','$add_description','$add_linked_text', '$upload_image')";
        $db->sql($sql);
    }
    $result = $db->getResult();
    if (!empty($result)) {
        $result = 0;
    } else {
        $result = 1;
    }

    if ($result == 1) {
        $error['add_items'] = "<section class='content-header'>
                                            <span class='label label-success'>items Added Successfully</span> </section>";
    } else {
        $error['add_items'] = " <span class='label label-danger'>Failed</span>";
    }
}
?>
<section class="content-header">
    <h1>Add items <small><a href='notifications.php'> <i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to notifications</a></small></h1>

    <?php echo isset($error['add_items']) ? $error['add_items'] : ''; ?>
    <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
    </ol>
    <hr />
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
           
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form name="add_items_form" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                            <div class="row">
                                <div class="form-group">
                                    <div class='col-md-8'>
                                        <label for="exampleInputEmail1">Add Title</label> <i class="text-danger asterik">*</i><?php echo isset($error['add_title']) ? $error['add_title'] : ''; ?>
                                        <input type="text" class="form-control" name="add_title" id = "add_title"required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class='col-md-8'>
                                        <label for="exampleInputEmail1">Add description</label> <i class="text-danger asterik">*</i><?php echo isset($error['add_description']) ? $error['add_description'] : ''; ?>
                                        <textarea row="2" type="text" class="form-control" name="add_description" id="add_description" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class='col-md-8'>
                                        <label for="exampleInputEmail1">Add linked Text</label> <i class="text-danger asterik">*</i><?php echo isset($error['add_linked_text']) ? $error['add_linked_text'] : ''; ?>
                                        <input type="text" class="form-control" name="add_linked_text" id="add_linked_text" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label for="exampleInputFile">Add Image</label> <i class="text-danger asterik">*</i><?php echo isset($error['image']) ? $error['image'] : ''; ?>
                                        <input type="file" name="image" onchange="readURL(this);" accept="image/png,  image/jpeg" id="image" required/><br>
                                        <img id="blah" src="#" alt="" />
                                    </div>
                                </div>
                            </div> 

         
                    </div>
                  
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
                        <input type="reset" onClick="refreshPage()" class="btn-warning btn" value="Clear" />
                    </div>
                   
                </form>

            </div><!-- /.box -->
        </div>
    </div>
</section>

<div class="separator"> </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    $('#add_notifications_form').validate({

        ignore: [],
        debug: false,
        rules: {
            title: "required",
            description: "required",
        }
    });
    $('#btnClear').on('click', function() {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].setData('');
        }
    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200)
                    .css('display', 'block');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<!--code for page clear-->
<script>
    function refreshPage(){
    window.location.reload();
} 
</script>
<?php $db->disconnect(); ?>