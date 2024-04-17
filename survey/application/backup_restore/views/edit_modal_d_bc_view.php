<!--Parsley-->
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/gentelella-master/vendors/parsleyjs/dist/parsley.min.js"></script>
<style>
	#loading-us{display:none}
	#tick{display:none}

	#loading-mail{display:none}
	#cross{display:none}
</style>

<form class="form-horizontal form-label-left" id="edit_form" role="form" action="<?php echo base_url('bc_masuk/save_edit_detail');?>" method="post" enctype="multipart/form-data" data-parsley-validate>
	<p>Harap isi data yang telah ditandai dengan <code>*</code>, dan masukkan data dengan benar.</p>

	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_brg_bc">Kode Barang BC <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input data-parsley-minlength="4" data-parsley-maxlength="20" type="text" id="kd_brg_bc" name="kd_brg_bc" class="form-control col-md-7 col-xs-12" 
			placeholder="nama properties minimal 4 karakter" value="<?php if(isset($detail[0]['kode_barang_bc'])){ echo $detail[0]['kode_barang_bc']; }?>" autocomplete="off" required="required">
			<span id="loading-us" class="fa fa-spinner fa-spin fa-fw"> Checking kode barang bc...</span>
			<span id="tick"></span>
		</div>
	</div>
	
	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_brg">Kode Barang <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input data-parsley-minlength="4" data-parsley-maxlength="20" type="text" id="kd_brg" name="kd_brg" class="form-control col-md-7 col-xs-12" 
			placeholder="nama properties minimal 4 karakter" value="<?php if(isset($detail[0]['kode_barang'])){ echo $detail[0]['kode_barang']; }?>" autocomplete="off" required="required">
			<span id="loading-us" class="fa fa-spinner fa-spin fa-fw"> Checking kode barang...</span>
			<span id="tick"></span>
		</div>
	</div>
	
	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="uom_id">UOM <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<select class="form-control" id="uom_id" name="uom_id" style="width: 100%" required>
				<option value="" >-- Select UOM --</option>
				<?php foreach($uom as $key) { ?>
					<option value="<?php echo $key['id_uom']; ?>" <?php if(isset($detail[0]['uom'])) { if( $detail[0]['uom'] == $key['id_uom'] ) { echo "selected"; } }?>>
						<?php echo $key['uom_name']; ?>
					</option>
				<?php } ?>
			</select>
		</div>
	</div>
	
	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="valas_id">Valas <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<select class="form-control" id="valas_id" name="valas_id" style="width: 100%" required>
				<option value="" >-- Select Valas --</option>
				<?php foreach($valas as $key) { ?>
					<option value="<?php echo $key['valas_id']; ?>"<?php if(isset($detail[0]['valas'])) { if( $detail[0]['valas'] == $key['valas_id'] ) { echo "selected"; } }?>>
						<?php echo $key['nama_valas']; ?>
					</option>
				<?php } ?>
			</select>
		</div>
	</div>
	
	<?php /*<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock_id">Stock <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<select class="form-control" id="stock_id" name="stock_id" style="width: 100%" required>
				<option value="" >-- Select Stock --</option>
				<?php foreach($stock as $key) { ?>
					<option value="<?php echo $key['id']; ?>">
						<?php echo $key['stock']; ?>
					</option>
				<?php } ?>
			</select>
		</div>
	</div>*/ ?>
	
	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Price <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input type="text" id="price" name="price" class="form-control col-md-7 col-xs-12" placeholder="Price" 
			value="<?php if(isset($detail[0]['price'])){ echo $detail[0]['price']; }?>" autocomplete="off" required="required" onkeypress="javascript:return isNumber(event)">
		</div>
	</div>
	
	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="weight">Weight <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input type="text" id="weight" name="weight" class="form-control col-md-7 col-xs-12" placeholder="Weight" 
			value="<?php if(isset($detail[0]['weight'])){ echo $detail[0]['weight']; }?>" autocomplete="off" required="required" onkeypress="javascript:return isNumber(event)">
		</div>
	</div>
	
	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="qty">Qty <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input type="text" id="qty" name="qty" class="form-control col-md-7 col-xs-12" placeholder="Qty"
			value="<?php if(isset($detail[0]['qty'])){ echo $detail[0]['qty']; }?>" autocomplete="off" required="required" onkeypress="javascript:return isNumber(event)">
		</div>
	</div>
	
	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="submit"></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<button id="btn-submit" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5" type="submit">Tambah Detail</button>
			<input type="hidden" id="dbc_id" name="dbc_id" value="<?php if(isset($detail[0]['id'])){ echo $detail[0]['id']; }?>">
			<input type="hidden" id="bc_id" name="bc_id" value="<?php if(isset($detail[0]['id_bc'])){ echo $detail[0]['id_bc']; }?>">
		</div>
	</div>
