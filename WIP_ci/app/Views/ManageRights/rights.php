<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
  <?= view('includes/sidebar'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <!-- Back Button -->
            <button class="btn btn-secondary mb-3" onclick="window.history.back()">
              <i class="mdi mdi-arrow-left"></i> Back
            </button>

            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb" class="mb-3">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('/') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Rights</li>
              </ol>
            </nav>

          <?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-0">Rights List</h4>
              <a href="<?= site_url('rights/add') ?>" class="btn btn-success btn-sm">
                <i class="mdi mdi-shield-account"></i> Add New Right
              </a>
            </div>
            <p class="card-description">Given Different Rights for Different Roles</p>

            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Right ID</th>
                    <th>Right Title</th>
                    <th>Rights Summary</th>
                    <th>Program Info</th>
                    <th>Event Info</th>
                    <th>Center Info</th>
                    <th>Asset Info</th>
                    <th>User Info</th>
                    <th>Fees</th>
                    <th>Salary</th>
                    <th>Expenses</th>
                    <th>Can Edit</th>
                    <th>Can Delete</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rights as $row): ?>
                    <tr>
                      <td><?= esc($row['Right_Id']) ?></td>
                      <td><?= esc($row['Rights_Title']) ?></td>
                      <td><?= esc($row['Rights_Summary'] ?? 'N/A') ?></td>
                      <td><?= esc($row['Program_Info']) ?></td>
                      <td><?= esc($row['Event_Info']) ?></td>
                      <td><?= esc($row['Center_Info']) ?></td>
                      <td><?= esc($row['Asset_Info']) ?></td>
                      <td><?= esc($row['User_Info']) ?></td>
                      <td><?= esc($row['Fees_Info']) ?></td>
                      <td><?= esc($row['Salary_Info']) ?></td>
                      <td><?= esc($row['Expenses_Info']) ?></td>
                      <td><?= esc($row['Can_Edit']) ?></td>
                      <td><?= esc($row['Can_Delete']) ?></td>
                      <td>
                        <a href="<?= site_url('rights/edit/' . $row['Right_Id']) ?>" class="btn btn-warning btn-sm">
                          <i class="mdi mdi-pencil"></i> Edit
                        </a>
                        <a href="<?= site_url('rights/delete/' . $row['Right_Id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this right?');">
                          <i class="mdi mdi-delete"></i> Delete
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php if (empty($rights)): ?>
                    <tr>
                      <td colspan="13" class="text-center">No rights assigned yet.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>

          </div> 
        </div>
      </div>
    </div>
  </div>
</div>

