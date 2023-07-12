<?php
include_once('includes/functions.php');
include_once('includes/custom-functions.php');

date_default_timezone_set('Asia/Kolkata');

$function = new functions;
$fn = new custom_functions;


if (isset($_GET['id'])) {
    $ID = $_GET['id'];
} else {
    return false;
    exit(0);
}

if (isset($_POST['btnUpdate'])) {
    $title = $db->escapeString($_POST['title']);
    $sub_title = $_POST['sub_title'];
    $sub_description = $_POST['sub_description'];
    $error = array();

    if (!empty($title)) {
        $sql_query = "UPDATE kolathalu SET title='$title' WHERE id = $ID";
        $db->sql($sql_query);
        $update_result = $db->getResult();

        if (!empty($update_result)) {
            $update_result = 0;
        } else {
            $update_result = 1;
        }

        // check update result
        if ($update_result == 1) {
            // Delete existing sub_title and sub_description
            $sql_query = "DELETE FROM kolathalu WHERE id = $ID";
            $db->sql($sql_query);

            // Insert updated sub_title and sub_description
            for ($i = 0; $i < count($sub_title); $i++) {
                $sub_title_value = $db->escapeString($sub_title[$i]);
                $sub_description_value = $db->escapeString($sub_description[$i]);
                $sql = "INSERT INTO kolathalu (title, sub_title, sub_description) VALUES ('$title', '$sub_title_value', '$sub_description_value')";
                $db->sql($sql);
            }

            $error['update_kolathalu'] = "<section class='content-header'><span class='label label-success'>kolathalu Tab updated Successfully</span></section>";
        } else {
            $error['update_kolathalu'] = "<span class='label label-danger'>Failed to update</span>";
        }
    }
}

// Fetch existing data
$data = array();
$sql_query = "SELECT * FROM grahalu_tab WHERE id = $ID";
$db->sql($sql_query);
$res = $db->getResult();

$sql_query = "SELECT * FROM kolathalu WHERE id = $ID";
$db->sql($sql_query);
$kolathalu_data = $db->getResult();

// Initialize sub_title and sub_description arrays
$sub_title = array();
$sub_description = array();

foreach ($kolathalu_data as $row) {
    $sub_title[] = $row['sub_title'];
    $sub_description[] = $row['sub_description'];
}
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
                                    <label for="exampleInputEmail1">Title</label>
                                    <i class="text-danger asterik">*</i>
                                    <?php echo isset($error['title']) ? $error['title'] : ''; ?>
                                    <input type="text" class="form-control" name="title" id="title" value="<?php echo isset($res[0]['title']) ? $res[0]['title'] : ''; ?>">

                                </div>
                            </div>
                        </div>
                        <br>

                        <div id="packate_div">
                            <?php for ($i = 0; $i < count($sub_title); $i++) { ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group packate_div">
                                            <label for="exampleInputEmail1">Sub_title</label>
                                            <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="sub_title[]" value="<?php echo $sub_title[$i]; ?>" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group packate_div">
                                            <label for="exampleInputEmail1">Sub_Description</label>
                                            <i class="text-danger asterik">*</i>
                                            <textarea type="text" rows="2" class="form-control" name="sub_description[]" required><?php echo $sub_description[$i]; ?></textarea>
                                        </div>
                                    </div>
                                    <?php if ($i == count($sub_title) - 1) { ?>
                                        <div class="col-md-1">
                                            <label>Tab</label>
                                            <a class="add_packate_variation" title="Add variation of panchangam" style="cursor: pointer;color:white;">
                                                <button class="btn btn-warning">Add more</button>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <div id="variations">
                                    </div>
                                </div>
                            <?php } ?>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var max_fields = 8;
        var wrapper = $("#packate_div");
        var add_button = $(".add_packate_variation");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="row"><div class="col-md-4"><div class="form-group"><label for="sub_title">Sub_Title</label><input type="text" class="form-control" name="sub_title[]" required /></div></div><div class="col-md-4"><div class="form-group"><label for="sub_description">Sub_Description</label><textarea type="text" row="2" class="form-control" name="sub_description[]" required></textarea></div></div><div class="col-md-1" style="display: grid;"><label>Tab</label><a class="remove" style="cursor:pointer;color:white;"><button class="btn btn-danger">Remove</button></a></div></div>');
            } else {
                alert('You Reached the limits');
            }
        });

        $(wrapper).on("click", ".remove", function (e) {
            e.preventDefault();
            $(this).closest('.row').remove();
            x--;
        });
    });
</script>

<!-- Code for page clear -->
<script>
    function refreshPage() {
        window.location.reload();
    }
</script>

<?php $db->disconnect(); ?>
