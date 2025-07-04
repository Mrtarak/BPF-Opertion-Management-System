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
                <li class="breadcrumb-item"><a href="<?php echo base_url('center'); ?>">Manage Center</a></li>
              </ol>
            </nav>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-0">Center</h4>
              <a href="<?php echo base_url('center/add'); ?>" class="btn btn-success btn-sm">
                <i class="mdi mdi-account-plus"></i> Add New Center
              </a>
            </div>
            <p class="card-description mb-3">Manage Center</p>
            <div class="row mb-4">
              <div class="col-md-4">
                <form method="get" action="<?= site_url('center') ?>">
                  <label for="centerSelect" class="form-label">Select Center</label>
                  <select name="center_filter" id="centerSelect" class="form-select" onchange="this.form.submit()">
                    <option value="">-- Select Center --</option>
                    <?php if (isset($centers) && is_array($centers)) : ?>
                      <?php foreach ($centers as $center) : ?>
                        <option value="<?= strtolower(str_replace(' ', '_', $center['Center_Name'])) ?>" 
                          <?= (isset($_GET['center_filter']) && $_GET['center_filter'] === strtolower(str_replace(' ', '_', $center['Center_Name']))) ? 'selected' : '' ?>>
                          <?= $center['Center_Name'] ?>
                        </option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                </form>
              </div>
           </div>
           <?php foreach ($centers as $center): ?>
  <div class="center-details" data-center="<?= strtolower(str_replace(' ', '_', $center['Center_Name'])) ?>" style="display: <?= (isset($_GET['center_filter']) && $_GET['center_filter'] === strtolower(str_replace(' ', '_', $center['Center_Name']))) ? 'block' : 'none' ?>;">
    <h5 class="mb-3">Center Details - <?= esc($center['Center_Name']) ?></h5>
    <div class="row">
      <div class="col-md-12"><strong>Center Name:</strong> <?= esc($center['Center_Name']) ?></div>
      <div class="col-md-12"><strong>Center Head:</strong> <?= esc($center['Center_Head_Id']) ?></div>
      <div class="col-md-12"><strong>Center Coordinator:</strong> <?= esc($center['Center_Coordinator']) ?></div>
      <div class="col-md-12"><strong>Center Description:</strong> <?= esc($center['Center_Description']) ?></div>
      <div class="col-md-12"><strong>Center Inaugurated By:</strong> <?= esc($center['Center_Inaugurated_By']) ?></div>
      <div class="col-md-12"><strong>Center Head Contact:</strong> <?= esc($center['Center_Head_Contact']) ?></div>
      <div class="col-md-12"><strong>Center Opening Date:</strong> <?= esc($center['Center_Opening_Date']) ?></div>
      <div class="col-md-12"><strong>Center Address:</strong> <?= esc($center['Center_Address']) ?></div>
      <div class="col-md-12"><strong>Center City:</strong> <?= esc($center['Center_City']) ?></div>
      <div class="col-md-12"><strong>Center State:</strong> <?= esc($center['Center_State']) ?></div>
      <div class="col-md-12"><strong>Center Capacity:</strong> <?= esc($center['Center_Capacity']) ?></div>
      <div class="col-md-12"><strong>Recorded By:</strong> <?= esc($center['Rec_Added_By']) ?></div>
      <div class="col-md-12"><strong>Recorded On:</strong> <?= esc($center['Rec_Added_On']) ?></div>
      <div class="col-md-12"><strong>Status:</strong>
        <label class="badge badge-<?= ($center['Center_Status'] === 'Active') ? 'success' : 'danger' ?>">
          <?= esc($center['Center_Status']) ?>
        </label>
      </div>
    </div>
    <div class="mt-3">
      <a href="<?= site_url('center/edit/' . $center['Center_Id']) ?>" class="btn btn-warning btn-sm" title="Edit">
        <i class="mdi mdi-pencil"></i>
      </a>
      <a href="<?= site_url('center/delete/' . $center['Center_Id']) ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure?');">
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