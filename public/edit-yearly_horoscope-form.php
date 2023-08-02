<?php
include_once('includes/functions.php');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;
?>
<?php

if (isset($_GET['id'])) {
    $ID = $db->escapeString($_GET['id']);
} else {
    // $ID = "";
    return false;
    exit(0);
}

if (isset($_POST['btnEdit'])) {

	
	$rasi= $db->escapeString($_POST['rasi']);
	$year= $db->escapeString($_POST['year']);
	$main_description= $db->escapeString($_POST['main_description']);
	$main_title= $db->escapeString($_POST['main_title']);
	$adhayam = $db->escapeString($_POST['adhayam']);
	$vyayam = $db->escapeString($_POST['vyayam']);
	$rajapujyam = $db->escapeString($_POST['rajapujyam']);
	$aavamanam= $db->escapeString($_POST['aavamanam']);
	$janma_nama_nakshathram= $db->escapeString($_POST['janma_nama_nakshathram']);
	$title= $db->escapeString($_POST['title']);
	$description= $db->escapeString($_POST['description']);
	$janma_nama_nakshathram_title= $db->escapeString($_POST['janma_nama_nakshathram_title']);
	$janma_nama_nakshathram_description= $db->escapeString($_POST['janma_nama_nakshathram_description']);
	$graha_dhashakalamu_title= $db->escapeString($_POST['graha_dhashakalamu_title']);
	$graha_dhashakalamu_description= $db->escapeString($_POST['graha_dhashakalamu_description']);
	$error = array();



	
	if (!empty($rasi) && !empty($year) && !empty($janma_nama_nakshathram)&& !empty($janma_nama_nakshathram_title) && !empty($janma_nama_nakshathram_description) && !empty($graha_dhashakalamu_title) && !empty($graha_dhashakalamu_description)  && !empty($main_title) && !empty($main_description) && !empty($title) && !empty($description) && !empty($adhayam) && !empty($vyayam) && !empty($rajapujyam) && !empty($aavamanam)) 
	{
             $sql_query = "UPDATE yearly_horoscope SET rasi='$rasi',year='$year',title='$title',description='$description',adhayam='$adhayam',vyayam='$vyayam',rajapujyam='$rajapujyam',aavamanam='$aavamanam',janma_nama_nakshathram='$janma_nama_nakshathram',main_title='$main_title',main_description='$main_description',janma_nama_nakshathram_title='$janma_nama_nakshathram_title',janma_nama_nakshathram_description='$janma_nama_nakshathram_description',graha_dhashakalamu_title='$graha_dhashakalamu_title',graha_dhashakalamu_description='$graha_dhashakalamu_description' WHERE id =$ID";
			 $db->sql($sql_query);
			 $res = $db->getResult();
             $update_result = $db->getResult();
			if (!empty($update_result)) {
				$update_result = 0;
			} else {
				$update_result = 1;
			}

			// check update result
			if ($update_result == 1)
		   {
			
			if (isset($_POST['graha_dhashakalamu'])) {
				for ($i = 0; $i < count($_POST['graha_dhashakalamu']); $i++) {
					$yearly_horoscope_id = isset($_POST['yearly_horoscope_variant_id'][$i]) ? $db->escapeString($_POST['yearly_horoscope_variant_id'][$i]) : null;
					$graha_dhashakalamu = isset($_POST['graha_dhashakalamu'][$i]) ? $db->escapeString($_POST['graha_dhashakalamu'][$i]) : null;
					if ($yearly_horoscope_id !== null && $graha_dhashakalamu !== null) {
						$sql = "UPDATE yearly_horoscope_variant SET graha_dhashakalamu='$graha_dhashakalamu' WHERE id =$yearly_horoscope_id";
						$db->sql($sql);
					}
				}
			
				if (isset($_POST['insert_graha_dhashakalamu'])) {
					for ($i = 0; $i < count($_POST['insert_graha_dhashakalamu']); $i++) {
						$graha_dhashakalamu = isset($_POST['insert_graha_dhashakalamu'][$i]) ? $db->escapeString($_POST['insert_graha_dhashakalamu'][$i]) : null;
						if (!empty($graha_dhashakalamu)) {
							if ($ID !== null) {
								$sql = "INSERT INTO yearly_horoscope_variant (yearly_horoscope_id, graha_dhashakalamu) VALUES ('$ID', '$graha_dhashakalamu')";
								$db->sql($sql);
							}
						}
					}
				}
			}
			
                  $error['update_yearly_horoscope'] = " <section class='content-header'><span class='label label-success'>Yearly Horoscope updated Successfully</span></section>";
			} else {
				$error['update_yearly_horoscope'] = " <span class='label label-danger'>Failed to update</span>";
			}
		}
	} 


