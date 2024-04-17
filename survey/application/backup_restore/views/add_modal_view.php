<!--Parsley-->
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/gentelella-master/vendors/parsleyjs/dist/parsley.min.js"></script>
<style>
	#nopendaftaran_loading-us{display:none}
	#nopendaftaran_tick{display:none}

	#nopengajuan_loading-us{display:none}
	#nopengajuan_tick{display:none}
</style>
	
<form class="form-horizontal form-label-left" id="add_form" role="form" action="<?php echo base_url('bc_masuk/save_bc');?>" method="post" enctype="multipart/form-data" data-parsley-validate>
	<p>Harap isi data yang telah ditandai dengan <code>*</code>, dan masukkan data dengan benar.</p>

	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_bc">Jenis BC <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<select class="form-control" id="jenis_bc" name="jenis_bc" style="width: 100%" required>
				<option value="" >-- Select Jenis --</option>
				<?php foreach($jenis_bc as $key) { ?>
					<option value="<?php echo $key['id']; ?>" ><?php echo $key['jenis_bc']; ?></option>
				<?php } ?>
			</select>
			<input type="hidden" id="type_text" name="type_text" value="">
		</div>
	</div>

	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nopendaftaran">No Pendaftaran <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input data-parsley-minlength="4" data-parsley-maxlength="100" type="number" id="nopendaftaran" name="nopendaftaran" class="form-control col-md-7 col-xs-12" placeholder="no pendaftaran minimal 4 karakter" autocomplete="off" required="required">
			<span id="nopendaftaran_loading-us" class="fa fa-spinner fa-spin fa-fw"> Checking No Pendaftaran...</span>
			<span id="nopendaftaran_tick"></span>
		</div>
	</div>

	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nopengajuan">No Pengajuan <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input data-parsley-minlength="4" data-parsley-maxlength="100" type="text" id="nopengajuan" name="nopengajuan" class="form-control col-md-7 col-xs-12" placeholder="no pengajuan minimal 4 karakter" autocomplete="off" required="required">
			<span id="nopengajuan_loading-us" class="fa fa-spinner fa-spin fa-fw"> Checking No Pengajuan...</span>
			<span id="nopengajuan_tick"></span>
		</div>
	</div>

	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tglpengajuan">Tanggal Pengajuan <span class="required"><sup>*</sup></span></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input data-parsley-maxlength="100" type="text" id="tglpengajuan" name="tglpengajuan" class="form-control col-md-7 col-xs-12" placeholder="tanggal pengajuan" autocomplete="off" required="required">
		</div>
	</div>

	<div class="item form-group has-feedback">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="file_bc">File</label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<input type="file" class="form-control" id="file_bc" name="file_bc" data-height="110" accept=".pdf, .txt, .doc, .docx"/>
			<span id="file_bc_tick">Hanya format file pdf,txt,doc,docx dengan besaran max 10Mb yang diterima.</span>
		</div>
	</div>

	<div class="item form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="submit"></label>
		<div class="col-md-8 col-sm-6 col-xs-12">
			<button id="btn-submit" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5" type="submit">Tambah BC</button>
		</div>
	</div>
</form>
<!-- /page content -->

