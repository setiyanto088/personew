
<script type="text/javascript">

$(document).ready(function(){
	$("#role_id").on('change', function() {
		$("#btn_select_role").click();
	});
});


</script>

 <div class="container">
 <div class="row">
        <div class="col-sm-12">
            <div class="card-box">


			<div class="x_title">
				<h2 class="header-title m-t-0 m-b-30">Aktivasi Menu</h2>
				<div class="clearfix"></div>
			</div>
			
                <?php if ( isset($success) && $success == FALSE) :?>
			  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong><?php echo $pesan;?></strong>
              </div>
	  		  <?php endif;?>
	  		  <?php if ( isset($success) && $success == TRUE) :?>
			  <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong><?php echo $pesan;?></strong>
              </div>
	  		  <?php endif;?>
                
                
            <div class="row">
                <div class="col-md-6">
				<a class="btn btn-success" href="<?php echo base_url('menu/tambah');?>" value="Create">Tambah Menu</a>
				<br/>
                <form action="<?php echo base_url();?>menu/aktivasi/" method="post" id="form_edit">
					<div class="form-group">
						
                        <div class="input-group">
							<select id="role_id" name="role_id" class="form-control">
								<?php foreach ($roles as $k => $v) :?>
								<option value="<?php echo $v['id'];?>" <?php if ( isset($role_id) && $role_id == $v['id']) echo 'selected="selected"';?>>
									<?php echo $v['group'];?>
								</option>
								<?php endforeach;?>
							</select>
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit" id="btn_select_role" name="btn_select_role" value="OK"><i class="fa fa-refresh"></i></button>
							</span>
						</div>
					</div>

					<?php echo $menu_html;?>

					<div class="form-group">
						<button class="btn btn-success" type="submit" id="btn_submit" name="btn_submit" value="Save">Save</button>
					</div>
				</form>
				</div>

				<div class="col-md-6">

				</div>
                
            </div>    
		</div>
	</div>
</div>
</div>
