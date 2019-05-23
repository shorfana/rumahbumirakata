<div id="wrapper">
	<div class="main-content container">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Rumah Terjual</h4>
					<!-- /.box-title -->
					<a href="<?php echo base_url() ?>admin/tambah_rumah"  type="button" class="btn btn-primary btn-bordered waves-effect waves-light">+ Rumah</a>
					<a href="<?php echo base_url() ?>admin/excel"  type="button" class="btn btn-primary btn-bordered waves-effect waves-light"> PriviewExport to excel</a>
					<br>
					<br>
					<br>
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Rumah</th>
								<th>Harga Rumah</th>
								<th>Blok Rumah</th>
								<th>Tipe Rumah</th>
								<th>Status</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($rumah as $r): ?>
							<tr>
									<td><?php echo $r->no_rumah?></td>
									<td><?php echo $r->nama_rumah?></td>
									<td>Rp <?php echo $r->harga_rumah?></td>
									<td><?php echo $r->blok?></td>
									<td><?php echo $r->tipe?></td>
									<td><?php echo $r->status?></td>

							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<!-- /.box-content -->
			</div>
		</div>
		<!-- /.row small-spacing -->

	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->

<script src="<?php echo base_url() ?>admin_template/assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>admin_template/assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>admin_template/assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() ?>admin_template/assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>admin_template/assets/scripts/datatables.demo.min.js"></script>
