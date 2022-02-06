
		<!-- Sidebar navigation-->         

          <li class="nav-item">
            <a href="<?php echo base_url(); ?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('Dashboard') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('pasien');?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('data pasien') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('admisi') ?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?m=data-baru" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran Pasien Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-lama" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran Pasien Lama</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('monitoring') ?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?m=data-baru-masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Baru Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pasien Berdasarkan Pembiayaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-skontrol-bpjs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Kontrol (SPRI) Rawat Inap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-ssep-bpjs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Eligible Peserta (SEP)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-srujuk-bpjs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rujukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-add-insertrujukan-bpjs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Rujukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-list-rujukan-bpjs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Rujukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-del-rujukan-bpjs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hapus Rujukan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="?m=data-laporan" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('laporan') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?m=data-resep" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('resep') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?m=ugd" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('ugd') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo site_url('pasien/pasienRinap');?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('rawat inap') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?m=rawat-jalan" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('rawat jalan') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('penunjang') ?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?m=data-penunjang-rmedis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekam Medis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-baru" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laboratorium</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-apotik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Apotik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Radio Terapi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('aset') ?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?m=data-aseta" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aset Bergerak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-asetb" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aset Tidak Bergerak</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="?m=data-keuangan" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('keuangan') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?m=data-stafdok" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('dokter / perawat') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="?m=data-master-ruangan&editruangan=xR5stoken56empty" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('ruangan') ?>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('master') ?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?m=data-master-sdm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input SDM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-master-tindakan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Tindakan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-master-diagnosa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Diagnosa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?m=data-master-lab" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Jenis Pemeriksaan Lab.</p>
                </a>
              </li>
            </ul>
          </li>






          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                <?php echo strtoupper('keluar') ?>
              </p>
            </a>
          </li>

             