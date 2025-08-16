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

          <?= view('includes/breadcrumb'); ?>
              
            <h4 class="card-title">Add New Batch</h4>
            <form method="post" action="<?= site_url('batches/store') ?>">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Batch Name <span class="text-danger">*</span></label>
                  <input type="text" name="Batch_Name" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Program <span class="text-danger">*</span></label>
                  <select name="Program_Id" class="form-control" required>
                    <option value="">-- Select Program --</option>
                    <?php foreach ($programs as $program): ?>
                      <option value="<?= $program['Program_Id'] ?>"><?= $program['Program_Name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Center <span class="text-danger">*</span></label>
                  <select name="Center_Id" class="form-control" required>
                    <option value="">-- Select Center --</option>
                    <?php foreach ($centers as $center): ?>
                      <option value="<?= $center['Center_Id'] ?>"><?= $center['Center_Name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Start Time <span class="text-danger">*</span></label>
                  <input type="time" name="Start_Time" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>End Time <span class="text-danger">*</span></label>
                  <input type="time" name="End_Time" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>Start Date <span class="text-danger">*</span></label>
                  <input type="date" name="Batch_Start_Date" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                  <label>End Date <span class="text-danger">*</span></label>
                  <input type="date" name="Batch_End_Date" class="form-control">
                </div>
                                <div class="col-md-6 form-group">
                  <label>Status <span class="text-danger">*</span></label>
                  <select name="Batch_Status" class="form-control">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <label>Remarks</label>
                  <textarea name="Remarks" class="form-control" placeholder= "Enter Batch Remarks"></textarea>
                </div>
  <div class="mt-4 d-flex justify-content-center flex-wrap gap-3">
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
