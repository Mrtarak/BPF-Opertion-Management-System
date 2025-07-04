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
                <li class="breadcrumb-item"><a href="<?php echo base_url('goals'); ?>">Manage Goals</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Goal</li>
                </ol>
              </nav>

        <h4 class="card-title">Add Goal</h4>
<form method="post" action="<?= site_url('goals/save') ?>">
  <div class="row">
    <div class="col-md-6 form-group">
      <label>Goal ID</label>
      <input type="text" name="Goal_Id" class="form-control" required>
    </div>

    <div class="col-md-6 form-group">
      <label>Goal Type</label>
      <select name="Goal_Type_Id" class="form-control" required>
        <option value="">--Select--</option>
        <?php foreach ($types as $type): ?>
          <option value="<?= $type['Goal_Type_Id'] ?>"><?= $type['Goal_Name'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="col-md-6 form-group">
      <label>Recorded By</label>
      <input type="text" name="Rec_Added_By" class="form-control" value="<?= old('Rec_Added_By') ?>" placeholder="Enter Who Recorded Record">
    </div>

    <div class="col-md-6 form-group">
      <label>Recorded On</label>
      <input type="date" name="Rec_Added_On" class="form-control" value="<?= old('Rec_Added_On') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Updated By</label>
      <input type="text" name="Rec_Updated_By" class="form-control" value="<?= old('Rec_Updated_By') ?>" placeholder="Enter Who Updated Record">
    </div>

    <div class="col-md-6 form-group">
      <label>Updated On</label>
      <input type="date" name="Rec_Updated_On" class="form-control" value="<?= old('Rec_Updated_On') ?>">
    </div>
  </div>

  <div class="mt-4">
    <a href="<?= site_url('goals') ?>" class="btn btn-light">Cancel</a>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>

<?= view('includes/footer'); ?>
