<?php
include_once('includes/functions.php');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

?>
<?php
if (isset($_POST['btnAdd'])) {

        $rasi= $db->escapeString($_POST['rasi']);
        $year= $db->escapeString($_POST['year']);
        $description= $db->escapeString($_POST['description']);
        $title= $db->escapeString($_POST['title']);
        $adhayam = $db->escapeString($_POST['adhayam']);
        $vyayam = $db->escapeString($_POST['vyayam']);
        $rajapujyam = $db->escapeString($_POST['rajapujyam']);
        $aavamanam= $db->escapeString($_POST['aavamanam']);
        $error = array();

        
     
        if (empty($rasi)) {
            $error['rasi'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($year)) {
            $error['year'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($title)) {
            $error['title'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($description)) {
            $error['description'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($adhayam)) {
            $error['adhayam'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($vyayam)) {
            $error['vyayam'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($rajapujyam)) {
            $error['rajapujyam'] = " <span class='label label-danger'>Required!</span>";
        }
        if (empty($aavamanam)) {
            $error['aavamanam'] = " <span class='label label-danger'>Required!</span>";
        }


        if ( !empty($rasi) && !empty($year) && !empty($title) && !empty($description) && !empty($adhayam) && !empty($vyayam) && !empty($rajapujyam) && !empty($aavamanam))
        {
                $sql_query = "INSERT INTO yearly_horoscope (rasi,year,title,description,adhayam,vyayam,rajapujyam,aavamanam)VALUES('$rasi','$year','$title','$description','$adhayam','$vyayam','$rajapujyam','$aavamanam')";
                $db->sql($sql_query);
                $result = $db->getResult();
                if (!empty($result)) {
                    $result = 0;
                } else {
                    $result = 1;
                }
                if ($result == 1) {
                    $sql = "SELECT id FROM yearly_horoscope ORDER BY id DESC LIMIT 1";
                    $db->sql($sql);
                    $res = $db->getResult();
                    $yearly_horoscope_id = $res[0]['id'];
                    for ($i = 0; $i < count($_POST['sub_title']); $i++) {
        
                        $sub_title = $db->escapeString(($_POST['sub_title'][$i]));
                        $sub_description = $db->escapeString(($_POST['sub_description'][$i]));
                        $sql = "INSERT INTO yearly_horoscope_variant (yearly_horoscope_id,sub_title,sub_description) VALUES('$yearly_horoscope_id','$sub_title','$sub_description')";
                        $db->sql($sql);
                        $yearly_horoscope_variant_result = $db->getResult();
                    }
                    if (!empty($yearly_horoscope_variant_result)) {
                        $yearly_horoscope_variant_result = 0;
                    } else {
                        $yearly_horoscope_variant_result = 1;
                    }
                    
                    $error['add_year_horoscope'] = "<section class='content-header'>
                                                    <span class='label label-success'>Yearly Horoscope Added Successfully</span> </section>";
                } else {
                    $error['add_year_horoscope'] = " <span class='label label-danger'>Failed</span>";
                }
                }
                
            }
?>
<section class="content-header">
    <h1>Add Yearly Horoscope <small><a href='yearly.php'> <i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Yearly Horoscope</a></small></h1>

    <?php echo isset($error['add_year_horoscope']) ? $error['add_year_horoscope'] : ''; ?>
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
                <form name="add_yearly_horoscope_form" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                           <div class="row">
                                <div class="form-group">
                                    <div class='col-md-4'>
                                        <label for="">Rasi</label> <i class="text-danger asterik">*</i>
                                        <select id='rasi' name="rasi" class='form-control' required>
                                            <option value="">Select</option>
                                                <?php
                                                $sql = "SELECT * FROM `rasi_names`";
                                                $db->sql($sql);
                                                $result = $db->getResult();
                                                foreach ($result as $value) {
                                                ?>
                                                    <option value='<?= $value['rasi'] ?>'><?= $value['rasi'] ?></option>
                                            <?php } ?>
                                            </select>
                                    </div>
                                    <div class='col-md-4'>
                                        <label for="">Year</label> <i class="text-danger asterik">*</i>
                                        <select id='year' name="year" class='form-control' required>
                                            <option value="">Select Year</option>
                                                <?php
                                                $sql = "SELECT * FROM `years`";
                                                $db->sql($sql);
                                                $result = $db->getResult();
                                                foreach ($result as $value) {
                                                ?>
                                                    <option value='<?= $value['year'] ?>'><?= $value['year'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Title</label> <i class="text-danger asterik">*</i><?php echo isset($error['title']) ? $error['title'] : ''; ?>
                                        <input type="text" class="form-control" name="title" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Description</label> <i class="text-danger asterik">*</i><?php echo isset($error['description']) ? $error['description'] : ''; ?>
                                        <textarea type="text" rows="2" class="form-control" name="description" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label for="">Adhayam </label> <i class="text-danger asterik">*</i><?php echo isset($error['adhayam']) ? $error['adhayam'] : ''; ?>
                                        <input type="text" class="form-control" name="adhayam" required />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Vyayam </label> <i class="text-danger asterik">*</i><?php echo isset($error['vyayam']) ? $error['vyayam'] : ''; ?>
                                        <input type="text" class="form-control" name="vyayam" required />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Rajapujyam </label> <i class="text-danger asterik">*</i><?php echo isset($error['rajapujyam']) ? $error['rajapujyam'] : ''; ?>
                                        <input type="text" class="form-control" name="rajapujyam" required />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Aavamanam</label> <i class="text-danger asterik">*</i><?php echo isset($error['aavamanam']) ? $error['aavamanam'] : ''; ?>
                                        <input type="text" class="form-control" name="aavamanam" required />
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div id="packate_div"  >
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group packate_div">
                                            <label for="exampleInputEmail1">Sub Title</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="sub_title[]" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group packate_div">
                                            <label for="exampleInputEmail1">Sub Description</label> <i class="text-danger asterik">*</i>
                                            <textarea type="text" rows="2" class="form-control" name="sub_description[]" required></textarea>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-1">
                                        <label>Tab</label>
                                        <a class="add_packate_variation" title="Add variation of yearly horoscope" style="cursor: pointer;color:white;"><button class="btn btn-warning">Add more</button></a>
                                    </div>
                                    <div id="variations">
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
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

<div class="separator"> </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    $('#add_yearly_horoscope_form').validate({

        ignore: [],
        debug: false,
        rules: {
            year: "required",
            rasi: "required",
            title="required",
            description="required",
        }
    });
    $('#btnClear').on('click', function() {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].setData('');
        }
    });
</script>

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
                $(wrapper).append('<div class="row"><div class="col-md-4"><div class="form-group"><label for="sub_title">Sub title</label>' +'<input type="text" class="form-control" name="sub_title[]" /></div></div>' + '<div class="col-md-6"><div class="form-group"><label for="sub_description">Sub description</label>'+'<textarea type="text" row="2" class="form-control" name="sub_description[]"></textarea></div></div>'+'<div class="col-md-1" style="display: grid;"><label>Tab</label><a class="remove" style="cursor:pointer;color:white;"><button class="btn btn-danger">Remove</button></a></div>'+'</div>');
            }
            else{
                alert('You Reached the limits')
            }
        });

        $(wrapper).on("click", ".remove", function (e) {
            e.preventDefault();
            $(this).closest('.row').remove();
            x--;
        })
    });
</script>

<!--code for page clear-->
<script>
    function refreshPage(){
    window.location.reload();
} 
</script>

<?php $db->disconnect(); ?>