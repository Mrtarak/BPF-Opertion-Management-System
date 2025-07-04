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
                <li class="breadcrumb-item"><a href="<?php echo base_url('ManageCenter/center'); ?>">Manage Center</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Center</li>
                </ol>
              </nav>

              <h4 class="card-title">Center</h4>
<p class="card-description">Edit Center</p>

<form class="forms-sample" action="<?= site_url('center/store') ?>" method="post">
  <div class="row">
    <div class="col-md-6 form-group">
      <label>Center Id</label>
      <input type="text" name="Center_Id" class="form-control" value="<?= old('Center_Id') ?>" >
    </div>

    <div class="col-md-6 form-group">
      <label>Center Name</label>
      <input type="text" name="Center_Name" class="form-control" value="<?= old('Center_Name') ?>" placeholder="Enter Center Name" >
    </div>

    <div class="col-md-6 form-group">
      <label>Center Head</label>
      <input type="text" name="Center_Head_Id" class="form-control" value="<?= old('Center_Head_Id') ?>" placeholder="Select Center Head" >
    </div>

    <div class="col-md-6 form-group">
      <label>Center Coordinator</label>
      <input type="date" name="Center_Coordinator_Id" class="form-control" value="<?= old('Center_Coordinator_Id') ?>" >
    </div>

    <div class="col-md-6 form-group">
      <label>Status</label>
      <select class="form-select" name="Center_Status" >
    <option value="">Select Status</option>
    <option value="Active" <?= old('Center_Status') == 'Active' ? 'selected' : '' ?>>Active</option>
    <option value="InActive" <?= old('Center_Status') == 'InActive' ? 'selected' : '' ?>>InActive</option>
    <option value="Completed" <?= old('Center_Status') == 'Completed' ? 'selected' : '' ?>>Completed</option>
</select>
    </div>

    <div class="col-md-6 form-group">
      <label>Description</label>
      <input type="date" name="Center_Description" class="form-control" value="<?= old('Center_Description') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>InAugurated By</label>
      <input type="date" name="Center_Inaugurated_By" class="form-control" value="<?= old('Center_Inaugurated_By') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Center Head Contact</label>
      <input type="date" name="Center_Head_Contact" class="form-control" value="<?= old('Center_Head_Contact') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Opening Date</label>
      <input type="date" name="Center_Opening_Date" class="form-control" value="<?= old('Center_Opening_Date') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Address</label>
      <input type="text" name="Center_Address" class="form-control" value="<?= old('Center_Address') ?>" placeholder="Enter Address" >
    </div>

    <div class="col-md-6 form-group">
      <label>City</label>
      <input type="text" name="Center_City" class="form-control" value="<?= old('Center_City') ?>" placeholder="Enter City" >
    </div>

    <div class="col-md-6 form-group">
      <label>State</label>
      <input type="text" name="Center_State" class="form-control" value="<?= old('Center_State') ?>" placeholder="Enter State" >
    </div>

    <div class="col-md-6 form-group">
      <label>Capacity</label>
      <input type="text" name="Center_Capacity" class="form-control" value="<?= old('Center_Capacity') ?>" placeholder="Enter Capacity of Members" >
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

  <div class="mt-4">
    <a href="<?= site_url('center') ?>" class="btn btn-light">Cancel</a>
    <button type="submit" class="btn btn-primary me-2">Save</button>
  </div>
</form>

      </div>
    </div>
  </div>
</div>

<!-- Footer scripts -->
<?= view('includes/footer'); ?>
