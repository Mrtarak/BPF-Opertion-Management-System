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
        <h4 class="card-title">Edit Goal</h4>
        <form method="post" action="<?= site_url('goals/update/'.$goal['Goal_Id']) ?>">
          <div class="form-group">
            <label>Goal ID</label>
            <input type="text" name="Goal_Id" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Goal Type</label>
            <select name="Goal_Type_Id" class="form-control" required>
              <option value="">--Select--</option>
              <?php foreach ($types as $type): ?>
                <option value="<?= $type['Goal_Type_Id'] ?>"> <?= $type['Goal_Name'] ?> </option>
              <?php endforeach; ?>
            </select>
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
        <a href="<?= site_url('goals') ?>" class="btn btn-light">Cancel</a>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= view('includes/footer'); ?>
