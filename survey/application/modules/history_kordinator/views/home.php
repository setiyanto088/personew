<style>
	/* Datepicker */
	.datepicker.datepicker-dropdown,
	.datepicker.datepicker-inline {
		padding: 10;
		width: 100%;
		max-width: 200px;
		min-width: 250px;
		margin-top;
		100px;

		.datepicker-days {
			padding: 0;

			table.table-condensed {
				width: 100%;

				thead {
					tr {
						th {
							text-align: center;
							padding: 0.5rem 0;

							&.prev {
								color: $body-color;
								padding-bottom: 1rem;
								padding-top: 1rem;
								background: $white;
							}

							&.datepicker-switch {
								color: $body-color;
								background: $white;
								padding-bottom: 1rem;
								padding-top: 1rem;
								font-size: 1rem;
								font-weight: 600;
							}

							&.next {
								color: $body-color;
								padding-bottom: 1rem;
								padding-top: 1rem;
								background: $white;
							}

							&.dow {
								font-family: $type1;
								color: $body-color;
								font-size: 0.875rem;
								font-weight: initial;
							}
						}
					}
				}

				tbody {
					position: relative;
					top: 13px;

					td {
						text-align: center;

						&.day {
							font-size: 0.9375rem;
							padding: 0.5rem 0;
							color: $body-color;

							&:hover {
								background: $white;
							}

							&.active {
								color: #fff;
								background: transparent;
								position: relative;
								z-index: 1;

								&:before {
									content: "";
									width: 28px;
									height: 28px;
									background: theme-color(success);
									@include border-radius(4px);
									display: block;
									margin: auto;
									vertical-align: middle;
									position: absolute;
									top: 6px;
									z-index: -1;
									left: 0;
									right: 0;
								}
							}

							&.today {
								color: #fff;
								background: transparent;
								position: relative;
								z-index: 1;

								&:before {
									content: "";
									width: 28px;
									height: 28px;
									background: theme-color(primary);
									@include border-radius(4px);
									box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
									-webkit-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
									-moz-box-shadow: 3px 3px 6px 0 rgba(147, 127, 201, 0.43);
									display: block;
									margin: auto;
									vertical-align: middle;
									position: absolute;
									top: 6px;
									z-index: -1;
									left: 0;
									right: 0;
								}
							}
						}

						&.old.day {
							color: darken(color(gray-lightest), 4.5%);
						}

						&.new.day {}

						&.range-start,
						&.range-end {
							background: transparent;
							position: relative;

							&::before {
								content: "";
								width: 28px;
								height: 28px;
								background: rgba(theme-color(success), .2);
								border-radius: 4px;
								display: block;
								margin: auto;
								vertical-align: middle;
								position: absolute;
								top: 6px;
								z-index: -1;
								left: 0;
								right: 0;
							}
						}

						&.range {
							position: relative;
							background: transparent;

							&::before {
								content: "";
								width: 28px;
								height: 28px;
								background: #eee;
								border-radius: 4px;
								display: block;
								margin: auto;
								vertical-align: middle;
								position: absolute;
								top: 6px;
								z-index: -1;
								left: 0;
								right: 0;
							}
						}

					}
				}
			}
		}
	}

	.datepicker.datepicker-inline {
		width: 100%;
		max-width: 100%;
		min-width: 250px;

		thead {
			tr {
				th {
					&.prev {
						color: grey;
						padding-bottom: 0.5rem;
						padding-top: 0.5rem;
					}

					&.datepicker-switch {
						color: theme-color(primary);
						padding-bottom: 0.5rem;
						padding-top: 0.5rem;
					}

					&.next {
						color: grey;
						padding-bottom: 0.5rem;
						padding-top: 0.5rem;
					}

					&.dow {}
				}
			}
		}
	}

	.datepicker {
		>div {
			display: initial;
			padding: 0.375rem 0.75rem;
			margin-bottom: 0;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #495057;
			text-align: center;
			white-space: nowrap;
			border-radius: 2px;
		}

		&.input-group {
			border: 1px solid $border-color;
			padding: 0;

			.form-control {
				border: none;
			}
		}
	}

	.datepicker-dropdown {
		&:after {
			border-bottom-color: $dropdown-bg;
		}

		&:before {
			border-bottom-color: $border-color;
		}

		&.datepicker-orient-top {

			&:before,
			&:after {
				top: auto;
			}

			&:after {
				border-top-color: $dropdown-bg;
			}

			&:before {
				border-top-color: $border-color;
			}
		}
	}
