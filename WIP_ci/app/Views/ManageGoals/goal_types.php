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
                <li class="breadcrumb-item"><a href="<?php echo base_url('goals/types'); ?>">Manage GoalTypes</a></li>
                </ol>
              </nav>

            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-0">Goal Types</h4>
              <a href="<?= site_url('goals/types/add') ?>" class="btn btn-success btn-sm">
                <i class="mdi mdi-plus"></i> Add Goal Type
              </a>
            </div>

        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success"> <?= session()->getFlashdata('success') ?> </div>
        <?php endif; ?>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Goal Name</th>
              <th>Description</th>
              <th>Start</th>
              <th>End</th>
              <th>Progress</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($types as $type): ?>
              <tr>
                <td><?= esc($type['Goal_Name']) ?></td>
                <td><?= esc($type['Goal_Description']) ?></td>
                <td><?= esc($type['Goal_Start_On']) ?></td>
                <td><?= esc($type['Goal_Upto']) ?></td>
                <td><?= esc($type['Progress_Percentage']) ?>%</td>
                <td><?= esc($type['Progress_Status']) ?></td>
                <td>
                  <a href="<?= site_url('goals/types/edit/' . $type['Goal_Type_Id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= site_url('goals/types/delete/' . $type['Goal_Type_Id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this goal type?')">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= view('includes/footer'); ?>
