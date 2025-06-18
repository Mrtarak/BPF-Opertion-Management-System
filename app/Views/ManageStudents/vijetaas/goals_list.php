<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
    <?= view('includes/sidebar'); ?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

          <?= view('includes/breadcrumb'); ?>

          <div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="card-title mb-0">
    <i class="mdi mdi-book-open-page-variant me-2"></i>Vijetaas Goal List
  </h4>
<a href="<?= base_url('students/vijetaas/goals/add'); ?>" class="btn btn-primary btn-sm">
    <i class="mdi mdi-plus-circle-outline me-1"></i> Add New Goal
</a>
  </div>
</div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="goalsTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Goal Type</th>
                                    <th>Mentor</th>
                                    <th>Start Date</th>
                                    <th>Expected Completion</th>
                                    <th>Actual Completion</th>
                                    <th>Target Value</th>
                                    <th>Achieved</th>
                                    <th>Self %</th>
                                    <th>Mentor %</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($goals)): ?>
                                    <?php $i = 1; foreach ($goals as $g): ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= esc($g['First_Name'].' '.$g['Last_Name']) ?></td>
                                            <td><?= esc($g['Goal_Type_Id']) ?></td>
                                            <td><?= esc($g['Mentor_Id']) ?></td>
                                            <td><?= esc($g['Goal_Start_On']) ?></td>
                                            <td><?= esc($g['Goal_Expected_completion_Date']) ?></td>
                                            <td><?= esc($g['Goal_Actual_completion_Date'] ?? 'N/A') ?></td>
                                            <td><?= esc($g['Goal_Target_Value']) ?></td>
                                            <td><?= esc($g['Goal_Achieved'] ?? 'N/A') ?></td>
                                            <td><?= esc($g['Self_Progress_Percentage']) ?>%</td>
                                            <td><?= esc($g['Mentor_Progress_Percentage'] ?? 'N/A') ?>%</td>
                                            <td>
                              <a href="<?= base_url('students/vijetaas/goals/view/' . $g['Goal_Id']) ?>" class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
                              </a>
                              <a href="<?= base_url('students/vijetaas/goals/edit/' . $g['Goal_Id']) ?>" class="btn btn-warning btn-sm">
                                <i class="mdi mdi-pencil"></i>
                              </a>
                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="12" class="text-center">No goals found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

<?= view('includes/footer'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#goalsTable').DataTable({
        paging: true,
        searching: true,
        ordering: true,
        info: true
    });
});
</script>
