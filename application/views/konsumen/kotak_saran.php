<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
		</div>
	<?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
	<?php endif; ?>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kotak Pesan</h1>
  </div>
  <!-- Content Row -->
  <!-- <div class="row"> -->
      <div class="card mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Data Kotak Pesan</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Isi Pesan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <!-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> -->
                      <tbody>
                        <?php
                            $no = 1;
                            foreach($saran as $s){
                        ?>
                          <tr>
                              <td><?= $no;?></td>
                              <td><?= $s->nama; ?></td>
                              <td><?= $s->email; ?></td>
                              <td><?= $s->subject; ?></td>
                              <td><?= $s->isi_saran; ?></td>
                              <td>
                                  <a href="mailto:<?= $s->email;?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                      <i class="fas fa-reply fa-sm text-white-50"></i> Balas Pesan
                                  </a>
                              </td>
                          </tr>
                          <?php $no++; } ?>
                      </tbody>
                  </table>
                  <span>
                      <!-- <?php echo print_r($saran); ?> -->
                  </span>
              </div>
          </div>
      </div>
  <!-- </div> -->
