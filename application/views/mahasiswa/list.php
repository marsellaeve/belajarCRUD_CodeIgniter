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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/mahasiswa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>NRP</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Telepon</th>
										<th>Jurusan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($mahasiswa as $mahasiswa): ?>
									<tr>
										<td width="150">
											<?php echo $mahasiswa->nrp ?>
										</td>
										<td>
											<?php echo $mahasiswa->nama ?>
										</td>
										<td>
                                        <?php echo $mahasiswa->alamat ?>
										</td>
										<td>
                                        <?php echo $mahasiswa->telepon ?>
										</td>
										<td>
                                        <?php echo $mahasiswa->jurusan ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/mahasiswa/edit/'.$mahasiswa->nrp) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/mahasiswa/delete/'.$mahasiswa->nrp) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>

		</div>
		<!-- /.content-wrapper -->


        <?php $this->load->view("_partials/scrolltop.php") ?>

<?php $this->load->view("_partials/js.php") ?>
	</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>

<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>