<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">
	<?php $this->load->view("_partials/navbar.php") ?>

	<div id="wrapper">

    <?php $this->load->view("_partials/sidebar.php") ?>
		<div id="content-wrapper">

			<div class="container-fluid">

            <?php $this->load->view("_partials/breadcrumb.php") ?>
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/mahasiswa/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $mahasiswa->nrp?>" />
                            <div class="form-group">
								<label for="nrp">NRP*</label>
								<input class="form-control <?php echo form_error('nrp') ? 'is-invalid':'' ?>"
								 type="text" name="nrp" placeholder="Nrp"  value="<?php echo $mahasiswa->nrp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nrp') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama"  value="<?php echo $mahasiswa->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Alamat"  value="<?php echo $mahasiswa->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="telepon">Telepon*</label>
								<input class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>"
								 type="text" name="telepon" placeholder="Telepon" value="<?php echo $mahasiswa->telepon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telepon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jurusan">Jurusan*</label>
								<input class="form-control <?php echo form_error('jurusan') ? 'is-invalid':'' ?>"
								 type="text" name="jurusan" placeholder="Jurusan" value="<?php echo $mahasiswa->jurusan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jurusan') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>

			</div>

<?php $this->load->view("_partials/scrolltop.php") ?>

<?php $this->load->view("_partials/js.php") ?>
		</div>

</body>

</html>