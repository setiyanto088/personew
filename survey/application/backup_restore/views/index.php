<style type="text/css">
	.dt-body-center {
		text-align: center;
	}
	.dt-body-right {
		text-align: right;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h4 class="page-title" id="title_menu">Backup & Restore</h4>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="card-box" id="div_list_bc">
				<table id="listbc" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th style="width: 5px;">No</th>
							<th>Tanggal Backup</th>
							<th>Nama File</th>
							<th>User</th>
							<th>Group</th>
							<th>Status</th>
							<th style="width: 150px;">Download</th>
							<th style="width: 150px;">Restore</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>

			<div class="card-box" id="div_detail_bc" style="display: none;"></div>
		</div>
	</div>
</div>

<div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content p-0 b-0">
			<div class="panel panel-color panel-primary panel-filled">
				<div class="panel-heading">
					<button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="panel-title"></h3>
				</div>
				<div class="panel-body">
					<p></p>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	$(document).ready(function(){
		$('#div_detail_properties').hide();
		get_list_bc();
	});

	function get_list_bc() {
		$("#listbc").dataTable({
			"processing": true,
			"serverSide": true,
			"ajax": "<?php echo base_url().'backup_restore/list_bc/';?>",
			"searchDelay": 700,
			"responsive": true,
			"lengthChange": false,
			"info": false,
			"bSort": false,
			"dom": 'l<"toolbar">frtip',
			"initComplete": function(){
				$("div.toolbar").prepend(
					'<div class="btn-group pull-left"><a class="btn btn-primary" onClick="backup(<?php echo $this->session->userdata['logged_in']['user_id']; ?>)"><i class="fa fa-building-o"></i> Backup Data </a></div>'
				);
			},
			"columnDefs": [{
				targets: [0],
				className: 'dt-body-center'
			}]
		});
	}

	function add_bc(){
		$('#panel-modal').removeData('bs.modal');
		$('#panel-modal  .panel-body').html('<i class="fa fa-cog fa-spin fa-2x fa-fw"></i> Loading...');
		$('#panel-modal  .panel-body').load('<?php echo base_url('backup_restore/add_bc');?>');
		$('#panel-modal  .panel-title').html('<i class="fa fa-building-o"></i> Add BC Masuk');
		$('#panel-modal').modal({backdrop:'static',keyboard:false},'show');
	}

	function edit_bc(id){
		$('#panel-modal').removeData('bs.modal');
		$('#panel-modal  .panel-body').html('<i class="fa fa-cog fa-spin fa-2x fa-fw"></i> Loading...');
		$('#panel-modal  .panel-body').load('<?php echo base_url('backup_restore/edit_bc/');?>'+"/"+id);
		$('#panel-modal  .panel-title').html('<i class="fa fa-building-o"></i> Edit BC Masuk');
		$('#panel-modal').modal({backdrop:'static',keyboard:false},'show');
	}

	function details_bc(bc_id) {
		$('#title_Menu').html('Detail Bea Cukai');
		$('#div_list_bc').hide();
		$('#div_detail_bc').show();
		$('#div_detail_bc').removeData('');
		$('#div_detail_bc').html('<i class="fa fa-cog fa-spin fa-2x fa-fw"></i> Loading...');
		$('#div_detail_bc').load('<?php echo base_url('backup_restore/detail_bc/');?>'+"/"+bc_id);
	}
		
	function restore(id){
		swal({
			title: 'Restore Data ?',
			text: ' Data di Server akan Hilang dan Diganti dengan Hasil Backup ',
			type: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Ya',
			cancelButtonText: 'Tidak'
		}).then(function () {
			var datapost={
				"id" : id
			};

			$.ajax({
				type: "POST",
				url: "<?php echo base_url();?>backup_restore/restore_data",
				data : JSON.stringify(datapost),
				dataType: 'json',
				contentType: 'application/json; charset=utf-8',
				success: function(response) {
				   swal({
						title: 'Success!',
						text: response.message,
						type: 'success',
						showCancelButton: false,
						confirmButtonText: 'Ok'
					}).then(function () {
						window.location.href = "<?php echo base_url('backup_restore');?>";
					})

					if (response.status == "success") {

					}else {
						swal("Failed!", response.message, "error");
					}
				}
			});
		})
	}
		
		
	function backup(id){
		swal({
			title: 'Backup Data ?',
			text: ' Data Hasil Backup di Simpan di Server ',
			type: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Ya',
			cancelButtonText: 'Tidak'
		}).then(function () {
			var datapost={
				"id" : id
			};

			$.ajax({
				type: "POST",
				url: "<?php echo base_url();?>backup_restore/backup_data",
				data : JSON.stringify(datapost),
				dataType: 'json',
				contentType: 'application/json; charset=utf-8',
				success: function(response) {
				   swal({
						title: 'Success!',
						text: response.message,
						type: 'success',
						showCancelButton: false,
						confirmButtonText: 'Ok'
					}).then(function () {
						window.location.href = "<?php echo base_url('backup_restore');?>";
					})

					if (response.status == "success") {

					}else {
						swal("Failed!", response.message, "error");
					}
				}
			});
		})
	}
</script>