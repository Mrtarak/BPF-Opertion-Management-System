<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
  <?= view('includes/sidebar'); ?>

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">

          <?= view('includes/breadcrumb', [
              'main' => 'Home',
              'sub' => 'Program Themes',
              'sub_url' => base_url('program_theme')
            ]); ?>
            
          <div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="card-title mb-0">
    <i class="mdi mdi-book-open-page-variant me-2"></i>Program Theme List
  </h4>
    <a href="<?php echo base_url('forms/add_program_theme'); ?>" class="btn btn-primary btn-sm">
      <i class="mdi mdi-plus-circle-outline me-1"></i> Add New Program Theme
    </a>
  </div>
              <div class="card">
              <div class="card-body">
            <div class="table-responsive ">
  <table id="themeTable" class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Theme Name</th>
        <th>Description</th>
        <th>Theme Added On</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
                      <?php if (!empty($themes)): ?>
                        <?php $i = 1; foreach ($themes as $theme): ?>
                          <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($theme['Program_Theme_Name']) ?></td>
                            <td><?= esc($theme['Theme_Description']) ?></td>
                            <td><?= esc($theme['Theme_Added_On']) ?></td>
                            <td>
                          <a href="<?= base_url('program_theme/view/' . $theme['Program_Theme_Id']) ?>" class="btn btn-info btn-sm">
                            <i class="mdi mdi-eye"></i>
                          </a>
                          <a href="<?= base_url('program_theme/edit/' . $theme['Program_Theme_Id']) ?>" class="btn btn-warning btn-sm">
                            <i class="mdi mdi-pencil"></i>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <tr><td colspan="5" class="text-center">No themes found.</td></tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
</div>
        </div>
        </div>
</div>
        </div>

<?= view('includes/footer'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    var table = $('#themeTable').DataTable({
paging: true,
      searching: true,
      ordering: true,
      info: true,    
        language: {
        search: "_INPUT_",
        searchPlaceholder: "Search program theme..."
      }
    });
});        
</script>