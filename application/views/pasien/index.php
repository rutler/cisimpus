<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title mb-0"><?= strtoupper('data pasien'); ?></h4>
			</div>
		</div>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="forms">
					<div class="form-grids widget-shadow" data-example-id="basic-forms">
						<div class="form-title">
							<br>
							<h6>Pencarian Berdasarkan Tanggal Lahir dan Nomor Rekam Medis</h6>
							<form method="post">
								<input class="form-control" type="date" name="caridata" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" >

								<input class="form-control" type="text" name="caridatanama" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" placeholder="no rekamedis">

								<button class="btn btn-warning btn-xs" name="caridatak" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								<button class="btn btn-warning btn-xs" type="submit">reset</button>
							</form>	
						</div>
						<br>
						<hr>
						<div class="agile-tables">
							<div class="w3l-table-info">
								<br>
								<div class="table-responsive">
									<table id="example2" class="table table-bordered table-hover">
										<thead>
											<tr>
												<th>No.</th>
												<th>Nomor R.Medis</th>
												<th>Data</th>
												<th>Nama Pasien</th>
												<th>Jenis Kelamin</th>
												<th>Umur</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$n=0;
											foreach ($pasien as $psn) { 
											$n++;
											?>	
											<tr>
												<td><?= $n; ?></td>
												<td><b><?= $psn['no_rekamedis'];?></b></td>
												<td>NIK: <?= $psn['nik'];?>
												<br>
												Tgl Lahir: <?= $psn['tanggal_lahir'];?>
												</td>
												<td>
													<b><?= $psn['nama_pasien'];?></b>
													<br>
													Tgl Masuk: <?= $psn['tanggal_masuk'];?>
												</td>
												<td><?= $psn['jenis_kelamin'];?></td>
												
												<td><?= umur($datatglahir=$psn['tanggal_lahir']); ?></td>
												<td>
													<a href="?m=proses-detail-pasien&nrm=<?= $psn['no_rekamedis'];?>" class="btn btn-danger btn-xs">DETAIL DATA</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>                            
			</div>
		</div>
	</div>
</div>
	
			