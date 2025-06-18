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

        <h4 class="card-title">Add New Goal</h4>
<form action="<?= base_url('students/vijetaas/goals/store') ?>" method="post">
  <div class="row">
    <div class="col-md-6 form-group">
      <label>Student <span class="text-danger">*</span></label>
                <select name="Student_Id" class="form-control" required>
                    <option value="">Select Student</option>
                    <!-- Dummy options, later dynamic -->
                    <option value="STU001">Rohit Sharma</option>
                    <option value="STU002">Sneha Patil</option>
                </select>
            </div>

            <div class="col-md-6 form-group">
                <label>Goal Type <span class="text-danger">*</span></label>
                <select name="Goal_Type_Id" class="form-control" required>
                    <option value="">Select Goal Type</option>
                    <option value="GT001">Job Placement</option>
                    <option value="GT002">Skill Improvement</option>
                </select>
            </div>

            <div class="col-md-6 form-group">
                <label>Mentor </label>
                <select name="Mentor_Id" class="form-control">
                    <option value="">Select Mentor</option>
                    <option value="MNT001">Amit Verma</option>
                    <option value="MNT002">Sneha Patil</option>
                </select>
            </div>
                <div class="col-md-6 form-group">
                    <label>Goal Start Date <span class="text-danger">*</span></label>
                    <input type="date" name="Goal_Start_On" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Expected Completion Date <span class="text-danger">*</span></label>
                    <input type="date" name="Goal_Expected_completion_Date" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                    <label>Actual Completion Date</label>
                    <input type="date" name="Goal_Actual_completion_Date" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label>Target Value <span class="text-danger">*</span></label>
                    <input type="number" name="Goal_Target_Value" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Goal Achieved</label>
                    <input type="number" name="Goal_Achieved" class="form-control">
                </div>

            <div class="col-md-12 form-group">
                <label>Student Remark</label>
                <textarea name="Student_Remark" class="form-control"></textarea>
            </div>
            <div class="col-md-12 form-group">
                <label>Mentor Remark</label>
                <textarea name="Mentor_Remark" class="form-control"></textarea>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Self Progress % <span class="text-danger">*</span></label>
                    <input type="number" name="Self_Progress_Percentage" class="form-control" required>
                </div>
                <div class="col-md-6 form-group">
                    <label>Mentor Progress %</label>
                    <input type="number" name="Mentor_Progress_Percentage" class="form-control">
                </div>
            </div>
  </div>

  <div class="mt-4 d-flex justify-content-center flex-wrap gap-3">
    <a href="<?= site_url('goals') ?>" class="btn btn-light">Cancel</a>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
      </div>
    </div>
  </div>
</div>

<?= view('includes/footer'); ?>
