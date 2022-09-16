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

	$date = $db->escapeString(($_POST['date']));
	$time1= $db->escapeString($_POST['time1']);
	$time2 = $db->escapeString($_POST['time2']);
	$time3 = $db->escapeString($_POST['time3']);
	$time4= $db->escapeString($_POST['time4']);
	$info= $db->escapeString($_POST['info']);

	
	if (empty($date)) {
		$error['date'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($time1)) {
		$error['time1'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($time2)) {
		$error['time2'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($time3)) {
		$error['time3'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($time4)) {
		$error['time4'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($info)) {
		$error['info'] = " <span class='label label-danger'>Required!</span>";
	}
   
   
   if (!empty($date) && !empty($time1) && !empty($time2) && !empty($time3) && !empty($time4) && !empty($info))
    {
             $sql_query = "UPDATE panchangam SET date='$date',time1='$time1',time2='$time2',time3='$time3',time4='$time4',info='$info' WHERE id =  $ID";
			 $db->sql($sql_query);
			 $res = $db->getResult();
             $update_result = $db->getResult();
			if (!empty($update_result)) {
				$update_result = 0;
			} else {
				$update_result = 1;
			}

			// check update result
			if ($update_result == 1) {
				for ($i = 0; $i < count($_POST['title']); $i++) {
					$panchangam_id = $db->escapeString(($_POST['panchangam_variant_id'][$i]));
					$title = $db->escapeString(($_POST['title'][$i]));
					$description = $db->escapeString(($_POST['description'][$i]));
					$sql = "UPDATE panchangam_variant SET title='$title',description='$description' WHERE id = $panchangam_id";
					$db->sql($sql);

				}
				if (
					isset($_POST['insert_title']) && isset($_POST['insert_description'])
				) {
					for ($i = 0; $i < count($_POST['insert_title']); $i++) {
						$title = $db->escapeString(($_POST['insert_title'][$i]));
						$description = $db->escapeString(($_POST['insert_description'][$i]));
						$sql = "INSERT INTO panchangam_variant (panchangam_id,title,description) VALUES('$ID','$title','$description')";
						$db->sql($sql);

					}

				}

			$error['update_panchangam'] = " <section class='content-header'><span class='label label-success'>Panchangam updated Successfully</span></section>";
			} else {
				$error['update_panchangam'] = " <span class='label label-danger'>Failed to update</span>";
			}
		}
	} 


// create array variable to store previous data
$data = array();

$sql_query = "SELECT * FROM panchangam WHERE id =" . $ID;
$db->sql($sql_query);
$res = $db->getResult();

$sql_query = "SELECT * FROM panchangam_variant WHERE panchangam_id =" . $ID;
$db->sql($sql_query);
$resslot = $db->getResult();

if (isset($_POST['btnCancel'])) { ?>
	<script>
		window.location.href = "panchangam.php";
	</script>
<?php } ?>
<section class="content-header">
	<h1>
		Edit Panchangam<small><a href='products.php'><i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Panchangam</a></small></h1>
	<small><?php echo isset($error['update_panchangam']) ? $error['update_panchangam'] : ''; ?></small>
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
				</div><!-- /.box-header -->
				<!-- form start -->
				<form id="edit_panchangam_form" method="post" enctype="multipart/form-data">
					<div class="box-body">
						   <div class="row">
							    <div class="form-group">
									<div class='col-md-6'>
									          <label for="exampleInputEmail1">Date</label> <i class="text-danger asterik">*</i>
											  <input type="date" class="form-control" name="date" value="<?php echo $res[0]['date']; ?>">

									</div>
								</div>
						   </div>
						   <br>
						   <div class="row">
							    <div class="form-group">
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Time 1</label><i class="text-danger asterik">*</i>
										<input type="time" class="form-control" name="time1" value="<?php echo $res[0]['time1']; ?>">
									 </div>
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Time 2</label><i class="text-danger asterik">*</i>
										<input type="time" class="form-control" name="time2" value="<?php echo $res[0]['time2']; ?>">
									 </div>
								</div>
						   </div>
						   <br>
						   <div class="row">
							    <div class="form-group">
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Time 3</label><i class="text-danger asterik">*</i>
										<input type="time" class="form-control" name="time3" value="<?php echo $res[0]['time3']; ?>">
									 </div>
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Time 4</label><i class="text-danger asterik">*</i>
										<input type="time" class="form-control" name="time4" value="<?php echo $res[0]['time4']; ?>">
									 </div>
								</div>
						   </div>
						   <br>
						   <div class="row">
                                <div class="form-group">
                                    <div class="col-md-10">
                                            <label for="exampleInputEmail1">Info</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="info" value="<?php echo $res[0]['info']; ?>">
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
									<input type="hidden" class="form-control" name="panchangam_variant_id[]" id="panchangam_variant_id" value='<?= $row['id']; ?>' />
									<div class="col-md-4">
											<div class="form-group packate_div">
												<label for="exampleInputEmail1">Title</label> <i class="text-danger asterik">*</i>
												<input type="text" class="form-control" name="title[]" value="<?php echo $row['title'] ?>" required/>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group packate_div">
												<label for="exampleInputEmail1"> Description</label> <i class="text-danger asterik">*</i>
												<input type="text" class="form-control" name="description[]" value="<?php echo $row['description'] ?>" required/>
											</div>
										</div>

										<?php if ($i == 0) { ?>
												<div class='col-md-1'>
													<label>Tab</label>
													<a id="add_packate_variation" title='Add variation of product' style='cursor: pointer;color:white;'><button class="btn btn-warning">Add more</button></a>
												</div>
											<?php } else { ?>
												<div class="col-md-1" style="display: grid;">
													<label>Tab</label>
													<a class="remove_variation text-danger" data-id="data_delete" title="Remove variation of product" style="cursor: pointer;color:white;"><button class="btn btn-danger">Remove</button></a>
												</div>
											<?php } ?>
									</div>
									<?php $i++; } ?> 
								</div>
								

							<hr>
					
					
					
						</div><!-- /.box-body -->
                       
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
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
				$(wrapper).append('<div class="row"><div class="col-md-4"><div class="form-group"><label for="title">Title</label>' +'<input type="text" class="form-control" name="insert_title[]" required /></div></div>'+'<div class="col-md-4"><div class="form-group"><label for="description">Description</label>'+'<input type="text" class="form-control" name="insert_description[]" required /></div></div>'+'<div class="col-md-1" style="display: grid;"><label>Tab</label><a class="remove text-danger" style="cursor:pointer;color:white;"><button class="btn btn-danger">Remove</button></a></div>'+'</div>');
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
                var id = $(this).closest('div.row').find("input[id='product_variant_id']").val();
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

