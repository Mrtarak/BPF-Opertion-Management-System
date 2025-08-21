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

            <!-- Header with Status Filter -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="card-title mb-0">Learning Adda List</h4>
                <div class="d-flex align-items-center">
                    <label for="statusFilter" class="me-2">Status:</label>
                    <select id="statusFilter" class="form-select me-3" style="width: 150px;">
                        <option value="">All</option>
                        <option value="Active">Active</option>
                        <option value="InActive">Inactive</option>
                        <option value="Completed">Completed</option>
                    </select>
                    <a href="<?= site_url('students/learning_adda/add') ?>" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-plus-circle-outline me-1"></i> Add Learning Adda
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="learningAddaTable" class="table table-bordered table-striped">
<thead>
    <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Course</th>
        <th>Email</th>
        <th>Location</th>
        <th>Mentor</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    <?php if (!empty($students)): ?>
        <?php $i = 1; foreach ($students as $stu): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($stu['First_Name'] . ' ' . $stu['Last_Name']) ?></td>
                <td><?= esc($stu['Current_Education_level']) ?></td>
                <td><?= esc($stu['Email_Id']) ?></td>
                <td><?= esc($stu['Village_City'] . ', ' . $stu['State']) ?></td>
                <td><?= esc($stu['Mentor_Name'] ?? 'N/A') ?></td>
                <td>
                    <?php
                    $status = $stu['Student_Status'];
                    $color = match ($status) {
                        'Active'   => '#28a745',
                        'InActive' => '#dc3545',
                        'Completed'=> '#ffc107',
                        default    => '#6c757d',
                    };
                    ?>
                    <span style="background-color: <?= $color ?>; color: white; padding: 5px 10px; border-radius: 5px;">
                        <?= esc($status) ?>
                    </span>
                </td>
                <td>
                    <a href="<?= site_url('students/learning_adda/view/' . $stu['Student_Id']) ?>" class="btn btn-info btn-sm" title="View"><i class="mdi mdi-eye"></i></a>
                    <a href="<?= site_url('students/learning_adda/edit/' . $stu['Student_Id']) ?>" class="btn btn-warning btn-sm" title="Edit"><i class="mdi mdi-pencil"></i></a>
                    <a href="<?= site_url('students/learning_adda/delete/' . $stu['Student_Id']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" title="Delete"><i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8" class="text-center">No students found.</td>
        </tr>
    <?php endif; ?>
</tbody>
                        </table>
                    </div>

                    <!-- Mentor Details Table -->
                     <hr class="my-4">
<h4 class="mt-5">Mentor Details</h4>
<div class="table-responsive">
    <table id="mentorTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Mentor Name</th>
                <th>Mentor Category</th>
                <th>Member Type</th>
                <th>Status</th>
                <th>From Date</th>
                <th>To Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mentors)): ?>
                <?php $i = 1; foreach ($mentors as $m): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= esc($m['Mentor_Name']) ?></td>
                        <td><?= esc($m['Mentor_Category']) ?></td>
                        <td><?= esc($m['Mentor_Type']) ?></td>
                        <td>
                    <?php
                    $status = $m['Mentor_Status'];
                    $color = match ($status) {
                        'Active'   => '#28a745',
                        'InActive' => '#dc3545',
                        'Completed'=> '#ffc107',
                        default    => '#6c757d',
                    };
                    ?>
                    <span style="background-color: <?= $color ?>; color: white; padding: 5px 10px; border-radius: 5px;">
                        <?= esc($status) ?>
                    </span>
                </td>
                        <td><?= esc($m['Mentor_From_Date']) ?></td>
                        <td><?= esc($m['Mentor_To_Date'] ?? 'N/A') ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="7" class="text-center">No mentor records found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
    </div>
</div>

<?= view('includes/footer'); ?>

<!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#vijetaasTable').DataTable({
        paging: true,
        searching: true,
        ordering: true,
        info: true,
        columnDefs: [
    {
        targets: 6, // Status column index
        render: function(data, type, row) {
            if (type === 'filter' || type === 'sort') {
                return $('<div>').html(data).text().trim();
            }
            return data;
        }
    }
]

$('#statusFilter').on('change', function() {
    var selected = $(this).val();
    table.column(6) // Status column index
         .search(selected ? '^' + selected + '$' : '', true, false)
         .draw();
});
</script>