<?php
include_once('includes/functions.php');
date_default_timezone_set('Asia/Kolkata');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

if (isset($_GET['id'])) {
    $ID = $db->escapeString($fn->xss_clean($_GET['id']));
} else {
    // $ID = "";
    return false;
    exit(0);
}

if (isset($_POST['btnUpdate'])) {
    $error = array();
    $title= $db->escapeString($_POST['title']);
    $description= $db->escapeString($_POST['description']);
    $subtitle1= $db->escapeString($_POST['subtitle1']);
    $subdescription1a= $db->escapeString($_POST['subdescription1a']);
    $subdescription1b= $db->escapeString($_POST['subdescription1b']);
    $subtitle2= $db->escapeString($_POST['subtitle2']);
    $subdescription2a= $db->escapeString($_POST['subdescription2a']);
    $subdescription2b= $db->escapeString($_POST['subdescription2b']);

    if (!empty($title) && !empty($description) && !empty($subtitle1) && !empty($subdescription1a) && !empty($subdescription1b) && !empty($subtitle2) && !empty($subdescription2a) && !empty($subdescription2b)) 
    {
        
        $sql = "UPDATE  balli_sasthram SET title='$title',description='$description',subtitle1='$subtitle1',subdescription1a='$subdescription1a',subdescription1b='$subdescription1b',subtitle2='$subtitle2',subdescription2a='$subdescription2a',subdescription2b='$subdescription2b'  WHERE id = '$ID'";
        $db->sql($sql);
        $result = $db->getResult();
        if (!empty($result)) {
            $result = 0;
        } else {
            $result = 1;
        }

        if ($result == 1) {
            
            $error['update_ballisasthram'] = "<section class='content-header'>
                                            <span class='label label-success'>Balli Sasthram Updated Successfully</span> </section>";
        } else {
            $error['update_ballisasthram'] = " <span class='label label-danger'>Failed</span>";
        }
        }
    }

$data = array();

$sql_query = "SELECT * FROM `balli_sasthram` WHERE id = '$ID'";
$db->sql($sql_query);
$res = $db->getResult();

?>
<section class="content-header">
    <h1>Edit Balli Sasthram <small><a href='ballisasthram.php'> <i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Balli Sasthram </a></small></h1>
    <?php echo isset($error['update_ballisasthram']) ? $error['update_ballisasthram'] : ''; ?>
    <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
    </ol>

</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">

                <div class="box-header">
                    <?php echo isset($error['cancelable']) ? '<span class="label label-danger">Till status is required.</span>' : ''; ?>
                </div>

                <!-- /.box-header -->
                <!-- form start -->
                <form id="edit_ballisasthram_form" method="post" enctype="multipart/form-data">
                     <div class="box-body">
                            <div class="row">
                                <div class="form-group">
                                     <div class="col-md-4">
                                            <label for="exampleInputEmail1">Title</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="title" id = "title" value="<?php echo $res[0]['title']?>">
                                    </div>
                                    <div class="col-md-8">
                                            <label for="exampleInputEmail1">Description</label> <i class="text-danger asterik">*</i>
                                            <textarea  type="text" rows="3" class="form-control" name="description"><?php echo $res[0]['description']?></textarea>
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                     <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Title 1</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="subtitle1" id = "subtitle1" value="<?php echo $res[0]['subtitle1']?>">
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 1A</label> <i class="text-danger asterik">*</i>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription1a"><?php echo $res[0]['subdescription1a']?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 1B</label> <i class="text-danger asterik">*</i>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription1b"><?php echo $res[0]['subdescription1b']?></textarea>
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                     <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Title 2</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="subtitle2" id = "subtitle2" value="<?php echo $res[0]['subtitle2']?>">
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 2A</label> <i class="text-danger asterik">*</i>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription2a"><?php echo $res[0]['subdescription2a']?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="exampleInputEmail1">Sub Description 2B</label> <i class="text-danger asterik">*</i>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription2b"><?php echo $res[0]['subdescription2a']?></textarea>
                                    </div>
                                 </div>
                            </div>
                    </div>
                  
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" class="btn-primary btn" value="Update" name="btnUpdate" />&nbsp;
                    </div>

                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<div class="separator"> </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>