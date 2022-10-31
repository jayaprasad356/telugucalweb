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
        $subtitle1= $db->escapeString($_POST['subtitle1']);
        $subdescription1= $db->escapeString($_POST['subdescription1']);
        $subtitle2= $db->escapeString($_POST['subtitle2']);
        $subdescription2= $db->escapeString($_POST['subdescription2']);

   if (!empty($title) &&  !empty($subtitle1) && !empty($subdescription1) &&  !empty($subtitle2) && !empty($subdescription2))
    {
        $sql = "UPDATE kolathalu SET title='$title',subtitle1='$subtitle1',subdescription1='$subdescription1',subtitle2='$subtitle2',subdescription2='$subdescription2'  WHERE id = '$ID'";
        $db->sql($sql);
        $result = $db->getResult();
        if (!empty($result)) {
            $result = 0;
        } else {
            $result = 1;
        }

        if ($result == 1) {
            
            $error['update_kolathalu'] = "<section class='content-header'>
                                            <span class='label label-success'>Kolathalu Updated Successfully</span> </section>";
        } else {
            $error['update_kolathalu'] = " <span class='label label-danger'>Failed</span>";
        }
        }
    }

$data = array();

$sql_query = "SELECT * FROM `kolathalu` WHERE id = '$ID'";
$db->sql($sql_query);
$res = $db->getResult();

?>
<section class="content-header">
    <h1>Edit Kolathalu <small><a href='kolathalu.php'> <i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Kolathalu</a></small></h1>
    <?php echo isset($error['update_kolathalu']) ? $error['update_kolathalu'] : ''; ?>
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
                <form id="edit_kolathalu_form" method="post" enctype="multipart/form-data">
                     <div class="box-body">
                           <div class="row">
                                <div class="form-group">
                                     <div class="col-md-6">
                                            <label for="exampleInputEmail1">Title</label> <i class="text-danger asterik">*</i><?php echo isset($error['title']) ? $error['title'] : ''; ?>
                                            <input type="text" class="form-control" name="title" id = "title" value="<?php echo $res[0]['title']?>">
                                    </div>
                                </div>
                            </div>
                             <br>
                            <div class="row">
                                <div class="form-group">
                                   <div class="col-md-4">
                                            <label for="exampleInputEmail1">Subtitle 1</label> <i class="text-danger asterik">*</i><?php echo isset($error['subtitle1']) ? $error['subtitle1'] : ''; ?>
                                            <input type="text" class="form-control" name="subtitle1" id = "subtitle1" value="<?php echo $res[0]['subtitle1']?>">
                                    </div>
                                    <div class="col-md-8">
                                            <label for="exampleInputEmail1">Sub Description 1</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription1']) ? $error['subdescription1'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription1"><?php echo $res[0]['subdescription1']?></textarea>
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                   <div class="col-md-4">
                                            <label for="exampleInputEmail1">Subtitle 2</label> <i class="text-danger asterik">*</i><?php echo isset($error['subtitle2']) ? $error['subtitle2'] : ''; ?>
                                            <input type="text" class="form-control" name="subtitle2" id = "subtitle2" value="<?php echo $res[0]['subtitle2']?>">
                                    </div>
                                    <div class="col-md-8">
                                            <label for="exampleInputEmail1">Sub Description 2</label> <i class="text-danger asterik">*</i><?php echo isset($error['subdescription2']) ? $error['subdescription2'] : ''; ?>
                                            <textarea  type="text" rows="3" class="form-control" name="subdescription2"><?php echo $res[0]['subdescription2']?></textarea>
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