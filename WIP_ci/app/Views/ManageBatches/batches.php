<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
  <?= view('includes/sidebar'); ?>

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">

              <!-- Back Button -->
              <button class="btn btn-secondary mb-3" onclick="window.history.back()">
                <i class="mdi mdi-arrow-left"></i> Back
              </button>

              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('batches'); ?>">Manage Batches</a></li>
                </ol>
              </nav>

              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="card-title mb-0">Batch List</h4>
                <a href="<?= site_url('batches/add') ?>" class="btn btn-success btn-sm">
                  <i class="mdi mdi-plus-circle"></i> Add New Batch
                </a>
              </div>

              <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
              <?php endif; ?>

              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Batch ID</th>
                      <th>Batch Name</th>
                      <th>Program ID</th>
                      <th>Center ID</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($batches as $batch): ?>
                      <tr>
                        <td><?= esc($batch['Batch_Id']) ?></td>
                        <td><?= esc($batch['Batch_Name']) ?></td>
                        <td><?= esc($batch['Program_Id']) ?></td>
                        <td><?= esc($batch['Center_Id']) ?></td>
                        <td><?= esc($batch['Batch_Start_Date']) ?></td>
                        <td><?= esc($batch['Batch_End_Date']) ?></td>
                        <td>
                          <span class="badge <?= $batch['Batch_Status'] === 'Active' ? 'badge-success' : 'badge-danger' ?>">
                            <?= esc($batch['Batch_Status']) ?>
                          </span>
                        </td>
                        <td>
                          <a href="<?= site_url('batches/edit/' . $batch['Batch_Id']) ?>" class="btn btn-warning btn-sm">
                            <i class="mdi mdi-pencil"></i> Edit
                          </a>
                          <a href="<?= site_url('batches/delete/' . $batch['Batch_Id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this batch?');">
                            <i class="mdi mdi-delete"></i> Delete
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    <?php if (empty($batches)): ?>
                      <tr><td colspan="8" class="text-center">No batches found.</td></tr>
                    <?php endif; ?>
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
<?= view('includes/footer'); ?>
