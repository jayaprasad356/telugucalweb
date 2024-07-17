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
	$sunrise= $db->escapeString($_POST['sunrise']);
	$sunset = $db->escapeString($_POST['sunset']);
	$moonrise = $db->escapeString($_POST['moonrise']);
	$moonset= $db->escapeString($_POST['moonset']);
	$text1 = $db->escapeString($_POST['text1']);
	$text2 = $db->escapeString($_POST['text2']);
	$text3 = $db->escapeString($_POST['text3']);
	$text4 = $db->escapeString($_POST['text4']);
	$text5 = $db->escapeString($_POST['text5']);
	$text6 = $db->escapeString($_POST['text6']);
	$festivals= $db->escapeString($_POST['festivals']);
	$thidhi = $db->escapeString($_POST['thidhi']);
	$nakshatram = $db->escapeString($_POST['nakshatram']);
	$yogam = $db->escapeString($_POST['yogam']);
	$karanam = $db->escapeString($_POST['karanam']);
	$abhijith_muhurtham = $db->escapeString($_POST['abhijith_muhurtham']);
	$bhrama_muhurtham = $db->escapeString($_POST['bhrama_muhurtham']);
	$amrutha_kalam = $db->escapeString($_POST['amrutha_kalam']);
	$rahukalam = $db->escapeString($_POST['rahukalam']);
	$yamakandam = $db->escapeString($_POST['yamakandam']);
	$dhurmuhurtham = $db->escapeString($_POST['dhurmuhurtham']);
	$varjyam = $db->escapeString($_POST['varjyam']);
	$gulika = $db->escapeString($_POST['gulika']);
	$hc1 = $db->escapeString($_POST['hc1']);
	$hc2 = $db->escapeString($_POST['hc2']);
	$hc3 = $db->escapeString($_POST['hc3']);
	$hc4 = $db->escapeString($_POST['hc4']);
	$hc5 = $db->escapeString($_POST['hc5']);
	$hc6 = $db->escapeString($_POST['hc6']);
	$hc7 = $db->escapeString($_POST['hc7']);
	$hc8 = $db->escapeString($_POST['hc8']);
	$hc9 = $db->escapeString($_POST['hc9']);
	$hc10 = $db->escapeString($_POST['hc10']);
	$hc11 = $db->escapeString($_POST['hc11']);
	$hc12 = $db->escapeString($_POST['hc12']);


	if (empty($date)) {
		$error['date'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($sunrise)) {
		$error['sunrise'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($sunset)) {
		$error['sunset'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($moonrise)) {
		$error['moonrise'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($moonset)) {
		$error['moonset'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($text1)) {
		$error['text1'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($text2)) {
		$error['text2'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($text3)) {
		$error['text3'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($text4)) {
		$error['text4'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($text5)) {
		$error['text5'] = " <span class='label label-danger'>Required!</span>";
	}
	if (empty($text6)) {
		$error['text6'] = " <span class='label label-danger'>Required!</span>";
	}

	
   
   if (!empty($date) && !empty($sunrise) && !empty($sunset) && !empty($moonrise) && !empty($moonset) && !empty($text1) && !empty($text2) && !empty($text3) && !empty($text4) && !empty($text5) && !empty($text6) )
    {        
		    
			$sql_query = "UPDATE panchangam SET date = '$date',sunrise = '$sunrise',sunset = '$sunset',moonrise = '$moonrise',moonset = '$moonset',text1 = '$text1',text2 = '$text2',text3 = '$text3',text4 = '$text4',text5 = '$text5',text6 = '$text6',festivals='$festivals',thidhi='$thidhi',nakshatram='$nakshatram',yogam='$yogam',karanam='$karanam',abhijith_muhurtham='$abhijith_muhurtham',bhrama_muhurtham='$bhrama_muhurtham',amrutha_kalam='$amrutha_kalam',rahukalam='$rahukalam',yamakandam='$yamakandam',dhurmuhurtham='$dhurmuhurtham',varjyam='$varjyam',gulika='$gulika',hc1 = '$hc1',hc2 = '$hc2',hc3 = '$hc3',hc4 = '$hc4',hc5 = '$hc5',hc6 = '$hc6',hc7 = '$hc7',hc8 = '$hc8',hc9 = '$hc9',hc10 = '$hc10',hc11 = '$hc11',hc12 = '$hc12' WHERE id = $ID";
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
				// for ($i = 0; $i < count($_POST['title']); $i++) {
				// 	$panchangam_id = $db->escapeString(($_POST['panchangam_variant_id'][$i]));
				// 	$title = $db->escapeString(($_POST['title'][$i]));
				// 	$description = $db->escapeString(($_POST['description'][$i]));
				// 	$sql = "UPDATE panchangam_variant SET title='$title',description='$description' WHERE id = $panchangam_id";
				// 	$db->sql($sql);

				// }
				// if (
				// 	isset($_POST['insert_title']) && isset($_POST['insert_description'])
				// ) {
				// 	for ($i = 0; $i < count($_POST['insert_title']); $i++) {
				// 		$title = $db->escapeString(($_POST['insert_title'][$i]));
				// 		$description = $db->escapeString(($_POST['insert_description'][$i]));
				// 		if (!empty($title) || !empty($description)) {
				// 			$sql = "INSERT INTO panchangam_variant (panchangam_id,title,description) VALUES('$ID','$title','$description')";
				// 			$db->sql($sql);

				// 		}


				// 	}

				// }

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
		Edit Panchangam<small><a href='panchangam.php'><i class='fa fa-angle-double-left'></i>&nbsp;&nbsp;&nbsp;Back to Panchangam</a></small></h1>
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
				</div>
				<div class="box-header">
                    <?php echo isset($error['cancelable']) ? '<span class="label label-danger">Till status is required.</span>' : ''; ?>
                </div>
				
				<!-- /.box-header -->
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
									<div class='col-md-4'>
											<label for="exampleInputEmail1">Text1</label> <i class="text-danger asterik">*</i>
											<input type="text" class="form-control" name="text1" value="<?php echo $res[0]['text1']; ?>">
									</div>
									<div class='col-md-4'>
											<label for="exampleInputEmail1">Text2</label> <i class="text-danger asterik">*</i>
											<input type="text" class="form-control" name="text2" value="<?php echo $res[0]['text2']; ?>">
									</div>
									<div class='col-md-4'>
											<label for="exampleInputEmail1">Text3</label> <i class="text-danger asterik">*</i>
											<input type="text" class="form-control" name="text3" value="<?php echo $res[0]['text3']; ?>">
									</div>
								</div>
						   </div>
						   <br>
						   <div class="row">
								<div class="form-group">
									<div class='col-md-4'>
											<label for="exampleInputEmail1">Text4</label> <i class="text-danger asterik">*</i>
											<input type="text" class="form-control" name="text4" value="<?php echo $res[0]['text4']; ?>">
									</div>
									<div class='col-md-4'>
											<label for="exampleInputEmail1">Text5</label> <i class="text-danger asterik">*</i>
											<input type="text" class="form-control" name="text5" value="<?php echo $res[0]['text5']; ?>">
									</div>
									<div class='col-md-4'>
											<label for="exampleInputEmail1">Text6</label> <i class="text-danger asterik">*</i>
											<input type="text" class="form-control" name="text6" value="<?php echo $res[0]['text6']; ?>">
									</div>
								</div>
						   </div>
						   <br>
						   <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4">
                                            <label for="exampleInputEmail1">Festivals</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="festivals" value="<?php echo $res[0]['festivals']; ?>">
                                    </div>

                                 </div>
                            </div>
                            <br>
						   <div class="row">
							    <div class="form-group">
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Sunrise</label><i class="text-danger asterik">*</i>
										<input type="text" class="form-control" name="sunrise" value="<?php echo $res[0]['sunrise']; ?>">
									 </div>
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Sunset</label><i class="text-danger asterik">*</i>
										<input type="text" class="form-control" name="sunset" value="<?php echo $res[0]['sunset']; ?>">
									 </div>
								</div>
						   </div>
						   <br>
						   <div class="row">
							    <div class="form-group">
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Moonrise</label><i class="text-danger asterik">*</i>
										<input type="text" class="form-control" name="moonrise" value="<?php echo $res[0]['moonrise']; ?>">
									 </div>
									 <div class="col-md-4">
										<label for="exampleInputEmail1">Moonset</label><i class="text-danger asterik">*</i>
										<input type="text" class="form-control" name="moonset" value="<?php echo $res[0]['moonset']; ?>">
									 </div>
								</div>
						   </div>
						   <br>
						   <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Thidhi</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="thidhi" value="<?php echo $res[0]['thidhi']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Nakshathram</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="nakshatram" value="<?php echo $res[0]['nakshatram']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Yogam</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="yogam" value="<?php echo $res[0]['yogam']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Karanam</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="karanam" value="<?php echo $res[0]['karanam']; ?>">
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
								   <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Abhijith Muhurtham</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="abhijith_muhurtham"  value="<?php echo $res[0]['abhijith_muhurtham']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Bhrama Muhurtham</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="bhrama_muhurtham"  value="<?php echo $res[0]['bhrama_muhurtham']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Amrutha Kalam</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="amrutha_kalam" value="<?php echo $res[0]['amrutha_kalam']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Rahukalam</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="rahukalam" value="<?php echo $res[0]['rahukalam']; ?>">
                                    </div>
                                 </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
								    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Yamagandam</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="yamakandam" value="<?php echo $res[0]['yamakandam']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Dhurmuhurtham</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="dhurmuhurtham" value="<?php echo $res[0]['dhurmuhurtham']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Varjyam</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="varjyam" value="<?php echo $res[0]['varjyam']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Gulika</label> <i class="text-danger asterik">*</i>
                                            <input type="text" class="form-control" name="gulika" value="<?php echo $res[0]['varjyam']; ?>">
                                    </div>
                                 </div>
                            </div>
							<br>
							<h3 class="text-center" style="font-weight:bold;color:Blue;">Hora Chakram</h3>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo1</label>
                                            <input type="text" class="form-control" name="hc1" value="<?php echo $res[0]['hc1']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo2</label>
                                            <input type="text" class="form-control" name="hc2" value="<?php echo $res[0]['hc2']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo3</label>
                                            <input type="text" class="form-control" name="hc3" value="<?php echo $res[0]['hc3']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo4</label>
                                            <input type="text" class="form-control" name="hc4" value="<?php echo $res[0]['hc4']; ?>">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo5</label>
                                            <input type="text" class="form-control" name="hc5" value="<?php echo $res[0]['hc5']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo6</label>
                                            <input type="text" class="form-control" name="hc6" value="<?php echo $res[0]['hc6']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo7</label>
                                            <input type="text" class="form-control" name="hc7" value="<?php echo $res[0]['hc7']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo8</label>
                                            <input type="text" class="form-control" name="hc8" value="<?php echo $res[0]['hc8']; ?>">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo9</label> 
                                            <input type="text" class="form-control" name="hc9" value="<?php echo $res[0]['hc9']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo10</label>
                                            <input type="text" class="form-control" name="hc10" value="<?php echo $res[0]['hc10']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo11</label>
                                            <input type="text" class="form-control" name="hc11" value="<?php echo $res[0]['hc11']; ?>">
                                    </div>
                                    <div class="col-md-3">
                                            <label for="exampleInputEmail1">Horo12</label>
                                            <input type="text" class="form-control" name="hc12" value="<?php echo $res[0]['hc12']; ?>">
                                    </div>
                                </div>
                            </div>
                            <br>
						 <!-- <div id="variations">
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
												<textarea type="text" rows="2" class="form-control" name="description[]" required><?php echo $row['description'] ?></textarea>
											</div>
										</div>

										<?php if ($i == 0) { ?>
												<div class='col-md-1'>
													<label>Tab</label>
													<a id="add_packate_variation" title='Add variation of panchangam' style='cursor: pointer;color:white;'><button class="btn btn-warning">Add more</button></a>
												</div>
											<?php } else { ?>
												<div class="col-md-1">
													<label>Tab</label>
													<a class="remove_variation text-danger" data-id="data_delete" title="Remove variation of panchangam" style="cursor: pointer;color:white;"><button class="btn btn-danger">Remove</button></a>
												</div>
											<?php } ?>
									</div>
								</div>
								<?php $i++; 
							} ?>  -->
					</div><!-- /.box-body -->
                       
					<div class="box-footer">
						<button type="submit" class="btn btn-primary" name="btnEdit">Update</button>					
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>

<div class="separator"> </div>
<?php $db->disconnect(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script>
    $(document).ready(function () {
        var max_fields = 7;
        var wrapper = $("#packate_div");
        var add_button = $("#add_packate_variation");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
				$(wrapper).append('<div class="row"><div class="col-md-4"><div class="form-group"><label for="title">Title</label>' +'<input type="text" class="form-control" name="insert_title[]" /></div></div>'+'<div class="col-md-4"><div class="form-group"><label for="description">Description</label>'+'<textarea type="text" rows="2" class="form-control" name="insert_description[]"></textarea></div></div>'+'<div class="col-md-1" style="display:grid;"><label>Tab</label><a class="remove text-danger" style="cursor:pointer;color:white;"><button class="btn btn-danger">Remove</button></a></div>'+'</div>');
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
                var id = $(this).closest('div.row').find("input[id='panchangam_variant_id']").val();
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
</script> -->

