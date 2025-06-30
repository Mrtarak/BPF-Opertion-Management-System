

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
                <li class="breadcrumb-item"><a href="<?php echo base_url('users'); ?>">Manage Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add User</li>
                </ol>
              </nav>

               <h4 class="card-title">Users</h4>
<p class="card-description">Add user</p>

<form class="forms-sample" action="<?= site_url('users/store') ?>" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-6 form-group">
      <label> First Name</label>
      <input type="text" name="User_FirstName" class="form-control" value="<?= old('User_FirstName') ?>" placeholder="Enter First Name" >
    </div>

    <div class="col-md-6 form-group">
      <label> Last Name</label>
      <input type="text" name="User_LastName" class="form-control" value="<?= old('User_LastName') ?>" placeholder="Enter Last Name" >
    </div>

    <div class="col-md-6 form-group">
      <label>Gender</label>
      <select class="form-select" name="User_Gender" >
    <option value="">Select Gender</option>
    <option value="Male" <?= old('User_Gender') == 'Male' ? 'selected' : '' ?>>Male</option>
    <option value="Female" <?= old('User_Gender') == 'Female' ? 'selected' : '' ?>>Female</option>
    <option value="Other" <?= old('User_Gender') == 'Other' ? 'selected' : '' ?>>Other</option>
</select>
    </div>
    </div>

    <div class="col-md-6 form-group">
      <label>DOB</label>
      <input type="date" name="User_DOB" class="form-control" value="<?= old('User_DOB') ?>">
    </div>

    <div class="col-md-6 form-group">
      <label>Father Name</label>
      <input type="text" name="User_FatherName" class="form-control" value="<?= old('User_FatherName') ?>" placeholder="Enter Father Name" >
    </div>

    <div class="col-md-6 form-group">
      <label>Mother Name</label>
      <input type="text" name="User_MotherName" class="form-control" value="<?= old('User_MotherName') ?>" placeholder="Enter Mother Name" >
    </div>

    <div class="col-md-6 form-group">
      <label>Aadhar Number</label>
      <input type="text" name="User_Aadhar_No" class="form-control" value="<?= old('User_Aadhar_No') ?>" placeholder="Enter Aadhar Number" >
    </div>

    <div class="col-md-6 form-group">
      <label>Phone Number</label>
      <input type="text" name="User_Phone_No" class="form-control" value="<?= old('User_Phone_No') ?>" placeholder="Enter Phone Number" >
    </div>

    <div class="col-md-6 form-group">
      <label>Village/City</label>
      <input type="text" name="User_Village_City" class="form-control" value="<?= old('User_Village_City') ?>" placeholder="Enter Village/City" >
    </div>

    <div class="col-md-6 form-group">
      <label>District</label>
      <input type="text" name="User_District" class="form-control" value="<?= old('User_District') ?>" placeholder="Enter District" >
    </div>

    <div class="col-md-6 form-group">
      <label>State</label>
      <input type="text" name="User_State" class="form-control" value="<?= old('User_State') ?>" placeholder="Enter State" >
    </div>

    <div class="col-md-6 form-group">
      <label>Nationality</label>
      <input type="text" name="User_Nationality	" class="form-control" value="<?= old('User_Nationality	') ?>" placeholder="Enter Nationality" >
    </div>

    <div class="col-md-6 form-group">
      <label>Joining Date</label>
      <input type="date" name="	User_Joining_Date" class="form-control" value="<?= old('User_Joining_Date') ?>" >
    </div>

    <div class="col-md-6 form-group">
      <label>Profile Photo</label>
      <input type="file" name="User_Photo" class="form-control" value="<?= old('User_Photo') ?>" placeholder="Upload Your Photo" >
    </div>

    <div class="col-md-6 form-group">
      <label>Aadhar Photo</label>
      <input type="file" name="User_Aadhar_Photo" class="form-control" value="<?= old('User_Aadhar_Photo') ?>" placeholder="Upload Aadhar Photo" >
    </div>

    <div class="col-md-6 form-group">
  <label>Role</label>
  <select class="form-select" name="Role_Id" >
    <option value="">-- Select Role --</option>
    <?php if (isset($roles) && is_array($roles)) : ?>
      <?php foreach ($roles as $role) : ?>
        <option value="<?= $role['Role_Id'] ?>">
          <?= $role['Role_Name'] ?>
        </option>
      <?php endforeach; ?>
    <?php endif; ?>
  </select>
</div>

    <div class="col-md-6 form-group">
  <label>Program</label>
  <select class="form-select" name="Program_Id" >
     <option value="">-- Select Program --</option>
    <?php if (isset($programs) && is_array($programs)) : ?>
      <?php foreach ($programs as $program) : ?>
        <option value="<?= $program['Program_Id'] ?>">
          <?= $program['Program_Name'] ?>
        </option>
      <?php endforeach; ?>
    <?php endif; ?>
  </select>
</div>

    <div class="col-md-6 form-group">
      <label>Address</label>
      <input type="text" name="User_Address" class="form-control" value="<?= old('User_Address') ?>" placeholder="Enter Address" >
    </div>

    <div class="col-md-6 form-group">
      <label>Status</label>
      <select class="form-select" name="User_Status" >
    <option value="">Select Status</option>
    <option value="Active" <?= old('User_Status') == 'Active' ? 'selected' : '' ?>>Active</option>
    <option value="InActive" <?= old('User_Status') == 'InActive' ? 'selected' : '' ?>>InActive</option>
    <option value="Completed" <?= old('User_Status') == 'Completed' ? 'selected' : '' ?>>Completed</option>
</select>
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

<!-- Footer scripts -->
<?= view('includes/footer'); ?>
