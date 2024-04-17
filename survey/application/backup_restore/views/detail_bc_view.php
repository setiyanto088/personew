<script type="text/javascript" src="<?php echo base_url('assets'); ?>/gentelella-master/vendors/parsleyjs/dist/parsley.min.js"></script>
<style>
	#loading-us{display:none}
	#tick{display:none}

	#loading-mail{display:none}
	#cross{display:none}
</style>

<div class="btn-group pull-left">
	<button class="btn btn-info" type="button" data-toggle="tooltip" data-placement="top" title="Back" onClick="back_bc()">
		<i class="fa fa-arrow-left"></i>
	</button>
</div>

<table id="list_detail_bc" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th style="width: 5px;">No</th>
			<th>Kode Barang BC</th>
			<th>Kode Barang</th>
			<th style="text-align: left; width: 5px;">UOM</th>
			<th style="text-align: left; width: 5px;">Valas</th>
			<th style="text-align: left; width: 10%;">Price</th>
			<th style="text-align: left; width: 8%;">Weight</th>
			<th style="text-align: left; width: 8%;">Qty</th>
			<!-- <th style="width: 150px;">Option</th> -->
		</tr>
	</thead>
	<tbody></tbody>
</table>

<script type="text/javascript">
	var id_bc = "<?php if(isset($bc_id)){ echo $bc_id; } ?>";
	var table_d_bc;
	$(document).ready(function() {
		get_detail_bc();
	});

	function get_detail_bc() {
		table_d_bc = $("#list_detail_bc").dataTable({
			"processing": true,
			"serverSide": true,
			"ajax": "<?php echo base_url().'bc_masuk/list_detail_bc/'; ?>" + id_bc,
			"searchDelay": 700,
			"responsive": true,
			"lengthChange": false,
			"info": false,
			"bSort": false,
			"dom": 'l<"toolbar">frtip',
			// "initComplete": function() {
			// 	$("#div_detail_bc div.toolbar").prepend(
			// 		'<div class="btn-group pull-left">'+
			// 			'<a class="btn btn-primary" onClick="add_detail_bc()">'+
			// 				'<i class="fa fa-cogs"></i> Add Detail BC Masuk'+
			// 			'</a>'+
			// 		'</div>'
			// 	);
			// },
			"columnDefs": [{
				targets: [0],
				className: 'dt-body-center'
			},{
				targets: [3,4,5,6,7],
				className: 'dt-body-right'
			}]
		});
	}

	function add_detail_bc() {
		$('#panel-modal').removeData('bs.modal');
		$('#panel-modal  .panel-body').html('<i class="fa fa-cog fa-spin fa-2x fa-fw"></i> Loading...');
		$('#panel-modal  .panel-body').load('<?php echo base_url('bc_masuk/add_detail_bc');?>');
		$('#panel-modal  .panel-title').html('<i class="fa fa-cogs"></i> Add Detail BC');
		$('#panel-modal').modal({backdrop:'static',keyboard:false},'show');
	}

	function edit_detail_bc(id) {
		$('#panel-modal').removeData('bs.modal');
		$('#panel-modal  .panel-body').html('<i class="fa fa-cog fa-spin fa-2x fa-fw"></i> Loading...');
		$('#panel-modal  .panel-body').load('<?php echo base_url('bc_masuk/edit_detail_bc/');?>'+"/"+id);
		$('#panel-modal  .panel-title').html('<i class="fa fa-cogs"></i> Edit Detail BC');
		$('#panel-modal').modal({backdrop:'static',keyboard:false},'show');
	}

	function delete_detail_bc(id) {
		swal({
			title: 'Yakin akan Menghapus ?',
			text: 'data tidak dapat dikembalikan bila sudah dihapus !',
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
				url: "<?php echo base_url();?>bc_masuk/delete_detail_bc",
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
						redrawData();
					})

					if (response.status == "success") {

					}else {
						swal("Failed!", response.message, "error");
					}
				}
			});
		})
	}

	function redrawData() {
		table_d_bc.fnClearTable();
		table_d_bc.fnDestroy();
		get_detail_bc();
	}

	function back_bc() {
		$('#title_Menu').html('Bea Cukai');
		$('#div_list_bc').show();
		$('#div_detail_bc').hide();
		$('#div_detail_bc').html('');
	}
</script>