</form>
<!-- /page content -->

<script type="text/javascript">
	$(document).ready(function() {
		$('form').parsley();
		$('[data-toggle="tooltip"]').tooltip();
		$('#bc_id').val(id_bc);
	});

	var last_kd_brg_bc = $('#kd_brg_bc').val();
	$('#kd_brg_bc').on('input',function(event) {
		if($('#kd_brg_bc').val() != last_kd_brg_bc) {
			kd_brg_bc_check();
		}else {
			$('#kd_brg_bc').removeAttr("style");
			$('#tick').empty();
			$('#tick').hide();
			$('#loading-us').hide();
		}
	});
	
	function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }  
	
	function kd_brg_bc_check() {
		var kd_brg_bc = $('#kd_brg_bc').val();
		if(kd_brg_bc.length > 3) {
			var post_data = {
				'kd_brg_bc': kd_brg_bc
			};

			$('#tick').empty();
			$('#tick').hide();
			$('#loading-us').show();
			jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url('bc_masuk/check_kd_brg_bc');?>",
				data: post_data,
				cache: false,
				success: function(response){
					if(response.success == true){
						$('#kd_brg_bc').css('border', '3px #090 solid');
						$('#loading-us').hide();
						$('#tick').empty();
						$("#tick").append('<span class="fa fa-check"> '+response.message+'</span>');
						$('#tick').show();
					}else {
						$('#kd_brg_bc').css('border', '3px #C33 solid');
						$('#loading-us').hide();
						$('#tick').empty();
						$("#tick").append('<span class="fa fa-close"> '+response.message+'</span>');
						$('#tick').show();
					}
				}
			});
		}else {
			$('#kd_brg_bc').css('border', '3px #C33 solid');
			$('#loading-us').hide();
			$('#tick').empty();
			$("#tick").append('<span class="fa fa-close"> This value is too short. It should have 4 characters or more</span>');
			$('#tick').show();
		}
	}
	
	$('#edit_form').on('submit',(function(e) {
		$('#btn-submit').attr('disabled','disabled');
		$('#btn-submit').text("Memasukkan data...");
		e.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			type:'POST',
			url: $(this).attr('action'),
			data:formData,
			cache:false,
			contentType: false,
			processData: false,
			success: function(response) {
				if (response.success == true) {
					swal({
						title: 'Success!',
						text: response.message,
						type: 'success',
						showCancelButton: false,
						confirmButtonText: 'Ok'
					}).then(function () {
						redrawData();
						$('#panel-modal').modal('hide');
					})
				}else {
					$('#btn-submit').removeAttr('disabled');
					$('#btn-submit').text("Edit Detail");
					swal("Failed!", response.message, "error");
				}
			}
		}).fail(function(xhr, status, message) {
			$('#btn-submit').removeAttr('disabled');
			$('#btn-submit').text("Edit Detail");
			swal("Failed!", "Invalid respon, silahkan cek koneksi.", "error");
		});
	}));
</script>
