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
                <li class="breadcrumb-item"><a href="<?php echo base_url('goals/types'); ?>">Manage GoalTypes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add GoalType</li>
                </ol>
              </nav>

        <h4 class="card-title">Add Goal Type</h4>
        <form method="post" action="<?= site_url('goals/types/save') ?>">
          <div class="form-group">
            <label>Goal Type ID</label>
            <input type="text" name="Goal_Type_Id" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Goal Name</label>
            <input type="text" name="Goal_Name" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="Goal_Description" class="form-control"></textarea>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Start Date</label>
              <input type="date" name="Goal_Start_On" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label>End Date</label>
              <input type="date" name="Goal_Upto" class="form-control">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Progress Percentage</label>
              <input type="number" name="Progress_Percentage" class="form-control">
            </div>
            <div class="form-row">
            <div class="col-md-6 form-group">
      <label>Progress Status</label>
      <select class="form-select" name="Progress_Status" >
    <option value="">Select Progress Status</option>
    <option value="In Progress" <?= old('Progress_Status') == 'In Progress' ? 'selected' : '' ?>>In Progress</option>
    <option value="Not Started Yet" <?= old('Progress_Status') == 'Not Statrted Yet' ? 'selected' : '' ?>>Not Statrted Yet</option>
    <option value="Completed" <?= old('Progress_Status') == 'Completed' ? 'selected' : '' ?>>Completed</option>
      </select>
    </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Target Value</label>
              <input type="number" name="Goal_Target_Value" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label>Achieved Value</label>
              <input type="number" name="Goal_Achieved_Value" class="form-control">
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
              <a href="<?= site_url('goals/types') ?>" class="btn btn-light">Cancel</a>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?= view('includes/footer'); ?>