<script type="text/javascript">
	$(document).ready(function() {
		$('form').parsley();
		$('[data-toggle="tooltip"]').tooltip();
		$('#tglpengajuan').datepicker({
			format: "dd/M/yyyy",
			autoclose: true,
			todayHighlight: true
		});

		$('#jenis_bc').change(function() {
			if(this.options[this.selectedIndex].value != '') $('#type_text').val(this.options[this.selectedIndex].text);
			else $('#type_text').val('');
		});

		$('#file_bc').bind('change', function() {
			if(this.files[0].size >= 9437184) {
				$('#file_bc').css('border', '3px #C33 solid');
				$('#file_bc_tick').empty();
				$("#file_bc_tick").append('<span class="fa fa-close"> Ukuran File Lebih dari 9Mb</span>');
				$('#file_bc_tick').show();
			}else {
				$('#file_bc').removeAttr("style");
				$('#file_bc_tick').empty();
				$("#file_bc_tick").append('Hanya format file pdf,txt,doc,docx dengan besaran max 10Mb yang diterima.');
				$('#file_bc_tick').show();
			}
		});
	});

	var last_nopendaftaran = $('#nopendaftaran').val();
	$('#nopendaftaran').on('input',function(event) {
		if($('#nopendaftaran').val() != last_nopendaftaran) {
			nopendaftaran_check();
		}
	});

	function nopendaftaran_check() {
		var nopendaftaran = $('#nopendaftaran').val();
		if(nopendaftaran.length > 3) {
			var post_data = {
				'nopendaftaran': nopendaftaran
			};

			$('#nopendaftaran_tick').empty();
			$('#nopendaftaran_tick').hide();
			$('#nopendaftaran_loading-us').show();
			jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url('bc_masuk/check_nopendaftaran');?>",
				data: post_data,
				cache: false,
				success: function(response){
					if(response.success == true){
						$('#nopendaftaran').css('border', '3px #090 solid');
						$('#nopendaftaran_loading-us').hide();
						$('#nopendaftaran_tick').empty();
						$("#nopendaftaran_tick").append('<span class="fa fa-check"> '+response.message+'</span>');
						$('#nopendaftaran_tick').show();
					}else {
						$('#nopendaftaran').css('border', '3px #C33 solid');
						$('#nopendaftaran_loading-us').hide();
						$('#nopendaftaran_tick').empty();
						$("#nopendaftaran_tick").append('<span class="fa fa-close"> '+response.message+'</span>');
						$('#nopendaftaran_tick').show();
					}
				}
			});
		}else {
			$('#nopendaftaran').css('border', '3px #C33 solid');
			$('#nopendaftaran_loading-us').hide();
			$('#nopendaftaran_tick').empty();
			$("#nopendaftaran_tick").append('<span class="fa fa-close"> This value is too short. It should have 4 characters or more</span>');
			$('#nopendaftaran_tick').show();
		}
	}

	var last_nopengajuan = $('#nopengajuan').val();
	$('#nopengajuan').on('input',function(event) {
		if($('#nopengajuan').val() != last_nopengajuan) {
			nopengajuan_check();
		}
	});

	function nopengajuan_check() {
		var nopengajuan = $('#nopengajuan').val();
		if(nopengajuan.length > 3) {
			var post_data = {
				'nopengajuan': nopengajuan
			};

			$('#nopengajuan_tick').empty();
			$('#nopengajuan_tick').hide();
			$('#nopengajuan_loading-us').show();
			jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url('bc_masuk/check_nopengajuan');?>",
				data: post_data,
				cache: false,
				success: function(response){
					if(response.success == true){
						$('#nopengajuan').css('border', '3px #090 solid');
						$('#nopengajuan_loading-us').hide();
						$('#nopengajuan_tick').empty();
						$("#nopengajuan_tick").append('<span class="fa fa-check"> '+response.message+'</span>');
						$('#nopengajuan_tick').show();
					}else {
						$('#nopengajuan').css('border', '3px #C33 solid');
						$('#nopengajuan_loading-us').hide();
						$('#nopengajuan_tick').empty();
						$("#nopengajuan_tick").append('<span class="fa fa-close"> '+response.message+'</span>');
						$('#nopengajuan_tick').show();
					}
				}
			});
		}else {
			$('#nopengajuan').css('border', '3px #C33 solid');
			$('#nopengajuan_loading-us').hide();
			$('#nopengajuan_tick').empty();
			$("#nopengajuan_tick").append('<span class="fa fa-close"> This value is too short. It should have 4 characters or more</span>');
			$('#nopengajuan_tick').show();
		}
	}

	$('#add_form').on('submit',(function(e) {
		$('#btn-submit').attr('disabled','disabled');
		$('#btn-submit').text("Memasukkan data...");
		e.preventDefault();
		var formData = new FormData(this);

		if($('#file_bc')[0].files.length > 0) {
			if($('#file_bc')[0].files[0].size <= 9437184) {
				save_Form(formData, $(this).attr('action'));
			}else {
				$('#btn-submit').removeAttr('disabled');
				$('#btn-submit').text("Tambah BC");
				swal("Failed!", "Ukuran File Terlalu besar, silahkan cek kembali", "error");
			}
		}else {
			save_Form(formData, $(this).attr('action'));
		}
	}));

	function save_Form(formData, url) {
		$.ajax({
			type:'POST',
			url: url,
			data: formData,
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
						window.location.href = "<?php echo base_url('bc_masuk');?>";
					})
				}else {
					$('#btn-submit').removeAttr('disabled');
					$('#btn-submit').text("Tambah BC");
					swal("Failed!", response.message, "error");
				}
			}
		}).fail(function(xhr, status, message) {
			$('#btn-submit').removeAttr('disabled');
			$('#btn-submit').text("Tambah BC");
			swal("Failed!", "Invalid respon, silahkan cek koneksi.", "error");
		});
	}
</script>
