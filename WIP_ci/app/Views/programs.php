<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
  <?= view('includes/sidebar'); ?>

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <button class="btn btn-secondary mb-3" onclick="window.history.back()">
              <i class="mdi mdi-arrow-left"></i> Back
            </button>

            <nav aria-label="breadcrumb" class="mb-3">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('programs'); ?>">Manage Programs</a></li>
              </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-0">Programs</h4>
              <a href="<?php echo base_url('forms/add_programs'); ?>" class="btn btn-success btn-sm">
                <i class="mdi mdi-account-plus"></i> Add New Program
              </a>
            </div>
            <p class="card-description mb-3">Manage Programs</p>
            <div class="row mb-4">
              <div class="col-md-4">
                <form method="get" action="<?= site_url('programs') ?>">
                  <label for="programSelect" class="form-label">Select Program</label>
                  <select name="program_filter" id="programSelect" class="form-select" onchange="this.form.submit()">
                    <option value="">-- Select Program --</option>
                    <option value="vijetaas" <?= (isset($_GET['program_filter']) && $_GET['program_filter'] === 'vijetaas') ? 'selected' : '' ?>>Vijetaas</option>
                    <option value="learning_adda" <?= (isset($_GET['program_filter']) && $_GET['program_filter'] === 'learning_adda') ? 'selected' : '' ?>>Learning Adda</option>
                    <option value="digital_shakti" <?= (isset($_GET['program_filter']) && $_GET['program_filter'] === 'digital_shakti') ? 'selected' : '' ?>>Digital Shakti</option>
                    <option value="doosra_mauka" <?= (isset($_GET['program_filter']) && $_GET['program_filter'] === 'doosra_mauka') ? 'selected' : '' ?>>Doosra Mauka</option>
                  </select>
                </form>
              </div>
           </div>
           <?php foreach ($programs as $program): ?>
  <div class="program-details" data-program="<?= strtolower(str_replace(' ', '_', $program['Program_Name'])) ?>" style="display: <?= (isset($_GET['program_filter']) && $_GET['program_filter'] === strtolower(str_replace(' ', '_', $program['Program_Name']))) ? 'block' : 'none' ?>;">
    <h5 class="mb-3">Program Details - <?= esc($program['Program_Name']) ?></h5>
    <div class="row">
      <div class="col-md-12"><strong>Program Name:</strong> <?= esc($program['Program_Name']) ?></div>
      <div class="col-md-12"><strong>Program About:</strong> <?= esc($program['Program_About']) ?></div>
      <div class="col-md-12"><strong>Program Recorded By:</strong> <?= esc($program['Rec_Added_By']) ?></div>
      <div class="col-md-12"><strong>Start Date:</strong> <?= esc($program['Program_Start_Date']) ?></div>
      <div class="col-md-12"><strong>End Date:</strong> <?= esc($program['Program_End_Date']) ?></div>
      <div class="col-md-12"><strong>Applicable For:</strong> <?= esc($program['Applicable_For']) ?></div>
      <div class="col-md-12"><strong>Updated By:</strong> <?= esc($program['Rec_Updated_By']) ?></div>
      <div class="col-md-12"><strong>Last Updated:</strong> <?= esc($program['Rec_Last_Updated_On']) ?></div>
      <div class="col-md-12"><strong>Theme:</strong> <?= esc($program['Program_Theme_Id']) ?></div>
      <div class="col-md-12"><strong>Status:</strong>
        <label class="badge badge-<?= ($program['Program_Status'] === 'Active') ? 'success' : 'danger' ?>">
          <?= esc($program['Program_Status']) ?>
        </label>
      </div>
    </div>
    <div class="mt-3">
      <a href="<?= site_url('programs/edit/' . $program['Program_Id']) ?>" class="btn btn-warning btn-sm" title="Edit">
        <i class="mdi mdi-pencil"></i>
      </a>
      <a href="<?= site_url('programs/delete/' . $program['Program_Id']) ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure?');">
        <i class="mdi mdi-delete"></i>
      </a>
    </div>
  </div>
<?php endforeach; ?>


            
          <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
             <?= view('includes/footer'); ?>