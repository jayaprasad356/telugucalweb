<?php
include_once('includes/functions.php');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

?>
<?php
if (isset($_POST['btnAdd'])) {
        $title= $db->escapeString($_POST['title']);
        $subtitle1= $db->escapeString($_POST['subtitle1']);
        $subdescription1= $db->escapeString($_POST['subdescription1']);
        $subtitle2= $db->escapeString($_POST['subtitle2']);
        $subdescription2= $db->escapeString($_POST['subdescription2']);

        if (empty($title)) {
            $error['title'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subtitle1)) {
            $error['subtitle1'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subdescription1)) {
            $error['subdescription1'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subtitle2)) {
            $error['subtitle2'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subdescription2)) {
            $error['subdescription2'] = " <span class='label label-danger'>Required!</span>";
        }

       if (!empty($title) &&  !empty($subtitle1) && !empty($subdescription1) &&  !empty($subtitle2) && !empty($subdescription2)) {
         
            $sql_query = "INSERT INTO kolathalu (title,subtitle1,subdescription1,subtitle2,subdescription2)VALUES('$title','$subtitle1','$subdescription1','$subtitle2','$subdescription2')";
            $db->sql($sql_query);
            $result = $db->getResult();
            if (!empty($result)) {
                $result = 0;
            } else {
                $result = 1;
            }

            if ($result == 1) {
                
                $error['add_kolathalu'] = "<section class='content-header'>
                                                <span class='label label-success'>Kolathalu Added Successfully</span> </section>";
            } else {
                $error['add_kolathalu'] = " <span class='label label-danger'>Failed</span>";
            }
            }
        }
?>
<section class="content-header">
    <h1>Add Kolathalu<small><a href='kolathalu.php'> <i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Kolathalu</a></small></h1>

    <?php echo isset($error['add_kolathalu']) ? $error['add_kolathalu'] : ''; ?>
    <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
    </ol>
    <hr />
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
           
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form name="add_kolathalu_form" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                           <div class="row">
                                <div class="form-group">
                                     <div class="col-md-6">
                                            <label for="exampleInputEmail1">Title</label> <i class="text-danger asterik">*</i><?php echo isset($error['title']) ? $error['title'] : ''; ?>
                                            <input type="text" class="form-control" name="title" id = "title" required>
                                    </div>
                                </div>
                            </div>
                             <br>
                            <div class="row">
                                <div class="form-group">
                                   <div class="col-md-4">
                                            <label for="exampleInputEmail1">Subtitle 1</label> <i class="text-danger asterik">*</i><?php echo isset($error['subtitle1']) ? $error['subtitle1'] : ''; ?>
                                            <input type="text" class="form-control" name="subtitle1" id = "subtitle1" required>
                                    </div>
                                    <div class="col-md-8">
                                            <label for="exampleInputEmail1">Sub Description 1</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription1']) ? $error['subdescription1'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription1" required></textarea>
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                   <div class="col-md-4">
                                            <label for="exampleInputEmail1">Subtitle 2</label> <i class="text-danger asterik">*</i><?php echo isset($error['subtitle2']) ? $error['subtitle2'] : ''; ?>
                                            <input type="text" class="form-control" name="subtitle2" id = "subtitle2" required>
                                    </div>
                                    <div class="col-md-8">
                                            <label for="exampleInputEmail1">Sub Description 2</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription2']) ? $error['subdescription2'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription2" required></textarea>
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
    $('#add_kolathalu_form').validate({

        ignore: [],
        debug: false,
        rules: {
            title: "required",
            subdescription1: "required",
            subdescription2: "required",
            subtitle1: "required",
            subtitle2: "required",


        }
    });
    $('#btnClear').on('click', function() {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].setData('');
        }
    });
</script>

<!--code for page clear-->
<script>
    function refreshPage(){
    window.location.reload();
} 
</script>

<?php $db->disconnect(); ?>