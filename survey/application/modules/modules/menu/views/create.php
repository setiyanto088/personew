<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	$('select').select2();
});


</script>

<div class="container">
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="card-box">
			<div class="x_title">
				<h2>Tambah Menu</h2>
				<div class="clearfix"></div>
			</div>
			<div class="row">
				<div class="col-md-6">
				<form action="<?php echo base_url();?>menu/create/" method="post" id="form_edit">

				<div class="form-group">
					<label>Tipe Menu</label>
					<div class="radio">
					  <label>
						<input onClick="$('#listmenu').hide()" type="radio" checked name="iCheck" value='0'> Primary Menu
					  </label>
					</div>

					<div class="radio">
					  <label>
						<input onClick="$('#listmenu').show()" type="radio" name="iCheck" value='1'> Child Menu
					  </label>
					</div>
				</div>

				<div id="listmenu" style="display:none;">
				<div class="form-group">
					<label>Primary Menu</label>
					<div class="input">
						<select id="primary_menu" name="primary_menu" class="form-control" style="width: 100%">
						<?php foreach ($menu_all as $k => $v) :?>
						<option value="<?php echo $v['id'];?>">
						<?php echo $v['label'];?>
						</option>
						<?php endforeach;?>
						</select>
					</div>
				</div>
				</div>

				<div class="form-group">
					<label>Nama Menu</label>
					<div class="input">
						<input type="text" id="nama_menu" name="nama_menu" class="form-control col-md-7 col-xs-12" placeholder="nama menu" required="required">
					</div>
				</div>

				<div class="form-group">
					<label>Url Menu</label>
					<div class="input">
						<input type="text" id="url_menu" name="url_menu" class="form-control col-md-7 col-xs-12" placeholder="ex. menu/url" required="required">
					</div>
				</div>

				<div class="form-group">
					<label>Icon Menu</label>
					<div class="input">
						<input type="text" id="icon_menu" name="icon_menu" class="form-control col-md-7 col-xs-12" placeholder="fa fa-check" required="required">
					</div>
				</div>

				<div class="form-group">
					<label>Sequence</label>
					<div class="input">
						<input type="text" id="sequence_menu" name="sequence_menu" class="form-control col-md-7 col-xs-12" placeholder="menu order" required="required">
					</div>
				</div>

				<br>
				<br>
				<div class="form-group">
					<button class="btn btn-success" type="submit" id="btn_submit" name="btn_submit" value="Save">Save</button>
				</div>
				</form>


				</div>
			</div>
		</div>
	</div>
</div>
</div>
