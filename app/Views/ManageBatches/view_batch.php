<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
  <?= view('includes/sidebar'); ?>

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <?= view('includes/breadcrumb'); ?>

            <h4 class="card-title mb-4">
              <i class="mdi mdi-book-open-page-variant me-2"></i> Batch Details
            </h4>

            <!-- Details -->
            <div class="row view-details">
              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Batch ID</strong> :</div>
                <div class="ms-3"><?= esc($batch['Batch_Id']) ?></div>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Batch Name</strong> :</div>
                <div class="ms-3"><?= esc($batch['Batch_Name']) ?></div>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Program</strong> :</div>
                <div class="ms-3"><?= esc($batch['Program_Id']) ?></div>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Center</strong> :</div>
                <div class="ms-3"><?= esc($batch['Center_Id']) ?></div>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Status</strong> :</div>
                <?php
                  $status = $batch['Batch_Status'];
                  $color = match($status) {
                      'Active' => '#28a745',
                      'InActive' => '#dc3545',
                      'Completed' => '#ffc107',
                      default => '#6c757d',
                  };
                ?>
                <span class="status-badge" style="background-color: <?= $color ?>; color: white; padding: 5px 10px; border-radius: 5px; display: inline-block;">
                  <?= esc($status) ?>
                </span>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Timing</strong> :</div>
                <div class="ms-3"><?= esc($batch['Start_Time']) ?> - <?= esc($batch['End_Time']) ?></div>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Start Date</strong> :</div>
                <div class="ms-3"><?= esc($batch['Batch_Start_Date']) ?></div>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>End Date</strong> :</div>
                <div class="ms-3"><?= esc($batch['Batch_End_Date']) ?: '—' ?></div>
              </div>

              <div class="col-md-12 mb-2 d-flex">
                <div style="min-width: 200px;"><strong>Remarks</strong> :</div>
                <div class="ms-3"><?= esc($batch['Remarks']) ?: '—' ?></div>
              </div>
            </div>

            <!-- Actions -->
            <div class="mt-4 d-flex justify-content-center flex-wrap gap-3">
              <a href="<?= base_url('batches/edit/' . $batch['Batch_Id']) ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="<?= base_url('batches/delete/' . $batch['Batch_Id']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= view('includes/footer'); ?>

<script>
  function confirmDelete() {
    if (confirm("Are you sure you want to delete this batch?")) {
      window.location.href = "<?= base_url('batches/delete/' . $batch['Batch_Id']) ?>";
    }
  }
</script>