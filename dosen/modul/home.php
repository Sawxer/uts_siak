<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dosen</h2>
								<h5 class="text-white op-7 mb-2">Selamat Datang, <b class="text-warning"><?=$data['nama_dosen']; ?></b></h5>
							</div>
						
						</div>
					</div>
				</div>
<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">
										<center>
											<img src="../assets/img/logo1.png" width="100">
											<br>
											<b>Universitas Pancasila</b>
										</center>
									</div>
									<div class="card-category">
									<center>
										Jl. Lenteng Agung Raya No.56, RT.1/RW.3, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630
	<br>Email : sdgs@univpancasila.ac.id Telp.(021) 727-2290
										</center>
									</div>
								
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
						
								<div class="card-body">
									<ul class="nav nav-pills nav-secondary  nav-pills-no-bd nav-pills-icons justify-content-center" id="pills-tab-with-icon" role="tablist">
										<li class="nav-item">
											<a class="nav-link" id="pills-home-tab-icon" data-toggle="pill" href="#pills-home-icon" role="tab" aria-controls="pills-home-icon" aria-selected="true">
												<i class="fas fa-clipboard-list"></i>
												Kelas Dan Jadwal
											</a>
										</li>
									</ul>
									<div class="tab-content mt-2 mb-3" id="pills-with-icon-tabContent">
										<div class="tab-pane fade" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-tab-icon">
											<p>
												<ul class="list-group">
											<?php
											foreach ($mengajar as $dm) { ?>
											 <li class="list-group-item">
											<a class="btn btn-primary btn-block text-left" href="?page=jadwal">
												<i class="fas fa-chevron-circle-right"></i>
											<span class="sub-item"><?=strtoupper($dm['mapel']); ?> (<?=strtoupper($dm['nama_kelas']); ?>)</span>
											</a>
											</li>
											<?php } 
										?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					
				</div>