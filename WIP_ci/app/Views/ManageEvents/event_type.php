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

              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('ManageEvents/event_type'); ?>">Manage EventTypes</a></li>
                </ol>
              </nav>


            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-0">Event Types List</h4>
              <a href="<?= site_url('events/types/add') ?>" class="btn btn-success btn-sm">
                <i class="mdi mdi-plus"></i> Add Event Type
              </a>
            </div>
            <p class="card-description">Manage different event categories</p>

            <?php if (session()->getFlashdata('success')): ?>
              <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Type Name</th>
                    <th>Type</th>
                    <th>Added On</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($types as $type): ?>
                    <tr>
                      <td><?= esc($type['EventType_Id']) ?></td>
                      <td><?= esc($type['Event_TypeName']) ?></td>
                      <td><?= esc($type['Event_Type']) ?></td>
                      <td><?= esc($type['Rec_Added_On']) ?></td>
                      <td>
                        <a href="<?= site_url('events/types/edit/' . $type['EventType_Id']) ?>" class="btn btn-warning btn-sm"><i class="mdi mdi-pencil"></i></a>
                        <a href="<?= site_url('events/types/delete/' . $type['EventType_Id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="mdi mdi-delete"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  <?php if (empty($types)): ?>
                    <tr><td colspan="5" class="text-center">No event types found.</td></tr>
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
