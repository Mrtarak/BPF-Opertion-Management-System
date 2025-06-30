<?= view('includes/header'); ?>
<?= view('includes/navbar'); ?>

<div class="container-fluid page-body-wrapper">
  <?= view('includes/sidebar'); ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- back button -->
                     <button class="btn btn-secondary mb-3" onclick="window.history.back()">
                      <i class="mdi mdi-arrow-left"></i> Back
                    </button>
                    <!-- breadcrumb navigation -->
                    <nav aria-label="breadcrumb" class="mb-3">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../index.html">Dashboard</a></li>
                        <li class="breadcrumb-item">Manage Users</li>
                        <li class="breadcrumb-item active" aria-current="page">Vijetaas</li>
                      </ol>
                    </nav>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="card-title mb-0">Vijeetas Participants</h4>
                      <a href="../forms/AddStudents/add_vijetaas_student.html" class="btn btn-success btn-sm">
                        <i class="mdi mdi-account-plus"></i> Add New Student
                      </a>
                    </div>
                    <p class="card-description">Manage Vijetaas Students</p>
                  </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Mail Id</th>
                           <th>Status</th>
                           <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>Male</td>
                            <td>12 May 2017</td>
                            <td>jacob@gmail.com</td>
                            <td><label class="badge badge-success">Active</label></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                                <a href="../forms/EditStudents/edit_Vijetaas_student.html" class="btn btn-warning btn-sm" title="Edit">
                                  <i class="mdi mdi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()" title="Delete">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                           </tr>
                          <tr>
                            <td>Messsy</td>
                            <td>Female</td>
                            <td>15 May 2017</td>
                            <td>messsy@gmail.com</td>
                            <td><label class="badge badge-danger">InActive</label></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                                <a href="../forms/EditStudents/edit_Vijetaas_student.html" class="btn btn-warning btn-sm" title="Edit">
                                  <i class="mdi mdi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()" title="Delete">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>                         
                        </tr>
                          <tr>
                            <td>John</td>
                            <td>Male</td>
                            <td>14 May 2017</td>
                            <td>john@gmail.com</td>
                            <td><label class="badge badge-success">Active</label></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                                <a href="../forms/EditStudents/edit_Vijetaas_student.html" class="btn btn-warning btn-sm" title="Edit">
                                  <i class="mdi mdi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()" title="Delete">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Peter</td>
                            <td>Male</td>
                            <td>16 May 2017</td>
                            <td>peter@gmail.com</td>
                            <td><label class="badge badge-success">Active</label></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                                <a href="../forms/EditStudents/edit_Vijetaas_student.html" class="btn btn-warning btn-sm" title="Edit">
                                  <i class="mdi mdi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()" title="Delete">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Dave</td>
                            <td>Female</td>
                            <td>20 May 2017</td>
                            <td>dave@gmail.com</td>
                            <td><label class="badge badge-danger">InActive</label></td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" title="View">
                                    <i class="mdi mdi-eye"></i>
                                </button>
                                <a href="../forms/EditStudents/edit_Vijetaas_student.html" class="btn btn-warning btn-sm" title="Edit">
                                  <i class="mdi mdi-pencil"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete()" title="Delete">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