// create array variable to store previous data
$data = array();

$sql_query = "SELECT * FROM yearly_horoscope WHERE id =" . $ID;
$db->sql($sql_query);
$res = $db->getResult();

$sql_query = "SELECT * FROM yearly_horoscope_variant WHERE yearly_horoscope_id =" . $ID;
$db->sql($sql_query);
$resslot = $db->getResult();

if (isset($_POST['btnCancel'])) { ?>
	<script>
		window.location.href = "yearly.php";
	</script>
<?php } ?>
<section class="content-header">
	<h1>
		Edit Yearly Horoscope<small><a href='yearly.php'><i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Yearly Horoscope</a></small></h1>
	<small><?php echo isset($error['update_yearly_horoscope']) ? $error['update_yearly_horoscope'] : ''; ?></small>
	<ol class="breadcrumb">
		<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
	</ol>
</section>
<section class="content">
	<!-- Main row -->

	<div class="row">
		<div class="col-md-12">
		
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
				</div>
				<div class="box-header">
                    <?php echo isset($error['cancelable']) ? '<span class="label label-danger">Till status is required.</span>' : ''; ?>
                </div>
				
				<!-- /.box-header -->
				<!-- form start -->
				<form name="edit_yearly_horoscope_form" method="post" enctype="multipart/form-data">
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
                                                  	 <option value='<?= $value['rasi'] ?>' <?= $value['rasi']==$res[0]['rasi'] ? 'selected="selected"' : '';?>><?= $value['rasi'] ?></option>
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
                                                   	 <option value='<?= $value['year'] ?>' <?= $value['year']==$res[0]['year'] ? 'selected="selected"' : '';?>><?= $value['year'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Main Title</label> <i class="text-danger asterik">*</i><?php echo isset($error['main_title']) ? $error['main_title'] : ''; ?>
										<input type="text" class="form-control" name="main_title" id="main_title" value="<?php echo $res[0]['main_title']?>" required />

                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Main Description</label> <i class="text-danger asterik">*</i><?php echo isset($error['main_description']) ? $error['description'] : ''; ?>
                                        <textarea input type="text" row="2" class="form-control" name="main_description" id="main_description" required ><?php echo $res[0]['main_description']?></textarea>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group packate_div">
                                            <label for="exampleInputEmail1">Janma Nama Nakshathram</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="janma_nama_nakshathram" value="<?php echo $res[0]['janma_nama_nakshathram']?>" required>
                                        </div>
                                    </div>
                            </div>
                            <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Janma Nama Nakshathram Title</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="janma_nama_nakshathram_title" value="<?php echo $res[0]['janma_nama_nakshathram_title']?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Janma Nama Nakshathram Description</label> <i class="text-danger asterik">*</i>
                                            <textarea type="text" rows="2" class="form-control" name="janma_nama_nakshathram_description"required><?php echo $res[0]['janma_nama_nakshathram_description']?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label for="">Adhayam </label> <i class="text-danger asterik">*</i><?php echo isset($error['adhayam']) ? $error['adhayam'] : ''; ?>
                                        <input type="text" class="form-control" name="adhayam" value="<?php echo $res[0]['adhayam']?>" required />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Vyayam </label> <i class="text-danger asterik">*</i><?php echo isset($error['vyayam']) ? $error['vyayam'] : ''; ?>
                                        <input type="text" class="form-control" name="vyayam" value="<?php echo $res[0]['vyayam']?>" required />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Rajapujyam </label> <i class="text-danger asterik">*</i><?php echo isset($error['rajapujyam']) ? $error['rajapujyam'] : ''; ?>
                                        <input type="text" class="form-control" name="rajapujyam" value="<?php echo $res[0]['rajapujyam']?>" required />
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Aavamanam</label> <i class="text-danger asterik">*</i><?php echo isset($error['aavamanam']) ? $error['aavamanam'] : ''; ?>
                                        <input type="text" class="form-control" name="aavamanam" value="<?php echo $res[0]['aavamanam']?>"required />
                                    </div>
                                </div>
                            </div>
                            <br>
							<div id="variations">
							<?php
							$i=0;
							foreach ($resslot as $row) {
								?>
								<div id="packate_div">
									<div class="row">
									    <input type="hidden" class="form-control" name="yearly_horoscope_variant_id[]" id="yearly_horoscope_variant_id" value='<?= $row['id']; ?>' />
										 <div class="col-md-4">
                                        <div class="form-group packate_div">
                                            <label for="exampleInputEmail1">Graha Dhashakalamu</label> <i class="text-danger asterik"></i>
                                            <textarea type="text" rows="2" class="form-control" name="graha_dhashakalamu[]"required><?php echo $row['graha_dhashakalamu'] ?></textarea>
                                        </div>
                                    </div>
									<?php if ($i == 0) { ?>
												<div class='col-md-1'>
													<label>Tab</label>
													<a id="add_packate_variation" title='Add variation' style='cursor: pointer;color:white;'><button class="btn btn-warning">Add more</button></a>
												</div>
											<?php } else { ?>
												<div class="col-md-1">
        <label>Tab</label>
        <a class="remove" data-id="data_delete" style="cursor:pointer;color:white;">
            <button class="btn btn-danger">Remove</button>
        </a>
    </div>
											<?php } ?>
									</div>
								</div>
								<?php $i++; 
							} ?> 
						
						
						</div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Graha Dhashakalamu Title</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="graha_dhashakalamu_title" value="<?php echo $res[0]['graha_dhashakalamu_title']?>" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Graha Dhashakalamu Description</label> <i class="text-danger asterik">*</i>
                                            <textarea type="text" rows="2" class="form-control" name="graha_dhashakalamu_description" required><?php echo $res[0]['graha_dhashakalamu_description']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="">Title</label> <i class="text-danger asterik">*</i>
                                        <input type="text" class="form-control" name="title" value="<?php echo $res[0]['title']?>" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Description</label> <i class="text-danger asterik">*</i>
                                        <textarea type="text" rows="2" class="form-control" name="description"  required><?php echo $res[0]['description']?></textarea>
                                    </div>
                                </div>
                                                </div>
                       
					<div class="box-footer">
						<button type="submit" class="btn btn-primary" name="btnEdit">Update</button>					
					</div>
				</form>
			</div><!-- /.box -->
		</div>
	</div>
</section>

<div class="separator"> </div>
<?php $db->disconnect(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var max_fields = 7;
        var wrapper = $("#packate_div");
        var add_button = $("#add_packate_variation");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
				$(wrapper).append('<div class="row">' +
    '<div class="col-md-4">' +
    '<div class="form-group">' +
    '<label for="graha_dhashakalamu">Graha Dhashakalamu</label>' +
    '<input type="text" class="form-control" name="insert_graha_dhashakalamu[]" />' +
    '</div>' +
    '</div>' +
 
    '<div class="col-md-1" style="display: grid;">' +
    '<label>Tab</label>' +
    '<a class="remove text-danger" style="cursor:pointer;color:white;">' +
    '<button class="btn btn-danger">Remove</button>' +
    '</a>' +
    '</div>' +
    '</div>');
            } else {
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
<script>
    $(document).on('click', '.remove_variation', function() {
        if ($(this).data('id') == 'data_delete') {
            if (confirm('Are you sure? Want to delete this row')) {
                var id = $(this).closest('div.row').find("input[id='yearly_horoscope_variant_id']").val();
                $.ajax({
                    url: 'public/db-operation.php',
                    type: "post",
                    data: 'id=' + id + '&delete_variant=1',
                    success: function(result) {
                        if (result) {
                            location.reload();
                        } else {
                            alert("Variant not deleted!");
                        }
                    }
                });
            }
        } else {
            $(this).closest('.row').remove();
        }
    });
</script>
