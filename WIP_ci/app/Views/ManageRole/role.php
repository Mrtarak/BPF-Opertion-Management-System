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
                <li class="breadcrumb-item active" aria-current="page">Manage Role & Rights</li>
              </ol>
            </nav>

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-0">Roles List</h4>
              <a href="<?= site_url('roles/add') ?>" class="btn btn-success btn-sm">
                <i class="mdi mdi-account-plus"></i> Add New Role
              </a>
            </div>
            <p class="card-description">Manage Different Roles</p>

            <div class="table-responsive mb-5">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Role ID</th>
                    <th>Role Name</th>
                    <th>Description</th>
                    <th>Rights</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($roles as $role): ?>
                    <tr>
                      <td><?= esc($role['Role_Id']) ?></td>
                      <td><?= esc($role['Role_Name']) ?></td>
                      <td><?= esc($role['Role_Description']) ?></td>
                      <td><?= esc($role['Rights_Summary'] ?? 'No Summary') ?></td>
                      <td>
                        <a href="<?= site_url('roles/edit/' . $role['Role_Id']) ?>" class="btn btn-warning btn-sm">
                          <i class="mdi mdi-pencil"></i> Edit
                        </a>
                        <a href="<?= site_url('roles/delete/' . $role['Role_Id']) ?>" onclick="return confirm('Delete role?')" class="btn btn-danger btn-sm">
                          <i class="mdi mdi-delete"></i> Delete
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php if (empty($roles)): ?>
                    <tr>
                      <td colspan="5" class="text-center">No roles found.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>

