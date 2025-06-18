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
                  <!-- Page Header -->
                  <h4 class="card-title mb-4">
                    <i class="mdi mdi-book-open-page-variant me-2"></i> Vijetaas Goal Details
                  </h4><?php if (!empty($goal)): ?>
            <table class="table table-bordered">
                <tr>
                    <th>Goal ID</th>
                    <td><?= esc($goal['Goal_Id']) ?></td>
                </tr>
                <tr>
                    <th>Student</th>
                    <td><?= esc($goal['Student_Id']) ?> - <?= esc($goal['First_Name'] ?? '') ?> <?= esc($goal['Last_Name'] ?? '') ?></td>
                </tr>
                <tr>
                    <th>Goal Type</th>
                    <td><?= esc($goal['Goal_Type_Name'] ?? $goal['Goal_Type_Id']) ?></td>
                </tr>
                <tr>
                    <th>Mentor</th>
                    <td><?= esc($goal['Mentor_Id']) ?></td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td><?= esc($goal['Goal_Start_On']) ?></td>
                </tr>
                <tr>
                    <th>Expected Completion</th>
                    <td><?= esc($goal['Goal_Expected_completion_Date']) ?></td>
                </tr>
                <tr>
                    <th>Actual Completion</th>
                    <td><?= esc($goal['Goal_Actual_completion_Date']) ?: '---' ?></td>
                </tr>
                <tr>
                    <th>Target Value</th>
                    <td><?= esc($goal['Goal_Target_Value']) ?></td>
                </tr>
                <tr>
                    <th>Achieved</th>
                    <td><?= esc($goal['Goal_Achieved']) ?: '---' ?></td>
                </tr>
                <tr>
                    <th>Student Remark</th>
                    <td><?= esc($goal['Student_Remark']) ?: '---' ?></td>
                </tr>
                <tr>
                    <th>Mentor Remark</th>
                    <td><?= esc($goal['Mentor_Remark']) ?: '---' ?></td>
                </tr>
                <tr>
                    <th>Self Progress (%)</th>
                    <td><?= esc($goal['Self_Progress_Percentage']) ?>%</td>
                </tr>
                <tr>
                    <th>Mentor Progress (%)</th>
                    <td><?= esc($goal['Mentor_Progress_Percentage']) ?: '---' ?>%</td>
                </tr>
            </table>
        <div class="mt-4 text-center">
            <a href="<?= base_url('students/vijetaas/goals/edit/'.$goal['Goal_Id']) ?>" class="btn btn-warning"><i class="mdi mdi-pencil"></i> Edit 
        </a>
    <button class="btn btn-danger btn-sm" onclick="confirmDelete()"><i class="mdi mdi-delete"></i> Delete</button>
    </div>
        <?php else: ?>
            <p class="text-danger">No goal found!</p>
        <?php endif; ?>
<?= view('includes/footer'); ?>
