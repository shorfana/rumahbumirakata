<div id="wrapper">
	<div class="main-content container">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<form data-toggle="validator" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/act_tambahRumah">
						<h4>Tambah Data Rumah</h4>
						<div class="form-group">
							<input type="hidden" class="form-control" id="no_rumah" name="no_rumah" placeholder="Cina Saffary" required>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Nama Rumah</label>
							<input type="text" class="form-control" id="nama_rumah" name="nama_rumah"  required>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Harga Rumah</label>
							<input type="text" class="form-control" name="harga_rumah" id="harga_rumah"  required>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Gambar</label>
							<input type="file" id="input-file-now" name="gambar" class="dropify" required>
						</div>
						<div class="form-group">
							<p>Blok Rumah</p>
							<select class="form-control select2_1" name="blok">
								<optgroup label="---">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
								</optgroup>

							</select>
						</div>
						<div class="form-group">
							<p>Tipe Rumah</p>
							<select class="form-control select2_1" name="tipe">
								<optgroup label="---">
									<option value="21">Tipe 21</option>
									<option value="36">Tipe 36</option>
									<option value="45">Tipe 45</option>
									<option value="54">Tipe 54</option>
								</optgroup>

							</select>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Luas Bangunan</label>
							<input type="text" name="luas_bangunan" class="form-control" id="inputName" placeholder="45 m²" required>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Luas Tanah</label>
							<input type="text" name="luas_tanah" class="form-control" id="inputName" placeholder="52 m²" required>
						</div>
						<div class="form-group">
							<p>Serifikat</p>
							<select class="form-control select2_1" name="sertifikat">
								<optgroup label="---">
									<option value="Milik Sendiri">Milik Sendiri</option>
									<option value="Sewa">Sewa</option>
								</optgroup>

							</select>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Sarana</label>
							<textarea id="textarea" class="form-control" name="sarana" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
						</div>
						<div class="form-group">
							<label for="inputName" class="control-label">Deskripsi</label>
							<textarea id="textarea" class="form-control" name="keterangan" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
						</div>
						<div class="form-group">
							<p>Status</p>
							<select class="form-control select2_1" name="status">
								<optgroup label="---">
									<option value="Terjual">Terjual</option>
									<option value="Belum Terjual">Belum Terjual</option>
								</optgroup>

							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
						</div>
					</form>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
		</div>
	</div>
</div>
