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
                <li class="breadcrumb-item active" aria-current="page">Manage Users</li>
              </ol>
            </nav>

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-0">User List</h4>
              <a href="<?= site_url('users/add') ?>" class="btn btn-success btn-sm">
                <i class="mdi mdi-account-plus"></i> Add New User
              </a>
            </div>
            <p class="card-description">Manage Users from all programs</p>

            <!-- Table -->
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Phone</th>
                    <th>Aadhar No</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                      <tr>
                        <td><?= esc($user['User_Id']) ?></td>
                        <td><?= esc($user['User_FirstName'] . ' ' . $user['User_LastName']) ?></td>
                        <td><?= esc($user['User_Gender']) ?></td>
                        <td><?= date('d M Y', strtotime($user['User_DOB'])) ?></td>
                        <td><?= esc($user['User_Phone_No']) ?></td>
                        <td><?= esc($user['User_Aadhar_No']) ?></td>
                        <td>
                          <?php if ($user['User_Status'] == 'Active'): ?>
                            <label class="badge badge-success">Active</label>
                          <?php else: ?>
                            <label class="badge badge-danger">Inactive</label>
                          <?php endif; ?>
                        </td>
                        <td>
                          <a href="<?= site_url('users/view/' . $user['User_Id']) ?>" class="btn btn-info btn-sm" title="View">
                            <i class="mdi mdi-eye"></i>
                          </a>
                          <a href="<?= site_url('users/edit/' . $user['User_Id']) ?>" class="btn btn-warning btn-sm" title="Edit">
                            <i class="mdi mdi-pencil"></i>
                          </a>
                          <a href="<?= site_url('users/delete/' . $user['User_Id']) ?>" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger btn-sm" title="Delete">
                            <i class="mdi mdi-delete"></i>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="8" class="text-center">No users found.</td>
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
             <?= view('includes/footer'); ?>