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

          <h4 class="card-title">Program Theme</h4>
            <h4 class="card-description">Add Program Theme</h4>
            <form id="programThemeForm" class="forms-sample" onsubmit="return validateProgramThemeForm()" action="<?= base_url('programTheme/store') ?>" method="post">
            <div class="row">
              <div  class="col-md-6 form-group">
                <label>Program Theme Name <span class="text-danger">*</span></label>
                <input type="text" name="program_theme_name" class="form-control" placeholder="Enter Program Theme Name">
              </div>
                <div class="col-md-12 form-group">
                             <label>Description <span class="text-danger">*</span></label>
                             <input type="text" class="form-control" placeholder="Enter Description for Program Theme">
                           </div>
                           <div class="col-md-6 form-group">
                             <label>Theme Suggested By</label>
                             <input type="text" class="form-control" placeholder="Enter who Suggested Theme">
                           </div>
                        <div class="col-md-6 form-group">
                          <label>Theme Added On <span class="text-danger">*</span></label>
                          <input type="date" class="form-control">
                        </div>
                          <div class="mt-4 d-flex justify-content-center flex-wrap gap-3">
    <a href="<?= site_url('programTheme') ?>" class="btn btn-light">Cancel</a>
    <button type="submit" class="btn btn-primary me-2">Save</button>
  </div>
            </form>
          </div>
        </div>
      </div>
<?php include('../partials/footer.php'); ?>
