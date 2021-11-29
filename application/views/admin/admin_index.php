<div class="text-success">
	<?php
	if ($this->session->flashdata('login_success')) {
		print '<div class= "container alert alert-success">' . $this->session->flashdata('login_success') . '</div>';
	}
	if ($this->session->flashdata('success')) {
		print '<div class= "container alert alert-success">' . $this->session->flashdata('success') . '</div>';
	}
	?>
</div>

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">
		<h5 class="mb-2 mb-sm-0 pt-1">
			<a class="text-dark" href="<?= base_url() ?>Admin" target="_blank"><i class="fas fa-home"></i>&nbsp;Home</a>
		</h5>
		<div class="mb-2 mb-sm-0 pt-1">
			<h5>
				<b>Welcome, <span class="text-dark"><?= $this->session->userdata('name') ?></b></span>
			</h5>
		</div>
	</div>

</div>
<div class="admin-index section-padding" style="min-height: 500px">

	<div class="admin-content section-padding">
		<div class="container">

			<div class="row con-flex">
				<div class="row gx-5">
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-dark bg-gradient rounded-pill mb-2"><i class="fas fa-map"></i> Areas</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/areas') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_areas = count($this->Admin_model->count_total_areas());
																			print $count_areas;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-dark bg-gradient rounded-pill mb-2"><i class="fas fa-university"></i> Banks</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/banks') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_banks = count($this->Admin_model->count_total_banks());
																			print $count_banks;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-dark bg-gradient rounded-pill mb-2"><i class="fas fa-map-marked-alt"></i> Branch Locations</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/branches') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_branches = count($this->Admin_model->count_total_branches());
																			print $count_branches;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-dark bg-gradient rounded-pill mb-2">Edit Admin Profile</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/editadminprofile/' . $this->session->userdata('id') . '') ?>">
									<h2 class="card-title mb-3 text-center"><i class="far fa-id-card"></i></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-dark bg-gradient rounded-pill mb-2"><i class="fas fa-map-marked-alt"></i> ATM Locations</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/atms') ?>">
									<h2 class="card-title mb-3 text-center"><?php
																			$this->load->model('Admin_model');
																			$count_atms = count($this->Admin_model->count_total_atms());
																			print $count_atms;
																			?></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

										<div class="small">

											<div class="text-muted" style="font-size:x-small;">Click to view</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-5">
						<div class="card h-100 shadow border-0">

							<div class="card-body p-4">

								<div class="badge bg-dark bg-gradient rounded-pill mb-2">Change Password</div>
								<br>
								<br>
								<a class="text-decoration-none link-dark stretched-link" href="<?= base_url('admin/change_password/' . $this->session->userdata('id') . '') ?>">
									<h2 class="card-title mb-3 text-center"><i class="fas fa-key"></i></h2>
								</a>
							</div>
							<div class="card-footer p-4 pt-0 bg-transparent border-top-0">
								<div class="d-flex align-items-end justify-content-between">
									<div class="d-flex align-items-center">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>