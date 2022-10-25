<?php
include_once('includes/functions.php');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

?>
<?php
if (isset($_POST['btnAdd'])) {
        $title= $db->escapeString($_POST['title']);
        $description= $db->escapeString($_POST['description']);
        $subtitle1= $db->escapeString($_POST['subtitle1']);
        $subdescription1a= $db->escapeString($_POST['subdescription1a']);
        $subdescription1b= $db->escapeString($_POST['subdescription1b']);
        $subtitle2= $db->escapeString($_POST['subtitle2']);
        $subdescription2a= $db->escapeString($_POST['subdescription2a']);
        $subdescription2b= $db->escapeString($_POST['subdescription2b']);


        if (empty($title)) {
            $error['title'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($description)) {
            $error['description'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subtitle1)) {
            $error['subtitle1'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subdescription1a)) {
            $error['subdescription1a'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subdescription1b)) {
            $error['subdescription1b'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subtitle2)) {
            $error['subtitle2'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subdescription2a)) {
            $error['subdescription2a'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($subdescription2b)) {
            $error['subdescription2b'] = " <span class='label label-danger'>Required!</span>";
        }

       if (!empty($title) && !empty($description) && !empty($subtitle1) && !empty($subdescription1a) && !empty($subdescription1b) && !empty($subtitle2) && !empty($subdescription2a) && !empty($subdescription2b) ) {
         
            $sql_query = "INSERT INTO balli_sasthram (title,description,subtitle1,subdescription1a,subdescription1b,subtitle2,subdescription2a,subdescription2b)VALUES('$title','$description','$subtitle1','$subdescription1a','$subdescription1b','$subtitle2','$subdescription2a','$subdescription2b')";
            $db->sql($sql_query);
            $result = $db->getResult();
            if (!empty($result)) {
                $result = 0;
            } else {
                $result = 1;
            }

            if ($result == 1) {
                
                $error['add_ballisasthram'] = "<section class='content-header'>
                                                <span class='label label-success'>Balli Sasthram Added Successfully</span> </section>";
            } else {
                $error['add_ballisasthram'] = " <span class='label label-danger'>Failed</span>";
            }
            }
        }
?>
<section class="content-header">
    <h1>Add Balli Sasthram<small><a href='ballisasthram.php'> <i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Balli Sasthram</a></small></h1>

    <?php echo isset($error['add_ballisasthram']) ? $error['add_ballisasthram'] : ''; ?>
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
                <form name="add_ballisasthram_form" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                            <div class="row">
                                <div class="form-group">
                                     <div class="col-md-4">
                                            <label for="exampleInputEmail1">Title</label> <i class="text-danger asterik">*</i><?php echo isset($error['title']) ? $error['title'] : ''; ?>
                                            <input type="text" class="form-control" name="title" id = "title" required>
                                    </div>
                                    <div class="col-md-8">
                                            <label for="exampleInputEmail1">Description</label> <i class="text-danger asterik">*</i><?php echo isset($error['description']) ? $error['description'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="description" required></textarea>
                                    </div>
                                 </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group">
                                     <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Title 1</label> <i class="text-danger asterik">*</i><?php echo isset($error['subtitle1']) ? $error['subtitle1'] : ''; ?>
                                            <input type="text" class="form-control" name="subtitle1" id = "subtitle1" required>
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 1A</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription1a']) ? $error['subdescription1a'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription1a" required></textarea>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 1B</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription1b']) ? $error['subdescription1b'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription1b" required></textarea>
                                    </div>
                                 </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group">
                                     <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Title 2</label> <i class="text-danger asterik">*</i><?php echo isset($error['subtitle2']) ? $error['subtitle2'] : ''; ?>
                                            <input type="text" class="form-control" name="subtitle2" id = "subtitle2" required>
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 2A</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription2a']) ? $error['subdescription2a'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription2a" required></textarea>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 2B</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription2b']) ? $error['subdescription2b'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription2b" required></textarea>
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
    $('#add_sakunalu_form').validate({

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

<!--code for page clear-->
<script>
    function refreshPage(){
    window.location.reload();
} 
</script>

<?php $db->disconnect(); ?>