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
                <li class="breadcrumb-item"><a href="<?php echo base_url('programs'); ?>">Manage Programs</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Program</li>
                </ol>
              </nav>

              <h4 class="card-title">Programs</h4>
<p class="card-description">Add Program</p>

<?php if (session()->getFlashdata('errors')): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <li><?= esc($error) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>

<form class="forms-sample" action="<?= site_url('programs/store') ?>" method="post">
  <div class="row">
    <div class="col-md-6 form-group">
      <label>Program Name</label>
      <input type="text" name="Program_Name" class="form-control" value="<?= old('Program_Name') ?>" placeholder="Enter Program Name" required>
    </div>

    <div class="col-md-6 form-group">
      <label>About</label>
      <input type="text" name="Program_About" class="form-control" value="<?= old('Program_About') ?>" placeholder="Enter About Program" required>
    </div>

    <div class="col-md-6 form-group">
      <label>Start Date</label>
      <input type="date" name="Program_Start_Date" class="form-control" value="<?= old('Program_Start_Date') ?>" required>
    </div>

    <div class="col-md-6 form-group">
      <label>End Date</label>
      <input type="date" name="Program_End_Date" class="form-control" value="<?= old('Program_End_Date') ?>">
    </div>

    <div class="col-md-6 form-group">
  <label>Program Theme</label>
  <select class="form-select" name="Program_Theme_Id" required>
    <option value="">Select Theme</option>
    <option value="THEME_001" <?= old('Program_Theme_Id') == 'THEME_001' ? 'selected' : '' ?>>Employability</option>
    <option value="THEME_002" <?= old('Program_Theme_Id') == 'THEME_002' ? 'selected' : '' ?>>Education</option>
    <option value="THEME_003" <?= old('Program_Theme_Id') == 'THEME_003' ? 'selected' : '' ?>>Environment</option>
    <option value="THEME_004" <?= old('Program_Theme_Id') == 'THEME_004' ? 'selected' : '' ?>>Well-Being</option>
  </select>
</div>



    <div class="col-md-6 form-group">
      <label>Applicable For</label>
      <input type="text" name="Applicable_For" class="form-control" value="<?= old('Applicable_For') ?>" placeholder="Enter Age Group" required>
    </div>

    <div class="col-md-6 form-group">
      <label>Status</label>
      <select class="form-select" name="Program_Status" required>
    <option value="">Select Status</option>
    <option value="Active" <?= old('Program_Status') == 'Active' ? 'selected' : '' ?>>Active</option>
    <option value="InActive" <?= old('Program_Status') == 'InActive' ? 'selected' : '' ?>>InActive</option>
    <option value="Completed" <?= old('Program_Status') == 'Completed' ? 'selected' : '' ?>>Completed</option>
</select>
    </div>

    <div class="col-md-6 form-group">
      <label>Recorded By</label>
      <input type="text" name="Rec_Added_By" class="form-control" value="<?= old('Rec_Added_By') ?>" placeholder="Enter Who Recorded Record" required>
    </div>

    <div class="col-md-6 form-group">
      <label>Recorded On</label>
      <input type="date" name="Rec_Added_On" class="form-control" value="<?= old('Rec_Added_On') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Updated By</label>
      <input type="text" name="Rec_Updated_By" class="form-control" value="<?= old('Rec_Updated_By') ?>" placeholder="Enter Who Updated Record" required>
    </div>

    <div class="col-md-6 form-group">
      <label>Updated On</label>
      <input type="date" name="Rec_Updated_On" class="form-control" value="<?= old('Rec_Updated_On') ?>">
    </div>
  </div>

  <div class="mt-4">
    <a href="<?= site_url('programs') ?>" class="btn btn-light">Cancel</a>
    <button type="submit" class="btn btn-primary me-2">Save</button>
  </div>
</form>

      </div>
    </div>
  </div>
</div>

<!-- Footer scripts -->
<?= view('includes/footer'); ?>
