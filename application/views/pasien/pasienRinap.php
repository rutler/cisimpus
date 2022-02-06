<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title mb-0"><?= strtoupper('data pasien rawat inap'); ?></h4>
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
												<th>Nomor Registrasi</th>
												<th>NRM</th>
												<th>NIK</th>
												<th>Nama Pasien</th>
												<th>ASESMEN/BPJS</th>
												<th>MUTASI</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$n=0;
											foreach ($pasien as $psnrinap) { 
											$n++;
											?>	
											<tr>
												<td>Status: PASIEN <?= $psnrinap['status_pasien'];?>
													<br>
													<?= $psnrinap['id_registrasi'];?>
												</td>
												 <td><?= $psnrinap['no_rekamedis'];?></td>
												 <td><?= $psnrinap['nik'];?><br><?= $psnrinap['tanggal_lahir'];?></td>
												 <td><?= $psnrinap['nama_pasien'];?></td>
												 <td>
												 	<a href="?m=detail-asessmen-rawatinap&nrm=<?= $psnrinap['no_rekamedis'];?>&nrek=<?= $psnrinap['id_registrasi'];?>" class="btn btn-danger btn-sm"><i class="mdi mdi-stethoscope fs-6"></i> ASESMEN</a>
												 	<br>
												 	<!-- <?php if ($psnrinap['proses']=='D'){ 
												 			echo "Proses Asessmen"; }
												 		else{ 
												 			echo "Belum ada proses Asessmen"; }
												 	?> -->
												 	<br>
												 	<div class="dropdown">
													  <div class="btn-group">
													  <button class="btn btn-secondary btn-sm" type="button">
													    BPJS
													  </button>
													  <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													    <span class="sr-only">pilih</span>
													  </button>
													  <div class="dropdown-menu">
													    <a class="dropdown-item" href="?m=data-add-spri-bpjs&xr=<?= $psnrinap['id_registrasi']  ?>">Insert SPRI</a>
													    <a class="dropdown-item" href="?m=data-add-insertseprinap-bpjs&xr=<?= $psnrinap['id_registrasi']  ?>">Insert SEP</a>
													    <a class="dropdown-item" href="?m=data-add-insertrujukan-bpjs&xr=<?= $psnrinap['id_registrasi']  ?>">Rujukan</a>
													    <a class="dropdown-item" href="?m=data-pasien-pulang-bpjs&xr=<?= $psnrinap['id_registrasi']  ?>">Update Tgl Pulang</a>
													    <a class="dropdown-item" target="_blank" href="./bpjs/print.php?&xr=<?= $psnrinap['id_registrasi']  ?>">Print SEP</a>
													    <a class="dropdown-item" target="_blank" href="?m=data-pasien-cek-bpjs&xr=<?= $psnrinap['id_registrasi']  ?>">Cek Pasien BPJS</a>
													    <a class="dropdown-item" target="_blank" href="?m=data-sep-del-bpjs&xr=<?= $psnrinap['id_registrasi']  ?>">Hapus SEP</a>

													  </div>
													</div>
												 </td>
												 <td>
												 	<a href="?m=formulir-mutasi&nrm=<?= $psnrinap['no_rekamedis'];?>&nrek=<?= $psnrinap['id_registrasi'];?>" class="btn btn-danger btn-sm"><i class="mdi mdi-note-plus-outline fs-6"></i> MUTASI</a>
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
	
			