</style>
<style>
	body {
		font-family: "Open Sans", sans-serif;
		line-height: 1.25;
		background-color: #fafafa;
	}

	#table_resp {
		border: 1px solid #ccc;
		border-collapse: collapse;
		margin: 0;
		padding: 0;
		width: 100%;
	}

	#table_resp caption {
		font-size: 1.5em;
		margin: .25em 0 .75em;
	}

	#table_resp tr {
		background: #f8f8f8;
		border: 1px solid #ddd;
		padding: .35em;
	}

	#table_resp th,
	#table_resp td {
		padding: .625em;
		text-align: center;
	}

	#table_resp th {
		font-size: .85em;
		letter-spacing: .1em;
		text-transform: uppercase;
	}

	#table_resp td img {
		text-align: center;
	}

	@media screen and (max-width: 600px) {

		#table_resp {
			border: 0;
		}

		#table_resp caption {
			font-size: .6em;
		}

		#table_resp thead {
			display: none;
		}

		#table_resp tr {
			border-bottom: 3px solid #ddd;
			display: block;
			margin-bottom: .225em;
		}

		#table_resp td {
			border-bottom: 1px solid #ddd;
			display: block;
			font-size: .7em;
			text-align: right;
		}

		.tft {}

		#table_resp td:before {
			content: attr(data-label);
			float: left;
			font-weight: bold;
			text-transform: uppercase;

		}

		#table_resp td:last-child {
			border-bottom: 0;
		}
	}
</style>
<!-- partial:partials/_sidebar.html -->

