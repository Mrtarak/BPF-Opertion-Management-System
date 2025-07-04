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
                  <li class="breadcrumb-item active" aria-current="page">Edit Batch</li>
                </ol>
              </nav>

              <h4 class="card-title">Edit Batch</h4>
            <form method="post" action="<?= site_url('batches/store') ?>">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Batch ID</label>
                  <input type="text" name="Batch_Id" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Batch Name</label>
                  <input type="text" name="Batch_Name" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Program</label>
                  <select name="Program_Id" class="form-control" required>
                    <option value="">-- Select Program --</option>
                    <?php foreach ($programs as $program): ?>
                      <option value="<?= $program['Program_Id'] ?>"><?= $program['Program_Name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Center</label>
                  <select name="Center_Id" class="form-control" required>
                    <option value="">-- Select Center --</option>
                    <?php foreach ($centers as $center): ?>
                      <option value="<?= $center['Center_Id'] ?>"><?= $center['Center_Name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Start Time</label>
                  <input type="time" name="Start_Time" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>End Time</label>
                  <input type="time" name="End_Time" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>Start Date</label>
                  <input type="date" name="Batch_Start_Date" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>End Date</label>
                  <input type="date" name="Batch_End_Date" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>Description</label>
                  <input type="text" name="Description" class="form-control" placeholder= "Enter Batch Description">
                </div>
                <div class="col-md-6 form-group">
                  <label>Status</label>
                  <select name="Batch_Status" class="form-control">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                  </select>
                </div>
                    <div class="col-md-6 form-group">
      <label>Recorded By</label>
      <input type="text" name="Rec_Added_By" class="form-control" value="<?= old('Rec_Added_By') ?>" placeholder="Enter Who Recorded Record" >
    </div>

    <div class="col-md-6 form-group">
      <label>Recorded On</label>
      <input type="date" name="Rec_Added_On" class="form-control" value="<?= old('Rec_Added_On') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Updated By</label>
      <input type="text" name="Rec_Updated_By" class="form-control" value="<?= old('Rec_Updated_By') ?>" placeholder="Enter Who Updated Record" >
    </div>

    <div class="col-md-6 form-group">
      <label>Updated On</label>
      <input type="date" name="Rec_Updated_On" class="form-control" value="<?= old('Rec_Updated_On') ?>">
    </div>
  </div>
              </div>
              <div class="mt-3">
                <a href="<?= site_url('batches') ?>" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-primary">Save </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= view('includes/footer'); ?>
