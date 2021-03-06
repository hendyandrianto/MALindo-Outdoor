<script src="<?php echo base_url();?>assets/plugins/DataTables/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/plugins/DataTables/js/dataTables.responsive.js"></script>
<script src="<?php echo base_url();?>assets/js/table-manage-responsive.demo.min.js"></script>
<script src="<?php echo base_url();?>assets/js/set_email.js"></script>
<div class="row"> 
	<div class="col-md-12"> 
		<div class="panel panel-inverse"> 
			<div class="panel-heading"> 
				<h4 class="panel-title"><?php echo $halaman;?></h4> 
			</div> 
			<div class="panel-body"> 
				<div class="table-responsive"> 
					<table id="data-email" 
					data-step         ="3" 
					data-intro        ="List Data yang tersimpan pada database."  
					data-hint         ="List Data yang tersimpan pada database." 
					data-hintPosition ="top-middle" 
					data-position     ="bottom-right-aligned"
					class="table table-striped table-bordered nowrap" width="100%"> 
						<thead> 
							<tr> 
								<th style="text-align:center" width="1%">No.</th> 
								<th style="text-align:center" width="80%">E-mail</th>  
								<th style="text-align:center" width="20%">Password</th>  
								<th style="text-align:center" width="10%">Action</th> 
							</tr> 
						</thead> 
						<tbody> 
						</tbody> 
					</table> 
				</div> 
			</div>
		</div> 
	</div>
</div>
<div id="modal_form" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Basic modal</h4>
			</div>
			<div class="modal-body">		
				<div class="alert alert-info alert-styled-left">
					<small><span class="text-semibold">Pastikan Inputan Data Benar !</span></small>
				</div>		
				<form action="#" id="form" class="form-horizontal">
					<input type="hidden" value="" name="id"/> 
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">E-mail</label>
							<div class="col-md-6">
								<input name="nama" id="nama" maxlength="255" placeholder="Masukan E-mail" class="form-control" type="text">
								<span class="help-block"></span>
							</div>
						</div>
					</div>
					<div class="form-body">
						<div class="form-group">
							<label class="control-label col-md-3">Password</label>
							<div class="col-md-6">
								<input name="password" id="password" maxlength="255" placeholder="Masukan Password E-mail" class="form-control" type="text">
								<span class="help-block"></span>
							</div>
						</div>
					</div>
				</form>					
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save('<?php echo $link;?>')" class="btn btn-primary">Simpan</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>