<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-12 grid-margin">
				<div class="row">
					<div class="col-12 col-xl-8 mb-4 mb-xl-0">
						<h3 class="font-weight-bold">History</h3>
					</div>
					<!--
               <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                     <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                           <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                           <a class="dropdown-item" href="#">January - March</a>
                           <a class="dropdown-item" href="#">March - June</a>
                           <a class="dropdown-item" href="#">June - August</a>
                           <a class="dropdown-item" href="#">August - November</a>
                        </div>
                     </div>
                  </div>
               </div> 
               -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4" style="margin-top:20px">
								<p class="text-primary fs-24 font-weight-medium" style="color:#000 !important;">Riwayat Survey Terkini</p>
							</div>
							<div class="col-md-2" style="margin-top:20px">
								<select class="form-control" name="list_surveyor" id="list_surveyor" style="width:100%" data-placeholder="surveyor" onChange="get_agent()">
									<option value="" selected>Semua Supervisor</option>
									<?php foreach ($kecamatan as $kotas) {
										echo "<option value='" . $kotas['nama'] . "'>" . $kotas['nama'] . " </option>";
									} ?>
								</select>
							</div>
							<!--
						   <div class="col-md-2" style="margin-top:20px" >
                        <select class="form-control" name="list_agent" id="list_agent"  style="width:100%" data-placeholder="surveyor" > 
                           <option value="" selected >Semua Surveyor</option>
                        </select>
						   </div>
                     -->
							<div class="col-md-2" style="margin-top:20px;text-align:right">
								<input type="text" class="form-control" id="texts" placeholder="Nama/No Pelanggan/Alamat" style="" />
							</div>
							<div class="col-md-2" style="margin-top:20px;text-align:right">
								<select class="form-control" id="respond" placeholder="respond" style="">
									<option value="" selected>Semua</option>
									<option value="1">Nomor Tidak Dapat Dihubungi</option>
									<option value="2">RNA</option>
									<option value="3">Diangkat tapi Tidak Bersedia bicara</option>
									<option value="4">Salah Sambung</option>
									<option value="5">Tidak Bersedia jadi Responden</option>
									<option value="6">Tidak Memenuhi menjadi Responden</option>
									<option value="7" id="sedia_resps">Bersedia jadi Responden</option>
									<option value="8">Selesai Interview</option>
								</select>
							</div>
							<div class="col-md-2" style="margin-top:20px;text-align:right">
								<div class="btn-group" role="group" aria-label="Basic example" style="margin:auto">
									<button type="button" class="  btn btn-danger" onClick="filter()" id="btn_filter">Filter</button>
									<button type="button" class="  btn btn-info" onClick="exports()">Export</button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" id="tables_jsa" style="">
								<table id="table_resp_ss" class="table table-striped" style="">
									<thead>
										<tr style="color:#F1646E !important;">
											<td style='font-size: 12px'>
												<p class=""><b>Responden</b></p>
											</td>
											<td style='font-size: 12px'>
												<p class=""><b>Call</b></p>
											</td>
											<td style='font-size: 12px'>
												<p class=""><b>Interview</b></p>
											</td>
											<td style='font-size: 12px'>
												<p class=""><b>Surveyor</b></p>
											</td>
											<td style='font-size: 12px'>
												<p class=""><b>Supervisor</b></p>
											</td>
											<td style='font-size: 12px'>
												<p class=""><b>Status</b></p>
											</td>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($get_history as $users) {
											if ($users['status_survey'] == null || $users['status_survey'] == 0) {
												$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey(' . $users['id_outbound'] . ')">Mulai Survey</button>';
											} elseif ($users['status_survey'] == 2) {
												$html = '<button type="button" class="btn btn-danger btn-md" onClick="start_survey(' . $users['id_outbound'] . ')">Lanjut Survey</button>';
											} else {
												$html = '<Span>Survey Telah Selesai</span>';
											}

											if ($users['sa'] == 0) {
												$clr = "background-color:#FF6666";
												$clr_txt = "Hari Ini";
											} else {
												$clr = "";
												$clr_txt = "";
											}
											$array_akses = ['<span style="color:red">Not Active</span>', '<span style="color:green">Active</span>'];
										?>
											<tr>
												<td style="white-space:initial"><?php echo  $users['NAMA_PELANGGAN'] ?><br><?php echo $users['cardno'] ?><br><?php echo $users['ALAMAT'] ?><br><?php echo $users['NO_HP'] ?></td>
												<td><?php echo  $users['time_call'] ?></td>
												<td><?php echo (date_format(date_create($users['date_survey']), "Y/m/d")) ?><br><?php echo $users['day_survey'] ?><br><?php echo $users['hours_survey'] ?><br><?php echo $users['date_hours_survey'] ?></td>
												<td><?php echo  $users['surveyor'] ?></td>
												<td><?php echo  $users['supervisor'] ?></td>
												<td><?php echo  $respond[$users['respond_res']]; ?></td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->


	<script async>
		$(document).ready(function() {
			$('#table_resp_ss').DataTable({
				"bFilter": false,
				"aaSorting": [],
				"bLengthChange": false,
				'iDisplayLength': 5,
				"bPaginate": true,
				//"sPaginationType": "simple_numbers",
				"Info": false,
				"bInfo": false,
				"searching": false,
				"scrollX": true,
				"language": {
					"decimal": ",",
					"thousands": "."
				}
			});

			if ($("#datepicker-popup").length) {
				$('#datepicker-popup').datepicker({
					// enableOnReadonly: true,
					// todayHighlight: true,
					format: "yyyy-mm-dd",
					//autoclose: true
				});
			}
		});
	</script>

	<script>
		function exports() {

			var form_data = new FormData();
			//var tahun = $('#tahun').val();

			form_data.append('respond', $("#respond").val());
			form_data.append('surveyor', $("#list_surveyor").val());
			form_data.append('texts', $("#texts").val());

			$.ajax({
				url: "<?php echo base_url() . 'history_kordinator/export'; ?>",
				dataType: 'text', // what to expect back from the PHP script, if anything
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				type: 'post',
				success: function(data) {
					download_file('https://inrate.id/tmp_doc/report_respondent.xls', 'report_respondent.xls');
				},
				error: function(obj, response) {
					console.log('ajax list detail error:' + response);
				}
			});

		}

		function reschedule(outbound) {
			if ($("#datepicker-popup_" + outbound).length) {
				$('#datepicker-popup_' + outbound).datepicker({
					// enableOnReadonly: true,
					// todayHighlight: true,
					format: "yyyy-mm-dd",
					//autoclose: true
				});
			}

			if ($("#timepicker-example_" + outbound).length) {
				$('#timepicker-example_' + outbound).datetimepicker({
					format: 'HH:mm',
					defaultDate: new Date('HH:00'),
					pickDate: false,
					pickSeconds: false,
					pick12HourFormat: false
				});
			}

			if ($("#timepicker-example2_" + outbound).length) {
				$('#timepicker-example2_' + outbound).datetimepicker({
					format: 'HH:mm',
					defaultDate: new Date('HH:00'),
					pickDate: false,
					pickSeconds: false,
					pick12HourFormat: false
				});
			}
			$("#jadwal_" + outbound).show('1000');
		}

		function batal_res(outbound) {
			$("#jadwal_" + outbound).hide('1000');
		}

		function save_res(outbound) {

			var values_hari = '';
			$("input:checkbox[name=hari_" + outbound + "]:checked").each(function() {
				values_hari += $(this).val() + ',';
			});
			var values_hari_rel = values_hari.slice(0, -1);

			var values_jam = '';
			$("input:checkbox[name=jam_" + outbound + "]:checked").each(function() {
				values_jam += $(this).val() + ',';
			});
			var values_jam_rel = values_jam.slice(0, -1);

			var datapost = {
				"id_outbound": outbound,
				"tgl": $("#tgl_" + outbound).val(),
				"note": $("#note_" + outbound).val(),
				"jam_tgl_awal": $("#jam_tgl_awal_" + outbound).val(),
				"jam_tgl_akhir": $("#jam_tgl_akhir_" + outbound).val(),
				"values_hari_rel": values_hari_rel,
				"values_jam_rel": values_jam_rel
			};

			console.log(datapost);

			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>history_kordinator/edit_schedule",
				data: JSON.stringify(datapost),
				dataType: 'json',
				contentType: 'application/json; charset=utf-8',
				success: function(response) {
					//obj = jQuery.parseJSON(response);
					window.location.href = "<?php echo base_url() . 'survey'; ?>";
				}
			});
			//$("#jadwal_"+outbound).hide('1000');
		}

		function reset_filter() {
			$("#kota").val('');
			$("#hari").val('');
			$("#tgl_s").val('');
		}

		function filter() {
			$("#btn_filter").prop('disabled', true);
			$("#data_survey").html(' Loading ....');

			var date = $("#tgl_s").val();
			var surveyor = $("#list_surveyor").val();
			var respond  = $("#respond").val();
         var texts    = $("#texts").val();

			console.log("surveyor: ", surveyor);
			console.log("respond: ", respond);
         console.log("texts: ", texts);

			var formData = new FormData();
			var urls = "<?php echo base_url('history_kordinator/filter_jadwal'); ?>";

			formData.append('respond', respond);
			formData.append('surveyor', surveyor);
			formData.append('texts', texts);

			$.ajax({
				type: 'POST',
				url: urls,
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				success: function(response) {

					obj = jQuery.parseJSON(response);
					console.log(obj);
					// window.location.href = "<?php echo base_url() . 'history_kordinator/new_survey'; ?>";
					$("#tables_jsa").html('');
					$("#tables_jsa").html(obj.html);

					$('#table_resp_ss').DataTable({
						"bFilter": false,
						"aaSorting": [],
						"bLengthChange": false,
						'iDisplayLength': 5,
						"bPaginate": true,
						//"sPaginationType": "simple_numbers",
						"Info": false,
						"bInfo": false,
						"searching": false,
						"scrollX": true,
						"language": {
							"decimal": ",",
							"thousands": "."
						}
					});

					$("#btn_filter").prop('disabled', false);
				}
			});
		}

		function start_survey(id_outbound) {
			swal({
				title: 'Akan Memulai Survey ?',
				text: '',
				type: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Ya',
				cancelButtonText: 'Tidak'
			}).then(function() {

				var formData = new FormData();
				var urls = "<?php echo base_url('history_kordinator/insert_header_survey'); ?>";
				var merk_vals = $("#kota").val();

				formData.append('id_outbound', id_outbound);

				$.ajax({
					type: 'POST',
					url: urls,
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					success: function(response) {
						window.location.href = "<?php echo base_url() . 'history_kordinator/new_survey'; ?>/" + id_outbound;
					}
				});
			});
		}

		function delete_outbound(id_outbound) {
			swal({
				title: 'Akan Menghapus Data ?',
				text: 'Data yang sudah dihapus tidak akan bisa dikembalikan ',
				type: 'warning',
				showCancelButton: true,
				confirmButtonText: 'Ya',
				cancelButtonText: 'Tidak'
			}).then(function() {
				var formData = new FormData();
				var urls = "<?php echo base_url('history_kordinator/delete_outbound'); ?>";

				formData.append('id_outbound', id_outbound);

				$.ajax({
					type: 'POST',
					url: urls,
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					success: function(response) {
						window.location.href = "<?php echo base_url() . 'history_kordinator'; ?>";
					}
				});
			});
		}

		function get_agent() {

			var formData = new FormData();
			var urls = "<?php echo base_url('history_kordinator/get_agent'); ?>";

			formData.append('id_outbound', id_outbound);

			$.ajax({
				type: 'POST',
				url: urls,
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				success: function(response) {
					window.location.href = "<?php echo base_url() . 'history_kordinator'; ?>";
				}
			});
		}

		// function lanjut_survey(id_outbound){
		// swal({
		// title: 'Akan Melanjutkan Survey ?',
		// text: '',
		// type: 'warning',
		// showCancelButton: true,
		// confirmButtonText: 'Ya',
		// cancelButtonText: 'Tidak'
		// }).then(function() {
		// var formData = new FormData();
		// var urls = "<?php echo base_url('history_kordinator/insert_header_survey'); ?>";
		// var merk_vals = $("#kota").val();

		// formData.append('id_outbound', id_outbound);

		// $.ajax({
		// type: 'POST',
		// url: urls,
		// data: formData,
		// cache: false,
		// contentType: false,
		// processData: false,
		// success: function(response) {
		// window.location.href = "<?php echo base_url() . 'history_kordinator/new_survey'; ?>/"+id_outbound;
		// }
		// });
		// });
		// }
	</script>