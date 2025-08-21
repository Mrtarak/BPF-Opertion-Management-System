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

            <div class="d-flex justify-content-between align-items-center mb-3">
  <h4 class="card-title mb-0">
    <i class="mdi mdi-book-open-page-variant me-2"></i>Batch List
  </h4>
  <div class="d-flex align-items-center">
    <label for="statusFilter" class="me-2">Status:</label>
    <select id="statusFilter" class="form-select me-3" style="width: 150px;">
      <option value="">All</option>
      <option value="Active">Active</option>
      <option value="InActive">Inactive</option>
      <option value="Completed">Completed</option>
    </select>
    <a href="<?php echo base_url('batches/add'); ?>" class="btn btn-primary btn-sm">
      <i class="mdi mdi-plus-circle-outline me-1"></i> Add New Batch
    </a>
  </div>
</div>
            <div class="card">
              <div class="card-body">
              <div class="table-responsive">
                <table id="batchTable" class="table table-bordered">
                  <thead>
      <tr>
        <th>#</th>
        <th>Batch Name</th>
        <th>Program</th>
        <th>Center</th>
        <th>Status</th>
        <th>Start Date</th>  
        <th>End Date</th>
        <th>Actions</th>
      </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($batches)): ?>
                    <?php $i = 1; foreach ($batches as $batch): ?>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td><?= esc($batch['Batch_Name']) ?></td>
                        <td><?= esc($batch['Program_Id']) ?></td>
                        <td><?= esc($batch['Center_Id']) ?></td>
                        <td>
                          <span class="badge <?= $batch['Batch_Status'] === 'Active' ? 'badge-success' : 'badge-danger' ?>">
                            <?= esc($batch['Batch_Status']) ?>
                          </span>
                        </td>
                        <td><?= esc($batch['Batch_Start_Date']) ?></td>
                        <td><?= esc($batch['Batch_End_Date']) ?></td>
                        <td>
                          <a href="<?= base_url('batches/view/' . $batch['Batch_Id']) ?>" class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
                          </a>
                          <a href="<?= site_url('batches/edit/' . $batch['Batch_Id']) ?>" class="btn btn-warning btn-sm">
                            <i class="mdi mdi-pencil"></i>
                          </a>
                          
                        </td>
                      </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                      <tr><td colspan="8" class="text-center">No batches found.</td></tr>
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
$(document).ready(function() {
  var table = $('#batchTable').DataTable({
    paging: true,
    searching: true,
    ordering: true,
    info: true,
    createdRow: function(row, data, dataIndex) {
      var statusText = $(row).find('td:eq(4)').text().trim(); // Corrected index
      $('td:eq(4)', row).attr('data-search', statusText);     // Corrected index
    },
    columnDefs: [
      {
        targets: 4, // Corrected index for Batch_Status column
        render: function(data, type, row) {
          if (type === 'filter' || type === 'sort') {
            return $('<div>').html(data).text().trim();
          }
          return data;
        }
      }
    ]
  });

  // Status Filter
  $('#statusFilter').on('change', function() {
    var selected = $(this).val();
    table.column(4) // Corrected index for Batch_Status column
         .search(selected ? '^' + selected + '$' : '', true, false)
         .draw();
  });
});
  </script>