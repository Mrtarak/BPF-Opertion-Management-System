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
                <li class="breadcrumb-item"><a href="<?php echo base_url('users'); ?>">Manage Rights</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add New Right</li>
                </ol>
              </nav>

               <h4 class="card-title">Rights</h4>
               <p class="card-description">Add New Right</p>

        <form method="post" action="<?= site_url('rights/save') ?>">
          <div class="row">
            <div class="col-md-6 form-group">
              <label>Right ID</label>
              <input type="text" name="Right_Id" class="form-control" id="Right_Id" placeholder="Enter Right ID" >
            </div>

            <div class="col-md-6 form-group">
      <label>Right Title</label>
      <input type="text" name="Rights_Title" class="form-control" value="<?= old('Rights_Title') ?>" placeholder="Enter Title/Role for Right" >
    </div>

            <div class="col-md-6 form-group">
              <label >Program Info</label>
              <input type="text" name="Program_Info" class="form-control" id="Program_Info" placeholder="Enter Program Info" >
            </div>

            <div class="col-md-6 form-group">
              <label>Event Info</label>
              <input type="text" name="Event_Info" class="form-control" id="Event_Info" placeholder="Enter Event Info" >
            </div>

            <div class="col-md-6 form-group">
              <label>Center Info</label>
              <input type="text" name="Center_Info" class="form-control" id="Center_Info" placeholder="Enter Center Info" >
            </div>

            <div class="col-md-6 form-group">
              <label>Asset Info</label>
              <input type="text" name="Asset_Info" class="form-control" id="Asset_Info" placeholder="Enter Asset Info" >
            </div>

            <div class="col-md-6 form-group">
              <label>User Info</label>
              <input type="text" name="User_Info" class="form-control" id="User_Info" placeholder="Enter User Info" >
            </div>

            <div class="col-md-6 form-group">
              <label>Fees Info</label>
              <input type="text" name="Fees_Info" class="form-control" id="Fees_Info" placeholder="Enter Fees Info" >
            </div>

            <div class="col-md-6 form-group">
              <label>Salary Info</label>
              <input type="text" name="Salary_Info" class="form-control" id="Salary_Info" placeholder="Enter Salary Info" >
            </div>

            <div class="col-md-6 form-group">
              <label>Expenses Info</label>
              <input type="text" name="Expenses_Info" class="form-control" id="Expenses_Info" placeholder="Enter Expenses Info" >
            </div>

             <div class="col-md-6 form-group">
                <label>Can Edit</label>
                <select name="Can_Edit" class="form-select">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            
            <div class="col-md-6 form-group">
                <label>Can Delete</label>
                <select name="Can_Delete" class="form-select">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="col-md-6 form-group">
      <label>Rights Summary</label>
      <input type="text" name="Rights_Summary" class="form-control" value="<?= old('Rights_Summary') ?>" placeholder="Enter Summary of Rights" >
    </div>

                <div class="col-md-6 form-group">
      <label>Recorded By</label>
      <input type="text" name="Record_Added_By" class="form-control" value="<?= old('Record_Added_By') ?>" placeholder="Enter Who Recorded Record" >
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
      <label>Last Updated On</label>
      <input type="date" name="Rec_Last_Updated_On" class="form-control" value="<?= old('Rec_Last_Updated_On') ?>">
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

